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
        $book->loadAvg('reviews', 'stars')
            ->loadCount('reviews');

        $reviews = $book
            ->reviews()
            ->where('is_approved', '=', 1)
            ->paginate(5);
        //   dd($reviews);

        return view('books.show', compact('book', 'reviews'));
    }
}
