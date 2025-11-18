@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Espacio</h1>

    @include('espacios.partials.form', [
        'action' => route('espacios.store'),
        'method' => 'POST',
        'espacio' => null,
    ])
</div>
@endsection
