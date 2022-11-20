<h1>Editar Produto</h1>

<?php 
   
   $sql = "SELECT * FROM produtos WHERE proId=".$_REQUEST["id"];

   $res = $conexao->query($sql);
   $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php 
        print $row->proId;
     ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="proNome"
		 value="<?php print $row->proNome; ?>" class="form-control">
	</div>

	<div class="mb-3">
		<label>Quantidade de produtos</label>
		<input type="number" name="proQtd" 
		value="<?php print $row->proQtd; ?>" class="form-control">
	</div>

	<div class="mb-3">
		<label>Valor do produto</label>
		<input type="number" name="proValor" 
		value="<?php print $row->proValor; ?>" class="form-control">
	</div>

     <div class="mb-3">
     	<button type="submit" class="btn btn-primary">Enviar</button>
     </div>
</form>