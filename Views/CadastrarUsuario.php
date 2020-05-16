	<?php 
		include_once ("../Controllers/conexao.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Cadastro.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="
	anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
</head> 
<body style="background-color: #FFF5EE;">


	<div class="esquerda">
		<?php
			$id = $_GET['id'];  
		?>
		<img src ="../foto/<?php echo $id; ?>" class="img"  />


	
	
    	<fieldset class="field">
			<form action="../Controllers/controle_usuario.php?acao=inserir" method="POST">
				<input  type="hidden" id="imagem" name="imagem" autofocus="" display= "inline"  value="<?php echo $id; ?>">
			<h2 class="h2">Cadastre-se</h2>
				
			<div> 
				<label class="label">NOME</label>
				<input type="text" name="nome" id="nome" autofocus="" class="form-control" style="width: 580px; margin-top: -10px" > 
				<br>
			</div>
			
			<div>
				<label class="label">EMAIL</label>
				<input type="text" name="email" id="email" placeholder="exemplo@gmail.com" class="form-control" style="width: 580px; margin-top: -10px" >
				<br>
			</div>
			<div class="left">
				<label class="label">NACIONALIDADE</label>
				<select class="form-control" name="nacionalidade" style="text-align: center; width: 280px; margin-top: -10px; background-color: #FFF5EE;"  id="nacionalidade"> 
					<option value="1">Americano</option>
					<option value="2">Brasileiro</option>
				
				</select>
				<br>
			</div>
			
			<div class="right" >
				
				<label class="label">CIDADE</label>
				<input type="text" name="cidade" id="cidade" placeholder="Cidade" style="width: 280px; margin-top: -10px; margin-right: 30px;" class="form-control" >
				<br>
				
			</div>

			<div class="left">
				
				
				<label class="label">ESTADO</label>
				<input type="text" name="uf" id="uf" placeholder="Estado" style="width: 280px; margin-top: -10px" class="form-control" >
			</div>
			
		
			<div  class="right"> 

				<label class="label">SENHA</label>
				<input type="password" name="senha" id="senha" placeholder="minimo 8 caractries" class="form-control" style="width: 280px; margin-top: -10px; margin-right: 30px;"  >
				<br>
			</div>
			<div>
				<br><br>
				<button type="submit" class="btn" style="background-color:#000 ;
					color: white;
					text-decoration: none;
					 border-radius: 2px;
					 border-width: 0.3px;
					 border: none;
					 width: 200px;
					 height:  35px;
	 				margin-left: 30%;
 					"	 >Salvar</button>
				<br>
			</div>
				</form>
			</div>
			
		</fieldset>
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
