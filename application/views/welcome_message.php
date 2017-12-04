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
						<!-- Banner -->
							<section id="banner">
								<header>
									<h2>Maquina virtual</h2>
									<p>Esta aplicação está funcionando em uma máquina virtual criada no AWS Lightsail</p>
								</header>
							</section>

							<section>
								<p>
									<h2>Nome da Maquina</h2>
									<h3><?php echo $nome; ?></h3>
									<h2>Endereço IP</h2>
									<h3><?php echo $ip; ?></h3>
									<h2>Descrição da VM</h2>
									<h3><?php echo php_uname() ?></h3>
								</p>

								<?php 
								$file = file('/proc/cpuinfo');
                                $proc_details = $file[4];
                                print_r($file[4]);

                                print_r($proc_details);
								 ?>

								

								
							</section>

							

						<!-- Intro -->
							

					</div>
				</div>


						

			<!-- Footer -->
				<div id="footer-wrapper">
					<section id="footer" class="container">
						<div class="row">

							<div class="4u 12u(mobile)">
								<section>
									<header>
										<h2>Informações</h2>
									</header>
									<ul class="social">
										<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
										<li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
										<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
									</ul>
									<ul class="contact">
										<li>
											<h3>Nome</h3>
											<p>
												Roger Martins da Silva
											</p>
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">roger.8b@gmail.com</a></p>
										</li>
										<li>
											<h3>RA</h3>
											<p>916112468</p>
										</li>
									</ul>
								</section>
							</div>
							
						</div>
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