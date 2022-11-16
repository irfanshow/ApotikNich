<?= $this -> extend('template/headerUser')?>
<?= $this-> section('contentUser')?>

<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Health</p>
							<h1>ApotikNich</h1>
							<div class="hero-btns">
								<a href="#produk" class="bordered-btn">Lihat Produk</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->
	<!--section About-->
	<section id="about" class="about">
        <div class="product-section mt-100 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">	
                            <h3><span class="orange-text">About</span></h3>
                            <p>Sistem Informasi Penjualan Apotek adalah suatu kumpulan informasi yang mendukung suatu proses pemenuhan kebutuhan suatu informasi yang bertanggung jawab untuk menyediakan informasi penjualan obat dalam satu kesatuan proses yang bertujuan untuk meningkatkan pelayanan pada Apotek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
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
                <?php foreach ($obat as $obat) : 
                    if ($obat['id_obat'] == 4) {
                        break;
                    }?>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="#"><img src="/assetsUser/fruit/assets/img/products/antanginnnn.png" alt=""></a>
                            </div>
                            <h3><?php echo $obat['nama_obat'];?></h3>


                            <p class="product-price"> Rp.<?php echo $obat['harga_obat'];?> </p>

                            <!-- <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Tambahkan </a> -->
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
            </div>
            <div class="text-center ">
                <a href="/SemuaObat" class="cart-btn  btn-lg mb-2 "> Lihat Semua </a>
            </div>
        </div>
                    

    </section>
	<!-- end product section -->
   

 
<?= $this -> endSection() ?>

