<?php
include 'koneksi.php';

$queryUserSentul = "SELECT * FROM tb_user WHERE user_venue = 'Sentul' ORDER BY user_nama_lengkap ASC";
$resultUserSentul = $koneksi->query($queryUserSentul);

if (!$resultUserSentul) {
    die("Error: " . $koneksi->error);
}

$queryUserJogja = "SELECT * FROM tb_user WHERE user_venue = 'Jogja' ORDER BY user_nama_lengkap ASC";
$resultUserJogja = $koneksi->query($queryUserJogja);

if (!$resultUserJogja) {
    die("Error: " . $koneksi->error);
}
?>
