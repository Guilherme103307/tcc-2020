<?php
	session_start();
	include_once("../Controllers/conexao.php");
	$id_convidado = $_GET['cod'];
	$id_convite = $_SESSION['idUsuario'];
	$status = "Pendente";

	$sql="INSERT INTO Solicitacoes_de_Amizade (idRemetente, idDestinatario, status) VALUES ('$id_convite' , '$id_convidado', '$status');";
	

	mysqli_query($conexao, $sql);
	$_SESSION['msg'] = "<p style='color:green;'>Solicitação Enviada!</p>";
		header("Location: ../views/amigos.php#Adicionar");
?>
