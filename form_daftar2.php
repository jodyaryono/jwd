<link rel="stylesheet" href="css/form_daftar.css">

<form id="bookingForm" method="post" action="proses_daftar.php">
    <h2>Form Pemesanan Paket Wisata</h2>

    <label for="name">Nama Pemesan:</label>
    <input title="nama" type="text" id="nama" name="nama" required><br>

    <label for="phone">Nomor HP/Telp:</label>
    <input title="phone" type="text" id="phone" name="phone" required><br>

    <label for="tgl_pesan">Tanggal Pesan:</label>
    <input title="tgl_pesan" type="date" id="tgl_pesan" name="tgl_pesan" required><br>

    <label for="travelDate">Waktu Pelaksanaan Perjalanan:</label>
    <input type="text" id="idtravelDate" name="travelDate" required><br>

    <label>Pelayanan Paket Perjalanan:</label>
    <label for="accomodation">Penginapan (Rp 1000.000) <input title="Akomodasi" type="checkbox" id="accomodation" name="accomodation"
            value="1000000"></label>

    <label for="Transportation">Transportasi (Rp 1.200.000)<input title="Transportasi" type="checkbox" id="transportation"
            name="transportation" value="1200000"></label>

    <label for="Service">Servis/Makan (Rp 500.000) <input title="Servis/Makanan" type="checkbox" id="service" name="service"
            value="500000"> Makanan</label>

    <label for="participants">Jumlah Peserta:</label>
    <input type="number" id="participants" name="participants" required><br>

    <label for="packagePrice">Harga Paket Perjalanan:</label>
    <input type="text" id="packagePrice" name="packagePrice" readonly><br>

    <label for="totalCharge">Jumlah Tagihan:</label>
    <input type="text" id="totalCharge" name="totalCharge" readonly><br>

    <button type="submit" id="saveButton" class="btn btn-primary">Simpan</button>
    <button type="button" id="saveHitung" class="btn btn-primary">Hitung</button>
    <button type="reset" id="resetButton" class="btn btn-danger">Reset</button>

</form>
<!-- load form_daftar.js -->
<!-- <script src="js/form_daftar.js"></script> -->

<script>
$(document).ready(function() {
    //definisi variabel ambil dari daftar.html yang sudah ada parameternya dari paket.html
    // baris 14 <a href="daftar.html?days=2&accommodation=Y&transportation=Y&service=Y&participants=1"
    
    var urlParams = new URLSearchParams(window.location.search);

    $('#idtravelDate').val(urlParams.get('days'));
    $('#accomodation').prop('checked', urlParams.get('accomodation') === 'Y');
    $('#transportation').prop('checked', urlParams.get('transportation') === 'Y');
    $('#service').prop('checked', urlParams.get('service') === 'Y');
    $('#participants').val(urlParams.get('participants'));

    var participants = urlParams.get('participants');
    $('#participants').val(participants ? participants : '1');

    var travelDate = urlParams.get('days');
    $('#travelDate').val(travelDate ? travelDate : '1');

    updateCharges();

    function calculateTotal() {
        var total = 0;
        $('input[name="service"]:checked').each(function() {
            total += parseInt($(this).val());
        });
        $('input[name="accomodation"]:checked').each(function() {
            total += parseInt($(this).val());
        });
        $('input[name="transportation"]:checked').each(function() {
            total += parseInt($(this).val());
        });
        return total;
    }

    function updateCharges() {
        var participants = $('#participants').val();
        var days = $('#idtravelDate').val(); // Assume this field contains the number of days
        var serviceTotal = calculateTotal();
        $('#packagePrice').val(serviceTotal);

        var totalCharge = participants * days * serviceTotal;
        $('#totalCharge').val(totalCharge);
    }

    $('input[name="transportation"],input[name="accomodation"],input[name="service"], #participants, #travelDate')
        .change(
            function() {
                updateCharges();
            });

    $('#cancelButton').click(function() {
        $('#bookingForm')[0].reset();
        updateCharges();
    });

  //  $('#participants, #idtravelDate').change(function() {
  //      updateCharges();
  //  });


    $('#saveHitung').click(function() {
        updateCharges();
    });
});
</script>