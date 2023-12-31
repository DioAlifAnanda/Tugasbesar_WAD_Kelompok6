<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->get('role', 'user'); // Default to 'user' role if not specified
        $isAdmin = $role === 'admin';
        
        $users = User::where('is_admin', $isAdmin)->get();

        return view('admin.user', compact('users', 'isAdmin', 'role'));
    }
}
