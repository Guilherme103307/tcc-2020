<?php
	session_start();
?><!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta  charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<?php echo $_SESSION['msg'];?>
	 <div class="login-page">
	 	<div class="flex-box">
		<form  method="POST" action="../Controllers/valida.php?acao=logar">
	 <img src="../Imagens/logo.png" style="width: 8rem; margin-top: 25%">
			
        	<h2 style="margin-top: 10px; "   >Login</h2>
        	<div style="bottom: 2%;text-shadow: 2px -2px 10px black; font-size:20px;color: white"><?php
      if(isset($_SESSION['msg'])){?>
    
        <?php

        echo $_SESSION['msg'];
        unset($_SESSION['msg']);

      }?>
      </div>

        	<div >
	 		 	<br>
	  		 	<label  for="exampleInputEmail1" style="margin-left: -24rem">Email </label>
	  		  	<input type="email"  name="email"class="form-control" placeholder="exemplo@gmail.com" style="width: 420px;" id="email">
	 		 </div>

       		<div>
	 		 	<br>
	  		 	<label for="exampleInputEmail1" style="margin-left: -24rem">Senha</label>
	  		  	<input type="text" name="senha" class="form-control" placeholder="Senha" style="width: 420px;" id="senha">
	  		  <a href="../Views/alterasenha.php" style="margin-left: 5%;">Esqueceu sua Senha? </a>
	 		 </div>

        	<div>
	 		 	<br><br>
	 		 	 <button type="submit" class="btnEnviar">Entrar</button>
	 		 </div>

      	</form>
	
      	<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
	 	</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
		<br>
		</div>
		<br>
		 <label class="flex-box">Não Possui uma Conta? <a href="../Views/CadastrarUsuario.php"> Cadastre-se</a></label>


    </div>

  </body>
</html>

