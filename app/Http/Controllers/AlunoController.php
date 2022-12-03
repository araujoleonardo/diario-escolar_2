<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\User;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alunos.alunoIndex');
    }

    public function listar()
    {
        $alunos = Alunos::all();
        $output = '';

        if($alunos->count() > 0){
            $output.='
                <table class="table table-striped table-sm text-center align-middle">
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
                <tbody>';
                foreach ($alunos as $aluno) {
                    $output .= '<tr>
                        <td>' . $aluno->user->name . '</td>
                        <td>' . $aluno->nascimento_aluno . '</td>
                        <td>' . $aluno->sexo_aluno . '</td>
                        <td>' . $aluno->municipio_aluno . '</td>
                        <td>' . $aluno->bairro_aluno . '</td>
                        <td>' . $aluno->endereco_aluno . '</td>
                        <td>' . $aluno->telefone_aluno . '</td>
                        <td>
                            <a href="#" id="#" class="text-primary mx-1 showIcon"><i class="bi-file-earmark-text h4"></i></a>
    
                            <a href="#" id="' . $aluno->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editAluno"><i class="bi-pencil-square h4"></i></a>
    
                            <a href="#" id="' . $aluno->user->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                        </td>
                    </tr>';
                }
                $output .= '</tbody></table>';
                echo $output;            
        }else{
            echo '<h1 class="text-center text-secondary my-5">Não exitem alunos cadastrados!</h1>';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.addAluno');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_profile' => 'aluno'
        ]);

        $aluno = Alunos::create([
            'user_id' => $user->id,
            'nome_social_aluno' => $request->nome_social,
            'nascimento_aluno' => $request->nascimento_aluno,
            'sexo_aluno' => $request->sexo_aluno,
            'cpf_aluno' => $request->cpf_aluno,
            'municipio_aluno' => $request->municipio_aluno,
            'bairro_aluno' => $request->bairro_aluno,
            'endereco_aluno' => $request->endereco_aluno,
            'cep_aluno' => $request->cep_aluno,
            'telefone_aluno' => $request->telefone_aluno,
        ]);

		return response()->json([
			'status' => 200,
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        User::destroy($id);
    }
}
