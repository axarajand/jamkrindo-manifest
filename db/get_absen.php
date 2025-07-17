<?php
include 'koneksi.php';

$querySentul = $koneksi->prepare("
    SELECT 
    u.user_nama_lengkap, 
    a.absen_masuk
FROM tb_user u
LEFT JOIN tb_absen a 
    ON u.user_nama_lengkap = a.absen_nama_lengkap 
    AND DATE(a.absen_masuk) = CURDATE()
WHERE u.user_venue = 'Sentul'
ORDER BY 
    CASE WHEN a.absen_masuk IS NULL THEN 1 ELSE 0 END, 
    a.absen_masuk DESC, 
    u.user_nama_lengkap ASC; 
");

$querySentul->execute();
$resultSentul = $querySentul->get_result();

$absen_dataSentul = [];
while ($rowSentul = $resultSentul->fetch_assoc()) {
    $absen_dataSentul[] = $rowSentul;
}

$queryJogja = $koneksi->prepare("
    SELECT 
    u.user_nama_lengkap, 
    a.absen_masuk
FROM tb_user u
LEFT JOIN tb_absen a 
    ON u.user_nama_lengkap = a.absen_nama_lengkap 
    AND DATE(a.absen_masuk) = CURDATE()
WHERE u.user_venue = 'Jogja'
ORDER BY 
    CASE WHEN a.absen_masuk IS NULL THEN 1 ELSE 0 END, 
    a.absen_masuk DESC, 
    u.user_nama_lengkap ASC; 
");

$queryJogja->execute();
$resultJogja = $queryJogja->get_result();

$absen_dataJogja = [];
while ($rowJogja = $resultJogja->fetch_assoc()) {
    $absen_dataJogja[] = $rowJogja;
}
?>