<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/usuario/actualizar', [UserController::class, 'getActualizar'])->name('usuario.actualizar');
    Route::post('/usuario/actualizar', [UserController::class, 'postActualizar'])->name('usuario.postActualizar');

    Route::get('/albums', [AlbumController::class, 'index'])->name('albums.index');
    Route::get('/albums/{id}/fotos', [FotoController::class, 'index'])->name('fotos.index');
});