<?php namespace estoque\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use estoque\Produto;
    use Illuminate\Http\Request;
    use estoque\Http\Requests\ProdutoRequest;

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

            public function remove($id){
                $produto = Produto::find($id);
                $produto-> delete();
                return redirect()->action('ProdutoController@lista');

            }

            public function novo(){
              return view('produto.formulario');
            }

            public function adiciona(ProdutoRequest $request){

                Produto::create($request->all());

                return redirect()
                    ->action('ProdutoController@lista')
                    ->withInput(Request::only('nome'));
            }

        }