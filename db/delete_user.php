<?php
session_start();
include 'koneksi.php';

if (isset($_GET['user_nama_lengkap'])) {
    $user_nama_lengkap = strtolower(str_replace(' ', '', $_GET['user_nama_lengkap']));

    $stmt = $koneksi->prepare("DELETE FROM tb_user WHERE REPLACE(LOWER(user_nama_lengkap), ' ', '') = ?");
    $stmt->bind_param("s", $user_nama_lengkap);

    if ($stmt->execute()) {
        $_SESSION['swal_message'] = "<p><b>Data berhasil dihapus!</b></p>";
        $_SESSION['swal_icon'] = "success";
    } else {
        $_SESSION['swal_message'] = "<p><b>Gagal menghapus data!</b></p>";
        $_SESSION['swal_icon'] = "error";
    }

    $stmt->close();
} else {
    $_SESSION['swal_message'] = "<p><b>Nama tidak ditemukan!</b></p>";
    $_SESSION['swal_icon'] = "warning";
}

$koneksi->close();
header("Location: ../index.php#peserta");
exit;
?>
