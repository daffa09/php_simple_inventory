<?php

require 'proses/functions.php';

$barang = query("SELECT * FROM `barang`");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <script src="assets/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: rgb(8, 71, 71);
        }
    </style>
    <script>
        $(document).ready(function() {
            $(".btn-hapus").click(function() {
                confirm("Anda yakin ingin menghapus data ini?");
            });
        });
    </script>
    <title>Inventory sederhana</title>
</head>

<body>

    <div class="container rounded bg-white mt-5">

        <div class="table-responsive fs-6 box-table">

            <h1 class="pt-3 pb-3">Inventory sederhana</h1>

            <a class="btn btn-primary mb-3" href="proses/tambah.php">Tambah</a>
            <a class="btn btn-danger mb-3" href="proses/cetak.php">Cetak</a>

            <table class="table table-striped table-sm table-bordered mb-5" style="text-align: center;" border="1">
                <thead>
                    <tr>
                        <th>No Barang</th>
                        <th>Nama barang</th>
                        <th>Jumlah barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach ($barang as $brg) : ?>
                        <tr>
                            <th><?= $brg["id_barang"]; ?></th>
                            <th><?= $brg["nama_barang"]; ?></th>
                            <th><?= $brg["stok"]; ?></th>
                            <th>
                                <a class="btn btn-warning text-white text-decoration-none" href="proses/edit.php?id_barang=<?= $brg["id_barang"] ?>">Edit</a>
                                <a class="btn btn-danger text-white text-decoration-none btn-hapus" href="proses/hapus.php?id_barang=<?= $brg["id_barang"] ?>">Hapus</a>
                            </th>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</body>



</html>