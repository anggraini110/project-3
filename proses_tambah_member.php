<?php
if($_POST){
    $nama_member=$_POST['nama_member'];
    $gender=$_POST['gender'];
    $username = $_POST['username'];
    $password=md5($_POST['password']);
    if(empty($nama_member)){
        echo "<script>alert('Nama Member Tidak Boleh Kosong');location.href='tambah_member.php';</script>";
    } else {
        include "connection.php";
        $check = mysqli_num_rows(mysqli_query($conn, "select * from member where username = '".$username."'"));
        if($check > 0){
            echo"<script>alert('Username Telah Digunakan, Silakan Menggunakan Username Yang Lain');location.href='tambah_member.php'</script>";
        } else {
            $insert=mysqli_query($conn,"insert into member (nama_member, gender, username, password) value ('".$nama_member."','".$gender."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses Menambahkan Member');location.href='tampil_member.php';</script>";
             } else {
                echo "<script>alert('Gagal Menambahkan Member');location.href='tambah_member.php';</script>";
            }
        }
    }
}
?>
