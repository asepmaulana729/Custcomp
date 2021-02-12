<?php
require ("koneksi.php");
$perintah = "SELECT * FROM tbl_keluhan WHERE tanggung_jawab ='lmd'";
$eksekusi = mysqli_query($konek, $perintah);
$cek = mysqli_affected_rows($konek);

if($cek > 0){
    $response["kode"] = 1;
    $response["message"] = "Data Tersedia";

    $response["data"] = array();

    while($ambil = mysqli_fetch_object($eksekusi)){
        $F["id"] = $ambil->id;
        $F["kondisi"] = $ambil->kondisi;
        $F["tanggal"] = $ambil->tanggal;
        $F["no_ccs"] = $ambil->no_ccs;
        $F["manager_sales"] = $ambil->manager_sales;
        $F["sales"] = $ambil->sales;
        $F["repeat_order"] = $ambil->repeat_order;
        $F["no_order"] = $ambil->no_order;
        $F["article_name"] = $ambil->article_name;
        $F["customer"] = $ambil->customer;
        $F["spec"] = $ambil->spec;
        $F["masalah"] = $ambil->masalah;
        $F["qtty_roll"] = $ambil->qtty_roll;
        $F["qtty_orderroll"] = $ambil->qtty_orderroll;
        $F["qtty_bag"] = $ambil->qtty_bag;
        $F["qtty_orderbag"] = $ambil->qtty_orderbag;
        $F["analisa_masalah"] = $ambil->analisa_masalah;
        $F["tanggung_jawab"] = $ambil->tanggung_jawab;
        $F["jawab_masalah"] = $ambil->jawab_masalah;
        $F["perbaikan"] = $ambil->perbaikan;
        $F["catatan_qty"] = $ambil->catatan_qty;

        array_push($response["data"], $F);
    }
}
else{

    $response["kode"] = 0;
    $response["message"] = "Data Tidak Tersedia";
}
echo json_encode($response);
mysqli_close($konek);