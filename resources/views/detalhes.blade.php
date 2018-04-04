@extends('principal')

@section('conteudo')
<h1>Detalhes do Produto: {{$produto -> nome}}</h1>

<ul>
    <li>
        Valor: {{$produto -> valor}}
    </li>
    <li>
        Descrição: {{$produto -> descricao}}
    </li>
    <li>
        Quantidade:  {{$produto -> quantidade}}
    </li>
</ul>    
@stop
