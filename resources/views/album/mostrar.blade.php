<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mis Álbumes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if(sizeof($albums) > 0)
                    @foreach($albums as $album)
                        <div class="mb-4 p-4 border rounded">
                            <h3 class="text-lg font-bold">{{ $album->name }}</h3>
                            <p>{{ $album->description }}</p>
                            <a href="{{ route('fotos.index', $album->id) }}"
                               class="bg-green-500 text-white px-3 py-1 rounded mt-2 inline-block">
                                Ver Fotos
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>No tienes álbumes registrados.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>