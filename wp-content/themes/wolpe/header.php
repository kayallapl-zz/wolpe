<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultório Wolpe</title>
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/style.css">
    <link href="<?= get_template_directory_uri() ?>/font-awesome/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="js/main.js"></script> -->
</head>
<body>
<header>
	<div class="header-top">
		<action-bar>
			<wrapper>
				<ul id="action-bar-menu">
					<li><i class="fas fa-phone"></i>(21)99999-9999</li>
					<li><i class="fas fa-envelope"></i>contato@consultoriowolpe.com</li>
					<li><i class="fas fa-headset"></i>Atendimento de segunda a sexta</li>
				</ul>
				<a id="action-bar-link" href="#">Entre em contato<i class="fas fa-chevron-right"></i></a>
			</wrapper>
		</action-bar>
		<nav>
			<wrapper>
				<img src="<?= get_template_directory_uri() ?>/images/logo.png" alt="logo Wolpe" class="logo">
				<ul id="navbar-menu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Quem Somos</a></li>
					<li><a href="#">Tratamentos</a></li>
					<li><a href="#">Cursos</a></li>
					<li><a href="#">Contato</a></li>
				</ul>
			</wrapper>
		</nav>
	</div>
	<div class="header-middle">
		<wrapper>
			<div class="header-middle-content">
				<img src="<?= get_template_directory_uri() ?>/images/logo-full.png" alt="logo Wolpe" class="logo">
				<p class="title">Psicoterapia Cognitivo-Comportamental</p>
				<p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eos necessitatibus dolores, voluptas nobis exercitationem voluptatibus ipsa eaque in illo rerum quas fuga earum reprehenderit cupiditate pariatur, labore esse dolor. <a href="#" class="saiba-mais">Saiba Mais <i class="fas fa-chevron-right"></i></a></p>
				<a href="#" class="button">Marque uma Consulta</a>
			</div>
			<img src="<?= get_template_directory_uri() ?>/images/image-header.png" class="image-header" alt="Image Header">
		</wrapper>
	</div>
	</header>