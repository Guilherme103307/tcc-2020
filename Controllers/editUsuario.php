<?php 
session_start();include_once ("../Controllers/conexao.php");

$id = filter_input(INPUT_POST, 'idUsuario');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$uf = filter_input(INPUT_POST, 'uf');
$cidade = filter_input(INPUT_POST, 'cidade');
$nacionalidade = filter_input(INPUT_POST, 'nacionalidade');
$senha = filter_input(INPUT_POST, 'senha');


			
$sql="update usuario ";
$sql.= "set nome= '".$nome."



', email= '$email', uf='$uf', senha='$senha', cidade='$cidade', nacionalidade='$nacionalidade'";
$sql.="where idUsuario='$id';";
		mysqli_query($conexao, $sql);

			echo $sql;
header("Location: ../Views/conta.php");
			?>
