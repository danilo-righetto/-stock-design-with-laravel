@extends('layout.principal')

@section('content')
    @if(count($errors->all()) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

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
            <label for="tamanho">Tamanho:</label>
            <input name="tamanho" id="tamanho" type="text" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="categoria_id">Categoria:</label>
            <td id="middle">
                <select name="categoria_id" id="categoria_id" class="form-control">
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </td>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>

@endsection