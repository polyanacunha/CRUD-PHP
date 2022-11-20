<h1>Novo Produto</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="proNome" class="form-control">
	</div>

	<div class="mb-3">
		<label>Quantidade de produtos</label>
		<input type="number" name="proQtd" class="form-control">
	</div>

	<div class="mb-3">
		<label>Valor do produto</label>
		<input type="number" name="proValor" class="form-control">
	</div>

     <div class="mb-3">
     	<button type="submit" class="btn btn-primary">Enviar</button>
     </div>
</form>