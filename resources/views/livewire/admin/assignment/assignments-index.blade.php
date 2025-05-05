<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="overflow-hidden sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <!-- Título de la sección -->
            <h1 class="text-3xl font-semibold text-center mb-6 text-indigo-700">
                {{ __('Panel de Asignaciones') }}</h1>

            <!-- Botón para añadir personal -->
            <div class="flex justify-end mb-4">
                <a href="{{ route('asignaciones.create') }}"
                    class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-200"
                    id="addStaffBtn">
                    Añadir Asignacion
                </a>
            </div>

            <!-- Tabla de asignaciones -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">

                @foreach ($assignments as $assignment)
                    <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                        <!-- Lugar -->
                        <h3 class="text-lg font-semibold text-gray-800">
                            {{ $assignment->lugar->descripcion ?? 'Sin ubicación' }}
                        </h3>

                        <!-- Administrador -->
                        <p class="text-sm text-gray-500">
                            Asignado por:
                            <span class="font-medium text-gray-700">
                                {{ $assignment->administrador->name ?? 'Desconocido' }}
                            </span>
                        </p>

                        <!-- Fecha -->
                        <p class="text-sm text-gray-500">
                            Fecha de asignación:
                            <span class="font-medium text-gray-700">
                                {{ $assignment->fecha_asignacion ? \Carbon\Carbon::parse($assignment->fecha_asignacion)->format('d/m/Y') : 'Pendiente' }}
                            </span>
                        </p>

                        <!-- Estado -->
                        <p class="text-sm text-gray-500">
                            Estado:
                            <span class="font-medium
                                {{ $assignment->state === 'pendiente' ? 'text-yellow-500' : 'text-green-600' }}">
                                {{ ucfirst($assignment->state) }}
                            </span>
                        </p>

                        <!-- Descripción -->
                        <p class="text-sm text-gray-500 mt-2">
                            Problema: <br>
                            <span class="font-medium text-gray-700">
                                {{ $assignment->description_problem }}
                            </span>
                        </p>

                        <!-- Técnicos asignados -->
                        @php
                            $totalTecnicos = $assignment->tecnicosAsignados->count();
                        @endphp

                        <p class="text-sm text-gray-500 mt-2">
                            Técnicos asignados:
                            <span class="font-medium text-gray-700">
                                {{ $totalTecnicos > 0 ? $totalTecnicos : 'Ninguno' }}
                            </span>
                        </p>

                        <!-- Botones -->
                        <div class="flex justify-center mt-4 space-x-4">
                            <button class="text-blue-600 hover:text-blue-800 transition duration-200">Ver</button>
                            <button class="text-red-600 hover:text-red-800 transition duration-200">Eliminar</button>
                        </div>
                    </div>
                @endforeach
            </div>



            <!-- Más tarjetas de personal -->
        </div>
        <!-- Formulario de añadir personal (oculto por defecto) -->
        {{-- <div id="addStaffForm" class="mt-6 hidden">
                    <form action="" class="space-y-6">
                        <div>
                            <x-input-label for="name" :value="__('Nombre Completo')" />
                            <x-text-input id="name"
                                class="block mt-2 w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                type="text" name="name" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="text-sm text-red-600 mt-2" />
                        </div>

                        <div>
                            <x-input-label for="specialty" :value="__('Especialidad')" />
                            <x-text-input id="specialty"
                                class="block mt-2 w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                type="text" name="specialty" required />
                            <x-input-error :messages="$errors->get('specialty')" class="text-sm text-red-600 mt-2" />
                        </div>

                        <div>
                            <x-input-label for="status" :value="__('Estado')" />
                            <select id="status" name="status"
                                class="block mt-2 w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="active">Activo</option>
                                <option value="inactive">Inactivo</option>
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-200">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div> --}}
    </div>
</div>
</div>
