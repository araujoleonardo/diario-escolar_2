<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\TurmaController;
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
Route::put('/aluno/update/{id}', [AlunoController::class, 'update'])->name('aluno.update')->middleware('auth');
Route::post('/aluno/create', [AlunoController::class, 'store'])->name('aluno.create')->middleware('auth');
Route::delete('/aluno/delete/{id}', [AlunoController::class, 'destroy'])->name('aluno.delete')->middleware('auth');


//PROFESSORES
Route::get('/professor', [ProfessorController::class, 'index'])->name('professor.index')->middleware('auth');
Route::put('/professor/update/{id}', [ProfessorController::class, 'update'])->name('professor.update')->middleware('auth');
Route::post('/professor/create', [ProfessorController::class, 'store'])->name('professor.create')->middleware('auth');
Route::delete('/professor/delete/{id}', [ProfessorController::class, 'destroy'])->name('professor.delete')->middleware('auth');

//DISCIPLINAS
Route::get('/disciplina', [DisciplinaController::class, 'index'])->name('disciplina.index')->middleware('auth');
Route::put('/disciplina/update/{id}', [DisciplinaController::class, 'update'])->name('disciplina.update')->middleware('auth');
Route::post('/disciplina/create', [DisciplinaController::class, 'store'])->name('disciplina.create')->middleware('auth');
Route::delete('/disciplina/delete/{id}', [DisciplinaController::class, 'destroy'])->name('disciplina.delete')->middleware('auth');

//MATRICULA
Route::get('/matricula', function () { return view('matricula.index');})->name('matricula.index')->middleware('auth');

//PERIODOS
Route::get('/periodo', [PeriodoController::class, 'index'])->name('periodo.index')->middleware('auth');
Route::put('/periodo/update/{id}', [PeriodoController::class, 'update'])->name('periodo.update')->middleware('auth');
Route::post('/periodo/create', [PeriodoController::class, 'store'])->name('periodo.create')->middleware('auth');
Route::delete('/periodo/delete/{id}', [PeriodoController::class, 'destroy'])->name('periodo.delete')->middleware('auth');

//TURMAS
Route::get('/turma', [TurmaController::class, 'index'])->name('turma.index')->middleware('auth');
Route::put('/turma/update/{id}', [TurmaController::class, 'update'])->name('turma.update')->middleware('auth');
Route::post('/turma/create', [TurmaController::class, 'store'])->name('turma.create')->middleware('auth');
Route::delete('/turma/delete/{id}', [TurmaController::class, 'destroy'])->name('turma.delete')->middleware('auth');

//CONSULTA
Route::get('/consultas', function () { return view('consulta.indexConsulta');})->name('consulta.index')->middleware('auth');

