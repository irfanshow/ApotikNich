<?= $this -> extend('template/header')?>
<?= $this-> section('contentAdmin')?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kasir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Kasir</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <a href = "/tambahKasir" class = "btn btn-primary mb-5 bi bi-plus-square-fill"> Tambah Data Kasir </a>
    <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kasir</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kasir as $kasir):?>
                <tr>
                    <td><?php echo $kasir['id_kasir'];?></td><br>
                    <td><?php echo $kasir['nama_kasir']; ?></td>
                    <td>
                        <div class="d-flex">
                            <div class="box">
                                <a class="btn btn-warning bi bi-pencil-fill mr-3 ml-3" href="/editKasir/<?= $kasir['id_kasir']?>"></a>
                            </div>
                            <div class="box">
                                <form action = "/deleteKasir/<?= $kasir['id_kasir']?>" method="post">
                                    <input name="_method" value="DELETE" type="hidden">
                                    <button type="submit" class="btn btn-danger bi bi-trash3-fill mr-3 ml-3"></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

</main>

<?= $this -> endSection() ?>
