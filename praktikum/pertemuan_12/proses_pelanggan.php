<?php
   include 'koneksi_db.php'; // Koneksi database


   // Inisialisasi variabel pencarian
   $search_nama = isset($_GET['nama']) ? $_GET['nama'] : '';
   $search_alamat = isset($_GET['alamat']) ? $_GET['alamat'] : '';


   // Query untuk menampilkan daftar buku dengan filter pencarian
   $query = "SELECT * FROM pelanggan WHERE 1=1";
   if (!empty($search_nama)) {
       $query .= " AND Nama LIKE '%" . $conn->real_escape_string($search_nama) . "%'";
   }
   if (!empty($search_alamat)) {
       $query .= " AND Alamat LIKE '%" . $conn->real_escape_string($search_alamat) ."%'";
   }


   $result = $conn->query($query);
?>
