<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $currentQueue = Booking::where('status', 'active')->count();
        $completedAppointments = Booking::where('status', 'completed')->count();
        $canceledAppointments = Booking::where('status', 'cancelled')->count();

        return view('booking', compact('currentQueue', 'completedAppointments', 'canceledAppointments'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $bookingData = [
            'user_id' => $user->id,
            'status' => 'active',
            // Add other booking data (date, time, etc.)
        ];

        // Save the booking to the database
        Booking::create($bookingData);

        // You may want to redirect back or to a confirmation page
        return redirect()->back()->with('success', 'Booking successful!');
    }
}
