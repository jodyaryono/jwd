<?php
//get parameter id
$id = $_GET['id'];
//koneksi ke database
include("koneksi.php");
$sql = "DELETE FROM pesanan WHERE id=$id";
// echo $sql;   
// die;
mysqli_query($koneksi, $sql);
//redirect ke halaman admin.html
header("Location: admin.html");
