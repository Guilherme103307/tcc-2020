<?php 

	include_once("conexao.php");

	if(isset($_GET['acao'])){

		if($_GET['acao'] == 'inserir'){

			$foto=$_POST['file'];
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
					
						
require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail = new PHPMailer(true);
 
try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'heaven.intercambio@gmail.com';
	$mail->Password = 'ifmg@123';
	$mail->Port = 587;
 
	$mail->setFrom('guilhermeolimpio841@gmail.com');
	$mail->addAddress('guilhermeolimpio841@gmail.com');
	
	$mail->isHTML(true);
	$mail->Subject = 'Seja Bem Vindo ao HEAVEN';
	$mail->Body = 'Ficamos felizes com seu Cadastro!!!<strong>teste</strong>';
	$mail->AltBody = 'Ficamos felizes com seu Cadastro!!!';
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

	
					//header("Location:../Views/conta.php");
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
					
			


require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail = new PHPMailer(true);
 
try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'heaven.intercambio@gmail.com';
	$mail->Password = 'ifmg@123';
	$mail->Port = 587;
 
	$mail->setFrom('guilhermeolimpio841@gmail.com');
	$mail->addAddress('guilhermeolimpio841@gmail.com');
	
	$mail->isHTML(true);
	$mail->Subject = 'Seja Bem Vindo ao HEAVEN';
	$mail->Body = 'Ficamos felizes com seu Cadastro!!!<strong>teste</strong>';
	$mail->AltBody = 'Ficamos felizes com seu Cadastro!!!';
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

		

					//header("Location:../Views/conta.php");

			}
		}
	}
			?>

