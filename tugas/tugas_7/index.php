<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP</title>
</head>
<body>
    <?php include '../../header.php' ?>
    <h1>Menu Navigasi</h1>
    <ul>
        <li><a href="?page=kendaraan">Jenis Kendaraan</a></li>
        <li><a href="?page=bilangan">Bilangan Genap</a></li>
        <li><a href="?page=hewan">Daftar Hewan</a></li>
        <li><a href="?page=ganjilgenap">Cek Ganjil/Genap</a></li>
    </ul>

    <hr>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $file = "$page.php";
        if (file_exists($file)) {
            include($file);
        } else {
            echo "Halaman tidak ditemukan.";
        } 
    } else {
        echo "Silakan pilih menu di atas.";
    }
    ?>
</body>
</html>
