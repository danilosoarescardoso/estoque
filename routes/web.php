<?php

Route::get('/', function(){
	return 'Listagem de Produtos';
}); 

Route::get('/produtos', 'ProdutoController@lista');