<?php 

  if (!isset($_SESSION)) session_start();

  if(!isset ($_SESSION['email']) == true){

    header("location: login.php");

  } else{
 
  include_once('../Controllers/conexao.php');
  $Nome = $_SESSION['nome'];
  $teste = '';
  $User = $_SESSION['idUsuario'];
  $idConversa = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>HEAVEN - Chat</title>
    <link rel="sortcut icon" href="../imagens/favicon.png" type="image/gif" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HEAVEN</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@800&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet"> 
     <link rel="stylesheet" type="text/css" href="../css/conversas2.css">

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
  <center>
    <div class="principal"> 
      <div class="pessoas">
        <div class="contato2">
           <div class="pesquisar">
            <?php 
              echo "<form class='form-inline my-2 my-lg-0' action='conversas.php' method='POST'>";
              echo "<input type='search' style='border-bottom: solid; border-top: none; border-right: none; border-left: none; border-width: thin; border-color:  #E8E8E8; margin-left: 8%;' placeholder='Pesquisar' aria-label='Pesquisar' name='pesquisa'>";
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
    
 
      <div class="scrollable" id="divMensagem" style="width: 100%;
  float: right;
  height: 500px;
  background-color:white;
  overflow-y:auto;
  display: block;">
<br>


       <?php 
          $sql_amizade = mysqli_query($conexao, "SELECT * FROM Usuario WHERE idUsuario like '%$idConversa%' ");
          while($result = mysqli_fetch_array($sql_amizade)){
            $id_conversa = $result['idUsuario'];
            $nome_conversa = $result['nome'];
            $img_conversa = $result['NomeImg'];

          }?>
          <div class="cabecalho"> 
              <img src="../foto/<?php echo $img_conversa?>" class="photo1">&nbsp;&nbsp;&nbsp;<?php echo $nome_conversa?> 
            <?php
              echo "<a href='../Controllers/videoCall.php?id=" . $id_conversa." style='float: right; margin-left:50px;'><img src='../imagens/call.png'></a>";
        ?>
          </div>
          <div>
          <br><br><br><br>
            <?php
            
                $sql_result = mysqli_query($conexao, "SELECT * FROM Mensagens WHERE idDestinatario like '%$idConversa%' and idRemetente like '%$User%' or idDestinatario like '%$User%' and idRemetente like '%$idConversa%'");

          while($line = mysqli_fetch_array($sql_result)){
            $idMensagem = $line['idMensagens'];
            $texto = $line['texto'];
            $data = $line['data'];
            $hora = $line['horario'];
            $idDestinatario = $line['idDestinatario'];
            if ($idDestinatario == $User) {?>
            
                <div style="float: left; border-radius: 20px;
  border: none;
  height: 40px;
  background-color: #00BFFF;padding-left: -1%;
  padding-right: 2%;
padding-top: 1%;
  font-size: 15px; margin-left: 2%" >
    <ul id="nav" style="list-style: none;"> 
 
    <li> <?php echo $texto; ?> 
      <ul class="ul2" style="list-style: none;"> 
        <li class="li1">Data: <?php echo $data; ?> </li> 
        <li  class="li1">Hora: <?php echo $hora; ?></li> 

      
      </ul> 
    </li>
 </ul>

   <script type="text/javascript">
    startList = function() {
    if (document.all&&document.getElementById) {
    navRoot = document.getElementById("menuDropDown");
    for (i=0; i<navRoot.childNodes.length; i++) {
    node = navRoot.childNodes[i];
    if (node.nodeName=="LI") {
    node.onmouseover=function() {
    this.className+=" over";
      }
      node.onmouseout=function() {
      this.className=this.className.replace
      (" over", "");
       }
       }
      }
     }
    }
    window.onload=startList;
</script>
            
            </div>
        <br><br>
            </p>
           <?php } 
            if ($idDestinatario == $idConversa) {?>
              <p>
                <div style="float: right;border-radius: 20px;
  border: solid;
  border-width: thin;
  height: 40px;
  background-color: white;
  padding-left: 2%;
  padding-right: 2%;
  padding-top: 1%;
  font-size: 15px;
  display: block;
  text-align: center !important;
  margin-right: 2%; border-color: #E8E8E8;" >
            <ul id="nav" style="list-style: none;"> 
 
    <li><?php echo $texto; ?>
      <ul class="ul1" style="list-style: none;"> 
        <li class="li1">Data: <?php echo $data; ?></li> 
        <li  class="li1">Hora: <?php echo $hora; ?></li> 
      <?php echo  "<li class='li1'><a href='../Controllers/apagarmensagem.php?id=".$idMensagem."&idC=".$idConversa."'>Apagar Mensagem</a></li>  "?>
      </ul> 
    </li>
 </ul>

   <script type="text/javascript">
    startList = function() {
    if (document.all&&document.getElementById) {
    navRoot = document.getElementById("menuDropDown");
    for (i=0; i<navRoot.childNodes.length; i++) {
    node = navRoot.childNodes[i];
    if (node.nodeName=="LI") {
    node.onmouseover=function() {
    this.className+=" over";
      }
      node.onmouseout=function() {
      this.className=this.className.replace
      (" over", "");
       }
       }
      }
     }
    }
    window.onload=startList;
</script>
            
            </div>
            <br><br>
            </p>
            </p>
           <?php }  } ?>
          </div>
          <script>
        $(document).ready(function() {
                var divMensagem = document.getElementById('divMensagem');
                divMensagem.scrollTop = divMensagem.scrollHeight;
        });
        </script>
          <div class="rodape" style="position: fixed; ">
            <form method="POST" action="../Controllers/conversas.php"  style="display: inline;">
              <input type="hidden" name="idConversa" value="<?php echo $idConversa?>">
              <input type="text" name="mensagem" class="text">
              <button type="submit" class="btn"><img src="../imagens/enviar.png"></button>
            </form>
          </div>
      </div>
    </div>
    </center>
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
