<?php
	#incluindo a conexão ao banco de dados
	#require_once ou include_once
	require_once('conexao.php');

	#variaveis que recebem os dados usuario, senha, email
	#$_POST pega os dados das variaveis indicadas em []
	$usuario = $_POST['txt_usuario'];
	$senha = $_POST['txt_senha'];
	$email = $_POST['txt_email'];

	#Inserindo os dados no banco de dados com a query INSERT...
	#$ligar chama a conexão do banco
	$sql_cadastro = mysqli_query($ligar, " INSERT INTO usuario (usuario, senha, email) values ('$usuario', '$senha', '$email')");

	#Notifica o usuario se a operação foi concluida com exito ou não
	#em seguida o usuario é redirecionado para uma nova tela ou para a mesma
	if($sql_cadastro == true){

		echo "<script>

		alert('Usuário cadastrado com sucesso ');
		window.location.href = 'index.html';

		</script>";

	} 

	else {

		echo "<script>

		alert('Falha no cadastro');
		window.location.href = 'cadastroUsuario.html';

		</script>";

	}

?>