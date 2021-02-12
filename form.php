<?php
require ("koneksi.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $tanggal        = $_POST["tanggal"];
    $no_ccs         = $_POST["no_ccs"];
    $kondisi        = $_POST["kondisi"];
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

    $perintah = "INSERT INTO tbl_keluhan(tanggal, no_ccs, kondisi, manager_sales, sales, repeat_order, no_order, article_name, customer, spec, masalah, qtty_roll, qtty_orderroll, qtty_bag, qtty_orderbag) VALUES ('$tanggal', '$no_ccs', '$kondisi', '$manager_sales', '$sales', '$repeat_order', '$no_order','$article_name', '$customer', '$spec', '$masalah', '$qtty_roll', '$qtty_orderroll', '$qtty_bag', '$qtty_orderbag')";
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