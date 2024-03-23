<?php

require 'functions.php';

$barang = query("SELECT * FROM `barang`");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(8, 71, 71);
        }
    </style>
    <title>Inventory sederhana</title>
</head>

<body>

    <div class="container rounded bg-white mt-5">

        <div class="table-responsive fs-6 box-table">

            <a href="../index.php" class="btn btn-primary mt-5">Kembali</a>

            <h1 class="pt-3 pb-3">Inventory sederhana</h1>

            <table class="table table-striped table-sm table-bordered mb-5" style="text-align: center;" border="1">
                <thead>
                    <tr>
                        <th>No Barang</th>
                        <th>Nama barang</th>
                        <th>Jumlah barang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    <?php foreach ($barang as $brg) : ?>
                        <tr>
                            <th><?= $brg["id_barang"]; ?></th>
                            <th><?= $brg["nama_barang"]; ?></th>
                            <th><?= $brg["stok"]; ?></th>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/jquery-3.6.0.min.js"></script>
    <script>
        window.print();
    </script>
</body>



</html>