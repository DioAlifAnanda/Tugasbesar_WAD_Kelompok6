<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-semibold mb-4">{{ $article->title }}</h1>
                <p class="text-gray-500 mb-2">{{ $article->category }}</p>
                <p class="text-gray-500 mb-2">{{ $article->created_at->format('M d, Y') }}</p>
                <img src="{{ asset('images/article/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-64 object-cover object-center mb-4 rounded">
                <p class="text-gray-700 mb-4">{{ $article->description }}</p>
                <!-- Add any additional information or styling as needed -->
            </div>
        </div>
    </div>
</x-app-layout>
