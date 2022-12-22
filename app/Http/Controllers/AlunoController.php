<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use App\Models\Turmas;
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
        $turmas = Turmas::get();
        $alunos = Alunos::get();
        return view('alunos.alunoIndex', compact('alunos', 'turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        // alocar aluno para turma
        foreach ($request->turma as $turma_id) {
            $aluno->turmasAsAlunos()->attach($turma_id);
        }

		return redirect()->route('aluno.index');
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
    public function edit()
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
    public function update(Request $request)
    {

        $aluno = Alunos::find($request->id);

        $aluno->user->name = $request->nome;
        $aluno->nome_social_aluno = $request->nome_social;
        $aluno->nascimento_aluno = $request->nascimento_aluno;
        $aluno->sexo_aluno = $request->sexo_aluno;
        $aluno->cpf_aluno = $request->cpf_aluno;
        $aluno->municipio_aluno = $request->municipio_aluno;
        $aluno->bairro_aluno = $request->bairro_aluno;
        $aluno->endereco_aluno = $request->endereco_aluno;
        $aluno->cep_aluno = $request->cep_aluno;
        $aluno->telefone_aluno = $request->telefone_aluno;

        $aluno->user->save();
        $aluno->save();

        return redirect()->route('aluno.index');
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
        return redirect()->route('aluno.index');
    }
}
