{{-- Cadastro de Disciplinas --}}
<div class="modal fade" id="novaDisciplina" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Disciplina</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('disciplina.create') }}" method="post" id="add_disciplina_form">
                    @csrf
                    <div class="modal-body row g-3">

                        <div class="col-md-12 mb-3">
                            <label for="nome" class="form-label">Nome da disciplina</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="nome" id="nome" value="{{ old('nome') }}" required>
                            @error('nome')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="detalhes" class="form-label">Detalhes</label>
                            <textarea class="form-control @error('nome') is-invalid @enderror"
                                name="detalhes" id="detalhes" value="{{ old('detalhes') }}" required></textarea>
                            @error('detalhes')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="add_disciplina_btn" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- Editar Disciplina --}}
@foreach ($disciplinas as $disciplina)
<div class="modal fade" id="editDisciplina{{$disciplina->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Disciplina</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('disciplina.update', $disciplina->id) }}" method="POST" id="edit_disciplina_form">
                    @method('PUT')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <div class="col-md-12 mb-3">
                            <label for="nome" class="form-label">Nome da disciplina</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="nome" id="nome" value="{{ old('nome', $disciplina->nome) }}" required>
                            @error('nome')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="detalhes" class="form-label">Detalhes</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="detalhes" id="detalhes" value="{{ old('detalhes', $disciplina->detalhes) }}" required>
                            @error('detalhes')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="edit_disciplina_btn" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


{{-- Deletar disciplina --}}
@foreach ($disciplinas as $disciplina)
<div class="modal fade" id="deleteDisciplina{{$disciplina->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deletar Disciplina?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('disciplina.delete', $disciplina->id) }}" method="POST" id="delete_disciplina_form">
                    @method('DELETE')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <h4 class="text-center">A ação não poderá ser desfeita!</h4>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" id="delete_disciplina_btn" class="btn btn-danger">Deletar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach