<!DOCTYPE html>
<html>
<head>
	<title>CADASTRO</title>
	<meta  charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Css/CadastrarUsuario.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	 <?php 
		include_once ("../Controllers/conexao.php");
	 ?>
		<nav class="nav">
			<img src="../Imagens/2.png">
		</nav> 




			<?php
				$id = $_GET['id'];  
			?>
			

			<img src ="../foto/<?php echo $id; ?>"  
			style="max-width:400px;
    			   max-height:400px;
    			   width: 400px;
    			   height: 400px;
    			   border-radius: 200px;
    			   border: hidden; 
    			   float: right;
    			   margin-right: 4550px;
    			   margin-top: 4rem;">  

    		 
			
			
		<fieldset class="field">
			<form action="../Controllers/controle_usuario.php?acao=inserir" method="POST">
				<input  type="hidden" id="imagem" name="imagem" autofocus="" display= "inline"  value="<?php echo $id; ?>">
			<h2 class="h2">REGISTRE-SE</h2>
				
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
				<select class="form-control" name="nacionalidade" style="text-align: center; width: 280px; margin-top: -10px"  id="nacionalidade"> 
					<option value="1">Americano</option>
					<option value="2">Brasileiro</option>
				
				</select>
				<br>
			</div>
			
			<div class="right" >
				
				<label class="label">CIDADE</label>
				<input type="text" name="cidade" id="cidade" placeholder="Cidade" style="width: 280px; margin-top: -10px" class="form-control" >
				<br>
				
			</div>

			<div class="left">
				
				
				<label class="label">ESTADO</label>
				<input type="text" name="uf" id="uf" placeholder="Estado" style="width: 280px; margin-top: -10px" class="form-control" >
			</div>
			
		
			<div  class="right"> 

				<label class="label">SENHA</label>
				<input type="password" name="senha" id="senha" placeholder="minimo 8 caractries" class="form-control" style="width: 280px; margin-top: -10px"  >
				<br>
			</div>
			<div>
				<br><br>
				<button type="submit" class="btnSalva" >Salvar</button>
				<br>
			</div>
				</form>
			</div>
			
		</fieldset>

	

</body>
</html>