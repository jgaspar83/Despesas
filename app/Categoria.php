<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['descricao'];
    protected $guarded = ['id', 'create_at', 'update_at'];
    protected $table = 'categorias';

    //Categoria pertence a uma ou Mais despesas
    public function despesas() {
        return $this->belongsTo(Despesa::class);
    }
}
