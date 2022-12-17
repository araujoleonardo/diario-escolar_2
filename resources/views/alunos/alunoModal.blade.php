{{-- Cadastro de aluno --}}
<div class="modal fade" id="novoAluno" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Aluno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('aluno.create') }}" method="post" id="add_aluno_form">
                    @csrf
                    <div class="modal-body row g-3">

                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome do aluno</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="nome" id="nome" value="{{ old('nome') }}" required>
                            @error('nome')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="nome_social" class="form-label">Nome Social</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="nome_social" id="nome_social" value="{{ old('nome_social') }}" required>
                            @error('nome_social')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="nascimento_aluno" class="form-label">Data de nascimento</label>
                            <input type="date" class="form-control @error('nascimento_aluno') is-invalid @enderror"
                                name="nascimento_aluno" id="nascimento_aluno" value="{{ old('nascimento_aluno') }}" required>
                            @error('nascimento_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="sexo_aluno" class="form-label">Sexo</label>
                            <select class="form-select @error('sexo_aluno') is-invalid @enderror" name="sexo_aluno"
                                id="sexo_aluno">
                                <option value="" selected>Selecione um sexo</option>
                                <option value="masculino" @if (old('sexo_aluno') == 'masculino') selected @endif>
                                    Maculino
                                </option>
                                <option value="feminino" @if (old('sexo_aluno') == 'feminino') selected @endif>
                                    Feminino
                                </option>
                            </select>
                            @error('sexo')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="cpf_aluno" class="form-label">CPF</label>
                            <input type="text" class="form-control @error('cpf_aluno') is-invalid @enderror"
                                name="cpf_aluno" id="cpf_aluno" value="{{ old('cpf_aluno') }}" required>
                            @error('cpf_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="municipio_aluno" class="form-label">Cidade</label>
                            <input type="text" class="form-control @error('municipio_aluno') is-invalid @enderror"
                                name="municipio_aluno" id="municipio_aluno" value="{{ old('municipio_aluno') }}" required>
                            @error('municipio_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="bairro_aluno" class="form-label">Bairro</label>
                            <input type="text" class="form-control @error('bairro_aluno') is-invalid @enderror"
                                name="bairro_aluno" id="bairro_aluno" value="{{ old('bairro_aluno') }}" required>
                            @error('bairro_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="endereco_aluno" class="form-label">Endereço</label>
                            <input type="text" class="form-control @error('endereco_aluno') is-invalid @enderror"
                                name="endereco_aluno" id="endereco_aluno" value="{{ old('endereco_aluno') }}" required>
                            @error('endereco_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="cep_aluno" class="form-label">Cep</label>
                            <input type="text" class="form-control @error('cep_aluno') is-invalid @enderror"
                                name="cep_aluno" id="cep_aluno" value="{{ old('cep_aluno') }}" required>
                            @error('cep_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="telefone_aluno" class="form-label">Telefone</label>
                            <input type="text" class="form-control @error('telefone_aluno') is-invalid @enderror"
                                name="telefone_aluno" id="telefone_aluno" value="{{ old('telefone_aluno') }}" required>
                            @error('telefone_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

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
                    <button type="submit" id="add_aluno_btn" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- Editar aluno --}}
@foreach ($alunos as $aluno)
<div class="modal fade" id="editAluno{{$aluno->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Aluno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('aluno.update', $aluno->id) }}" method="POST" id="edit_aluno_form">
                    @method('PUT')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome do aluno</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="nome" id="nome" value="{{ old('nome', $aluno->user->name) }}" required>
                            @error('nome')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="nome_social" class="form-label">Nome Social</label>
                            <input type="text" class="form-control @error('nome') is-invalid @enderror"
                                name="nome_social" id="nome_social" value="{{ old('nome_social', $aluno->nome_social_aluno) }}" required>
                            @error('nome_social')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="nascimento_aluno" class="form-label">Data de nascimento</label>
                            <input type="date" class="form-control @error('nascimento_aluno') is-invalid @enderror"
                                name="nascimento_aluno" id="nascimento_aluno" value="{{ old('nascimento_aluno', $aluno->nascimento_aluno) }}" required>
                            @error('nascimento_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="sexo_aluno" class="form-label">Sexo</label>
                            <select class="form-select @error('sexo_aluno') is-invalid @enderror" name="sexo_aluno"
                                id="sexo_aluno">
                                <option value="masculino" @if (old('sexo_aluno') == 'masculino') selected @endif>
                                    Maculino
                                </option>
                                <option value="feminino" @if (old('sexo_aluno') == 'feminino') selected @endif {{ $aluno->sexo_aluno == 'feminino' ? "selected='selected'" : "" }}>
                                    Feminino
                                </option>
                            </select>
                            @error('sexo')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="cpf_aluno" class="form-label">CPF</label>
                            <input type="text" class="form-control @error('cpf_aluno') is-invalid @enderror"
                                name="cpf_aluno" id="cpf_aluno" value="{{ old('cpf_aluno', $aluno->cpf_aluno) }}" required>
                            @error('cpf_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="municipio_aluno" class="form-label">Cidade</label>
                            <input type="text" class="form-control @error('municipio_aluno') is-invalid @enderror"
                                name="municipio_aluno" id="municipio_aluno" value="{{ old('municipio_aluno', $aluno->municipio_aluno) }}" required>
                            @error('municipio_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="bairro_aluno" class="form-label">Bairro</label>
                            <input type="text" class="form-control @error('bairro_aluno') is-invalid @enderror"
                                name="bairro_aluno" id="bairro_aluno" value="{{ old('bairro_aluno', $aluno->bairro_aluno) }}" required>
                            @error('bairro_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="endereco_aluno" class="form-label">Endereço</label>
                            <input type="text" class="form-control @error('endereco_aluno') is-invalid @enderror"
                                name="endereco_aluno" id="endereco_aluno" value="{{ old('endereco_aluno', $aluno->endereco_aluno) }}" required>
                            @error('endereco_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="cep_aluno" class="form-label">Cep</label>
                            <input type="text" class="form-control @error('cep_aluno') is-invalid @enderror"
                                name="cep_aluno" id="cep_aluno" value="{{ old('cep_aluno', $aluno->cep_aluno) }}" required>
                            @error('cep_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="telefone_aluno" class="form-label">Telefone</label>
                            <input type="text" class="form-control @error('telefone_aluno') is-invalid @enderror"
                                name="telefone_aluno" id="telefone_aluno" value="{{ old('telefone_aluno', $aluno->telefone_aluno) }}" required>
                            @error('telefone_aluno')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="edit_aluno_btn" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


{{-- Deletar aluno --}}
@foreach ($alunos as $aluno)
<div class="modal fade" id="deleteAluno{{$aluno->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deletar Aluno?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('aluno.delete', $aluno->user->id) }}" method="POST" id="delete_aluno_form">
                    @method('DELETE')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <h4 class="text-center">A ação não poderá ser desfeita!</h4>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" id="delete_aluno_btn" class="btn btn-danger">Deletar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach