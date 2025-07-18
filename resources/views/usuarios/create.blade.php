<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Usuario') }}
        </h2>
    </x-slot>
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 rounded shadow mt-6">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 dark:text-gray-200 font-bold mb-2">Nombre</label>
                <input type="text" name="name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-white" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 dark:text-gray-200 font-bold mb-2">Correo Electrónico</label>
                <input type="email" name="email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-white" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 dark:text-gray-200 font-bold mb-2">Contraseña</label>
                <input type="password" name="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-white" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700 dark:text-gray-200 font-bold mb-2">Rol</label>
                <select name="role" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-700 dark:text-white" required>
                    <option value="">Seleccione un rol</option>
                    <option value="admin">Administrador</option>
                    <option value="coordinador">Coordinador</option>
                    <option value="usuario">Usuario</option>
                </select>
            </div>
            <div class="flex space-x-2">
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition">Guardar</button>
                <a href="{{ route('users.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">Volver</a>
            </div>
        </form>
    </div>
</x-app-layout>