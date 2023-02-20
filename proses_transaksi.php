<?php
    session_start();
    if($_POST){
        include "connection.php";
        
        $qry_get_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_POST['id_paket']."'");
        $data_paket=mysqli_fetch_array($qry_get_paket);
        $_SESSION['cart'][]=array(
            'id_paket'=>$data_paket['id_paket'],
            'nama_paket'=>$data_paket['nama_paket'],
            'harga'=>$data_paket['harga'],
            'qty' => $_POST['qty']
        );

        header('location: paket.php');

    }
?>