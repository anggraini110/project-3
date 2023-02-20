<?php
if($_POST){
    $id=$_POST['id'];
    $nama_petugas=$_POST['nama_petugas'];
    $alamat=$_POST['alamat'];
    $username=$_POST['username'];
    $role=$_POST['role'];
    $password=$_POST['password'];
    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='ubah_petugas.php';</script>";    
    }else if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='ubah_petugas.php';</script>";
    }else {
        include "connection.php";
            $update=mysqli_query($conn,"update petugas set nama_petugas ='".$nama_petugas."',alamat ='".$alamat."',username ='".$username."',role ='".$role."',password ='".md5($password)."' where id = '".$id."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id=".$id."';</script>";
            
        }
    }
}
