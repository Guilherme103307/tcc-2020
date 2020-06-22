<?php 
	if (!isset($_SESSION)) session_start();
$Nome = $_SESSION['nome'];
  $teste = '';
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
    <a class="nav-link" href="amigos.php" style="background-color: white; color:#808080; border-color: #C0C0C0; border-bottom: none;">Amigos</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" href="Adicionar.php" >Adicionar Amigos</a>
  </li>
   <li class="nav-item" role="presentation">
    <a class="nav-link" href="solicita.php" >Solicitações de Amizade</a>
  </li>
 
</ul>
 <div class="tab-content">
     <div class="principal">
      <br><br><br>
     <?php
 
echo "<form class='form-inline my-2 my-lg-0' action='amigos.php' method='POST' style='display: flex; 
  align-items:
  center; justify-content: center;'>";
  echo '<br><br>';
echo "<input class='form-control mr-sm-2' type='search' placeholder='Pesquisar' aria-label='Pesquisar' name='pesquisa'>";
echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit' value='Pesquisar'>Pesquisar</button>";
 echo '<br><br>';
echo "</form>";
 echo '<br><br>';
?>
        </div>

          <?php
            @$termo = $_POST['pesquisa'];
            $id = $_SESSION['idUsuario'];
            $sql_amizade = mysqli_query($conexao, "SELECT * FROM Solicitacoes_de_Amizade WHERE status = 'Aceito' ");
          while($l_amizade = mysqli_fetch_array($sql_amizade)){

          $id_convite = $l_amizade['idRemetente'];
          $id_convidado =$l_amizade['idDestinatario'];

          if ($id_convite == $id) {
           
          @$Usuario = $id_convidado;
        }
        elseif ($id_convidado == $id) {
          @$Usuario = $id_convite;
        }else {
          @$Usuario  = '';
        }
        
    
        
       $sql_result = mysqli_query($conexao, "SELECT * FROM Usuario WHERE idUsuario like '%$Usuario%' and nome like '%$termo%' ");

          while($line = mysqli_fetch_array($sql_result)){
            $id_pesquisa = $line['idUsuario'];
            $nome_pesquisa = $line['nome'];
            $img_pesquisa = $line['NomeImg'];
              $id_pesquisa = $line['idUsuario'];
      $nome_pesquisa = $line['nome'];
      $img_pesquisa = $line['NomeImg'];
      $nacio_pesquisa = $line['nacionalidade'];
      $cidade_pesquisa = $line['cidade'];
      $uf_pesquisa = $line['uf'];
      $descricao_pesquisa = $line['descricao'];

}
          
     
            if (isset($id_pesquisa)){ 
            if ($Nome != $nome_pesquisa) {
               
            ?>
            <br><br><br>
      
                  <div class="card">

          <div class="header"> <?php echo $nome_pesquisa?> </div>

         <?php if ( $nacio_pesquisa == "Americano") {
          ?> 
          <img src="../imagens/eua.png" class="photo1"> 
        <?php  }elseif ($nacio_pesquisa == "Brasileiro") {?>
          <img src="../imagens/brasil.png" class="photo1"> 
          <?php  } ?>

          <div class="photo"><img src="../foto/<?php echo $img_pesquisa?>" class="photo"></div>

           <div class="content1">&nbsp;<img src="../imagens/local.png" style="width: 20px;"> &nbsp; &nbsp;Mora em <?php echo $cidade_pesquisa?>, no Estado de(a) <?php echo $uf_pesquisa?>.  </div>
           
          <div class="content"> &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<?php echo $descricao_pesquisa?></div>
           
        
   <?php
        echo "<a href='../Controllers/deleteAmigo.php?id=" . $id_convite ."'class='btn1' style='text-decoration: none;color: inherit; text-align: center; padding-top: 0.5%;'data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Excluir Amigo</a><br>";
       $teste = $nome_pesquisa; }   ?>
        <br><br>
        </div>
        

    <?php
      }}?>
   
      </div>
    

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="../js/modal3.js"></script> 
</body>
</html>
