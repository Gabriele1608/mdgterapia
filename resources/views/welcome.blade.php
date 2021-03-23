<x-app-layout>
    <div class="bg-amarillo">
    <div id="loading" class="hidden justify-center items-center">
        <div class="flex flex-col justify-center items-center">
            <img class="image-loader" src="storage/img/manueladigiorgio.svg" alt="Manuela Di Giorgio Terapia">
            <p class="loader text-xl font-dancing font-semibold tracking-widest mt-8 mr-8">Loading...</p>
        </div>
    </div>
    <section class="section-header h-screen">
        <div class="cita ">
            @if (Config::get('app.locale') == 'es')
            <div class="citation items-center text-center font-korn justify-center h-screen text-xl flex flex-col font-bold tracking-widest z-50">
                <p class="primera-frase">"Acérquense al borde", les dijo.</p>
                <p class="">"No podemos, tenemos miedo", contestaron.</p>
                <p class="">"Acérquense al borde", repitió. Y se acercaron.</p>
                <p class=""> Él los empujó…y levantaron el vuelo.</p>
                <p class="">GUILLAUME APOLLINAIRE</p>
            </div>

            @elseif(Config::get('app.locale') == 'it')
            <div class="citation items-center justify-center h-screen text-2xl flex flex-col font-bold font-korn tracking-widest z-50">
                <p class="primera-frase">"ITALIANO</p>
                <p>"ITALIANO</p>
                <p>ITALIANO</p>
                <p> ITALIANO</p>
                <p>GUILLAUME APOLLINAIRE</p>
            </div>
            @endif

        </div>
    </section>

    <h1 style="background-color: #722f37"
        class="container text-center font-bold font-dancing text-2xl uppercase tracking-widest p-4 mb-8 rounded-full text-white">
        @lang('app.servicios')</h1>

    <section class="servicios container">

        <div class="servicio servicio12 flex flex-col w-full md:flex-row md:justify-around">

            <div
                class="servicio1 bg-vinoclarisimo shadow-xl border border-black md:w-1/2 md:m-4 lg:w-1/3 rounded-lg mb-2 md:mb-0">
                <h2 class="text-center text-lg font-dancing tracking-widest font-bold">@lang('app.terapiaindividual') </h2>
                <img class="w-full object-cover flex-1 object-center" src="storage/img/terapia_individual.jpg" alt="Terapia Individual">
                <p class="text-justify text-base font-comic font-medium tracking-wide px-2 pt-2 ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, soluta aut totam facilis nesciunt
                    voluptatum eos impedit error laborum,
                    animi enim ratione? Enim quae rem mollitia veniam nisi, quasi tempora maxime deserunt cum similique
                    quod itaque aperiam, commodi distinctio
                    recusandae voluptate?
                </p>
                <div class="w-full flex justify-center my-4 md:mt-4">
                    <a class="border border-black bg-vino hover:bg-vinoclaro font-dancing tracking-widest rounded-full py-1 px-2 font-bold text-base text-white"
                        href="{{route('terapia.terapias')}}">@lang('app.sabermas')</a>
                </div>
            </div>

            <div
                class="servicio2 bg-vinoclarisimo shadow-xl border border-black md:w-1/2 md:m-4 lg:w-1/3 rounded-lg mb-2 md:mb-0">
                <h2 class="text-center text-lg font-dancing tracking-widest font-bold">@lang('app.terapiaonline')</h2>
                <img class="w-full object-cover flex-1 object-center" src="storage/img/terapia_online.jpg" alt="Terapia Online">
                <p class="text-justify text-base font-comic font-medium tracking-wide px-2 pt-2 ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, soluta aut totam facilis nesciunt
                    voluptatum eos impedit error laborum, animi enim ratione? Enim quae rem mollitia veniam nisi, quasi
                    tempora maxime deserunt cum similique quod itaque aperiam, commodi distinctio distinctio
                    distinctioefr
                </p>
                <div class="w-full flex justify-center my-4 md:mt-4">
                    <a class="border border-black bg-vino hover:bg-vinoclaro font-dancing tracking-widest rounded-full py-1 px-2 font-bold text-base text-white"
                        href="{{route('terapia.terapias')}}">@lang('app.sabermas')</a>
                </div>
            </div>

        </div>

        <div class="servicio servicio34 flex flex-col w-full md:flex-row md:justify-around">

            <div
                class="servicio3 bg-vinoclarisimo shadow-xl border border-black md:w-1/2 md:m-4 lg:w-1/3 rounded-lg mb-2 md:mb-0">
                <h2 class="text-center text-lg font-dancing tracking-widest font-bold">@lang('app.desarrollopersonal')</h2>
                <img class="w-full object-cover flex-1 object-center" src="storage/img/desarrollo_personal.jpg" alt="Desarrollo Personal">
                <p class="text-justify text-base font-comic font-medium tracking-wide px-2 pt-2 ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, soluta aut totam facilis nesciunt
                    voluptatum eos impedit error laborum, animi enim ratione? Enim quae rem mollitia veniam nisi, quasi
                    tempora maxime deserunt cum similique quod itaque aperiam, commodi distinctio distinctio
                    distinctioefr
                </p>
                <div class="w-full flex justify-center my-4 md:mt-4">
                    <a class="border border-black bg-vino hover:bg-vinoclaro rounded-full font-dancing tracking-widest py-1 px-2 font-bold text-base text-white"
                        href="{{route('terapia.terapias')}}">@lang('app.sabermas')</a>
                </div>
            </div>

            <div
                class="servicio4 bg-vinoclarisimo shadow-xl border border-black md:w-1/2 md:m-4 lg:w-1/3 rounded-lg mb-2 md:mb-0">
                <h2 class="text-center text-lg font-dancing tracking-widest font-bold">@lang('app.orientacionartista')</h2>
                <img class="w-full object-cover flex-1 object-center" src="storage/img/orientacion_artistas.jpg" alt="Orientación Artistas">
                <p class="text-justify text-base font-medium font-comic tracking-wide px-2 pt-2 ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, soluta aut totam facilis nesciunt
                    voluptatum eos impedit error laborum, animi enim ratione? Enim quae rem mollitia veniam nisi, quasi
                    tempora maxime deserunt cum similique quod itaque aperiam, commodi distinctio distinctio
                    distinctioefr
                </p>
                <div class="w-full flex justify-center my-4 md:mt-4">
                    <a class="border border-black bg-vino hover:bg-vinoclaro rounded-full font-dancing tracking-widest py-1 px-2 font-bold text-base text-white"
                        href="{{route('terapia.terapias')}}">@lang('app.sabermas')</a>
                </div>
            </div>

            <div
                class="servicio4 bg-vinoclarisimo shadow-xl border border-black md:w-1/2 md:m-4 lg:w-1/3 rounded-lg mb-2 md:mb-0">
                <h2 class="text-center text-lg font-dancing tracking-widest font-bold">@lang('app.terapiaparejafamiliar')</h2>
                <img class="w-full object-cover flex-1 object-center" src="storage/img/terapia_familiar_pareja.jpg" alt="Terapia Familiar y Pareja">
                <p class="text-justify text-base font-medium font-comic tracking-wide px-2 pt-2 ">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, soluta aut totam facilis nesciunt
                    voluptatum eos impedit error laborum, animi enim ratione? Enim quae rem mollitia veniam nisi, quasi
                    tempora maxime deserunt cum similique quod itaque aperiam, commodi distinctio distinctio
                    distinctioefr
                </p>
                <div class="w-full flex justify-center my-4 md:mt-4">
                    <a class="border border-black bg-vino hover:bg-vinoclaro font-dancing tracking-widest rounded-full py-1 px-2 font-bold text-base text-white"
                        href="">@lang('app.sabermas')</a>
                </div>
            </div>

        </div>

    </section>

    <h1 style="background-color: #722f37"
        class="container text-center font-bold text-2xl uppercase font-dancing tracking-widest p-4 mb-8 mt-10 rounded-full text-white ">
        @lang('app.blog')</h1>
    <section class="container">

        <div class="servicios servicio12 flex flex-col w-full lg:flex-row md:justify-around items-center">
            @if ( Config::get('app.locale') == 'es')
            @foreach ($posts as $post)
            <div
                class="servicio w-full bg-vinoclarisimo shadow-xl border border-black  md:m-4 lg:w-1/3 rounded-lg mb-2">

                <h2 class=" text-center text-lg font-bold font-dancing tracking-widest flex items-center justify-center">{{$post->name}}</h2>


                <img class="w-full object-cover flex-1 object-center" src="{{Storage::url($post->image->url)}}" alt="Imagen Artículo">

                <div class="text-justify text-base font-comic font-light tracking-wide px-2 pt-2 ">
                    {!!$post->extract!!}
                </div>
                <div class="w-full flex justify-center my-4 md:mt-4">
                    <a class="border border-black bg-vino hover:bg-vinoclaro font-dancing tracking-widest rounded-full py-1 px-2 font-bold text-base text-white"
                        href="{{route('blog.show', $post)}}">@lang('app.leermas')</a>
                </div>
            </div>


            @endforeach


            @elseif ( Config::get('app.locale') == 'it' )
            @foreach ($posts as $post)
            <div
                class="servicio w-full bg-vinoclarisimo shadow-xl border border-black  md:m-4 lg:w-1/3 rounded-lg mb-2">

                <h2 class=" text-center text-lg font-bold flex items-center font-dancing tracking-widest justify-center">{{$post->name_it}}</h2>


                <img class="w-full object-cover flex-1 object-center" src="{{Storage::url($post->image->url)}}" alt="Imagen Artículo">

                <div class="text-justify text-base font-light font-comic tracking-wide px-2 pt-2 ">
                    {!!$post->extract_it!!}
                </div>
                <div class="w-full flex justify-center my-4 md:mt-4">
                    <a class="border border-black bg-vino hover:bg-vinoclaro rounded-full font-dancing tracking-widest py-1 px-2 font-bold text-base text-white"
                        href="{{route('blog.show', $post)}}">@lang('app.leermas')</a>
                </div>
            </div>


            @endforeach


            @endif


        </div>
    </section>

    <h1 id="sobremi" style="background-color: #722f37"
        class="container text-center font-bold text-2xl uppercase tracking-widest p-4 mt-4 font-dancing rounded-full text-white">
        @lang('app.sobremi')</h1>
    <section class="container">
        <div class="foto object-contain my-8">
            <img class="float-left " src="storage/img/femme.jpg" alt="Manuela di Giorgio Terapia">
            <p class=" text-justify font-semibold font-comic tracking-widest">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus voluptas, ipsa
                aspernatur odit deserunt eveniet omnis sapiente, maiores nobis molestiae beatae accusamus distinctio
                impedit qui ea tenetur eos a.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus voluptas, ipsa
                aspernatur odit deserunt eveniet omnis sapiente, maiores nobis molestiae beatae accusamus distinctio
                impedit qui ea tenetur eos a.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus voluptas, ipsa
                aspernatur odit deserunt eveniet omnis sapiente, maiores nobis molestiae beatae accusamus distinctio
                impedit qui ea tenetur eos a.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus voluptas, ipsa
                aspernatur odit deserunt eveniet omnis sapiente, maiores nobis molestiae beatae accusamus distinctio
                impedit qui ea tenetur eos a.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus voluptas, ipsa
                aspernatur odit deserunt eveniet omnis sapiente, maiores nobis molestiae beatae accusamus distinctio
                impedit qui ea tenetur eos a.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus voluptas, ipsa
                aspernatur odit deserunt eveniet omnis sapiente, maiores nobis molestiae beatae accusamus distinctio
                impedit qui ea tenetur eos a.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus voluptas, ipsa
                aspernatur odit deserunt eveniet omnis sapiente, maiores nobis molestiae beatae accusamus distinctio
                impedit qui ea tenetur eos a.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus voluptas, ipsa
                aspernatur odit deserunt eveniet omnis sapiente, maiores nobis molestiae beatae accusamus distinctio
                impedit qui ea tenetur eos a.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus temporibus voluptas, ipsa
                aspernatur odit deserunt eveniet omnis sapiente, maiores nobis molestiae beatae accusamus distinctio
                impedit qui ea tenetur eos a.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.

            </p>
        </div>

    </section>

    <h1 id="contacto" style="background-color: #722f37"
        class="container text-center font-bold text-2xl uppercase font-dancing tracking-widest p-4 mt-4 mb-8 rounded-full text-white">
        @lang('app.contacto')</h1>
    <section class="formulario container">



        <div class="flex flex-col justify-center w-full lg:w-1/2 mx-auto ">
            <form id="myForm" action="{{route('formulario')}}" method="POST">
                @csrf

                <div class="flex flex-col text-center mb-3">
                    <label for="nombre" class="font-bold text-xl font-dancing tracking-widest text-black">@lang('app.nombre')</label>
                    <input id="nombre" name="nombre" class="rounded-full focus:outline-none" type="text"
                        placeholder="@lang('app.escribanombre')">
                    @if ($errors->has('nombre'))
                    <span class=" text-red-800 font-comic">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="flex flex-col text-center mb-3">
                    <label for="apellido" class="font-bold text-xl font-dancing tracking-widest text-black">@lang('app.apellidos')</label>
                    <input id="apellido" name="apellido" class="rounded-full" type="text"
                        placeholder="@lang('app.escribaapellidos')">
                    @if ($errors->has('apellido'))
                    <span class=" text-red-800 font-comic">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="flex flex-col text-center mb-3">
                    <label for="email" class="font-bold text-xl font-dancing tracking-widest text-black">@lang('app.email')</label>
                    <input id="email" name="email" class="rounded-full outline-none" type="email"
                        placeholder="@lang('app.escribaemail')">
                    @if ($errors->has('email'))
                    <span class=" text-red-800 font-comic">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>



                <div class="flex flex-col text-center mb-3">
                    <label for="telefono" class="font-bold text-xl font-dancing tracking-widest text-black">@lang('app.telefono')</label>
                    <input id="telefono" name="telefono" class="rounded-full outline-none" type="text"
                        placeholder="@lang('app.escribatelefono')">
                    {{-- @if ($errors->has('telefono'))
                        <span class=" text-red-800">
                            <strong>{{ $errors->first('telefono') }}</strong>
                    </span>
                    @endif --}}
                </div>

                <div class="flex flex-col text-center mb-6">
                    <label class="font-bold text-xl font-dancing tracking-widest text-black" for="mensaje">@lang('app.mensaje')</label>
                    <textarea id="mensaje" class="rounded-lg outline-none" name="mensaje" id="" cols="30" rows="10"
                        placeholder="@lang('app.escribanecesite')"></textarea>
                    @if ($errors->has('mensaje'))
                    <span class=" text-red-800 font-comic">
                        <strong>{{ $errors->first('mensaje') }}</strong>
                    </span>
                    @endif
                </div>


                <div class="relative mt-4 md:mt-6 flex justify-center">
                    {!! NoCaptcha::display(['data-theme' => 'dark', 'data-size'=>'compact']) !!}


                </div>
                @if ($errors->has('g-recaptcha-response'))
                <span class="help-block text-red-800 font-comic">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
                @endif



                <div class="div3 flex justify-center mt-6 mb-4 md:mt-6">
                    <input
                        class="cursor-pointer 2xl:text-5xl tracking-widest font-bold py-1 2xl:py-4 px-2 outline-none font-dancing border border-black rounded-md bg-vino hover:bg-vinoclaro hover:text-black text-white"
                        type="submit" value="@lang('app.enviarformulario')">
                </div>

        </div>
        </form>


        </div>

    </section>

    <footer class="flex h-24 sm:h-12 items-center bg-white">
        <div class="flex flex-col sm:flex-row justify-center justify-self-start ml-2	">
            <a href=""><i class="fab fa-facebook-square text-xl mr-2 text-vino"></i></a>
            <a href=""><i class="fab fa-linkedin text-xl text-vino"></i></a>
        </div>
        <p
            class="text-center flex flex-col sm:flex-row text-xs justify-center w-full items-center sm:text-sm font-dancing tracking-widest font-semibold">
            <span class="font-black font-dancing text-lg sm:mr-2"> &copy; </span> @lang('app.desarrolladocon') <span><i
                    class="far fa-heart text-lg sm:mx-2 text-vino"></i></span> @lang('app.por') <strong
                class="font-semibold font-dancing ml-1">Gabriele Cangelli</strong>
        </p>
    </footer>
   
    @include('cookieConsent::index')
</div>
</x-app-layout>








{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body class="antialiased">
    <h1>hello</h1>
</body>

</html>


@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    @endif
    @endauth
</div>
@endif --}}