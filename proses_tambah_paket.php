<?php 
include 'connection.php';
$nama_paket = $_POST['nama_paket'];
$harga = $_POST['harga'];
 
$ekstensi =  array('png','jpg','JPG','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:tambah_produk.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $filename;
		move_uploaded_file($_FILES['foto']['tmp_name'],$filename);
		mysqli_query($conn, "INSERT INTO paket VALUES(NULL,'$nama_paket','$harga','$xx')");
		echo "<script>alert('Sukses menambahkan paket');location.href='paket.php';</script>";
	}else{
		echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
	}
}
?>