<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Checkout :: w3layouts</title>
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
	<link href="<?=base_url('assets/assetsUser/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="<?=base_url('assets/assetsUser/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="<?=base_url('assets/assetsUser/css/fontawesome-all.css')?>">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="<?=base_url('assets/assetsUser/css/popuo-box.css')?>" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="<?=base_url('assets/assetsUser/css/menu.css')?>" rel="stylesheet" type="text/css" media="all" />

	<!-- web fonts -->
	<link href="<?=base_url('assets/assetsUser/css/font-style.css')?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=base_url('assets/assetsUser/css/font-style-2.css')?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?=base_url('assets/assetsUser/css/jquery.dataTables.min.css')?>" rel="stylesheet" type="text/css" media="all" />
	<!-- //web fonts -->
</head>

<body>
	<!-- top-header -->
	<div id="checkout-content">
		
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
								<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
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
						            <a href="http://localhost/weTech/admin/auth/logout/" class="text-white">Logout</a>
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
						<form method="POST" action="<?php echo base_url(); ?>index.php/user/usermgt/insert">
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
						
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					    aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto text-center mr-xl-5">
							<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="http://localhost/weTech/user/">Home
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
							<?php if (isset($this->session->userdata['login'])){ ?>
								<li class="nav-item">
									<a href="#" onclick="loadtransaction_history()" class="nav-link">My Order </a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!-- //navigation -->

		<!-- checkout page -->
		<div class="privacy py-sm-5 py-4">
			<div class="container py-xl-4 py-lg-2">
				<!-- tittle heading -->
				<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
					<span>Transaction </span> Detail
				</h3>
				<!-- //tittle heading -->
				<div class="row">
					<div class="col-sm-9" style="border: 1px solid black;">
						<h2>Detail </h2> 
						<div class="col-sm-12">
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left red">Transaction Number </label>
								<div class="col-xs-3">
									<input type="text" id="order_id" class="form-control" hidden="" value="8" />
									<input type="text" id="order_idx" class="form-control" style="height: 32px;" disabled=""/>
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left ">Date Transaction </label>
								<div class="col-xs-3">
									<input type="text" id="date_trans" class="form-control" style="height: 32px;" disabled="" />
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left ">Date of Receipt </label>
								<div class="col-xs-3">
									<input type="text" id="date_receipt" class="form-control" style="height: 32px;" disabled="" />
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left ">Alamat Penerima</label>
								<div class="col-xs-3">
									<textarea placeholder="Alamat Penerima" class="form-control" id="address" disabled=""></textarea>
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left">Nomor Handphone</label>
								<div class="col-xs-3">
									<input type="text" id="mobile" class="form-control" style="height: 32px;" disabled=""/>
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left ">Keterangan Tambahan </label>
								<div class="col-xs-3">
									<textarea class="form-control" id="ket" disabled=""></textarea>
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left ">Status </label>
								<div class="col-xs-3">
									<input type="text" id="status" class="form-control" style="height: 32px;" disabled=""/>
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left ">Jasa Pengiriman </label>
								<div class="col-xs-3">
									<input type="text" id="jasping" class="form-control" style="height: 32px;" value="JNE" disabled=""/>
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left ">No Resi </label>
								<div class="col-xs-3">
									<input type="text" id="noresi" class="form-control" style="height: 32px;"  disabled=""/>
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left ">Smartphone </label>
								<div class="col-xs-3">
									<input type="text" id="spdes" class="form-control" style="height: 32px;" value="Samsung Galaksi J7" disabled="" />
								</div>
							</div>
							<div class="form-group">
								<label id="label-acc" class="col-xs-3 control-label no-padding-left ">Amount </label>
								<div class="col-xs-3">
									<input type="text" id="price" class="form-control" style="height: 32px;" disabled="" />
								</div>
							</div>
<!-- 
							<div class="col-sm-5" style="background: #eaeaea;color: black;">Transaction Number <br><span>11241241241</span></div>

							<div class="col-sm-3" style="background: #b0b0b0;color: black;">Transaction Number <br><span>11241241241</span></div> -->
						</div>
						<div class="panel-footer"><a href="#" class="btn btn-success" id="brg-konfirm" style="display: block;" > Barang Diterima </a></div>
					</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- //checkout page -->
	</div>

		<!-- copyright -->
		<div class="copy-right py-3">
			<div class="container">
				<p class="text-center text-white">© 2020 WeTech Store. All rights reserved | Design by
					<a href="http://w3layouts.com"> B2.</a>
				</p>
			</div>
		</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="<?=base_url('assets/assetsUser/js/jquery-2.2.3.min.js')?>"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
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
	<script src="<?=base_url('assets/assetsUser/js/jquery.magnific-popup.js')?>"></script>
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
	<script src="<?=base_url('assets/assetsUser/js/minicart.js')?>"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js')?>

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

	<!-- start-smooth-scrolling -->

	<script src="<?=base_url('assets/assetsUser/js/move-top.js')?>"></script>
	<script src="<?=base_url('assets/assetsUser/js/easing.js')?>"></script>
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
		
		$("#brg-konfirm").css("display", "none");
		
		const queryString 	= window.location.search;
		const urlParams 	= new URLSearchParams(queryString);
		const orderid 		= urlParams.get('order_id');

		if (orderid) {
			loadtransaction(orderid);
		}

		$('#brg-konfirm').click(function(){

			// var orderid 		= $('#order_id').val();
			// var orderid 		= 1;

			$.ajax({
		        type    : 'POST',
		        dataType: 'json',
		        url     : 'http://localhost/weTech/admin/selling/updTransaction',
		        data    : {
		                    order_id 	: orderid,
		                    status		: 'FINISH',
		                },
		        success: function(result){

		            if (result['code'] == 0 ) {
		                alert('Konfirmasi barang telah diterima berhasil!');
		                loadtransaction(orderid);
		            }else{
		                alert('Konfirmasi barang telah diterima gagal!');
		                loadtransaction(orderid);
		            }

		        },
		        error: function(xhr) {
		           
		            if(xhr.status != 200){
		                alert('gagal , xhr tidak 200'); 
		            }
		        }
		    });
			
		});

		function loadtransaction(orderid){

			$.ajax({
		        type    : 'POST',
		        dataType: 'json',
		        url     : 'http://localhost/weTech/admin/selling/getTransaction',
		        data    : {
		                    order_id 	: orderid,
		                    shipping	: 'yes',
		                },
		        success: function(result){
		        	console.log(result['data']);
		        	if (result.code == 0) {
					    $('#order_id').val(result['data'][0].order_id);
					    $('#order_idx').val(result['data'][0].order_id);
					    $('#ket').val(result['data'][0].order_desc);
					    
					    $('#address').val(result['data'][0].address);
					    $('#price').val(result['data'][0].price);
					    $('#penerima').val(result['data'][0].receiver);
					    $('#mobile').val(result['data'][0].no_mobile);
					    $('#spdes').val(result['data'][0].name);
					    $('#date_trans').val(result['data'][0].date_transaction);
					    $('#date_receipt').val(result['data'][0].date_receipt);
					    $('#noresi').val(result['data'][0].code_resi);

					    if (result['data'][0].order_status == 'TOCUSTOMER') {
					    	$('#status').val('Need Confirm');
					    	$("#brg-konfirm").css("display", "block");
					    }else if (result['data'][0].order_status == 'FINISH') {
					    	$('#status').val('COMPLETED');
					    	$("#brg-konfirm").css("display", "none");

					    }else{
					    	$("#brg-konfirm").css("display", "none");
					    	$('#status').val('On Progress');
					    }

		        	}
		        },
		        error: function(xhr) {
		           
		            if(xhr.status != 200){
		                alert('gagal , xhr tidak 200'); 
		            }
		        }
		    });
		}

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

	<script src="<?=base_url('assets/assetsUser/js/bootstrap.js')?>"></script>
	<script src="<?=base_url('assets/assetsUser/js/jquery.dataTables.min.js')?>"></script>

</body>

</html>