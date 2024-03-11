<!doctype html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <title>Memoria</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>
    <main>
        <header class="flex">
            @include('navSEG')
            <div class="mx-auto ml-4 mt-3 items-center">
                <h1 class="text-3xl font-bold">Proyectos A Cargos</h1>
                <div class="mt-4">
                    <input type="text"
                        class="border border-gray-300 px-5 py-1 rounded-l-md focus:outline-none focus:ring focus:border-blue-500"
                        placeholder="Buscar..." />
                    <button
                        class="border border-gray-300 bg-gray-100 px-4 py-1 rounded-r-md focus:outline-none focus:ring focus:border-blue-500">
                        <i class="fas fa-search text-gray-500"></i>
                    </button>
                </div>
                <table class="mt-4">
                    <thead class="bg-green-300">
                        <tr>
                            <th class="px-4 py-2 border-b">Matricula</th>
                            <th class="px-4 py-2 border-b">Alumnos</th>
                            <th class="px-4 py-2 border-b">Proyectos</th>
                            <th class="px-4 py-2 border-b">Opcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-2 border-b">22393169</td>
                            <td class="px-4 py-2 border-b">Marco Antonio Hau Pech</td>
                            <td class="px-4 py-2 border-b">Comercio web e-commer</td>
                            <td>
                                <i class="fas fa-book-open text-2xl mx-2"></i>
                                <button class="show-modal">
                                    <i class="fas fa-comment text-2xl mx-2"></i>
                                </button>
                                <i class="fas fa-bullhorn text-2xl mx-2"></i></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 b corder-b">22342242</td>
                            <td class="px-4 py-2 border-b">Soto Alvarez</td>
                            <td class="px-4 py-2 border-b">Taller mecanico</td>
                            <td>
                                <i class="fas fa-book-open text-2xl mx-2"></i> <i
                                    class="fas fa-comment text-2xl mx-2"></i> <i
                                    class="fas fa-bullhorn text-2xl mx-2"></i></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-4 text-gray-700">Total de registros: <span id="rowCount">2</span></div>
            </div>
            </div>
        </header>
    </main>
    <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded shadow-lg max-w-4xl w-full">
            <div class="border-b px-4 py-2 flex justify-between items-center">
                <h3 class="font-semibold text-lg ml-60">Revision de Cedula AnteProyecto</h3>
                <button class="text-black close-modal">&cross;</button>
            </div>
            <div class="p-3">
                <div class="modal-body mb-0">
                    <h5 class="text-black mb-2">Titulo de Proyectos</h5>
                    <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</text>
                    <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al Titulo</h6>
                    <input placeholder="cometarios...." class="border-2 border-green-300 rounded-md w-full px-3 py-1 mb-3">

                    <h5 class="text-black mb-2 mt-3">Objetivo General</h5>
                    <text class="text-sm">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</text>
                    <h6 class="text-gray-800 font-bold text-xs mt-2 mb-2">Realizar Comentario Referente al Objetivo General</h6>
                    <input placeholder="cometarios...." class="border-2 border-green-300 rounded-md w-full px-3 py-1 mb-3">


                    <div class="flex justify-end items-center w-100 border-t p-3">
                        <button
                            class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-2 close-modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script>
            const tableBody = document.querySelector('tbody');
            const rowCount = tableBody.querySelectorAll('tr').length;
            document.getElementById('rowCount').textContent = rowCount;
        </script>

        <script>
            const modal = document.querySelector('.modal');

            const showModal = document.querySelector('.show-modal');
            const closeModal = document.querySelectorAll('.close-modal');

            showModal.addEventListener('click', function() {
                modal.classList.remove('hidden')
            })

            closeModal.forEach(close => {
                close.addEventListener('click', function() {
                    modal.classList.add('hidden')
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>

</body>

</html>
