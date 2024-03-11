<!doctype html>
<html lang="en">

<head>
    <title>Estudiantes</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @vite('resources/css/app.css')

    <!-- Bootstrap CSS v5.2.1 -->
</head>

<body>
    @include('plantillanav')

    <header>
        <!-- place navbar here -->
    </header>
    <main>
        @if (session()->has('notificacion'))
            <div class="bg-green-400">{{ session('notificacion') }}</div>
        @endif
        <div class="flex justify-center ml-10 mt-8">
            <div class="overflow-x-auto">
                <table class="w-[70rem] mx-auto table-auto border-collapse border border-gray-800">
                    <thead>
                        <tr class="bg-gray-800 text-white text-sm">
                            <th class="px-2 py-1">Matrícula</th>
                            <th class="px-2 py-1">Nombre del alumno</th>
                            <th class="px-2 py-1">Apellido</th>
                            <th class="px-2 py-1">Ver</th>
                            <th class="px-2 py-1">Editar</th>
                            <th class="px-2 py-1">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr class="hover:bg-gray-100 transition-colors">
                            <td class="border px-2 py-2">{{ $student->id_student }}</td>
                            <td class="border px-2 py-2">{{ $student->name_student }}</td>
                            <td class="border px-2 py-2">{{ $student->lastname_student }}</td>
                            <td class="border px-2 py-2">
                                <form>
                                    <a class="bg-blue-500 px-1 py-1 text-white font-semibold rounded-md hover:bg-blue-600" href="{{ route('estudiantes.show', $student->id) }}">Mostrar</a>
                                </form>
                            </td>
                            <td class="border px-2 py-2">
                                <form>
                                    <a class="bg-green-500 px-1 py-1 text-white font-semibold rounded-md hover:bg-green-600" href="{{ route('estudiantes.edit', $student->id) }}">Editar</a>
                                </form>
                            </td>
                            <td class="border px-2 py-2">
                                <form action="{{ route('estudiantes.destroy', $student->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este estudiante?')"
                                        class="bg-red-500 px-1 py-1 text-white font-semibold rounded-md hover:bg-red-600">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
                <div class="mt8 ml-2">{{ $students->links() }}</div>
            </div>
        </div>

    </main>
    <footer>
        <footer class="bg-gray-900 text-white p-4 mt-14">
            <div class="container mx-auto text-center">
                <p>Todos los derechos reservados &copy; {{ date('Y') }}</p>
            </div>
        </footer>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
