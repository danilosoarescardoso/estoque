<?php

use Illuminate\Database\Seeder;
use estoque\Categoria;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call('CategoriaTableSeeder');
    }
}

class CategoriaTableSeeder extends Seeder{

	public function run(){
		Categoria::create(['nome' => 'Frutas']);
		Categoria::create(['nome' => 'Brinquedos']);
		Categoria::create(['nome' => 'Esportes']);

	}
}