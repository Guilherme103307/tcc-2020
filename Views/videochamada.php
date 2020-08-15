<?php 


  if (!isset($_SESSION)) session_start();

  if(!isset ($_SESSION['email']) == true){

    header("location: login.php");

  } else {
  include_once('../Controllers/conexao.php');
  $Nome = $_SESSION['nome'];
  $teste = '';}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>HEAVEN</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/conversas.css">
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet"> 

  </head>
  <body>
    
  <?php include_once("Header.php") ?>
   <div class="principal"> 
      <div class="pessoas">
     <?php
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
    
        
       $sql_result = mysqli_query($conexao, "SELECT * FROM Usuario WHERE idUsuario like '%$Usuario%' ");

          while($line = mysqli_fetch_array($sql_result)){
            $id_pesquisa = $line['idUsuario'];
            $nome_pesquisa = $line['nome'];
            $img_pesquisa = $line['NomeImg'];
}
          
     
            if (isset($id_pesquisa)){ 
            if ($nome_pesquisa != $teste) {
            if ($Nome != $nome_pesquisa) {
        ?>
                
            
             
       
            <div class="contato">
           
                <div class="photo"><img src="../foto/<?php echo $img_pesquisa?>" class="photo"></div>
                <div class="header"> <?php echo $nome_pesquisa?> </div>
                 <?php 
                  echo "<a href='../Controllers/videocall.php?id=" .$id_pesquisa ."' style='color: inherit; text-decoration: none;'>" ?>
               <button style="float: right;margin-right: 50px; margin-top: 20px; background-color: transparent; border: none;"><img src="../imagens/call.png"></button>
                <?php
                  $teste = $nome_pesquisa; }
                ?>

                </a>
                 </div>

              
           
    <?php
      }}}?>
 </div>
 <div class="mensagens">
        <img src="../imagens/jitsi.svg.png" style="left:60%; top: 8%; position: absolute; display: grid; width: 200px">
        <h3 style="left:55%;text-align: center; top: 58%; position: absolute; display: grid; font-family: 'Didact Gothic', sans-serif; font-size: 25px;">Faça Vídeo Chamadas Rápidas</h3>
        <h4 style="left:46%; right: 8%; text-align: center; font-family: 'Didact Gothic', sans-serif;  top: 64%; position: absolute; display: grid; font-size:17px; color: #696969">Um e-mail com o link da vídeo chamada será enviado para o destinatario e você será encaminhado para uma sala virtual</h4>
      </div>
</div>
</body>
</html><?php 

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/videochamada.css">
  	<link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
  </head>
  <body>
  <?php include_once("Header.php") ?>
  
 
</body>
</html>
