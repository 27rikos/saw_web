<?php
include("cnnt.php");
$id = $_GET['id'];
$sql = mysqli_query($conn, "delete from alternatif where id_alternatif='$id'");
if ($sql == true) {
    header("location:alternatif.php");
}