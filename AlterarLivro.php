<html>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
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
										<li><a href="" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Livraria<br />
											DN</h1>
											<p>""</p>
										</header>
										<p>"Seja bem-vindo à nossa livraria online! Aqui você encontrará uma ampla seleção de livros de todos os gêneros, desde romances e biografias até livros infantis e de culinária. Nós nos orgulhamos de oferecer uma experiência de compra fácil e segura, com entrega rápida e atendimento ao cliente excepcional. Além disso, nossos preços são altamente competitivos, para que você possa desfrutar de seus livros favoritos sem quebrar o banco. Explore nossa coleção hoje e encontre seu próximo livro favorito!"</p>
										<ul class="actions">
											<li><a href="https://www.publishnews.com.br/materias/2019/02/27/muito-mais-que-uma-livraria" class="button big">Learn More</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/livrodn.jpg" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Alterar Livro</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-gem"></span>
											<div class="content">
												<form method=POST>
													codigo<input type=text name=codigo>

													Nova Avaliação<input type=text name=avaliacao>
													<br>
													
												<input type=submit name=botao value="Alterar Livro">
											
												<a href=index.php><input type=button value="Voltar"></a> <br>

												</form>
												 
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
</html>
<?php
if(isset($_POST["botao"])){
$conexao=mysql_connect("localhost:3306","root", "root");
mysql_select_db("livraria",$conexao);
$codigo = $_POST["codigo"];
$avaliacao = $_POST["avaliacao"];
mysql_query ("update livros set avaliacao='$avaliacao' where
codigo=$codigo",$conexao);
$consulta = mysql_query("select * from livros",$conexao);
while($_GET = mysql_fetch_array($consulta)){
}
mysql_close($conexao);
}
?>
