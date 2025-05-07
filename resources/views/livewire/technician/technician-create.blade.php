<div class="max-w-7xl mx-auto py-12 px-6">

    <!-- Formulario para añadir tarea -->
    <div id="taskForm" class="mt-6 bg-white p-8 rounded-xl shadow-lg w-full sm:w-96 mx-auto border border-gray-300">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Añadir Nueva Tarea aqui</h3>

        <div class="mb-2">
            <!-- Descripción -->
            <label for="descripcion" class="text-gray-700 text-sm font-medium">Descripción</label>
            <input id="descripcion" wire:model="descripcion" type="text" placeholder="Escribe tu tarea..."
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 mt-2 text-gray-700 focus:outline-none" />
            <x-input-error :messages="$errors->get('descripcion')" class="" />
        </div>

        <div>
            <!-- Observaciones -->
            <label for="observaciones" class="text-gray-700 text-sm font-medium">Observaciones</label>
            <input id="observaciones" wire:model="observaciones" type="text" placeholder="Observaciones..."
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 mb-6 mt-2 text-gray-700 focus:outline-none" />
        </div>

        <!-- Botón Añadir Tarea -->
        <button wire:click="createTask" id="submitTaskButton"
            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm px-5 py-3 rounded-md transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-400">
            Añadir Tarea
        </button>
    </div>

    <!-- Título de la lista de tareas -->
    <h2 class="text-4xl font-bold text-gray-800 mb-8 mt-12">Lista de Tareas</h2>

    <!-- Lista de Tareas -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
        <!-- Tarjeta 1 -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Revisar y solucionar problemas de red</h3>
                <span class="text-center text-xs font-semibold text-green-800 bg-green-100 px-3 py-1 rounded-full">✅
                    Completada</span>
            </div>
            <button class="w-full bg-gray-200 text-gray-600 text-sm px-4 py-2 rounded-md cursor-not-allowed">
                Tarea completada
            </button>
        </div>

        <!-- Tarjeta 2 -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Actualizar drivers de las computadoras</h3>
                <span class="text-center text-xs font-semibold text-yellow-800 bg-yellow-100 px-3 py-1 rounded-full">🛠
                    En Proceso</span>
            </div>
            <button
                class="w-full flex justify-center items-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm px-4 py-2 rounded-md transition duration-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Marcar como Completada
            </button>
        </div>

        <!-- Tarjeta 3 -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Documentar cambios realizados</h3>
                <span class="text-center text-xs font-semibold text-red-800 bg-red-100 px-3 py-1 rounded-full">🕒
                    Pendiente</span>
            </div>
            <button wire:click.prevent="createTask"
                class="w-full flex justify-center items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm px-4 py-2 rounded-md transition duration-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Iniciar Tarea
            </button>
        </div>
    </div>
</div>
