<?php
include("cnnt.php");
$id = $_GET['id'];
$sql = mysqli_query($conn, "delete from konversi where kode='$id'");
if ($sql == true) {
    header("location:alternatif.php");
}