<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Big Business
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120210
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Banco Tamanduá</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../images/tamandua.jpg" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../style/style.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="../scripts/jquery.min.js"></script>
</head>

<?php
include '../include/conecta.php';
$cpf = $_SESSION['cpf'];
$sql = "SELECT * FROM funcionario where cpf='$cpf'";
$resultado = mysql_query($sql) or die (mysql_error());
while ($row = mysql_fetch_array($resultado)) {
	$nome = $row["nome"];
	$funcao = $row["funcao"];
}
mysql_free_result($sql);
?>

<script type="text/javascript">
$(document).ready(function() {
	$("#sacar").click(function() {
		var action = $("#form-saque").attr('action');
		var form_data = {
			cpf: $("#cpf").val(),
			valor: $("#valor").val()
		};
		$.ajax({
			type: "POST",
			url: action,
			data: form_data,
			success: function(response) {
				if(response == true)
					$("#form-saque").fadeOut('slow', function() {
						$("#message").html("Saque efetuado com Sucesso!");
					});
			}
		});
		return false;
	});
});
</script>

<body>
<div id="wrapper">
	<div id="header"><? include("../template/titulofunc.html"); ?></div>
	<div id="menu"><? include("../template/menufunc.html"); ?></div>
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Depósito</h2>
				<form id="form-saque" method="POST" action="controller/cadSaque.php">
					<div id="form-row">
						<label>CPF:</label> <input type="text" id="cpf" name="cpf" class="texto" />
					</div>
					<div id="form-row"> 
						<label>Valor:</label> <input type="text" id="valor" name="valor" class="texto" />
					</div>
					<div class="submit-row">
						<label>&nbsp;</label><input type="submit" value="Sacar" id="sacar" />
					</div>
				</form>
				<div id="message"></div>
			</div>
			<br class="clearfix" />
		</div>
		<div id="sidebar"><? include("area.php"); ?></div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom"><? include("../template/rodapefunc.html"); ?></div>
</div>
<div id="footer"><? include("../template/footer.html"); ?></div>
</body>
</html>
