<x-app-layout>
    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    @endpush
    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif
    <div class="carouselbg pt-4" id="inicio">
        <div class="slideslick">
            <div>
                <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
                    style="background-image: url('{{ asset('img/banner/banner6.jpg') }}')">
                    <div class="absolute bg-black bg-opacity-30 w-full h-full">
                    </div>
                    <div
                        class="mt-8 absolute text-center container mx-auto px-4 sm:px-6 lg:px-8 py-12 bottom-0 text-white  lr">
                        <p
                            class="m-0 shdot-text font-semibold text-2xl lg:text-4xl xl:text-5xl tracking-wider backfilter shadow-xl">
                            Seguridad Privada
                        </p>
                        <div class="flex justify-center mt-4">
                            <div class="bg_azul w-2/5 h-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
                    style="background-image: url('{{ asset('img/banner/banner2.jpg') }}')">
                    <div class="absolute bg-black bg-opacity-30 w-full h-full">
                    </div>
                    <div
                        class="mt-8 absolute text-center container mx-auto px-4 sm:px-6 lg:px-8 py-12 bottom-0 text-white  lr">
                        <p
                            class="m-0 shdot-text font-semibold text-2xl lg:text-4xl xl:text-5xl tracking-wider backfilter shadow-xl">
                            Servicio de Administración</p>
                        <div class="flex justify-center mt-4">
                            <div class="bg_azul w-2/5 h-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
                    style="background-image: url('{{ asset('img/banner/cama2.jpg') }}')">
                    <div class="absolute bg-black bg-opacity-30 w-full h-full">
                    </div>
                    <div
                        class="mt-8 absolute text-center container mx-auto px-4 sm:px-6 lg:px-8 py-12 bottom-0 text-white  lr">
                        <p
                            class="m-0 shdot-text font-semibold text-2xl lg:text-4xl xl:text-5xl tracking-wider backfilter shadow-xl">
                            Cámaras de Seguridad</p>
                        <div class="flex justify-center mt-4">
                            <div class="bg_azul w-2/5 h-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
                    style="background-image: url('{{ asset('img/banner/banner3.jpg') }}')">
                    <div class="absolute bg-black bg-opacity-30 w-full h-full">
                    </div>
                    <div
                        class="mt-8 absolute text-center container mx-auto px-4 sm:px-6 lg:px-8 py-12 bottom-0 text-white  lr">
                        <p
                            class="m-0 shdot-text font-semibold text-2xl lg:text-4xl xl:text-5xl tracking-wider backfilter shadow-xl">
                            Consultoria para condominios</p>
                        <div class="flex justify-center mt-4">
                            <div class="bg_azul w-2/5 h-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="btn arrow_prev3 cursor-pointer absolute prev3 p-6 bg-white shadow-xl opacity-40 hover:bg_azul hover:opacity-75 transition-all ease-in">
            <i class="fas fa-chevron-left text-xl hover:text-black font-bold"></i>
        </div>
        <div
            class="btn arrow_next3 cursor-pointer absolute prev4 p-6 bg-white shadow-xl opacity-40 hover:bg_azul hover:opacity-75 transition-all ease-in">
            <i class="fas fa-chevron-right text-xl hover:text-black font-bold"></i>
        </div>
    </div>

    <div class="container" id="servicio">
        <h4 class="mt-8 lg:mt-12 xl:mt-20 text-center text-lg md:text-xl lg:text-3xl font-semibold tracking-wider">
            NUESTROS
            SERVICIOS</h4>
        <div class="flex justify-center mt-4">
            <div class="bg_azul w-10 h-1"></div>
        </div>
        <p class="text-center pt-4 text-gray-500">Servicios de administración y consultoria para condominios, seguridad
            privada y
            mantenimiento.</p>
        <div class="relative ">
            <div class="servicio_slick mt-8 lg:mt-14 lg:mb-14 xl:mt-20">
                <div>
                    <div
                        class="flex justify-between bg-white mx-3 border-2 border-gray-400 border-opacity-40 shadow-xl rounded-l-lg cursor-pointer">
                        <div class="px-4 pt-4">
                            <h1 class="text-azul font-semibold text-lg">Agentes de seguridad</h1>
                            <p class="mt-4">Personal capacitado para resguardo de condominios, empresas,
                                oficinas
                                y/o residencias.</p>
                        </div>
                        <div style="background-image: url({{ asset('img/servicio/serv-img4.jpg') }})"
                            class="imgservi object-cover object-center">
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="flex justify-between mx-3 bg-white border-2 border-gray-400 border-opacity-40 shadow-xl rounded-l-lg cursor-pointer">
                        <div class="px-4 pt-4">
                            <h2 class="text-azul font-semibold text-lg">Gestión Financiera</h2>
                            <p class="mt-4">Gestión, supervisión, control y cobranza de cuotas de
                                mantenimiento.
                            </p>
                        </div>
                        <div style="background-image: url({{ asset('img/servicio/serv-img2.jpg') }})"
                            class="imgservi object-cover object-center">
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="flex justify-between mx-3 bg-white border-2 border-gray-400 border-opacity-40 shadow-xl rounded-l-lg cursor-pointer">
                        <div class="px-4 pt-4">
                            <h1 class="text-azul font-semibold text-lg">Gestión de Cobranza</h1>
                            <p class="mt-4">Establecer políticas de cobranza a residentes del condominio.
                                Cobranzas coactivas con EQUIFAX-INFOCORP.</p>
                        </div>
                        <div style="background-image: url({{ asset('img/servicio/serv-img3.jpg') }})"
                            class="imgservi object-cover object-center">
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="flex justify-between mx-3 bg-white border-2 border-gray-400 border-opacity-40 shadow-xl rounded-l-lg cursor-pointer">
                        <div class="px-4 pt-4">
                            <h2 class="text-azul font-semibold text-lg">Gestión Administrativa</h2>
                            <p class="mt-4">Esta dirigida al sector Inmobiliario, por lo que conocemos las
                                necesidades de nuestros clientes.</p>
                        </div>
                        <div style="background-image: url({{ asset('img/servicio/serv-img1.jpg') }})"
                            class="imgservi object-cover object-center">
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="flex justify-between mx-3 bg-white border-2 border-gray-400 border-opacity-40 shadow-xl rounded-l-lg cursor-pointer">
                        <div class="px-4 pt-4">
                            <h1 class="text-azul font-semibold text-lg">Cámaras de Vigilancia</h1>
                            <p class="mt-4">Instalación y mantenimiento de sistema de vigilancia.</p>
                        </div>
                        <div style="background-image: url({{ asset('img/servicio/serv-img5.jpg') }})"
                            class="imgservi object-cover object-center">
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="flex justify-between mx-3 bg-white border-2 border-gray-400 border-opacity-40 shadow-xl rounded-l-lg cursor-pointer">
                        <div class="px-4 pt-4">
                            <h2 class="text-azul font-semibold text-lg">Mantenimiento de Edificios</h2>
                            <p class="mt-4">Contamos con personal de limpieza para edificios,
                                condominio y oficinas. Asi mismo, realizamos mantenimiento en general.</p>
                        </div>
                        <div style="background-image: url({{ asset('img/servicio/serv-img6.jpg') }})"
                            class="imgservi object-cover object-center">
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="flex justify-between mx-3 bg-white  border-2 border-gray-400 border-opacity-40 shadow-xl rounded-l-lg cursor-pointer">
                        <div class="px-4 pt-4">
                            <h1 class="text-azul font-semibold text-lg">Mantenimiento De Piscinas</h1>
                            <p class="mt-4">Brindamos mantenimiento y el mejor cuidado para sus piscinas.</p>
                        </div>
                        <div style="background-image: url({{ asset('img/servicio/serv-img7.jpg') }})"
                            class="imgservi object-cover object-center">
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="flex justify-between mx-3 bg-white border-2 border-gray-400 border-opacity-40 shadow-xl rounded-l-lg cursor-pointer">
                        <div class="px-4 pt-4">
                            <h2 class="text-azul font-semibold text-lg">Servicio de Jardineria</h2>
                            <p class="mt-4">Contamos con personal especializado en el cuidado y mantenimiento
                                de
                                jardines y áreas
                                comunes.</p>
                        </div>
                        <div style="background-image: url({{ asset('img/servicio/serv-img8.jpg') }})"
                            class="imgservi object-cover object-center">
                        </div>
                    </div>
                </div>

            </div>
            <div
                class="btn arrow_prev1 cursor-pointer absolute prev11 p-4 rounded-full bg-white shadow-xl opacity-90 hover:bg-blue-500 hover:opacity-75 transition-all ease-in">
                <i class="fas fa-chevron-left text-xl hover:text-white font-bold"></i>
            </div>
            <div
                class="btn arrow_next1 cursor-pointer absolute prev21 p-4 rounded-full bg-white shadow-xl opacity-90 hover:bg-blue-500 hover:opacity-75 transition-all ease-in">
                <i class="fas fa-chevron-right text-xl hover:text-white font-bold"></i>
            </div>

        </div>

    </div>

    <div class="mt-8 lg:mt-12 xl:mt-20">
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('img/banner/slied2.jpg') }}')">
            <div class="absolute bg-black bg-opacity-30 w-full h-full">

            </div>
            <div class="mt-8 absolute text-center container mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-40 text-white  lr">
                <div>
                    <p class="m-0 shdot-text text-2xl backfilter">Somos una empresa peruana con 6 años de experiencia en
                        seguridad y administración de condominios de manera innovadora; evolucionando las formas de
                        operar y administrar los recursos de los inmuebles; enfocados en incrementar la plusvalía, por
                        el bien común de los propietarios y residentes.</p>

                    <div class="mt-4">
                        <button onclick="openModal()"
                            class="bg-gray-700 py-2 px-4 hover:bg-gray-800 rounded-md text-white font-bold">Leer
                            más</button>
                    </div>
                    <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
                        style="background: rgba(0,0,0,.7);">
                        <div
                            class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md lg:max-w-4xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
                            <div class="modal-content py-4 text-left px-6">
                                <!--Title-->
                                <div class="flex justify-between items-center pb-3">
                                    <p class="text-2xl font-bold text-black">Acerca de nosotros</p>
                                    <div class="modal-close cursor-pointer z-50">
                                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                                            width="18" height="18" viewBox="0 0 18 18">
                                            <path
                                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <!--Body-->
                                <div class="my-5">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <img src="{{ asset('img/banner/banner8.png') }}" class="w-full"
                                                alt="">
                                        </div>
                                        <div>
                                            <h2 class="text-azul font-semibold text-lg">VISIÓN:</h2>
                                            <p class="mt-2 text-gray-700">Ser una empresa reconocida y líder en
                                                administración y seguridad de condominios que supere las expectativas de
                                                los clientes.
                                            </p>
                                            <h2 class="text-azul font-semibold text-lg mt-1">MISIÓN:</h2>
                                            <p class="mt-2 text-gray-700">Incrementar el plusvalor del condominio a
                                                través de una administración enfocada al servicio y trabajo en equipo
                                                con el condominio a favor de los propietarios y residentes.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer-->
                                <div class="flex justify-end pt-2">
                                    <button
                                        class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Salir</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class=" md:hidden">
        <div>
            <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold ">
                Nuestra Seguridad
               </h1>
               <div id="mainCarousel" class="carousel mb-4 w-10/12 max-w-xl mx-auto">
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/trabajos/work1-1.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/trabajos/work1-2.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/trabajos/work1-3.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/trabajos/work1-4.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/trabajos/work1.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/trabajos/work2.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/trabajos/work3.png') }}" />
                 </div>
                 <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work4.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work5.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work6.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work7.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work8.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work9.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work10.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work11.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work12.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work13.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work14.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work15.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/trabajos/work16.png') }}" />
                  </div>
               </div>
        </div>
        <div>
            <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold ">
                Nuestros Clientes
               </h1>
               <div id="mainCarousel2" class="carousel mb-4 w-10/12 max-w-xl mx-auto">
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/cliente/cliente1.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/cliente/cliente2.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/cliente/cliente3.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/cliente/cliente4.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/cliente/cliente5.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/cliente/cliente6.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/cliente/cliente7.png') }}" />
                 </div>
               </div>
        </div>

        <div>
            <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold ">
                Nuestras Herramientas
               </h1>
               <div id="mainCarousel3" class="carousel mb-4 w-10/12 max-w-xl mx-auto">
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/servicio/ser1.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/servicio/ser2.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/servicio/ser3.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/servicio/ser4.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/servicio/ser5.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/servicio/ser6.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/servicio/ser7.png') }}" />
                 </div>
                 <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/servicio/ser8.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/servicio/ser9.png') }}" />
                  </div>
               </div>
        </div>

        <div>
            <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold ">
                Mantenimientos
               </h1>
               <div id="mainCarousel4" class="carousel mb-4 w-10/12 max-w-xl mx-auto">
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/mantenimiento/mantenimiento1.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/mantenimiento/mantenimiento2.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/mantenimiento/mantenimiento3.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/mantenimiento/mantenimiento4.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/mantenimiento/mantenimiento5.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/mantenimiento/mantenimiento6.png') }}" />
                 </div>
                 <div class="carousel__slide">
                   <img data-lazy-src="{{ asset('img/mantenimiento/mantenimiento7.png') }}" />
                 </div>
                 <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/mantenimiento/mantenimiento8.png') }}" />
                  </div>
                  <div class="carousel__slide">
                    <img data-lazy-src="{{ asset('img/mantenimiento/mantenimiento9.png') }}" />
                  </div>
               </div>
        </div>

    </div>

    <div class="relative hidden md:block" id="trabajo">
        <div class="slickGalerry">
            <div>
                <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold">
                    Nuestra Seguridad
                </h1>
                <div class="flex flex-wrap gap-5 justify-center max-w-7xl mx-auto px-6">
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work1-1.png') }}"
                        data-caption="First image">
                        <img src="{{ asset('img/trabajos/work1-1.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work1-2.png') }}"
                        data-caption="Second image">
                        <img src="{{ asset('img/trabajos/work1-2.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work1-3.png') }}"
                        data-caption="Third image">
                        <img src="{{ asset('img/trabajos/work1-3.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work1-4.png') }}"
                        data-caption="Four image">
                        <img src="{{ asset('img/trabajos/work1-4.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work1.png') }}">
                        <img src="{{ asset('img/trabajos/work1.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work2.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work2.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work3.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work3.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work4.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work4.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work5.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work5.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work6.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work6.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work7.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work7.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work8.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work8.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work9.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work9.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work10.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work10.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work11.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work11.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work12.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work12.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work13.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work13.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work14.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work14.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work15.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work15.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/trabajos/work16.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/trabajos/work16.png') }}" />
                    </a>
                </div>
            </div>
            <div>
                <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold">
                    Nuestros Clientes
                </h1>
                <div class="flex flex-wrap gap-5 justify-center max-w-5xl mx-auto px-6">
                    <a data-fancybox="gallery" href="{{ asset('img/cliente/cliente1.png') }}"
                        data-caption="First image">
                        <img src="{{ asset('img/cliente/cliente1.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/cliente/cliente2.png') }}"
                        data-caption="Second image">
                        <img src="{{ asset('img/cliente/cliente2.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/cliente/cliente3.png') }}"
                        data-caption="Third image">
                        <img src="{{ asset('img/cliente/cliente3.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/cliente/cliente4.png') }}">
                        <img src="{{ asset('img/cliente/cliente4.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/cliente/cliente5.png') }}">
                        <img src="{{ asset('img/cliente/cliente5.png') }}" class="w-52 h-36" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/cliente/cliente6.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/cliente/cliente6.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/cliente/cliente7.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/cliente/cliente7.png') }}" />
                    </a>
                </div>
            </div>

            <div>
                <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold">
                    Mantenimientos
                </h1>
                <div class="flex flex-wrap gap-5 justify-center max-w-5xl mx-auto px-6">
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento1.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento1.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento2.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento2.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento3.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento3.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento4.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento4.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento5.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento5.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento6.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento6.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento7.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento7.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento8.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento8.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento9.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento9.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento10.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento10.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento11.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento11.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento12.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento12.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento13.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento13.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento14.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento14.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento15.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/mantenimiento/mantenimiento15.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/mantenimiento/mantenimiento16.png') }}">
                        <img class="rounded w-52 h-36"
                            src="{{ asset('img/mantenimiento/mantenimiento16.png') }}" />
                    </a>
                </div>
            </div>
            <div>
                <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold">
                    Nuestras Herramientas
                </h1>
                <div class="flex flex-wrap gap-5 justify-center max-w-5xl mx-auto px-6">
                    <a data-fancybox="gallery" href="{{ asset('img/servicio/ser1.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/servicio/ser1.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/servicio/ser2.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/servicio/ser2.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/servicio/ser3.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/servicio/ser3.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/servicio/ser4.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/servicio/ser4.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/servicio/ser5.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/servicio/ser5.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/servicio/ser6.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/servicio/ser6.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/servicio/ser7.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/servicio/ser7.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/servicio/ser8.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/servicio/ser8.png') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/servicio/ser9.png') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/servicio/ser9.png') }}" />
                    </a>

                </div>
            </div>
            <div>
                <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold">
                    Nuestros Certificados
                </h1>
                <div class="flex flex-wrap gap-5 justify-center max-w-5xl mx-auto px-6">
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert1.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert1.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert2.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert2.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert3.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert3.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert4.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert4.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert5.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert5.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert6.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert6.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert7.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert7.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert8.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert8.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert9.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert9.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert10.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert10.jpg') }}" />
                    </a>
                    <a data-fancybox="gallery" href="{{ asset('img/certificados/cert11.jpg') }}">
                        <img class="rounded w-52 h-36" src="{{ asset('img/certificados/cert11.jpg') }}" />
                    </a>
                </div>
            </div>
        </div>
        <div
            class="btn arrow_prev4 absolute prev111 p-4 rounded-full cursor-pointer bg-white shadow-xl opacity-90 hover:bg-blue-500 hover:opacity-75 transition-all ease-in">
            <i class="fas fa-chevron-left text-xl hover:text-white font-bold"></i>
        </div>
        <div
            class="btn arrow_next4 absolute prev211 p-4 rounded-full cursor-pointer bg-white shadow-xl opacity-90 hover:bg-blue-500 hover:opacity-75 transition-all ease-in">
            <i class="fas fa-chevron-right text-xl hover:text-white font-bold"></i>
        </div>

    </div>

    <div class="container" id="testimonio">
        <h4 class="mt-8 lg:mt-12 text-center text-lg md:text-xl lg:text-3xl font-semibold tracking-wider">EQUIPO DE
            TRABAJO</h4>
        <div class="flex justify-center mt-4">
            <div class="bg_azul w-10 h-1"></div>
        </div>
        <p class="text-center pt-4 text-gray-500">Profesionales que lo atenderán con gusto.</p>
    </div>

    <div class="container mt-8 lg:mt-12">

        <div class="relative">
            <div class="testimonios">
                <div class="mx-6">
                    <div class="w-full bg-white shadow-lg rounded-b-lg transform duration-200 easy-in-out ">
                        <div class=" h-32 overflow-hidden">
                            <img class="w-full"
                                src="https://images.unsplash.com/photo-1605379399642-870262d3d051?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80"
                                alt="" />
                        </div>
                        <div class="flex justify-center px-5  -mt-12">
                            <img class="h-32 w-32 bg-white p-2 rounded-full   "
                                src="{{ asset('img/empleados/test-img1.png') }}" alt="" />

                        </div>
                        <div class=" ">
                            <div class="text-center px-14">
                                <h2 class="text-red-800 text-3xl font-bold">Walter Reaño</h2>
                                <p class="text-gray-400 mt-2">walter.rs@protectus.com.pe</p>
                                <p class="mt-2 text-gray-800 pb-4">Gerente General</p>
                                <p class="mt-2 text-gray-600 pb-4">Busco innovar el tema de seguridad y ofrecer mejores
                                    herramientas de seguridad en cada hogar o lugar de residencia.
                                    Nuestro objetivo es convertirnos en la mejor opción de seguridad dentro del mercado.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-6">
                    <div class="w-full bg-white shadow-lg rounded-b-lg transform duration-200 easy-in-out ">
                        <div class=" h-32 overflow-hidden">
                            <img class="w-full"
                                src="https://images.unsplash.com/photo-1605379399642-870262d3d051?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80"
                                alt="" />
                        </div>
                        <div class="flex justify-center px-5  -mt-12">
                            <img class="h-32 w-32 bg-white p-2 rounded-full   "
                                src="{{ asset('img/empleados/test-img2.png') }}" alt="" />

                        </div>
                        <div class=" ">
                            <div class="text-center px-14">
                                <h2 class="text-red-800 text-3xl font-bold">J Martín Centeno</h2>
                                <p class="text-gray-400 mt-2">jmartin.cm@protectus.com.pe</p>
                                <p class="mt-2 text-gray-800 pb-4">Administrador General</p>
                                <p class="mt-2 text-gray-600 pb-4">Contamos con procesos para tener un mejor manejo de
                                    los
                                    intereses de los residente en condominios y urbanizaciónes.
                                    Es una empresa confiable por lo que pertenecemos a la CÁMARA DE COMERCIO DE LIMA.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-6">
                    <div class="w-full bg-white shadow-lg rounded-b-lg transform duration-200 easy-in-out ">
                        <div class=" h-32 overflow-hidden">
                            <img class="w-full"
                                src="https://images.unsplash.com/photo-1605379399642-870262d3d051?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80"
                                alt="" />
                        </div>
                        <div class="flex justify-center px-5  -mt-12">
                            <img class="h-32 w-32 bg-white p-2 rounded-full   "
                                src="{{ asset('img/empleados/test-img3.png') }}" alt="" />

                        </div>
                        <div class=" ">
                            <div class="text-center px-14">
                                <h2 class="text-red-800 text-3xl font-bold">Iam Franco Reaño</h2>
                                <p class="text-gray-400 mt-2">iamfranco.re@protectus.com.pe</p>
                                <p class="mt-2 text-gray-800 pb-4">Asistente de Gerencia</p>
                                <p class="mt-2 text-gray-600 pb-4">Nos encargamos que nuestro personal cuente con toda
                                    la
                                    documentacion requerida
                                    así como los seguros requeridos.
                                    Además son capacitados de la mejor manera, brindando a poder escalar dentro de la
                                    empresa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-6">
                    <div class="w-full bg-white shadow-lg rounded-b-lg transform duration-200 easy-in-out ">
                        <div class=" h-32 overflow-hidden">
                            <img class="w-full"
                                src="https://images.unsplash.com/photo-1605379399642-870262d3d051?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80"
                                alt="" />
                        </div>
                        <div class="flex justify-center px-5  -mt-12">
                            <img class="h-32 w-32 bg-white p-2 rounded-full   "
                                src="{{ asset('img/empleados/test-img4.png') }}" alt="" />

                        </div>
                        <div class=" ">
                            <div class="text-center px-14">
                                <h2 class="text-red-800 text-3xl font-bold">Gerardo Reaño</h2>
                                <p class="text-gray-400 mt-2">gerardo.re@protectus.com.pe</p>
                                <p class="mt-2 text-gray-800 pb-4">Supervisor De Operaciones</p>
                                <p class="mt-2 text-gray-600 pb-4">Nuestro principal objetivo es brindar le seguridad a
                                    su
                                    familia,
                                    y estar atento a cualquier
                                    anomalia dentro de la urbanización, condominio y/o residencia. Contamos con el mejor
                                    personal
                                    para resguardar su propiedad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="btn arrow_prev2 absolute prev111 p-4 rounded-full cursor-pointer bg-white shadow-xl opacity-90 hover:bg-blue-500 hover:opacity-75 transition-all ease-in">
                <i class="fas fa-chevron-left text-xl hover:text-white font-bold"></i>
            </div>
            <div
                class="btn arrow_next2 absolute prev211 p-4 rounded-full cursor-pointer bg-white shadow-xl opacity-90 hover:bg-blue-500 hover:opacity-75 transition-all ease-in">
                <i class="fas fa-chevron-right text-xl hover:text-white font-bold"></i>
            </div>
        </div>



    </div>
    <div class="mt-8 lg:mt-12 " id="contacto">
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('img/banner/contac.jpg') }}')">
            <div class="absolute bg-black bg-opacity-30 w-full h-full">

            </div>
            <div class="mt-8 absolute container mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-40 text-white  lr">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <h1 class="text-xl md:text-2xl lg:text-3xl tracking-wide">CONTÁCTANOS</h1>
                        <div class="flex justify-star mt-4">
                            <div class="bg_azul w-10 h-1"></div>
                        </div>
                        <p class="text-xl">Envienos sus datos y nos contactaremos con usted para mostrarle todos
                            nuestros servicios.</p>
                    </div>
                    <div>
                        <form action="{{ route('contacto.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 gap-6 mt-5">
                                <div>
                                    <input name="name"
                                        class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Nombre y apellidos" />
                                    @error('name')
                                        <p><strong>{{ $message }}</strong></p>
                                    @enderror
                                </div>
                                <div>
                                    <input name="correo"
                                        class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                                        type="email" placeholder="Correo Electrónico" />
                                    @error('correo')
                                        <p><strong>{{ $message }}</strong></p>
                                    @enderror
                                </div>
                                <div>
                                    <input name="celular"
                                        class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Ingrese N° Telefónico" />
                                    @error('telefono')
                                        <p><strong>{{ $message }}</strong></p>
                                    @enderror
                                </div>
                                <div>
                                    <input name="asunto"
                                        class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                                        type="text" placeholder="Asunto y empresa" />
                                    @error('asunto')
                                        <p><strong>{{ $message }}</strong></p>
                                    @enderror
                                </div>
                                <div>
                                    <textarea name="mensaje" placeholder="Mensaje*"
                                        class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"></textarea>
                                    @error('mensaje')
                                        <p><strong>{{ $message }}</strong></p>
                                    @enderror
                                </div>
                                <div class="my-2  text-center">
                                    <button type="submit"
                                        class="  font-bold tracking-wide rounded-xl bg-purple-500 hover:bg-purple-700 hover:border-2 hover:border-purple-400 text-white px-8 py-3   
                                  focus:outline-none focus:shadow-outline">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>




    @push('script')
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
        <script>
            $('.slickGalerry').slick({
                prevArrow: '.arrow_prev4',
                nextArrow: '.arrow_next4',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                Margin: '50px',
                autoplay: true,
                autoplaySpeed: 3000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        <script>
            Fancybox.bind('[data-fancybox="gallery"]', {
                caption: function(fancybox, carousel, slide) {
                    return (
                        `${slide.index + 1} / ${carousel.slides.length} <br />` + slide.caption
                    );
                },
            });
        </script>
        <script>
            $('.slideslick').slick({
                prevArrow: '.arrow_prev3',
                nextArrow: '.arrow_next3',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                Margin: '50px',
                autoplay: true,
                autoplaySpeed: 3000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        <script>
            $('.servicio_slick').slick({
                prevArrow: '.arrow_prev1',
                nextArrow: '.arrow_next1',
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                Margin: '50px',
                autoplay: true,
                autoplaySpeed: 3000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        <script>
            $('.testimonios').slick({
                prevArrow: '.arrow_prev2',
                nextArrow: '.arrow_next2',
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                Margin: '50px',
                autoplay: true,
                autoplaySpeed: 3000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        
        <script>
            const mainCarousel = new Carousel(document.querySelector("#mainCarousel"), {
                // Your options
            });
            const mainCarousel2 = new Carousel(document.querySelector("#mainCarousel2"), {
                // Your options
            });
            const mainCarousel3 = new Carousel(document.querySelector("#mainCarousel3"), {
                // Your options
            });
            const mainCarousel4 = new Carousel(document.querySelector("#mainCarousel4"), {
                // Your options
            });
        </script>
    @endpush

</x-app-layout>
