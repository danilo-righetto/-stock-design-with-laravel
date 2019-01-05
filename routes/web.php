<?php

Route::get('/', function() {
    return '<h1>Primeira lógica com Laravel.</h1>';
});

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');