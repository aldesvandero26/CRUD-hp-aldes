<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that hp
$id = $_GET['id'];
 
// Delete hp row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM hp WHERE id=$id");
 
// After delete redirect to Home, so that latest hp list will be displayed.
header("Location:index.php");
