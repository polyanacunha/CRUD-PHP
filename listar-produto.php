<h1>Listar Produtos</h1>
<?php
   $sql = "SELECT * FROM produtos ";

   $res = $conexao->query($sql) or die($conexao->error);

   $qtd = $res->num_rows;

   if($qtd > 0){
        print "<table  class='table table-striped table-hover table-bordered'>";
        print "<tr>";
                      print "<th>Id Produto</th>";
                      print "<th>Nome</th>";
                      print "<th>Quantidade</th>";
                      print "<th>Valor</th>";
                      print "<th>Ações</th>";
                      print "</tr>";
   	while($row = $res->fetch_object()){
        print "<tr>";
   	  print "<td>".$row->proId."</td>";
        print "<td>".$row->proNome."</td>";
        print "<td>".$row->proQtd."</td>";
        print "<td>".$row->proValor."</td>";
        print "<td>
               <button onclick=\"location.href='?page=editar&id=".$row->proId."';\" class='btn btn-success'>Editar</button>


               <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->proId."';}else{false;}\"class='btn btn-danger'>Excluir</button>
              </td>";
        print "<tr>";

   	}

      print "</table>";

   }else{
   	 print "<p class='alert alert-danger'>Não encontrou resultados!</p>";

   }
   	?>