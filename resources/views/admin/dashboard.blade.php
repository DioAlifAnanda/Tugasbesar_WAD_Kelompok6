{{-- resources/views/admin/dashboard.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            {{-- Admin Stats Section --}}
            <div class="grid grid-cols-3 gap-4">
                {{-- Total Users --}}
                <div class="bg-purple-500 dark:bg-purple-700 p-6 rounded-lg shadow-md text-center">
                    <p class="text-white text-2xl font-semibold mb-2">{{ $totalUsers }}</p>
                    <strong class="text-white">Total Users</strong>
                </div>

                {{-- Total Articles --}}
                <div class="bg-yellow-500 dark:bg-yellow-700 p-6 rounded-lg shadow-md text-center">
                    <p class="text-white text-2xl font-semibold mb-2">{{ $totalArticles }}</p>
                    <strong class="text-white">Total Articles</strong>
                </div>

                {{-- Total Medicine --}}
                <div class="bg-green-500 dark:bg-green-700 p-6 rounded-lg shadow-md text-center">
                    <p class="text-white text-2xl font-semibold mb-2">{{ $totalMedicines }}</p>
                    <strong class="text-white">Total Medicine</strong>
                </div>
            </div>

            {{-- Admin Features Section --}}
            <div class="">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Features</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                    {{-- Admin Feature 1 - User Management --}}
                    <a href="{{ route('admin.user') }}" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                        <img src="{{ asset('user.png') }}" alt="User Management" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">User Management</h3>
                    </a>

                    {{-- Admin Feature 2 - Booking Management --}}
                    <a href="{{ route('admin.booking') }}" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                        <img src="{{ asset('article.png') }}" alt="Booking Management" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Booking Management</h3>
                    </a>

                    {{-- Admin Feature 3 - Schedule Management --}}
                    <a href="{{ route('admin.schedule') }}" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                        <img src="{{ asset('schedule.png') }}" alt="Schedule Management" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Schedule Management</h3>
                    </a>

                    {{-- Admin Feature 4 - Medicine Management --}}
                    <a href="{{ route('admin.medicine') }}" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                        <img src="{{ asset('medicine.png') }}" alt="Medicine Management" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Medicine Management</h3>
                    </a>
                    
                    {{-- Admin Feature 5 - Article Management --}}
                    <a href="{{ route('admin.article') }}" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6 text-center">
                        <img src="{{ asset('article.png') }}" alt="Article Management" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Article Management</h3>
                    </a>

                    {{-- Add more admin features as needed --}}
                </div>
            </div>

            {{-- Recent Activities Section --}}
            <div class="">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Recent Activities</h2>
                    <a href="" class="text-blue-500 hover:underline">See more</a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    {{-- Activity 1 --}}
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                        <h3 class="text-xl font-semibold mb-2">Admin performed action X</h3>
                        <p class="text-gray-700 mb-4">Description of the action...</p>
                        <span class="text-gray-500">2 hours ago</span>
                    </div>

                    {{-- Activity 2 --}}
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                        <h3 class="text-xl font-semibold mb-2">Admin performed action Y</h3>
                        <p class="text-gray-700 mb-4">Description of the action...</p>
                        <span class="text-gray-500">1 day ago</span>
                    </div>

                    {{-- Activity 3 --}}
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                        <h3 class="text-xl font-semibold mb-2">Admin performed action Z</h3>
                        <p class="text-gray-700 mb-4">Description of the action...</p>
                        <span class="text-gray-500">3 days ago</span>
                    </div>

                    {{-- Add more activities as needed --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Admin Footer Section --}}
    <footer class="bg-gray-800 text-white p-4">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
        </div>
    </footer>
</x-app-layout>
