<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    public $timestamps = false;
    protected $fillable = array('nome', 'descricao', 'compatibilidade', 'genero', 'preco', 'quantidade', 'tamanho');
}
