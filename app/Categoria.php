<?php

namespace estoque;

use estoque\Jogo;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function jogos()
    {
        return $this->hasMany('estoque\Jogo');
    }
}
