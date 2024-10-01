<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbInfoNotebookController;

Route::get('/',[TbInfoNotebookController::class,'MostrarHome'])->name('home-adm');
Route::post('/cadastro-Notebook',[TbInfoNotebookController::class,'CadastrarNotebook'])->name('cadastra-Notebook');
Route::get('/cadastro-Notebook',[TbInfoNotebookController::class,'MostrarCadastroNotebook'])->name('show-cadastro-Notebook');