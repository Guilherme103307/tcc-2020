<!DOCTYPE html>
<html>
<head>
	<title>Carregar Imagem</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Css/cadastrarUsuario.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>

		<nav class="nav">
			<img src="../Imagens/2.png" >
		</nav> 

	<fieldset>

			<h2>Ola! Escolha a Imagem de Capa do Seu Produto!</h2>
			<br><br>
			
	<img src="../Imagens/camera.png" style="  margin-left: 39rem; 	max-width:200px;
    						max-height:150px;
    						width: auto;
    						height: auto; border-radius: 200px; border: hidden; ">
<br><br>
	<form method="POST" action="../Controllers/upload.php" enctype="multipart/form-data">

		 <input  class="btn1" style="margin-left: 35rem;  border-radius: 40px;  margin-top: 20px;" name="arquivo" type="file">
	<br><br>
	<input class="btnSalva" type="submit" value="Cadastrar" style=" margin-left: 40rem; ">
	<br><br>
</form>

</fieldset>
</body>
</html>