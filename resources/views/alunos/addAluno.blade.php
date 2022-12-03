@extends('layouts.main')

@section('title', 'Alunos')

@section('content')

    <div class="pt-5 pb-5 ps-3 pe-3">
        <form action="{{ route('aluno.create')}}" method="post" id="add_aluno_form">
            @csrf
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
                <label for="mascimento_aluno" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control @error('mascimento_aluno') is-invalid @enderror"
                    name="mascimento_aluno" id="mascimento_aluno" value="{{ old('mascimento_aluno') }}" required>
                @error('mascimento_aluno')
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

            <button type="submit" id="add_aluno_btn" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection