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
<link rel="shortcut icon" href="images/tamandua.jpg" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header"><? include("template/titulo.html"); ?></div>
	<div id="menu"><? include("template/menu.html"); ?></div>
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Autores</h2>
				<ul class="section-list">
					<li>
						<img class="pic alignleft" src="images/andre.jpg" alt="" />
						<span>Nome: André Mack Nardy<br />
						Idade: 24 anos<br />
						Formação: 4º ano Sistemas de Informação - UNIFEI<br />
						Natural: Itu/SP</span>
					</li>
					<li>
						<img class="pic alignleft" src="images/douglas.jpg" alt="" />
						<span>Nome: Douglas William de Lima<br />
						Idade: 23 anos<br />
						Formação: 4º ano Sistemas de Informação - UNIFEI<br />
						Natural: São José dos Campos/SP</span>
					</li>
					<li>
						<img class="pic alignleft" src="images/hipolito.jpg" alt="" />
						<span>Nome: Hopólito Douglas<br />
						Idade: 22 anos<br />
						Formação: 4º ano Sistemas de Informação - UNIFEI<br />
						Natural: Itajubá/MG</span>
					</li>
					<li>
						<img class="pic alignleft" src="images/matheus.jpg" alt="" />
						<span>Nome: Matheus Mendes<br />
						Idade: 26 anos<br />
						Formação: 4º ano Sistemas de Informação - UNIFEI<br />
						Natural: Itajubá/MG</span>
					</li>
					<li>
						<img class="pic alignleft" src="images/tiago.jpg" alt="" />
						<span>Nome: Tiago Henrique de Paula Miranda<br />
						Idade: 22 anos<br />
						Formação: 4º ano Sistemas de Informação - UNIFEI<br />
						Natural: Pouso Alegre/MG</span>
					</li>
				</ul>
			</div>
			<br class="clearfix" />
		</div>
		<div id="sidebar">
			<? include("template/realizacao.html"); ?>
			</div>
		</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom"><? include("template/rodape.html"); ?></div>
</div>
<div id="footer"><? include("template/footer.html"); ?></div>
</body>
</html>
