@extends('layout.principal')

@section('title')
<title>Adicionar Produto</title>
@stop

@section('conteudo')

<form action="/produto/adicionar" method="post">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" name="nome" />
	</div>

	<div class="form-group">
		<label>Valor</label>
		<input class="form-control" name="valor" />
	</div>

	<div class="form-group">
		<label>Descrição</label>
		<input class="form-control" name="descricao"/>
	</div>

	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" class="form-control" name="quantidade"/>
	</div>	

	<br/>

	<button type="submit" class="btn btn-success btn-block">Cadastrar</button>

</form>

@stop