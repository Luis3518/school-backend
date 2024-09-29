<!DOCTYPE html>
<html>
<head>
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
        <h1 class="text-2xl font-medium text-gray-900">Editar Alumno</h1>
    </div>

    <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
        <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $alumno->nombre }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div>
                <label for="dni" class="block text-sm font-medium text-gray-700">DNI:</label>
                <input type="text" id="dni" name="dni" value="{{ $alumno->dni }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div>
                <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $alumno->fecha_nacimiento }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div>
                <label for="curso_id" class="block text-sm font-medium text-gray-700">Curso:</label>
                <select id="curso_id" name="curso_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->id }}" {{ $curso->id == $alumno->curso_id ? 'selected' : '' }}>{{ $curso->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar</button>
                <a href="{{ route('alumnos.index') }}" class="mt-4 inline-block bg-gray-500 text-white py-2 px-4 rounded">Cancelar</a>

            </div>
        </form>
    </div>
</body>
</html>