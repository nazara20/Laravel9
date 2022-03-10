<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::with('student')->isUser()->paginate(5);

        return view('users.index', compact('user'));
    }

    public function detail($id)
    {
        $users = User::whereId($id)->firstOrFail();
        $books = $users->books()->latest()->get();

        return view('users.detail', compact('users', 'books'));
    }
    
}
