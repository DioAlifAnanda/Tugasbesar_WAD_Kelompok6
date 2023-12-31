<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Schedule') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            <div class="bg-white dark:bg-gray-800 shadow p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Dr. John Doe</h3>
                
                <ul class="mt-4">
                    <li class="mb-2">
                        Monday - 9:00 AM to 12:00 PM
                    </li>
                    <li class="mb-2">
                        Wednesday - 2:00 PM to 5:00 PM
                    </li>
                </ul>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Dr. Jane Smith</h3>
                
                <ul class="mt-4">
                    <li class="mb-2">
                        Tuesday - 10:00 AM to 1:00 PM
                    </li>
                    <li class="mb-2">
                        Thursday - 3:00 PM to 6:00 PM
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
