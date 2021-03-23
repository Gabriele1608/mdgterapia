@extends('adminlte::page')

@section('title', 'Manuela Di Giorgio')

@section('content_header')
    <h1>Lista de Posts</h1>

    <div class="card-header p-0 pt-3 pb-3">
        <a class="btn btn-info" href="{{route('admin.posts.create')}}">Crear Nuevo Post</a>
    </div>

@stop

@section('content')
@if (session('success'))
        
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>
</div>

@endif
    @livewire('admin.posts-index')
@stop

