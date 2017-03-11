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
        $nome = $request->nome;
        $email = $request->email;
        
        echo "<h2> Nome: $nome </h2>";
        echo "<h2> E-mail: $email </h2>";
    }
    
    public function lista() {
        $prods = Produto::all();
        
        return view('lista', compact('prods'));
    }
    
}
