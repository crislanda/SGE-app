<form method="POST" action="{{ route('participaciones.update', $participacion->id) }}">
    @csrf
    @method('PUT')
    <label for="evento_id">Evento:</label>
    <select id="evento_id" name="evento_id" required>
        @foreach($eventos as $evento)
            <option value="{{ $evento->id }}" @if($evento->id == $participacion->evento_id) selected @endif>{{ $evento->nombre }}</option>
        @endforeach
    </select>
    <label for="organizador_id">Organizador:</label>
    <select id="organizador_id" name="organizador_id" required>
        @foreach($organizadores as $organizador)
            <option value="{{ $organizador->id }}" @if($organizador->id == $participacion->organizador_id) selected @endif>{{ $organizador->nombre }}</option>
        @endforeach
    </select>
    <label for="rol">Rol:</label>
    <input type="text" id="rol" name="rol" value="{{ $participacion->rol }}" required>
    <button type="submit">Actualizar Participación</button>
</form>
