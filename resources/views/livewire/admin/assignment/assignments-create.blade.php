<form method="POST" wire:submit.prevent='storeAssignment'>
    <!-- Tipo de cuenta -->
    <div class="mb-4">
        <x-input-label for="user_id" :value="__('Tecnico')" />
        <select wire:model="user_id" id="user_id"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option disabled selected>--Seleccione un personal--</option>
            @foreach ($users  as $user)
                <option value="{{ $user->id }}">{{ $user->name . ' ' . $user->last_name }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('user_type_id')" class="mt-2" />
    </div>

    <!-- Celular -->
    <div class="mb-4">
        <x-input-label for="phone" :value="__('Celular')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="text" wire:model="phone" :value="old('phone')"
            autofocus />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>

    <!-- Botón de Enviar -->
    <x-primary-button class="w-full justify-center bg-indigo-600 hover:bg-indigo-700 transition">
        {{ __('Crear Cuenta') }}
    </x-primary-button>
</form>
