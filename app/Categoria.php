<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Campos editaveis
    protected $fillable = ['descricao'];

    //Campos Protegidos
    protected $guarded = ['id', 'created_at', 'update_at'];
    
    protected $table = 'categorias';

    //Categoria pertence a uma ou Mais despesas
    public function despesas() {
        return $this->belongsTo(Despesa::class);
    }
}
