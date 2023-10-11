<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"]; 
        $komentar = $_POST["report"]; 
        $no_hp = $_POST["NO_HP"];

        echo "<div class='item-comentar'>";
        echo "<h2>Komentar Terbaru</h2>";
        echo "<textarea cols='30' class='coment-area' disabled>$email</textarea>";
        echo "<br>";
        echo "<textarea cols='30' class='coment-area' disabled>$komentar</textarea>";
        echo "<textarea cols='30' class='coment-area' disabled>$no_hp</textarea>";
        echo "</div>";
    }   

?>