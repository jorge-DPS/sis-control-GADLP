<div class="max-w-7xl mx-auto py-12 px-6">

    <div id="taskForm" class="mt-6 bg-white p-8 rounded-xl shadow-lg w-full sm:w-96 mx-auto border border-gray-300">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Añadir Nueva Tarea</h3>
    
        <div>
            <div class="mb-2">
                <label for="descripcion" class="text-gray-700 text-sm font-medium">Descripción</label>
                <input id="descripcion" wire:model="descripcion" type="text" placeholder="Escribe tu tarea..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 mt-2 text-gray-700 focus:outline-none" />
                @error('descripcion') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <label for="observaciones" class="text-gray-700 text-sm font-medium">Observaciones</label>
                <input id="observaciones" wire:model="observaciones" type="text" placeholder="Observaciones..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 mb-6 mt-2 text-gray-700 focus:outline-none" />
            </div>
    
            <!-- Botón con JS para añadir tarea y limpiar campos -->
            <button id="btnAgregarTarea"  wire:click="createTask"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm px-5 py-3 rounded-md transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-400">
                Añadir Tarea
            </button>
        </div>
    
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const btnAgregarTarea = document.getElementById('btnAgregarTarea');
                
                if (btnAgregarTarea) {
                    btnAgregarTarea.addEventListener('click', function() {
                        // Esperar un poco para que Livewire haga su trabajo
                        setTimeout(function() {
                            // Limpiar campos directamente
                            document.getElementById('descripcion').value = '';
                            document.getElementById('observaciones').value = '';
                            
                            // Notificar a Livewire de los cambios
                            document.getElementById('descripcion').dispatchEvent(new Event('input', { bubbles: true }));
                            document.getElementById('observaciones').dispatchEvent(new Event('input', { bubbles: true }));
                        }, 300); // Ajusta este tiempo según sea necesario
                    });
                }
            });
        </script>
    </div>
    
    
    

    <!-- Título de la lista de tareas -->
    <h2 class="text-4xl font-bold text-gray-800 mb-8 mt-12">Lista de Tareas</h2>

    <!-- Lista de Tareas -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
        @foreach ($tasks as $task)
            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all">
                <!-- Encabezado de la tarjeta -->
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">{{ $task->descripcion }}</h3>
                    @if ($task->state == 'completada')
                        <span class="text-center text-xs font-semibold text-green-800 bg-green-100 px-3 py-1 rounded-full">
                            ✅ {{ $task->state }}
                        </span>
                    @else
                        <span class="text-center text-xs font-semibold text-yellow-800 bg-yellow-100 px-3 py-1 rounded-full">
                            🛠 En Proceso
                        </span>
                    @endif
                </div>
    
                <!-- Observaciones -->
                <div class="">
                    <p class="text-sm font-normal text-gray-900">{{ $task->observaciones }}</p>
                </div>
    
                <!-- Botones -->
                <div class="flex justify-center gap-4 mt-4">
                    @if ($task->state == 'pendiente')
                        <button  wire:click="marcarButton({{ $task->id }})" class="w-full flex justify-center items-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm px-4 py-2 rounded-md transition duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Completadar
                        </button>
                    @endif
                    @if ($task->state == 'completada')
                        <button class="w-full bg-gray-200 text-gray-600 text-sm px-4 py-2 rounded-md cursor-not-allowed">
                            Tarea completada
                        </button>
                    @endif
                    <button wire:click="deleteTask({{ $task }})" class="w-full bg-red-600 hover:bg-red-700 text-white text-sm px-4 py-2 rounded-md transition duration-300">
                        Eliminar Terea
                    </button>
                </div>
            </div>
        @endforeach
    </div>
    
    {{ $tasks->links() }}
</div>
