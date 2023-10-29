<?php
    session_start();
    require "../include/inc_connect.php";
    if(isset($_POST['btn-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $query_sql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $query_sql);
    
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])){
                $akses = $row["akses"];
                $_SESSION['akses'] = $akses;
                if($akses == "admin"){
                    $_SESSION['username'] = $username;
                    header('location: ./crud.php');
                }else{
                    $_SESSION['username'] = $username;
                    header("location: ../index.php");
                }
            }
            
        }
        $error = true;
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
                <?php
                if (isset($error)){
                    echo "<p style='color: red;'>Username atau Password salah</p>";
                }
                ?>
                <form action="" method="post">
                    <div id="user">
                        <input type="text" name="username" placeholder="username" required>
                    </div>
                    <div id="pass">
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                    <button class="btn" type="submit" name="btn-login">Log in</button>
                    <p>Belum punya akun ?</p>
                    <a href="register.php">Daftar!</a>
                </form>
            </div>
        </div>
        <a href="../index.php"><button class="btn btn-back" id="btn-kembali">Kembali</button></a>
    </section>
</body>
</html>