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
			<div class="headerHolderCol pt-lg-4 pb-lg-5 py-3">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-4">
							<a href="javascript:void(0);" class="tel d-flex align-items-end"><i class="icon-call mr-2"></i>  Hotline: (602) 462 8889</a>
						</div>
						<div class="col-12 col-sm-4 text-center">
							<span class="txt d-block">Bienvenido a RS Salva</span>
						</div>
						<div class="col-12 col-sm-4">
							<!-- langListII -->
							<ul class="nav nav-tabs langListII justify-content-end border-bottom-0">
								<li class="dropdown">
									<span>Currency: </span>
									<a class="d-inline dropdown-toggle text-uppercase" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">USD</a>
									<div class="dropdown-menu text-uppercase pl-4 pr-4 border-0">
										<a class="dropdown-item" href="javascript:void(0);">USD</a>
										<a class="dropdown-item" href="javascript:void(0);">VND</a>
										<a class="dropdown-item" href="javascript:void(0);">euro</a>
									</div>
								</li>
								<li class="dropdown m-0">
									<span>Languages: </span>
									<a class="d-inline dropdown-toggle text-uppercase" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">EN</a>
									<div class="dropdown-menu pl-4 pr-4">
										<a class="dropdown-item" href="javascript:void(0);">English</a>
										<a class="dropdown-item" href="javascript:void(0);">Vietnamese</a>
										<a class="dropdown-item" href="javascript:void(0);">French</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- headerHolder -->
			<div class="headerHolder container pt-lg-5 pb-lg-7 py-4">
				<div class="row">
					<div class="col-6 col-sm-2">
						<!-- mainLogo -->
						<div class="logo">
							<a href="<?php echo BASE_URL;?>inicio"><img src="<?php echo BASE_URL;?>assets/images/minimal.png" alt="Botanical" class="img-fluid"></a>
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