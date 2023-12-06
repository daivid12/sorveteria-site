<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Editorial by Daivid do Nascimento</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Editorial</strong> Daivid do Nascimento</a>
									<ul class="icons">
		
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Bem vindo à sorveteria online<br />
											</h1>
											<p>"Bem vindo à sorveteria online"</p>
										</header>
										<p>"Bem vindo a sorveteria online, sou aluna do Instituto Federal Fluminense e diariamente vendo sacolé pelo iff e esse site serve para fazer reservas de sabores, espero que gostem do meu trabalho! "</p>
										
									</div>
									<span class="image object">
										<img src="images/sacole.jpg" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Apagar Livro</h2>
									</header>
									<div class="features">
										<article>
									
												<form method=POST>
													nome<input type=text name=nome>
													<br>
													<input type=submit name=botao value="Apagar Reserva">
													<a href=index.php><input type=button value="Voltar"></a>


												</form>
												<?php
if(isset($_POST["botao"])){
$conexao=mysql_connect("localhost:3306","root", "root");
mysql_select_db("sorveteria",$conexao);
$nome = $_POST["nome"];
mysql_query("delete from sacole where nome ='$nome'",$conexao);
mysql_close($conexao);
}
?>
											</div>
										</article>
									</div>
								</section>
						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>