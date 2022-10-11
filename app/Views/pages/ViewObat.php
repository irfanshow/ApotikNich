<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
</head>
<body>
    
    <table class="table">

    <th>Nama Obat</th>
    <th>Harga Obat</th>
    <th>Stok Obat</th>
    <th>Deskripsi Obat</th>
  </tr>
 
    <?php
    foreach ($obat as $obat) {
    // var_dump($obat);
    ?>
    <tr>
        <td><?php echo $obat['nama_obat']; ?></td>
        <td><?php echo $obat['harga_obat']; ?></td>
        <td><?php echo $obat['stok_obat']; ?></td>
        <td><?php echo $obat['deskripsi_obat']; ?></td>
    </tr>
    <?php
    }
    ?>
</table>

    
</body>
</html>