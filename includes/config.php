<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "perpus";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_error) {
    die("Koneksi Gagal Cihuyy: " . $mysqli->connect_error);
}
?>