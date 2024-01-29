<?php
include("koneksi.php");
//cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
echo "<h2>Terima kasih telah melakukan pemesanan paket wisata</h2>";
die;
//get data dari query
$id = $_GET['id'];
$sql = "SELECT * FROM pemesanan WHERE id=$id";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama'];
$phone = $row['phone'];
$tgl_pesan = $row['tgl_pesan'];
$travelDate = $row['travelDate'];
$service = $row['service'];
$accomodation = $row['accomodation'];
$transportation = $row['transportation'];
$participants = $row['participants'];
$packagePrice = $row['packagePrice'];
$totalCharge = $row['totalCharge'];

//tampilan konfirmasi\
echo "<h2>Terima kasih telah melakukan pemesanan paket wisata</h2>";
echo "<h3>Berikut adalah data pemesanan anda</h3>";
echo "<table border='1'>";
echo "<tr><td>Nama Pemesan</td><td>$nama</td></tr>";
echo "<tr><td>Nomor HP/Telp</td><td>$phone</td></tr>";
echo "<tr><td>Tanggal Pesan</td><td>$tgl_pesan</td></tr>";
echo "<tr><td>Waktu Pelaksanaan Perjalanan</td><td>$travelDate</td></tr>";
//pelayanan paket perjalanan berisi akomodasi, transportasi, makanan
echo "<tr><td>Pelayanan Paket Perjalanan</td><td>$service</td></tr>";
echo "<tr><td>Akomodasi</td><td>$accomodation</td></tr>";
echo "<tr><td>Transportasi</td><td>$transportation</td></tr>";
echo "<tr><td>Jumlah Peserta</td><td>$participants</td></tr>";
echo "<tr><td>Harga Paket Perjalanan</td><td>$packagePrice</td></tr>";
echo "<tr><td>Jumlah Tagihan</td><td>$totalCharge</td></tr>";
echo "</table>";
echo "<br>";
echo "<a href='index.php'>Kembali ke halaman utama</a>";
