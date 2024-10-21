@extends('partials.layout')

@section('title','Lista de productos')



@section('content')
<hr>
<h1>@lang('Productos')</h1>
<a href="{{route('productos.create')}}">Crear Producto</a>

<table>
   <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Imagen</th>
    </tr>
    @foreach ($productos as $producto )    
    <tr>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->descripcion}}</td>
        <td><img src="{{asset('imagen/'.$producto->imagen)}}" alt="" width="200px" height="150px"></td>
        <td><a href="{{route('productos.edit', $producto->id)}}">Editar</a>
        <form action="{{route('productos.delete', $producto->id)}}" method="POST">
            @csrf
            @method('DELETE');
            <button type="submit">Borrar</button>
        </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection