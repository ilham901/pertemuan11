<?php
$link = mysqli_connect("localhost", "root", "");
$dbname = "lat_dbase";
$cek = mysqli_query($link, "CREATE DATABASE $dbname") or die("Couldn't Create Database: $dbname");
if ($cek) {
    echo "Database $dbname berhasil dibuat";
}
?>
© 2021 GitHub, Inc.
