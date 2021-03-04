@extends('layouts.app')

@section('content')

        <a href="#">
            <div class="px-6 py-2 max-w-md mx-auto">
                <img src="https://just-eat-prod-eu-res.cloudinary.com/image/upload/c_fill,d_it:cuisines:hamburger-7.jpg,f_auto,q_auto,w_500/v1/it/restaurants/204507.jpg"
                    alt="food" class="rounded-t-lg shadow-2xl">
                <div class="bg-white p-2 rounded-b-lg">
                    <div class="flex justify-between text-sm text-gray-600 pt-1 shadow-2xl">
                        <span>Posted by Andrea</span>
                        <span>5 min ago</span>
                    </div>
                    <h1 class="mt-3 text-2xl font-bold text-gray-900">
                        Come produrre cibo bio a Terni!
                    </h1>
                    <p class="mt-1 text-gray-700">
                        L'azienda Diamanti di Terni ci spiega il percorso
                        che lo ha portato a produrre cibo di qualita', bio
                        per la comunita' ternana.
                    </p>
                    <div class="flex justify-between text-sm text-gray-500 mt-2 pb-2 shadow-2xl">
                        <span>123 Commenti</span>
                        <span>782 Likes</span>
                    </div>
                </div>
            </div>
        </a>

@endsection