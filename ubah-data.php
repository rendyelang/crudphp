<?php
    include "config.php";

    $sql = mysqli_query($db, "SELECT * FROM produk WHERE ID = '$_GET[kode]' ");
    $data = mysqli_fetch_assoc($sql);
?>

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
        <h2>Ubah data barang</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td>: <input placeholder="harus numbers" type="text" name="ID" value="<?= $data['ID']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td>: <input placeholder="harus tulisan" type="text" name="nama_produk" value="<?= $data['nama_produk']; ?>"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>: <input placeholder="harus tulisan" type="text" name="keterangan" value="<?= $data['keterangan']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: <input placeholder="harus numbers" type="text" name="harga" value="<?= $data['harga']; ?>"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: <input placeholder="harus numbers" type="text" name="jumlah" value="<?= $data['jumlah']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan" name="proses" value="simpan"></td>
                </tr>
            </table>
        </form>
        <br>
        <h2>Ingin lihat data barang?</h2>
        <a href="data-barang.php" style="margin-right: 15px;">
            <button>Kembali</button>
        </a>
        <a href="data-barang.php">
            <button>Lihat Barang</button>
        </a>
    </div>
</body>
</html>

<?php


if (isset($_POST['proses'])) {
    mysqli_query($db, "update produk set 
    nama_produk = '$_POST[nama_produk]',
    keterangan = '$_POST[keterangan]',
    harga = '$_POST[harga]',
    jumlah = '$_POST[jumlah]'
    where ID = '$_GET[kode]'");
    echo "Data barang telah diubah!";
    echo "<meta http-equiv=refresh content=1;URL='data-barang.php'>";
}

?>