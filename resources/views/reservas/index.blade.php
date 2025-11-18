@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Reservas</h2>
    <a href="{{ route('reservas.create') }}" class="btn btn-primary">Crear Reserva</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Espacio</th>
            <th>Solicitante</th>
            <th>Fecha</th>
            <th>Hora inicio</th>
            <th>Hora fin</th>
            <th>Motivo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reservas as $reserva)
        <tr>
            <td>{{ $reserva->id }}</td>
            <td>{{ $reserva->espacio->nombre ?? '---' }}</td>
            <td>{{ $reserva->solicitante }}</td>
            <td>{{ $reserva->fecha }}</td>
            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s',$reserva->hora_inicio)->format('H:i') ?? $reserva->hora_inicio }}</td>
            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s',$reserva->hora_fin)->format('H:i') ?? $reserva->hora_fin }}</td>
            <td>{{ $reserva->motivo }}</td>
            <td>
                <a href="{{ route('reservas.edit', $reserva) }}" class="btn btn-sm btn-secondary">Editar</a>

                <form action="{{ route('reservas.destroy', $reserva) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminar reserva?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $reservas->links() }}
@endsection
