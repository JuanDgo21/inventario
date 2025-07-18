<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
            {{ __('Nuevo Producto') }}
        </h2>
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 rounded-lg shadow mt-6">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Nombre</label>
                <input type="text" name="nombre" id="nombre" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
            </div>

            <div class="mb-4">
                <label for="categoria_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Categoría</label>
                <select name="categoria_id" id="categoria_id" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                    <option value="">Seleccione una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="subcategoria_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Subcategoría</label>
                <select name="subcategoria_id" id="subcategoria_id" required
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                    <option value="">Seleccione una subcategoría</option>
                    @foreach($subcategorias as $subcategoria)
                        <option value="{{ $subcategoria->id }}">{{ $subcategoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end gap-3 mt-6">
                <a href="{{ route('productos.index') }}"
                   class="px-4 py-2 bg-gray-500 text-white text-sm rounded-md hover:bg-gray-600 transition">
                    Volver
                </a>
                <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white text-sm rounded-md hover:bg-green-700 transition">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
