<?php

Route::get('/', function(){
	return 'Listagem de Produtos';
}); 

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id?}', 'ProdutoController@mostra');


