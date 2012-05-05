<?php
include '../../include/conecta.php';
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$agencia = $_POST['agencia'];

$sql = mysql_query("INSERT INTO cliente VALUES('$cpf','$nome','$endereco',0,'$telefone','$agencia')") or die(mysql_error());
if ($sql)
	echo true;
mysql_free_result($sql);
?> 
