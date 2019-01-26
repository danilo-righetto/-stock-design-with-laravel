<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use estoque\Jogo;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = Jogo::all();

        return view('produto.listagem')->with('produtos', $produtos); // ou return view('produto/listagem')...
    }

    public function mostra($id)
    {
        $produto = Jogo::find($id);

        if(empty($produto)) {
            return '<h3>O produto não existe!</h3>';
        }
       
        return view('produto.detalhes')->with('produto', $produto);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona()
    {
        $params = Request::all();
        $jogo = new Jogo($params);
        $jogo->save();        
        // OU Jogo::create(Request::all());

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
        // Ou return redirect('/produtos')->withInput();  withInput guarda todos os dados da requisição anterior 
    }

    public function remove($id)
    {
        $produto = Jogo::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }

    public function json()
    {
        $produtos = DB::select('select * from jogos');
        return $produtos; // Ou return response()->json($produtos);
    }
}