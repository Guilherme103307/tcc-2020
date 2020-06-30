<?php 

  if (!isset($_SESSION)) session_start();

  if(!isset ($_SESSION['email']) == true){

    header("location: login.php");

  } ?>
<!DOCTYPE html>
<html>
  <head>
    <title>HEAVEN</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/home1.css">
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
  </head>
  <body>
  <?php include_once("Header.php") ?>
  <div class="texto">
     <h1>Olá, <?php echo $_SESSION['nome']?>, bem Vindo(a) ao Heaven!</h1>
  </div>
 
</body>
</html>
