@extends('layouts.app')

@section('content')

    <div class="flex justify-center mt-4 p-4">
        <a href="{{ route('post.create') }}" class="py-2 px-6 bg-green-400 
                                                hover:bg-green-500 border rounded-lg
                                                   focus:outline-none">
            Crea Post
        </a>
    </div>

    @foreach ($posts as $post)
        <a href="{{ route('post.show', $post->id) }}"
            class="block xl:max-w-5xl mx-auto sm:mx-auto m-4 max-w-max">
            <div
                class="mx-auto sm:max-w-md grid xl:grid-cols-3 xl:max-w-5xl mt-4
                                                    border-gray-100 border-2 rounded-lg">
                <img src="{{ $post->thumbnail }}" alt="food"
                    class="rounded-t-lg shadow-2xl xl:hidden max-h-96">

                <div class="bg-white p-2 rounded-b-lg shadow-xl xl:p-4 xl:rounded-l-lg xl:rounded-b-none
                                              xl:col-span-2 max-w-full">
                    <div
                        class="flex justify-between text-xs text-gray-600 pt-1 md:text-sm max-w-full">
                        <span>Posted by {{ $post->user->name }}</span>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                    </div>

                    <h1
                        class="mt-4 text-xl font-bold text-gray-800 md:text-2xl max-w-sm">
                        {{ $post->title }}
                    </h1>
                    <p
                        class="mt-2 text-gray-600 text-sm md:text-base max-h-20
                                                          truncate w-96 max-w-full">
                        {{ $post->description }}
                    </p>

                    <div
                        class="flex justify-between text-xs text-gray-500 mt-4 pb-2 md:text-sm max-w-full">
                        <span><i class="fas fa-comments"></i> 123 comments</span>
                        @can('delete', $post)
                            <form class="-mr-20 xl:-mr-72"
                                action="{{ route('post.destroy', $post) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-500 -mt-r-6">Delete</button>
                            </form>
                        @endcan
                        {{-- <form class="-mr-20 xl:-mr-72" action="#" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="text-blue-500 -mt-r-6">Edit</button>
                        </form> --}}
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
    <div class="mx-auto max-w-5xl">
        {{ $posts->links() }}
    </div>

@endsection
