@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>CampusBooking Lite</h1>
    <p class="lead">Módulo mínimo para gestionar Espacios y Reservas.</p>

    <div class="d-flex justify-content-center gap-2">
        <a href="{{ route('espacios.index') }}" class="btn btn-outline-primary">Ir a Espacios</a>
        <a href="{{ route('reservas.index') }}" class="btn btn-outline-primary">Ir a Reservas</a>
    </div>
</div>
@endsection
