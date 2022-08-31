<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for hp update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama_hp = $_POST['nama_hp'];
    $tipe = $_POST['tipe'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    // update hp data
    $result = mysqli_query($mysqli, "UPDATE hp SET nama_hp='$nama_hp', tipe='$tipe', stok='$stok', harga='$harga' WHERE id=$id");

    // Redirect to homepage to display updated hp in list
    header("Location: index.php");
}
?>
<?php
// Display selected hp data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech hp data based on id
$result = mysqli_query($mysqli, "SELECT * FROM hp WHERE id=$id");

while ($data_hp = mysqli_fetch_array($result)) {
    $nama_hp = $data_hp['nama_hp'];
    $tipe = $data_hp['tipe'];
    $stok = $data_hp['stok'];
    $harga = $data_hp['harga'];
}
?>
<html>

<head>
    <title>Edit Data HP</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <p></p>
        <a href="index.php">Homepage</a>
        <p></p>
        <form name="update_hp" method="post" action="update.php">
            <div class="form-group">
                <label for="">Nama HP</label>
                <input type="text" class="form-control" name="nama_hp" required value=<?php echo $nama_hp; ?>>
            </div>
            <div class="form-group">
                <label for="">Tipe</label>
                <input type="text" class="form-control" name="tipe" required value=<?php echo $tipe; ?>>
            </div>
            <div class="form-group">
                <label for="">Stok</label>
                <input type="text" class="form-control" name="stok" required value=<?php echo $stok; ?>>
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" class="form-control" name="harga" required value=<?php echo $harga; ?>>
            </div>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" class="btn btn-success" name="update" value="Update"></td>
            </tr>

            <script src="asset/js/bootstrap.min.js"></script>
        </form>
    </div>
</body>

</html>