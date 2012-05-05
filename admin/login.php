<?php
include '../include/conecta.php';
$login = $_POST['username'];
$senha = $_POST['senha'];

if ($senha != NULL && $login != NULL) {

	$login = mysql_real_escape_string($login);
	$senha = mysql_real_escape_string($senha);

	//$senha = md5($senha);

	$sql = "SELECT * FROM funcionario where login='$login' and senha='$senha'";
	$resultado = mysql_query($sql) or die (mysql_error());
	while ($linha = mysql_fetch_array($resultado)) {
		$loginPost = $linha["login"];
		$senhaPost = $linha["senha"];
		$cpf = $linha["cpf"];
	}
	mysql_free_result($sql);
	if ($login == $loginPost && $senha == $senhaPost) {
		session_start();
		session_register("$cpf");
		$_SESSION['cpf']=$cpf;
		echo true;
	}
}
?> 
