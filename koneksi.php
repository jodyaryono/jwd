<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "423525", "db_wisata");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
