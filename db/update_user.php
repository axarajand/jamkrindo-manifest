<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old_nama = trim($_POST['old_nama_lengkap']);
    $nama_lengkap = trim($_POST['nama_lengkap']);
    $user_nama_panggilan = trim($_POST['user_nama_panggilan']);
    $user_jenis_kelamin = trim($_POST['user_jenis_kelamin']);
    $user_team = trim($_POST['user_team']);
    $user_venue = trim($_POST['user_venue']);
    $user_jabatan = trim($_POST['user_jabatan']);
    $user_unit_kerja = trim($_POST['user_unit_kerja']);
    $user_jenis_kendaraan = trim($_POST['user_jenis_kendaraan']);
    $user_nama_kendaraan = trim($_POST['user_nama_kendaraan']);
    $user_nama_villa = trim($_POST['user_nama_villa']);
    $user_kapasitas = trim($_POST['user_kapasitas']);
    $user_tipe_bed = trim($_POST['user_tipe_bed']);

    if (
        empty($nama_lengkap) || empty($user_nama_panggilan) || empty($user_jenis_kelamin) || 
        empty($user_team) || empty($user_venue) || empty($user_jabatan) || 
        empty($user_unit_kerja) || empty($user_jenis_kendaraan) || empty($user_nama_kendaraan) || 
        empty($user_nama_villa) || empty($user_kapasitas) || empty($user_tipe_bed)
    ) {
        $_SESSION['swal_message'] = "<p><b>Gagal!</b><br>Semua kolom harus diisi!</p>";
        $_SESSION['swal_icon'] = "warning";
        header("Location: ../index.php");
        exit;
    }

    $stmt = $koneksi->prepare("UPDATE tb_user SET 
        user_nama_lengkap = ?, user_nama_panggilan = ?, user_jenis_kelamin = ?, user_team = ?, 
        user_venue = ?, user_jabatan = ?, user_unit_kerja = ?, user_jenis_kendaraan = ?, 
        user_nama_kendaraan = ?, user_nama_villa = ?, user_kapasitas = ?, user_tipe_bed = ? 
        WHERE user_nama_lengkap = ?");
    
    $stmt->bind_param(
        "sssssssssssss", 
        $nama_lengkap, $user_nama_panggilan, $user_jenis_kelamin, $user_team, 
        $user_venue, $user_jabatan, $user_unit_kerja, $user_jenis_kendaraan, 
        $user_nama_kendaraan, $user_nama_villa, $user_kapasitas, $user_tipe_bed, $old_nama
    );

    if ($stmt->execute()) {
        $_SESSION['swal_message'] = "<p><b>Berhasil!</b><br>Data peserta telah diperbarui!</p>";
        $_SESSION['swal_icon'] = "success";
    } else {
        $_SESSION['swal_message'] = "<p><b>Gagal!</b><br>Tidak dapat memperbarui data!</p>";
        $_SESSION['swal_icon'] = "error";
    }

    $stmt->close();
    $koneksi->close();
    header("Location: ../index.php#peserta");
    exit;
}
?>