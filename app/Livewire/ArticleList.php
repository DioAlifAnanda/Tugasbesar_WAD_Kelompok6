<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleList extends Component
{

    public $category = 'All';
    public $sort = 'Latest';

    public function render()
    {
        $articles = Article::when($this->category != 'All', function ($query) {
            return $query->where('category', $this->category);
        })
        ->orderBy('created_at', $this->sort == 'Latest' ? 'desc' : 'asc')
        ->get();

        return view('livewire.article-list', compact('articles'));
    }
}
