<?php
	include("conectar.php");
	//Aqui vai buscar a ação através do Request
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO produtos 
						(proNome, proQtd, proValor)
					VALUES
						('".$_POST["nomePro"]."',  '".$_POST["qtdPro"]."','".$_POST["valorPro"]."')";

			$resultado = $conexao->query($sql) or die($conexao->error);

			if($resultado==true)
			{
				print "<script>alert('Produto Cadastrado com sucesso !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
			else
			{
				print "<script>alert('Não foi possível cadastrar o produto !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
		break;
		
		case 'editar':
			$sql = "UPDATE produtos SET
						proNome='".$_POST["nomePro"]."',
						proQtd='".$_POST["qtdPro"]."',
						proValor='".$_POST["valorPro"]."'    
					WHERE
						proId=".$_POST["idPro"];

			$resultado = $conexao->query($sql) or die($conexao->error);

			if($resultado==true)
			{
				print "<script>alert('Produto editado com Sucesso !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
			else
			{
				print "<script>alert('Não foi possível editar o produto !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
		break;

		case 'excluir':
			$sql = "DELETE FROM produtos WHERE proId=".$_REQUEST["idPro"];

			$resultado = $conexao->query($sql) or die($conexao->error);

			if($resultado==true)
			{
				print "<script>alert('Produto Excluido com sucesso !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
			else
			{
				print "<script>alert('Não foi possível excluir o produto !!!!');</script>";
				print "<script>location.href='produtos.php';</script>";
			}
		break;
	}
?>
