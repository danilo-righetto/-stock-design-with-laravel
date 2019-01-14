@extends('layout.principal')

@section('content')

    <form action="" method="">
        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="">Valor:</label>
            <input type="text" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="">Quantidade:</label>
            <input type="text" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="">Descrição:</label>
            <textarea name="" cols="30" rows="5" class="form-control"></textarea>
        </div>
    </form>

@endsection