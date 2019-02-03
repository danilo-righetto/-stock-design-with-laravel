@extends('layout.principal')

@section('content')
    @if(empty($produto))
        <div class="alert alert-danger">
            <p>Produti inexistente</p>
        </div>
    @else   
        <h1>Detalhes do produto: <?= $produto->nome ?></h1>

        <ul>
            <li>
                <b>Valor: R$</b> {{ number_format($produto->preco, 2, ',', '.') }}
            </li>

            <li>
                <b>Gênero: </b> {{ $produto->genero }}
            </li>

            <li>
                <b>Compatibilidade: </b> {{ $produto->compatibilidade }}
            </li>

            <li>
                <b>Descrição: </b> {{ $produto->descricao }}
            </li>

            <li>
                <b>Quantidade: </b> {{ $produto->quantidade }}
            </li>

            <li>
                <b>Dimensões: </b> {{ $produto->tamanho }}
            </li>
        </ul>
    @endif
@endsection