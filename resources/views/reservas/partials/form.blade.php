<form action="{{ $action }}" method="POST">
    @csrf
    @if(in_array($method, ['PUT','PATCH']))
        @method($method)
    @endif

    <div class="mb-3">
        <label class="form-label">Espacio</label>
        <select name="espacio_id" class="form-control @error('espacio_id') is-invalid @enderror">
            <option value="">-- Seleccione --</option>
            @foreach($espacios as $esp)
                <option value="{{ $esp->id }}"
                    {{ (int)old('espacio_id', $reserva->espacio_id ?? '') === $esp->id ? 'selected' : '' }}>
                    {{ $esp->nombre }} ({{ $esp->tipo }}) - {{ $esp->ubicacion }}
                </option>
            @endforeach
        </select>
        @error('espacio_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Solicitante</label>
        <input type="text" name="solicitante" class="form-control @error('solicitante') is-invalid @enderror"
               value="{{ old('solicitante', $reserva->solicitante ?? '') }}">
        @error('solicitante') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror"
                   value="{{ old('fecha', $reserva->fecha ?? '') }}">
            @error('fecha') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label">Hora inicio</label>
            <input type="time" name="hora_inicio" class="form-control @error('hora_inicio') is-invalid @enderror"
                   value="{{ old('hora_inicio', isset($reserva->hora_inicio) ? substr($reserva->hora_inicio,0,5) : '') }}">
            @error('hora_inicio') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label">Hora fin</label>
            <input type="time" name="hora_fin" class="form-control @error('hora_fin') is-invalid @enderror"
                   value="{{ old('hora_fin', isset($reserva->hora_fin) ? substr($reserva->hora_fin,0,5) : '') }}">
            @error('hora_fin') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Motivo (opcional)</label>
        <input type="text" name="motivo" class="form-control @error('motivo') is-invalid @enderror"
               value="{{ old('motivo', $reserva->motivo ?? '') }}">
        @error('motivo') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <button class="btn btn-primary" type="submit">Guardar</button>
    <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
