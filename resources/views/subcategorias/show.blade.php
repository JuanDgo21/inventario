<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
            {{ __('Detalles de la Subcategoría') }}
        </h2>
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 mt-6 rounded shadow-md">
        <div class="space-y-3">
            <p>
                <span class="font-semibold text-gray-700 dark:text-gray-300">ID:</span>
                <span class="text-gray-800 dark:text-white">{{ $subcategoria->id }}</span>
            </p>
            <p>
                <span class="font-semibold text-gray-700 dark:text-gray-300">Nombre:</span>
                <span class="text-gray-800 dark:text-white">{{ $subcategoria->nombre }}</span>
            </p>
            <p>
                <span class="font-semibold text-gray-700 dark:text-gray-300">Categoría:</span>
                <span class="text-gray-800 dark:text-white">{{ $subcategoria->categoria->nombre }}</span>
            </p>
        </div>

        <div class="mt-6 flex justify-end">
            <a href="{{ route('subcategorias.index') }}"
               class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">
                Volver
            </a>
        </div>
    </div>
</x-app-layout>