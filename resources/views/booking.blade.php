<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Booking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            <!-- Appointment Statistics -->
            <div class="grid grid-cols-3 gap-4">
                <!-- Current Queue -->
                <div class="bg-blue-500 dark:bg-blue-700 p-6 rounded-lg shadow-md text-center">
                    <p class="text-white text-2xl font-semibold mb-2">{{ $currentQueue }}</p>
                    <strong class="text-white">Current Queue</strong>
                </div>

                <!-- Completed Appointments -->
                <div class="bg-green-500 dark:bg-green-700 p-6 rounded-lg shadow-md text-center">
                    <p class="text-white text-2xl font-semibold mb-2">{{ $completedAppointments }}</p>
                    <strong class="text-white">Completed Appointments</strong>
                </div>

                <!-- Canceled Appointments -->
                <div class="bg-red-500 dark:bg-red-700 p-6 rounded-lg shadow-md text-center">
                    <p class="text-white text-2xl font-semibold mb-2">{{ $canceledAppointments }}</p>
                    <strong class="text-white">Canceled Appointments</strong>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="bg-white dark:bg-gray-800 shadow p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Book an Appointment</h3>

                <!-- Your booking form goes here -->
                <!-- Add form fields like date, time, etc. -->

                @auth
                    <!-- If the user is authenticated, show the Book Now button -->
                    <button type="submit" id="bookNowBtn" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Book Now
                    </button>
                @else
                    <!-- If the user is not authenticated, show a login link -->
                    <p class="mt-4">Please <a href="{{ route('login') }}"><b>login</b></a> to book an appointment.</p>
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>
