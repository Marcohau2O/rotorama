@vite('resources/css/app.css')
<div class="bg-gray-100 p-3 rounded-lg shadow-md ml-7 mt-5">
    <p class="text-lg font-semibold mb-2">Información del Alumno</p>
    <div class="grid grid-cols-2 gap-2">
        <div>
            <p class="mb-1"><span class="font-semibold">Nombre:</span> {{$student->name_student}}</p>
            <p class="mb-1"><span class="font-semibold">Apellido:</span> {{$student->lastname_student}}</p>
            <p class="mb-1"><span class="font-semibold">Matrícula:</span> {{$student->id_student}}</p>
            <p class="mb-1"><span class="font-semibold">Cumpleaños:</span> {{$student->birthday}}</p>
            <p class="mb-1"><span class="font-semibold">Comentario:</span> {{$student->comments}}</p>
        </div>
    </div>
</div>
