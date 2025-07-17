<?php
session_start();
session_destroy();

session_start();
$_SESSION['swal_message'] = "<p><b>Logout berhasil!</p>";
$_SESSION['swal_icon'] = "success";

header("Location: ../index.php");
exit;
?>
