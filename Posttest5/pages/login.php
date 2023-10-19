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
                <form action="../include/inc_login.php" method="post">
                    <div id="user">
                        <input type="text" name="username" placeholder="username" required>
                    </div>
                    <div id="pass">
                        <input type="password" name="password" placeholder="password" required>
                    </div>
                    <button class="btn" type="submit" name="btn-login">Log in</button>
                </form>
            </div>
        </div>
        <a href="../index.php"><button class="btn btn-back" id="btn-kembali">Kembali</button></a>
    </section>
</body>
</html>