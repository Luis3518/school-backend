<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Alumnos</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Reporte de Alumnos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Curso</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->dni }}</td>
                    <td>{{ $alumno->curso->nombre ?? 'Sin Curso' }}</td>
                    <td>{{ \Carbon\Carbon::parse($alumno->fecha_nacimiento)->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>