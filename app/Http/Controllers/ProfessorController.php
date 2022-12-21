<?php

namespace App\Http\Controllers;

use App\Models\Disciplinas;
use App\Models\Disciplinas_Professores;
use App\Models\Professores;
use App\Models\User;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplinas = Disciplinas::get();
        $professores = Professores::get();
        return view('professores.professorIndex', compact('professores'), compact('disciplinas'));
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
            'user_profile' => 'professor'
        ]);

        $professor = Professores::create([
            'user_id' => $user->id,
            'cpf_professor' => $request->cpf_professor,
            'nascimento_professor' => $request->nascimento_professor,
            'sexo_professor' => $request->sexo_professor,
            'municipio_professor' => $request->municipio_professor,
            'bairro_professor' => $request->bairro_professor,
            'endereco_professor' => $request->endereco_professor,
            'cep_professor' => $request->cep_professor,
            'telefone_professor' => $request->telefone_professor,
        ]);


        // alocar professor para disciplinas
        foreach ($request->disciplina as $disciplina_id) {
            $professor->disciplinasAsProfessor()->attach($disciplina_id);
        }

		return redirect()->route('professor.index');
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
    public function update(Request $request)
    {
        $professor = Professores::find($request->id);

        $professor->user->name = $request->nome;
        $professor->cpf_professor = $request->cpf_professor;
        $professor->nascimento_professor = $request->nascimento_professor;
        $professor->sexo_professor = $request->sexo_professor;
        $professor->municipio_professor = $request->municipio_professor;
        $professor->bairro_professor = $request->bairro_professor;
        $professor->endereco_professor = $request->endereco_professor;
        $professor->cep_professor = $request->cep_professor;
        $professor->telefone_professor = $request->telefone_professor;

        $professor->user->save();
        $professor->save();

        return redirect()->route('professor.index');
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
        return redirect()->route('professor.index');
    }
}
