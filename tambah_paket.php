<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Paket</title>
    <style>
        * {
            margin : 10px;
        }
    </style>
</head>
<body>
    <h3>Tambah Paket</h3>
    <form action="proses_tambah_paket.php" method="post" enctype="multipart/form-data">
        Nama Paket :
        <input type="text" name="nama_paket" class="form-control">
        Foto :
        <input type="file" name="foto" value=""  class="form-control">
        Harga :
        <input type="text" name="harga" value=""  class="form-control">
        <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary mt-3">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
