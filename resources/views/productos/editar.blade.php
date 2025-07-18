<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 mt-6 rounded-lg shadow">
        <form action="{{ route('productos.update', $producto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">
                    Nombre
                </label>
                <input type="text" name="nombre" id="nombre"
                    value="{{ $producto->nombre }}"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                    required>
            </div>

            <div class="mb-4">
                <label for="categoria_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">
                    Categoría
                </label>
                <select name="categoria_id" id="categoria_id"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                    required>
                    <option value="">Seleccione una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="subcategoria_id" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">
                    Subcategoría
                </label>
                <select name="subcategoria_id" id="subcategoria_id"
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                    required>
                    <option value="">Seleccione una subcategoría</option>
                    @foreach($subcategorias as $subcategoria)
                        <option value="{{ $subcategoria->id }}" {{ $producto->subcategoria_id == $subcategoria->id ? 'selected' : '' }}>
                            {{ $subcategoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end gap-3 mt-6">
                <a href="{{ route('productos.index') }}"
                   class="px-4 py-2 text-sm bg-gray-500 text-white rounded-md hover:bg-gray-600 transition">
                    Volver
                </a>
                <button type="submit"
                        class="px-4 py-2 text-sm bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>