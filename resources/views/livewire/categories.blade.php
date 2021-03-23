<div class="w-full h-full flex flex-wrap bg-vinoclaro mb-8 mt-14 justify-around items-center p-2 rounded-xl">
    @if ( Config::get('app.locale') == 'es')
    <h1 class="font-bold text-2xl font-dancing">Categorías:</h1>
    @foreach ($categories as $category)
        <a class="text-white hover:bg-vino px-3 py-2 rounded-md text-xl font-medium font-dancing" href="{{route('blog.category', $category)}}">{{$category->name}}</a>
    @endforeach
 

   @elseif ( Config::get('app.locale') == 'it' )

   <h1 class="font-bold text-2xl font-dancing">Categorie:</h1>
   @foreach ($categories as $category)
       <a class="text-white hover:bg-vino px-3 py-2 font-dancing rounded-md text-xl font-medium" href="{{route('blog.category', $category)}}">{{$category->name_it}}</a>
   @endforeach

   @endif
    
</div>
 