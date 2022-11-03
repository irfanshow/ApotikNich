<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>ApotikNich</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="/assetsUser/fruit/assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="/assetsUser/fruit/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="/assetsUser/fruit/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="/assetsUser/fruit/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="/assetsUser/fruit/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="/assetsUser/fruit/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="/assetsUser/fruit/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="/assetsUser/fruit/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="/assetsUser/fruit/assets/css/responsive.css">

</head>
<body>
	<!--PreLoader-->
	<div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
		<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-sm-10 text-center">
					<div class="main-menu-wrap align-middle">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="/assetsUser/fruit/assets/img/apotik.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a class="nav-link scrollto"><a href="#">Home</a></li>
								<li><a class="nav-link scrollto" href="#">About</a></li>
                                <li><a class="nav-link scrollto" href="#produk">Produk</a></li>
                                <li><a href="/loginUser">Sign In</a></li>
                                <li>
									<div class="header-icons">
										<a class="shopping-cart" href="#"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- jquery -->
	<script src="/assetsUser/fruit/assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="/assetsUser/fruit/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="/assetsUser/fruit/assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="/assetsUser/fruit/assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="/assetsUser/fruit/assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="/assetsUser/fruit/assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="/assetsUser/fruit/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="/assetsUser/fruit/assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="/assetsUser/fruit/assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="/assetsUser/fruit/assets/js/main.js"></script>
    <?= $this->renderSection('contentUser') ?>

</body>
</html>