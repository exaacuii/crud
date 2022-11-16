<?php
    //koneksi
    $koneksi = new PDO("mysql:host=localhost;Dbname=apotek","root","");
    if($koneksi){
        echo 'g luck';
    }
    //query
    //insert
    $koneksi->query("INSERT INTO `obat` VALUES ('15','g','11')");
    //update
    //$koneksi->query("UPDATE `obat` SET `id`='',`nama`='',`jumlah`='' WHERE 1");
    //delete
    //$koneksi->query("DELETE FROM `obat` WHERE id=''");
    //select
    //$koneksi->query("SELECT `id`, `nama`, `jumlah` FROM `obat` WHERE id='11'")
?>