<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_turma',
        'turno',
    ];

    /**
     * Relacionamento com a tabela professor
     *
     * @return void
     */
    public function professores(){
        return $this->belongsToMany(Professores::class);
    }

    /**
     * Relacionamento com a tabela alunos
     *
     * @return void
     */
    public function alunos(){
        return $this->belongsToMany(Alunos::class);
    }
}
