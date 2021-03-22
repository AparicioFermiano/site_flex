<?php
session_start();
include 'conexao.php';

if(empty($_POST['txt_usuario']) || empty($_POST['txt_senha'])) {
	$_SESSION['campos_vazios'] = true;
	header('Location: index.php');
	exit;
}

$usuario = $_POST["txt_usuario"];
$senha = $_POST["txt_senha"];

$sql=mysqli_query($conexao,"select * from tb_usuario where (usuario='$usuario' or email='$usuario') and senha='$senha'");

$condicao =  mysqli_num_rows($sql);
if ($condicao > 0) {
	$_SESSION['usuario'] = $usuario;
	header('Location: feed.html');
	exit();
}

else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>