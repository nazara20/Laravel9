<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::isUser()->paginate(5);

        return view('users.index', compact('user'));
    }
}
