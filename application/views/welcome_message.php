<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Roger Martins</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php  echo base_url('assets/css/main.css') ?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->
							<h1><a href="index.html">Arquitetura de Computadores</a></h1>
							<h2>Roger Martins da Silva</h2>
							<h2>RA: 916112468</h2>
						<!-- Banner -->
							<section id="banner">
								<header>
									<h2>Atividade prática de Computação em Nuvem</h2>
									<p>Esta aplicação web foi criada em PHP e hospedada em uma máquina virtual criada no <br> <a href="https://amazonlightsail.com" target="_blank">AWS Lightsail</a></p>
									<p>Para que esta pagina funcione foi necessario a instalação e configuração da pilha <br>PHP + Apache + SQL no Ubuntu Server</p>
								</header>
							</section>

							<section>
								<p>
									<style type="text/css">
										.fonte {
											font-size: 1.5em;
											margin-bottom: 5px;
										}
									</style>
									<?php 
                                     $processador = file('/proc/cpuinfo');
                                     $memoria = file('/proc/meminfo');
									 ?>
									<h1>Dados da VM</h1>
									<h2>Nome da Maquina</h2>
									<p class="fonte"><?php echo $nome; ?></p>
									<h2>Endereço IP</h2>
									<p class="fonte"><?php echo $ip; ?></p>
									<h2>Descrição da VM</h2>
									<p class="fonte"><?php echo php_uname() ?></p>
									<h2>Processador</h2>
									<p class="fonte"><?php print_r($processador[4]) ?></p>
									<h2>CPU MHz</h2>
									<p class="fonte"><?php print_r($processador[7]) ?></p>
									<h2>Cache</h2>
									<p class="fonte"><?php print_r($processador[8]) ?></p>
									<h2>Memória total</h2>
									<p class="fonte"><?php print_r($memoria[0]) ?></p>
									<h2>Memória Livre</h2>
									<p class="fonte"><?php print_r($memoria[1]) ?></p>

								</p>
							</section>

						<!-- Intro -->
							

					</div>
				</div>


						

			<!-- Footer -->
				<div id="footer-wrapper">
					<section id="footer" class="container">
						<div class="row">
							<div class="12u">
								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">Roger Martins</a></li>
										</ul>
									</div>
							</div>
						</div>
					</section>
				</div>

		</div>

		<!-- Scripts -->
			<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.dropotron.min.js') ?>"></script>
			<script src="<?php echo base_url('assets/js/skel.min.js') ?>"></script>
			<script src="<?php echo base_url('assets/js/skel-viewport.min.js') ?>"></script>
			<script src="<?php echo base_url('assets/js/util.js') ?>"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

	</body>
</html>