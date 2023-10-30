<?php
    require "../include/inc_connect.php";
    $id = $_GET['id'];
    $get = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");

    $user = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $user[] = $row;
    }
    $user = $user[0];

    if (isset($_POST['btn-edit'])) {
        $nama = $_POST['nama_user'];
        $username = $_POST['new_username'];
        $email = $_POST['new_email'];
        $pass = $_POST['new_password'];
        $akses = $_POST['new_akses'];
        
        if ($pass === ""){
            $result = mysqli_query($conn, "UPDATE user SET fullname='$nama', username='$username', email='$email', akses='$akses' WHERE id = $id");
        }else {
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $result = mysqli_query($conn, "UPDATE user SET fullname='$nama', username='$username', email='$email', password='$pass', akses='$akses' WHERE id = $id");
        }
        if ($result) {
            echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = '../pages/UserCrud.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Data gagal diubah!');
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
                <h1>Edit USer</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <input name="nama_user" class="form-input" id="nama" type="text" placeholder="Nama" value="<?php echo $user['fullname'] ?>" >
                    <input name="new_username" class="form-input" id="nama" type="text" placeholder="Username" value="<?php echo $user['username'] ?>" >
                    <input name="new_password" class="form-input" id="nama" type="password" placeholder="Password" value="">
                    <input name="new_email" class="form-input" id="nama" type="text" placeholder="example@gmail.com" value="<?php echo $user['email'] ?>" >
                    <input name="new_akses" class="form-input" id="nama" type="text" placeholder="" value="<?php echo $user['akses'] ?>">
                    <button class="btn" type="submit" name="btn-edit">Simpan</button>
                </form>
            </div>
        </div>
        <a href="UserCrud.php"><button class="btn btn-back" id="btn-kembali">Kembali</button></a>
    </section>
</body>
</html>