<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomePageController extends Controller
{
    //

    public function __invoke()
    {
        $featuredBooks = Book::query()
            ->with(['authors', 'genres', 'reviews'])
            ->withCount('reviews')
            ->withAvg('reviews', 'stars')
            ->orderByDesc('reviews_count')
            ->Paginate(4);

        $reviews = Review::query()
            ->where('is_approved', '=', 1)
            ->with(['book', 'user'])
            // ->whereIsApproved(1)
            // ->where('stars','=',5)
            ->whereStars(5)
            ->get()
            ->random(4);

        $books = Book::query()
            ->with(['authors', 'genres', 'reviews'])
            ->withCount('reviews')
            ->withAvg('reviews', 'stars')
            ->orderByDesc('reviews_avg_stars')
            ->take(8)
            ->get();
        // dd($books);
        return view('index', compact('featuredBooks', 'reviews', 'books'));
    }
}
