<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>BCT - Login | Administração</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="../scripts/jquery.min.js"></script>
</head>


<script type="text/javascript">
$(document).ready(function() {
	$("#logar").click(function() {
		var action = $("#login-form").attr('action');
		var form_data = {
			username: $("#username").val(),
			senha: $("#senha").val()
		};
		$.ajax({
			type: "POST",
			url: action,
			data: form_data,
			success: function(response) {
				if(response == true)
					$("#login-form").slideUp('slow', function() {
						$html(top.location.href='../funcionario/funcionario.php');
					});
				else
					$("#error").html("Login e/ou senha incorretos!");
			}
		});
		return false;
	});
});
</script>

<body>
	<div id="login">
		<h1>Banco Tamanduá Administração</h1>
		<form action="login.php" name="login-form" id="login-form" method="post">
			<div id="error"></div>
			<div class="form-row">
				<label>Username:</label> <input type="text" id="username" name="username" maxlength="10" />
			</div>
			<div class="form-row">
				<label>Password:</label> <input type="password" id="senha" name="senha" />
		  </div>
			<div class="submit-row">
				<label>&nbsp;</label><input type="submit" id="logar" value="Log in" />
			</div>
		</form>
	</div>
</boby>
</html>
