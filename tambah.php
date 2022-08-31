<html>

<head>
    <title>Tambah HP</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <p></p>
        <a href="index.php">Kembali ke Homepage</a>
        <form action="tambah.php" method="post" name="form1">
            <div class="form-group">
                <label for="">Nama HP</label>
                <input type="text" class="form-control" name="nama_hp" placeholder='Nama HP' required />
            </div>
            <div class="form-group">
                <label for="">Tipe</label>
                <input type="text" class="form-control" name=tipe placeholder='Tipe' required />
            </div>
            <div class="form-group">
                <label for="">Stok</label>
                <input type="text" class="form-control" name="stok" placeholder='Stok' required />
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" class="form-control" name="harga" placeholder='Harga' required />
            </div>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" name="Submit" value="Tambah"></td>
            </tr>

            <script src="asset/js/bootstrap.min.js"></script>
        </form>
        <?php

        // Check If form submitted, insert form data into hp table.
        if (isset($_POST['Submit'])) {
            $nama_hp = $_POST['nama_hp'];
            $tipe = $_POST['tipe'];
            $stok = $_POST['stok'];
            $harga = $_POST['harga'];

            // include database connection file
            include_once("config.php");

            // Insert hp data into table
            $result = mysqli_query($mysqli, "INSERT INTO hp(nama_hp, tipe, stok, harga) VALUES('$nama_hp','$tipe','$stok','$harga')");

            // Show message when hp added
            echo "HP berhasil ditambahkan. <a href='index.php'>Lihat semua data HP</a>";
        }
        ?>
    </div>

    <br /><br />




</body>

</html>