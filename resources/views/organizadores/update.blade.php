<form method="POST" action="{{ route('eventos.update', $evento->id) }}">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="{{ $evento->nombre }}" required><br><br>
    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion" value="{{ $evento->descripcion }}" required><br><br>
    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ $evento->fecha_inicio }}" required><br><br>
    <label for="fecha_fin">Fecha de Fin:</label>
    <input type="date" id="fecha_fin" name="fecha_fin" value="{{ $evento->fecha_fin }}" required><br><br>
    <label for="ubicacion">Ubicación:</label>
    <input type="text" id="ubicacion" name="ubicacion" value="{{ $evento->ubicacion }}" required><br><br>
    <button type="submit">Actualizar Evento</button>
</form>
