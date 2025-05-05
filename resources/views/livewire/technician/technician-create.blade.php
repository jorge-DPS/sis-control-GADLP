<div class="max-w-7xl mx-auto py-12 px-6">
    <!-- Botón de Añadir Nueva Tarea -->
    <div class="flex justify-end mb-10">
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm px-5 py-3 rounded-md shadow transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-400">
            + Añadir Nueva Tarea
        </button>
    </div>

    <!-- Lista de Tareas -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Tarjeta de Tarea -->
        <div class="bg-white border border-gray-100 rounded-xl p-6 shadow-md hover:shadow-lg transition-all">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-gray-900 font-semibold text-base">Revisar y solucionar problemas de red</h3>
                <span class="text-xs font-medium text-green-700 bg-green-100 px-3 py-0.5 rounded-full">Completada</span>
            </div>
            <button class="bg-gray-300 text-gray-600 text-xs px-4 py-1 rounded-md cursor-not-allowed" disabled>
                -
            </button>
        </div>

        <!-- Tarjeta de Tarea -->
        <div class="bg-white border border-gray-100 rounded-xl p-6 shadow-md hover:shadow-lg transition-all">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-gray-900 font-semibold text-base">Actualizar drivers de las computadoras</h3>
                <span class="text-xs font-medium text-blue-700 bg-blue-100 px-3 py-0.5 rounded-full">En Proceso</span>
            </div>
            <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs px-4 py-1 rounded-md transition">
                Completar
            </button>
        </div>

        <!-- Tarjeta de Tarea -->
        <div class="bg-white border border-gray-100 rounded-xl p-6 shadow-md hover:shadow-lg transition-all">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-gray-900 font-semibold text-base">Documentar cambios realizados</h3>
                <span class="text-xs font-medium text-red-700 bg-red-100 px-3 py-0.5 rounded-full">Pendiente</span>
            </div>
            <button class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs px-4 py-1 rounded-md transition">
                Iniciar
            </button>
        </div>
    </div>
</div>
