<?php 

  if (!isset($_SESSION)) session_start();

  if(!isset ($_SESSION['email']) == true){

    header("location: login.php");

  } 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HEAVEN</title>
    <link rel="sortcut icon" href="../imagens/favicon.png" type="image/gif" />
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
     <link rel="stylesheet" type="text/css" href="../css/conta.css">

</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <img src="../imagens/Logo.png" style="width: 100px; float: left;" >
                <a href="#" class="navbar-brand">HEAVEN</a>
            </div>
            <div id="navbarCollapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="conta.php"  class="active">Conta</a></li>
                    <li><a href="amigos.php">Adicionar Amigos</a></li>
                    <li><a href="Conversas.php">Conversas</a></li>
                    <li><a href="login.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

  <form action="../Controllers/editUsuario.php" method="POST" name="form1" enctype="multipart/form-data" >

  <input  type="hidden" id="idUsuario" name="idUsuario" autofocus="" display= "inline"  value="<?php echo $_SESSION['idUsuario']  ?>">
  <div class="form-row container">

    <center>

     			<img class="img" src="../foto/<?php  echo $_SESSION['NomeIMG']?>"></img>
			   	<input type="file" name="arquivo" id="imagem" onchange="previsualizar()"class="upload">
				<label for="imagem" class="editar">[Editar Foto]</label>
    </center>
    <div class="form-group col-md-6 col-12 col-lg-6" >
      <label for="inputAddress">Nome:</label>
      <input type="text" class="form-control x" id="nome"  name="nome" value="<?php echo $_SESSION['nome'] ?>">
    </div>

    <div class="form-group col-md-6 col-12 col-lg-6">
      <label for="inputEmail4">Email:</label>
      <input type="text" class="form-control" name="email"  value="<?php echo $_SESSION['email'] ?>" id="email" >
    </div>

    <div class="form-group  col-md-6 col-12 col-lg-6">
      <label for="inputPassword4">Senha:</label>
      <input type="password" name="senha" value="<?php echo $_SESSION['senha'] ?>" id="senha" class="form-control" >
    </div>

    <div class="form-group  col-md-6 col-12 col-lg-6">
      <label for="inputPassword4">Cidade:</label>
      <input type="text" name="cidade" value="<?php echo $_SESSION['cidade'] ?>" id="cidade" class="form-control" >
    </div>

 <div class="form-group  col-md-6 col-12 col-lg-6">
      <label for="inputPassword4">UF:</label>
      <input type="text" name="uf" value="<?php echo $_SESSION['uf'] ?>" id="uf" class="form-control" >
    </div>

    <div class="form-group col-md-6 col-12 col-lg-6">
      
      <label for="inputPassword4">Nacionalidade:</label>
      <input type="text" name="nacionalidade"  value="<?php echo $_SESSION['nacionalidade'] ?>" id="cidade" class="form-control" >
    </div> 
    <center>
      <div class="form-group  col-md-12 col-12 col-lg-12">
    <label for="exampleFormControlTextarea1">Descrição</label>
    <textarea class="form-control col-md-12" id="exampleFormControlTextarea1" name="descricao"rows="1"><?php echo $_SESSION['descricao'] ?></textarea>
     <br><br>
  </div>
    <div class="col-12 col-md-12" style="display: flex; justify-content: center;">
        
            <button  name="editar" value="<?php echo $_SESSION['idUsuario'] ?>" style=" width: 200px;
        height: 35px;
          background-color: #FA8072; 
        border: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        color: inherit;
         margin-right: 10px;
      ">Editar Conta</button>       
      
         <?php
            echo "<a href='proc_apagar_usuario.php?id=" . $_SESSION['idUsuario'] ." class='btn2' style='background-color: #FA8072; border: none;width: 200px;height: 35px; padding-top: 0.6rem;'data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a>";
            ?>
    
</div>    

  </div>

       </form>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
</center>

  
        <br><br>        

         <div><?php
      if(isset($_SESSION['msg'])){?>
        <?php

        echo $_SESSION['msg'];
        unset($_SESSION['msg']);

      }?>
  </p>
</div>
  
       
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="../js/personalizado.js"></script>   


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>