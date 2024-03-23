<?php

$conn = mysqli_connect("localhost", "root", "", "inventory");

function query($query)
{

    global $conn;
    $rows = [];
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{

    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $stok = htmlspecialchars($data["stok"]);

    if ($nama == "" || $stok == "") {
        echo "
            <script>
                alert('Harap isi semua data terlebih dahulu');
                document.location.href='tambah.php';
            </script>";
    } else {
        mysqli_query($conn, "INSERT INTO `barang` VALUES ('', '$nama', '$stok')");
        mysqli_affected_rows($conn);
    }

    return $conn;
}

function edit($data)
{

    global $conn;

    $id_barang = $data["id_barang"];
    $nama = htmlspecialchars($data["nama"]);
    $stok = htmlspecialchars($data["stok"]);

    if ($nama == "" || $stok == "") {
        echo "
            <script>
                alert('Harap isi semua data terlebih dahulu');
                document.location.href='edit.php?id_barang=$id_barang';
            </script>";
    } else {
        mysqli_query($conn, "UPDATE `barang` SET `nama_barang` = '$nama', `stok` = '$stok' WHERE `barang`.`id_barang` = $id_barang");
        mysqli_affected_rows($conn);
    }

    return $conn;
}

function hapus($data)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM `barang` WHERE id_barang = $data");
    return $conn;
}
