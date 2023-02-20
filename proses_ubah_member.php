<?php
if($_POST){
    $id=$_POST['id'];
    $nama_member=$_POST['nama_member'];
    $username=$_POST['username'];
    $gender=$_POST['gender'];
    if(empty($nama_member)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='ubah_member.php';</script>";    
    }else if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='ubah_member.php';</script>";
    }else {
        include "connection.php";
            $update=mysqli_query($conn,"update member set nama_member ='".$nama_member."',gender ='".$gender."',username ='".$username."' where id = '".$id."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id=".$id."';</script>";
            
        }
    }
}
