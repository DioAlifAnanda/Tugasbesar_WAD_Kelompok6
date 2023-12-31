<!-- resources/views/admin/users.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">{{ __('User List') }}</h3>

                    <div class="mb-4 flex">
                        <a href="{{ route('admin.user', ['role' => 'user']) }}" class="mr-4 px-3 py-1 rounded-md @if($role === 'user') bg-blue-500 text-white @else bg-gray-200 @endif">User List</a>
                        <a href="{{ route('admin.user', ['role' => 'admin']) }}" class="px-3 py-1 rounded-md @if($role === 'admin') bg-blue-500 text-white @else bg-gray-200 @endif">Admin List</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300 rounded-md overflow-hidden">
                            <!-- ... Header Rows ... -->
                            <thead>
                                <tr>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('No') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Name') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Email') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Created At') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <!-- ... Body Rows ... -->
                            <tbody>
                                @foreach($users as $key => $user)
                                    <tr>
                                        <td class="py-3 px-4 border-b">{{ $key + 1 }}</td>
                                        <td class="py-3 px-4 border-b">{{ $user->name }}</td>
                                        <td class="py-3 px-4 border-b">{{ $user->email }}</td>
                                        <td class="py-3 px-4 border-b">{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td class="py-3 px-4 border-b">
                                            @if (!$isAdmin)
                                                <form action="{{ route('admin.user', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:underline focus:outline-none">Delete</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
