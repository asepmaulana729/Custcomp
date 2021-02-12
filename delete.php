<?php
require ("koneksi.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $id             = $_POST["id"];
           
        
            $perintah = "DELETE FROM tbl_keluhan WHERE id = '$id'";
            $eksekusi = mysqli_query($konek, $perintah);
            $cek      = mysqli_affected_rows($konek);
        
            if($cek > 0){
                $response["kode"] = 1;
                $response["message"] = "Hapus Data Berhasil";
            } 
            else {
                $response["kode"] = 0;
                $response["message"] = "Gagal Hapus Data";
            }
        }
        else {
            $response["kode"] = 0;
            $response["message"] = "Tidak Ada Post Data";
        }

echo json_encode($response);
mysqli_close($konek);