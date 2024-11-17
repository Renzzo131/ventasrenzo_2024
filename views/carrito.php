<main>
			<!-- introBannerHolder -->
			<section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url(<?php echo BASE_URL;?>assets/images/fondocarrito.png);">
				<div class="container">
					<div class="row">
						<div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
							<h1 class="headingIV fwEbold playfair mb-4">Mi carrito</h1>
							<ul class="list-unstyled breadCrumbs d-flex justify-content-center">
								<li class="mr-sm-2 mr-1"><a href="home.html">Inicio</a></li>
								<li class="mr-sm-2 mr-1">/</li>
								<li class="mr-sm-2 mr-1"><a href="shop.html">Tienda</a></li>
								<li class="mr-sm-2 mr-1">/</li>
								<li class="active">Mi carrito</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- cartHolder -->
			<div class="cartHolder container pt-xl-21 pb-xl-24 py-lg-20 py-md-16 py-10">
				<div class="row">
					<!-- table-responsive -->
					<div class="col-12 table-responsive mb-xl-22 mb-lg-20 mb-md-16 mb-10">
						<!-- cartTable -->
						<table class="table cartTable">
							<thead>
								<tr>
									<th scope="col" class="text-uppercase fwEbold border-top-0">Producto</th>
									<th scope="col" class="text-uppercase fwEbold border-top-0">Precio</th>
									<th scope="col" class="text-uppercase fwEbold border-top-0">Cantidad</th>
									<th scope="col" class="text-uppercase fwEbold border-top-0">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/balon3.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Balón Peak Alvarado</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00<a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/tablero1.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Wilson NBA Team Mini Hoop NBA Logo</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00<a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/zapatillas1.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Hesi Low V2 Bige</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00<a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/sombrero1.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Seattle Supersonics Cord Bucket Hat</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00<a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/gorra1.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Gorra New Era Dodgers Clásico Blanco</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">S/180.00<a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<form action="javascript:void(0);" class="cartForm mb-5">
							<div class="form-group mb-0">
								<label for="note" class="fwEbold text-uppercase d-block mb-1">Agregar nota</label>
								<textarea id="note" class="form-control"></textarea>
							</div>
						</form>
					</div>
					<div class="col-12 col-md-6">
						<form action="javascript:void(0);" class="couponForm mb-md-0 mb-5">
							<fieldset>
								<div class="mt-holder d-inline-block align-bottom mr-lg-5 mr-0 mb-lg-0 mb-2">
									<label for="code" class="fwEbold text-uppercase d-block mb-1">Código de promoción</label>
									<input type="text" id="code" class="form-control">
								</div>
								<button type="submit" class="btn btnTheme btnCart fwEbold text-center text-white md-round py-3 px-4 py-md-3 px-md-4">Aplicar</button>
							</fieldset>
						</form>
					</div>
					<div class="col-12 col-md-6">
						<div class="d-flex justify-content-between">
							<strong class="txt fwEbold text-uppercase mb-1">Subtotal</strong>
							<strong class="price fwEbold text-uppercase mb-1">S/900.00</strong>
						</div>
						<a href="javascript:void(0);" class="btn btnTheme w-100 fwEbold text-center text-white md-round py-3 px-4 py-md-3 px-md-4">Pasar por la caja</a>
					</div>
				</div>
			</div>