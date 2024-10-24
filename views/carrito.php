<main>
			<!-- introBannerHolder -->
			<section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url(http://placehold.it/1920x300);">
				<div class="container">
					<div class="row">
						<div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
							<h1 class="headingIV fwEbold playfair mb-4">My Cart</h1>
							<ul class="list-unstyled breadCrumbs d-flex justify-content-center">
								<li class="mr-sm-2 mr-1"><a href="home.html">Home</a></li>
								<li class="mr-sm-2 mr-1">/</li>
								<li class="mr-sm-2 mr-1"><a href="shop.html">Shop</a></li>
								<li class="mr-sm-2 mr-1">/</li>
								<li class="active">My Cart</li>
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
									<th scope="col" class="text-uppercase fwEbold border-top-0">product</th>
									<th scope="col" class="text-uppercase fwEbold border-top-0">price</th>
									<th scope="col" class="text-uppercase fwEbold border-top-0">quantity</th>
									<th scope="col" class="text-uppercase fwEbold border-top-0">total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/minimal.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Pellentesque aliquet</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $ <a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/minimal.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Neque Porro Quisquam</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $ <a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/minimal.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Aliquam Quaerat Voluptem</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $ <a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/minimal.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Pellentesque aliquet</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $ <a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
								<tr class="align-items-center">
									<td class="d-flex align-items-center border-top-0 border-bottom px-0 py-6">
										<div class="imgHolder">
											<img src="<?php echo BASE_URL;?>assets/images/minimal.png" alt="image description" class="img-fluid">
										</div>
										<span class="title pl-2"><a href="shop-detail.html">Sint Incidunt Utlabore</a></span>
									</td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $</td>
									<td class="border-top-0 border-bottom px-0 py-6"><input type="number" placeholder="1"></td>
									<td class="fwEbold border-top-0 border-bottom px-0 py-6">180.00 $ <a href="javascript:void(0);" class="fas fa-times float-right"></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<form action="javascript:void(0);" class="cartForm mb-5">
							<div class="form-group mb-0">
								<label for="note" class="fwEbold text-uppercase d-block mb-1">add note</label>
								<textarea id="note" class="form-control"></textarea>
							</div>
						</form>
					</div>
					<div class="col-12 col-md-6">
						<form action="javascript:void(0);" class="couponForm mb-md-0 mb-5">
							<fieldset>
								<div class="mt-holder d-inline-block align-bottom mr-lg-5 mr-0 mb-lg-0 mb-2">
									<label for="code" class="fwEbold text-uppercase d-block mb-1">promo code</label>
									<input type="text" id="code" class="form-control">
								</div>
								<button type="submit" class="btn btnTheme btnCart fwEbold text-center text-white md-round py-3 px-4 py-md-3 px-md-4">Apply</button>
							</fieldset>
						</form>
					</div>
					<div class="col-12 col-md-6">
						<div class="d-flex justify-content-between">
							<strong class="txt fwEbold text-uppercase mb-1">subtotal</strong>
							<strong class="price fwEbold text-uppercase mb-1">900.00 $</strong>
						</div>
						<a href="javascript:void(0);" class="btn btnTheme w-100 fwEbold text-center text-white md-round py-3 px-4 py-md-3 px-md-4">Proceed to checkout</a>
					</div>
				</div>
			</div>
			<!--<div class="container mb-lg-24 mb-md-16 mb-10">
				 
				<section class="subscribeSecBlock bgCover col-12 pt-lg-24 pb-lg-12 pt-md-16 pb-md-8 py-10" style="background-image: url(http://placehold.it/1170x465)">
					<header class="col-12 mainHeader mb-9 text-center">
						<h1 class="headingIV playfair fwEblod mb-4">Subscribe Our Newsletter</h1>
						<span class="headerBorder d-block mb-5"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
						<p class="mb-6">Enter Your email address to join our mailing list and keep yourself update</p>
					</header>
					<form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
						<input type="email" class="form-control px-4 border-0" placeholder="Enter your mail...">
						<button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4 py-md-3 px-md-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></button>
					</form>
				</section>
			</div>-->