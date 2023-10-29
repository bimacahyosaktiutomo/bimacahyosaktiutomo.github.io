<?php
    require "../include/inc_connect.php";
    $id = $_GET['id'];
    $get = mysqli_query($conn, "SELECT * FROM laptop WHERE id = $id");
    
    $get_gambar = mysqli_query($conn, "SELECT gambar FROM laptop WHERE id = $id");

    $laptop = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $laptop[] = $row;
    }
    $laptop = $laptop[0];

    if (isset($_POST['btn-edit'])) {
        $nama = $_POST['nama_laptop'];
        $deskripsi = $_POST['deskripsi_laptop'];
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $tanggal = date("Y-m-d_h-i-s_");
        
        $gambar_baru = "$tanggal$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];
        
        if (move_uploaded_file($tmp, "../img/".$gambar_baru)){
            $result = mysqli_query($conn, "UPDATE laptop SET nama='$nama', gambar='$gambar_baru', deskripsi='$deskripsi' WHERE id = $id");
            if ($result) {
                echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = '../pages/crud.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data gagal diubah!');
                    document.location.href = '../pages/crud.php';
                </script>";
            }
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
                <h1>Edit Barang</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <input name="nama_laptop" class="form-input" id="nama" type="text" placeholder="nama" value="<?php echo $laptop['nama'] ?>" required>
                    <!-- <input id="pass" type="" name="password" placeholder="password" required> -->
                    <textarea name="deskripsi_laptop" class="form-input" id="deskripsi" cols="30" rows="10" placeholder="deskripsi" required><?php echo $laptop['deskripsi'] ?></textarea>
                    <input type="file"  name="gambar" class="form-input" id="file" required>
                    <button class="btn" type="submit" name="btn-edit">Simpan</button>
                </form>
            </div>
        </div>
        <a href="crud.php"><button class="btn btn-back" id="btn-kembali">Kembali</button></a>
    </section>
</body>
</html>