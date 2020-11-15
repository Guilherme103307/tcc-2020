<?php
	session_start();
?><!DOCTYPE html>
<html>
<head>
	<title>HEAVEN - Login</title>
	<link rel="sortcut icon" href="../imagens/favicon.png" type="image/gif" />
	<meta  charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet"  href="../css/login.css">
</head>
<body>
	<?php echo $_SESSION['msg'];?>
	 <div class="login-page container-fluid">

	 	<div class="flex-box">
		<form  method="POST" action="../Controllers/valida.php?acao=logar">
	 <img class="img" src="../imagens/Logo.png"style="width: 8rem; margin-top: 7vw;;" >
			

        	<h2 style="margin-top: 10px; "   >Login</h2>
        	<div style="bottom: 2%;text-shadow: 2px -2px 10px black; font-size:20px;color: white"><?php
      if(isset($_SESSION['msg'])){?>
    
        <?php

        echo $_SESSION['msg'];
        unset($_SESSION['msg']);

      }?>
      </div>
    	 <label for="inputEmail4 ">Email:</label>
         <div class="form-group col-md-6 col-12 col-lg-6">
     
      <input type="text" class="form-control" name="email"  id="email" placeholder="exemplo@gmail.com" >
    </div>
      <label for="inputPassword4">Senha:</label>

    <div class="form-group  col-md-6 col-12 col-lg-6">
    
      <input type="password" name="senha" id="senha" class="form-control" placeholder="Sua senha" >

    </div>

        	<div>
	 		 
	 		 	  <center><a href="../Views/alterasenha.php" >Esqueceu sua Senha? </a></center>
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
</center>

  </body>
</html>

