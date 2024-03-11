<!doctype html>
<html lang="en">

<head>
    <title>Editar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @vite('resources/css/app.css')

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    @include('plantillanav')
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        @section('edit_estudiante')
            <div class=" flex items-center justify-between">
                <div class="w-full ml-16 px-4">
                    <h2 class="text-2xl font-bold mb-4 p-3 text-center">Editar estudiante</h2>
                    @if ($errors->any())
                        <div class="bg-red-500 text-white p-4 mb-4 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('estudiantes.update', $student->id) }}" method="POST"
                        class="rounded px-5 mb-4 ml-32 w-[60rem]">
                        @csrf
                        @method('put')
                        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
                            <div class="mb-4">
                                <label for="name_student" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                                <input type="text" value="{{ $student->name_student }}" name="name_student"
                                    id="name_student"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="lastname_student"
                                    class="block text-gray-700 text-sm font-bold mb-2">Apellido:</label>
                                <input type="text" value="{{ $student->lastname_student }}" name="lastname_student"
                                    id="lastname_student"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label for="id_student"
                                    class="block text-gray-700 text-sm font-bold mb-2">Matricula:</label>
                                <input type="text" value="{{ $student->id_student }}" name="id_student" id="id_student"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required>
                            </div>
                            <div class="flex items-center justify-center">
                                <button type="submit"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </main>
    <footer>
        <!-- place footer here -->
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
