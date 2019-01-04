<?php

namespace estoque\Http\Controllers;

use DB;

class ProdutoController extends Controller
{
    public function lista()
    {
        $html = '<h1>Listagem de produtos</h1>';

        $html .= '<ul>';

        $produtos = DB::select('select * from jogos');

        foreach($produtos as $produto) {
            $html .= '<li>Nome: '. $produto->nome .', Descrição: '. $produto->descricao .'</li>';
        }

        $html .= '</ul>';

        return $html;
    }
}