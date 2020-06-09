<?php 
	session_start();
	$id = $_SESSION['idUsuario'];
	$idR= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

	$status = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_NUMBER_INT);

	


	
	include_once("../Controllers/conexao.php");
	@$status = $_GET['status'];

	if ($status == '1') {
		$stts = "Aceito";

	}elseif ($status == '0') {
		$stts = "Recusado";
	}

	mysqli_query($conexao, "UPDATE Solicitacoes_de_Amizade SET status = '$stts' WHERE idDestinatario = '$id' and idRemetente = '$idR' or  idDestinatario = '$idR' and idRemetente ='$id'");

	mysqli_query($conexao, "DELETE FROM Solicitacoes_de_Amizade WHERE idDestinatario = '$id' and idRemetente = '$idR' and status = 'Pendente'");

if ($status == '0') {
		$_SESSION['msg'] = "<p style='color:red;'>Solicitação Recusada!!</p>";
		header("Location: ../views/amigos.php");}

		header("Location: ../views/amigos.php");
?>