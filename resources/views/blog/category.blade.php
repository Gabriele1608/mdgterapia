<x-app-layout>
<div class="container h-full py-8">

    @livewire('categories')

<h1 class="mt-20 mb-10 uppercase text-center text-3xl font-bold font-dancing">Categoría: {{$category->name}} </h1>

@forelse ($posts as $post)
<x-card-post :post="$post"/>
@empty
   <h2 class="font-semibold mt-20 tracking-widest text-center text-xl font-comic">No hay artículos para esta categoría</h2> 
@endforelse

<div class="mt-4">
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
</x-app-layout>