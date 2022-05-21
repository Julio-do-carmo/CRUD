<?php

	require_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE = edge">
	<meta name = "viewport" content="width = device-width, initial-scale = 1.0">
	<title> Lista de usuários </title>
</head>
<body>

	<center> 
	<h1> Listas dos usuários </h1>
	<hr>

		<table rules="all">
			<thead>
				<tr>
				<th> Usuário </th>
				
				</tr>

			</thead>

			<tbody>
				
				<?php

					$sql_consulta = mysqli_query($ligar, "SELECT *FROM usuario");

					while($dados = mysqli_fetch_Array($sql_consulta)){
						?>
						<tr>
						<td> <?= $dados[1] ?> </td>
						<tr>

					}

				<?php } ?>

			</tbody>

		</table>


	</center>

</body>
</html>