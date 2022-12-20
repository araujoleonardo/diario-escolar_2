{{-- Cadastro de Turma --}}
<div class="modal fade" id="novaTurma" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar Turma</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('turma.create') }}" method="post" id="add_turma_form">
                    @csrf
                    <div class="modal-body row g-3">

                        <div class="col-md-12 mb-3">
                            <label for="nome_turma" class="form-label">Nome da turma</label>
                            <input type="text" class="form-control @error('nome_turma') is-invalid @enderror"
                                name="nome_turma" id="nome_turma" value="{{ old('nome_turma') }}" placeholder="1º ano A" required>
                            @error('nome_turma')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="turno" class="form-label">Turno</label>
                            <select class="form-select @error('turno') is-invalid @enderror" name="turno"
                                id="turno">
                                <option value="" selected>Selecione o turno</option>
                                <option value="manhã" @if (old('turno') == 'manhã') selected @endif>
                                    Manhã
                                </option>
                                <option value="tarde" @if (old('turno') == 'tarde') selected @endif>
                                    Tarde
                                </option>
                                <option value="noite" @if (old('turno') == 'noite') selected @endif>
                                    Noite
                                </option>
                            </select>
                            @error('turno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="add_turma_btn" class="btn btn-primary">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- Editar Turma --}}
@foreach ($turmas as $turma)
<div class="modal fade" id="editTurma{{$turma->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Turma</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('turma.update', $turma->id) }}" method="POST" id="edit_turma_form">
                    @method('PUT')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <div class="col-md-12 mb-3">
                            <label for="nome_turma" class="form-label">Nome da turma</label>
                            <input type="text" class="form-control @error('nome_turma') is-invalid @enderror"
                                name="nome_turma" id="nome_turma" value="{{ old('nome_turma', $turma->nome_turma) }}" required>
                            @error('nome_turma')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="turno" class="form-label">Turno</label>
                            <select class="form-select @error('turno') is-invalid @enderror" name="turno"
                                id="turno">
                                <option value="manhã" @if (old('turno') == 'manhã') selected @endif>
                                    Manhã
                                </option>
                                <option value="tarde" @if (old('turno') == 'tarde') selected @endif {{ $turma->turno == 'tarde' ? "selected='selected'" : "" }}>
                                    Tarde
                                </option>
                                <option value="noite" @if (old('turno') == 'noite') selected @endif {{ $turma->turno == 'noite' ? "selected='selected'" : "" }}>
                                    Noite
                                </option>
                            </select>
                            @error('turno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="edit_turma_btn" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


{{-- Deletar Turma --}}
@foreach ($turmas as $turma)
<div class="modal fade" id="deleteTurma{{$turma->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deletar Turma?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('turma.delete', $turma->id) }}" method="POST" id="delete_turma_form">
                    @method('DELETE')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <h4 class="text-center">A ação não poderá ser desfeita!</h4>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" id="delete_turma_btn" class="btn btn-danger">Deletar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach