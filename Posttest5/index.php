<?php
    require "./include/inc_connect.php";
    session_start();
    $navText = "Login";

    if (isset($_SESSION['username'])) {
        $navText = $_SESSION['username'];
    }

    $result = mysqli_query($conn, "SELECT * FROM laptop");

    $laptop = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $laptop[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="icon" href="./assets/backspaceaqua.png">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <nav>
        <div class="top-nav">
            <div class="logo">
                <a href="index.php">
                    <h6><i data-feather="chevron-left" style="color: #00ffff;"></i></h6> 
                    <h6>BACKSPACE <br> <span style="color: greenyellow;">Computer</span></h6>
                    <img src="assets/backspaceaqua.png" alt="">
                </a>
            </div>
            <button onclick="showMenu()" id="burgerbar">
                <svg id="show" style="filter: invert(89%) sepia(28%) saturate(4011%) hue-rotate(122deg) brightness(111%) contrast(107%);" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                <svg id="close" style="filter: invert(89%) sepia(28%) saturate(4011%) hue-rotate(122deg) brightness(111%) contrast(107%);" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
            </button>
        </div>
        <div id="aboutme"> 
            <a href="index.php"><i data-feather="home"></i>Beranda</a>
            <a href="aboutme.php"><i data-feather="users"></i>Tentang Saya</a>
            <!-- <a href="./pages/login.php" ><button type='button' class="login-btn">Login</button></a> -->
            <?php
                if (isset($_SESSION['username'])) {
                    echo "<h3>$navText</h3>";
                    echo "<a class='nav-link' href='./include/inc_logout.php'><button type='button' class='login-btn'>Logout</button></a>";
                } else {
                    echo "<a class='nav-link' href='./pages/login.php'><button type='button' class='login-btn'>$navText</button></a>";
                }
                ?>
            <button onclick="darkmode()" id="btn-mode">
                <svg id="sun" style="filter: invert(84%) sepia(64%) saturate(548%) hue-rotate(26deg) brightness(101%) contrast(101%);" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 3V4M12 20V21M4 12H3M6.31412 6.31412L5.5 5.5M17.6859 6.31412L18.5 5.5M6.31412 17.69L5.5 18.5001M17.6859 17.69L18.5 18.5001M21 12H20M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <svg id="moon" style="filter: invert(84%) sepia(64%) saturate(548%) hue-rotate(26deg) brightness(101%) contrast(101%);" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3.32031 11.6835C3.32031 16.6541 7.34975 20.6835 12.3203 20.6835C16.1075 20.6835 19.3483 18.3443 20.6768 15.032C19.6402 15.4486 18.5059 15.6834 17.3203 15.6834C12.3497 15.6834 8.32031 11.654 8.32031 6.68342C8.32031 5.50338 8.55165 4.36259 8.96453 3.32996C5.65605 4.66028 3.32031 7.89912 3.32031 11.6835Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </button>
        </div>
    </nav>
    <section id="landing">
        <div id="landing-image"></div>
        <div id="landing-title">
            <h1>Selamat Datang di Website Resmi Backspace Computer</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eaque aperiam quasi doloribus quos ut dolores corporis dolore voluptatem ad, tempora, alias excepturi voluptates harum. Harum suscipit excepturi nihil! Rerum.</p>
        </div>
    </section>
    <section id="review">
        <?php $i = 1; foreach ($laptop as $ltp) : ?>
            <?php 
                echo "
                <div class='card'>
                    <img class='card-img' src='./img/{$ltp['gambar']}' alt='Avatar'>
                    <div class='container'>
                        <h4><b>{$ltp['nama']}</b></h4>
                        <p>{$ltp['deskripsi']}</p>
                    </div>
                </div>
                "
            ?>
        <?php $i++;endforeach; ?>
            <!-- <div class="card">
                <img class="card-img" src="assets/laptopku.png" alt="Avatar">
                <div class="container">
                    <h4><b>HP VICTUS 16 2022</b></h4>
                    <p>Rating : 7/10</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="assets/asusari.png" alt="Avatar">
                <div class="container">
                    <h4><b>ASUS TUF Punyak Ari</b></h4>
                    <p>Rating 8/10</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="assets/laptopashadi.png" alt="Avatar">
                <div class="container">
                    <h4><b>Lenovo Ideapad Punyak Ashadi</b></h4>
                    <p>11/10</p>
                </div>
            </div> -->
    </section>
    </div>
    <footer>
        <div id="footer-logo">
            <i style="color: aqua;" data-feather="chevron-left"></i>
            <h4> BACKSPACE Computer©</h4>
        </div>
        <div id="socmed">
            <a href=""> <i data-feather="instagram"></i></a>
            <a href=""> <i data-feather="twitter"></i></a>
            <a href=""> <i data-feather="facebook"></i></a>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>