<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_nama_lengkap = strtolower(str_replace(' ', '', $_POST['user_nama_lengkap']));
    $stmt = $koneksi->prepare("SELECT * FROM tb_user WHERE REPLACE(LOWER(user_nama_lengkap), ' ', '') = ?");
    $stmt->bind_param("s", $user_nama_lengkap);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_nama_lengkap'] = $user_nama_lengkap;
        $_SESSION['login_time'] = time();
        
        $row = $result->fetch_assoc();
        $_SESSION['user_nama_lengkap_raw'] = $row['user_nama_lengkap']; 
        $_SESSION['user_venue'] = $row['user_venue']; 

        $_SESSION['swal_message'] = "<p><b>Login berhasil!</b><br>Selamat datang, {$_SESSION['user_nama_lengkap_raw']}!</p>";
        $_SESSION['swal_icon'] = "success";
        header("Location: ../index.php");
        exit;
    } else {
        $_SESSION['swal_message'] = "<p><b>Login gagal!</b><br>Nama tidak ditemukan!</p>";
        $_SESSION['swal_icon'] = "error";
        header("Location: ../index.php");
        exit;
    }
}
?>
