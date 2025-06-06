<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightgray;
            margin: 0;
            padding: 20px;
        }
        
        
        h1 {
            color: navy;
            text-align: center;
        }
        
        
        p {
            font-size: 16px;
            color: black;
        }
        
        .box {
            width: 300px;
            padding: 20px;
            border: 5px solid black;
            margin: 15px;
            background-color: lightgray;
            text-align: center;
        }

        .static-box {
            position: static;
            width: 200px;
            padding: 10px;
            background-color: lightgray;
            border: 2px solid black;
            margin-bottom: 10px;
        }


        /* Elemen dengan posisi relative */
        .relative-box {
            position: relative;
            left: 20px;
            top: 10px;
            width: 200px;
            padding: 10px;
            background-color: lightblue;
            border: 2px solid black;
            margin-bottom: 10px;
        }


        /* Elemen dengan posisi absolute */
        .absolute-box {
            position: absolute;
            top: 50px;
            left: 50px;
            width: 200px;
            padding: 10px;
            background-color: lightgreen;
            border: 2px solid black;
        }


        /* Elemen induk untuk absolute positioning */
        .relative-container {
            position: relative;
            width: 100%;
            height: 200px;
            background-color: #f0f0f0;
            margin-bottom: 20px;
        }


        /* Elemen dengan posisi fixed */
        .fixed-box {
            position: fixed;
            top: 10px;
            right: 10px;
            width: 150px;
            padding: 10px;
            background-color: orange;
            border: 2px solid black;
        }

    </style>
</head>
<body>
    <?php include '../../header.php' ?>
    <h1>Selamat Datang di Website Kami</h1>
    <p>Ini adalah contoh penggunaan External CSS.</p>
    <div class="box">
        Ini adalah contoh penerapan Box Model dalam CSS.
    </div>
    <h1>Contoh CSS posisi</h1>
    <div class="static-box">Ini adalah elemen dengan posisi static.</div>
    <div class="relative-box">Ini adalah elemen dengan posisi relative.</div>
    <div class="relative-container">
        <div class="absolute-box">Ini adalah elemen dengan posisi absolute.</div>
    </div>
    <div class="fixed-box">Ini adalah elemen dengan posisi fixed.</div>
 
</body>
</html>