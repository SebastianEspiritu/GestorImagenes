<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Fotos del Álbum
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if(sizeof($photos) > 0)
                    @foreach($photos as $photo)
                        <div class="mb-4 p-4 border rounded">
                            <p>{{ $photo->name }}</p>
                            <img src="{{ asset($photo->path) }}" alt="{{ $photo->name }}"
                                 class="w-48 h-48 object-cover">
                        </div>
                    @endforeach
                @else
                    <p>Este álbum no tiene fotos.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>