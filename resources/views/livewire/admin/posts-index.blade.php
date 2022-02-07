<div class="card">
    
    <div class="card-header">
        <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre de un post">
    </div>

    @if($posts->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
            <div class="mt-4">
              sasa  {{$posts->links()}}
            </div>
        </table>
    </div>
   
    @else
    <div class="card-body">
    <strong>No hay ningun registro..</strong>
    </div>
    
    @endif
    {{-- Correr para obtener todos los colores --}}
 <div>
        <p
            class="
    bg-gray-100
    bg-gray-200
    bg-gray-300
    bg-gray-400
    bg-gray-500
    bg-gray-600
    bg-gray-700
    bg-gray-800
    bg-gray-900
    bg-red-100
    bg-red-200
    bg-red-300
    bg-red-400
    bg-red-500
    bg-red-600
    bg-red-700
    bg-red-800
    bg-red-900
    bg-yellow-100
    bg-yellow-200
    bg-yellow-300
    bg-yellow-400
    bg-yellow-500
    bg-yellow-600
    bg-yellow-700
    bg-yellow-800
    bg-yellow-900
    bg-green-100
    bg-green-200
    bg-green-300
    bg-green-400
    bg-green-500
    bg-green-600
    bg-green-700
    bg-green-800
    bg-green-900
    bg-blue-100
    bg-blue-200
    bg-blue-300
    bg-blue-400
    bg-blue-500
    bg-blue-600
    bg-blue-700
    bg-blue-800
    bg-blue-900
    bg-indigo-100
    bg-indigo-200
    bg-indigo-300
    bg-indigo-400
    bg-indigo-500
    bg-indigo-600
    bg-indigo-700
    bg-indigo-800
    bg-indigo-900
    bg-purple-100
    bg-purple-200
    bg-purple-300
    bg-purple-400
    bg-purple-500
    bg-purple-600
    bg-purple-700
    bg-purple-800
    bg-purple-900
    bg-pink-100
    bg-pink-200
    bg-pink-300
    bg-pink-400
    bg-pink-500
    bg-pink-600
    bg-pink-700
    bg-pink-800
    bg-pink-900
    ">
            Prueba</p>
</div> 
</div>