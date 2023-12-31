<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="loader-wrapper">
        <div class="loader"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                style="margin: auto; background: rgb(241, 242, 243); display: block; shape-rendering: auto;" width="200px"
                height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <g transform="translate(26.666666666666668,26.666666666666668)">
                    <rect x="-20" y="-20" width="40" height="40" fill="#064b8b">
                        <animateTransform attributeName="transform" type="scale" repeatCount="indefinite" dur="1s"
                            keyTimes="0;1" values="1.1500000000000001;1" begin="-0.3s" />
                    </rect>
                </g>
                <g transform="translate(73.33333333333333,26.666666666666668)">
                    <rect x="-20" y="-20" width="40" height="40" fill="#ff7f50">
                        <animateTransform attributeName="transform" type="scale" repeatCount="indefinite" dur="1s"
                            keyTimes="0;1" values="1.1500000000000001;1" begin="-0.2s" />
                    </rect>
                </g>
                <g transform="translate(26.666666666666668,73.33333333333333)">
                    <rect x="-20" y="-20" width="40" height="40" fill="#00ffff">
                        <animateTransform attributeName="transform" type="scale" repeatCount="indefinite" dur="1s"
                            keyTimes="0;1" values="1.1500000000000001;1" begin="0s" />
                    </rect>
                </g>
                <g transform="translate(73.33333333333333,73.33333333333333)">
                    <rect x="-20" y="-20" width="40" height="40" fill="#adff2f">
                        <animateTransform attributeName="transform" type="scale" repeatCount="indefinite" dur="1s"
                            keyTimes="0;1" values="1.1500000000000001;1" begin="-0.1s" />
                    </rect>
                </g>
            </svg>
        </div>
    </div>
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
            <a href="index.php"><i data-feather="home"></i> Beranda</a>
            <a href="aboutme.html"><i data-feather="users"></i>Tentang Saya</a>
            <button onclick="darkmode()" id="btn-mode">
                <svg id="sun" style="filter: invert(84%) sepia(64%) saturate(548%) hue-rotate(26deg) brightness(101%) contrast(101%);" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 3V4M12 20V21M4 12H3M6.31412 6.31412L5.5 5.5M17.6859 6.31412L18.5 5.5M6.31412 17.69L5.5 18.5001M17.6859 17.69L18.5 18.5001M21 12H20M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <svg id="moon" style="filter: invert(84%) sepia(64%) saturate(548%) hue-rotate(26deg) brightness(101%) contrast(101%);" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3.32031 11.6835C3.32031 16.6541 7.34975 20.6835 12.3203 20.6835C16.1075 20.6835 19.3483 18.3443 20.6768 15.032C19.6402 15.4486 18.5059 15.6834 17.3203 15.6834C12.3497 15.6834 8.32031 11.654 8.32031 6.68342C8.32031 5.50338 8.55165 4.36259 8.96453 3.32996C5.65605 4.66028 3.32031 7.89912 3.32031 11.6835Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </button>
        </div>
    </nav>
    <section class="landing">
        <div class="landing-image"></div>
        <div class="landing-title">
            <h1>Selamat Datang di Website Resmi Backspace Computer</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eaque aperiam quasi doloribus quos ut dolores corporis dolore voluptatem ad, tempora, alias excepturi voluptates harum. Harum suscipit excepturi nihil! Rerum.</p>
        </div>
    </section>
    <div class="form-popup" id="Modal">
        <form action="index.php" class="form-container" method="post">
            <div style="display: flex;justify-content: end;">
                <button onclick="closeForm()" id="form-tutup">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </button>
            </div>
            <h1 style="display: flex;justify-content: center;margin-bottom: 5%;">Komentar</h1>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Masukan Email" name="email" required>

            <label for="complaint"><b>Komentar</b></label>
            <!-- <input type="text" placeholder="Masukan Komplain" name="report" maxlength="256" required> -->
            <textarea id="complaint" rows="6" placeholder="Masukan Komplain max : 700 huruf" maxlength="708" name="report"></textarea>

            <label for="NO_HP"><b>Nomor HP</b></label>
            <input type="tel" placeholder="No. HP" name="NO_HP" maxlength="14" required>

            <button type="submit" class="formSubmit">Submit</button>
        </form>
    </div>
    <section id="review">
        <div class="card">
            <img class="card-img" src="assets/laptopku.png" alt="Avatar">
            <div class="container">
                <h4><b>HP VICTUS 16 2022</b></h4>
                <p>Rating : 7/10</p>
            </div>
            <div class="descrip">
                <ul>
                    <li>Harga : 12.000.000</li>
                    <br>
                    <li>CPU : I5-12500H</li>
                    <br>
                    <li>GPU : RTX 3050 85W</li>
                    <br>
                    <li>COLOR GAMUT : 45% NTSC</li>
                    <br>
                    <li>RAM : 16GB DDR4</li>
                </ul>
            </div>
            <button onclick="showForm()" class="form-button">
                <svg class="report-on" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240ZM330-120 120-330v-300l210-210h300l210 210v300L630-120H330Zm34-80h232l164-164v-232L596-760H364L200-596v232l164 164Zm116-280Z"/></svg>
                <svg class="report-off"  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m792-282-58-56 26-26v-232L596-760H364l-26 26-56-58 48-48h300l210 210v298l-48 50ZM520-552v-128h-80v48l80 80ZM820-28 678-170l-48 50H330L120-332v-298l48-48L28-820l56-56L876-84l-56 56ZM536-536ZM364-200h232l26-26-396-396-26 26v232l164 164Zm116-80q-17 0-28.5-11.5T440-320q0-17 11.5-28.5T480-360q17 0 28.5 11.5T520-320q0 17-11.5 28.5T480-280Zm-56-144Z"/></svg>
            </button>
            <button onclick="showCard(this)" class="card-button">
                <svg class="arrow-down" viewBox="0 -0.5 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>open</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-154.000000, -621.000000)" fill="#000000"> <path d="M168,624.695 L179.2,641.99 L156.8,641.99 L168,624.695 L168,624.695 Z M156.014,643.995 L180.018,643.995 C182.375,643.995 182.296,642.608 181.628,641.574 L169.44,622.555 C168.882,621.771 167.22,621.703 166.56,622.555 L154.372,641.574 C153.768,642.703 153.687,643.995 156.014,643.995 L156.014,643.995 Z M181,645.998 L155,645.998 C154.448,645.998 154,646.446 154,646.999 C154,647.552 154.448,648 155,648 L181,648 C181.552,648 182,647.552 182,646.999 C182,646.446 181.552,645.998 181,645.998 L181,645.998 Z" id="open" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                <svg class="arrow-up" viewBox="0 -0.5 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>open</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-154.000000, -621.000000)" fill="#000000"> <path d="M168,624.695 L179.2,641.99 L156.8,641.99 L168,624.695 L168,624.695 Z M156.014,643.995 L180.018,643.995 C182.375,643.995 182.296,642.608 181.628,641.574 L169.44,622.555 C168.882,621.771 167.22,621.703 166.56,622.555 L154.372,641.574 C153.768,642.703 153.687,643.995 156.014,643.995 L156.014,643.995 Z M181,645.998 L155,645.998 C154.448,645.998 154,646.446 154,646.999 C154,647.552 154.448,648 155,648 L181,648 C181.552,648 182,647.552 182,646.999 C182,646.446 181.552,645.998 181,645.998 L181,645.998 Z" id="open" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
            </button>
        </div>
        <div class="card">
            <img class="card-img" src="assets/asusari.png" alt="Avatar">
            <div class="container">
                <h4><b>ASUS TUF Punyak Ari</b></h4>
                <p>Rating 8/10</p>
            </div>
            <div class="descrip">
                <ul>
                    <li>Harga : 12.000.000</li>
                    <br>
                    <li>CPU : I5-12500H</li>
                    <br>
                    <li>GPU : RTX 3050 85W</li>
                    <br>
                    <li>COLOR GAMUT : 45% NTSC</li>
                    <br>
                    <li>RAM : 16GB DDR4</li>
                </ul>
            </div>
            <button onclick="showForm()" class="form-button">
                <svg class="report-on" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240ZM330-120 120-330v-300l210-210h300l210 210v300L630-120H330Zm34-80h232l164-164v-232L596-760H364L200-596v232l164 164Zm116-280Z"/></svg>
                <svg class="report-off"  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m792-282-58-56 26-26v-232L596-760H364l-26 26-56-58 48-48h300l210 210v298l-48 50ZM520-552v-128h-80v48l80 80ZM820-28 678-170l-48 50H330L120-332v-298l48-48L28-820l56-56L876-84l-56 56ZM536-536ZM364-200h232l26-26-396-396-26 26v232l164 164Zm116-80q-17 0-28.5-11.5T440-320q0-17 11.5-28.5T480-360q17 0 28.5 11.5T520-320q0 17-11.5 28.5T480-280Zm-56-144Z"/></svg>
            </button>
            <button onclick="showCard(this)" class="card-button">
                <svg class="arrow-down" viewBox="0 -0.5 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>open</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-154.000000, -621.000000)" fill="#000000"> <path d="M168,624.695 L179.2,641.99 L156.8,641.99 L168,624.695 L168,624.695 Z M156.014,643.995 L180.018,643.995 C182.375,643.995 182.296,642.608 181.628,641.574 L169.44,622.555 C168.882,621.771 167.22,621.703 166.56,622.555 L154.372,641.574 C153.768,642.703 153.687,643.995 156.014,643.995 L156.014,643.995 Z M181,645.998 L155,645.998 C154.448,645.998 154,646.446 154,646.999 C154,647.552 154.448,648 155,648 L181,648 C181.552,648 182,647.552 182,646.999 C182,646.446 181.552,645.998 181,645.998 L181,645.998 Z" id="open" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                <svg class="arrow-up" viewBox="0 -0.5 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>open</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-154.000000, -621.000000)" fill="#000000"> <path d="M168,624.695 L179.2,641.99 L156.8,641.99 L168,624.695 L168,624.695 Z M156.014,643.995 L180.018,643.995 C182.375,643.995 182.296,642.608 181.628,641.574 L169.44,622.555 C168.882,621.771 167.22,621.703 166.56,622.555 L154.372,641.574 C153.768,642.703 153.687,643.995 156.014,643.995 L156.014,643.995 Z M181,645.998 L155,645.998 C154.448,645.998 154,646.446 154,646.999 C154,647.552 154.448,648 155,648 L181,648 C181.552,648 182,647.552 182,646.999 C182,646.446 181.552,645.998 181,645.998 L181,645.998 Z" id="open" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
            </button>
        </div>
        <div class="card">
            <img class="card-img" src="assets/laptopashadi.png" alt="Avatar">
            <div class="container">
                <h4><b>Lenovo Ideapad Punyak Ashadi</b></h4>
                <p>11/10</p>
            </div>
            <div class="descrip">
                <ul>
                    <li>Harga : 12.000.000</li>
                    <br>
                    <li>CPU : I5-12500H</li>
                    <br>
                    <li>GPU : RTX 3050 85W</li>
                    <br>
                    <li>COLOR GAMUT : 45% NTSC</li>
                    <br>
                    <li>RAM : 16GB DDR4</li>
                </ul>
            </div>
            <button onclick="showForm()" class="form-button">
                <svg class="report-on" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240ZM330-120 120-330v-300l210-210h300l210 210v300L630-120H330Zm34-80h232l164-164v-232L596-760H364L200-596v232l164 164Zm116-280Z"/></svg>
                <svg class="report-off"  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m792-282-58-56 26-26v-232L596-760H364l-26 26-56-58 48-48h300l210 210v298l-48 50ZM520-552v-128h-80v48l80 80ZM820-28 678-170l-48 50H330L120-332v-298l48-48L28-820l56-56L876-84l-56 56ZM536-536ZM364-200h232l26-26-396-396-26 26v232l164 164Zm116-80q-17 0-28.5-11.5T440-320q0-17 11.5-28.5T480-360q17 0 28.5 11.5T520-320q0 17-11.5 28.5T480-280Zm-56-144Z"/></svg>
            </button>
            <button onclick="showCard(this)" class="card-button">
                <svg class="arrow-down" viewBox="0 -0.5 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>open</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-154.000000, -621.000000)" fill="#000000"> <path d="M168,624.695 L179.2,641.99 L156.8,641.99 L168,624.695 L168,624.695 Z M156.014,643.995 L180.018,643.995 C182.375,643.995 182.296,642.608 181.628,641.574 L169.44,622.555 C168.882,621.771 167.22,621.703 166.56,622.555 L154.372,641.574 C153.768,642.703 153.687,643.995 156.014,643.995 L156.014,643.995 Z M181,645.998 L155,645.998 C154.448,645.998 154,646.446 154,646.999 C154,647.552 154.448,648 155,648 L181,648 C181.552,648 182,647.552 182,646.999 C182,646.446 181.552,645.998 181,645.998 L181,645.998 Z" id="open" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                <svg class="arrow-up" viewBox="0 -0.5 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>open</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-154.000000, -621.000000)" fill="#000000"> <path d="M168,624.695 L179.2,641.99 L156.8,641.99 L168,624.695 L168,624.695 Z M156.014,643.995 L180.018,643.995 C182.375,643.995 182.296,642.608 181.628,641.574 L169.44,622.555 C168.882,621.771 167.22,621.703 166.56,622.555 L154.372,641.574 C153.768,642.703 153.687,643.995 156.014,643.995 L156.014,643.995 Z M181,645.998 L155,645.998 C154.448,645.998 154,646.446 154,646.999 C154,647.552 154.448,648 155,648 L181,648 C181.552,648 182,647.552 182,646.999 C182,646.446 181.552,645.998 181,645.998 L181,645.998 Z" id="open" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
            </button>
        </div>
    </section>
    <div class="comentar">
        <?php
            require("form.php");
        ?>
        <!-- <div class="item-comentar">
            <h2>Komentar Terbaru</h2>
            <p>$email</p>
            <br>
            <textarea name="" id="" cols="30" rows="" disabled>$komentar</textarea>
            <p>$no_hp</p>
        </div> -->
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