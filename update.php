<?php
require ("koneksi.php");

$response = array();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $id             = $_POST["id"];
            $kondisi        = $_POST["kondisi"];
            $tanggal        = $_POST["tanggal"];
            $no_ccs         = $_POST["no_ccs"];
            $manager_sales  = $_POST["manager_sales"];
            $sales          = $_POST["sales"];
            $repeat_order   = $_POST["repeat_order"];
            $no_order       = $_POST["no_order"];
            $article_name   = $_POST["article_name"];
            $customer       = $_POST["customer"];
            $spec           = $_POST["spec"];
            $masalah        = $_POST["masalah"];
            $qtty_roll      = $_POST["qtty_roll"];
            $qtty_orderroll = $_POST["qtty_orderroll"];
            $qtty_bag       = $_POST["qtty_bag"];
            $qtty_orderbag  = $_POST["qtty_orderbag"];
            $analisa_masalah = $_POST["analisa_masalah"];          
            $tanggung_jawab = $_POST["tanggung_jawab"];
            $jawab_masalah  = $_POST["jawab_masalah"];
            $perbaikan      = $_POST["perbaikan"];
            $catatan_qty    = $_POST["catatan_qty"];
        
            $perintah = "UPDATE tbl_keluhan SET 
            kondisi = '$kondisi', 
            tanggal = '$tanggal', 
            no_ccs = '$no_ccs',
            manager_sales = '$manager_sales', 
            sales = '$sales', 
            repeat_order = '$repeat_order', 
            no_order = '$no_order', 
            article_name = '$article_name', 
            customer = '$customer', 
            spec = '$spec', 
            masalah = '$masalah', 
            qtty_roll = '$qtty_roll', 
            qtty_orderroll = '$qtty_orderroll', 
            qtty_bag = '$qtty_bag', 
            qtty_orderbag = '$qtty_orderbag',
            analisa_masalah = '$analisa_masalah', 
            tanggung_jawab = '$tanggung_jawab', 
            jawab_masalah = '$jawab_masalah',
            perbaikan = '$perbaikan',
            catatan_qty = '$catatan_qty'
            WHERE id = '$id'";
            $eksekusi = mysqli_query($konek, $perintah);
            $cek      = mysqli_affected_rows($konek);
        
            if($cek > 0){
                $response["kode"] = 1;
                $response["message"] = "Simpan Data Berhasil";
            } 
            else {
                $response["kode"] = 0;
                $response["message"] = "Gagal Menyimpan Data";
            }
        }
        else {
            $response["kode"] = 0;
            $response["message"] = "Tidak Ada Post Data";
        }

echo json_encode($response);
mysqli_close($konek);