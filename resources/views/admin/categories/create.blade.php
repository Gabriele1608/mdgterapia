@extends('adminlte::page')

@section('title', 'Manuela Di Giorgio')

@section('content_header')
    <h1>Crear Categorías</h1>
@stop

@section('content')
   <div class="card">
       <div class="card-body">
        {!! Form::open(['route' => 'admin.categories.store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre de una nueva categoría']) !!}
            
            @error('name')
            
            <span class="text-danger">{{$message}}</span>

            @enderror
       
        </div>

        <div class="form-group">
            {!! Form::label('name_it', 'Nome') !!}
            {!! Form::text('name_it', null, ['class' => 'form-control', 'placeholder' => 'Scrivi il nome di una nuova categoria']) !!}
            
            @error('name_it')
            
            <span class="text-danger">{{$message}}</span>

            @enderror
       
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Escribe el slug de una nueva categoría', 'readonly']) !!}
            
            @error('slug')
            
            <span class="text-danger">{{$message}}</span>

            @enderror
        
        </div>

        {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
       </div>
   </div>
@stop

@section('js')

<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
        });
</script>

@endsection