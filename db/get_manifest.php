<?php
include 'koneksi.php';

if (isset($_SESSION['user_nama_lengkap_raw'])) {
    $user_nama_lengkap = $_SESSION['user_nama_lengkap_raw']; 

    $query = $koneksi->prepare("SELECT * FROM tb_user WHERE user_nama_lengkap = ?");
    if (!$query) {
        die("Query error: " . $koneksi->error);
    }

    $query->bind_param("s", $user_nama_lengkap);
    if (!$query->execute()) {
        die("Eksekusi query gagal: " . $query->error);
    }

    $result = $query->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
    } else {
        $row = null;
    }

    $query->close();
    $koneksi->close();
} else {
    $row = null;
}
?>
