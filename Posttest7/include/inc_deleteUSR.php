<?php
    require "../include/inc_connect.php";
    $id = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    $user = [];

    if ($result) {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = '../pages/UserCrud.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = '../pages/UserCrud.php';
        </script>";
    }
?>