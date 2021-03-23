@extends('adminlte::page')

@section('title', 'Manuela Di Giorgio')

@section('content_header')
    <h1>Editar Etiquetas</h1>
@stop

@section('content')

@if (session('success'))
        
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>
</div>

@endif

<div class="card">
    <div class="card-body">
     {!! Form::model($tag, ['route' => ['admin.tags.update', $tag], 'method' => 'put']) !!}

     @include('admin.tags.partials.form')

     {!! Form::submit('Actualizar etiqueta', ['class' => 'btn btn-primary']) !!}

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