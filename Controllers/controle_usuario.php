<?php 

	include_once("conexao.php");

	if(isset($_GET['acao'])){

		if($_GET['acao'] == 'inserir'){

			$foto=$_POST['imagem'];
			$nome=$_POST['nome'];
			$email=$_POST['email'];
			$uf=$_POST['uf'];
			$cidade=$_POST['cidade'];
			$senha=$_POST['senha'];
			$tipo=$_POST['nacionalidade'];
			$descricao=$_POST['descricao'];
			

		
			if ($tipo==1) {

				$nacionalidade = "Americano";
				$sql="INSERT INTO Usuario (nome, email, senha, uf, cidade, nacionalidade, NomeIMG, descricao) VALUES ('$nome', '$email', '$senha','$uf', '$cidade', '$nacionalidade', '$foto', '$descricao');";
				
				$lala= mysqli_query($conexao, $sql);
				
				
				$query = "SELECT * FROM Usuario WHERE email='$email' and senha='$senha';";
				$verifica = mysqli_query($conexao,$query);
				$row = mysqli_fetch_assoc($verifica);
				$tipo = $row['nacionalidade'];

				session_start();

				$_SESSION['id']= $tipo;

					
					$_SESSION['idUsuario'] = $row['idUsuario'];
					$_SESSION['nome'] = $nome;
					$_SESSION['email'] = $email;
					$_SESSION['nacionalidade'] = $nacionalidade;
					$_SESSION['uf'] = $uf;
					$_SESSION['cidade'] = $cidade;
					$_SESSION['senha'] = $senha;
					$_SESSION['NomeIMG'] = $foto;
					$_SESSION['descricao'] = $descricao;

			
						header("Location:../Views/homeB.php");
			}

			if ($tipo==2) {

				$nacionalidade = "Brasileiro";
					$sql="INSERT INTO Usuario (nome, email, senha, uf, cidade, nacionalidade, NomeIMG, descricao) VALUES ('$nome', '$email', '$senha','$uf', '$cidade', '$nacionalidade', '$foto', '$descricao');";
				$lala= mysqli_query($conexao, $sql);
				
				$query = "SELECT * FROM Usuario WHERE email='$email' and senha='$senha';";
				$verifica = mysqli_query($conexao,$query);
				$row = mysqli_fetch_assoc($verifica);
				$tipo = $row['nacionalidade'];

				session_start();

				$_SESSION['id']= $tipo;

				
					$_SESSION['idUsuario'] = $row['idUsuario'];
					$_SESSION['nome'] = $nome;
					$_SESSION['email'] = $email;
					$_SESSION['nacionalidade'] = $nacionalidade;
					$_SESSION['uf'] = $uf;
					$_SESSION['cidade'] = $cidade;
					$_SESSION['senha'] = $senha;
					$_SESSION['NomeIMG'] = $foto;
					$_SESSION['descricao'] = $descricao;
					
			
				header("Location:../Views/homeB.php");

			}
		}
	}
			?>
