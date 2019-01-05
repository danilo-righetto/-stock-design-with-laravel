<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from jogos');

        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra()
    {
        $id = Request::route('id');

        $produto = DB::select('select * from jogos where id = ?', [$id]);

        if(empty($produto)) {
            return '<h3>O produto não existe!</h3>';
        }
       
        return view('detalhes')->with('produto', $produto[0]);
    }
}