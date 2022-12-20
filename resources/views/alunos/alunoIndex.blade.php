@extends('layouts.main')

@section('title', 'Alunos')

@section('content')

    <div class="pt-5 pb-5 ps-3 pe-3">
        <div class="card shadow">
            <div class="card-header bg-info d-flex justify-content-between align-items-center">
                <h3 class="text-light">Listagem de alunos</h3>
                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#novoAluno">
                    <i class="bi bi-plus-circle"></i>
                    Cadastrar Aluno
                </button>
            </div>
            <div class="card-body" id="show_all_alunos">
                @if ($alunos->count() > 0)
                    <table class="table table-striped table-bordered table-sm align-middle">
                        <thead>
                            <tr>
                                <th>NOME</th>
                                <th>NASCIMENTO</th>
                                <th>SEXO</th>
                                <th>CIDADE</th>
                                <th>BAIRRO</th>
                                <th>ENDEREÇO</th>
                                <th>TELEFONE</th>
                                <th>OPÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alunos as $aluno)
                                <tr>
                                    <td>{{ $aluno->user->name }}</td>
                                    <td>{{ $aluno->nascimento_aluno }}</td>
                                    <td>{{ $aluno->sexo_aluno }}</td>
                                    <td>{{ $aluno->municipio_aluno }}</td>
                                    <td>{{ $aluno->bairro_aluno }}</td>
                                    <td>{{ $aluno->endereco_aluno }}</td>
                                    <td>{{ $aluno->telefone_aluno }}</td>
                                    <td class="d-flex justify-content-around gap-1">
                                        <a href="#" class="btn btn-success btn-sm" title="Detalhes"><i class="bi-eye"></i></a>
                
                                        <a href="#" class="btn btn-primary btn-sm" title="Editar" data-bs-toggle="modal" data-bs-target="#editAluno{{$aluno->id}}"><i class="bi-pencil-square"></i></a>

                                        <a href="#" class="btn btn-danger btn-sm" title="Deletar" data-bs-toggle="modal" data-bs-target="#deleteAluno{{$aluno->id}}"><i class="bi-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h1 class="text-center text-secondary my-5">Não exitem alunos cadastrados!</h1>
                @endif
            </div>
        </div>
    </div>

    @include('alunos.alunoModal')
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