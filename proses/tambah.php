<?php

require 'functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambah');
                document.location.href='../index.php';
            </script>";
    } else {

        echo "
            <script>
                alert('Data gagal ditambah');
                document.location.href='tambah.php';
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

    <title>Tambah Barang</title>
</head>

<body>

    <div class="container">

        <h1 class="h1-style">Tambah barang</h1>

        <form action="" method="post" enctype="multipart/form-data" id="tambah">
            <li>
                <label for="nama">nama Barang</label>
                <input type="text" name="nama" id="nama" class="form-style">
            </li>
            <li>
                <label for="stok">Stok barang</label>
                <input type="text" name="stok" id="stok" class="form-style">
            </li>

            <button class="btn-tambah" type="submit" name="submit" onclick="return confirm('Anda yakin?')">Kirim</button>
            <button class="btn-reset" onclick="reset()">Reset</button>
            <a href="../index.php" class="btn-kembali">Kembali</a>
        </form>
    </div>
    <script src="../assets/jquery-3.6.0.min.js"></script>
    <script>
        function reset() {
            document.getElementById("tambah").reset();
        }
    </script>
</body>

</html>