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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/conta.css">
  	<link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
  </head>
  <body>
  <?php include_once("Header.php");
 ?>

  <form action="../Controllers/editUsuario.php" method="POST">
 <div class="principal">
  <input  type="hidden" id="idUsuario" name="idUsuario" autofocus="" display= "inline"  value="<?php echo $_SESSION['idusuario']  ?>">
    <div style="margin-left: 15%;   ">
      <div>
      <label>Nome:</label>
      <br>
      <input type="text" name="nome" value="<?php echo $_SESSION['nome'] ?>" id="nome" style="width: 420px" class="form-control">
      <br> 
    </div>
    <div>
      <label>Email:</label>
      <br>
      <input type="text" name="email"  value="<?php echo $_SESSION['email'] ?>" id="email" class="form-control" style="width: 420px">
      <br> 
    </div>
      <div>
      <label>Senha:</label>
      <br>
      <input type="password" name="senha"  value="<?php echo $_SESSION['senha'] ?>" id="senha" class="form-control" style="width: 420px">
      <br> 
    </div>  
    <label>Descrição:</label>
  </div>

    <div style="float: right; margin-left: 2%; margin-top: -2.4%;">
     <div>
      <label>UF</label>
      <br>
      <input type="text" name="uf"  value="<?php echo $_SESSION['uf'] ?>" id="uf" class="form-control" style="width: 420px">
      <br> 
    </div>
    <div>
      <label>Cidade</label>
      <br>
      <input type="text" name="cidade" value="<?php echo $_SESSION['cidade'] ?>" id="cidade" class="form-control" style="width: 420px">
      <br> 
    </div>
    <div>
      <label>Nacionalidade</label>
      <br>
      <input type="text" name="nacionalidade"  value="<?php echo $_SESSION['nacionalidade'] ?>" id="nacionalidade" class="form-control" style="width: 420px">
      <br> 
    </div>
     <div class="desc">
   
      <textarea class="form-control" rows="5" type="text" name="descricao"   id="Descrição" style="width: 865px; height: 80px; "><?php echo $_SESSION['descricao'] ?></textarea>
      <br> 
    </div>
  </div>
    
  
    </div>
  </div>
<br> <br> <br><br><br>
   
        <button type="submit"
        class="btn1" name="editar" value="<?php echo $id ?>" style="margin-left: 50%;"
        >Editar Conta</button>       
    
  </div>

     
</form>
  

</body>
</html>
