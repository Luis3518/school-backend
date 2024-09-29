<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
        <h1 class="text-2xl font-medium text-gray-900">Detalles del Curso</h1>
    </div>

    <div class="bg-gray-200 bg-opacity-25 p-6 lg:p-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-xl font-semibold text-gray-900">Nombre: {{ $curso->nombre }}</p>
            <a href="{{ route('cursos.index') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">Volver a la lista</a>
        </div>
    </div>
</body>
</html>