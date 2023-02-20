<?php
if($_POST){
    $nama_petugas=$_POST['nama_petugas'];
    $alamat=$_POST['alamat'];
    $role=$_POST['role'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";    
    } elseif(empty($alamat)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('level tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } else {
        include "connection.php";
        $insert=mysqli_query($conn,"insert into petugas (nama_petugas, alamat, role, username, password) value ('".$nama_petugas."','".$alamat."','".$role."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
    }
}
?>

