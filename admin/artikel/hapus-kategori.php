<?php
session_start();
    include '../../config.php';

    $id_kategori=$_POST["id_kategori"];
    $gambar=$_POST["gambar"];

    $sql="delete from kategori where id_kategori=$id_kategori";
    $hapus_kategori=mysqli_query($conn,$sql);

    //Menghapus file gambar

    if ($gambar!='gambar_default.png'){
        unlink("gambar_kategori/".$gambar);
    }

?>