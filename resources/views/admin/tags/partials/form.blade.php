<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre de una nueva etiqueta']) !!}
    
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
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Escribe el slug de una nueva etiqueta', 'readonly']) !!}
    
    @error('slug')
    
    <span class="text-danger">{{$message}}</span>

    @enderror
    
    <div class="form-group">
        {!! Form::label('color', 'Color') !!}
        {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
    
        @error('color')
    
        <span class="text-danger">{{$message}}</span>

        @enderror
    </div>
</div>