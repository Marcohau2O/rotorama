<nav class="bg-white border-b border-gray-100 p-3 flex justify-between">
    <x-application-logo class="block h-10 w-auto fill-current text-gray-800" />
    <div class="flex items-center">
        <a href="{{ route('dashboard') }}" class="text-black font-bold text-2xl no-underline">Control de Notas</a>
    </div>
    <div class="flex items-center justify-start">
        <a href="{{ route('estudiantes') }}" class="flex items-center mr-4">
            <button class="text-black font-bold bg-gray-100 hover:bg-gray-400 transition-colors px-4 py-2 rounded-md no-underline">Estudiantes</button>
        </a>
        <a href="{{ route('estudiantes.create') }}" class="flex items-center mr-4">
            <button class="text-black font-bold bg-gray-100 hover:bg-gray-400 transition-colors px-4 py-2 rounded-md no-underline">Agregar</button>
        </a>
    </div>
</nav>