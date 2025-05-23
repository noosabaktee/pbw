<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <?php include '../../header.php' ?>
    <form action="" method="">
        <label>Nama: <input type="text" name="nama" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Jenis Kelamin:</label>
        <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label><br>
        <label>Hobi:</label>
        <label><input type="checkbox" name="hobi" value="Musik">Musik</label>
        <label><input type="checkbox" id="olahraga" name="hobi" value="Olahraga">Olahraga</label><br>
        <label>Pilih Kota:</label>
        <select name="kota">
            <option value="Jakarta">Jakarta</option>
            <option value="Bandung">Bandung</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Karawang">Karawang</option>
            <option value="Malang">Malang</option>
        </select><br>
        <label for="foto">Upload Foto:</label>
        <input type="file" id="foto" name="foto"><br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>