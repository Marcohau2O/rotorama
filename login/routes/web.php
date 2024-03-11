<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//mostar la view de no autorizado
Route::get('/no-autorizado', function () {
    return view('no_autorizado');
})->name('no_autorizado');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/formulario', function () {
        return view('formulario');
    })->name('formulario');

    Route::get('/HistorialMemorias', function () {
        return view('cuadro');
    });

    Route::resource('estudiantes',StudentController::class);
    Route::resource('asignaturas',SubjectController::class);

    Route::get('/estudiantes', [StudentController::class, 'index'])->name('estudiantes');
});

require __DIR__.'/auth.php';
