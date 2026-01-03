<?php

namespace App\Orchid\Screens;

use App\Models\ConsultationBooking;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\TextArea;
use Illuminate\Http\Request;

class ConsultationBookingListScreen extends Screen
{
    /**
     * Query data.
     */
    public function query(): iterable
    {
        return [
            'bookings' => ConsultationBooking::orderBy('created_at', 'desc')->paginate(20),
        ];
    }

    /**
     * Display header name.
     */
    public function name(): ?string
    {
        return 'Consultation Bookings';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'All consultation booking requests from the Applications page.';
    }

    /**
     * Button commands.
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     */
    public function layout(): iterable
    {
        return [
            Layout::table('bookings', [
                TD::make('id', 'ID')
                    ->sort()
                    ->width(60),

                TD::make('is_read', 'Status')
                    ->width(80)
                    ->render(function (ConsultationBooking $booking) {
                        if (!$booking->is_read) {
                            return '<span style="background: #dc3545; color: white; padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: 600;">NEW</span>';
                        }
                        return '<span style="color: #28a745;">Read</span>';
                    }),

                TD::make('name', 'Name')
                    ->sort()
                    ->filter(Input::make()),

                TD::make('email', 'Email')
                    ->sort()
                    ->filter(Input::make()),

                TD::make('application_type', 'Application')
                    ->width(200)
                    ->render(function (ConsultationBooking $booking) {
                        return '<span title="' . e($booking->application_type) . '">' . e(\Str::limit($booking->application_type, 30)) . '</span>';
                    }),

                TD::make('preferred_date', 'Date')
                    ->sort()
                    ->render(function (ConsultationBooking $booking) {
                        return $booking->preferred_date->format('M d, Y');
                    }),

                TD::make('preferred_time', 'Time')
                    ->width(100),

                TD::make('created_at', 'Submitted')
                    ->sort()
                    ->render(function (ConsultationBooking $booking) {
                        return $booking->created_at->format('M d, Y H:i');
                    }),

                TD::make('actions', 'Actions')
                    ->align(TD::ALIGN_CENTER)
                    ->width(150)
                    ->render(function (ConsultationBooking $booking) {
                        return Group::make([
                            ModalToggle::make('View')
                                ->modal('viewDetailsModal')
                                ->method('markAsRead')
                                ->asyncParameters(['id' => $booking->id])
                                ->icon('eye'),

                            Button::make('Delete')
                                ->icon('trash')
                                ->confirm('Are you sure you want to delete this booking?')
                                ->method('delete', ['id' => $booking->id]),
                        ]);
                    }),
            ]),

            Layout::modal('viewDetailsModal', Layout::rows([
                Input::make('booking.name')
                    ->title('Name')
                    ->readonly(),

                Input::make('booking.email')
                    ->title('Email')
                    ->readonly(),

                Input::make('booking.phone')
                    ->title('Phone')
                    ->readonly(),

                Input::make('booking.company')
                    ->title('Company')
                    ->readonly(),

                Input::make('booking.application_type')
                    ->title('Application')
                    ->readonly(),

                Input::make('booking.preferred_date_formatted')
                    ->title('Preferred Date')
                    ->readonly(),

                Input::make('booking.preferred_time')
                    ->title('Preferred Time')
                    ->readonly(),

                TextArea::make('booking.message')
                    ->title('Message')
                    ->rows(3)
                    ->readonly(),

                Input::make('booking.created_at_formatted')
                    ->title('Submitted Date')
                    ->readonly(),
            ]))
                ->title('Consultation Booking Details')
                ->async('asyncGetBookingDetails')
                ->withoutApplyButton(),
        ];
    }

    /**
     * Get booking details for modal.
     */
    public function asyncGetBookingDetails(Request $request): array
    {
        $booking = ConsultationBooking::find($request->get('id'));

        if ($booking) {
            $booking->preferred_date_formatted = $booking->preferred_date->format('M d, Y');
            $booking->created_at_formatted = $booking->created_at->format('M d, Y H:i:s');
        }

        return [
            'booking' => $booking,
        ];
    }

    /**
     * Mark as read when opening modal.
     */
    public function markAsRead(Request $request)
    {
        $booking = ConsultationBooking::find($request->get('id'));
        if ($booking) {
            $booking->is_read = true;
            $booking->save();
        }
    }

    /**
     * Delete a booking.
     */
    public function delete(Request $request)
    {
        $booking = ConsultationBooking::findOrFail($request->get('id'));
        $booking->delete();

        Toast::info('Consultation booking deleted.');

        return redirect()->route('platform.consultation-bookings');
    }
}
