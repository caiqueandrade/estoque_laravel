<?php

Route::get('/', function(){
    return '<h1>Listagem de Produtos</h1>';
});

// Lista os produtos
Route::get('/produtos', 'ProdutoController@lista');

// Mostra os detalhes do produto
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');

// Mostra o produto novo
Route::get('/produtos/novo', 'ProdutoController@novo');

// Adiciona um produto
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

