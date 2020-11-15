<?php 
	session_start();
	$id = $_SESSION['idUsuario'];
	$idR= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


	echo $id;
	echo $idR;	
	include_once("../Controllers/conexao.php");

	mysqli_query($conexao, "DELETE FROM Solicitacoes_de_Amizade WHERE idDestinatario = '$id' and idRemetente = '$idR' or  idDestinatario = '$idR' and idRemetente ='$id'");

		header("Location: ../Views/amigos.php");
?>