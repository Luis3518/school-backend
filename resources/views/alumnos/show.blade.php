<x-app-layout>
    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                        Detalles del Alumno
                    </h2>

                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg shadow-md p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Información Personal</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-400"><span class="font-medium">Nombre:</span> {{ $alumno->nombre }}</p>
                                <p class="mt-2 text-gray-600 dark:text-gray-400"><span class="font-medium">DNI:</span> {{ $alumno->dni }}</p>
                                <p class="mt-2 text-gray-600 dark:text-gray-400"><span class="font-medium">Fecha de Nacimiento:</span> {{ \Carbon\Carbon::parse($alumno->fecha_nacimiento)->format('d/m/Y') }}</p>
                                <p class="mt-2 text-gray-600 dark:text-gray-400"><span class="font-medium">Edad:</span> {{ \Carbon\Carbon::parse($alumno->fecha_nacimiento)->age }} años</p>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Información Académica</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-400"><span class="font-medium">Curso:</span> {{ $alumno->curso->nombre }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <a href="{{ route('alumnos.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            Volver a la lista
                        </a>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            Editar Alumno
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>