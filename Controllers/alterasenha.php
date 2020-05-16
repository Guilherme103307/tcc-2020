<?php 

	include("../Controllers/conexao.php");

	if(isset($_POST['ok'])){

		$email = $_POST['email'];



		

		if(!filter_var($email, FILTER_VALIDATE_EMAIL )){
			$erro[] = "Email inválido!!";
		}

	
		
			
			$novasenha = substr(md5(time()), 0, 6);
			$nscriptografada = md5(md5($novasenha));
		

			if(mail($email, "Alteração de Senha - HEAVEN", "Sua nova senha:" .$novasenha)){
				$sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE  email = '$email' ";
				$sql_code = mysqli_query($conexao, $sql_code);
				 header("location:  ../Views/login.php");

			



		}
	}
 ?>

