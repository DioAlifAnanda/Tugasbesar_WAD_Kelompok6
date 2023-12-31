<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use App\Models\Medicine;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Mengambil jumlah total user, artikel, dan obat dari model
        $totalUsers = User::count();
        $totalArticles = Article::count();
        $totalMedicines = Medicine::count();

        // Menampilkan view dengan mengirimkan data
        return view('admin.dashboard', compact('totalUsers','totalArticles', 'totalMedicines'));
    }
}
