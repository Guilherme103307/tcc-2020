<?php 

  if (!isset($_SESSION)) session_start();

  if(!isset ($_SESSION['email']) == true){

    header("location: login.php");

  } else {
    
$idTeste= $_SESSION['idUsuario'];
$idUser = $_SESSION['idUsuario'];
} ?>
<!DOCTYPE html>
<html>
  <head>
    <title>HEAVEN - Amigos</title>
    <link rel="sortcut icon" href="../imagens/favicon.png" type="image/gif" />
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/amigos.css">
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
     <script src="../js/modal1.js"></script>  

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
  <?php 
  include_once ("../Controllers/conexao.php");
 ?> 
      <br><br><br><br>

      
    <div class="container theme-showcase" role="main" >  
<ul class="nav nav-tabs justify-content-center" style="margin-left: 20%" role="tablist">
  <li class="nav-item" role="presentation" >
    <a class="nav-link" href="amigos.php" >Amigos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="Adicionar.php" style="background-color: white; color:#808080; border-color: #C0C0C0; border-bottom: none;">Adicionar Amigos</a>
  </li>
   <li class="nav-item" role="presentation">
    <a class="nav-link" href="solicita.php" >Solicitações de Amizade</a>
  </li>
 
</ul>
<div class="principal">
  <br><br>
       <center>
         <?php
        if(isset( $_SESSION['msge'])){
            $idMs = '';
          $idMs = $_SESSION['msge'];
        ?>
    
        <div class="alert alert-success">Solicitação de Amizade Enviada!</div>
      <?php } ?>
   
     <?php
 
echo "<form class='form-inline my-2 my-lg-0' action='Adicionar.php' method='POST' style='display: flex; 
  align-items:
  center; justify-content: center;'>";
  echo '<br>';
echo "<input class='form-control mr-sm-2' type='search' placeholder='Pesquisar' aria-label='Pesquisar' name='pesquisa' style='margin-left: 1.7rem'>";
echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit' value='Pesquisar'>Pesquisar</button>";
 echo '<br><br>';
echo "</form>";
 echo '<br><br>';
?>
</center>
</div>
 <br>
<div class="result" >
<?php

@$termo = $_POST['pesquisa'];
$sql_result = mysqli_query($conexao, "SELECT * FROM Usuario WHERE nome like '%$termo%' ");

while($line = mysqli_fetch_array($sql_result)){
  $id_pesquisa = $line['idUsuario'];
  $nome_pesquisa = $line['nome'];
  $img_pesquisa = $line['NomeImg'];
  $nacio_pesquisa = $line['nacionalidade'];
  $cidade_pesquisa = $line['cidade'];
  $uf_pesquisa = $line['uf'];
  $descricao_pesquisa = $line['descricao'];

if ( $id_pesquisa != $idUser) {

  if(isset($idMs)){
    if ($id_pesquisa != $idMs) {
     
      ?> 
        <div class="main">
   <div class="containera">
   <div ><img src="../foto/<?php echo $img_pesquisa?>  " Class="imgTi"></div>
  
      <div class="text-container">
           <p>  <div class="titulo1"><?php echo $nome_pesquisa?></div></p>
            <?php if ( $nacio_pesquisa == "Americano") {
      ?> 
      <img src="../imagens/eua.png" class="photo1"> 
    <?php  }elseif ($nacio_pesquisa == "Brasileiro") {?>
      <img src="../imagens/brasil.png" class="photo1"> 
      <?php  } ?>
          <div class="conteudo">&nbsp;<img src="../imagens/local.png" style="width: 20px;"> &nbsp; &nbsp;Mora em <?php echo $cidade_pesquisa?>, no Estado de(a) <?php echo $uf_pesquisa?>.  </div>
          <br>
          <div class="conteudo"> &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<div style="font-weight: bold;">Descrição:</div><?php echo $descricao_pesquisa?></div>
         <button name="adiciona" class="botao"><a style="color: inherit" href="../Controllers/solicita.php ?cod= <?php echo $id_pesquisa ?>">
         Adicionar Amigo</a></button>

      </div>
   </div>
</div>

</div>

 
          <?php } }
          else { 
            if ( $idUser != $id_pesquisa) {?>
                    <div class="main">
   <div class="containera" >
   <div  style="width: inherit;"><img src="../foto/<?php echo $img_pesquisa?>  " Class="imgTi"></div>
  
      <div class="text-container">
           <p>  <div class="titulo1"><?php echo $nome_pesquisa?></div></p>
            <?php if ( $nacio_pesquisa == "Americano") {
      ?> 
      <img src="../imagens/eua.png" class="photo1"> 
    <?php  }elseif ($nacio_pesquisa == "Brasileiro") {?>
      <img src="../imagens/brasil.png" class="photo1"> 
      <?php  } ?>
          <div class="conteudo">&nbsp;<img src="../imagens/local.png" style="width: 20px;"> &nbsp; &nbsp;Mora em <?php echo $cidade_pesquisa?>, no Estado de(a) <?php echo $uf_pesquisa?>.  </div>
          <br>
          <div class="conteudo"> &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<div style="font-weight: bold;">Descrição:</div><?php echo $descricao_pesquisa?></div>
         <button name="adiciona" class="botao"><a style="color: inherit" href="../Controllers/solicita.php?cod= <?php echo $id_pesquisa ?>">
         Adicionar Amigo</a></button>

      </div>
   </div>
</div>
            
       <?php  } }}}

        unset($_SESSION['msge']); ?>

       

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="../js/modal1.js"></script>   
  
</body>
</html>

