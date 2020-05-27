<?php 
	if (!isset($_SESSION)) session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>HEAVEN</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/amigos.css">
  	<link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
	  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>
  <body>

  <?php include_once("Header.php") ;
  include_once ("../Controllers/conexao.php");
 ?> 
      <br><br><br><br>
    <div class="container theme-showcase" role="main" >  
<ul class="nav nav-tabs justify-content-center" style="margin-left: 20%" role="tablist">
  <li class="nav-item" role="presentation" >
    <a class="nav-link" aria-controls="amigos" href="#amigos" role="tab" data-toggle="tab">Amigos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="#Adicionar" aria-controls="Adicionar" role="tab" data-toggle="tab">Adicionar Amigos</a>
  </li>
   <li class="nav-item" role="presentation">
    <a class="nav-link" href="#solicita" aria-controls="solicita" role="tab" data-toggle="tab">Solicitações de Amizade</a>
  </li>
 
</ul>
 <div class="tab-content">
   <div  role="tabpanel" class="tab-pane active" id="amigos">
     <div class="principal">
      <br><br><br>
        <div class="principal" >
    <br><br> 
  
  <?php 
  $id = $_SESSION['idUsuario'];
    $sql_amizade = mysqli_query($conexao, "SELECT * FROM Solicitacoes_de_Amizade WHERE status = 'Aceito' and idDestinatario = $id" );
    while($l_amizade = mysqli_fetch_array($sql_amizade)){
      $id_convite = $l_amizade['idRemetente'];

      $id_convidado = $l_amizade['idDestinatario'];
      $id_status = $l_amizade['status'];

    @$Usuario = $id_convite;
    $sql_result = mysqli_query($conexao, "SELECT * FROM Usuario WHERE idUsuario like '%$Usuario%' ");

    while($line = mysqli_fetch_array($sql_result)){
      $id_pesquisa = $line['idUsuario'];
      $nome_pesquisa = $line['nome'];
      $img_pesquisa = $line['NomeImg'];
      $nacio_pesquisa = $line['nacionalidade'];
      $cidade_pesquisa = $line['cidade'];
      $uf_pesquisa = $line['uf'];
      $descricao_pesquisa = $line['descricao'];
}
          ?>
          <div class="card">

          <div class="header"> <?php echo $nome_pesquisa?> Enviou uma Solicitação de Amizade</div>

         <?php if ( $nacio_pesquisa == "Americano") {
          ?> 
          <img src="../imagens/eua.png" class="photo1"> 
        <?php  }elseif ($nacio_pesquisa == "Brasileiro") {?>
          <img src="../imagens/brasil.png" class="photo1"> 
          <?php  } ?>

          <div class="photo"><img src="../foto/<?php echo $img_pesquisa?>" class="photo"></div>

           <div class="content2">&nbsp;<img src="../imagens/local.png" style="width: 20px;"> &nbsp; &nbsp;Mora em <?php echo $cidade_pesquisa?>, no Estado de(a) <?php echo $uf_pesquisa?>.  </div>
           
          <div class="content3"> &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<?php echo $descricao_pesquisa?></div>

          <form method="POST" action="../Controllers/status.php?status= 1">
            <input  type="hidden" id="convite" name="convite" autofocus="" display= "inline"  value="<?php echo $id_convite ?>">
             <button class="btn1" name="aceitar" type="submit">
             Excluir Amigo </button>
          </form>
       
        </div>

  <br><br>

 <?php   }
  ?> <?php 
  $id = $_SESSION['idUsuario'];
    $sql_amizade = mysqli_query($conexao, "SELECT * FROM Solicitacoes_de_Amizade WHERE status = 'Aceito' and idRemetente = $id" );
    while($l_amizade = mysqli_fetch_array($sql_amizade)){
      $id_convite = $l_amizade['idRemetente'];

      $id_convidado = $l_amizade['idDestinatario'];
      $id_status = $l_amizade['status'];

    @$Usuario = $id_convite;
    $sql_result = mysqli_query($conexao, "SELECT * FROM Usuario WHERE idUsuario like '%$Usuario%' ");

    while($line = mysqli_fetch_array($sql_result)){
      $id_pesquisa = $line['idUsuario'];
      $nome_pesquisa = $line['nome'];
      $img_pesquisa = $line['NomeImg'];
      $nacio_pesquisa = $line['nacionalidade'];
      $cidade_pesquisa = $line['cidade'];
      $uf_pesquisa = $line['uf'];
      $descricao_pesquisa = $line['descricao'];
}
          ?>
          <div class="card">

          <div class="header"> <?php echo $nome_pesquisa?> </div>

         <?php if ( $nacio_pesquisa == "Americano") {
          ?> 
          <img src="../imagens/eua.png" class="photo1"> 
        <?php  }elseif ($nacio_pesquisa == "Brasileiro") {?>
          <img src="../imagens/brasil.png" class="photo1"> 
          <?php  } ?>

          <div class="photo"><img src="../foto/<?php echo $img_pesquisa?>" class="photo"></div>

           <div class="content2">&nbsp;<img src="../imagens/local.png" style="width: 20px;"> &nbsp; &nbsp;Mora em <?php echo $cidade_pesquisa?>, no Estado de(a) <?php echo $uf_pesquisa?>.  </div>
           
          <div class="content3"> &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<?php echo $descricao_pesquisa?></div>

          <form method="POST" action="../Controllers/status.php?status= 1">
            <input  type="hidden" id="convite" name="convite" autofocus="" display= "inline"  value="<?php echo $id_convite ?>">
             <button class="btn1" name="aceitar" type="submit">
             Excluir Amigo </button>
          </form>
       
        </div>

  <br><br>

 <?php   }
  ?>
     </div>
   </div>
 
    
    </div>
