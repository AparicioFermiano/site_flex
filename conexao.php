<?php
$servidor="127.0.0.1";
$usuario="aparicio";
$senha="123";
$banco="flex";
$conexao=mysqli_connect($servidor,$usuario,$senha) or die (mysql_error());
mysqli_select_db($conexao, $banco) or die ("Erro ao Conectar com o Banco");
?>