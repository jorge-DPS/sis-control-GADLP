<div class="py-12 ">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <!-- Título de la sección -->
                <h1 class="text-3xl font-semibold text-center mb-6 text-indigo-700">
                    {{ __('Staff Técnico - Soporte y Mantenimiento') }}</h1>

                <!-- Botón para añadir personal -->
                <div class="flex justify-end mb-4">
                    <a href="{{ route('personal.create') }}"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-200"
                        id="addStaffBtn">
                        Añadir Personal
                    </a>
                </div>

                <!-- Tabla de personal técnico -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                    <!-- Ejemplo de tarjeta -->

                    @foreach ($users as $user)
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                        <h3 class="text-lg font-semibold text-gray-800 truncate">
                            {{ $user->name . ' ' . $user->last_name }}</h3>
                        <p class="text-sm text-gray-500 mt-2">Especialidad:
                            <span class="font-medium text-indigo-600">{{ $user->userType->description }}</span>
                        </p>
                        <p class="text-sm text-gray-500 mt-1">Estado:
                            <span class="font-medium
                @if ($user->state == 'activo') text-green-500

                @else
                    text-yellow-500 @endif
            ">
                                @if ($user->state == 'activo')
                                Activo
                                @else
                                Ocupado
                                @endif
                            </span>
                        </p>

                        <div class="flex justify-start mt-4 space-x-6">
                            <!-- Botón Ver -->
                            <button
                                class="text-blue-600 hover:text-blue-800 transition duration-200 py-2 px-4 rounded-md bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Ver</button>

                            <!-- Botón Eliminar -->
                            <button
                                class="text-red-600 hover:text-red-800 transition duration-200 py-2 px-4 rounded-md bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">Eliminar</button>
                        </div>
                    </div>
                    @endforeach
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
</div>
