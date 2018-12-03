<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Site Responsivo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/<?php echo $style ?>.css">
	<link rel="stylesheet" href="css/geral.css">
	<link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="css/plugins.css">
	
</head>
<body>

	<?php include('includes/organisms/menu-responsivo.php'); ?>

	<div class="layout">
		<header>
			<div class="container">
				<div class="logo wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
					<a href="index.html">
					<img src="imagens/cruz_chamas.png" alt="Logo Topo Tag">
					</a>
				</div>

				<div class="links">
					
					<?php include('includes/organisms/menu.php'); ?>
					
					<a href="javascript:;" class="toggle">
						<span></span>
						<span></span>
						<span></span>

					</a>
					
					<ul class="social">
						<li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
							<a href="https://www.facebook.com/artedaconstru/"><i class="fab fa-facebook-f"></i></a>
						</li>

						<li class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
							<a href="#"><i class="fab fa-github-alt"></i>  </a>
						</li>
					</ul>
				</div>

				<h1> <?php echo $chamada; ?> </h1>

				<p>Code // Share // Reboot</p>

			</div>

		</header>

		<main>