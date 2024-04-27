@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Eventos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('eventos.create') }}" class="btn btn-outline-primary w-full">Crear Evento</a>
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID Evento</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Fecha de inicio</th>
                                <th scope="col">Fecha de fin</th>
                                <th scope="col">Ubicación</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($eventos as $evento)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $evento->id }}</td>
                                    <td>{{ $evento->nombre }}</td>
                                    <td>{{ $evento->descripcion }}</td>
                                    <td>{{ $evento->fecha_inicio }}</td>
                                    <td>{{ $evento->fecha_fin }}</td>
                                    <td>{{ $evento->ubicacion }}</td>
                                    <td>
                                        <div class="btn-group w-full">
                                            <a href="{{ route('eventos.edit', $evento->id) }}"
                                                class="btn btn-outline-warning">Editar</a>
                                            <form method="POST"
                                                action="{{ route('eventos.destroy', $evento->id) }}"
                                                style="display: none;" id="delete-form-{{ $evento->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-outline-danger"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $evento->id }}').submit();">
                                                Eliminar
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No se encontraron eventos.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
