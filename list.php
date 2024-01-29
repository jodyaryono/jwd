<?php
//list data pesanan
include("koneksi.php");
//cek koneksi

//get semua data pesanan
$sql = "SELECT * FROM pesanan";
$result = mysqli_query($koneksi, $sql);
// echo $sql;
// die;
//tampilan data pesanan
?>
<h2>Daftar Pesanan</h2>
<table border="1" class="table table-responsive">
    <tr>
        <th>Tanggal</th>
        <th>Nama </th>
        <th>Phone </th>
        <th>Jumlah Peserta</th>
        <th>Jumlah Hari</th>
        <th>Akomodasi</th>
        <th>Transportasi</th>
        <th>Service/Makanan</th>
        <th>Harga Paket</th>
        <th>Total Tagihan</th>
        <th>Aksi</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["tgl_pesan"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["participants"] . "</td>";
            echo "<td>" . $row["travel_date"] . "</td>";
            echo "<td>" . $row["accomodation"] . "</td>";
            echo "<td>" . $row["transportation"] . "</td>";
            echo "<td>" . $row["service"] . "</td>";
            echo "<td>" . number_format($row["package_price"]) . "</td>";
            echo "<td>" . number_format($row["total_charge"]) . "</td>";
            echo "<td>";
            echo "<div class='btn-group' role='group' aria-label='Basic example'>";
            echo "<a href='edit_pesanan.php?id=" . $row["id"] . "' class='btn btn-primary'><i class='bi bi-pencil-fill'></i> Edit</a>";
            echo "<a onclick='return confirm(\"Anda yakin akan hapus?\")' href='delete_pesanan.php?id=" . $row["id"] . "' class='btn btn-danger'><i class='bi bi-trash-fill'></i> Delete</a>";
            echo "</div>";
            echo "</td>";
            // Add more columns as needed
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
</table>