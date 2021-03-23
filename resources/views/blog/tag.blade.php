<x-app-layout>
    <div class="container py-8">
        @if ( Config::get('app.locale') == 'es')
        <h1 class="uppercase text-center text-3xl font-bold">Etiqueta: {{$tag->name}} </h1>
    
        @forelse ($posts as $post)
        <x-card-post :post="$post"/>
        @empty
           <h2 class="font-semibold mt-20 tracking-widest text-center text-xl">No hay artículos para esta categoría</h2> 
        @endforelse
   

   @elseif ( Config::get('app.locale') == 'it' )
   <h1 class="uppercase text-center text-3xl font-bold">Etichetta: {{$tag->name_it}} </h1>
    
   @forelse ($posts as $post)
<x-card-post :post="$post"/>
@empty
   <h2 class="font-semibold mt-20 tracking-widest text-center text-xl">Non ci sono articoli per questa categoria</h2> 
@endforelse
  

   @endif
   
    
    <div class="mt-4">
        {{$posts->links()}}
    </div>
    
    </div>
    </x-app-layout>