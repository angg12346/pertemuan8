<?php
include "koneksi.php";
$query = "SELECT * FROM user";
$result = $mysqli->query($query);
if ($result->num_rows <= 0) {
    $username = "admin";
    $nama_lengkap = "Administrator";
    $password = md5('12345');
    $level = "admin";
    $query = "INSERT INTO user (username, nama_lengkap, password, level) value ('$username', '$nama_lengkap', '$password', '$level')";
    $mysqli->query($query);
    header('location: index.php');
} else {
    header('location: index.php');
}
?>