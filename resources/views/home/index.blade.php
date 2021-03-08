@extends('layouts.app')

@section('content')

    <div class="flex justify-center mt-4 p-4">
        <a href="{{ route('post') }}" class="py-2 px-6 bg-green-400 hover:bg-green-500 border rounded-lg
                           focus:outline-none">
            Crea Post
        </a>
    </div>

    @foreach ($posts as $post)
        <a href="#" class="block xl:max-w-5xl sm:mx-auto m-4 max-w-max">
            <div class="mx-auto sm:max-w-xl grid xl:grid-cols-3 xl:max-w-5xl mt-4
                            border-gray-100 border-2 rounded-lg">
                <img src="{{ $post->thumbnail }}" alt="food"
                    class="rounded-t-lg shadow-2xl xl:hidden max-h-96">

                <div class="bg-white p-2 rounded-b-lg shadow-xl xl:p-4 xl:rounded-l-lg xl:rounded-b-none
                                  xl:col-span-2">
                    <div
                        class="flex justify-between text-xs text-gray-600 pt-1 md:text-sm">
                        <span>Posted by {{ $post->getUser }}</span>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                    </div>

                    <h1 class="mt-4 text-xl font-bold text-gray-800 md:text-2xl">
                        {{ $post->title }}
                    </h1>
                    <p class="mt-2 text-gray-600 text-sm md:text-base max-h-20
                                  truncate w-96">
                        {{ $post->description }}
                    </p>

                    <div
                        class="flex justify-between text-xs text-gray-500 mt-4 pb-2 md:text-sm">
                        <span><i class="fas fa-comments"></i> 123 comments</span>
                        <span><i class="far fa-eye"></i> 782 views</span>
                    </div>
                </div>
                <div class="hidden relative xl:block shadow-xl">
                    <img src="{{ $post->thumbnail }}" alt="food"
                        class="xl:rounded-r-lg absolute inset-0 w-full h-full object-cover object-center shadow-xl">
                </div>
            </div>
        </a>
    @endforeach
@endsection
