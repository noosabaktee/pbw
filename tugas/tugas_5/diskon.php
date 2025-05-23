<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
</head>
<body>
    <?php include '../../header.php' ?>
    <?php 
        if(!empty($_POST["npm"])){
            $npm = $_POST["npm"];
            $nama = $_POST["nama"];
            $prodi = $_POST["prodi"];
            $semester = $_POST["semester"];
            $ukt = $_POST["ukt"];
            $diskon = 0;
            if($ukt >= 5000000){
                $diskon = 0.1;
                if($semester > 8){
                    $diskon = 0.15;
                }
            }
            $total = $ukt - ($ukt * $diskon);
            echo "NPM:" . $npm . "NAMA:" . $nama . "<br>PRODI:" . $prodi . "<br>SEMESTER:" . $semester . "<br>BIAYA UKT:" . $ukt . "<br>DISKON:" . ($diskon * 100) . "%" . "<br>YANG HARUS DIBAYAR:" . $total;
        }
    ?>
    <form action="" method="POST">
        NPM: <input type="text" name="npm"><br>
        Nama: <input type="text" name="nama"><br>
        Prodi: <input type="text" name="prodi"><br>
        Semester: <input type="text" name="semester"><br>
        Ukt: <input type="text" name="ukt"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>