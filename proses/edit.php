<?php

require 'functions.php';

$id_barang = $_GET["id_barang"];

$barang = query("SELECT * FROM `barang` WHERE id_barang=$id_barang")[0];

if (isset($_POST["submit"])) {

    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diupdate');
                document.location.href='../index.php';
            </script>";
    } else {

        echo "
            <script>
                alert('Data gagal diupdate');
                document.location.href='edit.php?id_barang=$id_barang';
            </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Edit Barang</title>
</head>

<body>

    <div class="container">

        <h1 class="h1-style">Edit barang</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_barang" value="<?= $barang["id_barang"] ?>">
            <li>
                <label for="nama">nama Barang</label>
                <input type="text" name="nama" id="nama" value="<?= $barang["nama_barang"] ?>" class="form-style">
            </li>
            <li>
                <label for="stok">Stok barang</label>
                <input type="text" name="stok" id="stok" value="<?= $barang["stok"] ?>" class="form-style">
            </li>

            <button class="btn-edit" type="submit" name="submit" onclick="return confirm('Anda yakin?')">Edit</button>
            <a href="../index.php" class="btn-kembali">Kembali</a>
        </form>
    </div>
</body>

</html>