<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Evento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('eventos.update', $evento->id) }}" class="row g-3">
                        @csrf
                        @method('PUT')
                        <label for="nombre" class="col-md-2 col-form-label">Nombre:</label>
                        <div class="col-md-10">
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $evento->nombre }}" required>
                        </div>
                        <label for="descripcion" class="col-md-2 col-form-label">Descripción:</label>
                        <div class="col-md-10">
                            <textarea id="descripcion" name="descripcion" class="form-control" required>{{ $evento->descripcion }}</textarea>
                        </div>
                        <label for="fecha_inicio" class="col-md-2 col-form-label">Fecha de Inicio:</label>
                        <div class="col-md-10">
                            <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{ $evento->fecha_inicio }}" required>
                        </div>
                        <label for="fecha_fin" class="col-md-2 col-form-label">Fecha de Fin:</label>
                        <div class="col-md-10">
                            <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" value="{{ $evento->fecha_fin }}" required>
                        </div>
                        <label for="ubicacion" class="col-md-2 col-form-label">Ubicación:</label>
                        <div class="col-md-10">
                            <input type="text" id="ubicacion" name="ubicacion" class="form-control" value="{{ $evento->ubicacion }}" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary w-full">Actualizar Evento</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
