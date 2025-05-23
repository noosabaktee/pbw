<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Nilai</title>
</head>
<body>
    <?php include '../../header.php' ?>
    <?php 
        if(!empty($_POST["nama"])){
            $nama = $_POST["nama"];
            $nilai = $_POST["nilai"];
            $predikat;
            $status;
            if($nilai >= 85){
                $predikat = "A";
                $status = "Lulus";
            }else if($nilai < 85 && $nilai >= 75){
                $predikat = "B";
                $status = "Lulus";
            }else if($nilai < 75 && $nilai >= 65){
                $predikat = "C";
                $status = "Lulus";
            }else if($nilai < 65 && $nilai >= 50){
                $predikat = "D";
                $status = "Tidak Lulus";
            }else if($nilai < 50 && $nilai >= 0){
                $predikat = "E";
                $status = "Tidak Lulus";
            }else{
                $status = "Tidak Valid";
            }
            echo "Nama: " . $nama . "<br>Nilai: " . $nilai . "<br>Predikat: " . $predikat . "<br>Status: " . $status;
        }
    ?>
    <form method="post" action="">
     Nama: <input type="text" name="nama"><br>
     Nilai: <input type="number" name="nilai"><br>
     <input type="submit" value="Proses">
    </form>
</body>
</html>
