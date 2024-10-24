<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the Compatible of your site -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Botanical - HTML5 Ecommerce Template</title>
	<!-- include the site Google Fonts stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&display=swap" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap.css">
	<!-- include the site fontawesome stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/fontawesome.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/style.css">
	<!-- include theme plugins setting stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/plugins.css">
	<!-- include theme color setting stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/color.css">
	<!-- include theme responsive setting stylesheet -->
	<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/responsive.css">
	<script>
		//Minusculas en javascript y las mayusculas en php.
		const base_url = '<?php echo BASE_URL;?>';
	</script>
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- header -->
		<header id="header" class="position-relative">
			<!-- headerHolderCol -->
			
			<!-- headerHolder -->
			<div class="headerHolder container pt-lg-5 pb-lg-7 py-4">
				<div class="row">
					<div class="col-6 col-sm-2">
						<!-- mainLogo -->
						<div class="logo">
							<a href="<?php echo BASE_URL;?>producto"><img src="<?php echo BASE_URL;?>assets/images/logo_blanc.png" alt="Botanical" class="img-fluid"></a>
						</div>
					</div>
					<div class="col-6 col-sm-7 col-lg-8 static-block d-flex align-items-center justify-content-center">
						<!-- mainHolder -->
						<div class="mainHolder pt-lg-5 pt-3 justify-content-center">
							<!-- pageNav2 -->
							<nav class="navbar navbar-expand-lg navbar-light p-0 pageNav2 position-static">
								<button type="button" class="navbar-toggle collapsed position-relative" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarNav">
									<ul class="navbar-nav mx-auto text-uppercase d-inline-block">
										<li class="nav-item">
											<a role="button" href="<?php echo BASE_URL;?>producto">Inicio</a>
										</li>
										<li class="nav-item">
											<a role="button" href="<?php echo BASE_URL;?>tienda">Tienda</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo BASE_URL;?>nosotros">Nosotros</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo BASE_URL;?>blog">Blog</a>
										</li>
										<!--<li class="nav-item dropdown">
											<a class="dropdown-toggle d-block" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
											<ul class="list-unstyled text-capitalize dropdown-menu mt-0 py-0">
												<li class="d-block mx-0"><a href="cart-page.html">Cart Page</a></li>
											</ul>
										</li>-->
										<li class="nav-item">
											<a  href="<?php echo BASE_URL;?>contacto">Contactenos</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
					<div class="col-sm-3 col-lg-2 d-flex justify-content-center align-items-center">
						<!-- wishListII -->
						<ul class="nav nav-tabs wishListII pt-5 justify-content-end border-bottom-0">
							<li class="nav-item ml-0"><a class="nav-link icon-search" href="javascript:void(0);"></a></li>
							<li class="nav-item"><a class="nav-link position-relative icon-cart" href="<?php echo BASE_URL;?>carrito"><span class="num rounded d-block">2</span></a></li>
							<li class="nav-item"><a class="nav-link icon-profile" href="javascript:void(0);"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>