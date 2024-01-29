<?php
//proses_edit.php
// Path: proses_edit.php
// proses edit pesanan php
include("koneksi.php");
//cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
//get data dari form
$id = $_POST['id'];
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
$sql = "UPDATE pesanan SET nama='$nama', 
phone='$phone', 
tgl_pesan='$tgl_pesan', 
travel_date='$travelDate', 
service='$service',
accomodation='$accomodation',
transportation='$transportation', 
participants=$participants, 
package_price=$packagePrice, 
total_charge=$totalCharge WHERE id=$id";
// echo $sql;
// die;
//eksekusi sql
mysqli_query($koneksi, $sql);
//redirect ke halaman admin.html
header("Location: admin.html");