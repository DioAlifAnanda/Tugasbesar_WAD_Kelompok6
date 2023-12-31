<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Mengambil semua artikel dari database

        return view('home', compact('articles'));
    }
}
