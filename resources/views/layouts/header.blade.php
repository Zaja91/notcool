{{-- <nav class="p-8 bg-green-50 grid grid-cols-4 text-center shadow-lg">
    <div class="p-2">
        <ul>
            <li class="p-2">
                <a class="" href="#">

                        <img src={{ asset('img/n.svg') }} 
                        alt="nerd" 
                        srcset=""
                        class="w-12 h-12 md:ml-14"> 
                </a>
            </li>
        </ul>
    </div>
    <div class="col-span-2 p-2">
        <form action="" class="grid grid-cols-8 gap-4">
            @csrf
            <input type="text" class="border border-transparent mt-2 p-2 focus:outline-none focus:ring-2
                          focus:ring-purple-600 focus:border-transparent shadow-lg col-span-6 rounded-lg"
                placeholder="Search Post">
            <button type="submit" class="mt-2 min-w-max px-4 col-span-2 bg-purple-600 hover:bg-green-600 
                         text-white font-medium foxus:rounded-lg rounded-lg focus:outline-none shadow-lg">
                Search
            </button>

        </form>
    </div>
    <div class="p-2">
        <ul class="grid sm:grid-cols-2">
            <li class="p-2 col-span-1 hidden lg:inline-grid">
                <a class="bg-yellow-300 px-4 py-2 rounded-lg shadow-lg text-green-800 font-medium" href="#">Login</a>
            </li>
            <li class="col-span-1 p-2 hidden lg:inline-grid">
                <a class="px-4 py-2 border-gray-200 rounded-lg
                          bg-green-300 shadow-lg text-gray-800 font-medium" href="#">Registrati</a>
            </li>
            <li class="col-span-2 p-2 lg:hidden inline-grid max-w-max">
                <a class="px-4 py-2 border-gray-200 border-2 rounded-lg
                          bg-green-300" href="#">Entra

                    <i class="fas fa-angle-down pl-1"></i>
                </a>

            </li>
        </ul>
    </div>
</nav> --}}

<nav class="p-6 bg-blue-50 flex justify-around">
    <ul class="flex items-center">
        <li>
            <a href="{{ route('home') }}">
                <img src={{ asset('img/n.svg') }} alt="Nerd logo" class="w-12 h-12">
            </a>
        </li>
    </ul>
    <ul class="flex items-center -mr-20">
        <input type="text" placeholder="Search" 
               class="border border-transparent mt-2 p-2 
                      focus:outline-none focus:ring-2 focus:ring-blue-300
                      focus:border-transparent shadow-lg col-span-6 
                      rounded-lg w-full">
    </ul>
    <ul class="flex items-center">
        @auth
            <li>
                <a href="" class="p-3">
                    {{ auth()->user()->name }} {{ auth()->user()->surname }}
                </a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="p-3">
                        Logout
                    </button>
                </form>

            </li>
        @endauth
        @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">
                    Login
                </a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">
                    Register
                </a>
            </li>
        @endguest
    </ul>
</nav>
