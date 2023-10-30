<?php
    require "../include/inc_connect.php";
    if (isset($_POST['btn-edit'])) {
        $nama = $_POST['user'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $akses = $_POST['akses'];
        
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "INSERT INTO user VALUES ('' , '$nama', '$username', '$email', '$pass', '$akses')");
        if ($result) {
            echo "
            <script>
                alert('User berhasil Ditambah!');
                document.location.href = '../pages/UserCrud.php';
            </script>";
        } else {
            echo "
            <script>
                alert('User gagal Ditambah!');
                document.location.href = '../pages/UserCrud.php';
            </script>";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/tambah.css">
    <link rel="icon" href="../assets/backspaceaqua.png">
    <title>Document</title>
</head>
<body>
<section>
        <div id="log-container">
            <div id="container">
                <h1>Tambah User</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <input name="user" class="form-input" id="nama" type="text" placeholder="Nama"  required>
                    <input name="username" class="form-input" id="nama" type="text" placeholder="Username" required>
                    <input name="password" class="form-input" id="nama" type="password" placeholder="Password"  required>
                    <input name="email" class="form-input" id="nama" type="text" placeholder="example@gmail.com" required>
                    <input name="akses" class="form-input" id="nama" type="text" placeholder="Akses">
                    <button class="btn" type="submit" name="btn-edit">Simpan</button>
                </form>
            </div>
        </div>
        <a href="UserCrud.php"><button class="btn btn-back" id="btn-kembali">Kembali</button></a>
    </section>
</body>
</html>