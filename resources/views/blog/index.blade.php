<x-app-layout>
   <div class="bg-azul">
<div class="container pt-8 pb-2">
    
        @livewire('categories')
    

    <div class="container1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @if ( Config::get('app.locale') == 'es')
        @foreach ($posts as $post)
        <article class="bg-brun w-full h-80 flex flex-col justify-between border border-gray-300 bg-cover bg-center shadow-xl @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_960_720.jpg @endif)">
            <div class="w-full flex justify-between items-center bg-brun p-2 ">
                <h1 class="text-gray-700 font-dancing items-center ">
                    <a href="{{route('blog.show', $post)}}" class="text-lg text-justify font-bold tracking-widest">
                        {{$post->name}}
                    </a>
                </h1>
                <div class="flex flex-wrap justify-between">
                    @foreach ($post->tags as $tag)
                    <a href="{{route('blog.tag', $tag)}}" class="inline-block text-xs font-comic px-1 py-1 mr-1 tracking-widest bg-{{$tag->color}}-400 text-white rounded-full">
                        {{$tag->name}}
                    </a>    
                    @endforeach
                </div>
              
            </div>
            <div class="bg-brun text-justify font-light p-1 text-sm font-comic overflow-ellipsis overflow-hidden tracking-wide">
                <a href="{{route('blog.show', $post)}}">
                  
                        {!!$post->extract!!}
                    
                </a>
            </div>
            
        </article>
    @endforeach

            

   @elseif ( Config::get('app.locale') == 'it' )

   @foreach ($posts as $post)
   <article class="w-full h-80 flex flex-col justify-between border border-gray-300 bg-cover bg-center shadow-xl @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_960_720.jpg @endif)">
       <div class="w-full flex justify-between items-center bg-brun p-2 ">
           <h1 class="text-gray-700 items-center ">
               <a href="{{route('blog.show', $post)}}" class="text-lg font-dancing text-justify font-bold tracking-widest">
                   {{$post->name_it}}
               </a>
           </h1>
           <div class="flex flex-wrap justify-between">
               @foreach ($post->tags as $tag)
               <a href="{{route('blog.tag', $tag)}}" class="inline-block text-xs font-comic px-1 py-1 mr-1 tracking-widest bg-{{$tag->color}}-400 text-white rounded-full">
                   {{$tag->name_it}}
               </a>    
               @endforeach
           </div>
         
       </div>
       <div class="bg-brun text-justify font-light p-1 text-sm font-comic overflow-ellipsis overflow-hidden tracking-wide">
           <a href="{{route('blog.show', $post)}}">
             
                   {!!$post->extract_it!!}
               
           </a>
       </div>
       
   </article>
@endforeach


   @endif

       
    </div>


    <div class="mt-10 flex justify-center font-dancing">
        {{$posts->links()}}
    </div>

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
            class="font-semibold font-dancing ml-1">Gabriele Cangelli</strong>
    </p>
</footer>
</div>
</x-app-layout>