<div id="Adicionar" role="tabpanel" class="tab-pane active">

  <div class="principal">
 
 <br><br>
       <div style="margin-left: 50%">
    <?php
 
echo "<form class='form-inline my-2 my-lg-0' action='amigos.php' method='POST'>";
echo "<input class='form-control mr-sm-2' type='search' placeholder='Pesquisar' aria-label='Pesquisar' name='pesquisa'>";
echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit' value='Pesquisar'>Pesquisar</button>";
echo "</form>";

?>
</div>
</div>
 <br><br>
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

?>

 <?php if ( $nome_pesquisa != $Nome) {
      ?> 
 <div class="card">

      <div class="header"> <?php echo $nome_pesquisa?></div>

     <?php if ( $nacio_pesquisa == "Americano") {
      ?> 
      <img src="../imagens/eua.png" class="photo1"> 
    <?php  }elseif ($nacio_pesquisa == "Brasileiro") {?>
      <img src="../imagens/brasil.png" class="photo1"> 
      <?php  } ?>

      <div class="photo"><img src="../foto/<?php echo $img_pesquisa?>" class="photo"></div>

       <div class="content2">&nbsp;<img src="../imagens/local.png" style="width: 20px;"> &nbsp; &nbsp;Mora em <?php echo $cidade_pesquisa?>, no Estado de(a) <?php echo $uf_pesquisa?>.  </div>

      <div class="content3"> &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<?php echo $descricao_pesquisa?></div>
         <button class="btn1" name="adiciona"><a style="color: inherit;" href="../Controllers/solicita.php?cod= <?php echo $id_pesquisa ?>">
         Adicionar Amigo</a></button>
         <br>
    </div>

  <br><br>
 <?php  } ?>


<?php } ?>
</div>
</div>

<div id="solicita" role="tabpanel" class="tab-pane active">
  <div class="principal" >
    <br><br> 
  
  <?php 
  $id = $_SESSION['idUsuario'];
    $sql_amizade = mysqli_query($conexao, "SELECT * FROM Solicitacoes_de_Amizade WHERE status = 'Pendente' and idDestinatario = $id" );
    while($l_amizade = mysqli_fetch_array($sql_amizade)){
      $id_convite = $l_amizade['idRemetente'];

      $id_convidado = $l_amizade['idDestinatario'];
      $id_status = $l_amizade['status'];

    @$Usuario = $id_convite;
    $sql_result = mysqli_query($conexao, "SELECT * FROM Usuario WHERE idUsuario like '%$Usuario%' ");

    while($line = mysqli_fetch_array($sql_result)){
      $id_pesquisa = $line['idUsuario'];
      $nome_pesquisa = $line['nome'];
      $img_pesquisa = $line['NomeImg'];
      $nacio_pesquisa = $line['nacionalidade'];
      $cidade_pesquisa = $line['cidade'];
      $uf_pesquisa = $line['uf'];
      $descricao_pesquisa = $line['descricao'];
}
          ?>
          <div class="card">

          <div class="header"> <?php echo $nome_pesquisa?> Enviou uma Solicitação de Amizade</div>

         <?php if ( $nacio_pesquisa == "Americano") {
          ?> 
          <img src="../imagens/eua.png" class="photo1"> 
        <?php  }elseif ($nacio_pesquisa == "Brasileiro") {?>
          <img src="../imagens/brasil.png" class="photo1"> 
          <?php  } ?>

          <div class="photo"><img src="../foto/<?php echo $img_pesquisa?>" class="photo"></div>

           <div class="content1">&nbsp;<img src="../imagens/local.png" style="width: 20px;"> &nbsp; &nbsp;Mora em <?php echo $cidade_pesquisa?>, no Estado de(a) <?php echo $uf_pesquisa?>.  </div>
           
          <div class="content"> &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<?php echo $descricao_pesquisa?></div>

          <form method="POST" action="../Controllers/status.php?status= 1">
            <input  type="hidden" id="convite" name="convite" autofocus="" display= "inline"  value="<?php echo $id_convite ?>">
             <button class="btn1" name="aceitar" type="submit">
             Aceitar Solicitação </button>
          </form>
          <form method="POST" action="../Controllers/status.php?status= 0">
            <input  type="hidden" id="convite" name="convite" autofocus="" display= "inline"  value="<?php echo $id_convite ?>">
             <button class="btn2" name="aceitar" type="submit">
             Recusar Solicitação </button>
             <br>
          </form>
        </div>

  <br><br>

 <?php   }
  ?>
</div>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
