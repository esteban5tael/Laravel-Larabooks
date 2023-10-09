<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class BookPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Book $book)
    {
        //
        // dd($book);
        return view('books.show', compact('book'));
    }
}
