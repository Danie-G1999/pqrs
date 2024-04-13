<?php

use App\Http\Controllers\PqrsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\TipoSolicitud;

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
    // return view('welcome');
    return view('indexPQRS');
});

Route::get('/dashboard', function () {
    return view('dashboard', );
})->middleware(['auth', 'verified'])->name('dashboard');

// Ruta para llamar al formulario de solicitud PQRS
// Route::get('/solicitar', function () {
//     return view('solicitud');
// })->middleware(['auth', 'verified'])->name('solicitud');

// Rutas para formulario y listado de solicitudes para el cliente logeado
Route::get('/solicitar', [PqrsController::class, 'index'])->middleware(['auth', 'verified'])->name('solicitud');
Route::post('/solicitar', [PqrsController::class, 'store'])->middleware(['auth', 'verified'])->name('guardar');
Route::get('/listar_solicitudes', [PqrsController::class, 'listadoSolicitudes'])->middleware(['auth', 'verified'])->name('listar_solicitud');

// Ruta para el administrador
Route::get('/lista_admin', [PqrsController::class, 'listadoAdmin'])->middleware(['auth', 'verified'])->name('lista_admin');
Route::post('/edit_solicitud', [PqrsController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit_solicitud');
// Route::get('/listar_solicitudes', function () {
//     return view('listar_solicitud');
// })->middleware(['auth', 'verified'])->name('listar_solicitud');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
