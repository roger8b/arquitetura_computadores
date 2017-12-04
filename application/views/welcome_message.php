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
									<p>Esta aplicação web está funcionando em uma máquina virtual criada no <a href="https://amazonlightsail.com">AWS Lightsail</a>
								</header>
							</section>

							<section>
								<p>
									<?php 
                                     $processador = file('/proc/cpuinfo');
                                     $memoria = file('/proc/meminfo');
									 ?>
									<h1>Dados da VM</h1>
									<h2>Nome da Maquina</h2>
									<p><?php echo $nome; ?></p>
									<h2>Endereço IP</h2>
									<p><?php echo $ip; ?></p>
									<p>Descrição da VM</p>
									<h3><?php echo php_uname() ?></h3>
									<p>Processador</p>
									<h3><?php print_r($processador[4]) ?></h3>
									<p>CPU MHz</p>
									<h3><?php print_r($processador[7]) ?></h3>
									<p>Cache</p>
									<h3><?php print_r($processador[8]) ?></h3>
									<p>Memória total</p>
									<h3><?php print_r($memoria[0]) ?></h3>
									<p>Memória Livre</p>
									<h3><?php print_r($memoria[1]) ?></h3>

								</p>
							</section>

							<?php 
							pre ?>

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