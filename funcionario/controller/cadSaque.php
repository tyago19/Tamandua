<?php
include '../../include/conecta.php';
$nroconta = $_POST['nroconta'];
$valor = $_POST['valor'];
$horario = date("Y-m-d H:i:s");
$sql = mysql_query("INSERT INTO saque VALUES('0',$valor,'$horario','$nroconta')") or die(mysql_error());
if ($sql)
	echo true;
mysql_free_result($sql);
?>
