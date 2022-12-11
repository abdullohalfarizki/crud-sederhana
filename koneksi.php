<?php
    $host = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'db_crud_sekolah';

    $conn = mysqli_connect($host, $username, $pass, $db);
    if ($conn) {
        //echo "Berhasil terkoneksi";
    }

    mysqli_select_db($conn, $db);
?>
