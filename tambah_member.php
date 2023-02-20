<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        * {
            margin : 10px;
        }
    </style>

</head>
<body>
    <h3>Register Member</h3>
    <form action="proses_tambah_member.php" method="post">
        Nama :
        <input type="text" name="nama_member" value="" class="form-control">
        Gender : 
        <div class="form-check">
            <input type="radio" name="gender" id="gender1" value="Laki-Laki">
            <label for="gender1">Laki-Laki</label>
        </div>
        <div class="form-check">
            <input type="radio" name="gender" id="gender2" value="Perempuan">
            <label for="gender2">Perempuan</label>
        </div>
        Username :
        <input type="text" name="username" value="" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Register" class="btn btn-primary mt-3">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>