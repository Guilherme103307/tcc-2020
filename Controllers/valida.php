<?php 
include_once('conexao.php');


	if(isset($_GET['acao'])){
		if ($_GET['acao']=='logar') {

			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$query = "SELECT * FROM Usuario WHERE email='$email' and senha='$senha' LIMIT 1";
			$verifica = mysqli_query($conexao,$query);
			$row = mysqli_fetch_assoc($verifica);
			$tipo = $row['nacionalidade'];

			

				if ($tipo == "Americano") {
					if(isset($row)){
					session_start();

					$_SESSION['id']= $tipo;

					
						$_SESSION['idUsuario'] = $row['idUsuario'];
						$_SESSION['nome'] = $row['nome'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['nacionalidade'] = $row['nacionalidade'];
						$_SESSION['uf'] = $row['uf'];
						$_SESSION['cidade'] = $row['cidade'];
						$_SESSION['senha'] = $row['senha'];
						$_SESSION['NomeIMG'] = $row['NomeImg'];

						header("Location: ../Views/HomeA.php");
					}
				
				} else if ($tipo== "Brasileiro") {
					if(isset($row)){
					session_start();
				
					$_SESSION['idUsuario'] = $row['idUsuario'];
					$_SESSION['nome'] = $row['nome'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['nacionalidade'] = $row['nacionalidade'];
					$_SESSION['uf'] = $row['uf'];
					$_SESSION['cidade'] = $row['cidade'];
					$_SESSION['senha'] = $row['senha'];
					$_SESSION['NomeIMG'] = $row['NomeImg'];


					header("Location: ../Views/HomeB.php");
				}}
			

			 	else if (!isset($row)){
			 		session_start();
				 	$_SESSION['msg'] = "<p style='color:red;'>Usuário ou Senha Incorretos!!</p>";
					header("Location: ../Views/Login.php");
				}
				
			
		
		}
	}




?>
