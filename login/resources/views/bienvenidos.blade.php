<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{asset('fontawesome-free-6.5.1-web/css/all.min.css')}}" rel="stylesheet"/>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-green-500 p-4 flex justify-between">
        <div class="flex items-center">
            <span class="text-white font-bold text-2xl">Control de Notas</span>
        </div>
        <div class="flex items-center justify-start">
            <a href="{{ route('estudiantes.index') }}" class="flex items-center mr-4">
                <button class="text-white font-bold bg-green-500 hover:bg-green-400 transition-colors px-4 py-2 rounded-md">Estudiantes</button>
            </a>
            <button class="text-white font-bold bg-green-500 hover:bg-green-400 transition-colors px-4 py-2 rounded-md">Cerrar sesión</button>
        </div>
    </nav>
    
        <!-- Contenido principal -->
        <main class="container-fluid">
            <h1 class="text-2xl font-bold mb-6 mt-6 text-center">Sistema de Calificaciones</h1>
            <div class="mb-10">
                <label for="filtroNombre" class="block font-semibold mb-1 text-sm">Buscar por nombre:</label>
                <input type="text" id="filtroNombre" class="border-gray-300 border rounded-md px-3 py-2 w-80" placeholder="Ingrese el nombre...">
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
                                <i class="fas fa-book"></i>
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
                                <i class="fas fa-book"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-8 flex justify-end">
                <button id="exportarPDF" class="bg-green-700 hover:bg-green-700 text-white font-bold py-2 px-2 rounded mr-1">
                    Exportar a PDF
                </button>
            </div>
        </main>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white p-4 mt-14">
        <div class="container mx-auto text-center">
            <p>Todos los derechos reservados &copy; {{ date('Y') }}</p>
        </div>
    </footer>
</body>
</html>

