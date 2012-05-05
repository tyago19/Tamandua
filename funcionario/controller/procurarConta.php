<?php
include '../../include/conecta.php';

$cpf = $_GET['CPF'];

$sql = "SELECT * FROM cliente where cpf='$cpf'";
$resultado = mysql_query($sql) or die (mysql_error());
while ($linha = mysql_fetch_array($resultado)) {
	$loginPost = $linha["nro"];
}
mysql_free_result($sql);
?> 
