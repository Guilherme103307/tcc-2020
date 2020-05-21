<?php 
include_once("../Controllers/conexao.php");

	$idUsuario= $_POST['delete'];

	$sql = "DELETE FROM usuario where idUsuario = '$idUsuario';";

		
	$resultado = mysqli_query($conexao,$sql); 
			
	header("Location: ../Views/Login.php");

		?>