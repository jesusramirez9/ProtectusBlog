@extends('adminlte::page')

@section('title', 'Letika')

@section('content_header')
@can('admin.tags.index')
<a class="btn btn-secondary  float-right" href="{{route('admin.tags.create')}}">Nueva etiqueta</a>
@endcan

<h1>Mostrar listado etiqueta</h1>
@stop

@section('content')
@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif
<div class="card">
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
                @foreach($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->name}}</td>
                    <td width="10px"> 
                        @can('admin.tags.edit')
                        <a href="{{route('admin.tags.edit',$tag)}}" class="btn btn-primary btn-sm">Editar</a>
                        @endcan
                        
                    </td>
                    <td width="10px">
                        @can('admin.tags.destroy', Model::class)
                        <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                        @endcan
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop