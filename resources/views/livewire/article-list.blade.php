<div>
    {{-- Filter by Category --}}
    <div class="w-1/5">
        <label for="filter" class="block text-gray-700 text-sm font-bold mb-2">
            Filter by Category:
        </label>
        <select wire:model="category" id="filter" class="w-full rounded border border-gray-300 p-2">
            <option value="all">All</option>
            <option value="health">Health</option>
            <option value="lifestyle">Lifestyle</option>
            {{-- Tambahkan kategori lain sesuai kebutuhan --}}
        </select>
    </div>

    {{-- Sort by --}}
    <div class="w-1/5 ml-4">
        <label for="sort" class="block text-gray-700 text-sm font-bold mb-2">
            Sort by:
        </label>
        <select wire:model="sort" id="sort" class="w-full rounded border border-gray-300 p-2">
            <option value="latest">Latest</option>
            <option value="oldest">Oldest</option>
            {{-- Tambahkan opsi pengurutan lainnya sesuai kebutuhan --}}
        </select>
    </div>

    {{-- Artikel Column --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse ($articles as $article)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <img src="{{ asset('images/article/'.$article->image) }}" alt="{{ $article->title }}" class="w-full h-32 object-cover object-center mb-4 rounded">
                <h3 class="text-xl font-semibold mb-2">{{ $article->title }}</h3>
                <p class="text-gray-700 mb-4">{{ $article->excerpt }}...</p>
                <a href="{{ route('article', $article->id) }}" class="text-blue-500 hover:underline">Read more</a>
            </div>
        @empty
            <p class="text-gray-700">No articles found.</p>
        @endforelse
    </div>
</div>
