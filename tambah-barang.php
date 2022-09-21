<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my store</title>
    <style>
        .card {
            width: fit-content;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Tambah barang</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Produk</td>
                    <td>: <input placeholder="harus tulisan" type="text" name="nama_produk"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>: <input placeholder="harus tulisan" type="text" name="keterangan"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: <input placeholder="harus numbers" type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: <input placeholder="harus numbers" type="text" name="jumlah"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan" name="proses"></td>
                </tr>
            </table>
        </form>
        <br>
        <h2>Ingin lihat data barang?</h2>
        <a href="index.php" style="margin-right: 15px;">
            <button>Kembali</button>
        </a>
        <a href="data-barang.php">
            <button>Lihat Barang</button>
        </a>
    </div>
</body>
</html>

<?php

include "config.php";

if (isset($_POST['proses'])) {
    mysqli_query($db, "insert into produk set 
    nama_produk = '$_POST[nama_produk]',
    keterangan = '$_POST[keterangan]',
    harga = '$_POST[harga]',
    jumlah = '$_POST[jumlah]'");
    echo "Data barang baru berhasil tersimpan!";
}

?>