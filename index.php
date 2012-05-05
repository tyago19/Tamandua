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
	<div id="splash">
		<img class="pic" src="images/pic01.jpg" />
	</div>
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Banco Tamanduá??</h2>
				<p>O Banco Tamanduá tem características de ser um banco comunitário. Segundo Lieater: "Trata-se de um acordo entre pessoas de uma mesma comunidade para o uso de uma moeda coexistente com a nacional como meio de pagamento local".</p>
				<p>Portanto, o Banco Tamanduá visa integrar financeiramente uma comunidade carente, podendo ser expandido para demais. As nossas características básicas são: são criados a partir da iniciativa da própria comunidade; realizam empréstimos tanto em reais quanto em moeda social; atuam em locais marcados por pobreza e desigualdade social; têm sua sustentabilidade financeira garantida por financiamentos, subsídios e/ou doações, sejam elas do setor público ou do privado.</p>
			</div>
			<div class="box" id="content-box1">
				<h3>Onde Estamos?</h3>
				<ul class="section-list">
					<li>
						<img class="pic alignleft" src="images/itajuba.jpg" width="70" height="70" alt="" />
						<span>Rua sei lá o que, nº 456 Bairro: X Itajubá/MG</span>
					</li>
					<li>
						<img class="pic alignleft" src="images/pousoalegre.jpg" width="70" height="70" alt="" />
						<span>Rua sei lá o que, nº 456 Bairro: X Pouso Alegre/MG</span>
					</li>
					<li>
						<img class="pic alignleft" src="images/santarita.jpg" width="70" height="70" alt="" />
						<span>Rua sei lá o que, nº 456 Bairro: X Santa Rita do Sapucaí/MG</span>
					</li>
				</ul>
			</div>
			<br class="clearfix" />
		</div>
		<div id="sidebar">
			<div class="box">
				<h3>Funcionário</h3>
				<p align="center"><a href="admin/"><img src="images/admin.png"></a></p>
			<div class="box">
				<? include("template/realizacao.html"); ?>
				</div>
			</div>
			</div>
		</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom"><? include("template/rodape.html"); ?></div>
	</div>
</div>
<div id="footer"><? include("template/footer.html"); ?></div>
</body>
</html>
