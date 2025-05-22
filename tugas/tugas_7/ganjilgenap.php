<h2>Cek Angka Ganjil atau Genap</h2>
<form method="post">
    Masukkan angka: 
    <input type="number" name="angka" required>
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['angka'])) {
    $angka = (int) $_POST['angka'];

    echo "Angka: $angka<br>";
    echo ($angka % 2 == 0) ? "Angka ini adalah Genap." : "Angka ini adalah Ganjil.";
}
?>
