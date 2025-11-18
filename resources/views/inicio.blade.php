@extends('layout')

@section('content')
<div class="container text-center">

    <h1 class="mb-4">CampusBooking Lite</h1>
    <p class="lead mb-5">Selecciona un módulo para continuar</p>

    <div class="row justify-content-center">

        <div class="col-md-3">
            <a href="{{ route('espacios.index') }}" class="btn btn-primary btn-lg w-100 mb-3">
                Gestión de Espacios
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('reservas.index') }}" class="btn btn-success btn-lg w-100 mb-3">
                Gestión de Reservas
            </a>
        </div>

    </div>

</div>
@endsection
