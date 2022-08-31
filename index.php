<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM hp ORDER BY id DESC");
?>

<html>

<head>
    <title>Homepage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container">
        <p></p>
        <a class="btn btn-primary" href="tambah.php">Tambah HP Baru</a><br />
        <p></p>
        <table class="table table-bordered table-hover table-striped">

            <tr>
                <th>Id</th>
                <th>Nama Hp</th>
                <th>Tipe</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
            <?php
            while ($data_hp = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $data_hp['id'] . "</td>";
                echo "<td>" . $data_hp['nama_hp'] . "</td>";
                echo "<td>" . $data_hp['tipe'] . "</td>";
                echo "<td>" . $data_hp['stok'] . "</td>";
                echo "<td>" . $data_hp['harga'] . "</td>";
                echo "<td><a href='update.php?id=$data_hp[id]'>Edit</a> | <a href='delete.php?id=$data_hp[id]'>Delete</a></td></tr>";
            }
            ?>
        </table>
    </div>


    <script src="asset/js/bootstrap.min.js"></script>
</body>

</html>