<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all(); // Mengambil semua artikel dari database

        return view('medicine', compact('medicines'));
    }
    
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Use $keyword to perform the search and retrieve relevant medicines

        // For example:
        $medicines = Medicine::where('name', 'like', '%' . $keyword . '%')
            ->orWhere('description', 'like', '%' . $keyword . '%')
            ->orWhere('disease', 'like', '%' . $keyword . '%')
            ->get();

        return view('medicine', compact('medicines'));
    }
    }

