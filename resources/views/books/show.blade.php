<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - Libro</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="min-h-screen bg-gray-100">
        <div class="px-2 md:px-20 pt-6 max-w-7xl mx-auto">
            {{-- nav --}}
            @include('layouts.partials.nav')
            {{-- nav --}}
            <!-- Book Detail -->
            <div class="grid grid-cols-1 md:grid-cols-6 my-10 gap-4">
                <div class="col-span-2 flex flex-col items-center">
                    <div class="bg-white w-full flex flex-col items-center rounded-xl p-6">
                        <img src="{{ asset($book->image_path) }}" alt="{{ $book->name }}"
                            class="w-full h-[20rem] object-contain">
                        <a href="#reviews"
                            class="mt-4 px-6 py-3 mx-auto block rounded-full font-normal tracking-wide bg-gradient-to-b from-blue-600 to-blue-700 text-white outline-none focus:outline-none hover:shadow-lg hover:from-blue-700 hover:to-blue-700 transition duration-200 ease-in-out">
                            Escribir una reseña
                        </a>
                    </div>

                </div>
                <div class="col-span-4 bg-white p-6 rounded-xl">
                    <div>
                        <h1 class="text-3xl font-semibold text-gray-800">{{ $book->name }}</h1>
                        <h2 class="text-sm text-gray-500">
                            @foreach ($book->authors as $author)
                                <span>{{ $author->name }}
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                </span>
                            @endforeach
                        </h2>
                        <div class="flex items-center mt-4">
                            <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-gray-500 text-sm">{{ number_format($book->reviews_avg_stars, 1) }}
                                estrellas ({{ $book->reviews_count }} reseñas)</span>
                        </div>
                        <div class="flex items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" version="1.1" id="Capa_1"
                                class="w-4 h-4 text-gray-300 mr-1" viewBox="0 0 37 37" xml:space="preserve">
                                <g>
                                    <path
                                        d="M36.75,8.5V35c0,1.104-0.895,2-2,2H8.25c-1.104,0-2-0.896-2-2V8.5c0-1.104,0.896-2,2-2h26.5   C35.855,6.5,36.75,7.396,36.75,8.5z M30.75,2c0-1.104-0.895-2-2-2H2.25c-1.104,0-2,0.896-2,2v26.5c0,1.104,0.896,2,2,2   c1.105,0,2-0.896,2-2V4h24.5C29.855,4,30.75,3.104,30.75,2z" />
                                </g>
                            </svg>
                            <span class="text-gray-500 text-sm">{{ $book->pages }} páginas</span>
                        </div>
                        <div class="flex items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M20 10V7C20 5.89543 19.1046 5 18 5H6C4.89543 5 4 5.89543 4 7V10M20 10V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V10M20 10H4M8 3V7M16 3V7"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" />
                                <rect x="6" y="12" width="3" height="3" rx="0.5"
                                    fill="#000000" />
                                <rect x="10.5" y="12" width="3" height="3" rx="0.5"
                                    fill="#000000" />
                                <rect x="15" y="12" width="3" height="3" rx="0.5"
                                    fill="#000000" />
                            </svg>
                            <span class="text-gray-500 text-sm">{{ $book->published_at->diffForHumans() }}
                            </span>
                        </div>
                        <p class="mt-4 text-gray-700">
                            {{ $book->description }}
                        </p>
                        <div class="flex mt-4 flex-wrap gap-1">
                            @foreach ($book->genres as $genre)
                                <div>
                                    <p tabindex="0"
                                        class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">
                                        {{ $genre->name }}</p>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <hr class="h-px my-8 bg-gray-200 border-0">
                    <div>
                        <p class="text-2xl">Sobre el Autor:</p>
                        @foreach ($book->authors as $author)
                            <div>
                                <p class="text-gray-700 text-base mt-2">{{ $author->name }}</p>
                                <p class="text-gray-400 text-base">{{ $author->description }}</p>
                            </div>
                        @endforeach
                    </div>
                    <hr class="h-px my-8 bg-gray-200 border-0">
                    <!-- Review Section -->
                    <div id="reviews">
                        <p class="text-2xl">Reseñas:</p>

                        @auth
                            <!-- Create review -->
                            @include('layouts.partials.reviewform')
                            <!-- /Create review -->
                        @else
                            <!-- Log in to create review -->
                            @include('layouts.partials.reviewslogin')
                            <!-- /Log in to create review -->
                        @endauth

                        <!-- Review Grid -->
                        <div class="grid grid-cols-1 gap-4">
                            <!-- Review Item -->
                            @forelse ($reviews as $review)
                                <div>
                                    <p class="text-base text-gray-900 font-medium">{{ $review->title }}</p>
                                    <p class="text-base text-gray-500">{{ $review->description }}</p>
                                    <p class="text-sm text-gray-400">{{ $review->user->name }} -
                                        {{ $review->created_at->diffForHumans() }}</p>
                                </div>
                            @empty
                                <div>
                                    <p class="text-base text-gray-900 font-medium center">

                                        Éste libro no ha sido reseñado aún </p>
                                </div>
                            @endforelse
                            <!-- /Review Item -->
                            <div class="my-4">
                                {{ $reviews->links() }}

                            </div>
                        </div>

                        <!-- /Review Section -->

                    </div>
                </div>

            </div>
            <!-- /Book Detail -->

            <!-- Footer -->
            @include('layouts.partials.footer')
            <!-- /Footer -->
        </div>
    </div>
</body>

</html>
