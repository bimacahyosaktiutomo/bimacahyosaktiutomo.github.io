<?php
    require "../include/inc_connect.php";
    $id = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM laptop WHERE id = $id");
    $laptop = [];

    if ($result) {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = '../pages/crud.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = '../pages/crud.php';
        </script>";
    }
?>