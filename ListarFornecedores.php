<?php
	#incluindo a conexão com o banco de dados
	require_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE = edge">
	<meta name = "viewport" content="width = device-width, initial-scale = 1.0">
	<title> Lista de fornecedores </title>

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
	<hr>
		<!--rules = "all" Cria as bordas da tabela-->
		<table rules = "all"> 
			<thead>
				<tr>

				<!--<th> Código </th>-->
				<th> Nome </th>
				<th> Cidade </th>
				<th> Tipo </th>
				<th colspan="2"> Opções </th>
				<!--colspan ajusta a posição na matriz-->
				
				</tr>

			</thead>

			<tbody>
				
				<!--novo código php para fazer uma consulta no banco de dados-->
				<?php
					#iniciando a consulta no banco de dados
					$sql_consulta = mysqli_query($ligar, "SELECT *FROM fornecedores");

					#estrutura de repetição
					#cria uma array(matriz) em função da consulta
					while($dados = mysqli_fetch_Array($sql_consulta)){
						?>
						<tr>
						<!--<td> recebe os dados da tabela-->
						<!--<td> <?= $dados[0] ?> </td>-->
						<td> <?= $dados[1] ?> </td>
						<td> <?= $dados[2] ?> </td>
						<td> <?= $dados[3] ?> </td>
						<!--$dados dentro de sintax php para serem reconhecidos-->

						<!--Botão link para editar ou excluir, pegando como referencia o "cod" código-->
						<td> <a href="editarFornec.php?cod=<?= $dados[0] ?>"> Editar </a> </td>
						<td> <a href="excluirFornec.php?cod=<?= $dados[0] ?>"> Excluir </a> </td>						
						</tr>
			    <?php } ?>

			</tbody>

		</table>
		<br>

		<a href="principal.php"> Voltar </a>

	</div>
	</center>

</body>
</html>