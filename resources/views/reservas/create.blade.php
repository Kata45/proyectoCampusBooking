@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Reserva</h1>

    @include('reservas.partials.form', [
        'action' => route('reservas.store'),
        'method' => 'POST',
        'reserva' => null,
        'espacios' => $espacios])

</div>
@endsection
