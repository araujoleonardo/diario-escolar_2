<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_social_aluno',
        'nascimento_aluno',
        'sexo_aluno',
        'cpf_aluno',
        'municipio_aluno',
        'bairro_aluno',
        'endereco_aluno',
        'cep_aluno',
        'telefone_aluno',
        'user_id',
    ];
    
    /**
     * Relacionamento com a tabela users
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
