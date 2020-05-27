<?php 
	session_start();
	$id = $_SESSION['idUsuario'];
	$idR = $_POST['convite'];
	


	
	include_once("../Controllers/conexao.php");
	@$status = $_GET['status'];

	if ($status == '1') {
		$stts = "Aceito";

	}elseif ($status == '0') {
		$stts = "Recusado";
	}

	mysqli_query($conexao, "UPDATE Solicitacoes_de_Amizade SET status = '$stts' WHERE idDestinatario = '$id'");

	mysqli_query($conexao, "DELETE FROM Solicitacoes_de_Amizade WHERE idDestinatario = '$id' and idRemetente = '$idR' and status = 'Pendente'");
?>