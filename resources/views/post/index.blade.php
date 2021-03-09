@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-full my-6 border-2 p-4 rounded-lg shadow-md mx-12">
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="title" class="sr-only">Title</label>
                    <input type="text" name="title" id="title" placeholder="Titolo Post" class="bg-gray-100 w-full p-4 rounded-lg border-2 @error('name')
                                       border-red-500 @enderror" value="{{ old('title') }}">

                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="yturl" class="sr-only">Yturl</label>
                    <input type="text" name="yturl" id="yturl" placeholder="Youtube Video Url" class="bg-gray-100 w-full p-4 rounded-lg border-2 @error('name')
                                       border-red-500 @enderror" value="{{ old('yturl') }}">

                    @error('yturl')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="sr-only">Scrivi una descrizione del post...</label>
                    <textarea rows="20" cols="50" type="text" name="description" id="description" placeholder="Scrivi una descrizione del post..." 
                              class="bg-gray-100 w-full p-4 rounded-lg border-2 @error('description')
                                       border-red-500 @enderror" value="{{ old('description') }}"></textarea>

                    @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-lg font-medium w-full">
                        Crea Post
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection