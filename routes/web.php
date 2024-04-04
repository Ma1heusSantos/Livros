<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\livroController;
use App\Http\Controllers\transacoesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/meusLivros',[livroController::class,'index'])->name('livros.index');
    Route::get('/adicionar',[livroController::class,'create']);
    Route::post('/adicionar',[livroController::class,'store'])->name('livros.adicionar');
    Route::get('/detalhes/{id}',[livroController::class,'details'])->name('livros.details');
    Route::get('/solicitarEmprestimo/{id}',[transacoesController::class,'create'])->name('solicitar.emprestimo');
    Route::get('/transacoes/aceitar/{id}',[transacoesController::class,'aceitarTransacao'])->name('aceitar.transacao');
    Route::get('/transacoes/recusar/{id}',[transacoesController::class,'recusarTransacao'])->name('recusar.transacao');

    Route::get('/transacoes',[transacoesController::class,'index'])->name('transacoes.index');
});

require __DIR__.'/auth.php';
