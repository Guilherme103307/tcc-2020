<?php 
include_once("../Controllers/conexao.php");

	$idMensagem= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

	$idC= filter_input(INPUT_GET, 'idC', FILTER_SANITIZE_NUMBER_INT);

	$sql = "DELETE FROM mensagens where idMensagens = '$idMensagem';";
;
	$resultado = mysqli_query($conexao,$sql); 
			
header("Location: ../Views/Conversas1.php?id=$idC");

		?>