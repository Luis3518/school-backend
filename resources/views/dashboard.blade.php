<x-app-layout>
    <div class="py-12 bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 sm:mb-0">
                            {{ __('Dashboard') }}
                        </h1>
                        <p class="text-gray-600 dark:text-gray-400">
                            Bienvenido al Sistema de Administración de Cursos
                        </p>
                    </div>
                    <x-welcome />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>