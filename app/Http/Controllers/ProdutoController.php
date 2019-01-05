<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from jogos');

        return view('listagem')->with('produtos', $produtos);
    }
}