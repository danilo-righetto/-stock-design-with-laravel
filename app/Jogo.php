<?php

namespace estoque;

use estoque\Categoria;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    public $timestamps = false;
    protected $fillable = array('nome', 'descricao', 'compatibilidade', 'genero', 'preco', 'quantidade', 'tamanho', 'categoria_id');

    public function categoria()
    {
        return $this->belongsTo('estoque\Categoria');
    }
}
