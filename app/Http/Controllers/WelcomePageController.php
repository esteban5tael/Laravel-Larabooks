<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
    //

    public function __invoke()
    {
        $books = Book::query()
        ->with(['authors', 'genres', 'reviews'])
        ->withCount('reviews')
        ->withAvg('reviews','stars')
        ->orderByDesc('reviews_count')
            ->Paginate(4);
        //   dd($books);
        return view('index', compact('books'));
    }
}
