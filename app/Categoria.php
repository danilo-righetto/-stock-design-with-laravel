<?php

namespace estoque;

use estoque\Jogo;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = array('nome', 'descricao');

    public function jogos()
    {
        return $this->hasMany('estoque\Jogo');
    }
}
