<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use App\Models\DiscountCode;
use Illuminate\Http\Request;

class DemoRequestController extends Controller
{
    /**
     * Store a demo request.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'venue_type' => 'nullable|string|max:100',
            'message' => 'nullable|string|max:2000',
            'discount_code' => 'nullable|string|max:100',
            'product_source' => 'nullable|string|max:255',
            'page_url' => 'nullable|string|max:500',
        ]);

        $discountCodeValue = null;

        // Validate discount code if provided
        if (!empty($validated['discount_code'])) {
            $discountCode = DiscountCode::where('code', strtoupper($validated['discount_code']))->first();

            if (!$discountCode) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid discount code. Please check and try again.',
                ], 422);
            }

            if (!$discountCode->isValid()) {
                return response()->json([
                    'success' => false,
                    'message' => 'This discount code is no longer valid or has expired.',
                ], 422);
            }

            $discountCodeValue = $discountCode->code;
            $discountCode->incrementUsage();
        }

        $demoRequest = DemoRequest::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'company' => $validated['company'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'venue_type' => $validated['venue_type'] ?? null,
            'message' => $validated['message'] ?? null,
            'discount_code' => $discountCodeValue,
            'product_source' => $validated['product_source'] ?? null,
            'page_url' => $validated['page_url'] ?? null,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your demo request has been submitted successfully. We will contact you shortly.',
        ]);
    }

    /**
     * Validate a discount code (AJAX endpoint).
     */
    public function validateCode(Request $request)
    {
        $code = $request->input('code');

        if (empty($code)) {
            return response()->json([
                'valid' => true, // Empty code is valid (optional field)
                'message' => '',
            ]);
        }

        $discountCode = DiscountCode::where('code', strtoupper($code))->first();

        if (!$discountCode) {
            return response()->json([
                'valid' => false,
                'message' => 'Invalid discount code.',
            ]);
        }

        if (!$discountCode->isValid()) {
            return response()->json([
                'valid' => false,
                'message' => 'This code is expired or no longer valid.',
            ]);
        }

        return response()->json([
            'valid' => true,
            'message' => 'Valid code! ✓',
        ]);
    }
}
