<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración cursos escuela técnica 35</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
    </style>
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md fade-in">
            <div class="text-center">
                <img src="{{ asset('img/escudoet35.png') }}" alt="Escudo ET35" class="mx-auto h-24 w-auto mb-4">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Escuela Técnica 35</h1>
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-6">Sistema de Administración de Cursos</h2>
            </div>

            @if (Route::has('login'))
                <div class="flex flex-col space-y-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                            Ir al Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                            Iniciar sesión
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <footer class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
            &copy; {{ date('Y') }} Escuela Técnica 35. Todos los derechos reservados.
        </footer>
    </div>
</body>
</html>