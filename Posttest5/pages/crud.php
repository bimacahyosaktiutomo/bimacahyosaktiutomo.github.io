<?php
require "../include/inc_connect.php";

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
    <link rel="stylesheet" href="../style/CRUD.css">
    <title>CRUD MENU</title>
    <link rel="icon" href="../assets/backspaceaqua.png">
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <section>
        <div class="container">
            <div class="table-wraper">
                <div class="table-title">
                    <div id="logo">
                        <h6><i data-feather="chevron-left" style="color: #00ffff;"></i></h6>
                        <h6 style="color: coral;">BACKSPACE <br> <span style="color: greenyellow;">Computer</span></h6>
                        <img src="../assets/backspaceaqua.png" width="50px" alt="">
                    </div>
                    <div>
                        <a href="tambah.php"><button class="tambah-btn"><i data-feather="plus-square"></i>Tambah</button></a>
                    </div>
                </div>
                <table class="table-head">
                    <thead>
                        <tr>
                            <th>Nama Produk </th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($laptop as $ltp) : ?>
                            <tr>
                                <td><?php echo $ltp['nama']; ?></td>
                                <td><?php echo $ltp['deskripsi']; ?></td>
                                <td><img src="../img/<?php echo $ltp['gambar']; ?>" alt="ini gambar" width="100px"></td>
                                <td class="action">
                                    <a href="update.php?id=<?php echo $ltp['id'] ?>"><button class="edit-delete-button"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                                <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z" />
                                            </svg></button></a>
                                    <a href="#" onclick="confirmDelete(<?php echo $ltp['id'] ?>);" class="edit-delete-button hapus">
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