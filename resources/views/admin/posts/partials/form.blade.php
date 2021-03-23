
<h1 class="text-2xl text-danger text-center mb-4">Post Versión Española</h1>
<div class="form-group">
    {!! Form::label('name', 'Título Español') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del post']) !!}

    @error('name')
        
        <small class="text-danger">{{$message}}</small>

    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el slug del post', 'readonly']) !!}

    @error('slug')
    
        <small class="text-danger">{{$message}}</small>

    @enderror

</div>

<div class="from-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
    
        <small class="text-danger">{{$message}}</small>

    @enderror


</div>

<div class="form-group mt-4">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)

    <label class="mr-2 p-1 rounded bg-{{$tag->color}}">
        {!! Form::checkbox('tags[]', $tag->id, null) !!}
        {{$tag->name}} |
        {{$tag->name_it}}
     
    </label>
        
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>

    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
        {!!Form::radio('status', 1, true)!!}
        Borrador
    </label>
    <label>
        {!!Form::radio('status', 2)!!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>

    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
             @isset ($post->image)
             <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
             @else 
             <img id="picture" src="https://cdn.pixabay.com/photo/2021/02/05/18/05/paper-5985445_960_720.jpg" alt="">
             @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen para el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                
            <span class="text-danger">{{$message}}</span>

            @enderror

            <p>Poner aqui texto para las indicaciones de las imagenes que hay que subir</p>
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
    
        <small class="text-danger">{{$message}}</small>

    @enderror

</div>


<div class="form-group">
    {!! Form::label('body', 'Cuerpo del Post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
    
        <small class="text-danger">{{$message}}</small>

    @enderror

</div>
{{-- FORMULARTIO ITALIANO --}}
<h1 class="text-2xl text-success text-center mb-4">Post Versione Italiana</h1>
<div class="form-group">
    {!! Form::label('name_it', 'Titolo Italiano') !!}
    {!! Form::text('name_it', null, ['class' => 'form-control', 'placeholder' => 'Scrivi il titolo del post']) !!}

    @error('name_it')
        
        <small class="text-danger">{{$message}}</small>

    @enderror

</div>


{{-- <div class="from-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories_it, null, ['class' => 'form-control']) !!}

    @error('category_id')
    
        <small class="text-danger">{{$message}}</small>

    @enderror


</div> --}}

{{-- <div class="form-group">
    <p class="font-weight-bold">Etichette</p>

    @foreach ($tags as $tag)

    <label class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null) !!}
        {{$tag->name_it}}
    </label>
        
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>

    @enderror
</div> --}}


<div class="form-group">
    {!! Form::label('extract_it', 'Estratto:') !!}
    {!! Form::textarea('extract_it', null, ['class' => 'form-control']) !!}

    @error('extract_it')
    
        <small class="text-danger">{{$message}}</small>

    @enderror

</div>


<div class="form-group">
    {!! Form::label('body_it', 'Corpo del Post:') !!}
    {!! Form::textarea('body_it', null, ['class' => 'form-control']) !!}

    @error('body_it')
    
        <small class="text-danger">{{$message}}</small>

    @enderror

</div>

