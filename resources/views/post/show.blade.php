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
    <div class="flex flex-col items-center px-4 lg:px-16 my-16 xl:px-20 2xl:px-60">
        <div class="relative h-0 overflow-hidden max-w-full w-full"
            style="padding-bottom: 56.25%">
            <iframe id="ytplayer" type="text/html" src="{{ $post->embeded_url }}"
                frameborder="0" allowfullscreen
                class="absolute top-0 left-0 w-full h-full" /></iframe>

        </div>
        <div
            class="text-xs text-gray-600 flex justify-between w-full mt-6">
            <span>Posted by {{ $post->user->name }}</span>
            <span>{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <h1 class="mt-12 text-2xl font-semibold">{{ $post->title }}</h1>
        <p class="mt-8 text-md text-gray-600">
            {{ $post->description }}
        </p>

    </div>
@endsection
