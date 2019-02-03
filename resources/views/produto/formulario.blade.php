@extends('layout.principal')

@section('content')
    <h2>Adicione um novo produto</h2>
    
    <form action="/produtos/adiciona" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="preco">Valor:</label>
            <input name="preco" id="preco" type="number" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="genero">Gênero:</label>
            <input name="genero" id="genero" type="text" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="compatibilidade">Compatibilidade:</label>
            <input name="compatibilidade" id="compatibilidade" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input name="quantidade" id="quantidade" type="number" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>

@endsection