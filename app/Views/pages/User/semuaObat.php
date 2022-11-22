<?= $this -> extend('template/semuaObatTemplate')?>
<?= $this-> section('contentSemuaObat')?>



   
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

                <form action="" method="get" class="form-inline mb-2">
                    <div>
                        <input type="text" name="keyword" value="" class="form-control" placeholder="Cari Obat" style="width:155pt">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary ml-1">Cari</button>
                    </div>
                </form>

                <div class="row">
                <?php foreach ($obat as $obat) : 

                    if ($obat['id_obat'] == 9) {
                        break;
                    }
                    ?>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">

                            <div class="product-image ">
                                <a href="#"><img src="/assets/img/<?=$obat['foto_obat']?>" alt="Tidak ada foto"></a>
                                
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
	<!-- end product section -->
   

 
<?= $this -> endSection() ?>

