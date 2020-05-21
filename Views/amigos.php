<?php 
	if (!isset($_SESSION)) session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>HEAVEN</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/amigos.css">
  	<link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  </head>
  <body>

  <?php include_once("Header.php") ;
  include_once ("../Controllers/conexao.php");
 ?> 
      <br><br><br><br>
  <div class="Pesquisar">
    
    <?php
   
echo "<form class='form-inline my-2 my-lg-0' action='amigos.php' method='POST'>";
echo "<input class='form-control mr-sm-2' type='search' placeholder='Pesquisar' aria-label='Pesquisar' name='pesquisa'>";
echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit' value='Pesquisar'>Pesquisar</button>";
echo "</form>";
?>
</div>
 <br><br>
<div class="result">
<?php

@$termo = $_POST['pesquisa'];
$sql_result = mysqli_query($conexao, "SELECT * FROM Usuario WHERE nome like '%$termo%' ");

while($line = mysqli_fetch_array($sql_result)){
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

       <div class="content1">&nbsp;<img src="../imagens/local.png" style="width: 20px;"> &nbsp; &nbsp;Mora em <?php echo $cidade_pesquisa?>, no Estado de(a) <?php echo $uf_pesquisa?>.  </div>

      <div class="content"> &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;<?php echo $descricao_pesquisa?></div>
         <button class="btn1" name="adiciona">Adicionar Amigo</button>
         <br>
    </div>

  <br><br>
 <?php  } ?>


<?php } ?>
</div>

</body>
</html>