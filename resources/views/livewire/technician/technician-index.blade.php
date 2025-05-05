<div class="max-w-7xl mx-auto py-10 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($assignments as $asignacionTecnica)
            @php
                $asignacion = $asignacionTecnica->assignment;
                $estado = strtolower($asignacion->state);
                $colores = [
                    'pendiente' => 'bg-red-100 text-red-700',
                    'en progreso' => 'bg-blue-100 text-blue-700',
                    'finalizado' => 'bg-green-100 text-green-700',
                    'asignado' => 'bg-yellow-100 text-yellow-700',
                ];
                $color = $colores[$estado] ?? 'bg-amber-100 text-amber-700';
            @endphp

            <!-- Card -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">ID #{{ $asignacion->id }}</h3>
                        <p class="text-sm text-gray-600"><strong>Lugar:</strong> {{ $asignacion->lugar->descripcion ?? 'Sin dato' }}</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-xs font-bold px-3 py-1 rounded-full {{ $color }} ">
                            {{ ucfirst($asignacion->state) }}
                        </span>
                    </div>
                </div>

                <div class="space-y-2">
                    <p class="text-sm text-gray-700"><strong>Problema:</strong> {{ $asignacion->description_problem }}</p>
                    <p class="text-sm text-gray-700"><strong>Asignado por:</strong> {{ $asignacion->administrador->name ?? 'Desconocido' }}</p>
                    <p class="text-sm text-gray-700"><strong>Fecha Asignación:</strong> {{ $asignacion->fecha_asignacion ?? 'No asignada' }}</p>
                </div>

                <!-- Botones -->
                <div class="mt-6 flex justify-center gap-4">
                    @if($asignacion->state !== 'finalizado')
                        <a href="{{ route('task.create') }}" class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold px-6 py-2 rounded-lg shadow transition">
                            Añadir Tarea
                        </a>
                    @else
                        <button disabled class="bg-gray-300 text-gray-600 text-sm font-semibold px-6 py-2 rounded-lg shadow cursor-not-allowed">
                            Asignación Finalizada
                        </button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="mt-6 flex justify-center">
        <div class="flex items-center space-x-2">
            <span class="text-sm">Mostrando 1-4 de 12 asignaciones</span>
            <div class="flex space-x-2">
                <button class="px-3 py-1 rounded-md bg-gray-300 hover:bg-gray-400 text-sm">1</button>
                <button class="px-3 py-1 rounded-md bg-gray-300 hover:bg-gray-400 text-sm">2</button>
                <button class="px-3 py-1 rounded-md bg-gray-300 hover:bg-gray-400 text-sm">3</button>
                <button class="px-3 py-1 rounded-md bg-gray-300 hover:bg-gray-400 text-sm">→</button>
            </div>
        </div>
    </div> --}}
</div>
