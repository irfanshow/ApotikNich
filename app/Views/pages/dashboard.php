<?= $this -> extend('template/header')?>
<?= $this-> section('contentAdmin')?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container">

      <div class="row">
        <div class="col-md-4 col-xl-3">
          <div class="card bg-c-blue order-card">
            <div class="card-block">
                <h6 class="m-b-2">Total Kasir</h6>
                <h2 class="text-right"><i class="bi bi-person m-3"></i><span><?=$kasir?></span></h2>
                <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
            </div>
          </div>
        </div>
            
        <div class="col-md-4 col-xl-3">
          <div class="card bg-c-yellow order-card">
            <div class="card-block">
                <h6 class="m-b-20">Total Obat</h6>
                <h2 class="text-right"><i class="bi bi-capsule m-3"></i></i><span><?=$obat?></span></h2>
                        <!-- <p class="m-b-0">Completed Orders<span class="f-right"></span></p> -->
            </div>
          </div>
        </div>

      </div>
    </div> <!--end container-->

</main>
<?= $this -> endSection() ?>