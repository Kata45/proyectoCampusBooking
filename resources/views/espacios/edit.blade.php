@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Espacio</h1>

    @include('espacios.partials.form', [
        'action' => route('espacios.update', $espacio),
        'method' => 'PUT',
        'espacio' => $espacio
    ])
</div>
@endsection
