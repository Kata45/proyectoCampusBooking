@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Reserva</h1>

    @include('reservas.partials.form', [
        'action' => route('reservas.update', $reserva),
        'method' => 'PUT',
        'reserva' => $reserva, 
        'espacios' => $espacios])

</div>
@endsection
