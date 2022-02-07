<x-app-layout>
    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <div class="carouselbg pt-4">

        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('img/banner/banner6.jpg') }}')">
            <div class="absolute bg-black bg-opacity-30 w-full h-full">

            </div>
            <div class="mt-8 absolute text-center container mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-40 text-white  lr">
                <p class="m-0 shdot-text text-2xl">Contáctenos si tiene alguna pregunta sobre los servicios.</p>
                <p class="m-0 shdot-text font-black text-2xl lg:text-6xl xl:text-8xl">Reserve una cita</p>

            </div>
        </div>

    </div>

    <div class="container">
        <h4 class="mt-8 lg:mt-12 text-center text-lg md:text-xl lg:text-3xl font-semibold tracking-wider">NUESTROS
            SERVICIOS</h4>
            <div class="flex justify-center mt-4"><div class="bg_azul w-10 h-1"></div></div>
        <p class="text-center pt-4 text-gray-500">Servicios de administración y consultoria para condominios, seguridad
            privada y
            mantenimiento.</p>
        <div class="servicio_slick mt-8">
            <div>
                <div class="flex justify-between mx-3 border-2 border-gray-400 border-opacity-40 shadow-xl">
                    <div class="px-4 pt-4">
                        <h1 class="text-azul font-semibold text-lg">Agentes de seguridad</h1>
                        <p class="mt-4">Personal capacitado para resguardo de condominios, empresas, oficinas
                            y/o residencias.</p>
                    </div>
                    <div style="background-image: url({{ asset('img/servicio/serv-img4.jpg') }})"
                        class="imgservi object-cover object-center">
                    </div>
                </div>
            </div>
            <div>
                <div class="flex justify-between mx-3 border-2 border-gray-400 border-opacity-40 shadow-xl">
                    <div class="px-4 pt-4">
                        <h2 class="text-azul font-semibold text-lg">Gestión Financiera</h2>
                        <p class="mt-4">Gestión, supervisión, control y cobranza de cuotas de mantenimiento.
                        </p>
                    </div>
                    <div style="background-image: url({{ asset('img/servicio/serv-img2.jpg') }})"
                        class="imgservi object-cover object-center">
                    </div>
                </div>
            </div>
            <div>
                <div class="flex justify-between mx-3 border-2 border-gray-400 border-opacity-40 shadow-xl">
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
                <div class="flex justify-between mx-3 border-2 border-gray-400 border-opacity-40 shadow-xl">
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
                <div class="flex justify-between mx-3 border-2 border-gray-400 border-opacity-40 shadow-xl">
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
                <div class="flex justify-between mx-3 border-2 border-gray-400 border-opacity-40 shadow-xl">
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
                <div class="flex justify-between mx-3 border-2 border-gray-400 border-opacity-40 shadow-xl">
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
                <div class="flex justify-between mx-3 border-2 border-gray-400 border-opacity-40 shadow-xl">
                    <div class="px-4 pt-4">
                        <h2 class="text-azul font-semibold text-lg">Servicio de Jardineria</h2>
                        <p class="mt-4">Contamos con personal especializado en el cuidado y mantenimiento de
                            jardines y áreas
                            comunes.</p>
                    </div>
                    <div style="background-image: url({{ asset('img/servicio/serv-img8.jpg') }})"
                        class="imgservi object-cover object-center">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-8 lg:mt-12">
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
                                    <div class="grid grid-cols-2 gap-6">
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

    <div class="container">
        <h4 class="mt-8 lg:mt-12 text-center text-lg md:text-xl lg:text-3xl font-semibold tracking-wider">EQUIPO DE
            TRABAJO</h4>
            <div class="flex justify-center mt-4"><div class="bg_azul w-10 h-1"></div></div>
        <p class="text-center pt-4 text-gray-500">Profesionales que lo atenderán con gusto.</p>
    </div>

    <div class="container mt-8 lg:mt-12">

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
                            src="{{asset('img/empleados/test-img1.png')}}"
                            alt="" />

                    </div>
                    <div class=" ">
                        <div class="text-center px-14">
                            <h2 class="text-red-800 text-3xl font-bold">Walter Reaño</h2>
                            <p class="text-gray-400 mt-2">walter.rs@protectus.com.pe</p>
                            <p class="mt-2 text-gray-800 pb-4">Gerente General</p>
                            <p class="mt-2 text-gray-600 pb-4">Busco innovar el tema de seguridad y ofrecer mejores herramientas de seguridad en cada hogar o lugar de residencia.
                                Nuestro objetivo es convertirnos en la mejor opción de seguridad dentro del mercado.</p>
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
                            src="{{asset('img/empleados/test-img2.png')}}"
                            alt="" />

                    </div>
                    <div class=" ">
                        <div class="text-center px-14">
                            <h2 class="text-red-800 text-3xl font-bold">J Martín Centeno</h2>
                            <p class="text-gray-400 mt-2">jmartin.cm@protectus.com.pe</p>
                            <p class="mt-2 text-gray-800 pb-4">Administrador General</p>
                            <p class="mt-2 text-gray-600 pb-4">Contamos con procesos para tener un mejor manejo de los intereses de los residente en condominios y urbanizaciónes.
                                Es una empresa confiable por lo que pertenecemos a la CÁMARA DE COMERCIO DE LIMA.</p>
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
                            src="{{asset('img/empleados/test-img3.png')}}"
                            alt="" />

                    </div>
                    <div class=" ">
                        <div class="text-center px-14">
                            <h2 class="text-red-800 text-3xl font-bold">Iam Franco Reaño</h2>
                            <p class="text-gray-400 mt-2">iamfranco.re@protectus.com.pe</p>
                            <p class="mt-2 text-gray-800 pb-4">Asistente de Gerencia</p>
                            <p class="mt-2 text-gray-600 pb-4">Nos encargamos que nuestro personal cuente con toda la documentacion requerida
                                así como los seguros requeridos. 
                                Además son capacitados de la mejor manera, brindando a poder escalar dentro de la empresa.</p>
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
                            src="{{asset('img/empleados/test-img4.png')}}"
                            alt="" />

                    </div>
                    <div class=" ">
                        <div class="text-center px-14">
                            <h2 class="text-red-800 text-3xl font-bold">Gerardo Reaño</h2>
                            <p class="text-gray-400 mt-2">gerardo.re@protectus.com.pe</p>
                            <p class="mt-2 text-gray-800 pb-4">Supervisor De Operaciones</p>
                            <p class="mt-2 text-gray-600 pb-4">Nuestro principal objetivo es brindar le seguridad a su familia, 
                                y estar atento a cualquier 
                                anomalia dentro de la urbanización, condominio y/o residencia. Contamos con el mejor personal
                                para resguardar su propiedad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

    </div>
    <div class="mt-8 lg:mt-12">
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('img/banner/contac.jpg') }}')">
            <div class="absolute bg-black bg-opacity-30 w-full h-full">

            </div>
            <div class="mt-8 absolute container mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-40 text-white  lr">
                <div class="grid grid-cols-2 gap-5">
                   <div>
                        <h1 class="text-xl md:text-2xl lg:text-3xl tracking-wide">CONTÁCTANOS</h1>
                        <div class="flex justify-star mt-4"><div class="bg_azul w-10 h-1"></div></div>
                        <p class="text-xl">Envienos sus datos y nos contactaremos con usted para mostrarle todos nuestros servicios.</p>
                   </div>
                   <div>
                    <form action="" method="POST">
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
                               
                                <input name="telefono"
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
                                    Suscribirse
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
            const modal = document.querySelector('.main-modal');
            const closeButton = document.querySelectorAll('.modal-close');

            const modalClose = () => {
                modal.classList.remove('fadeIn');
                modal.classList.add('fadeOut');
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 500);
            }

            const openModal = () => {
                modal.classList.remove('fadeOut');
                modal.classList.add('fadeIn');
                modal.style.display = 'flex';
            }

            for (let i = 0; i < closeButton.length; i++) {

                const elements = closeButton[i];

                elements.onclick = (e) => modalClose();

                modal.style.display = 'none';

                window.onclick = function(event) {
                    if (event.target == modal) modalClose();
                }
            }
        </script>
    @endpush
</x-app-layout>
