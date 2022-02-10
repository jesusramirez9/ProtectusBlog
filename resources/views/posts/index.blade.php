<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @stack('link')
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            <div class="bg_azul py-2">
                <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 text-white font-bold">
                    <div class="md:flex items-center">
                        <div class="text-center md:text-left">
                            <p> <span class="fa fa-phone-square" aria-hidden="true"></span> +511 244 7506</p>
                        </div>
                        <div class="mx-6 text-center md:text-left">
                            <p><span class="fa fa-envelope" aria-hidden="true"></span> info@protectus.com.pe</p>
                        </div>
                        <div class="flex justify-center md:ml-auto ">
            
                            <div>
                                <a target="_blank" href="https://es-la.facebook.com/pg/Protectus2014/videos/">
                                    <i class="fab fa-facebook-square fa-2x"></i></a>
                            </div>
                            <div class="mx-6">
                                <a target="_blank" href="https://twitter.com/protectus2014"><i
                                        class="fab fa-twitter-square fa-2x"></i></i></a>
                            </div>
                            <div>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=51961811746"><i
                                        class="fab fa-whatsapp-square fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="bg-white" x-data="{open: false}">
                <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-white">
                    <div class="relative flex items-center justify-between h-16 bg-white">
                        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                            <!-- Mobile menu button-->
                            <button x-on:click="open = true" type="button"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
            
                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
            
                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex-1  flex items-center justify-center sm:items-stretch sm:justify-start py-4">
                            {{-- Logotipo --}}
                            <a href="/" class="flex-shrink-0 flex items-center py-4">
                                <img src="{{ asset('img/logo/logo.png') }}" class="hidden lg:block  w-auto" alt="">
                            </a>
            
                            <div class=" ml-auto mr-8 flex items-center text-black">
                                <a href="/" class="text-white hover:bg-gray-900 bg-gray-700 px-2 py-1 rounded-lg border-2 border-gray-500  hidden lg:block ">
                                   Regresar al inicio
                                </a>
                                <a href="{{ route('posts.index') }}" class="text-white hover:bg-yellow-700 font-semibold ml-10 hidden lg:block {{ request()->is('noticias') ? 'active linktran  bg-yellow-600 px-2 py-1 border-2 border-yellow-500 rounded-lg underline' : '' }}">
                                    Noticias
                                </a>
                            </div>
                        </div>
                        @auth
                            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            
                                <!-- Profile dropdown -->
                                <div class="ml-3 relative" x-data="{ open: false }">
                                    <div>
                                        <button x-on:click="open = true" type="button"
                                            class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                                        </button>
                                    </div>
                              
                                    <div x-show="open" x-on:click.away="open = false"
                                        class="origin-top-right absolute z-30 right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                        <!-- Active: "bg-gray-100", Not Active: "" -->
                                        <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                            role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil</a>
            
                                        @can('admin.home')
                                            <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
            
                                        @endcan
            
                                        @can('web.recibo')
                                            <a href="{{ route('web.recibo') }}" class="block px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1" id="user-menu-item-0">Ver recibo</a>
            
                                        @endcan
            
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">Cerrar sesión</a>
                                        </form>
            
                                    </div>
                                </div>
                            </div>
                        @else
                            <div>
                                <a href="{{ route('login') }}"
                                    class="text-gray-700 hover:bg-gray-700  border-2 border-gray-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Ingresar</a>
                                <a href="{{ route('register') }}"
                                    class="text-gray-700 hover:bg-gray-700  border-2 border-gray-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrarse</a>
                            </div>
                        @endauth
                    </div>
                </div>
            
                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">
                    <div class="px-2 pt-2 pb-3 space-y-1 grid grid-cols-1">
                        <a href="/" class="text-lg font-semibold text-gray-800">Inicio</a>
          
                        <a href="{{route('posts.index')}}" class="text-lg font-semibold text-gray-800">Noticias</a>
              
                    </div>
                </div>
            
                @push('script')
                    <script type="text/javascript">
                        window.addEventListener("scroll", function() {
                            var header = document.querySelector("header");
                            header.classList.toggle("abajo", window.scrollY > 0);
                        })
                    </script>
                @endpush
            </header>
            
       

            <!-- Page Content -->
            <main>
                <div class="container py-8">

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($posts as $post)
                        <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2   @endif"
                         style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2020/11/07/10/36/motorcycle-5720553_960_720.jpg @endif)">
                            <div class="w-full h-full px-8 flex flex-col justify-center">
            
                                <div>
                                    @foreach($post->tags as $tag)
                                    <a href="{{route('posts.tag',$tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                                    @endforeach
                                </div>
            
                                <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                                    <a href="{{route('posts.show',$post)}}">
                                        {{$post->name}}
                                    </a>
                                </h1>
                            </div>
            
                        </article>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        {{$posts->links()}}
                    </div>
            </div>
            </main>
            @livewire('footer')

        </div>

        @stack('modals')

        @livewireScripts
        @stack('script')
    </body>
</html>

