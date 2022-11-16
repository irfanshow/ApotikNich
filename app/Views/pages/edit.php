<?= $this -> extend('template/header')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h2 class="my-5"> Form Edit Data Obat </h2>
                <form method="POST" action="/update/<?= $obat['id_obat']?>" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?= $obat['nama_obat'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_obat">Harga Obat</label>
                        <input type="text" class="form-control" id="harga_obat" name="harga_obat" value="<?= $obat['harga_obat'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="stok_obat">Stok Obat</label>
                        <input type="text" class="form-control" id="stok_obat" name="stok_obat" value="<?= $obat['stok_obat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_obat">Deskripsi Obat</label>
                        <textarea class="form-control" id="deskripsi_obat" rows="6" name="deskripsi_obat"><?=$obat['deskripsi_obat']?></textarea>
                    </div>

                    <div class="form-group mt-3 mb-3">
                        <label for="foto_obat">Foto Obat</label>
                        <input type="file" class="form-control" id="foto_obat" name="foto_obat" value="<?= $obat['foto_obat'] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4 bi bi-send-fill">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</main>
<?= $this -> endSection() ?>