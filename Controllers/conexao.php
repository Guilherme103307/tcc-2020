<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "POC";
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco) or die ("Não foi possível fazer a conexão com o banco de dados");
mysqli_set_charset($conexao, 'utf8');

?>