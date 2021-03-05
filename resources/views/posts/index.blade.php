@extends('layouts.app')

@section('content')

    @for ($i = 0; $i < 8; $i++)
        <a href="#">
            <div class="px-6 mx-auto sm:max-w-xl grid xl:grid-cols-3 xl:max-w-5xl mt-4">
                <img src="https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,d_it:cuisines:hamburger-7.jpg,f_auto,q_auto,w_500/v1/it/restaurants/204507.jpg"
                    alt="food" class="rounded-t-lg shadow-2xl h-full w-full xl:hidden">

                <div class="bg-white p-2 rounded-b-lg shadow-xl xl:p-4 xl:rounded-l-lg xl:rounded-b-none
                              xl:col-span-2">
                    <div class="flex justify-between text-xs text-gray-600 pt-1 md:text-sm">
                        <span>Posted by Andrea</span>
                        <span>5 min ago</span>
                    </div>

                    <h1 class="mt-4 text-xl font-bold text-gray-800 md:text-2xl">
                        Come produrre cibo bio a Terni!
                    </h1>
                    <p class="mt-2 text-gray-600 text-sm md:text-base">
                        L'azienda Diamanti di Terni ci spiega il percorso
                        che lo ha portato a produrre cibo di qualita', bio
                        per la comunita' ternana.
                    </p>

                    <div class="flex justify-between text-xs text-gray-500 mt-4 pb-2 md:text-sm">
                        <span>123 Commenti</span>
                        <span>782 Likes</span>
                    </div>
                </div>
                <div class="hidden relative xl:block shadow-xl">
                    <img src="https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,d_it:cuisines:hamburger-7.jpg,f_auto,q_auto,w_500/v1/it/restaurants/204507.jpg"
                        alt="food"
                        class="xl:rounded-r-lg absolute inset-0 w-full h-full object-cover object-center shadow-xl">
                </div>
            </div>
        </a>
    @endfor
@endsection
