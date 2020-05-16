<?php 
		include_once ("../Controllers/conexao.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/CarregarIMG.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="
	anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
</head> 
<body style="background-color: #FFF5EE;">


	<div class="esquerda">
		<h2 class="h2">Escolha uma foto para o seu Perfil e depois clique em Próximo:</h2>
		<form method="POST" action="../Controllers/upload.php" enctype="multipart/form-data">
			<div class="img" >
				<label class="labeltext" for="upload-photo">B</label>
				<input type="file" name="arquivo" id="upload-photo" />
			</div>
			<br><br>
			<button type="submit" class="btn" style="background-color:#000 ;
					color: white;
					text-decoration: none;
					 border-radius: 2px;
					 border-width: 0.3px;
					 border: none;
					 width: 200px;
					 height:  35px;
	 				margin-left: 35%;
 					"	 >Próximo</button>
				<br>
			<br><br>
		</form>

    
	</div>


	<div class="direita">
		<div>
			<div class="h1">
				<img src="../imagens/Logo.png" style="width: 150px;" >
				<div  style="padding-top: 10px;">HEAVEN</div>
				<br><br>
			</div>
			<div>

				<h3 class="h3" style="font-size: 20px; text-align: center; margin-left: 15%; width: 80%;">Pratique seu segundo idioma com um estrangeiro, conheça mais sobre a cultura e os custumes e ainda faça novos amigos. </h3>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
		</div>
		
	</div>
</body>
</html>
