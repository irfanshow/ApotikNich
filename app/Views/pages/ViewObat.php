<?= $this -> extend('template/header')?>
<?= $this-> section('contentAdmin')?>
<main id="main" class="main">
    <a href = "/create" class = "btn btn-primary m-3 bi bi-plus-square-fill"> Tambah Obat </a>
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama Obat</th>
                <th scope="col">Harga Obat</th>
                <th scope="col">Stok Obat</th>
                <th scope="col">Deskripsi Obat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($obat as $obat):?>
            <tr>
                <td><?php echo $obat['nama_obat']; ?></td>
                <td><?php echo $obat['harga_obat']; ?></td>
                <td><?php echo $obat['stok_obat']; ?></td>
                <td><?php echo $obat['deskripsi_obat']; ?></td>
                <td>
                    <div class="d-flex">
                    <a class="btn btn-warning bi bi-pencil-fill mr-3 ml-3" href="/edit/<?= $obat['id_obat']?>"></a>
                    <form action = "/delete/<?= $obat['id_obat']?>" method="post">
                        <input name="_method" value="DELETE" type="hidden">
                        <button type="submit" class="btn btn-danger bi bi-trash3-fill mr-3 ml-3"></button>
                    </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?= $this -> endSection() ?>
