<?php
    session_start();
    require "../include/inc_connect.php";
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
    $result = mysqli_query($conn, "SELECT * FROM user");
    $user = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $user[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/CRUD.css">
    <title>CRUD MENU</title>
    <link rel="icon" href="../assets/backspaceaqua.png">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <section id="sec-time">
        <div id="waktu">
            <h1><span id="hari"></span><span id="tanggal-jam"></span><span id="timezone"></span></h1>
            <script>
                function refreshHari() {
                    const hari_tag = document.getElementById("hari");
                    const date = new Date();
                    const hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                    const day_name = hari[date.getDay()];

                    const formattedString = `${day_name}`;
                    hari_tag.textContent = formattedString;
                }
                refreshHari();
                setInterval(refreshHari, 1000);

                function refreshTanggal() {
                    const tanggal_tag = document.getElementById("tanggal-jam");
                    const date = new Date();
                    const day = date.getDate();
                    const month = date.getMonth() + 1;
                    const year = date.getFullYear();
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const seconds = date.getSeconds();

                    const formattedString = `${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;
                    tanggal_tag.textContent = formattedString;
                }
                refreshTanggal();
                setInterval(refreshTanggal, 1000);

                function refreshHariZona() {
                    const timezone_tag = document.getElementById("timezone");
                    const date = new Date();
                    const timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
                    const formattedString = `${timeZone}`;
                    timezone_tag.textContent = formattedString;
                }
                refreshHariZona();
                setInterval(refreshHariZona, 1000);
            </script>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="table-wraper">
                <div class="table-title">
                    <div id="logo">
                        <h6><i data-feather="chevron-left" style="color: #00ffff;"></i></h6>
                        <h6 style="color: coral;">BACKSPACE <br> <span style="color: greenyellow;">Computer</span></h6>
                        <img src="../assets/backspaceaqua.png" width="50px" alt="">
                    </div>
                    <div id="option">
                        <a href="crud.php"><button class="tambah-btn db-button" ></i>LAPTOP DB</button></a>
                        <a href="tambahUser.php"><button class="tambah-btn"><i data-feather="plus-square"></i>Tambah</button></a>
                    </div>
                </div>
                <table class="table-head">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($user as $usr) : ?>
                            <tr>
                                <td><?php echo $usr['fullname']; ?></td>
                                <td><?php echo $usr['username']; ?></td>
                                <td><?php echo $usr['email']; ?></td>
                                <td><?php echo $usr['password']; ?></td>
                                <td class="action">
                                    <a href="updateUser.php?id=<?php echo $usr['id'] ?>">
                                        <button class="edit-delete-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z" />
                                            </svg>
                                        </button>
                                    </a>
                                    <a href="#" onclick="confirmDeleteUSR(<?php echo $usr['id'] ?>);" class="edit-delete-button hapus">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                            <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
                <div id="logout-label">
                    <a href="../include/inc_logout.php"><button class="btn-logout" id="btn-logout">Log Out</button></a>
                </div>
            </div>
        </div>
    </section>
    <script src="../script.js"></script>
</body>

</html>