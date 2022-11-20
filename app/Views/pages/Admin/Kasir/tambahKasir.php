<?= $this -> extend('template/header')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Kasir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active"> Kasir / Tambah Data Kasir</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="form mt-5">
        <div class="col-5">
            <form method="POST" action="/saveDataKasir">
                <div class="form-group mb-3">
                    <label for="nama_kasir">Nama Kasir</label>
                    <input type="text" class="form-control" id="nama_kasir" name="nama_kasir">
                </div>
<<<<<<< Updated upstream
=======

                <div class="form-group mb-3">
                    <label for="nama_kasir">UserName</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group mb-3">
                    <label for="nama_kasir">Password</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>


>>>>>>> Stashed changes
                <button type="submit" class="btn btn-primary mt-4 bi bi-send-fill">Submit</button>
            </form>
        </div>
    </div>
    
</main>
<?= $this -> endSection() ?>