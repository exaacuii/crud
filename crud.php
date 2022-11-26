<?php
    //koneksi
    $koneksi = new PDO("mysql:host=localhost;dbname=restoran","root","");
    if($koneksi){
        echo 'g luck';
    }
    //query
    //insert
    //$koneksi->query("INSERT INTO `makanan`(`id`, `nama`) VALUES ('3','nasi rendang')");
    //update
    //$koneksi->query("UPDATE `makanan` SET `id`='1',`nama`='g' WHERE id=1");
    //delete
    //$koneksi->query("DELETE FROM `makanan` WHERE id=''");
    //select
    $koneksi->query("SELECT `id`, `nama` FROM `makanan` WHERE id=''")
?>