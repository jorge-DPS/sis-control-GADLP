<div>
    <!-- Formulario con espaciado adecuado -->
    <form action="" class="space-y-6">
        <!-- Campo de Nombres -->
        <div>
            <x-input-label for="name" :value="__('Nombres')" class="text-sm font-medium text-gray-700" />
            <x-text-input id="name" class="block mt-2 w-full rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="text-sm text-red-600 mt-2" />
        </div>
        
        <!-- Aquí puedes agregar más campos similares -->
        
        <!-- Botón de enviar -->
        <div>
            <x-primary-button class="w-full py-3 px-6 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition ease-in-out duration-200">
                {{ __('Publicar Asignación') }}
            </x-primary-button>
        </div>
    </form>
</div>