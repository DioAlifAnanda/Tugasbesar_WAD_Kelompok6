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
                        <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                {{-- Tampilkan hasil pencarian dalam bentuk card --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                    <img src="{{ asset('placeholder-image.jpg') }}" alt="Medicine 1" class="mb-4 w-full h-32 object-cover object-center">
                    <strong>Medicine 1</strong>
                    <p class="text-gray-700">Description of Medicine 1.</p>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                    <img src="{{ asset('placeholder-image.jpg') }}" alt="Medicine 2" class="mb-4 w-full h-32 object-cover object-center">
                    <strong>Medicine 2</strong>
                    <p class="text-gray-700">Description of Medicine 2.</p>
                </div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                    <img src="{{ asset('placeholder-image.jpg') }}" alt="Medicine 3" class="mb-4 w-full h-32 object-cover object-center">
                    <strong>Medicine 3</strong>
                    <p class="text-gray-700">Description of Medicine 3.</p>
                </div>
                {{-- Tambahkan card untuk setiap obat sesuai kebutuhan --}}
            </div>
        </div>
    </div>
</x-app-layout>
