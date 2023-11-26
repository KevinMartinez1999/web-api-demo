<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function store(Request $request)
    {
        return Book::create($request->all());
    }

    public function show(Request $request, Book $book)
    {
        return $book;
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return $book;
    }

    public function destroy(Request $request, Book $book)
    {
        $book->delete();
        return $book;
    }
}
