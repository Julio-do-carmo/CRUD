<?php

	#conexão do banco
	require_once('conexao.php');

	#pega cada informações dentro das suas variaveis que estão em editarFornec.php
	$id = $_POST['cod'];
	$nomeFornec = $_POST['txt_nomeFornec'];
	$cidadeFornec = $_POST['txt_cidadeFornec'];
	$tipoFornec = $_POST['txt_tipoFornec'];

	#Faz a ligação com o banco e executa o UPDATE para atualizar as informações
	$sql_atualizarFornec = mysqli_query($ligar, "UPDATE fornecedores SET nomeFornec='$nomeFornec', cidadeFornec='$cidadeFornec', tipoFornec='$tipoFornec' WHERE codFornec = '$id'");

	#se a atualização for concluida com exito é gerado um alerta e o usuario é redirecionado para a lista
	#se ocorrer a falha o usuario recebe o alerta e volta para a mesma tela de atualização
	if($sql_atualizarFornec == true){

		echo "<script>

		alert('Fornecedor atualizado com sucesso ');
		window.location.href = 'ListarFornecedores.php';

		</script>";

	} 

	else {

		echo "<script>

		alert('Falha na atualizacao');
		window.location.href = 'atualizarFornec.php';

		</script>";

	}

?>