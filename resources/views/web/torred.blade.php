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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>

                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
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
                            <a href="/"
                                class="text-white hover:bg-gray-900 bg-gray-700 px-2 py-1 rounded-lg border-2 border-gray-500  hidden lg:block ">
                                Regresar al inicio
                            </a>
                            <a href="{{ route('posts.index') }}"
                            class="px-2 rounded-lg text-white py-1 font-semibold bg-yellow-500 hover:px-2 hover:py-1 hover:text-white hover:rounded-lg hover:bg-yellow-700 ml-10 hidden lg:block {{ request()->is('noticias')? 'active linktran  bg-yellow-600 px-2 py-1 border-2 border-yellow-500 rounded-lg underline': '' }}">
                            Noticias
                        </a>
                        </div>
                    </div>
                    @auth
                        <div
                            class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative" x-data="{ open: false }">
                                <div>
                                    <button x-on:click="open = true" type="button"
                                        class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                            alt="">
                                    </button>
                                </div>

                                <div x-show="open" x-on:click.away="open = false"
                                    class="origin-top-right absolute z-30 right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
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
                                                                            this.closest('form').submit();">Cerrar
                                            sesión</a>
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

                    <a href="{{ route('posts.index') }}" class="text-lg font-semibold text-gray-800">Noticias</a>

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
            @push('link')
    @endpush
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 xl:gap-10">
            
            <div class="md:col-span-2">
                <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold ">
                   Torre D
                  </h1>
                  
                  <div id="mainCarousel" class="carousel mb-4 w-10/12 max-w-xl mx-auto">
                    <div class="carousel__slide">
                      <img data-lazy-src="{{ asset('img/torre/torred.jpeg') }}" />
                    </div>
                    <div class="carousel__slide">
                      <img data-lazy-src="{{ asset('img/torre/torre1.jpeg') }}" />
                    </div>
                    <div class="carousel__slide">
                      <img data-lazy-src="{{ asset('img/torre/torre2.jpeg') }}" />
                    </div>
                    <div class="carousel__slide">
                      <img data-lazy-src="{{ asset('img/torre/torre3.jpeg') }}" />
                    </div>
                    <div class="carousel__slide">
                      <img data-lazy-src="{{ asset('img/torre/torre6.jpeg') }}" />
                    </div>
                    <div class="carousel__slide">
                      <img data-lazy-src="{{ asset('img/torre/torre7.jpeg') }}" />
                    </div>
                  </div>
            </div>
            <div>
                <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold">
                    Recibos pendientes
                  </h1>
                   {{-- <div class="bg-white rounded-lg shadow-lg mb-6 ">
                    <div class="flex p-4 items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-greenLime-600">
                            <i class="fas fa-truck text-sm text-white"></i>
                        </span>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-greenLime-600">Se hace envíos a todo el Perú</p>
                            <p>Recíbelo el {{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</p>
                        </div>
                    </div>
                </div> --}}
                <div class="flex  items-start my-2">
                    <div class="w-full  my-1">
                        <ul class="flex flex-col">
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 1 </span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div x-ref="tab" :style="handleToggle()"
                                    class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso1.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso1.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 2</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso2.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso2.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 3</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso3.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso3.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 4</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso4.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso4.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(5)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 5</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso5.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso5.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 6</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso6.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso6.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(7)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 7</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso7.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso7.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(8)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 8</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso8.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso8.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(9)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 9</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso9.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso9.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(10)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 10</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso10.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso10.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(11)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 11</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso11.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso11.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                            <li class="bg-white my-2 shadow-lg" x-data="accordion(12)">
                                <h2 @click="handleClick()"
                                    class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                    <span>Piso 12</span>
                                    <svg :class="handleRotate()"
                                        class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                        </path>
                                    </svg>
                                </h2>
                                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                    x-ref="tab" :style="handleToggle()">
                                    <div class="py-2 mx-2 flex items-center">
                                        <p>Descarga tu recibo aquí: </p>
                                        <a href="{{asset('recibo/torred/piso12.pdf')}}" class="bg-red-500 ml-5 hover:bg-red-400 hover:px-2  cursor-pointer py-1 px-2 text-white font-semibold rounded-lg"  download="piso12.pdf"  target="_blank"><i class="fa-solid fa-download"></i> Recibo</a>     
                                    </div>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('accordion', {
                    tab: 0
                });

                Alpine.data('accordion', (idx) => ({
                    init() {
                        this.idx = idx;
                    },
                    idx: -1,
                    handleClick() {
                        this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                    },
                    handleRotate() {
                        return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                    },
                    handleToggle() {
                        return this.$store.accordion.tab === this.idx ?
                            `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                    }
                }));
            })
        </script>
        <script>
            const mainCarousel = new Carousel(document.querySelector("#mainCarousel"), {
                // Your options
            });
        </script>
    @endpush
            
        </main>
        @livewire('footer')

    </div>

    @stack('modals')

    @livewireScripts
    @stack('script')
</body>

</html>
