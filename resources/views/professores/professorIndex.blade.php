@extends('layouts.main')

@section('title', 'Professores')

@section('content')

<div class="pt-5 pb-5 ps-3 pe-3">
    <div class="card shadow">
        <div class="card-header bg-primary bg-gradient d-flex justify-content-between align-items-center">
            <h3 class="text-light">Listagem de professores</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#novoProfessor">
                <i class="bi bi-plus-circle"></i>
                Cadastrar Professor
            </button>
        </div>
        <div class="card-body" id="show_all_professores">
            @if ($professores->count() > 0)
                <table class="table table-striped table-bordered table-sm align-middle">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>E-EMAIL</th>
                            <th>SEXO</th>
                            <th>CIDADE</th>
                            <th>BAIRRO</th>
                            <th>ENDEREÇO</th>
                            <th>TELEFONE</th>
                            <th>OPÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($professores as $professor)
                            <tr>
                                <td>{{ $professor->user->name }}</td>
                                <td>{{ $professor->user->email }}</td>
                                <td>{{ $professor->sexo_professor }}</td>
                                <td>{{ $professor->municipio_professor }}</td>
                                <td>{{ $professor->bairro_professor }}</td>
                                <td>{{ $professor->endereco_professor }}</td>
                                <td>{{ $professor->telefone_professor }}</td>
                                <td class="d-flex justify-content-around gap-1">
                                    <a href="#" class="btn btn-success btn-sm" title="Detalhes"><i class="bi-eye"></i></a>
            
                                    <a href="#" class="btn btn-primary btn-sm" title="Editar" data-bs-toggle="modal" data-bs-target="#editProfessor{{$professor->id}}"><i class="bi-pencil-square"></i></a>

                                    <a href="#" class="btn btn-danger btn-sm" title="Deletar" data-bs-toggle="modal" data-bs-target="#deleteProfessor{{$professor->id}}"><i class="bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h1 class="text-center text-secondary my-5">Não exitem professores cadastrados!</h1>
            @endif
        </div>
    </div>
</div>

@include('professores.professorModal')
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