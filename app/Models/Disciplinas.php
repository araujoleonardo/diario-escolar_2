<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplinas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_disciplina',
        'detalhes',
    ];

    /**
     * Relacionamento com a tabela professor
     *
     * @return void
     */
    public function professores(){
        return $this->belongsToMany(Professores::class);
    }
}
