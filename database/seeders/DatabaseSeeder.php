<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\AuthorBook;
use App\Models\Book;
use App\Models\BookGenre;
use App\Models\Genre;
use App\Models\Review;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // administrador
        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@administrador.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'is_admin' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        // usuario
        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@usuario.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'is_admin' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        // libros
        for ($i = 1; $i < 6; $i++) {
            Book::create([
                'name' => 'Libro 0' . $i,
                'description' => 'Descripción del Libro 0' . $i,
                'image_path' => 'storage/assets/img/books/default.png',
                'published_at' => Carbon::now(),
                'pages' => '1' . $i,
            ]);
        }

        // autores
        for ($i = 1; $i < 4; $i++) {
            Author::create([
                'name' => 'Autor 0' . $i,
                'description' => 'Descripción del Autor 0' . $i,

            ]);
        }


        // generos
        for ($i = 1; $i < 6; $i++) {
            Genre::create([
                'name' => 'Género 0' . $i,
                'description' => 'Descripción del Género 0' . $i,

            ]);
        }

        // reseñas
        Review::create([
            'user_id' => 1,
            'book_id' => 1,
            'title' => 'Reseña Libro 1',
            'description' => 'Descripción Reseña Libro 1',
            'stars' => '1',
            'is_approved' => 1,
        ]);
        Review::create([
            'user_id' => 2,
            'book_id' => 1,
            'title' => 'Reseña Libro 1',
            'description' => 'Descripción Reseña Libro 1',
            'stars' => '3',
            'is_approved' => 1,
        ]);
        // 
        Review::create([
            'user_id' => 1,
            'book_id' => 2,
            'title' => 'Reseña Libro 2',
            'description' => 'Descripción Reseña Libro 2',
            'stars' => '3',
            'is_approved' => 1,
        ]);
        Review::create([
            'user_id' => 2,
            'book_id' => 2,
            'title' => 'Reseña Libro 2',
            'description' => 'Descripción Reseña Libro 2',
            'stars' => '5',
            'is_approved' => 1,
        ]);
        // 
        Review::create([
            'user_id' => 1,
            'book_id' => 3,
            'title' => 'Reseña Libro 3',
            'description' => 'Descripción Reseña Libro 3',
            'stars' => '2',
            'is_approved' => 1,
        ]);
        Review::create([
            'user_id' => 2,
            'book_id' => 3,
            'title' => 'Reseña Libro 3',
            'description' => 'Descripción Reseña Libro 3',
            'stars' => '4',
            'is_approved' => 1,
        ]);
        // 
        Review::create([
            'user_id' => 1,
            'book_id' => 4,
            'title' => 'Reseña Libro 4',
            'description' => 'Descripción Reseña Libro 4',
            'stars' => '4',
            'is_approved' => 1,
        ]);
        Review::create([
            'user_id' => 2,
            'book_id' => 4,
            'title' => 'Reseña Libro 4',
            'description' => 'Descripción Reseña Libro 4',
            'stars' => '1',
            'is_approved' => 1,
        ]);
        // 
        Review::create([
            'user_id' => 1,
            'book_id' => 5,
            'title' => 'Reseña Libro 5',
            'description' => 'Descripción Reseña Libro 5',
            'stars' => '4',
            'is_approved' => 1,
        ]);
        Review::create([
            'user_id' => 2,
            'book_id' => 5,
            'title' => 'Reseña Libro 5',
            'description' => 'Descripción Reseña Libro 5',
            'stars' => '5',
            'is_approved' => 1,
        ]);
        // 


        // autores libros

        AuthorBook::create([
            'author_id' => 3,
            'book_id' => 5,
        ]);
        AuthorBook::create([
            'author_id' => 1,
            'book_id' => 5,
        ]);
        AuthorBook::create([
            'author_id' => 1,
            'book_id' => 4,
        ]);
        AuthorBook::create([
            'author_id' => 2,
            'book_id' => 4,
        ]);
        AuthorBook::create([
            'author_id' => 2,
            'book_id' => 3,
        ]);
        AuthorBook::create([
            'author_id' => 3,
            'book_id' => 3,
        ]);
        AuthorBook::create([
            'author_id' => 3,
            'book_id' => 2,
        ]);
        AuthorBook::create([
            'author_id' => 2,
            'book_id' => 2,
        ]);
        AuthorBook::create([
            'author_id' => 2,
            'book_id' => 1,
        ]);
        AuthorBook::create([
            'author_id' => 1,
            'book_id' => 1,
        ]);

        // libros generos

        BookGenre::create([
            'book_id' => 1,
            'genre_id' => 1,
        ]);
        BookGenre::create([
            'book_id' => 1,
            'genre_id' => 2,
        ]);
        BookGenre::create([
            'book_id' => 2,
            'genre_id' => 2,
        ]);
        BookGenre::create([
            'book_id' => 2,
            'genre_id' => 3,
        ]);
        BookGenre::create([
            'book_id' => 3,
            'genre_id' => 3,
        ]);
        BookGenre::create([
            'book_id' => 3,
            'genre_id' => 4,
        ]);
        BookGenre::create([
            'book_id' => 4,
            'genre_id' => 4,
        ]);
        BookGenre::create([
            'book_id' => 4,
            'genre_id' => 5,
        ]);
        BookGenre::create([
            'book_id' => 5,
            'genre_id' => 5,
        ]);
        BookGenre::create([
            'book_id' => 5,
            'genre_id' => 1,
        ]);
    }
}
