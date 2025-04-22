<form method="POST" wire:submit.prevent='storeStaff'>

    <div>
        <x-input-label for="photo" :value="__('Foto')" />
        
        <!-- Contenedor para el input -->
        <div class="flex items-center space-x-4 mb-4">
            <!-- Input de archivo personalizado -->
            <input type="file" id="photo" wire:model="photo"
                class="block w-full text-sm text-gray-900 file:mr-4 file:rounded-lg file:border-0 file:bg-indigo-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-indigo-700 hover:file:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:file:bg-indigo-600 dark:file:text-indigo-100 dark:hover:file:bg-indigo-500 transition duration-200"
                accept="image/*" />
        </div>
    
        <!-- Mensaje de error -->
        <x-input-error :messages="$errors->get('photo')" class="mt-2 text-sm text-red-600" />
    </div>
    <!-- Nombre -->
    <div>
        <x-input-label for="name" :value="__('Nombres')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')" required
            autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Apellido -->
    <div class="mt-4">
        <x-input-label for="last_name" :value="__('Apellidos')" />
        <x-text-input id="last_name" class="block mt-1 w-full" type="text" wire:model="last_name" :value="old('last_name')"
            required autofocus autocomplete="last_name" />
        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
    </div>

    <!-- Carnet de identidad -->
    <div class="mt-4">
        <x-input-label for="identity_card" :value="__('Carnet de identidad')" />
        <x-text-input id="identity_card" class="block mt-1 w-full" type="text" wire:model="identity_card"
            :value="old('identity_card')" autofocus />
        <x-input-error :messages="$errors->get('identity_card')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" wire:model="email" :value="old('email')"
            required autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="user_type_id" :value="__('Tipo de Cuenta')" />
        <select wire:model="user_type_id" id="user_type_id"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            @foreach ($type_users  as $type_user)
                <option value="{{ $type_user->id }}">{{ $type_user->description }}</option>
            @endforeach
            
        </select>
        <x-input-error :messages="$errors->get('user_type_id')" class="mt-2" />
    </div>

    <!-- Celular -->
    <div class="mt-4">
        <x-input-label for="phone" :value="__('Celular')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="text" wire:model="phone" :value="old('phone')"
            autofocus />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>


    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full" type="password" wire:model="password" required
            autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="my-4">
        <x-input-label for="password_confirmation" :value="__('Repetir Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
            wire:model="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>


    <x-primary-button class="w-full justify-center">
        {{ __('Crear Cuenta') }}
    </x-primary-button>
</form>
