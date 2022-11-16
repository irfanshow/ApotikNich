<?= $this -> extend('template/headerKasir')?>
<?= $this-> section('contentKasir')?>

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
    <!-- product section -->
    <section id="produk" class="produk">
        <div class="product-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">	
                            <h3><span class="orange-text">Our</span> Products</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                <?php foreach ($obat as $obat) : 
                    if ($obat['id_obat'] == 9) {
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
                 <?= $pager->links('page','bootstrap') ?>
            </div>
        </div>
                    

    </section>
                    

    </section>
	<!-- end product section -->
   

 
<?= $this -> endSection() ?>

