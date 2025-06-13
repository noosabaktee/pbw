<?php
   include 'koneksi_db.php'; // Pastikan $conn = new mysqli(...)


   if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $query_detail_pesanan = "SELECT * FROM detail_pesanan WHERE BUKU_ID = " . $id;
        $result = $conn->query($query_detail_pesanan);
        $id_detail_pesanan;
        $conn->begin_transaction();
        try{

            
            while ($row = $result->fetch_assoc()){
                $id_detail_pesanan = $row['Pesanan_ID'];
                
                $stmt = $conn->prepare("DELETE FROM detail_pesanan WHERE Pesanan_ID = ?");
                $stmt->bind_param("i", $id_detail_pesanan); // "i" menandakan tipe data integer
                $stmt->execute();
                
                $stmt = $conn->prepare("DELETE FROM pesanan WHERE ID = ?");
                $stmt->bind_param("i", $id_detail_pesanan); // "i" menandakan tipe data integer
                $stmt->execute();
                
                
            }
            $stmt = $conn->prepare("DELETE FROM Buku WHERE ID = ?");
            $stmt->bind_param("i", $id); // "i" menandakan tipe data integer
            $stmt->execute();
            $conn->commit();
            echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
        }catch(Exception $e){
            $conn->rollback();
            echo "<script>alert('Gagal menghapus data: " . $e->getMessage() . "'); window.location='index.php';</script>";
        }
    

    } else {
       echo "<script>alert('ID tidak valid'); window.location='index.php';</script>";
   }
?>
