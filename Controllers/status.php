<?php 
	session_start();
	$id = $_SESSION['idUsuario'];
	$idR= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$status = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_NUMBER_INT);

	

	
	include_once("../Controllers/conexao.php");

	if ($status == '1') {
		$stts = "Aceito";
			$sql = mysqli_query($conexao, "UPDATE Solicitacoes_de_Amizade SET status = '$stts' WHERE idDestinatario = '$id' and idRemetente = '$idR' or  idDestinatario = '$idR' and idRemetente ='$id'");
			mysqli_query($conexao, "DELETE FROM Solicitacoes_de_Amizade WHERE idDestinatario = '$id' and idRemetente = '$idR' and status = 'Pendente'");

	;

	}elseif ($status == '0') {
		$stts = "Recusado";
		
		$sql = "DELETE FROM Solicitacoes_de_Amizade WHERE idDestinatario = '$id' and idRemetente = '$idR' or  idDestinatario = '$idR' and idRemetente ='$id' ";
		$lala= mysqli_query($conexao, $sql);

	}

if ($status == '0') {
		$_SESSION['msg'] = "<p style='color:red;'>Solicitação Recusada!!</p>";
		header("Location: ../Views/amigos.php");}

		header("Location: ../Views/amigos.php");
?>
