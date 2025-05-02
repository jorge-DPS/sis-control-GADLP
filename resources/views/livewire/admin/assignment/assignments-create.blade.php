<form method="POST" wire:submit.prevent='createAssignment' ">
    @csrf

    <!-- Lugar -->
    <div class="mb-4">
        <label for="id_branch" class="block text-sm font-medium text-gray-700">Lugar - ubucación</label>
        <select wire:model="id_branch" id="id_branch"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
            <option selected disabled>Seleccionar una desconsentrada...</option>
            @foreach ($branches as $branch)
                <option value="{{ $branch->id }}">{{ $branch->descripcion }}</option>
            @endforeach
        </select>
    </div>

    <!-- Descripción del problema -->
    <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Descripción del problema</label>
        <textarea id="description" wire:model="description" rows="3"
            placeholder="Detallar el problema que requiere soporte técnico..."
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"></textarea>
        @error('description') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
    </div>

    <!-- Técnicos Disponibles -->
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Técnicos Disponibles</label>
        <div class="space-y-2">
            @foreach ($technicians as $technician)
                <label class="flex items-center space-x-3">
                    <input type="checkbox" wire:model="selected_technicians" value="{{ $technician->id }}"
                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    <span class="text-sm text-gray-700">{{ $technician->name }}</span>
                    <span
                        class="text-xs font-semibold px-2 py-1 rounded-full 
                        {{ $technician->state === 'activo' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                        {{ ucfirst($technician->state) }}
                    </span>
                </label>
            @endforeach
        </div>
    </div>

    <!-- Botones -->
    <div class="mt-6 flex justify-end space-x-3">
        <button type="button"
            class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-2 px-4 rounded transition">Cancelar</button>
        <button type="submit"
            class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded transition">
            Guardar Pendiente
        </button>
        <button type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded transition">
            Asignar Técnicos
        </button>
    </div>
</form>

