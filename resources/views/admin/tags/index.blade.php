@extends('adminlte::page')

@section('title', 'Manuela Di Giorgio')

@section('content_header')

    

    <h1>Lista de Etiquetas</h1>
@stop

@section('content')

@if (session('success'))
        
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>
</div>

@endif
   <div class="card">

    <div class="card-header">
        <a class="btn btn-info" href="{{route('admin.tags.create')}}">Crear Nueva Etiqueta</a>
    </div>
       <div class="card-body">
           <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tag ESP</th>
                    <th>Tag IT</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->name_it}}</td>
                        <td width='10px'>
                            <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                        </td>
                        <td width='10px'>
                            <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                @method('delete')
                                @csrf

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
           </table>
       </div>
   </div>
@stop

