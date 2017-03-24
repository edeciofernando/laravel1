<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // instancia um objeto da classe (Model) Produto
        $produto = new Produto();
        // obtém todos os registros
        $lista = $produto->all();

        return view('produto_show', compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // indica no formulário a ação de inclusão de registros
        $acao = 1;

        return view('produto_form', compact('acao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // obtém todos os campos do formulário
        $dados = $request->all();

        // insere o registro 
        $prod = Produto::create($dados);

        // se inclusão ok
        if ($prod) {
            return redirect()->route('produtos.index')
                            ->with('status', $request->nome . ' Cadastrado com Sucesso!');
        }
    }

    // outra forma: instanciando um objeto e setando seus atributos
    public function store2(Request $request) {
        // instancia um objeto da classe produto
        $prod = new Produto();

        // seta seus atributos
        $prod->nome = $request->nome;
        $prod->marca = $request->marca;
        $prod->quant = $request->quant;
        $prod->preco = $request->preco;

        // salva/grava o registro
        $prod->save();

        return redirect()->route('produtos.index')
                        ->with('status', $request->nome . ' Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return "<h1> Show Produto: $id </h1>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        // indica a ação de alteração de dados
        $acao = 2;

        return view('produto_form', compact('acao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
