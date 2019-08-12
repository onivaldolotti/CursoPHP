@extends ('layout')

@section('cabecalho')
Adicionar Serie
@endsection

@section('conteudo')
<form method="post">
	@csrf
	<div class="form-group">
		<label for="name" class="">Nome</label>
		<input type="text" class="form-control" name="nome" id="nome">
	</div>
	<button class="btn btn-primary">Adicionar</button>
</form>
@endsection
