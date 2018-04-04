@extends('principal')

@section('conteudo')
<h1>Listagem de Produtos</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Quantidade</th>
        </tr>
    </thead>

    <tbody>
        @foreach($produtos as $produto)
        <tr class="{{ $produto -> quantidade <= 1 ? 'danger' : '' }}">
            <td> {{$produto -> nome}} </td>
            <td> {{$produto -> valor}} </td>
            <td> {{$produto -> descricao}} </td>
            <td> {{$produto -> quantidade}} </td>
            <td>
                <a href="/produtos/mostra/{{$produto -> id}}">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@if(old('nome'))
    <div class="alert alert-success">
        Produto {{ old('nome') }} adicionado com sucesso!
    </div>
@endif

@stop
