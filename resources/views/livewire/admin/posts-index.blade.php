<div class="card">


<div class="card-header">
    <input wire:model="search" class="form-control" placeholder="Ingresa el nombre de un post que quieras buscar">
</div>

   @if ($posts->count())

   <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr class="bg-dark">
                <th>ID</th>
                <th>NOMBRE</th>
                <th>FECHA CREACIÓN</th>
                <th colspan="2"></th>
            </tr>

        </thead>
        <tbody>
         @foreach ($posts as $post)
             <tr>
                 <td class="bg-warning">{{$post->id}}</td>
                 <td>{{$post->name}}</td>
                 <td>{{$post->created_at->format('d/m/Y')}}</td>
               
                 <td width='10px'>
                     <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                 </td>
                 <td width='10px'>
                     <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                         @csrf    
                         @method('delete')

                         <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                     </form>
                 </td>
             </tr>
             <tr class="">
                <td class="bg-success">{{$post->id}}</td>
                <td>{{$post->name_it}}</td>
                
            </tr>
         @endforeach
        </tbody>
       
    </table>
</div>

<div class="card-footer">
    {{$posts->links()}}
</div>

@else 

<div class="card-body">
    <strong>No hay ningún registro</strong>
</div>
       
   @endif

   <tbody>
   
   </tbody>
</div>
