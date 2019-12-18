<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $fillable = ['descricao', 'data', 'valor'];
    protected $guarded = ['id', 'create_at', 'update_at'];
    protected $table = 'dategorias';

    //Despesa possui uma categoria associada a ela
    public function categorias() {
        return $this->hasMany(Categoria::class);
    }
}
