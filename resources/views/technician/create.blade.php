<x-technician>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tareas') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <livewire:technician.technician-create :technical-assignment="$technicalAssignment" />
    </div>

</x-technician>
