<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplinas_Professores extends Model
{
    use HasFactory;

    protected $fillable = [
        'professores_id', 
        'disciplinas_id'
    ];

    /**
     * Relacionamento com a tabela disciplinas
     *
     * @return void
     */
    public function disciplina()
    {
        return $this->belongsTo(Disciplinas::class);
    }
}
