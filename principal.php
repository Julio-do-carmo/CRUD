<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE = edge">
	<meta name = "viewport" content="width = device-width, initial-scale = 1.0">
	<title> Home </title>
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
	<h1> Gerenciamento de fornecedores </h1>

	<!--Opções da tela principal-->
		<form method="get" action="cadastroFornec.html">
			<button type="submit">Cadastrar Fornecedores</button>
		</form>
		<br>

		<form method="get" action="ListarFornecedores.php">
			<button type="submit">Listar Fornecedores</button>
		</form>
		<br>
		
		<form method="get" action="index.html">
			<button type="submit">Sair</button>
		</form>

	</div>
	</center>
</body>
</html>