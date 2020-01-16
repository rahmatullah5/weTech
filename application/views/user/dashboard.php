<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>weTech</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="<?=base_url('assets/assetsUser/css/bootstrap.css')?>"  rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="<?=base_url('assets/assetsUser/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet"  href="<?=base_url('assets/assetsUser/css/fontawesome-all.css')?>" >
	<!-- Font-Awesome-Icons-CSS -->
	<link href="<?=base_url('assets/assetsUser/css/popuo-box.css')?>" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="<?=base_url('assets/assetsUser/css/menu.css')?>" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<link href="<?=base_url('assets/assetsUser/css/inventory.css')?>" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom-Files -->

	<link href="<?=base_url('assets/assetsUser/css/font-style.css')?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=base_url('assets/assetsUser/css/font-style-2.css')?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=base_url('assets/assetsUser/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a href="https://www.jne.co.id/en/tracking/trace"  class="text-white">
								<i class="fas fa-truck mr-2"></i>Track Order</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 001 234 5678
						</li>
						<?php if (isset($this->session->userdata['login'])){ ?>
							<li class="text-center border-right text-white">

					            <?php echo $this->session->userdata['login']['username'] ?>
					        </li>
					        <li class="text-center border-right text-white">
					            <a href="admin/auth/logout" class="text-white">Logout</a>
					        </li>
				        <?php }else{ ?>
							<li class="text-center border-right text-white">
								<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
									<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
							</li>
							<li class="text-center text-white">
								<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
									<i class="fas fa-sign-out-alt mr-2"></i>Register </a>
							</li>
				    	<?php } ?>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- modals -->
	<div class="modal fade" id="m-transaction" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="margin-left: -200px; width: 200%;" >
					<div class="modal-header">
						<h5 class="modal-title">Transaction</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
	                        <div class="table-responsive">
	                            <table id="table-history" class="table table-striped table-bordered table-hover">
	                                <thead>
	                                    <tr>
	                                        <th>Product Name</th>
	                                        <th>Submit By</th>
	                                        <th>Receiver</th>
	                                        <th>Handphone Number</th>
	                                        <th>Amount</th>
	                                        <th>Status</th>
	                                        <th>Date Transaction</th>
	                                        <th>Action</th>
	                                    </tr>
	                                </thead>
	                            </table>
	                        </div>  
		                </div>
					</div>
				</div>
			</div>
		</div>
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?=base_url('admin/auth/action_login')?>" method="post">
						<div class="form-group">
							<label class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder=" " name="username" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?php echo base_url(); ?>index.php/user/dashboard/insert">
						<div class="form-group">
							<label class="col-form-label">Fullname</label>
							<input type="text" class="form-control" placeholder=" " name="fullname" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder="Code for login" name="username" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" " name="c_password" id="password2" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.html" class="font-weight-bold font-italic">
							<img src="<?=base_url('assets/assetsUser/images/logo2.jpg')?>" alt=" " width="90" height="87" class="img-fluid">WeTech Store
						</a>
					</h1>
				</div>

				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<!-- <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div> -->
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<!-- <form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<option value="Televisions">Televisions</option>
							<option value="Headphones">Headphones</option>
							<option value="Computers">Computers</option>
							<option value="Appliances">Appliances</option>
							<option value="Mobiles">Mobiles</option>
							<option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
							<option value="iPad & Tablets">iPad & Tablets</option>
							<option value="Cameras & Camcorders">Cameras & Camcorders</option>
							<option value="Home Audio & Theater">Home Audio & Theater</option>
						</select>
					</form> -->
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">About Us</a>
						</li>

						<li class="nav-item dropdown active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Product
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="product.html">Iphone</a>
								<a class="dropdown-item" href="product2.html">ASUS</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="single.html">Samsung</a>
								<a class="dropdown-item" href="single2.html">OPPO</a>
								<div class="dropdown-divider"></div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact Us</a>
						</li>

						<li class="nav-item">
							<a href="#" onclick="loadtransaction_history()" class="nav-link">My Order </a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
								<span>Big</span>
								Sale
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>advanced
								<span>Wireless</span> earbuds</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
								<span>Headphone</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
								<span>Standard</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get Now
								<span>40%</span> Discount</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
								<span>Discount</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>O</span>ur
				<span>N</span>ew
				<span>P</span>roducts</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">New Brand Mobiles</h3>
							<div class="row">
								<?php
									for ($x = 1; $x <= 3; $x++) {
								?> 
									<div class="col-md-4 product-men mt-5">
										<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item text-center">
												<img src="<?=base_url('assets/assetsUser/images/m1.jpg')?>" alt="">
												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
														<a href="<?=base_url('user/dashboard/productdetail')?>" class="link-product-add-cart">Quick View</a>
													</div>
												</div>
											</div>
											<div class="item-info-product text-center border-top mt-4">
												<h4 class="pt-1">
													<a href="<?=base_url('user/dashboard/productdetail')?>">Samsung Galaxy J7</a>
												</h4>
												<div class="info-product-price my-2">
													<span class="item_price">$200.00</span>
													<del>$280.00</del>
												</div>
												<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
													<form action="#" method="post">
														<fieldset>
															<input type="hidden" name="cmd" value="_cart" />
															<input type="hidden" name="add" value="1" />
															<input type="hidden" name="business" value=" " />
															<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
															<input type="hidden" name="amount" value="200.00" />
															<input type="hidden" name="discount_amount" value="1.00" />
															<input type="hidden" name="currency_code" value="USD" />
															<input type="hidden" name="return" value=" " />
															<input type="hidden" name="cancel_return" value=" " />
															<!-- <input type="submit" name="submit" value="Add to cart" class="button btn" /> -->
														</fieldset>
													</form>
												</div>
											</div>
										</div>
									</div>
								<?php 
									}
								?>
							</div>
						</div>
						 
						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Another Product</h3>
							<div class="row">
								<?php
									for ($x = 1; $x <= 3; $x++) {
								?> 
									<div class="col-md-4 product-men mt-5">
										<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item text-center">
												<img src="<?=base_url('assets/assetsUser/images/m1.jpg')?>" alt="">
												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
														<a href="<?=base_url('user/dashboard/productdetail')?>" class="link-product-add-cart">Quick View</a>
													</div>
												</div>
											</div>
											<div class="item-info-product text-center border-top mt-4">
												<h4 class="pt-1">
													<a href="<?=base_url('user/dashboard/productdetail')?>">Samsung Galaxy J7</a>
												</h4>
												<div class="info-product-price my-2">
													<span class="item_price">$200.00</span>
													<del>$280.00</del>
												</div>
												<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
													<form action="#" method="post">
														<fieldset>
															<input type="hidden" name="cmd" value="_cart" />
															<input type="hidden" name="add" value="1" />
															<input type="hidden" name="business" value=" " />
															<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
															<input type="hidden" name="amount" value="200.00" />
															<input type="hidden" name="discount_amount" value="1.00" />
															<input type="hidden" name="currency_code" value="USD" />
															<input type="hidden" name="return" value=" " />
															<input type="hidden" name="cancel_return" value=" " />
															<!-- <input type="submit" name="submit" value="Add to cart" class="button btn" /> -->
														</fieldset>
													</form>
												</div>
											</div>
										</div>
									</div>
								<?php 
									}
								?>
							</div>
						</div>
						<!-- //second section -->
						<!-- third section -->
						<div class="product-sec1 product-sec2 px-sm-5 px-3">
							<div class="row">
								<h3 class="col-md-4 effect-bg">Summer Carnival</h3>
								<p class="w3l-nut-middle">Get Extra 10% Off</p>
								<div class="col-md-8 bg-right-nut">
									<img src="<?=base_url('assets/assetsUser/images/image1.png"')?>" alt="">
								</div>
							</div>
						</div>
						<!-- //third section -->
						<!-- fourth section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
							<h3 class="heading-tittle text-center font-italic">Iphone</h3>
							<div class="row">
								<?php
									for ($x = 1; $x <= 3; $x++) {
								?> 
									<div class="col-md-4 product-men mt-5">
										<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item text-center">
												<img src="<?=base_url('assets/assetsUser/images/m1.jpg')?>" alt="">
												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
														<a href="<?=base_url('user/dashboard/productdetail')?>" class="link-product-add-cart">Quick View</a>
													</div>
												</div>
											</div>
											<div class="item-info-product text-center border-top mt-4">
												<h4 class="pt-1">
													<a href="<?=base_url('user/dashboard/productdetail')?>">Samsung Galaxy J7</a>
												</h4>
												<div class="info-product-price my-2">
													<span class="item_price">$200.00</span>
													<del>$280.00</del>
												</div>
												<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
													<form action="#" method="post">
														<fieldset>
															<input type="hidden" name="cmd" value="_cart" />
															<input type="hidden" name="add" value="1" />
															<input type="hidden" name="business" value=" " />
															<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
															<input type="hidden" name="amount" value="200.00" />
															<input type="hidden" name="discount_amount" value="1.00" />
															<input type="hidden" name="currency_code" value="USD" />
															<input type="hidden" name="return" value=" " />
															<input type="hidden" name="cancel_return" value=" " />
															<!-- <input type="submit" name="submit" value="Add to cart" class="button btn" /> -->
														</fieldset>
													</form>
												</div>
											</div>
										</div>
									</div>
								<?php 
									}
								?>
							</div>
						</div>
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
					
						<!-- //electronics -->
						<!-- delivery -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
							<ul>
								<li>
									<!-- <input type="checkbox" class="checked"> -->
									<span class="span">Eligible for Cash On Delivery</span>
								</li>
							</ul>
						</div>
						
						<!-- //arrivals -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Best Seller</h3>
							<div class="box-scroll">
								<div class="scroll">
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="<?=base_url('assets/assetsUser/images/k1.jpg')?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Samsung Galaxy On7 Prime (Gold, 4GB RAM + 64GB Memory)</a>
											<a href="" class="price-mar mt-2">$12,990.00</a>
										</div>
									</div>
									<div class="row my-4">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="<?=base_url('assets/assetsUser/images/k2.jpg')?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Haier 195 L 4 Star Direct-Cool Single Door Refrigerator</a>
											<a href="" class="price-mar mt-2">$12,499.00</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="<?=base_url('assets/assetsUser/images/k3.jpg')?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Ambrane 13000 mAh Power Bank (P-1310 Premium)</a>
											<a href="" class="price-mar mt-2">$1,199.00 </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="<?=base_url('assets/assetsUser/images/off1.png')?>" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="<?=base_url('assets/assetsUser/images/off2.png')?>" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Electronics :</h2>
				<p class="footer-main mb-4">
					If you're considering a new laptop, looking for a powerful new car stereo or shopping for a new HDTV, we make it easy to
					find exactly what you need at a price you can afford. We offer Every Day Low Prices on TVs, laptops, cell phones, tablets
					and iPads, video games, desktop computers, cameras and camcorders, audio, video and more.</p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Free Shipping</h3>
								<p>on orders over $100</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Fast Delivery</h3>
								<p>World Wide</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Big Choice</h3>
								<p>of Products</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>
							<li class="mb-3">
								<a href="product.html">Mobiles </a>
							</li>
							<li class="mb-3">
								<a href="product.html">Computers</a>
							</li>
							<li class="mb-3">
								<a href="product.html">TV, Audio</a>
							</li>
							<li class="mb-3">
								<a href="product2.html">Smartphones</a>
							</li>
							<li class="mb-3">
								<a href="product.html">Washing Machines</a>
							</li>
							<li>
								<a href="product2.html">Refrigerators</a>
							</li>
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="about.html">About Us</a>
							</li>
							<li class="mb-3">
								<a href="contact.html">Contact Us</a>
							</li>
							<li class="mb-3">
								<a href="help.html">Help</a>
							</li>
							<li class="mb-3">
								<a href="faqs.html">Faqs</a>
							</li>
							<li class="mb-3">
								<a href="terms.html">Terms of use</a>
							</li>
							<li>
								<a href="privacy.html">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> 123 Sebastian, USA.</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 333 222 3333 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> +222 11 4444 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mail 1@example.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mail 2@example.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
						<p class="mb-3">Free Delivery on your first order!</p>
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<input type="submit" value="Go">
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="#">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>

	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2020 WeTech Store. All rights reserved | Design by
				<a href="http://w3layouts.com"> B2.</a>
			</p>
		</div>
	</div>

	<script src="<?=base_url('assets/assetsUser/js/jquery-2.2.3.min.js')?>" ></script>
	
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="<?=base_url('assets/assetsUser/js/jquery.magnific-popup.js')?>" ></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="<?=base_url('assets/assetsUser/js/minicart.js')?>" ></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	
	<!-- scroll seller -->
	<script src="<?=base_url('assets/assetsUser/js/scroll.js')?>"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="<?=base_url('assets/assetsUser/js/SmoothScroll.min.js')?>" ></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="<?=base_url('assets/assetsUser/js/move-top.js')?>"  ></script>
	<script src="<?=base_url('assets/assetsUser/js/easing.js')?>"  ></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});

		function loadtransaction_history(){
			$('#m-transaction').modal('show');
			$('#table-history').DataTable().clear().draw();
			$.ajax({
		        type    : 'POST',
		        dataType: 'json',
		        url     : 'http://localhost/weTech/admin/selling/getTransaction',
		        data    : {
		                    order_status 	: 'SUBMITTED',
		                },
		        success: function(result){

		        	if (result.code == 0) {
					    $('#table-history').DataTable( {
					    	"processing" 	: true,
                    		"serverSide" 	: false,
                    		"paging" 		: true,
                    		"autoWidth"		: true,
                    		"destroy"		: true,
					        "data" 			: result.data,
					        "columns" : [
					            { "data": "name" },
					            { "data": "fullname" },
					            { "data": "receiver" },
					            { "data": "no_mobile" },
					            { "data": "price" },
					            { "data": "order_status" },
					            { "data": "date_transaction" },
					            { "data": function ( data, type, row ) {
									        return "<a href='http://localhost/weTech/user/dashboard/transdetail/?order_id="+data.order_id+"'>Detail</a>";
									    } 
								}
					        ]
					    } );
		        	}
		        },
		        error: function(xhr) {
		           
		            if(xhr.status != 200){
		                alert('gagal , xhr tidak 200'); 
		            }
		        }
		    });
		}
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="<?=base_url('assets/assetsUser/js/bootstrap.js')?>"></script>
	<script src="<?=base_url('assets/assetsUser/js/jquery.dataTables.min.js')?>"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
</body>

</html>