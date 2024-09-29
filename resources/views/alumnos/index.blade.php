<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Alumnos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="flex justify-end mb-4">
                    <a href="{{ route('alumnos.create') }}" class="mt-4 inline-block bg-gray-500 text-white py-2 px-4 rounded">Crear Alumno</a>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    @foreach($alumnos as $alumno)
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                                <h2 class="ms-3 text-xl font-semibold text-gray-900">
                                    <a href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->nombre }}</a>
                                </h2>
                            </div>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">DNI: {{ $alumno->dni }}</p>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">Fecha de Nacimiento: {{ $alumno->fecha_nacimiento }}</p>
                            <div class="mt-4 flex space-x-4">
                                <a href="{{ route('alumnos.edit', $alumno->id) }}" class="bg-gray-500 text-white py-2 px-4 rounded">Editar</a>
                                <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>