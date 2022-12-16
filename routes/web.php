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
Route::put('/aluno/update', [AlunoController::class, 'update'])->name('aluno.update')->middleware('auth');
Route::post('/aluno/create', [AlunoController::class, 'store'])->name('aluno.create')->middleware('auth');
Route::delete('/aluno/delete/{id}', [AlunoController::class, 'destroy'])->name('aluno.delete')->middleware('auth');


//PROFESSORES
Route::get('/professor', [ProfessorController::class, 'index'])->name('professor.index')->middleware('auth');

//DISCIPLINAS
Route::get('/disciplinas', function () { return view('disciplinas.index');})->name('disciplinas.index')->middleware('auth');

//MATRICULA
Route::get('/matricula', function () { return view('matricula.index');})->name('matricula.index')->middleware('auth');

//PERIODOS
Route::get('/periodo', function () { return view('periodo.index');})->name('periodo.index')->middleware('auth');

//TURMAS
Route::get('/turmas', function () { return view('turmas.index');})->name('turmas.index')->middleware('auth');

