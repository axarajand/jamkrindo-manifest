<?php
include 'koneksi.php';

if (isset($_SESSION['user_nama_lengkap'])) {
	$user_nama_lengkap = $_SESSION['user_nama_lengkap_raw'];

	$query = $koneksi->prepare("SELECT absen_id FROM tb_absen WHERE absen_nama_lengkap = ? AND DATE(absen_masuk) = CURDATE()");
	if ($query === false) {
	    die("Query error: " . $koneksi->error);
	}

	$query->bind_param("s", $user_nama_lengkap);
	if (!$query->execute()) {
	    die("Eksekusi query gagal: " . $query->error);
	}

	$result = $query->get_result();
	$num_rows = $result->num_rows;

	$query->close();
	$koneksi->close();
}
?>