{{-- Cadastro de Periodo Escolar --}}
<div class="modal fade" id="novoPeriodo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar Período Escolar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('periodo.create') }}" method="post" id="add_periodo_form">
                    @csrf
                    <div class="modal-body row g-3">

                        <div class="col-md-12 mb-3">
                            <label for="nome_periodo" class="form-label">Nome do período</label>
                            <input type="text" class="form-control @error('nome_periodo') is-invalid @enderror"
                                name="nome_periodo" id="nome_periodo" value="{{ old('nome_periodo') }}" placeholder="1º Bimestre" required>
                            @error('nome_periodo')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <label for="nome" class="form-label">Datas do período</label>
                        <div class="row px-2">
                            <div class="col-1 text-truncate px-0 text-center pt-2">De </div>
                            <div class="col-5 px-1">
                                <input type="date"
                                    class="form-control @error('data_inicio') is-invalid @enderror"
                                    name="data_inicio" id="data_inicio" value="{{ old('data_inicio') }}" required>
                                @error('data_inicio')
                                    <small class="invalid-feedback fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-1 text-truncate px-0 text-center pt-2">até </div>
                            <div class="col-5 px-1">
                                <input type="date" class="form-control @error('data_final') is-invalid @enderror"
                                    name="data_final" id="data_final" value="{{ old('data_final') }}" required>
                                @error('data_final')
                                    <small class="invalid-feedback fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="add_periodo_btn" class="btn btn-primary">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- Editar Periodo Escolar --}}
@foreach ($periodos as $periodo)
<div class="modal fade" id="editPeriodo{{$periodo->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar periodo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('periodo.update', $periodo->id) }}" method="POST" id="edit_periodo_form">
                    @method('PUT')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <div class="col-md-12 mb-3">
                            <label for="nome_periodo" class="form-label">Nome da periodo</label>
                            <input type="text" class="form-control @error('nome_periodo') is-invalid @enderror"
                                name="nome_periodo" id="nome_periodo" value="{{ old('nome_periodo', $periodo->nome_periodo) }}" required>
                            @error('nome_periodo')
                                <small class="invalid-feedback fw-bold">{{ $message }}</small>
                            @enderror
                        </div>

                        <label for="nome" class="form-label">Datas do período</label>
                        <div class="row px-2">
                            <div class="col-1 text-truncate px-0 text-center pt-2">De </div>
                            <div class="col-5 px-1">
                                <input type="date"
                                    class="form-control @error('data_inicio') is-invalid @enderror"
                                    name="data_inicio" id="data_inicio"
                                    value="{{ old('data_inicio', $periodo->data_inicio) }}" required>
                                @error('data_inicio')
                                    <small class="invalid-feedback fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-1 text-truncate px-0 text-center pt-2">até </div>
                            <div class="col-5 px-1">
                                <input type="date" class="form-control @error('data_final') is-invalid @enderror"
                                    name="data_final" id="data_final"
                                    value="{{ old('data_final', $periodo->data_final) }}" required>
                                @error('data_final')
                                    <small class="invalid-feedback fw-bold">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" id="edit_periodo_btn" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


{{-- Deletar Periodo --}}
@foreach ($periodos as $periodo)
<div class="modal fade" id="deletePeriodo{{$periodo->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deletar periodo?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('periodo.delete', $periodo->id) }}" method="POST" id="delete_periodo_form">
                    @method('DELETE')
                    @csrf                    
                    <div class="modal-body row g-3">

                        <h4 class="text-center">A ação não poderá ser desfeita!</h4>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" id="delete_periodo_btn" class="btn btn-danger">Deletar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach