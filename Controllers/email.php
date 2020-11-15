<?php

header("Location: ../Views/conta.php");
session_start();
	$email = $_SESSION['email'];
    echo $email;
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
	
	$mail->isHTML(true);
	$mail->Subject = 'Seja Bem Vindo ao HEAVEN!!!';
	$mail->Body = '  <center><div><div style="width: 550px;height: 600px;background: #fff;border: solid;border-width: thin;border-color:  #6C7A89;"><div style="background-color: #55545A;"><center><img src="http://heaven-intercambio.ga/imagens/Logo.png" style="width: 20%"><div style="display: inline; vertical-align: center; font-size: 80px; color: white; font-family: Arial, sans-serif; font-weight: bold;">HEAVEN</div></center></div><div style="padding: 20px; font-family: Arial, sans-serif;"><p> Ola,</p><p> Bem Vindo ao Heaven!</p><p>Seu cadastro foi concluido com sucesso. </p><p>Para voltar a usar o portal, clique no link abaixo:</p><center><button style="background-color: #000; color: white; width: auto; height: auto;padding: 15px; font-size: 20px; border:none;"><a href="https://heaven-intercambio.ga/Views/login.php" style="color: inherit; text-decoration: none;">Ir Para o Site</a></button></center></div></div></div></center>';
	$mail->AltBody = 'Seu Cadastro foi concluído com Sucesso!!! ';
 
	if($mail->send()) {
	header("Location: ../Views/conta.php");
	} else {
	header("Location: ../Views/conta.php");
	}
} catch (Exception $e) {
header("Location: ../Views/conta.php");
}

		


header("Location: ../Views/conta.php");