@extends('layouts.app')

@section('content')
    {{-- <div>
        <div class="mx-auto max-w-max mt-8 border border-gray-100 rounded-lg
                        shadow-xl">
            <iframe id="ytplayer" type="text/html" width="900" height="560"
                src="{{ $post->embeded_url }}" frameborder="0" allowfullscreen
                class="rounded-lg border border-gray-200" /></iframe>

            <div
                class=" px-4 flex justify-between text-xs text-gray-600 pt-6 md:text-sm">
                <span>Posted by {{ $post->user->name }}</span>
                <span>{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <h1 class="text-2xl font-semibold mt-2 px-4">{{ $post->title }}</h1>
            <p class="p-4 max-w-prose text-md leading-relaxed
                         text-gray-600 text-md">
                {{ $post->description }}
            </p>
        </div>
    </div> --}}
    <div class="flex flex-col items-center px-4 lg:px-16 my-16 xl:px-20
                            max-w-5xl mx-auto">
        <div class="relative h-0 overflow-hidden max-w-full w-full"
            style="padding-bottom: 56.25%">
            <iframe id="ytplayer" type="text/html" src="{{ $post->embeded_url }}"
                frameborder="0" allowfullscreen
                class="absolute top-0 left-0 w-full h-full" /></iframe>

        </div>
        <div class="text-xs text-gray-600 flex justify-between w-full mt-6">
            <span>Posted by {{ $post->user->name }}</span>
            <span>{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <h1 class="mt-12 text-2xl font-semibold">{{ $post->title }}</h1>
        <p class="mt-8 text-md text-gray-600">
            {{ $post->description }}
        </p>

        <form action="{{ route('comment.store', ['id' => $post->id]) }}"
            method="post" class="w-full mt-4">
            @csrf
            <label for="body" class="sr-only">Body</label>
            <textarea name="body" id="body" rows="4"
                class="w-full border border-gray-400 p-2 rounded-lg">
                </textarea>
            <button type="submit" class="bg-green-500 p-2 rounded-lg hover:bg-green-600 
                        text-white font-semibold mt-2">
                Pubblica
            </button>
        </form>
        @foreach ($post->comments as $comment)
            <div>
                {{ $comment->user->name }}
            </div>
        @endforeach
    </div>
@endsection
