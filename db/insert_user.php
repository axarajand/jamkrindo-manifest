<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = trim($_POST['nama_lengkap']);
    $nama_panggilan = trim($_POST['user_nama_panggilan']);
    $jenis_kelamin = trim($_POST['user_jenis_kelamin']);
    $team = trim($_POST['user_team']);
    $venue = trim($_POST['user_venue']);
    $jabatan = trim($_POST['user_jabatan']);
    $unit_kerja = trim($_POST['user_unit_kerja']);
    $jenis_kendaraan = trim($_POST['user_jenis_kendaraan']);
    $nama_kendaraan = trim($_POST['user_nama_kendaraan']);
    $person = 1; 
    $nama_villa = trim($_POST['user_nama_villa']);
    $kapasitas = trim($_POST['user_kapasitas']);
    $tipe_bed = trim($_POST['user_tipe_bed']);

    $stmt = $koneksi->prepare("INSERT INTO tb_user (user_nama_lengkap, user_nama_panggilan, user_jenis_kelamin, user_team, user_venue, user_jabatan, user_unit_kerja, user_jenis_kendaraan, user_nama_kendaraan, user_person, user_nama_villa, user_kapasitas, user_tipe_bed) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $nama_lengkap, $nama_panggilan, $jenis_kelamin, $team, $venue, $jabatan, $unit_kerja, $jenis_kendaraan, $nama_kendaraan, $person, $nama_villa, $kapasitas, $tipe_bed);

    if ($stmt->execute()) {
        $_SESSION['swal_message'] = "<p><b>Berhasil!</b><br>Data pengguna telah ditambahkan!</p>";
        $_SESSION['swal_icon'] = "success";
    } else {
        $_SESSION['swal_message'] = "<p><b>Gagal!</b><br>Tidak dapat menambahkan data!</p>";
        $_SESSION['swal_icon'] = "error";
    }

    $stmt->close();
    $koneksi->close();
    header("Location: ../index.php#peserta");
    exit;
} else {
    $_SESSION['swal_message'] = "<p><b>Gagal!</b><br>Akses tidak diizinkan!</p>";
    $_SESSION['swal_icon'] = "error";
    header("Location: ../index.php#peserta");
    exit;
}