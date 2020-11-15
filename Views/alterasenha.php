<?php 
	include("../Controllers/conexao.php");
		session_start();
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>HEAVEN - Alterar Senha</title>
		<link rel="sortcut icon" href="../imagens/favicon.png" type="image/gif" />
		<meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" media="(max-width: 640px)" href="../css/alterasenhaCel.css">
	<link rel="stylesheet" media="(min-width: 640px)" href="../css/alterasenha.css">
	</head>
	<body>
		 <div class="login-page container-fluid">

	 	<div class="flex-box">
		<form action="../Controllers/alterasenha.php" method="POST">

		<center>
	 <img src="../imagens/Logo.png" style="width: 8rem; margin-top: 10%">

        	<h2 style="margin-top: 1%; "   >Alterar Senha</h2>
       			<label for="exampleInputEmail1" >Uma nova senha será enviada para o seu Email</label>
	

    <div class="form-group  col-md-6 col-12 col-lg-6">
    
      <input type="text" name="email"  id="email" class="form-control" placeholder="Seu email cadastrado" >

    </div>
		<br><br>
		 	<input type="submit" name="ok" value="ok" class="btnEnviar">
		</form>

</div>
</div>
</center>
<script src="../js/bootstrap.min.js"></script>
	</body>
</html>
 
