{{-- Cadastro de professor --}}
<div class="modal fade" id="novoProfessor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Professor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('professor.create') }}" method="post" id="add_professor_form">
                    @csrf
                    <div class="modal-body row g-3">

                        <div class="col-md-5 mb-3">
                            <label for="nome" class="form-label">Nome do professor</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="nome" id="nome" value="{{ old('nome') }}" required>
                            @error('nome')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="nascimento_professor" class="form-label">Data de nascimento</label>
                            <input type="date" class="form-control @error('nascimento_professor') is-invalid @enderror"
                                name="nascimento_professor" id="nascimento_professor" value="{{ old('nascimento_professor') }}" required>
                            @error('nascimento_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="sexo_professor" class="form-label">Sexo</label>
                            <select class="form-select @error('sexo_professor') is-invalid @enderror" name="sexo_professor"
                                id="sexo_professor">
                                <option value="" selected>Selecione um sexo</option>
                                <option value="masculino" @if (old('sexo_professor') == 'masculino') selected @endif>
                                    Maculino
                                </option>
                                <option value="feminino" @if (old('sexo_professor') == 'feminino') selected @endif>
                                    Feminino
                                </option>
                            </select>
                            @error('sexo')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="cpf_professor" class="form-label">CPF</label>
                            <input type="text" class="form-control @error('cpf_professor') is-invalid @enderror"
                                name="cpf_professor" id="cpf_professor" value="{{ old('cpf_professor') }}" required>
                            @error('cpf_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="municipio_professor" class="form-label">Cidade</label>
                            <input type="text" class="form-control @error('municipio_professor') is-invalid @enderror"
                                name="municipio_professor" id="municipio_professor" value="{{ old('municipio_professor') }}" required>
                            @error('municipio_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="bairro_professor" class="form-label">Bairro</label>
                            <input type="text" class="form-control @error('bairro_professor') is-invalid @enderror"
                                name="bairro_professor" id="bairro_professor" value="{{ old('bairro_professor') }}" required>
                            @error('bairro_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="endereco_professor" class="form-label">Endereço</label>
                            <input type="text" class="form-control @error('endereco_professor') is-invalid @enderror"
                                name="endereco_professor" id="endereco_professor" value="{{ old('endereco_professor') }}" required>
                            @error('endereco_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="cep_professor" class="form-label">Cep</label>
                            <input type="text" class="form-control @error('cep_professor') is-invalid @enderror"
                                name="cep_professor" id="cep_professor" value="{{ old('cep_professor') }}" required>
                            @error('cep_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="telefone_professor" class="form-label">Telefone</label>
                            <input type="text" class="form-control @error('telefone_professor') is-invalid @enderror"
                                name="telefone_professor" id="telefone_professor" value="{{ old('telefone_professor') }}" required>
                            @error('telefone_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <h5 class="modal-title">Disciplinas</h5>
                        <div class="row">
                            @foreach ($disciplinas as $disciplina)
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $disciplina->id }}"
                                        id="disciplina" name="disciplina[]"
                                        @if (is_array(old('disciplinas')) && in_array($disciplina->id, old('disciplinas'))) checked @endif>
                                    <label class="form-check-label" for="disciplina">
                                        {{ $disciplina->nome_disciplina }}
                                    </label>
                                </div>
                            @endforeach
                            @empty($disciplinas->toArray())
                                <div class="fw-bold text-danger small">Não há cadastros de disciplinas</div>
                            @endempty
                        </div>

                        <h5 class="modal-title">Turmas</h5>
                        <div class="row">
                            @foreach ($turmas as $turma)
                                <div class="col-2 form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $turma->id }}"
                                        id="turma" name="turma[]"
                                        @if (is_array(old('turmas')) && in_array($turma->id, old('turmas'))) checked @endif>
                                    <label class="form-check-label" for="turma">
                                        {{ $turma->nome_turma }}
                                    </label>
                                </div>
                            @endforeach
                            @empty($turmas->toArray())
                                <div class="fw-bold text-danger small">Não há cadastros de turmas</div>
                            @endempty
                        </div>
                        
                        <h5 class="modal-title">Dados de acesso ao sistema!</h5>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" value="{{ old('email') }}" required>
                            @error('email')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="password" class="form-label">Senha de acesso</label>
                            <input type="text" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" value="{{ old('password') }}" required>
                            @error('password')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                            <input type="text"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" id="password_confirmation"
                                value="{{ old('password_confirmation') }}" required>
                            @error('password_confirmation')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="add_professor_btn" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Editar professor --}}
@foreach ($professores as $professor)
<div class="modal fade" id="editProfessor{{$professor->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title">Editar Professor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('professor.update', $professor->id) }}" method="POST" id="edit_professor_form">
                    @method('PUT')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <div class="col-md-12 mb-3">
                            <label for="nome" class="form-label">Nome do professor</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="nome" id="nome" value="{{ old('nome', $professor->user->name) }}" required>
                            @error('nome')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="nascimento_professor" class="form-label">Data de nascimento</label>
                            <input type="date" class="form-control @error('nascimento_professor') is-invalid @enderror"
                                name="nascimento_professor" id="nascimento_professor" value="{{ old('nascimento_professor', $professor->nascimento_professor) }}" required>
                            @error('nascimento_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="sexo_professor" class="form-label">Sexo</label>
                            <select class="form-select @error('sexo_professor') is-invalid @enderror" name="sexo_professor"
                                id="sexo_professor">
                                <option value="masculino" @if (old('sexo_professor') == 'masculino') selected @endif>
                                    Maculino
                                </option>
                                <option value="feminino" @if (old('sexo_professor') == 'feminino') selected @endif {{ $professor->sexo_professor == 'feminino' ? "selected='selected'" : "" }}>
                                    Feminino
                                </option>
                            </select>
                            @error('sexo')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="cpf_professor" class="form-label">CPF</label>
                            <input type="text" class="form-control @error('cpf_professor') is-invalid @enderror"
                                name="cpf_professor" id="cpf_professor" value="{{ old('cpf_professor', $professor->cpf_professor) }}" required>
                            @error('cpf_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="municipio_professor" class="form-label">Cidade</label>
                            <input type="text" class="form-control @error('municipio_professor') is-invalid @enderror"
                                name="municipio_professor" id="municipio_professor" value="{{ old('municipio_professor', $professor->municipio_professor) }}" required>
                            @error('municipio_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="bairro_professor" class="form-label">Bairro</label>
                            <input type="text" class="form-control @error('bairro_professor') is-invalid @enderror"
                                name="bairro_professor" id="bairro_professor" value="{{ old('bairro_professor', $professor->bairro_professor) }}" required>
                            @error('bairro_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="endereco_professor" class="form-label">Endereço</label>
                            <input type="text" class="form-control @error('endereco_professor') is-invalid @enderror"
                                name="endereco_professor" id="endereco_professor" value="{{ old('endereco_professor', $professor->endereco_professor) }}" required>
                            @error('endereco_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="cep_professor" class="form-label">Cep</label>
                            <input type="text" class="form-control @error('cep_professor') is-invalid @enderror"
                                name="cep_professor" id="cep_professor" value="{{ old('cep_professor', $professor->cep_professor) }}" required>
                            @error('cep_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="telefone_professor" class="form-label">Telefone</label>
                            <input type="text" class="form-control @error('telefone_professor') is-invalid @enderror"
                                name="telefone_professor" id="telefone_professor" value="{{ old('telefone_professor', $professor->telefone_professor) }}" required>
                            @error('telefone_professor')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="edit_professor_btn" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

{{-- Deletar professor --}}
@foreach ($professores as $professor)
<div class="modal fade bg-light" id="deleteProfessor{{$professor->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deletar Professor?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('professor.delete', $professor->user->id) }}" method="POST" id="delete_professor_form">
                    @method('DELETE')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <h4 class="text-center">A ação não poderá ser desfeita!</h4>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" id="delete_professor_btn" class="btn btn-danger">Deletar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach