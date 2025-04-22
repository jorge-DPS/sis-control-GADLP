<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personal - Tecnico') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <!-- Título de la sección -->
                <h1 class="text-3xl font-semibold text-center mb-6 text-indigo-700">{{ __("Staff Técnico - Soporte y Mantenimiento") }}</h1>
                
                <!-- Botón para añadir personal -->
                <div class="flex justify-end mb-4">
                    <a href="{{ route('personal.create') }}" class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-200" id="addStaffBtn">
                        Añadir Personal
                    </a>
                </div>

                <!-- Tabla de personal técnico -->
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto bg-white shadow-sm rounded-lg border border-gray-200">
                        <thead class="bg-indigo-100">
                            <tr>
                                <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Nombre</th>
                                <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Especialidad</th>
                                <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Estado</th>
                                <th class="py-3 px-6 text-center text-sm font-medium text-gray-700">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-600">
                            <!-- Ejemplo de fila -->
                            <tr>
                                <td class="py-4 px-6">Juan Pérez</td>
                                <td class="py-4 px-6">Soporte de Equipos</td>
                                <td class="py-4 px-6">Activo</td>
                                <td class="py-4 px-6 text-center">
                                    <button class="text-blue-600 hover:text-blue-800 transition duration-200">Ver</button>
                                    <button class="text-red-600 hover:text-red-800 transition duration-200 ml-2">Eliminar</button>
                                </td>
                            </tr>
                            <!-- Más filas de personal -->
                        </tbody>
                    </table>
                </div>

                <!-- Formulario de añadir personal (oculto por defecto) -->
                <div id="addStaffForm" class="mt-6 hidden">
                    <form action="" class="space-y-6">
                        <div>
                            <x-input-label for="name" :value="__('Nombre Completo')" />
                            <x-text-input id="name" class="block mt-2 w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="name" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="text-sm text-red-600 mt-2" />
                        </div>

                        <div>
                            <x-input-label for="specialty" :value="__('Especialidad')" />
                            <x-text-input id="specialty" class="block mt-2 w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="specialty" required />
                            <x-input-error :messages="$errors->get('specialty')" class="text-sm text-red-600 mt-2" />
                        </div>

                        <div>
                            <x-input-label for="status" :value="__('Estado')" />
                            <select id="status" name="status" class="block mt-2 w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="active">Activo</option>
                                <option value="inactive">Inactivo</option>
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-200">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
