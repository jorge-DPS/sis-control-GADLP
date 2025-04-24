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
                <!-- Ejemplo de tarjeta -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800">Juan Pérez</h3>
                    <p class="text-sm text-gray-500">Especialidad: <span class="font-medium text-gray-700">Soporte de
                            Equipos</span></p>
                    <p class="text-sm text-gray-500">Estado: <span class="font-medium text-green-500">Activo</span></p>

                    <div class="flex justify-center mt-4 space-x-4">
                        <!-- Botones de acción -->
                        <button class="text-blue-600 hover:text-blue-800 transition duration-200">Ver</button>
                        <button class="text-red-600 hover:text-red-800 transition duration-200">Eliminar</button>
                    </div>
                </div>

                <!-- Más tarjetas de personal -->
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800">Ana Gómez</h3>
                    <p class="text-sm text-gray-500">Especialidad: <span
                            class="font-medium text-gray-700">Mantenimiento</span></p>
                    <p class="text-sm text-gray-500">Estado: <span class="font-medium text-yellow-500">Pendiente</span>
                    </p>

                    <div class="flex justify-center mt-4 space-x-4">
                        <button class="text-blue-600 hover:text-blue-800 transition duration-200">Ver</button>
                        <button class="text-red-600 hover:text-red-800 transition duration-200">Eliminar</button>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800">Carlos Ruiz</h3>
                    <p class="text-sm text-gray-500">Especialidad: <span class="font-medium text-gray-700">Desarrollo de
                            Software</span></p>
                    <p class="text-sm text-gray-500">Estado: <span class="font-medium text-gray-700">Activo</span></p>

                    <div class="flex justify-center mt-4 space-x-4">
                        <button class="text-blue-600 hover:text-blue-800 transition duration-200">Ver</button>
                        <button class="text-red-600 hover:text-red-800 transition duration-200">Eliminar</button>
                    </div>
                </div>

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
