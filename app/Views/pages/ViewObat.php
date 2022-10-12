<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
</head>
<body>

    <a href = "/create" class = "btn btn-primary m-3"> Tambah Obat </a>
    <table class="table table-hover">
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
            <?php?>
            <?php foreach ($obat as $obat):?>
            <tr>
                <td><?php echo $obat['nama_obat']; ?></td>
                <td><?php echo $obat['harga_obat']; ?></td>
                <td><?php echo $obat['stok_obat']; ?></td>
                <td><?php echo $obat['deskripsi_obat']; ?></td>
                <td>
                    <div class="d-flex">
                    <a class="btn btn-warning mr-3" href="/edit/<?= $obat['id_obat']?>">Edit</a>
                    <form action = "/delete/<?= $obat['id_obat']?>" method="post">
                        <input name="_method" value="DELETE" type="hidden">
                        <button type="submit" class="btn btn-danger">Delete</a>
                    </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
