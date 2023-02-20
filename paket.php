<?php
include "header_petugas.php";
?>
<h2 style="margin-top: 20px;">Daftar Paket</h2>
    <div class="row">
        <div class="col-md-3" style="margin: 10px;">
        <?php
        include "connection.php";
        $qry_paket = mysqli_query($conn, "select * from paket");
        while ($data_paket = mysqli_fetch_array($qry_paket)) {
        ?>
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form action="proses_transaksi.php?id_paket=<?= $data_paket['id_paket'] ?>" method="post">
                            <img src="<?=$data_paket['foto']?>" class="card-img-top" width="15" height="200">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <h5 class="card-title"><?= $data_paket['nama_paket'] ?></h5>
                                        <tr>
                                            <td>Harga</td>
                                            <td><?= $data_paket['harga'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Berat perkilo</td>
                                            <td><input type="number" name="qty" value="1">                        
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input class="btn btn-success" type="submit" value="Pesan"></td>
                                        </tr>
                                    </thead>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
    }
    ?>
        </div>
        <ul>
            <div class="row">
                <div class="col-md-8">
                <form action="id_paket=<?=$data_paket['id_paket']?>" method="post">
                    <table class="table table-secondary table-striped">
                        <thead>
                            <tr>
                                <th>Paket</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Sub Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            if (@$_SESSION['cart']) {
                            foreach($_SESSION['cart'] as $index => $value){
                                $subtotal = $value['qty'] * $value['harga'];
                                $total += $subtotal;
                            ?>
                                <tr>
                                    <td><?=$value['nama_paket']?></td>
                                    <td><?=$value['harga']?></td>
                                    <td><?=$value['qty']?></td>
                                    <td><?=$subtotal?></td>
                                    <td><a href="hapus_transaksi.php?id=<?=$index?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><strong>X</strong></a></td>
                                </tr>
                            <?php
                            }
                        }
                            ?>

                            <tr>
                                <td colspan="4">Total</td>
                                <td><?=$total?></td>
                            </tr>  
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </ul>
</div>
<div>
    <a href="tambah_paket.php" class="btn btn-primary mt-3" style="margin:10px;">+ Tambah Paket</a>
</div>

<!-- <?php
        include "footer.php";
        ?> -->