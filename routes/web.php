<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LivrosController;

//manipulalivros
Route::get('/manipulalivros',[LivrosController::class,'mostrarManipulaLivros'])->name('manipula-livros');

//rotas para alterar livros
Route::get('alterar-livros/{registrosLivros}',[LivrosController::class,'MostrarAlterarLivros'])->name('alterar-livros');
// Alterar
Route::put('/alterar-banco-livros/{registrosLivros}', [LivrosController::class, 'AlterarBancoLivros'])->name('alterar-banco-livros');

//index
Route::get('/',[LivrosController::class,'index'])->name('index');

//cadastro
Route::get('/cadlivro',[LivrosController::class,'mostrarFormLivro'])->name('form-cadastro-livro');
Route::post('/',[LivrosController::class,'cadastroLivro'])->name('cadastro-livro');

//deletar
Route::delete('/deletar-livros/{registrosLivros}',[LivrosController::class,'DeletarLivros'])->name('deletar-livros');

Route::get('/imgs/{filename}', 'ImageController@show')->name('image.show');
