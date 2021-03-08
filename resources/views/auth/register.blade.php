@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-96 mt-6 border-2 p-4 rounded-lg shadow-md">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name" class="bg-gray-100 w-full p-4 rounded-lg border-2 @error('name')
                                       border-red-500 @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="surname" class="sr-only">Surname</label>
                    <input type="text" name="surname" id="surname" placeholder="Your Surname" class="bg-gray-100 w-full p-4 rounded-lg border-2
                                       @error('surname') border-red-500 @enderror" value="{{ old('surname') }}">

                    @error('surname')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" class="bg-gray-100 w-full p-4 rounded-lg border-2
                               @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your Password" class="bg-gray-100 w-full p-4 rounded-lg border-2
                               @error('password') border-red-500 @enderror">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Repeat Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Repeat Password" class="bg-gray-100 w-full p-4 rounded-lg border-2">

                    
                </div>

                <div>
                    <button class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
