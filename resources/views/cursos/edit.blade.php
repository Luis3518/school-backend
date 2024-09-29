<!DOCTYPE html>
<html>
<head>
    <title>Editar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
        <h1 class="text-2xl font-medium text-gray-900">Editar Curso</h1>
    </div>

    <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
        <form action="{{ route('cursos.update', $curso->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $curso->nombre }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Actualizar</button>
				<a href="{{ route('cursos.index') }}" class="mt-4 inline-block bg-gray-500 text-white py-2 px-4 rounded">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>