<?php
$servidor = "sql108.epizy.com";
$usuario = "epiz_26701462";
$senha = "fxq9jwIw1WFG";
$banco = "epiz_26701462_poc";
$conexao = mysqli_connect($servidor,$usuario,$senha,$banco) or die ("Não foi possível fazer a conexão com o banco de dado");
mysqli_set_charset($conexao, 'utf8');

?>