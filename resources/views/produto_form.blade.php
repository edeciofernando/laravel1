@extends('principal')

@section('conteudo')

<div class="row">
    <div class="col-sm-11">
        <h2> 
@if($acao == 1)            
    Inclusão 
@elseif($acao == 2)
    Alteração
@endif    

de Produtos 
        </h2>
    </div>
    <div class="col-sm-1">
        <a href="{{route('produtos.index')}}" class="btn btn-primary" role="button"> Voltar </a>
    </div>
</div>

<form method='post' action='{{route('produtos.store')}}'>
    {{ csrf_field() }}
  <div class="form-group">
    <label for="nome">Nome do Produto:</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Comercial">
  </div>

  <div class="form-group">
    <label for="marca">Marca:</label>
    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca do Produto">
  </div>
    
  <div class="form-group">
    <label for="quant">Quantidade:</label>
    <input type="text" class="form-control" id="quant" name="quant" placeholder="Quantidade em Estoque">
  </div>
    
  <div class="form-group">
    <label for="preco">Preço R$:</label>
    <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço de Venda">
  </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-warning">Limpar</button>
</form>

@endsection