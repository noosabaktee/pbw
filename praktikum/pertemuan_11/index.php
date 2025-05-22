<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'menu.php';

        $hari = "Senin";

        switch ($hari) {
            case "Senin":
                echo "Hari pertama kerja!";
                break;
            case "jum'at":
                echo "Solat jumat!";
                break;
            case "Minggu":
                echo "Libur akhir pekan!";
                break;
            default:
                echo "Hari biasa.";
        }

        echo "<br>";

        $mahasiswa = [
            "10001" => "Andi",
            "10002" => "Budi",
            "10003" => "Citra"
        ];

        foreach ($mahasiswa as $nim => $nama) {
            echo "NIM: ". $nim .", Nama:". $nama."<br>";
        }


    ?>
</body>
</html>