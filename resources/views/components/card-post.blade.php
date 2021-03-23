@props(['post'])

@if ( Config::get('app.locale') == 'es')

<article class="mb-8 bg-white shadow-xl rounded-lg overflow-hidden">
    @if ($post->image)
    <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
    @else
    <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_960_720.jpg" alt="">
    @endif
 
     <div class="px-6 py-4">
         <h1 class="font-bold font-dancing text-2xl mb-2">
             <a href="{{route('blog.show', $post)}}">{{$post->name}}</a>
         </h1>
 
         <div class="text-gray-700 text-base font-comic">
             {!!$post->extract!!}
         </div>
 
     </div>
 
     <div class="px-6 pt-4 pb-2">
         @foreach ($post->tags as $tag)
             <a class="inline-block bg-{{$tag->color}}-600 rounded-full px-3 py-1 text-sm font-comic text-gray-700 mr-2" href="{{route('blog.tag', $tag)}}">{{$tag->name}}</a>
         @endforeach
     </div>
 </article>

   @elseif ( Config::get('app.locale') == 'it' )

   <article class="mb-8 bg-white shadow-xl rounded-lg overflow-hidden">
    @if ($post->image)
    <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
    @else
    <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_960_720.jpg" alt="">
    @endif
 
     <div class="px-6 py-4">
         <h1 class="font-bold text-2xl font-dancing mb-2">
             <a href="{{route('blog.show', $post)}}">{{$post->name_it}}</a>
         </h1>
 
         <div class="text-gray-700 font-comic text-base">
             {!!$post->extract_it!!}
         </div>
 
     </div>
 
     <div class="px-6 pt-4 pb-2">
         @foreach ($post->tags as $tag)
             <a class="inline-block bg-{{$tag->color}}-600 rounded-full px-3 font-comic py-1 text-sm text-gray-700 mr-2" href="{{route('blog.tag', $tag)}}">{{$tag->name_it}}</a>
         @endforeach
     </div>
 </article>

   @endif

