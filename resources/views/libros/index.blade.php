@extends('layout.plantilla')
@section('title','Lista de Libros')
@section('contenido')
<div class="row mt-5">
    <div class="col">
        <ul class="list-group" style="color:blueviolet">
            <li class="list-group-item active bg-danger text-center">Lista de Usuarios</li>
            @foreach($libro as $libros)
            <li class="list-group-item" style="color:blueviolet">
                <a class="texto" href="{{route('libros.mostrar', $libros->id)}}">{{$libros->titulo}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
@section('pagina')
{{$libro->links()}}
@endsection