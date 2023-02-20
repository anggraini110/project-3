<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah Petugas</title>

    <style>
    * {
        margin: 10px;
    }
    </style>
</head>

<body>
    <?php
    include "connection.php";
    $qry_get_petugas = mysqli_query($conn, "select * from petugas where id = '" . $_GET['id'] . "'");
    $data_petugas = mysqli_fetch_array($qry_get_petugas);
    ?>
    <center>
        <h3>Ubah Petugas</h3>
    </center>
    <form action="proses_ubah_petugas.php" method="post">
        <input type="hidden" name="id" value="<?= $data_petugas['id'] ?>">
        Nama Petugas :
        <input type="text" name="nama_petugas" value="<?= $data_petugas['nama_petugas'] ?>" class="form-control">
        Alamat :
        <input type="text" name="level" value="<?= $data_petugas['alamat'] ?>" class="form-control">
        Role :
        <?php
        $arr_role = array('admin' => 'Admin', 'petugas' => 'Petugas', 'owner' => 'Owner');
        ?>
        <select name="role" class="form-control">
            <?php foreach ($arr_role as $key_role => $val_role) :
                if ($key_role == $data_petugas['role']) {
                    $select = "selected";
                } else {
                    $select = "";
                }
            ?>
            <option value="<?= $key_role ?>" <?= $select ?>><?= $val_role ?></option>
            <?php endforeach ?>
        </select>
        Username :
        <input type="username" name="username" value="<?= $data_petugas['username'] ?>" class="form-control">
        Password :
        <input type="password" name="password" value="<?= $data_petugas['password'] ?>" class="form-control">

        <input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>