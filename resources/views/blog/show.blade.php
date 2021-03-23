
<x-app-layout>
<div class="bg-azul">
    <div class="container pb-8 pt-10 ">

        @livewire('categories')

        @if ( Config::get('app.locale') == 'es')
        <h1 class="text-4xl font-bold tracking-widest text-black mb-4 font-dancing">{{$post->name}}</h1>

        <div class="text-lg text-black font-comic mb-4 font-semibold">
            {!!$post->extract!!}
        </div>

        <div class="flex flex-col lg:flex-row ">
            {{-- Contenido principal --}}
            <div class="w-full lg:w-3/4">
                <figure>
                    @if ($post->image)
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}"
                    alt="Imagen Artículo">
                    @else
                    <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_960_720.jpg"
                    alt="Imagen si no carga la imagen del artículo"> 
                    @endif
                </figure>
                <div class="break-all text-base text-black font-bold mt-4 font-comic text-justify">
                  {!!$post->body!!}  
                </div>

            </div>
            
          
            {{-- Contenido relacionado --}}
            <aside class="lg:pl-8 w-full lg:w-1/4 mt-8 lg:mt-0">
                <h1 class="text-2xl font-bold text-black font-dancing mb-4">Más en {{$post->category->name}}</h1>

                <ul>
                    @forelse ($similares as $similar)

                    <li class="mb-4">
                        <a class="flex" href="{{route('blog.show', $similar)}}">
                            @if ($similar->image)
                            <img class="w-max-42 h-20 object-cover object-center"
                            src="{{Storage::url($similar->image->url)}}" alt="Imagen de artículos similares"> 
                            @else
                            <img class="w-32 h-20 object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_960_720.jpg" alt="Imagen si no carga la imagen del artículo">
                            @endif
                            <span class="ml-2 text-black text-base font-bold font-comic">{{$similar->name}}</span>
                        </a>
                    </li>
                        
                    @empty
                        <h2 class="text-lg font-semibold tracking-widest font-comic text-black">No hay artículos por el momento.</h2>
                    @endforelse
                </ul>
            </aside>

        </div>
        

        @elseif ( Config::get('app.locale') == 'it' )

        <h1 class="text-4xl font-bold tracking-widest text-black font-dancing mb-4">{{$post->name_it}}</h1>

        <div class="text-lg text-black mb-4 font-comic font-semibold">
            {!!$post->extract_it!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}"
                    alt="Imagen Artículo">
                    @else
                    <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_960_720.jpg"
                    alt="Imagen si no carga la imagen del artículo"> 
                    @endif
                </figure>
                <div class="text-base font-bold text-black font-comic mt-4 text-justify">
                    {!!$post->body_it!!}
                </div>

            </div>
            
          
            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-black font-dancing mb-4">Di piú in {{$post->category->name_it}}</h1>

                <ul>
                    @forelse ($similares as $similar)

                    <li class="mb-4">
                        <a class="flex" href="{{route('blog.show', $similar)}}">
                            @if ($similar->image)
                            <img class="w-max-42 h-20 object-cover object-center"
                            src="{{Storage::url($similar->image->url)}}" alt="Imagen de artículos similares"> 
                            @else
                            <img class="w-32 h-20 object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_960_720.jpg" alt="Imagen si no carga la imagen del artículo">
                            @endif
                            <span class="ml-2 text-black font-bold text-base font-comic">{{$similar->name_it}}</span>
                        </a>
                    </li>
                        
                    @empty
                        <h2 class="text-lg font-bold tracking-widest font-comic text-black">Non ci sono articoli per il momento.</h2>
                    @endforelse
                    
                </ul>
            </aside>

        </div>

        @endif

        
        <br>
        
        <h2 class="text-2xl mb-3 font-dancing font-black">@lang('app.dejarcomentario')</h2>

        @forelse ($post->comments as $comment)
            <div class="w-full border border-gray-300 font-comic font-bold bg-white p-4 rounded-lg mb-2">
                {{$comment->content}}

            <div class="font-dancing pt-4 text-sm">
                @lang('app.publicado') {{$comment->created_at->format('d/m/Y')}}
            </div>
            <div class="font-dancing">
                @lang('app.por') {{$comment->user->name}}
            </div>
            </div>

            @foreach ($comment->comments as $replyComment)
            <div class="flex">
               <div class="flex pr-4 items-center text-vino">
                <i class="fas fa-long-arrow-alt-right text-xl"></i>
               </div> 
            <div class="w-full  border border-gray-300 bg-white font-comic font-bold p-4 rounded-lg mb-2">
                
                
                        {{$replyComment->content}}

                    <div class="font-dancing pt-4 text-sm">
                    
                        @lang('app.publicado') {{$replyComment->created_at->format('d/m/Y')}}
                    </div class="font-dancing">
                    <div class="font-dancing">
                        @lang('app.por') {{$replyComment->user->name}}
                    </div>
            </div>
        </div>
            
                
            @endforeach

            <button onclick="toggleReplyComment({{$comment->id}})" class="text-white hover:text-black text-base font-bold font-dancing mb-2 border border-gray-300 rounded-xl px-2 py-1 bg-vino hover:bg-vinoclaro" >@lang('app.contestar') </button>
            <form id="replyComment-{{$comment->id}}"  class="ml-8 mb-3 hidden" action="{{route('commentsreply', $comment)}}" method="POST">
                @csrf
                <label class="text-base font-bold font-dancing" for="replyComment"> @lang('app.mirespuesta')</label>
                <textarea name="replyComment" id="replyComment" rows="5" class="w-full border border-gray-300"></textarea>
                @if ($errors->has('replyComment'))
                        <span class="help-block text-red-800 font-dancing">
                            <strong>{{ $errors->first('replyComment') }}</strong>
                        </span>
                    @endif
                    <div class="mt-2">
                        <input class="text-white text-base cursor-pointer font-dancing 2xl:text-5xl tracking-widest font-bold py-1 2xl:py-4 px-2 outline-none border border-gray-300 rounded-md bg-vino hover:bg-vinoclaro hover:text-black" type="submit" value=" @lang('app.contestarcomentario')">
                    </div> 
            </form>

            
        @empty
            <div class="mb-3 text-sm font-bold font-comic">
                @lang('app.nohaycomentarios')
            </div>
        @endforelse
      
            <form action="{{route('comments', $post)}}" method="POST">
                @csrf
                <div class=" ">
                <label class="font-bold text-xl font-dancing" for="content"> @lang('app.comentario')</label>
                <textarea name="content" id="content" rows="10" class="w-full">
                    
                </textarea>
                @if ($errors->has('content'))
                        <span class="help-block text-red-800 font-dancing">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                <div class="mt-2 font-dancing">
                    <input class="text-white text-base cursor-pointer 2xl:text-5xl tracking-widest font-bold py-1 2xl:py-4 px-2 outline-none border border-gray-300 rounded-md bg-vino hover:bg-vinoclaro hover:text-black" type="submit" value="@lang('app.publicar')">
                </div> 
                </div>
            </form>
        
           

    </div>
    <footer class="flex h-24 sm:h-12 items-center bg-white">
        <div class="flex flex-col sm:flex-row justify-center justify-self-start ml-2	">
            <a href=""><i class="fab fa-facebook-square text-xl mr-2 text-vino"></i></a>
            <a href=""><i class="fab fa-linkedin text-xl text-vino"></i></a>
        </div>
        <p
            class="text-center flex flex-col sm:flex-row text-xs justify-center w-full items-center sm:text-sm font-dancing tracking-widest font-semibold">
            <span class="font-black font-dancing text-lg sm:mr-2"> &copy; </span> @lang('app.desarrolladocon') <span><i
                    class="far fa-heart text-lg sm:mx-2 text-vino"></i></span> @lang('app.por') <strong
                class=" font-dancing font-bold ml-1">Gabriele Cangelli</strong>
        </p>
    </footer>
</div>
</x-app-layout>

<script>
    function toggleReplyComment(id){

        let element = document.getElementById('replyComment-' + id);
        element.classList.toggle('hidden');

    }
</script>