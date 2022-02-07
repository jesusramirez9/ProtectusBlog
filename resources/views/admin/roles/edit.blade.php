@extends('adminlte::page')

@section('title', 'Letika')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
@if (session('info'))

<div class="alert alert-success">
    {{session('info')}}
</div>
    
@endif
    <div class="card">
        <div class="card-body">
                {!! Form::model($role, ['route' =>['admin.roles.update',$role], 'method'=>'put']) !!}
                    @include('admin.roles.partials.forms')
                {!! Form::submit('Actualizar Rol', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
        </div>
    </div>
@stop

