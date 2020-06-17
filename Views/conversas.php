<?php 
	if (!isset($_SESSION)) session_start();
  include_once('../Controllers/conexao.php');
  $Nome = $_SESSION['nome'];
  $teste = '';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>HEAVEN</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/conversas.css">
  	<link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
  </head>
  <body>
  <?php include_once("Header.php") ?>
  
    <div class="principal"> 
      <div class="pessoas">
        <div class="contato2">
          <div class="pesquisar">
            <?php 
              echo "<form class='form-inline my-2 my-lg-0' action='conversas.php' method='POST'>";
              echo "<input type='search' style='border-bottom: solid; border-top: none; border-right: none; border-left: none; border-width: thin; border-color:  #E8E8E8; margin-left: 15%;' placeholder='Pesquisar' aria-label='Pesquisar' name='pesquisa'>";
              echo "<button type='submit' value='Pesquisar' style='margin-left: 2%;'>🔎</button>";
              echo "</form>";
            ?>
          </div>
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
        }
    
        
       $sql_result = mysqli_query($conexao, "SELECT * FROM Usuario WHERE idUsuario like '%$Usuario%' and nome like '%$termo%' ");

          while($line = mysqli_fetch_array($sql_result)){
            $id_pesquisa = $line['idUsuario'];
            $nome_pesquisa = $line['nome'];
            $img_pesquisa = $line['NomeImg'];
}
          
     
            if (isset($id_pesquisa)){ 
            if ($teste != $nome_pesquisa) {
               
            ?>
            <div class="contato">
                <div class="photo"><img src="../foto/<?php echo $img_pesquisa?>" class="photo"></div>
                <div class="header"> <?php echo $nome_pesquisa?> </div>
                <?php $teste = $nome_pesquisa; } ?>
            </div>

    <?php
      }}?>
   
      </div>
    
 
      <div class="mensagens">
        teste2
      </div>
    </div>
</body>
</html>
