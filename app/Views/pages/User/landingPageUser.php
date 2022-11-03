<?= $this -> extend('template/headerUser')?>
<?= $this-> section('contentUser')?>

<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Health</p>
							<h1>ApotikNich</h1>
							<div class="hero-btns">
								<a href="#" class="bordered-btn">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->
    <!-- features list section -->
    
	<div class="list-section pt-80 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  
	<!-- end features list section -->
    <!-- product section -->
    <section id="produk" class="produk">
        <div class="product-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">	
                            <h3><span class="orange-text">Our</span> Products</h3>
                            <p>Beberapa produk Obat yang kami tawarkan antara lain</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="/assetsUser/fruit/assets/img/products/antangin.png" alt=""></a>
                            </div>
                            <h3>Antangin</h3>
                            <p class="product-price"> Rp.15.000,00 </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="/assetsUser/fruit/assets/img/products/sakatonikk.png" alt=""></a>
                            </div>
                            <h3>Sakatonik Liver</h3>
                            <p class="product-price"> Rp.25.000,00</p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="/assetsUser/fruit/assets/img/products/paracetamoll.png" alt=""></a>
                            </div>
                            <h3>Paracetamol</h3>
                            <p class="product-price"> Rp.20.000,00 </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- end product section -->
   
    <!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Sistem Informasi Penjualan Apotek adalah suatu kumpulan informasi yang 
                    mendukung suatu proses pemenuhan kebutuhan suatu informasi yang bertanggung 
                    jawab untuk menyediakan informasi penjualan obat dalam satu kesatuan proses yang 
                    bertujuan untuk meningkatkan pelayanan pada Apotek</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Produk</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
 
<?= $this -> endSection() ?>

