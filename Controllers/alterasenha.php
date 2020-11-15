<?php
session_start();
header("location:  ../Views/login.php");
include("../Controllers/conexao.php");
	$email = $_POST['email'];
    $novasenha = rand();
    $sql_code = "UPDATE Usuario SET senha = '$novasenha' WHERE  email = '$email' ;";
    $sql = mysqli_query($conexao, $sql_code);
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
	
    $mensagem = "<center><div><div style='width: 550px;height: 600px;background: #fff;border: solid;border-width: thin;border-color:  #6C7A89;'><div style='background-color: #55545A;'><center><img src='http://heaven-intercambio.ga/imagens/Logo.png' style='width: 20%'><div style='display: inline; vertical-align: center; font-size: 80px; color: white; font-family: Arial, sans-serif; font-weight: bold;'>HEAVEN</div></center></div><div style='padding: 20px; font-family: Arial, sans-serif;'><p> Olá,</p><p> Sua Nova senha é:</p><p> <strong> $novasenha </strong> </p><p>Para voltar a usar o portal, clique no link abaixo:</p><center><button style='background-color: #000; color: white; width: auto; height: auto;padding: 15px; font-size: 20px; border:none;'><a href='https://heaven-intercambio.ga/Views/login.php' style='color: inherit; text-decoration: none;'>Ir Para o Site</a></button></center></div></div></div></center>";



	$mail->isHTML(true);
	$mail->Subject = 'Nova Senha do HEAVEN - Confira abaixo sua nova Senha:';
	$mail->Body = $mensagem;
 
	if($mail->send()) {

	} else {
      
    }
} catch (Exception $e) {


   
}

	