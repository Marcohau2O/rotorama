<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Control de notas') }}
        </h2>
    </x-slot>
    <main class="container-fluid">
        <h1 class="text-lg mb-2 mt-2 font-bold text-center p-2">Sistema de Calificaciones</h1>
        <div class="mb-2">
            <label for="filtroNombre" class="block font-semibold mb-1 text-sm">Buscar por nombre:</label>
            <input type="text" id="filtroNombre" class="border-gray-300 border rounded-md px-3 py-2 w-80"
                placeholder="Ingrese el nombre...">
        </div>

        <table class="table-auto text-sm">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200">Estudiantes</th>
                    <th class="px-4 py-2 bg-gray-200">Matricula</th>
                    <th class="px-4 py-2 bg-gray-200">Ingles V</th>
                    <th class="px-4 py-2 bg-gray-200">Base de Datos para Computo</th>
                    <th class="px-4 py-2 bg-gray-200">Aplicaciones Web Para I4.O</th>
                    <th class="px-4 py-2 bg-gray-200">Aplicaciones IOT</th>
                    <th class="px-4 py-2 bg-gray-200">EOyE II</th>
                    <th class="px-4 py-2 bg-gray-200">Desarrollo Movil</th>
                    <th class="px-4 py-2 bg-gray-200">Intregradora II</th>
                    <th class="px-4 py-2 bg-gray-200">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">Marco Hau</td>
                    <td class="border px-4 py-2">22326932</td>
                    <td class="border px-4 py-2">80</td>
                    <td class="border px-4 py-2">90</td>
                    <td class="border px-4 py-2">100</td>
                    <td class="border px-4 py-2">90</td>
                    <td class="border px-4 py-2">90</td>
                    <td class="border px-4 py-2">0</td>
                    <td class="border px-4 py-2">85</td>
                    <td class="border px-4 py-2">
                        <button class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-book">Editar</i>
                        </button>
                        <button class="text-red-500 hover:text-red-700">
                            <i class="fas fa-book">Eliminar</i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Emiliano Esparza</td>
                    <td class="border px-4 py-2">22345798</td>
                    <td class="border px-4 py-2">90</td>
                    <td class="border px-4 py-2">80</td>
                    <td class="border px-4 py-2">80</td>
                    <td class="border px-4 py-2">70</td>
                    <td class="border px-4 py-2">80</td>
                    <td class="border px-4 py-2">100</td>
                    <td class="border px-4 py-2">80</td>
                    <td class="border px-4 py-2">
                        <button class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-book">Editar</i>
                        </button>
                        <button class="text-red-500 hover:text-red-700">
                            <i class="fas fa-book">Eliminar</i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="mt-5 flex justify-end">
            <button id="exportarPDF"
                class="bg-green-700 hover:bg-green-700 text-white font-bold py-2 px-2 rounded mr-1">
                Exportar a PDF
            </button>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white p-4 mt-40">
        <div class="container mx-auto text-center">
            <p>Todos los derechos reservados &copy; {{ date('Y') }}</p>
        </div>
    </footer>
</x-app-layout>
