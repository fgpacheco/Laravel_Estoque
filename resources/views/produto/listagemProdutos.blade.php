@extends('layout.principal')

@section('title')
<title>Lista dos produtos</title>
@stop

@section('conteudo')

@if(empty($produtos))
<div class="alert alert-danger">
	Não há nenhum produto cadastrado
</div>

@else

<h1>Listagem de produtos</h1>
<table class="table table-striped table-bordered table-hover" >
	@foreach($produtos as $produto)
	<tr class="{{ $produto->quantidade <= 1 ? 'alert-danger' : ''}}">
		<td>{{ $produto->nome }}</td>
		<td>{{ $produto->valor }}</td>
		<td>{{ $produto->descricao }}</td>
		<td>{{ $produto->quantidade }}</td>
		<td>
			<a href="/produto/detalhes/{{ $produto->id }}">
				Visualizar<!-- <span class="glyphicon glyphicon-search"></span> -->				
			</a>
		</td>
	</tr>
	@endforeach	
</table>

@endif

<h4>
	<span class="label alert-danger pull-right">
		Um ou menos itens no estoque
	</span>
</h4>

@stop