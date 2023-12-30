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
        $validatedData = $request->validate([
            'user_id' => 'required',
            'status' => 'required',
        ]);

        // Create a new Appointment instance with the validated data
        $appointment = new Appointment($validatedData);

        // Check if the user is authenticated
        if (Auth::check()) {
            // Associate the appointment with the authenticated user
            Auth::user()->appointments()->save($appointment);
        }

        // Save the appointment to the database
        $appointment->save();

        // Optionally, you can redirect the user or return a response
    }
}
