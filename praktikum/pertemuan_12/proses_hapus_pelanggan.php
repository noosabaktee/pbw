<?php
   include 'koneksi_db.php'; // Pastikan $conn = new mysqli(...)


   if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $query_detail_pesanan = "SELECT * FROM Pesanan WHERE Pelanggan_ID = " . $id;
        $result = $conn->query($query_detail_pesanan);
        $id_pelanggan;
        while ($row = $result->fetch_assoc()){
            $id_pelanggan = $row['ID'];
        }

    
        $conn->begin_transaction();

        try{

            $stmt = $conn->prepare("DELETE FROM detail_pesanan WHERE Pesanan_ID = ?");
            $stmt->bind_param("i", $id_pelanggan); // "i" menandakan tipe data integer
            $stmt->execute();

            $stmt = $conn->prepare("DELETE FROM Pesanan WHERE Pelanggan_ID = ?");
            $stmt->bind_param("i", $id); // "i" menandakan tipe data integer
            $stmt->execute();
            // Siapkan query DELETE dengan prepared statement
            $stmt = $conn->prepare("DELETE FROM Pelanggan WHERE ID = ?");
            $stmt->bind_param("i", $id); // "i" menandakan tipe data integer
            $stmt->execute();
    
    
            $conn->commit();
            echo "<script>alert('Data berhasil dihapus'); window.location='pelanggan.php';</script>";
        }catch(Exception $e){
            $conn->rollback();
            echo "<script>alert('Gagal menghapus data: " . $e->getMessage() . "'); window.location='pelanggan.php';</script>";
        }
    

    } else {
       echo "<script>alert('ID tidak valid'); window.location='pelanggan.php';</script>";
   }
?>
