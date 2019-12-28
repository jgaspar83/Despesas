<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    //Campos editaveis
    protected $fillable = ['descricao', 'data', 'valor', 'categoria_id'];
    
    //Campos Protegidos
    protected $guarded = ['id', 'created_at', 'update_at'];
    
    protected $table = 'despesas';

    //Despesa possui uma categoria associada a ela
    public function categorias() {
        return $this->hasMany(Categoria::class);
    }
}
