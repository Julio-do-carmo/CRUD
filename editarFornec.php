<?php

	#conexão do banco de dados
	include_once('conexao.php');

	#pega o código do registro a ser editado
	$id = $_GET['cod'];

	#consulta em função do código
	$sql_consulta = mysqli_query($ligar, "SELECT *FROM fornecedores WHERE codFornec = '$id'");

	#Retorno de dados do banco formam uma matriz e são alocados em uma determinada posição
	$dados = mysqli_fetch_array($sql_consulta);
	#quem determina a posição é $dados

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE = edge">
	<meta name = "viewport" content="width = device-width, initial-scale = 1.0">
	<title> Edição de dados </title>

	<style>
		
		body{
			font-family: Arial, Helvetica, sans-serif;
			background-image: url(img/info1.jpg);
			background-repeat: no-repeat;
		}

		div{
			background-color: rgba(0, 0, 0, 0.7);
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 50px;
			border-radius: 15px;
			color: white;
		}
		
		a{
			color: white;
		}

	</style>

</head>
<body>

	<center>
	<div>
	<h1> Fornecedores </h1>
	<!--ação é gerada no "atualizarFornec.php"-->
	<form method="POST" action="atualizarFornec.php">

		
		<input type="hidden" name="cod" value = '<?= $dados[0] ?>'>

		Nome <br>
		<input type="text" name="txt_nomeFornec" value = '<?= $dados[1] ?>'> <br>

		Cidade <br>
		<input type="text" name="txt_cidadeFornec" value = '<?= $dados[2] ?>'> <br>

		Tipo <br>
		<input type="text" name="txt_tipoFornec" value = '<?= $dados[3] ?>'> <br>
		<br>

		<input type="submit" value="Atualizar" value = '<?= $dados[4] ?>'> <br>
		<br>
		<a href="ListarFornecedores.php"> Voltar </a>

	</form>
	</div>
	</center>

</body>
</html>