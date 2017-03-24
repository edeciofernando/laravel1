@extends('principal')

@section('conteudo')

<div class="row">
    <div class="col-sm-11">
        <h2> Cadastro de Produtos </h2>
    </div>
    <div class="col-sm-1">
        <a href="{{route('produtos.create')}}" class="btn btn-primary" role="button">Novo</a>
    </div>
</div>

@if (session('status'))
    <div class="alert alert-success">
        <strong> Sucesso!! </strong> {{ session('status') }}
    </div>
@endif

<table class="table table-hover">
    <thead>
        <tr>
            <th> Código </th>
            <th> Produto </th>
            <th> Marca </th>
            <th> Quant </th>
            <th> Preço R$ </th>
            <th> Ações </th>
        </tr>
    </thead>
    <tbody>
        @foreach($lista as $p)
        <tr>
            <td style='text-align: center'> {{$p->id}} </td>
            <td> {{$p->nome}} </td>
            <td> {{$p->marca}} </td>
            <td style='text-align:right'> {{$p->quant}} </td>
            <td style='text-align:right'> {{number_format($p->preco, 2, ',', '.')}} </td>
            <td> 
                <a href="{{route('produtos.show', $p->id)}}" class="btn btn-info" role="button">Ver</a>
                <a href="{{route('produtos.edit', $p->id)}}" class="btn btn-warning" role="button">Alterar</a>
                <a href="{{route('produtos.destroy', $p->id)}}" class="btn btn-danger" role="button">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection