<?php 
    $serverName     = "localhost";
    $userName       = "root";
    $userPassword   = "";
    $dbName         = "bp_komputer";

    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>