<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;

class CadastroController extends Controller
{
    public function form() {
        return view('form');
    }
    
    public function grava(Request $request) {
//        $nome = $request->nome;
//        $email = $request->email;
        
//        echo "<h2> Nome: $nome </h2>";
//        echo "<h2> E-mail: $email </h2>";
        
        $dados = $request->all();
        echo "<h2> Nome: " . $dados['nome'] . "</h2>";
        echo "<h2> E-mail: " . $dados['email'] . "</h2>";        
    }
    
    public function lista() {
        $prods = Produto::all();
        
        return view('lista', compact('prods'));
    }

    // outra forma
    public function lista1() {
        // instancia um objeto da classe produto
        $produto = new Produto();

        // obtém os registros da tabela (model) carrespondente
        $prods = $produto->all();
        
        return view('lista', compact('prods'));
    }

    // outra forma
    // Produto $produto: equivale ao comando $produto = new Produto()
    public function lista2(Produto $produto) {   
        // obtém os registros da tabela (model) carrespondente
        $prods = $produto->all();
        
        return view('lista', compact('prods'));
    }
    
}
