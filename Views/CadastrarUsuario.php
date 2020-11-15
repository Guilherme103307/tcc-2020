<?php 
		include_once ("../Controllers/conexao.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HEAVEN - Cadastro</title>
	
	<link rel="sortcut icon" href="../imagens/favicon.png" type="image/gif" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="
	anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" media="(max-width: 640px)" href="../css/CadastroCel.css">
	<link rel="stylesheet" media="(min-width: 640px)" href="../css/Cadastro.css">
</head>
<body style="background-color: #FFF5EE;overflow-x: none ">


	<div class="esquerda">
			<form action="../Controllers/upload.php" method="POST" name="form1" enctype="multipart/form-data">
				<img src="../foto/sem_perfil.png" class="img"></img>
			   	<input type="file" name="arquivo" id="imagem" onchange="previsualizar()"class="upload"><br>
				<label for="imagem" class="editar">[Editar Foto]</label><br><br>
			  <center>  
<fieldset class="field" >
	
			<h2 class="h2">Cadastro</h2>

    <div class="form-group col-md-10 col-12 col-lg-10" >
      <label for="inputAddress">Nome:</label>
      <input type="text" class="form-control x" id="nome" name="nome" required="" placeholder="Nome Completo" required>
    </div>

    <div class="form-group col-md-10 col-12 col-lg-10">
      <label for="inputEmail4">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="exemplo@gmail.com"  required style="background-color: #FFF5EE;">
    </div>
	<div   class="form-group  col-md-10 col-12 col-lg-10 form-display">
		<div class="form-group  col-md-6 col-12 col-lg-6 form-right">
	      <label for="inputPassword4">Senha:</label>
	      <input type="password" name="senha" id="senha" class="form-control" placeholder="Minimo de 6 caracters"   minlength="6" required>
	    </div>
	   
	    <div class="form-group  col-md-6 col-12 col-lg-6 form-right">
	      <label for="inputPassword4">Cidade:</label>
	      <input type="text" name="cidade"  id="cidade" class="form-control" placeholder="Sua Cidade" required>
	    </div>
	</div>

	<div   class="form-group  col-md-10 col-12 col-lg-10 form-display">
 <div class="form-group  col-md-6 col-12 col-lg-6 form-right">
      <label for="inputPassword4">UF:</label>
      <input type="text" name="uf"id="uf" class="form-control" placeholder="Seu Estado" required>
    </div>    

    <div class="form-group  col-md-6 col-12 col-lg-6 form-right"  >
      
      <label for="inputPassword4">Nacionalidade:</label>
     
				<select class="form-control" name="nacionalidade" style=" background-color: #FFF5EE;"  id="nacionalidade"> 
					<option value="1">Americano</option>
					<option value="2">Brasileiro</option>
				
				</select>
    </div> 
</div>
    <center>
      <div class="form-group  col-md-10 col-12 col-lg-10 form-right">
    <label for="exampleFormControlTextarea1">Descrição</label>
    <textarea class="form-control col-md-12" id="exampleFormControlTextarea1" name="descricao"rows="1" style="background-color: transparent;" placeholder="Uma breve Descrição sobre você, sua profissão, seus gostos e hobbies." required></textarea>
     <br><br>
  </div>
				
				<button  type="submit" class="btn" style="background-color:#000 ;
					color: white;
					text-decoration: none;
					 border-radius: 2px;
					 border-width: 0.3px;
					 border: none;
					 width: 200px;
					 height:  35px;
					 margin-left: -3%;
	 			
 					"	 >Salvar</button>
				<br>
			</div>
				</form>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script>
			function previsualizar(){
				var imagem = document.form1.querySelector('input[name=arquivo]').files[0];
				var preview = document.form1.querySelector('img');
				
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(imagem){
					reader.readAsDataURL(imagem);
				}else{
					preview.src = "";
				}
			}
		</script>
       
			</div>
			</center>
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
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
			</div>
		</div>
		
	</div>
	
</center>    


</body>
</html>

