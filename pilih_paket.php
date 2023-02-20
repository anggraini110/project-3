<?php
include "header.php";
include "connection.php";
$qry_detail_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
$data_paket=mysqli_fetch_array($qry_detail_paket);
?>
<h2>Pesan Laundry</h2>
<div class="row">
    <div class="col-md-8">
        <form action="masukkankeranjang.php?id_buku=<?=$data_paket['id_paket']?>"method="post">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td>Nama Paket</td><td><?=$data_paket['nama_paket']?></td>
                </tr>
                <tr>
                    <td>Harga</td><td><?=$data_paket['harga']?></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td><td><input type="number"name="qty" value="1"></td>
                </tr>
                <tr>
                    <td>Harga Total</td><td><?=$data_paket['harga'*'qty']?></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="btn btn-success"type="submit" value="PINJAM"></td>
                </tr>
            </thead>
        </table>
    </form>
</div>
</div>
<?php
include "footer.php";
?>
