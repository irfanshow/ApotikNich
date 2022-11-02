<?= $this -> extend('template/headerLandingPageUser')?>
<?= $this-> section('contentLandingPageUser')?>

  <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                    <div class="carousel-item active" style="background-image: url(/assetsLandingPageUser/Alstar/assets/img/pharmasi.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>ApotikNich</span></h2>
                                <p class="animate__animated animate__fadeInUp">Sistem Informasi Apotik</p>
                                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Read More</a>
                                <a href="/loginUser" class="btn-get-started scrollto animate__animated animate__fadeInUp">Sign In</a>
                            </div>
                        </div>
                    </div>

            
            </div>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>About</h2>
                <p>Sistem Informasi Penjualan Apotek adalah suatu kumpulan informasi yang 
                    mendukung suatu proses pemenuhan kebutuhan suatu informasi yang bertanggung 
                    jawab untuk menyediakan informasi penjualan obat dalam satu kesatuan proses yang 
                    bertujuan untuk meningkatkan pelayanan pada Apotek</p>
            </div>
        </div>
    </section><!-- End About Section -->

<?= $this -> endSection() ?>

