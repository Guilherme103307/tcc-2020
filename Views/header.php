<?php 
	if (!isset($_SESSION)) session_start();
 ?>
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
  	<div style="display: inline; ">
  	<nav style="float: right; width: 85%; 
   -webkit-box-shadow: 0 10px 6px -6px #777;
       -moz-box-shadow: 0 10px 6px -6px #777;
            box-shadow: 0 10px 6px -6px #777;">
				<div style="float: left; margin-top: 0.5%; ">
					<img src="../imagens/Logo.png" style="width: 100px;" >
					<div class="titulo " style="margin-top: 30px;">HEAVEN</div>
				</div>
				
				
				 <a href="login.php" style="margin-top: 1%; float: right; margin-right: 1%

				 "> 
				 	<button class="btn btn-primary " style=" background-color:#1C1C1C;border: none;">Sair  </button>
				 </a>
			

			</nav>

 <div id="wrapper">
   <!-- Sidebar -->
   <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
         <li class="sidebar-brand">
            <img src="../foto/<?php  echo $_SESSION['NomeIMG']?>" class="img-responsive" />      
         </li>
         </br>
         </br>
         </br>
         <li class="active">
            <a href="conta.php"><i class="fa fa-home"></i> Conta</a>
         </li>
          <li class="active">
            <a href="amigos.php"><i class="fa fa-home"></i> Adicionar Amigos</a>
         </li> <li class="active">
            <a href="Conversas.php"><i class="fa fa-home"></i> Conversas</a>
         </li> <li class="active">
            <a href="Videochamada.php"><i class="fa fa-home"></i> VideoChamadas</a>
         </li>
      </ul>
   </div>
   </div>
</div>
<?php 
$Nome = $_SESSION['nome'];
?>
</body>
</html>