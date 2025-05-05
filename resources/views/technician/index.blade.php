<x-technician>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tareas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @forelse($assignments as $asignacionTecnica)
    @php
        $asignacion = $asignacionTecnica->assignment;
    @endphp

    <div class="bg-white p-4 rounded shadow mb-4">
        <h2 class="text-lg font-bold text-gray-800">Asignación #{{ $asignacion->id }}</h2>

        <p class="text-sm text-gray-600"><strong>Lugar:</strong> {{ $asignacion->lugar->descripcion ?? 'Sin dato' }}</p>
        <p class="text-sm text-gray-600"><strong>Problema:</strong> {{ $asignacion->description_problem }}</p>
        <p class="text-sm text-gray-600"><strong>Asignado por:</strong> {{ $asignacion->administrador->name ?? 'Desconocido' }}</p>
        <p class="text-sm text-gray-600"><strong>Fecha:</strong> {{ $asignacion->fecha_asignacion ?? 'No asignada' }}</p>
        <p class="text-sm text-gray-600"><strong>Estado:</strong> {{ ucfirst($asignacion->state) }}</p>
    </div>
@empty
    <div class="p-4 bg-yellow-100 text-yellow-800 rounded">
        No tienes asignaciones activas por el momento.
    </div>
@endforelse
    </div>
</x-technician>
