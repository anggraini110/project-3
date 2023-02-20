<?php
if($_POST){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
    } elseif(empty(md5($password))){
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "connection.php";
        $qry_login=mysqli_query($conn,"select * from petugas where username = '".$username."' and password = '".md5($password)."'");
        if(mysqli_num_rows($qry_login)>0){
            $data_login=mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id']=$data_login['id'];
            $_SESSION['nama_petugas']=$datat_login['nama_petugas'];
            $_SESSION['status_login']=true;
            header("location: home_petugas.php");
        } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
    }
}
