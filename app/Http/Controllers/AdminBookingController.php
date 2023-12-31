<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('user')->get();
        $currentQueue = Booking::where('status', 'active')->count();
        $completedAppointments = Booking::where('status', 'completed')->count();
        $canceledAppointments = Booking::where('status', 'cancelled')->count();

        return view('admin.booking', compact('bookings', 'currentQueue', 'completedAppointments', 'canceledAppointments'));
    }

    public function update($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->update([
            'status' => request('status'),
        ]);

        return redirect()->route('admin.booking')->with('success', 'Booking status updated successfully.');
    }
}
