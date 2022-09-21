<?php

    include "config.php";
    $result = mysqli_query($db, "SELECT * FROM produk");

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
            margin: auto;
            width: fit-content;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Data Barang</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Edit</th>
                <th>Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
            <?php while($datas = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $datas["ID"] ?></td>
                <td>
                    <a href="ubah-data.php<?php echo "?kode=$datas[ID]" ?>">Ubah</a> |
                    <a href="<?php echo "?kode=$datas[ID]" ?>">Hapus</a>
                </td>
                <td><?= $datas["nama_produk"] ?></td>
                <td><?= $datas["keterangan"] ?></td>
                <td><?= $datas["harga"] ?></td>
                <td><?= $datas["jumlah"] ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <br>

        <a href="index.php">
            <button>Kembali</button>
        </a>
    </div>

    <?php

        if (isset($_GET['kode'])) {
            mysqli_query($db, "DELETE FROM produk WHERE ID = '$_GET[kode]'");
            echo "data berhasil terhapus";
            echo "<meta http-equiv=refresh content=2;URL='data-barang.php'>";
        }
    ?>

</body>
</html>