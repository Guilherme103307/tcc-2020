<?php 
include_once('conexao.php');


	if(isset($_GET['acao'])){
		if ($_GET['acao']=='logar') {

			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$query = "SELECT * FROM Usuario WHERE email='$email' and senha='$senha';";
			$verifica = mysqli_query($conexao,$query);
			$row = mysqli_fetch_assoc($verifica);
			$tipo = $row['nacionalidade'];

			echo $tipo;

			if ($tipo == "Americano") {

				session_start();

				$_SESSION['id']= $tipo;

				
					$_SESSION['idusuario'] = $row['idusuario'];
					$_SESSION['nome'] = $row['nome'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['nacionalidade'] = $row['nacionalidade'];
					$_SESSION['uf'] = $row['uf'];
					$_SESSION['cidade'] = $row['cidade'];
					$_SESSION['senha'] = $row['senha'];

					header("Location: ../Views/HomeA.php");
				
				
			} else if ($tipo== "Brasileiro") {

					session_start();
				
					$_SESSION['idusuario'] = $row['idusuario'];
					$_SESSION['nome'] = $row['nome'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['nacionalidade'] = $row['nacionalidade'];
					$_SESSION['uf'] = $row['uf'];
					$_SESSION['cidade'] = $row['cidade'];
					$_SESSION['senha'] = $row['senha'];


					header("Location: ../Views/HomeB.php");
				}
			

			 else {
				header("Location: ../Views/Login.php?login=erro");
			}

		}

	}

	
 ?>