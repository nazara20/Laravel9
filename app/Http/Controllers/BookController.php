<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();

        return view('books.index', compact('books'));
    }

    public function detail($slug)
    {
        $books = Book::whereSlug($slug)->firstOrFail();

        return view('books.detail', compact('books'));
    }
}
