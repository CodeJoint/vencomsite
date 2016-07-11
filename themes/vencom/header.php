<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
			<header>
				<div class="wrapper">
					<a href="<?php echo site_url(); ?>"><img src="<?php echo THEMEPATH; ?>images/logo.svg"></a>
					<nav>
						<a href="<?php echo site_url(); ?>">NOSOTROS</a>
						<a href="<?php echo site_url('servicios'); ?>">SERVICIOS</a>
						<a href="<?php echo site_url('beneficios'); ?>">BENEFICIOS</a>
						<!-- <a href="<?php echo site_url('vacantes'); ?>">VACANTES</a> -->
						<a href="<?php echo site_url('contacto'); ?>">CONTACTO</a>
					</nav>
				</div>
			</header>
