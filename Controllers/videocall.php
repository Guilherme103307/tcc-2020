<?php 

  if (!isset($_SESSION)) session_start();

  if(!isset ($_SESSION['email']) == true){

    header("login.php");

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
  header ("location: https://meet.jit.si/.$nscriptografada."); 
require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail = new PHPMailer(true);
 
try {
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'heaven.intercambio@gmail.com';
  $mail->Password = 'ifmg@123';
  $mail->Port = 587;
 
  $mail->setFrom($email);
  $mail->addAddress($email);
  
    $mensagem = "<center><div><div style='width: 550px;height: 600px;background: #fff;border: solid;border-width: thin;border-color:  #6C7A89;'><div style='background-color: #55545A;'><center><img src='http://heaven-intercambio.ga/imagens/Logo.png' style='width: 20%'><div style='display: inline; vertical-align: center; font-size: 80px; color: white; font-family: Arial, sans-serif; font-weight: bold;'>HEAVEN</div></center></div><div style='padding: 20px; font-family: Arial, sans-serif;'><p> Olá,</p><p> Você foi convidado para um videoconferencia de</p><p> <strong> $Nome </strong> </p><p>Para entrar na sala da reunião, clique no link abaixo:</p><center><button style='background-color: #000; color: white; width: auto; height: auto;padding: 15px; font-size: 20px; border:none;'><a href=' https://meet.jit.si/.$nscriptografada.' style='color: inherit; text-decoration: none;'>Ir Para o Site</a></button></center></div></div></div></center>";



  $mail->isHTML(true);
  $mail->Subject = 'Esta Acontecendo agora: VideoConferencia - HEAVEN';
  $mail->Body = $mensagem;
 
  if($mail->send()) {

  } else {
      
    }
} catch (Exception $e) {


   
}

  


  header ("location: https://meet.jit.si/.$nscriptografada."); ?>
 

 