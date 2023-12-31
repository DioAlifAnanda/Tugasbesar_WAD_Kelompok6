<!-- resources/views/medicine/search.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Medicine Search') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <div class="w-2/3">
                    <label for="keyword" class="block text-gray-700 text-sm font-bold mb-2">
                        Apa yang Anda rasakan hari ini?
                    </label>
                    <div>
                        <x-input-label for="update_password_current_password"/>
                        <x-text-input id="update_password_current_password" name="current_password" type="text" class="mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Cari Obat
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse ($medicines as $medicine)
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                        <img src="{{ asset('placeholder-image.jpg') }}" alt="{{ $medicine->name }}" class="mb-4 w-full h-32 object-cover object-center">
                        <strong>{{ $medicine->name }}</strong>
                        <p class="text-gray-700">Description of {{ $medicine->name }}.</p>
                    </div>
                @empty
                    <p class="text-gray-700">No medicines found.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
