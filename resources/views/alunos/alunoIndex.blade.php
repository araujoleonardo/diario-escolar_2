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
                <h1 class="text-center text-secondary my-5">Loading...</h1>
            </div>
        </div>
    </div>

    @include('alunos.alunoModal')
@endsection

@section('js')
    <script>
        $(function(){

            

            //Adicionar Aluno
            $("#add_aluno_form").submit(function(e) {
                e.preventDefault();
                const fd = new FormData(this);
                $("#add_aluno_btn").text('Adicionando...');
                $.ajax({
                    url: '{{ route('aluno.create') }}',
                    method: 'post',
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 200) {
                        Swal.fire(
                            'Cadastrado!',
                            'Aluno Adicionado!',
                            'success'
                        )
                        listarAlunos();
                        }
                        $("#add_aluno_form")[0].reset();
                        $("#novoAluno").modal('hide');
                    }
                });
            });

            //Deletar Aluno
            $(document).on('click', '.deleteIcon', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                let csrf = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Excluir registro?',
                    text: "Não será possível reverter!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, excluir!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                        url: '{{ route('aluno.delete') }}',
                        method: 'delete',
                        data: {
                            id: id,
                            _token: csrf
                        },
                        success: function(response) {
                            Swal.fire(
                            'Deletado!',
                            'Você excluiu o registro.',
                            'success'
                            )
                            listarAlunos();
                        }
                        });
                    }
                })
            });

            listarAlunos();

            //Listar alunos
            function listarAlunos(){
                $.ajax({
                    url: '{{ route('aluno.listar') }}',
                    method: 'GET',
                    success: function(response) {
                        $('#show_all_alunos').html(response);
                        $("table").DataTable({
                            "language": {
                            "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                            }
                        });
                    }
                });
            }
        });
    </script>
@endsection