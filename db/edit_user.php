<?php
include 'koneksi.php';

if (isset($_GET['user_nama_lengkap'])) {
    $user_nama_lengkap = $_GET['user_nama_lengkap'];

    $stmt = $koneksi->prepare("SELECT * FROM tb_user WHERE user_nama_lengkap = ?");
    $stmt->bind_param("s", $user_nama_lengkap);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        echo json_encode($row);
    } else {
        echo json_encode(["error" => "User tidak ditemukan"]);
    }

    $stmt->close();
    $koneksi->close();
}
?>