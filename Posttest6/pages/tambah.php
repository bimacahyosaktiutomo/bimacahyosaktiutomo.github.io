<?php
    require "../include/inc_connect.php";
    if (isset($_POST['btn-tambah'])) {
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        // Upload Gambar
        $gambar = $_FILES['gambar']['name'];
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $tanggal = date("Y-m-d_h-i-s_");
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$tanggal$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if (move_uploaded_file($tmp, "../img/".$gambar_baru)) {
            $result = mysqli_query($conn, "INSERT INTO laptop VALUES ('', '$nama', '$deskripsi', '$gambar_baru')");
            if ($result) {
                echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'crud.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'crud.php';
                </script>";
            }
        } else {
            echo " Gambar Gagal Diupload";
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
    <title>TAMBAH</title>
</head>
<body>
    <section>
        <div id="log-container">
            <div id="container">
                <h1>Tambah Barang</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <input name="nama" class="form-input" id="nama" type="text" placeholder="nama" required>
                    <!-- <input id="pass" type="" name="password" placeholder="password" required> -->
                    <textarea name="deskripsi" class="form-input" id="deskripsi" cols="30" rows="10" placeholder="deskripsi" required></textarea>
                    <input type="file"  name="gambar" class="form-input" id="file" required>
                    <button class="btn" type="submit" name="btn-tambah">Tambah</button>
                </form>
            </div>
        </div>
        <a href="crud.php"><button class="btn btn-back" id="btn-kembali">Kembali</button></a>
    </section>
</body>
</html>