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

        return view('produto.listagem')->with('produtos', $produtos); // ou return view('produto/listagem')...
    }

    public function mostra()
    {
        $id = Request::route('id');

        $produto = DB::select('select * from jogos where id = ?', [$id]);

        if(empty($produto)) {
            return '<h3>O produto não existe!</h3>';
        }
       
        return view('produto.detalhes')->with('produto', $produto[0]);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona()
    {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao = Request::input('descricao');
        $genero = Request::input('genero');
        $compatibilidade = Request::input('compatibilidade');

        DB::insert('insert into jogos (nome, preco, quantidade, descricao, genero, compatibilidade) values (?,?,?,?,?,?)', array($nome, $valor, $quantidade, $descricao, $genero, $compatibilidade));

        return redirect('/produtos');
    }
}