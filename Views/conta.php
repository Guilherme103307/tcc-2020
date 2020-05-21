<?php 
	if (!isset($_SESSION)) session_start();
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
  <?php include_once("Header.php") ?>
  
 <div class="principal">
    <div style="margin-left: 15%;   ">
      <div>
      <label>Nome:</label>
      <br>
      <input type="text" name="nome" readonly="" value="<?php echo $_SESSION['nome'] ?>" id="nome" style="width: 420px" class="form-control">
      <br> 
    </div>
    <div>
      <label>Email:</label>
      <br>
      <input type="text" name="email" readonly="" value="<?php echo $_SESSION['email'] ?>" id="email" class="form-control" style="width: 420px">
      <br> 
    </div>
      <div>
      <label>Senha:</label>
      <br>
      <input type="password" name="senha" readonly="" value="<?php echo $_SESSION['senha'] ?>" id="senha" class="form-control" style="width: 420px">
      <br> 
    </div>  
  </div>
    <div style="float: right; margin-left: 2%;">
     <div>
      <label>UF</label>
      <br>
      <input type="text" name="uf" readonly="" value="<?php echo $_SESSION['uf'] ?>" id="uf" class="form-control" style="width: 420px">
      <br> 
    </div>
    <div>
      <label>Cidade</label>
      <br>
      <input type="text" name="cidade" readonly="" value="<?php echo $_SESSION['cidade'] ?>" id="cidade" class="form-control" style="width: 420px">
      <br> 
    </div>
    <div>
      <label>Nacionalidade</label>
      <br>
      <input type="text" name="Nacionalidade" readonly="" value="<?php echo $_SESSION['nacionalidade'] ?>" id="nacionalidade" class="form-control" style="width: 420px">
      <br> 
    </div>
    
  
    </div>
  </div>
<br> <br> <br><br><br>
   
        
    <form action="../Views/editarConta.php" method="POST">
        <button class="btn1" name="editar" value="<?php echo $_SESSION['idUsuario'] ?>">Editar Conta</button>       
    </form>
  </div>

      <form action="../Controllers/apagarconta.php" method="POST">
        <button class="btn2" name="delete" value="<?php echo $_SESSION['idUsuario'] ?>">Apagar Conta</button>
        <br><br>        
      </form>
    </div>


    </div>      
  
  </div>
</div>
</body>
</html>