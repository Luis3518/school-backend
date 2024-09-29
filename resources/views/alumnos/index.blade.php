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
                    <a href="{{ route('alumnos.create') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">Crear Alumno</a>
                </div>

                <!-- Filter Dropdown -->
                <div class="mb-4">
                    <form method="GET" action="{{ route('alumnos.index') }}">
                        <label for="curso" class="block text-sm font-medium text-gray-700">Filtrar por Curso:</label>
                        <select id="curso" name="curso" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="">Todos los Cursos</option>
                            @foreach($cursos as $curso)
                                <option value="{{ $curso->id }}" {{ request('curso') == $curso->id ? 'selected' : '' }}>{{ $curso->nombre }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="mt-2 bg-blue-500 text-white py-2 px-4 rounded">Filtrar</button>
                    </form>
                </div>

                <!-- Students Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DNI</th>
                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Curso</th>
                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edad</th>
                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alumnos as $alumno)
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $alumno->nombre }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $alumno->dni }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">{{ $alumno->curso->nombre ?? 'Sin Curso' }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        {{ \Carbon\Carbon::parse($alumno->fecha_nacimiento)->age }}
                                    </td>
                                    <td class="py-2 px-4 border-b border-gray-200">
                                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="bg-yellow-500 text-white py-1 px-3 rounded">Editar</a>
                                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>