<?php 
	session_start();
    echo "oiiiiiii";
	include_once('conexao.php');
	date_default_timezone_set('America/Sao_Paulo');

	$idRemetente=   $_SESSION['idUsuario'];
	$idDestinatario=$_POST['idConversa'];
	$texto=$_POST['mensagem'];
	$data = date('d/m/y');
	$hora = date('H:i:s');

	$sql="INSERT INTO Mensagens (idRemetente, idDestinatario, texto, data, horario) VALUES ('$idRemetente', '$idDestinatario', '$texto','$data', '$hora');";
				
	$lala= mysqli_query($conexao, $sql);

	header("Location:../Views/conversas1.php?id=$idDestinatario");
				
