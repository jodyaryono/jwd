<?php
$startTime = microtime(true);

// Blok kode yang ingin diukur performansinya
for ($i = 0; $i < 10000; $i++) {
   // echo "<br> Cetak terus";
 
    // Proses yang memakan waktu
}

$endTime = microtime(true);
$executionTime = $endTime - $startTime;
echo "<br> Waktu eksekusi adalah: " . $executionTime . " detik";

//penggunan memory
echo "<br> Penggunaan memori sebelum: " . memory_get_usage() . " bytes \n";

// Blok kode yang ingin diukur konsumsi memorinya
$array = range(1, 100000);

echo "<br> Penggunaan memori setelah: " . memory_get_usage() . " bytes \n";

// jumlah query
// Koneksi database
$mysqli = new mysqli("localhost", "root", "423525", "db_wisata");

// Query yang tidak teroptimasi
for ($i = 0; $i < 100; $i++) {
    $mysqli->query("SELECT * FROM pesanan WHERE id = $i");
}

// Query yang teroptimasi
$idRange = range(1, 100);
$idList = implode(',', $idRange);
$mysqli->query("SELECT * FROM pesanan WHERE id IN ($idList)");
// end off Query yang teroptimasi

//end of benchmarking

?>