<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professores extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf_professor',
        'nascimento_professor',
        'sexo_professor',
        'municipio_professor',
        'bairro_professor',
        'endereco_professor',
        'cep_professor',
        'telefone_professor',
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
