<?php
	#conexão do banco de dados
	require_once('conexao.php');

	#recebe as informações das variaveis
	$nomeFornec = $_POST['txt_nomeFornec'];
	$cidadeFornec = $_POST['txt_cidadeFornec'];
	$tipoFornec = $_POST['txt_tipoFornec'];

	#em seguida faz o ISERT no banco de dados
	$sql_cadastroFornec = mysqli_query($ligar, " INSERT INTO fornecedores (nomeFornec, cidadeFornec, tipoFornec) 
		values ('$nomeFornec', '$cidadeFornec', '$tipoFornec')");

	#Alerta de sucesso ou falha na operação
	#caso o cadastro não falhar o usuario é redirecionado para a tela principal
	if($sql_cadastroFornec == true){

		echo "<script>

		alert('Fornecedor cadastrado com sucesso ');
		window.location.href = 'principal.php';

		</script>";

	} 

	else {

		echo "<script>

		alert('Falha no cadastro');
		window.location.href = 'cadastroFornecedores.html';

		</script>";

	}

?>