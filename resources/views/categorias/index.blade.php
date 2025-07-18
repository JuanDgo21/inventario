<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
            {{ __('Categorías') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <a href="{{ route('categorias.create') }}" class="inline-block mb-5 px-5 py-2 bg-indigo-600 text-white rounded-md shadow hover:bg-indigo-700 transition duration-200">
            + Nueva Categoría
        </a>

        @if(session('success'))
            <div class="mb-4 px-4 py-3 bg-green-100 border border-green-400 text-green-700 rounded relative">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg">
            <table class="w-full table-fixed divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Nombre</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($categorias as $categoria)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $categoria->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">{{ $categoria->nombre }}</td>
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap items-center gap-2">
                                    <a href="{{ route('categorias.show', $categoria->id) }}" class="px-3 py-1 text-sm text-white bg-blue-600 rounded hover:bg-blue-700 transition">Ver</a>
                                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="px-3 py-1 text-sm text-white bg-yellow-500 rounded hover:bg-yellow-600 transition">Editar</a>
                                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="px-3 py-1 text-sm text-white bg-red-600 rounded hover:bg-red-700 transition" onclick="return confirm('¿Eliminar esta categoría?')">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>    
            </table>
        </div>
    </div>
</x-app-layout>
