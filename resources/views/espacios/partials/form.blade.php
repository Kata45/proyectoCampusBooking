<form action="{{ $action }}" method="POST">
    @csrf
    @if(in_array($method, ['PUT','PATCH']))
        @method($method)
    @endif

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
               value="{{ old('nombre', $espacio->nombre ?? '') }}">
        @error('nombre') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror"
               value="{{ old('tipo', $espacio->tipo ?? '') }}">
        @error('tipo') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Capacidad</label>
        <input type="number" min="1" name="capacidad" class="form-control @error('capacidad') is-invalid @enderror"
               value="{{ old('capacidad', $espacio->capacidad ?? '') }}">
        @error('capacidad') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Ubicación</label>
        <input type="text" name="ubicacion" class="form-control @error('ubicacion') is-invalid @enderror"
               value="{{ old('ubicacion', $espacio->ubicacion ?? '') }}">
        @error('ubicacion') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <button class="btn btn-primary" type="submit">Guardar</button>
    <a href="{{ route('espacios.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
