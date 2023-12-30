<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Filter dan Sort --}}
            <div class="flex justify-between items-center mb-6">
                <div class="w-1/5">
                    <label for="filter" class="block text-gray-700 text-sm font-bold mb-2">
                        Filter by Category:
                    </label>
                    <select name="filter" id="filter" class="w-full rounded border border-gray-300 p-2">
                        <option value="all">All</option>
                        <option value="health">Health</option>
                        <option value="lifestyle">Lifestyle</option>
                        {{-- Tambahkan kategori lain sesuai kebutuhan --}}
                    </select>
                </div>
                <div class="w-1/5 ml-4">
                    <label for="sort" class="block text-gray-700 text-sm font-bold mb-2">
                        Sort by:
                    </label>
                    <select name="sort" id="sort" class="w-full rounded border border-gray-300 p-2">
                        <option value="latest">Latest</option>
                        <option value="oldest">Oldest</option>
                        {{-- Tambahkan opsi pengurutan lainnya sesuai kebutuhan --}}
                    </select>
                </div>
            </div>

            {{-- Artikel Column --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                {{-- Artikel 1 --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                    <img src="{{ asset('placeholder-image.jpg') }}" alt="Article 1" class="w-full h-32 object-cover object-center mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">The Importance of Regular Exercise</h3>
                    <p class="text-gray-700 mb-4">Regular exercise has numerous benefits for both physical and mental health...</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more</a>
                </div>

                {{-- Artikel 2 --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                    <img src="{{ asset('placeholder-image.jpg') }}" alt="Article 2" class="w-full h-32 object-cover object-center mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Exploring the Wonders of Nature</h3>
                    <p class="text-gray-700 mb-4">Nature has a profound impact on our well-being. Spending time outdoors, surrounded by trees...</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more</a>
                </div>

                {{-- Artikel 3 --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                    <img src="{{ asset('placeholder-image.jpg') }}" alt="Article 3" class="w-full h-32 object-cover object-center mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Tips for a Productive Workday</h3>
                    <p class="text-gray-700 mb-4">Being productive at work is crucial for achieving professional goals. Learn effective time...</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more</a>
                </div>

                {{-- Artikel 4 --}}
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                    <img src="{{ asset('placeholder-image.jpg') }}" alt="Article 4" class="w-full h-32 object-cover object-center mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Mindfulness Meditation for Stress Reduction</h3>
                    <p class="text-gray-700 mb-4">Mindfulness meditation is a powerful tool for reducing stress and promoting mental well-being...</p>
                    <a href="#" class="text-blue-500 hover:underline">Read more</a>
                </div>
                {{-- Tambahkan artikel lain sesuai kebutuhan --}}
            </div>
        </div>
    </div>
</x-app-layout>
