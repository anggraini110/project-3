<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 10px;
        }
    </style>
    <title>List Member</title>
</head>

<body>
    <?php
    if ($status_login = true) {
        include "header_petugas.php";
    ?>
        <h3>List Member</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NAMA MEMBER</th>
                    <th>GENDER</th>
                    <th>USERNAME</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";
                $qry_member = mysqli_query($conn, "select * from member");
                $no = 0;
                while ($data_member = mysqli_fetch_array($qry_member)) {
                    $no++; ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data_member['nama_member'] ?></td>
                        <td><?= $data_member['gender'] ?></td>
                        <td><?= $data_member['username'] ?></td>
                        <td>
                            <a href="ubah_member.php?id=<?= $data_member['id'] ?>" class="btn btn-success">Ubah</a> |
                            <a href="hapus_member.php?id=<?= $data_member['id'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="tambah_member.php" class="btn btn-primary">Tambah Member</a>
        <a href="login.php" class="btn btn-primary">Log In</a>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
    }
    ?>
</body>

</html>