<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class AdminMedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all(); // Mengambil semua artikel dari database

        return view('admin.medicine', compact('medicines'));
    }
}
