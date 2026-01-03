<?php

namespace App\Http\Controllers;

use App\Models\ConsultationBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConsultationBookingController extends Controller
{
    /**
     * Store a consultation booking.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'application_type' => 'required|string|max:255',
            'preferred_date' => 'required|date|after_or_equal:today',
            'preferred_time' => 'required|string|max:50',
            'message' => 'nullable|string|max:2000',
        ]);

        $booking = ConsultationBooking::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'company' => $validated['company'] ?? null,
            'application_type' => $validated['application_type'],
            'preferred_date' => $validated['preferred_date'],
            'preferred_time' => $validated['preferred_time'],
            'message' => $validated['message'] ?? null,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        // Send email notification to admin
        $adminEmail = setting('admin_email', 'info@spectrumrobotics.ai');

        try {
            Mail::send([], [], function ($message) use ($booking, $adminEmail) {
                $message->to($adminEmail)
                    ->subject('New Consultation Booking: ' . $booking->application_type)
                    ->html("
                        <h2>New Consultation Booking Request</h2>
                        <p><strong>Application:</strong> {$booking->application_type}</p>
                        <p><strong>Name:</strong> {$booking->name}</p>
                        <p><strong>Email:</strong> {$booking->email}</p>
                        <p><strong>Phone:</strong> " . ($booking->phone ?: 'Not provided') . "</p>
                        <p><strong>Company:</strong> " . ($booking->company ?: 'Not provided') . "</p>
                        <p><strong>Preferred Date:</strong> {$booking->preferred_date->format('M d, Y')}</p>
                        <p><strong>Preferred Time:</strong> {$booking->preferred_time}</p>
                        <p><strong>Message:</strong> " . ($booking->message ?: 'No message') . "</p>
                    ");
            });
        } catch (\Exception $e) {
            // Log error but don't fail the booking
            \Log::error('Failed to send consultation booking email: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your consultation booking has been submitted. We will contact you to confirm your appointment.',
        ]);
    }
}
