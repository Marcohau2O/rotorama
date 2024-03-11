<!doctype html>
<html lang="en">

<head>
    <title>Agregar</title>
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
        <div class="mt-2 flex justify-center">
            <div class="max-w-lg w-[300rem] px-4">
                <h2 class="text-center text-2xl mb-2">Agregar usuarios</h2>
                <form action="{{ route('estudiantes.store') }}" method="POST"
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="list-disc list-inside text-red-500 text-xs italic">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-2">
                        <label for="name_student" class="block text-gray-700 text-sm mb-2">Nombre:</label>
                        <input type="text" name="name_student" id="name_student" placeholder="Nombre"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-2">
                        <label for="lastname_student" class="block text-gray-700 text-sm mb-2">Apellido:</label>
                        <input type="text" name="lastname_student" id="lastname_student" placeholder="Apellido"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-2">
                        <label for="id_student" class="block text-gray-700 text-sm mb-2">Matricula:</label>
                        <input type="text" name="id_student" id="id_student" placeholder="Matricula"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-2">
                        <label for="birthday" class="block text-gray-700 text-sm mb-2">Fecha de
                            nacimiento:</label>
                        <input type="date" name="birthday" id="birthday"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-2">
                        <label for="comments" class="block text-gray-700 text-sm mb-2">Comentarios:</label>
                        <textarea name="comments" id="comments"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="flex items-center justify-center mt-2">
                        <button type="submit"
                            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                    </div>
                </form>
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
