<?php
	
	#vinculando o documento de conexão
	include_once('conexao.php');

	#cria a variavel id que vai receber o valor que vem do "cod" código
	#GET pega a variavel codigo
	$id = $_GET ['cod'];

	#variavel para excluir o registro usando uma query DELETE...
	#$ligar chama a conexão do banco
	$sql_excluir = mysqli_query($ligar, "DELETE FROM fornecedores WHERE codFornec='$id' ");

	#aviso de confirmação do processo ou falha
	if($sql_excluir == true){

		echo "<script>

		alert('Fornecedor excluido com sucesso ');
		window.location.href = 'ListarFornecedores.php';

		</script>";

	} 

	else {

		echo "<script>

		alert('Falha ao excluir fornecedor');
		window.location.href = 'ListarFornecedores.php';

		</script>";

	}


?>