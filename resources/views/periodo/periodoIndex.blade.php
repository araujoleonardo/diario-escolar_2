@extends('layouts.main')

@section('title', 'Periodos')

@section('content')

<div class="p-5 m-5">
    <div class="card shadow">
        <div class="card-header bg-info d-flex justify-content-between align-items-center">
            <h3 class="text-light">Listagem de periodos</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#novoPeriodo">
                <i class="bi bi-plus-circle"></i>
                Criar Periodo Escolar
            </button>
        </div>
        <div class="card-body" id="show_all_periodos">
            @if ($periodos->count() > 0)
                <table class="table table-striped table-bordered table-sm align-middle">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>PERIODO</th>
                            <th>OPÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($periodos as $periodo)
                            <tr>
                                <td>{{ $periodo->nome_periodo }}</td>
                                <td>
                                    De <strong>{{ date('d/m/Y', strtotime($periodo->data_inicio)) }}</strong>
                                    até <strong>{{ date('d/m/Y', strtotime($periodo->data_final)) }}</strong>
                                </td>
                                <td class="d-flex justify-content-around gap-1">
                                    <a href="#" class="btn btn-success btn-sm" title="Detalhes"><i class="bi-eye"></i></a>
            
                                    <a href="#" class="btn btn-primary btn-sm" title="Editar" data-bs-toggle="modal" data-bs-target="#editPeriodo{{$periodo->id}}"><i class="bi-pencil-square"></i></a>

                                    <a href="#" class="btn btn-danger btn-sm" title="Deletar" data-bs-toggle="modal" data-bs-target="#deletePeriodo{{$periodo->id}}"><i class="bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h1 class="text-center text-secondary my-5">Não exitem periodos cadastrados!</h1>
            @endif
        </div>
    </div>
</div>

@include('periodo.periodoModal')
@endsection

@section('js')
    <script>            
        $("table").DataTable({
            "language": {
            "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            }
        });
    </script>
@endsection