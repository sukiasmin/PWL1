<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);
    
        // Hash password sebelum disimpan
        $validatedData['password'] = bcrypt($validatedData['password']);
    
        $user = User::create($validatedData);
    
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ]);
    }
        public function index()
    {
        return response()->json(User::all());
    }

    

}
