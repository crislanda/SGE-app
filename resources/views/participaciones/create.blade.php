<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Participación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('participaciones.store') }}" class="row g-3">
                        @csrf
                        <label for="evento_id" class="col-md-2 col-form-label">Evento:</label>
                        <div class="col-md-10">
                            <select id="evento_id" name="evento_id" class="form-control" required>
                                @foreach($eventos as $evento)
                                    <option value="{{ $evento->id }}">{{ $evento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="organizador_id" class="col-md-2 col-form-label">Organizador:</label>
                        <div class="col-md-10">
                            <select id="organizador_id" name="organizador_id" class="form-control" required>
                                @foreach($organizadores as $organizador)
                                    <option value="{{ $organizador->id }}">{{ $organizador->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="rol" class="col-md-2 col-form-label">Rol:</label>
                        <div class="col-md-10">
                            <input type="text" id="rol" name="rol" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary w-full">Crear Participación</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
