@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <div class="row">
        <div class="col">
            <h3 class="m-5">AVISO!</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <img src="/img/Thesis-rafiki.svg" style="width: 300px;" alt="home">
        </div>
        <div class="col">
            <p class="m-5 p-5">
                Este é um sistema de diário escolar para professores e alunos, podendo este ser usado
                para controle de notas e frequências,
                assim como também de agenda para atividades e avaliações, facilitando assim a
                comunicação entre as partes e dispensando assim o então diário impresso.
            </p>
        </div>
    </div>

@endsection
