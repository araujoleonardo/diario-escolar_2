<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ALUNOS
Route::get('/aluno', [AlunoController::class, 'index'])->name('aluno.index')->middleware('auth');
Route::get('/aluno/listar', [AlunoController::class, 'listar'])->name('aluno.listar')->middleware('auth');
Route::get('/aluno/adicionar', [AlunoController::class, 'create'])->name('aluno.adicionar')->middleware('auth');
Route::post('/aluno/create', [AlunoController::class, 'store'])->name('aluno.create')->middleware('auth');
Route::delete('/aluno/delete', [AlunoController::class, 'destroy'])->name('aluno.delete')->middleware('auth');

//PROFESSORES
Route::get('/professor', [ProfessorController::class, 'index'])->name('professor.index')->middleware('auth');
