<?php

//Chamando string de conexão do banco de dados
include 'conexao_bd.php';

$nome = $_POST ["txt_usuario"];
$email = $_POST ["txt_email"];
$senha = $_POST ["txt_senha"];

$sql = mysql_query("select * from tb_login where usuario='$nome' or email='$email'");

if (mysql_num_rows($sql) > 0) {

	echo "<center>";
	echo "<hr>";
	echo "CONTA JA CADASTRADA!!!";
	echo "<hr>";
	echo "<a href=\"cadastro_conta\">VOLTAR</a>";
}

else {
	$sql=mysql_query("insert into tb_login (usuario,email,senha) values ('$nome','$email','$senha')");

	echo "<center>";
	echo "<hr>";
	echo "CONTA CADASTRADA COM SUCESSO!!!";
	echo "<hr>";
	echo "<a href=\"login.php\">VOLTAR</a>";
}

?>


