@extends('layouts.app')

@section('title', 'Espacios')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Lista de Espacios</h2>
    <a href="{{ route('espacios.create') }}" class="btn btn-primary">Crear Espacio</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Capacidad</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($espacios as $espacio)
        <tr>
            <td>{{ $espacio->id }}</td>
            <td>{{ $espacio->nombre }}</td>
            <td>{{ $espacio->tipo }}</td>
            <td>{{ $espacio->capacidad }}</td>
            <td>{{ $espacio->ubicacion }}</td>
            <td>
                <a href="{{ route('espacios.edit', $espacio) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('espacios.destroy', $espacio) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este espacio?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $espacios->links() }}

@endsection
