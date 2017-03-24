<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // indica que a tabela produtos não faz uso das colunas
    // created_at e updated_at
    public $timestamps = false;
    
    // identifica as colunas da tabela que podem ser 'editáveis'
    // na inserção / alteração de dados 
    protected $fillable = array('nome', 'marca', 'quant', 'preco');
}
