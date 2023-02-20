<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Ubah Member</title>
    <style>
    * {
        margin: 10px;
    }
    </style>
</head>

<body>
    <?php
    include "connection.php";
    $qry_get_member = mysqli_query($conn, "select * from member where id = '" . $_GET['id'] . "'");
    $data_member = mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Ubah Member</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id" value="<?= $data_member['id'] ?>">
        Nama Member :
        <input type="text" name="nama_member" value="<?= $data_member['nama_member'] ?>" class="form-control">
        Gender :
        <?php
        $arr_gender = array('Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan');
        ?>
        <select name="gender" class="form-control">
            <?php foreach ($arr_gender as $key_gender => $val_gender) :
                if ($key_gender == $data_member['gender']) {
                    $select = "selected";
                } else {
                    $select = "";
                }
            ?>
            <option value="<?= $key_gender ?>" <?= $select ?>><?= $val_gender ?></option>
            <?php endforeach ?>
        </select>
        </select>
        Username :
        <input type="text" name="username" value="<?= $data_member['username'] ?>" class="form-control">
        <!-- Password :
        <input type="password" name="password" value="" class="form-control"> -->
        <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary mt-3">
    </form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>