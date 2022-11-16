<?= $this -> extend('template/header')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Obat</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active"> Obat / Tambah Data Obat</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
        <div class="form mt-5">
            <div class="col-5">
                <form method="POST" action="/saveObat" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat">
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_obat">Harga Obat</label>
                        <input type="text" class="form-control" id="harga_obat" name="harga_obat">
                    </div>
                    <div class="form-group mb-3">
                        <label for="stok_obat">Stok Obat</label>
                        <input type="text" class="form-control" id="stok_obat" name="stok_obat">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_obat">Deskripsi Obat</label>
                        <textarea  type="text" class="form-control" id="deskripsi_obat" rows="4" name="deskripsi_obat"></textarea>
                    </div>

                    <div class="form-group mt-3 mb-3">
                        <label for="foto_obat">Foto Obat</label>
                        <input type="file" class="form-control" id="foto_obat" name="foto_obat">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4 bi bi-send-fill">Submit</button>
                </form>
            </div>
        </div>
    
</main>
<?= $this -> endSection() ?>