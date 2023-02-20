<?php
 if($_POST){
   session_start();
   $id_paket=$_POST['id_paket'];
   $harga=$_POST['harga'];
   $qty=$_POST['qty'];
   $total = $_POST['total'];
   include "connection.php";
   $qry_total = mysqli_query($conn, "select harga from paket where id_paket='".$id_paket."'");
   $total = $harga * $qty; 
   }
?>