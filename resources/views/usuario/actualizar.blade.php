<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Actualizar Perfil
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('usuario.postActualizar') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name"
                            value="{{ Auth::user()->name }}"
                            class="block w-full border rounded p-2">
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password">Nueva Contraseña (opcional)</label>
                        <input type="password" name="password" id="password"
                            class="block w-full border rounded p-2">
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="block w-full border rounded p-2">
                    </div>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded">
                        Guardar Cambios
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>