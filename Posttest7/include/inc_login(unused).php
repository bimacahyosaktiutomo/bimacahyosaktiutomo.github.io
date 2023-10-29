<?php
    session_start();
    require "./inc_connect.php";
    if(isset($_POST['btn-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $query_sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query_sql);
    
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $akses = $row["akses"];
            $_SESSION['akses'] = $akses;
            if($akses == "admin"){
                $_SESSION['username'] = $username;
                header('location: ../pages/crud.php');
            }else{
                $_SESSION['username'] = $username;
                header("location: ../index.php");
            }
        }
    }
?>