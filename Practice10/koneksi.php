<?php
    $servername = "localhost";
    $username = "ifscxyz1_18102069";
    $password = "qnwGbR8vfDYe";
    $dbname = "ifscxyz1_18102069";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>