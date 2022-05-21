<?php
	#conecta ao banco de dados
	require_once('conexao.php');

	#pega os dados usuario e senha que foram digitados nos campos
	$usuario = $_POST['txt_usuario'];
	$senha = $_POST['txt_senha'];

	#consulta no banco de dados para comparar e ver se o usuario é registrado
	$sql_logar = mysqli_query($ligar, "SELECT *FROM usuario WHERE usuario = '$usuario' and senha = '$senha'");

	#se a consulta acima reconhecer os dados recebidos pelo usuario o acesso é permitido
	#então encaminha o usuario para a tela principal
	#senão o usuario recebe um aviso que não está registrado e mantem na mesma tela
	if(mysqli_num_rows($sql_logar)!=0){

		header('location:principal.php');

	}
	else {

		echo "<script>

		alert('Usuário não registrado ');
		window.location.href = 'index.html';

		</script>";
	}

?>