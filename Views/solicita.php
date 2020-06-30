<?php 

  if (!isset($_SESSION)) session_start();

  if(!isset ($_SESSION['email']) == true){

    header("location: login.php");

  } 

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
    <a class="nav-link" href="amigos.php" >Amigos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="Adicionar.php" >Adicionar Amigos</a>
  </li>
   <li class="nav-item" role="presentation">
    <a class="nav-link" href="solicita.php" style="background-color: white; color:#808080; border-color: #C0C0C0; border-bottom: none;" >Solicitações de Amizade</a>
  </li>
 
</ul>
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

           <div class="content2">&nbsp;<img src="../imagens/local.png" style="width: 20px;"> &nbsp; &nbsp;Mora em <?php echo $cidade_pesquisa?>, no Estado de(a) <?php echo $uf_pesquisa?>.  </div>
           
          <div class="content3"> &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<?php echo $descricao_pesquisa?></div>


      
       <?php
        echo "<a href='../Controllers/status.php?id=" . $id_convite ."&status=1'class='btn1' style='text-decoration: none;color: inherit; text-align: center; padding-top: 0.5%;'data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Aceitar Solicitação</a><br>";
        ?>

          <?php
        echo "<a href='../Controllers/status.php?id=" . $id_convite ."&status=0'class='btn2' style='text-decoration: none;color: inherit; text-align: center; padding-top: 0.5%;'>Recusar Solicitação</a><br>";
        ?>
        </div>

  <br><br>

 <?php   }
  ?>

    </div>

    </div>

    
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="../js/modal2.js"></script> 

      

</body>
</html>
