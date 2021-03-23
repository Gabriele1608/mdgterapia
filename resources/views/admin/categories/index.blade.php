@extends('adminlte::page')

@section('title', 'Manuela Di Giorgio')

@section('content_header')
<h1>Lista de Categorías</h1>
@stop

@section('content')

@if (session('success'))

<div class="alert alert-success">
    <strong>{{session('success')}}</strong>
</div>

@endif


<div class="card">

    <div class="card-header">
        <a class="btn btn-info" href="{{route('admin.categories.create')}}">Crear Nueva Categoría</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoría ESP</th>
                    <th>Categoria IT</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->name_it}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm"
                            href="{{route('admin.categories.edit', $category)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form method="POST" action="{{route('admin.categories.destroy', $category)}}">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop