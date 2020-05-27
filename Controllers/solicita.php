<?php
	session_start();
	include_once("../Controllers/conexao.php");
	$id_convidado = $_GET['cod'];
	$id_convite = $_SESSION['idUsuario'];
	$status = "Pendente";

	$sql="INSERT INTO Solicitacoes_de_Amizade (idRemetente, idDestinatario, status) VALUES ('$id_convite' , '$id_convidado', '$status');";
	echo $sql;
	mysqli_query($conexao, $sql);
?>