<?PHP

Include 'conexao_bd.php';

if (isset($_POST['busca_nome']) !='') {
	$sql = mysql_query("select * from tb_login where usuario like '{$_POST['busca_nome']}%' order by usuario asc");
}

else {
	$sql = mysql_query("select * from tb_login order by usuario asc");
}

if (isset($_GET['apagar'])) {

	$sql = mysql_query("delete from tb_login where usuario=". $_GET['apagar']);
	echo "<br>";
	echo "<center>";
	echo "<hr>";
	echo "CONTA EXCLUIDA COM SUCESSO!!!";
	echo "<br>";
	echo "<a href=\"listagem.php\">VOLTAR</a>";
	return false;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD em PHP</title>
</head>
<body>
	<center>
		<form name="frm_lista" method="POST" action="listagem.php">
			Digite um nome de usuário:
			<input type="text" name="busca_nome" size="40" maxlength="40">
			<input type="submit" value="FILTRAR">
		</form>

		<table border="1" align="center">
			<tr>
				<th colspan="4" bgcolor="orange">LISTAGEM DE CONTAS CADASTRADAS</th>
			</tr>
			<tr>
				<th bgcolor="yellow">USUÁRIO</th>
				<th bgcolor="yellow">EMAIL</th>
				<th bgcolor="yellow">SENHA</th>
				<th bgcolor="yellow">EXCLUIR</th>
			</tr>

			<?php
				while ($linha=mysql_fetch_assoc($sql)) {
			?>

				<th align="center"><?php echo $linha['usuario']; ?></th>
				<th align="center"><?php echo $linha['email']; ?></th>
				<th align="center"><?php echo $linha['senha']; ?></th>
				<th align="center"><a href="listagem.php?apagar='<?php echo $linha['usuario']; ?>'"><img src="image/apagar.png"></a></th>

				<tr>

				<?php

				}
				echo "<br>";
				echo "<center>";
				echo "<hr>";
				echo "<a href=\"login.php\">VOLTAR AO LOGIN</a>";
				echo "<hr>";

				?>
		</table>
	</center>
</body>
</html>