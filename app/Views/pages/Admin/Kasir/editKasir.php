<?= $this -> extend('template/header')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Kasir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active"> Kasir / Edit Data Kasir</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="row">
        <div class="col-5">
            <form method="POST" action="/updateKasir/<?= $kasir['id_kasir']?>">
                <div class="form-group mb-3">
                    <label for="nama_kasir">Nama Obat</label>
                    <input type="text" class="form-control" id="nama_kasir" name="nama_kasir" value="<?= $kasir['nama_kasir'] ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="nama_kasir">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $kasir['username'] ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="nama_kasir">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?= $kasir['password'] ?>">
                </div>
                <button type="submit" class="btn btn-primary mt-4 bi bi-send-fill">Submit</button>
            </form>
        </div>
    </div>
    
</main>
<?= $this -> endSection() ?>