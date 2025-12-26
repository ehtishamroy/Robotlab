<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    /**
     * Handle newsletter subscription
     */
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please enter a valid email address.',
            ], 422);
        }

        $email = strtolower(trim($request->email));

        // Check if already subscribed
        $existingSubscriber = Subscriber::where('email', $email)->first();

        if ($existingSubscriber) {
            if ($existingSubscriber->status === 'active') {
                return response()->json([
                    'success' => false,
                    'message' => 'This email is already subscribed to our newsletter.',
                ], 409);
            }

            // Reactivate unsubscribed user
            $existingSubscriber->update([
                'status' => 'active',
                'subscribed_at' => now(),
                'mailchimp_synced' => false,
            ]);

            // Try to sync with Mailchimp
            $this->syncToMailchimp($existingSubscriber);

            return response()->json([
                'success' => true,
                'message' => 'Welcome back! You have been re-subscribed to our newsletter.',
            ]);
        }

        // Create new subscriber
        $subscriber = Subscriber::create([
            'email' => $email,
            'source' => $request->input('source', 'footer'),
            'status' => 'active',
            'subscribed_at' => now(),
            'mailchimp_synced' => false,
        ]);

        // Try to sync with Mailchimp
        $this->syncToMailchimp($subscriber);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for subscribing! You\'ll receive our latest updates soon.',
        ]);
    }

    /**
     * Sync subscriber to Mailchimp
     */
    protected function syncToMailchimp(Subscriber $subscriber)
    {
        $apiKey = config('services.mailchimp.api_key');
        $listId = config('services.mailchimp.list_id');
        $serverPrefix = config('services.mailchimp.server_prefix');

        // Skip if Mailchimp is not configured
        if (empty($apiKey) || empty($listId) || empty($serverPrefix)) {
            Log::info('Mailchimp not configured. Subscriber stored locally only.', [
                'email' => $subscriber->email
            ]);
            return false;
        }

        try {
            $url = "https://{$serverPrefix}.api.mailchimp.com/3.0/lists/{$listId}/members";

            $response = Http::withBasicAuth('anystring', $apiKey)
                ->post($url, [
                    'email_address' => $subscriber->email,
                    'status' => 'subscribed',
                    'source' => 'API - Website Footer',
                ]);

            if ($response->successful() || $response->status() === 400) {
                // 400 might mean already exists, which is fine
                $subscriber->update(['mailchimp_synced' => true]);
                Log::info('Subscriber synced to Mailchimp', ['email' => $subscriber->email]);
                return true;
            }

            Log::error('Mailchimp sync failed', [
                'email' => $subscriber->email,
                'response' => $response->body()
            ]);
            return false;

        } catch (\Exception $e) {
            Log::error('Mailchimp sync exception', [
                'email' => $subscriber->email,
                'error' => $e->getMessage()
            ]);
            return false;
        }
    }
}
