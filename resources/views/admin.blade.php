{{-- resources/views/admin/dashboard.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            {{-- Booking Section --}}
            <div class="p-6 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Booking Management</h2>

                {{-- Tabel Booking --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full border bg-white dark:bg-gray-800">
                        <thead>
                            <tr>
                                <th class="border-b py-2">ID</th>
                                <th class="border-b py-2">User</th>
                                <th class="border-b py-2">Doctor</th>
                                <th class="border-b py-2">Date</th>
                                <th class="border-b py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Tampilkan data booking --}}
                            <tr>
                                <td class="border-b py-2">1</td>
                                <td class="border-b py-2">John Doe</td>
                                <td class="border-b py-2">Dr. Smith</td>
                                <td class="border-b py-2">2023-01-01</td>
                                <td class="border-b py-2">Confirmed</td>
                            </tr>
                            {{-- Tambahkan baris lain sesuai kebutuhan --}}
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Schedule Section --}}
            <div class="p-6 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Schedule Management</h2>

                {{-- Tabel Schedule --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full border bg-white dark:bg-gray-800">
                        <thead>
                            <tr>
                                <th class="border-b py-2">ID</th>
                                <th class="border-b py-2">Doctor</th>
                                <th class="border-b py-2">Day</th>
                                <th class="border-b py-2">Time</th>
                                <th class="border-b py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Tampilkan data schedule --}}
                            <tr>
                                <td class="border-b py-2">1</td>
                                <td class="border-b py-2">Dr. Smith</td>
                                <td class="border-b py-2">Monday</td>
                                <td class="border-b py-2">09:00 AM - 12:00 PM</td>
                                <td class="border-b py-2">Active</td>
                            </tr>
                            {{-- Tambahkan baris lain sesuai kebutuhan --}}
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Medicine Section --}}
            <div class="p-6 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Medicine Management</h2>

                {{-- Tabel Medicine --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full border bg-white dark:bg-gray-800">
                        <thead>
                            <tr>
                                <th class="border-b py-2">ID</th>
                                <th class="border-b py-2">Name</th>
                                <th class="border-b py-2">Description</th>
                                <th class="border-b py-2">Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Tampilkan data medicine --}}
                            <tr>
                                <td class="border-b py-2">1</td>
                                <td class="border-b py-2">Paracetamol</td>
                                <td class="border-b py-2">Pain reliever</td>
                                <td class="border-b py-2">100</td>
                            </tr>
                            {{-- Tambahkan baris lain sesuai kebutuhan --}}
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Article Section --}}
            <div class="p-6 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Article Management</h2>

                {{-- Tabel Article --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full border bg-white dark:bg-gray-800">
                        <thead>
                            <tr>
                                <th class="border-b py-2">ID</th>
                                <th class="border-b py-2">Title</th>
                                <th class="border-b py-2">Author</th>
                                <th class="border-b py-2">Published Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Tampilkan data article --}}
                            <tr>
                                <td class="border-b py-2">1</td>
                                <td class="border-b py-2">The Importance of Healthy Living</td>
                                <td class="border-b py-2">Admin</td>
                                <td class="border-b py-2">2023-01-01</td>
                            </tr>
                            {{-- Tambahkan baris lain sesuai kebutuhan --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
