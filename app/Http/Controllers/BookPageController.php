<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class BookPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        // dd(request('search'));
        $books = Book::query()
            ->with(['authors', 'genres', 'reviews'])
            ->withCount('reviews')
            ->withAvg('reviews', 'stars')
            ->orderByDesc('reviews_avg_stars')
            ->when(request('search'),function(Builder $query,$value){
                $query->whereRaw('books.name LIKE ?',["%{$value}%"])
                ->orWhereHas('authors',function(Builder $query)use($value){
                    $query->whereRaw('authors.name LIKE ?',["%{$value}%"]);
                });
            })
            // ->toRawSql()
            ->paginate(10)
            ;
// dd($books);
        return view('books', compact('books'));
    }
}
