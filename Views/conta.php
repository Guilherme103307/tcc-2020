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
    <link rel="sortcut icon" href="../imagens/favicon.png" type="image/gif" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HEAVEN - Perfil</title>

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
  

  <div class="form-row container">

    <center>      

         <div><?php
      if(isset($_SESSION['msg'])){?>
        <?php

        echo $_SESSION['msg'];
        unset($_SESSION['msg']);

      }?>

      <img src="../foto/<?php  echo $_SESSION['NomeIMG']?>" alt="image" class="img-circle col-12" style="width: 200px; height: 200px; ">
    </center>
    <div class="form-group col-md-6 col-12 col-lg-6" >
      <label for="inputAddress">Nome:</label>
      <input type="text" class="form-control x" id="nome"  readonly="" name="nome" value="<?php echo $_SESSION['nome'] ?>">
    </div>

    <div class="form-group col-md-6 col-12 col-lg-6">
      <label for="inputEmail4">Email:</label>
      <input type="text" class="form-control" name="email" readonly="" value="<?php echo $_SESSION['email'] ?>" id="email" >
    </div>

    <div class="form-group  col-md-6 col-12 col-lg-6">
      <label for="inputPassword4">Senha:</label>
      <input type="password" name="senha" readonly="" value="<?php echo $_SESSION['senha'] ?>" id="senha" class="form-control" >
    </div>

    <div class="form-group  col-md-6 col-12 col-lg-6">
      <label for="inputPassword4">Cidade:</label>
      <input type="text" name="senha" readonly="" value="<?php echo $_SESSION['cidade'] ?>" id="cidade" class="form-control" >
    </div>

 <div class="form-group  col-md-6 col-12 col-lg-6">
      <label for="inputPassword4">UF:</label>
      <input type="text" name="senha" readonly="" value="<?php echo $_SESSION['uf'] ?>" id="uf" class="form-control" >
    </div>

    <div class="form-group col-md-6 col-12 col-lg-6">
      
      <label for="inputPassword4">Nacionalidade:</label>
      <input type="text" name="Nacionalidade" readonly="" value="<?php echo $_SESSION['nacionalidade'] ?>" id="cidade" class="form-control" >
    </div> 
    <center>
      <div class="form-group  col-md-12 col-12 col-lg-12">
    <label for="exampleFormControlTextarea1">Descrição</label>
    <textarea readonly=""class="form-control col-md-12" id="exampleFormControlTextarea1" rows="1"><?php echo $_SESSION['descricao'] ?></textarea>
     <br><br>
  </div>
  <div class="col-12 col-md-12" style="display: flex; justify-content: center;">
         <form action="../Views/editarConta.php" method="POST">
            <button  name="editar" value="<?php echo $_SESSION['idUsuario'] ?>" style=" width: 200px;
        height: 35px;
          background-color: #FA8072; 
        border: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
        color: inherit;
         margin-right: 10px;
      ">Editar Conta</button>       
        </form>
         <?php
            echo "<a href='proc_apagar_usuario.php?id=" . $_SESSION['idUsuario'] ." class='btn2' style='background-color: #FA8072; border: none;width: 200px;height: 35px; padding-top: 0.6rem;'data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a><br>";
            ?>
    
</div>
  </div>

       
</center>

  
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