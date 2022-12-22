@extends('layouts.main')

@section('title', 'Consulta')

@section('content')

    <div class="row p-5 text-center">
        <div class="col m-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card text-white bg-success bg-gradient shadow" style="min-height: 10rem">
                        <div class="card-body">
                            <h4 class="card-title">Consultar Aulas</h4>                            
                            <button type="button" class="btn btn-primary shadow rounded-pill m-2 ps-5 pe-5"><i class="bi bi-search h3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-warning bg-gradient shadow" style="min-height: 10rem">
                        <div class="card-body">
                            <h4 class="card-title">Consultar Notas</h4>
                            <button type="button" class="btn btn-primary shadow rounded-pill m-2 ps-5 pe-5"><i class="bi bi-search h3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-info bg-gradient shadow" style="min-height: 10rem">
                        <div class="card-body">
                            <h4 class="card-title">Consultar Frequência por Aluno</h4>
                            <button type="button" class="btn btn-primary shadow rounded-pill m-2 ps-5 pe-5"><i class="bi bi-search h3"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card text-white bg-info bg-gradient shadow" style="min-height: 10rem">
                        <div class="card-body">
                            <h4 class="card-title">Consultar Datas de Provas</h4>
                            <button type="button" class="btn btn-primary shadow rounded-pill m-2 ps-5 pe-5"><i class="bi bi-search h3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-warning bg-gradient shadow" style="min-height: 10rem">
                        <div class="card-body">
                            <h4 class="card-title">Consultar Cronograma de Aulas</h4>
                            <button type="button" class="btn btn-primary shadow rounded-pill m-2 ps-5 pe-5"><i class="bi bi-search h3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-success bg-gradient shadow" style="min-height: 10rem">
                        <div class="card-body">
                            <h4 class="card-title">Consultar Frequência por Turma</h4>
                            <button type="button" class="btn btn-primary shadow rounded-pill m-2 ps-5 pe-5"><i class="bi bi-search h3"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
