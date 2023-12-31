{{-- resources/views/home.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            {{-- Jumbotron Section --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100">
                    <img src="jumbotron.jpg" alt="Jumbotron Image" class="w-full h-64 object-cover object-center sm:h-96">
                </div>
            </div>

            {{-- Fitur Section --}}
            <div class="">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Features</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    {{-- Fitur 1 - Booking Antrian --}}
                    <a href="{{ route('booking') }}" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6 text-center">
                        <img src="{{ asset('booking.png') }}" alt="Booking Antrian" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Booking Antrian</h3>
                    </a>

                    {{-- Fitur 2 - Schedule Doktor --}}
                    <a href="{{ route('schedule') }}" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6 text-center">
                        <img src="{{ asset('schedule.png') }}" alt="Schedule Doktor" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Schedule Doktor</h3>
                    </a>

                    {{-- Fitur 3 - Medicine --}}
                    <a href="{{ route('medicine') }}" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6 text-center">
                        <img src="{{ asset('medicine.png') }}" alt="Medicine" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Medicine Recommendations</h3>
                    </a>


                    {{-- Fitur 4 - Article --}}
                    <a href="{{ route('article') }}" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6 text-center">
                        <img src="{{ asset('article.png') }}" alt="Article" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Health Articles</h3>
                    </a>
                    {{-- Tambahkan fitur lain sesuai kebutuhan --}}
                </div>
            </div>

            {{-- Article Section --}}
            <div class="">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Latest Articles</h2>
                    <a href="{{ route('article') }}" class="text-blue-500 hover:underline">See more</a>
                </div>

                {{-- Artikel Column --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @php $articleCount = 0; @endphp
                    @forelse ($articles as $article)
                    @if ($articleCount < 4)
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                            <img src="images/article/{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-32 object-cover object-center mb-4 rounded">
                            <h3 class="text-xl font-semibold mb-2">{{ $article->title }}</h3>
                            <p class="text-gray-700 mb-4">{{ $article->excerpt }}...</p>
                            <a href="{{ route('article', $article->id) }}" class="text-blue-500 hover:underline">Read more</a>
                        </div>
                        @php $articleCount++; @endphp
                    @endif
                    @empty
                        <p class="text-gray-700">No articles found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
