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
			

		
			if ($tipo==1) {

				$nacionalidade = "Americano";
				$sql="INSERT INTO Usuario (nome, email, senha, uf, cidade, nacionalidade, NomeIMG) VALUES ('$nome', '$email', '$senha','$uf', '$cidade', '$nacionalidade', '$foto');";
				$lala= mysqli_query($conexao, $sql);
				
				header("Location:../Views/homeA.php");
				
			}

			if ($tipo==2) {

				$nacionalidade = "Brasileiro";
					$sql="INSERT INTO Usuario (nome, email, senha, uf, cidade, nacionalidade, NomeIMG) VALUES ('$nome', '$email', '$senha','$uf', '$cidade', '$nacionalidade', '$foto');";
				$lala= mysqli_query($conexao, $sql);
				

				header("Location:../Views/homeB.php");

			}
		}
	}
			?>