<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include '../../header.php' ?>
    <form action="" method="">
        <input type="text" name="username" required> 
        <textarea name="komentar" rows="4" cols="50" placeholder="Masukkan komentar Anda"></textarea>
        <select name="pilihan">
            <option value="1">Pilihan 1</option>
            <option value="2">Pilihan 2</option>
        </select>
        <label><input type="radio" name="gender" value="male"> Laki-laki</label>
        <label><input type="radio" name="gender" value="female"> Perempuan</label>
        <label><input type="checkbox" name="hobi" value="musik"> Musik</label>
        <label><input type="checkbox" name="hobi" value="olahraga"> Olahraga</label>
        <label><input type="checkbox" name="hobi" value="membaca"> Membaca</label>
        <button type="submit">Kirim</button>
        <button type="button" onclick="alert('Halo!')">Klik Saya</button>
        <label for="file">Pilih File:</label>
        <input type="file" id="file" name="file">
        <button type="submit">Unggah</button>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>