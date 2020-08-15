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

  $sql_email = mysqli_query($conexao, "SELECT * FROM Usuario WHERE idUsuario = '$idConversa' ");
          while($l_email= mysqli_fetch_array($sql_email)){

          $email = $l_email['email']; }
$novasenha = substr(md5(time()), 0, 6);
$nscriptografada = md5(md5($novasenha));

mail($email, ".$Nome. Está te convidando para uma vídeo chmada ", "Entre no link para a video Chamada: https://meet.jit.si/".$nscriptografada);


  header ("location: https://meet.jit.si/.$nscriptografada."); ?>
 
