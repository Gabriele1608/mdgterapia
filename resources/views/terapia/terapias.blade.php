
<x-app-layout>
    <div class="bg-azul">
    <div class=" pt-20 px-4 font-comic tracking-widest">
        <h1 class="text-4xl font-extrabold text-center mb-8">@lang('app.servicios')</h1>
        <div class="w-full flex justify-center mb-12">
            <img src="storage/img/manuela_di_giorgio_terapia.png" alt="Logo MDG Terapia">
        </div>

        {{-- TERAPIA INDIVIDUAL --}}
        
        <div class="bg-brun p-4 rounded-lg mb-4">
            <h2 class="text-lg text-center font-bold mb-4">@lang('app.terapiaindividual') </h2>
            <p class="tracking-widest mb-4 opacity-100 text-justify">
                @lang('app.explicacionterapiaindividual')
            </p>
            <table class="table table-striped">
                <h3 class="font-semibold text-base mb-4">@lang('app.duracionsesion')
                </h3>
                <thead class="bg-vino text-white">
                    <tr>
                        <th class="pr-4 font-light">@lang('app.sesiononline')</th>
                        <th class="font-light">@lang('app.sesionpresencial')</th>
                    </tr>
                </thead>

                <tbody class="bg-vinoclaro text-white text-center font-semibold">
                    <tr>
                        <td class="font-light">25 @lang('app.euros')</td>
                        <td class="font-light">45 @lang('app.euros')</td>
                    </tr>

                </tbody>
            </table>
            <p class="mt-6 mb-4 tracking-widest font-semibold">
                @lang('app.sincompromiso')
            </p>
            <a class="p-2 rounded-lg bg-vino font-semibold hover:bg-vinoclaro text-white hover:text-black mt-2 md:mb-0" href="{{route('welcome')}}#contacto">@lang('app.contactar')</a>

        </div>

        {{-- TERAPIA ONLINE --}}
        <div class="bg-brun p-4 rounded-lg mb-4">
            <h2 class="text-lg text-center font-bold mb-4">@lang('app.terapiaonline') </h2>
            <p class="tracking-widest mb-4 text-justify"> 
                @lang('app.explicacionterapiaonline')
            </p>
            <table class="table table-striped">
                <h3 class="font-semibold text-base mb-4">@lang('app.duracionsesion')
                </h3>
                <thead class="bg-vino text-white">
                    <tr>
                        <th class="pr-4 font-light">@lang('app.sesiononline')</th>
                        
                    </tr>
                </thead>

                <tbody class="bg-vinoclaro text-white text-center font-semibold">
                    <tr>
                        <td class="font-light">25 @lang('app.euros')</td>
                        
                    </tr>

                </tbody>
            </table>
            <p class="mt-6 mb-4 tracking-widest font-semibold">
                @lang('app.sincompromiso')
            </p>
            <a class="p-2 rounded-lg bg-vino font-semibold hover:bg-vinoclaro text-white hover:text-black mt-2 md:mb-0" href="{{route('welcome')}}#contacto">@lang('app.contactar')</a>

        </div>
            {{-- TERAPIA DESARROLLO PERSONAL --}}

            <div id="terapia_desarrollo_personal" class="bg-brun p-4 rounded-lg mb-4">
                <h2 class="text-lg text-center font-bold mb-4">@lang('app.desarrollopersonal') </h2>
                <p class="tracking-widest mb-4 text-justify">
                    @lang('app.explicaciondesarrollopersonal')
                </p>
                <table class="table table-striped">
                    <h3 class="font-semibold text-base mb-4">@lang('app.duracionsesion')
                    </h3>
                    <thead class="bg-vino text-white">
                        <tr>
                            <th class="pr-4 font-light">@lang('app.sesiononline')</th>
                            <th class="font-light">@lang('app.sesionpresencial')</th>
                        </tr>
                    </thead>

                    <tbody class="bg-vinoclaro text-white text-center font-semibold">
                        <tr>
                            <td class="font-light">25 @lang('app.euros')</td>
                            <td class="font-light">45 @lang('app.euros')</td>
                        </tr>

                    </tbody>
                </table>
                <p class="mt-6 mb-4 tracking-widest font-semibold">
                    @lang('app.sincompromiso')
                </p>
                <a class="p-2 rounded-lg bg-vino font-semibold hover:bg-vinoclaro text-white hover:text-black mt-2 md:mb-0" href="{{route('welcome')}}#contacto">@lang('app.contactar')</a>

            </div>

                {{-- TERAPIA ARTISTAS --}}

                <div id="terapia_artistas" class="bg-brun p-4 rounded-lg mb-4">
                    <h2 class="text-lg text-center font-bold mb-4">@lang('app.orientacionartista') </h2>
                    <p class="tracking-widest mb-4 text-justify">
                        @lang('app.explicacionartistas')
                    </p>
                    <table class="table table-striped">
                        <h3 class="font-semibold text-base mb-4">@lang('app.duracionsesion')
                        </h3>
                        <thead class="bg-vino text-white">
                            <tr>
                                <th class="pr-4 font-light">@lang('app.sesiononline')</th>
                                <th class="font-light">@lang('app.sesionpresencial')</th>
                            </tr>
                        </thead>

                        <tbody class="bg-vinoclaro text-white text-center font-semibold">
                            <tr>
                                <td class="font-light">25 @lang('app.euros')</td>
                                <td class="font-light">45 @lang('app.euros')</td>
                            </tr>

                        </tbody>
                    </table>
                    <p class="mt-6 mb-4 tracking-widest font-semibold">
                        @lang('app.sincompromiso')
                    </p>
                    <a class="p-2 rounded-lg bg-vino font-semibold hover:bg-vinoclaro text-white hover:text-black mt-2 md:mb-0" href="{{route('welcome')}}#contacto">@lang('app.contactar')</a>

                </div>

                    {{-- TERAPIA FAMILIAR Y PAREJA --}}
                    <div id="terapia_familiar_pareja" class="bg-brun p-4 rounded-lg mb-6">
                        <h2 class="text-lg text-center font-bold mb-4">@lang('app.terapiaparejafamiliar') </h2>
                        <p class="tracking-widest mb-4 text-justify">
                            @lang('app.explicacionparejafamiliar')
                        </p>
                        <table class="table table-striped">
                            <h3 class="font-semibold text-base mb-4">@lang('app.duracionsesion')
                            </h3>
                            <thead class="bg-vino text-white">
                                <tr>
                                    <th class="pr-4 font-light">@lang('app.sesiononline')</th>
                                    <th class="font-light">@lang('app.sesionpresencial')</th>
                                </tr>
                            </thead>

                            <tbody class="bg-vinoclaro text-white text-center font-semibold">
                                <tr>
                                    <td class="font-light">25 @lang('app.euros')</td>
                                    <td class="font-light">45 @lang('app.euros')</td>
                                </tr>

                            </tbody>
                        </table>
                        <p class="mt-6 mb-4 tracking-widest font-semibold">
                            @lang('app.sincompromiso')
                        </p>
                        <a class="p-2 rounded-lg bg-vino font-semibold hover:bg-vinoclaro text-white hover:text-black mt-2 md:mb-0" href="{{route('welcome')}}#contacto">@lang('app.contactar')</a>
                    </div>
                </div>

                {{-- VALORACIONES DE CLIENTES --}}

                <h2 class="ml-6 font-semibold text-xl text-center"> @lang('app.valoracionclientes')</h2>
                <div class="flex flex-col md:flex-row justify-between p-4">
                    <div class="w-full md:w-1/2 lg:w-1/5 p-2 m-2 bg-brun border border-vinoclaro rounded-xl">
                        <div class="flex">
                        <img class="h-24 w-24 rounded-full mx-auto object-cover mb-2" src="storage/img/femme.jpg" alt="Imagen de cliente">
                        <p class="text-base font-dancing px-2 text-center ">María, 23 @lang('app.anosde')  @lang('app.ciudad1')</p>
                        </div>
                        <p class="text-sm text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit, quibusdam incidunt laudantium saepe tenetur voluptas! Iusto reprehenderit neque, nesciunt consequuntur illum nemo odit perferendis blanditiis perferendis blanditiisperferendis blanditiis</p>

                    </div>
                    <div class="w-full lg:w-1/5 md:w-1/2 p-2 m-2 bg-brun border border-vinoclaro rounded-xl">
                        <div class="flex">
                        <img class="h-24 w-24 rounded-full mx-auto object-cover mb-2" src="storage/img/manu.jpg" alt="Imagen de cliente">
                        <p class="text-base font-dancing px-2 text-center ">Gabriele, 35 @lang('app.anosde') @lang('app.ciudad2')</p>
                        </div>
                        <p class="text-sm text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit, quibusdam incidunt laudantium saepe tenetur voluptas! Iusto reprehenderit neque, nesciunt consequuntur illum nemo odit perferendis blanditiis perferendis blanditiisperferendis blanditiis</p>
                    </div>
                    <div class="w-full lg:w-1/5 md:w-1/2 p-2 m-2 bg-brun border border-vinoclaro rounded-xl">
                        <div class="flex">
                        <img class="h-24 w-24 rounded-full mx-auto object-cover mb-2" src="storage/img/manu.jpg" alt="Imagen de cliente">
                        <p class="text-base font-dancing px-2 text-center ">Manuela, 42 @lang('app.anosde') @lang('app.ciudad3')</p>
                        </div>
                        <p class="text-sm text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit, quibusdam incidunt laudantium saepe tenetur voluptas! Iusto reprehenderit neque, nesciunt consequuntur illum nemo odit perferendis blanditiis perferendis blanditiisperferendis blanditiis</p>
                    </div>
                    <div class="w-full lg:w-1/5 md:w-1/2 p-2 m-2 bg-brun border border-vinoclaro rounded-xl">
                        <div class="flex">
                        <img class="h-24 w-24 rounded-full mx-auto object-cover mb-2" src="storage/img/manu.jpg" alt="Imagen de cliente">
                        <p class="text-base font-dancing px-2 text-center ">Víctor, 56 @lang('app.anosde') @lang('app.ciudad4')</p>
                        </div>
                        <p class="text-sm text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit, quibusdam incidunt laudantium saepe tenetur voluptas! Iusto reprehenderit neque, nesciunt consequuntur illum nemo odit perferendis blanditiis perferendis blanditiisperferendis blanditiis</p>
                    </div>
                </div>

                <footer class="flex mt-8 h-24 sm:h-12 items-center bg-brun font-dancing">
                    <div class="flex flex-col sm:flex-row justify-center justify-self-start ml-2	">
                        <a href=""><i class="fab fa-facebook-square text-xl mr-2 text-vino"></i></a>
                        <a href=""><i class="fab fa-linkedin text-xl text-vino"></i></a>
                    </div>
                    <p
                        class="text-center flex flex-col sm:flex-row text-xs justify-center w-full items-center sm:text-sm tracking-widest font-semibold">
                        <span class="font-black text-lg sm:mr-2"> &copy; </span> @lang('app.desarrolladocon') <span><i
                                class="far fa-heart text-lg sm:mx-2 text-vino"></i></span> @lang('app.por') <strong
                            class="font-semibold ml-1">Gabriele Cangelli</strong>
                    </p>
                </footer>
            </div>
</x-app-layout>