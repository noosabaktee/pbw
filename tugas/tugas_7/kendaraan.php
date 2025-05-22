<h2>Cek Jenis Kendaraan</h2>
<form method="post">
    Masukkan jumlah roda: 
    <input type="number" name="roda" required>
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['roda'])) {
    $jumlah_roda = (int) $_POST['roda'];

    switch ($jumlah_roda) {
        case 2:
            echo "Kendaraan ini adalah Sepeda Motor.";
            break;
        case 3:
            echo "Kendaraan ini adalah Becak atau Bajaj.";
            break;
        case 4:
            echo "Kendaraan ini adalah Mobil.";
            break;
        case 6:
            echo "Kendaraan ini adalah Truk Kecil.";
            break;
        case 8:
        case 10:
            echo "Kendaraan ini adalah Truk Besar.";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui.";
            break;
    }
}
?>
