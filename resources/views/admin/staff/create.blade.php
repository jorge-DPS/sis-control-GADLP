<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añadir personal tecnico') }}
        </h2>
    </x-slot>

    <div class="py-12 mx-4 md:mx-0">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Título del formulario -->
                    <h1 class="text-3xl font-bold text-center mb-6 text-indigo-600">Datos del usuario</h1>
                    
                    <!-- Formulario centrado y con espaciado -->
                    <div class="md:flex md:justify-center p-5 space-y-6 md:space-y-0 md:flex-col  mx-auto">
                        <!-- Formulario Livewire -->
                        <livewire:admin.personal.staff-create />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
