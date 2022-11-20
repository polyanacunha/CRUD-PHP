<?php

   switch(@$_REQUEST["acao"]) {
   	case 'cadastrar':
        $proNome = $_POST["proNome"];
        $proQtd = $_POST["proQtd"];
        $proValor = $_POST["proValor"];
      

        $sql = "INSERT INTO produtos (proNome,proQtd,proValor) VALUES ('{$proNome}', '{$proQtd}', '{$proValor}')";

        $res = $conexao->query($sql);

        if($res==true){
        	print "<script>alert('Produto cadastrado com sucesso!');</script>')";
        	print "<script>location.href='?page=listar';</script>')";
        }else{
        		print "<script>alert('Não foi possível cadastrar este produto.');</script>')";
        	print "<script>location.href='?page=listar'</script>')";
        }
   	    break;

   	case 'editar':
   		$proNome = $_POST["proNome"];
        $proQtd = $_POST["proQtd"];
        $proValor = $_POST["proValor"];

         $sql = "UPDATE produtos SET
          proNome='{$proNome}',
          proQtd='{$proQtd}',
          proValor='{$proValor}'
          WHERE proId=".$_REQUEST["id"];
          

         $res = $conexao->query($sql);

        if($res==true){
        	print "<script>alert('Produto editado com sucesso!');</script>')";
        	print "<script>location.href='?page=listar';</script>')";
        }else{
        		print "<script>alert('Não foi possível editar este produto.');</script>')";
        	print "<script>location.href='?page=listar'</script>')";
        }
      
   		break;
   	case 'excluir':
   		$sql = "DELETE FROM produtos WHERE proId=".$_REQUEST["id"];


         $res = $conexao->query($sql);

        if($res==true){
        	print "<script>alert('Produto excluído com sucesso!');</script>')";
        	print "<script>location.href='?page=listar';</script>')";
        }else{
        		print "<script>alert('Não foi possível excluir este produto.');</script>')";
        	print "<script>location.href='?page=listar'</script>')";
        }

   		break;
    
   }
?>