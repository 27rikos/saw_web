<?php
include("cnnt.php");
$id = $_GET['id'];
$sql = mysqli_query($conn, "delete from pegawai where id_pegawai='$id'");
if ($sql == true) {
    header("location:user.php");
}