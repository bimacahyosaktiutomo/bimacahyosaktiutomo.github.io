<?php 
    require '../include/inc_connect.php';

    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $cpass = $_POST['Conpassword'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        if ($pass === $cpass){
            $pass = password_hash($pass, PASSWORD_DEFAULT);

            $result = mysqli_query($conn, "SELECT username from user where username = '$username'");

            if (mysqli_fetch_assoc($result)) {
                echo "
                <script>
                    alert('Username Sudah ada!');
                    document.location.href = 'register.php';
                </script>";
            } else {
                $result = mysqli_query($conn, "INSERT INTO user VALUES ('', '$nama', '$username', '$email','$pass', '')");
                
                if (mysqli_affected_rows($conn) > 0) {
                    echo "
                    <script>
                        alert('Registrasi Berhasil!');
                        document.location.href = 'login.php';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Registrasi Gagal!');
                        document.location.href = 'register.php';
                    </script>";
                }
            }

        } else {
            echo "
                <script>
                    alert('Passwotd Tidak Sama');
                    document.location.href = 'register.php';
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
    <link rel="stylesheet" href="../style/login_style.css">
    <title>Login</title>
    <link rel="icon" href="../assets/backspaceaqua.png">
</head>
<body>
    <section>
        <div id="log-container">
            <div id="container">
                <h1>Login</h1>
                <form action="" method="post">
                    <input class="input-reg" type="text" name="nama" placeholder="Nama" required>
                    <input class="input-reg" type="email" name="email" placeholder="example@gmail.com" required>
                    <input class="input-reg" type="text" name="username" placeholder="username" required>
                    <input class="input-reg" type="password" name="password" placeholder="password" required>
                    <input class="input-reg" type="password" name="Conpassword" placeholder="Confirm Password" required>
                    <button class="btn" type="submit" name="register">Register</button>
                </form>
            </div>
        </div>
        <a href="../index.php"><button class="btn btn-back" id="btn-kembali">Kembali</button></a>
    </section>
</body>
</html>