<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
            {{ __('Detalles de Usuario') }}
        </h2>
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 mt-6 rounded-lg shadow">
        <div class="space-y-4 text-gray-800 dark:text-gray-200 text-sm">
            <p>
                <span class="font-semibold">ID:</span>
                {{ $user->id }}
            </p>
            <p>
                <span class="font-semibold">Nombre:</span>
                {{ $user->name }}
            </p>
            <p>
                <span class="font-semibold">Correo Electrónico:</span>
                {{ $user->email }}
            </p>
            <p>
                <span class="font-semibold">Rol:</span>
                {{ $user->role }}
            </p>
        </div>

        <div class="mt-6">
            <a href="{{ route('usuarios.index') }}"
               class="inline-block px-4 py-2 text-sm bg-gray-500 text-white rounded-md hover:bg-gray-600 transition">
                Volver
            </a>
        </div>
    </div>
</x-app-layout>