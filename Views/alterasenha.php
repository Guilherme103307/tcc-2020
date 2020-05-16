<?php 
	include("../Controllers/conexao.php");
		session_start();
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>ALTERAR SENHA</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/alterasenha.css">
	</head>
	<body>
		<form action="../Controllers/alterasenha.php" method="POST">
 <div class="login-page">
	 	<div class="flex-box">
		
	 <img src="../Imagens/logo.png" style="width: 8rem; margin-top: 10%">

        	<h2 style="margin-top: 1%; "   >Alterar Senha</h2>
       
			<div >
	 		 	<br>
			<label for="exampleInputEmail1" >Uma nova senha será enviada para o seu Email</label>
			<br>
	  		 <input type="email"  name="email" placeholder="exemplo@gmail.com" style="width: 420px;" id="email">
		 	</div>
		<br><br>
			<input type="submit" name="ok" value="ok" class="btnEnviar">
		</form>

</div>
</div>

	</body>
</html>
 