<?php
if($_GET['id']){
    include "connection.php";
    $qry_hapus=mysqli_query($conn,"delete from petugas where id='".$_GET['id']."'");
    if($qry_hapus){
        echo "<script>alert('Sukses Hapus Petugas');location.href='tampil_petugas.php';</script>";
    } else {
        echo "<script>alert('Gagal Hapus Petugas');location.href='tampil_petugas.php';</script>";
    }
}
