<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Nilai Mahasiswa</title>
    <script src="script.js"></script>
</head>
<body>
    <?php include '../../header.php' ?>
    <div class="container">
        <h2>Cek Nilai Mahasiswa</h2>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" placeholder="Masukkan NIM">
        <br>
        <label for="nilai">Nilai Mata Kuliah:</label>
        <input type="number" id="nilai" placeholder="Masukkan Nilai">
        <br>
        <button onclick="cekNilai()">Cek Nilai</button>

        <p id="output" class="result"></p>
    </div>
</body>
</html>
