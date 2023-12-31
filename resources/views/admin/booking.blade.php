<!-- resources/views/admin/bookings.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking Management') }}
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

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">{{ __('Booking List') }}</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300 rounded-md overflow-hidden">
                            <!-- ... Header Rows ... -->
                            <thead>
                                <tr>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('No') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('User Name') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Status') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Created At') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <!-- ... Body Rows ... -->
                            <tbody>
                                @forelse($bookings as $key => $booking)
                                    <tr>
                                        <td class="py-3 px-4 border-b">{{ $key + 1 }}</td>
                                        <td class="py-3 px-4 border-b">{{ $booking->user->name }}</td>
                                        <td class="py-3 px-4 border-b">{{ ucfirst($booking->status) }}</td>
                                        <td class="py-3 px-4 border-b">{{ $booking->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td class="py-3 px-4 border-b">
                                            <form action="{{ route('admin.booking.update', $booking->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')

                                                <select name="status" onchange="this.form.submit()" style="min-width: 150px;" class="text-gray-600 hover:underline focus:outline-none p-2 rounded-md">
                                                    <option value="active" {{ $booking->status === 'active' ? 'selected' : '' }}>Active</option>
                                                    <option value="completed" {{ $booking->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                                    <option value="cancelled" {{ $booking->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                </select>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-3 px-4 border-b text-center">{{ __('No bookings found.') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <!-- ... Body Rows ... -->

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
