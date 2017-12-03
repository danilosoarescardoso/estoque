<?php namespace estoque\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use Request;
    use estoque\Produto;

    class ProdutoController extends Controller {

        public function lista(){
            
            $produtos = Produto::all();

            return view('produto.listagem')->with('produtos', $produtos);

        }

        public function mostra($id){

            $resposta = DB::select('select * from produtos where id = ?', [$id]);

            if(empty($resposta)) {
                return "Esse produto não existe";
            }
            return view('produto.detalhes')->with('p', $resposta[0]);
        }

        public function novo(){
          return view('produto.formulario');
        }

        public function adiciona(){

            $produto = new Produto();

            $produto->nome = Request::input('nome');
            $produto->valor = Request::input('valor');
            $produto->descricao = Request::input('descricao');
            $produto->quantidade = Request::input('quantidade');

            $produto->save(); 

            return redirect()
              ->action('ProdutoController@lista')
              ->withInput(Request::only('nome'));
        }

    }