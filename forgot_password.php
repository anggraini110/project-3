<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Forgot Password</title>
    <style>
        * {
            margin : 10px;
        }
    </style>
</head>

<body>
    <?php
    include "connection.php";
    // $qry_get_member=mysqli_query($conn,"select * from member where username = '".$_GET['username']."'");
    // $data_member = mysqli_fetch_array($qry_get_member);
    // $qry_get_petugas=mysqli_query($conn,"select * from petugas where username = '".$_GET['username']."'");
    // $data_petugas = mysqli_fetch_array($qry_get_petugas);
    ?>
    <h3>Forget Password</h3>
    <form action="proses_ubah_password.php" method="post">
        Username :
        <input type="text" name="username" value="" class="form-control">
    <h6>Silakan memasukan password baru anda</h6>
        Password Baru
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="submit" class="btn btn-primary mt-3" value="Submit">
    </form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>