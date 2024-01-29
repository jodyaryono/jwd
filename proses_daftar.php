<?php
//proses_daftar.php 
// Path: proses_daftar.php  
// proses simpan daftar php

include("koneksi.php");
//cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

//get data dari form
$nama = $_POST['nama'];
$phone = $_POST['phone'];
$tgl_pesan = $_POST['tgl_pesan'];
$travelDate = $_POST['travelDate'];

$service = $_POST['service'] ?? 0 > 0 ? 'Y' : 'N';
$accomodation = $_POST['accomodation'] ?? 0 > 0 ? 'Y' : 'N';
$transportation = $_POST['transportation'] ?? 0 > 0 ? 'Y' : 'N';

$participants = $_POST['participants'];
$packagePrice = $_POST['packagePrice'];
$totalCharge = $_POST['totalCharge'];
//simpan ke data base db_wisata table pemesanan
$sql = "INSERT INTO pesanan (nama, phone, tgl_pesan, travel_date, service,accomodation,transportation, participants, package_price, total_charge)";
$sql .= "VALUES ('$nama', '$phone', '$tgl_pesan', '$travelDate', '$service', '$accomodation','$transportation',$participants,$packagePrice, $totalCharge)";
//echo $sql;
//eksekusi sql  
mysqli_query($koneksi, $sql);
// echo $sql;
// die;
$id = mysqli_insert_id($koneksi);
//redirect ke halaman success.php
header("Location: success.html");
