<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	</body>
		<?php
			include_once("conexao.php");
			$arquivo 	= $_FILES['arquivo']['name'];
			
			$_UP['pasta'] = '../foto/';
			
			$_UP['tamanho'] = 1024*1024*100; //5mb
	
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
		
			$_UP['renomeia'] = false;
			
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
	
			if($_FILES['arquivo']['error'] != 0){
				$foto='sem_perfil.png';
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
				
			
			else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../views/CadastrarUsuario.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			
			else{
			
				if($_UP['renomeia'] == true){
				
					$nome_final = time().'.jpg';
				}else{
					
					$nome_final = $_FILES['arquivo']['name'];
				}
				
				if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
					
					$foto=$nome_final;
					
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

				}else{
				
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Views/CadastrarUsuario.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem não foi cadastrada com Sucesso.\");
						</script>
					";
				}
			}
			
			
		?>
		
	</body>
</html>
