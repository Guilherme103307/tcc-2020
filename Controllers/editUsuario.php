<?php 
session_start();include_once ("../Controllers/conexao.php");

$id = $_SESSION['idUsuario'];
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$uf = filter_input(INPUT_POST, 'uf');
$cidade = filter_input(INPUT_POST, 'cidade');
$nacionalidade = filter_input(INPUT_POST, 'nacionalidade');
$senha = filter_input(INPUT_POST, 'senha');
$descricao = filter_input(INPUT_POST, 'descricao');

	
$sql="update usuario ";
$sql.= "set nome= '".$nome."



', email= '$email', uf='$uf', senha='$senha', cidade='$cidade', nacionalidade='$nacionalidade', descricao='$descricao'";
$sql.="where idUsuario='$id';";
		mysqli_query($conexao, $sql);

	

					$_SESSION['idUsuario'] =$id;
					$_SESSION['nome'] = $nome;
					$_SESSION['email'] = $email;
					$_SESSION['nacionalidade'] = $nacionalidade;
					$_SESSION['uf'] = $uf;
					$_SESSION['cidade'] = $cidade;
					$_SESSION['senha'] = $senha;
					$_SESSION['descricao'] = $descricao;
header("Location: ../Views/conta.php");
			?>
