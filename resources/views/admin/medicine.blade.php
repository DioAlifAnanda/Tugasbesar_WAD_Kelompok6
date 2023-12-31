<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Medicine') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">{{ __('Medicine List') }}</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300 rounded-md overflow-hidden">
                            <!-- ... Header Rows ... -->
                            <thead>
                                <tr>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('No') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Medicine Name') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Description') }}</th>
                                    <th class="py-3 px-4 bg-gray-200 text-left">{{ __('Disease') }}</th>
                                </tr>
                            </thead>
                            <!-- ... Body Rows ... -->
                            <tbody>
                                @forelse($medicines as $key => $medicine)
                                    <tr>
                                        <td class="py-3 px-4 border-b">{{ $key + 1 }}</td>
                                        <td class="py-3 px-4 border-b">{{ $medicine->name }}</td>
                                        <td class="py-3 px-4 border-b">{{ $medicine->description }}</td>
                                        <td class="py-3 px-4 border-b">{{ $medicine->disease }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-3 px-4 border-b text-center">{{ __('No medicines found.') }}</td>
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
