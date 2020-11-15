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
    <title>HEAVEN - Chat</title>
    <link rel="sortcut icon" href="../imagens/favicon.png" type="image/gif" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/conversas.css">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">

      <link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
</head>
  <body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <img src="../imagens/Logo.png" style="width: 100px; float: left;" >
                <a href="#" class="navbar-brand">HEAVEN</a>
            </div>
            <div id="navbarCollapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="conta.php"  class="active">Conta</a></li>
                    <li><a href="amigos.php">Adicionar Amigos</a></li>
                    <li><a href="Conversas.php">Conversas</a></li>
                    <li><a href="login.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
  
    <div class="principal row "> 
      <div class="pessoas col-12 col-md-3 col-lg-3">
        <div class="contato2">
           <div class="pesquisar">
            <?php 
              echo "<form class='form-inline my-2 my-lg-0' action='conversas.php' style='display: flex;'method='POST'>";
              echo "<input type='search' style='border-bottom: solid; border-top: none; border-right: none; border-left: none; border-width: thin; border-color:  #E8E8E8;' placeholder='Pesquisar' aria-label='Pesquisar' name='pesquisa'>";
              echo "<button type='submit' value='Pesquisar'>🔎</button>";
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
        
         }else {
          @$Usuario  = '';
        }
    
        
       $sql_result = mysqli_query($conexao, "SELECT * FROM Usuario WHERE idUsuario like '%$Usuario%' and nome like '%$termo%' ");

          while($line = mysqli_fetch_array($sql_result)){
            $id_pesquisa = $line['idUsuario'];
            $nome_pesquisa = $line['nome'];
            $img_pesquisa = $line['NomeImg'];
}
          
     
            if (isset($id_pesquisa)){ 
            if ($nome_pesquisa != $teste) {
            if ($Nome != $nome_pesquisa) {
        
                
            
                echo "<a href='conversas1.php?id=" .$id_pesquisa ."' style='color: inherit; text-decoration: none;'>" ?>
       
            <div class="contato">
           
                <div class="photo"><img src="../foto/<?php echo $img_pesquisa?>" class="photo"></div>
                <div class="header"> <?php echo $nome_pesquisa?> </div>
                <?php $teste = $nome_pesquisa; }?>
                 </div>

                </a>
           
    <?php
      }}}?>
   
      </div>
    
 
      <div class="mensagens col-0 col-md-12 col-lg-12">
        <img src="../imagens/mensa.png" style=" display: flex; width: 200px; margin-left:auto; margin-right: auto; margin-top: 10rem;">
        <h3 style="text-align: center;font-family: 'Didact Gothic', sans-serif; font-size: 25px;">Suas Mensagens</h3>
        <h4 style=" text-align: center; font-family: 'Didact Gothic', sans-serif;  font-size:17px; color: #696969">Nesta página você pode enviar e receber mensagens dos seus amigos. Antes de começar uma conversa, você deve ter Amigos adicionados. Por isso, antes de tudo, procure seu correspondente na aba Adicionar Amigos!</h4>
      </div>
    </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="../js/personalizado.js"></script>   


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
