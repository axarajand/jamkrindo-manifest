-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2025 pada 14.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamkrindo-manifest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `absen_id` int(11) NOT NULL,
  `absen_masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `absen_nama_lengkap` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`absen_id`, `absen_masuk`, `absen_nama_lengkap`) VALUES
(98, '2025-02-22 06:25:20', 'Fikri Putri Sandra'),
(99, '2025-02-22 07:16:22', 'Arry Widyasanti'),
(100, '2025-02-22 07:21:06', 'Fikri Putri Sandra'),
(101, '2025-02-22 07:21:50', 'D. Ihwan'),
(102, '2025-02-22 07:24:01', 'Imanullah khoirul rakhman'),
(103, '2025-02-22 07:24:51', 'Andy Irawan'),
(104, '2025-02-22 07:24:57', 'Irma Hartati'),
(105, '2025-02-22 07:24:59', 'Heryanto Nugroho'),
(106, '2025-02-22 07:25:04', 'Anggi Lestari Utami'),
(107, '2025-02-22 07:25:04', 'Danang Arie Wibowo'),
(108, '2025-02-22 07:25:18', 'Sarah Annahdi'),
(109, '2025-02-22 07:25:33', 'Tiara Arafatia Annisa Habibie'),
(110, '2025-02-22 07:25:46', 'Ananda Kamila'),
(111, '2025-02-22 07:26:00', 'Bukti Sri Manoto'),
(112, '2025-02-22 07:26:24', 'Andrey Miftah Purba'),
(113, '2025-02-22 07:26:41', 'Ridho Eko Prasetyo'),
(114, '2025-02-22 07:26:50', 'Stevan Gneissanda Hage'),
(115, '2025-02-22 07:27:10', 'Muhammad Dhia Assegaf'),
(116, '2025-02-22 07:28:03', 'Muhammad Nurdin Alamsyah'),
(117, '2025-02-22 07:28:08', 'Sicco Satria Negara'),
(118, '2025-02-22 07:28:18', 'Braychiho'),
(119, '2025-02-22 07:28:21', 'Angela Prieska'),
(120, '2025-02-22 07:28:27', 'Eko Setiawan'),
(121, '2025-02-22 07:28:52', 'Mutiara Prasiwi Chaerunisa'),
(122, '2025-02-22 07:28:59', 'Pardiyono'),
(123, '2025-02-22 07:29:13', 'Supawit'),
(124, '2025-02-22 07:29:27', 'Imron Wahidin'),
(125, '2025-02-22 07:30:56', 'Agung Brahmantaka'),
(126, '2025-02-22 07:31:01', 'Nuzulia Rahmah Ardias'),
(127, '2025-02-22 07:32:06', 'Nisa Hanindita'),
(128, '2025-02-22 07:36:11', 'Vina Lestari'),
(129, '2025-02-22 07:38:36', 'Dina Indriyanti Tondang'),
(130, '2025-02-22 07:40:12', 'Lita Aprillia Mandala'),
(131, '2025-02-22 07:46:07', 'Dhevi Novia Sari'),
(132, '2025-02-22 08:14:39', 'Ali Azhari'),
(133, '2025-02-22 09:54:55', 'Valens Bryan'),
(134, '2025-02-22 10:02:28', 'Rudyanto Siregar'),
(135, '2025-02-22 14:50:23', 'Andi Erdiansyah'),
(136, '2025-02-23 07:25:21', 'Fikri Putri Sandra'),
(137, '2025-02-23 07:33:44', 'D. Ihwan'),
(138, '2025-02-23 08:34:02', 'Lita Aprillia Mandala'),
(139, '2025-02-23 08:39:44', 'Ananda Kamila'),
(140, '2025-02-23 09:07:03', 'Dina Indriyanti Tondang'),
(141, '2025-02-23 13:25:39', 'Angela Prieska'),
(142, '2025-02-24 09:03:18', 'Chairi Achyami Ulfah'),
(143, '2025-02-24 13:19:30', 'Andi Erdiansyah'),
(144, '2025-02-25 19:04:26', 'Danang Arie Wibowo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_nama_lengkap` varchar(500) NOT NULL,
  `user_nama_panggilan` varchar(500) DEFAULT NULL,
  `user_jenis_kelamin` enum('L','P') DEFAULT NULL,
  `user_team` int(11) DEFAULT NULL,
  `user_venue` enum('Sentul','Jogja') DEFAULT NULL,
  `user_jabatan` varchar(500) DEFAULT NULL,
  `user_unit_kerja` varchar(500) DEFAULT NULL,
  `user_jenis_kendaraan` enum('ELF','BUS','BELUM TERVERIFIKASI') DEFAULT NULL,
  `user_nama_kendaraan` enum('ELF 1','ELF 2','ELF 3','BUS 1 Melody','BUS 2 BigBird','BUS 3 BigBird','BELUM TERVERIFIKASI') DEFAULT NULL,
  `user_person` int(11) DEFAULT NULL,
  `user_kapasitas` int(11) DEFAULT NULL,
  `user_tipe_bed` enum('VIP','KING','QUEEN','TWIN','SINGLE','EXTRA BED','BELUM TERVERIFIKASI') DEFAULT NULL,
  `user_nama_villa` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_nama_lengkap`, `user_nama_panggilan`, `user_jenis_kelamin`, `user_team`, `user_venue`, `user_jabatan`, `user_unit_kerja`, `user_jenis_kendaraan`, `user_nama_kendaraan`, `user_person`, `user_kapasitas`, `user_tipe_bed`, `user_nama_villa`) VALUES
('Abdillah Fajar Nugraha', NULL, 'L', NULL, 'Jogja', 'bisnis', NULL, 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Achmad Muhlison', NULL, 'L', NULL, 'Jogja', 'Pemimpin Wilayah', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 1, 'SINGLE', 'Hotel Melia Purosani'),
('Achmad Zuel Fahmi', NULL, 'L', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Ade Fadhillah', NULL, 'L', NULL, 'Jogja', 'bisnis', NULL, 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Adhiestya Purna Nugraha', NULL, 'L', NULL, 'Jogja', 'KKWT ELH', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Aditya Muhammad Azis', NULL, 'L', NULL, 'Jogja', 'Staf Helpdesk TI', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Admin Jamkrindo 2025', 'Admin', 'L', 1000, 'Sentul', 'Admin', NULL, NULL, NULL, NULL, 1, NULL, NULL),
('Adnan Abdillah', NULL, 'L', NULL, 'Jogja', 'RM CBC', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Adri Nuryono Arismunandar', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Operasional', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Agung Brahmantaka', 'Agung', 'L', 2, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 2', 1, 3, 'EXTRA BED', 'Villa Bunkbed'),
('Agus Prayitno', 'Agus', 'L', 6, 'Sentul', 'Driver', 'KCK', 'ELF', 'ELF 3', 1, 5, 'TWIN', 'Villa Kayu Suite Kumolo'),
('Aldino Rahardian', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Klaim dan Subrogasi', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Aldy Cahya Eka Putra', NULL, 'L', NULL, 'Jogja', 'Cakar', 'Serang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Ali Azhari', 'Ali', 'L', 3, 'Sentul', 'Driver', 'KCK', 'ELF', 'ELF 3', 1, 5, 'TWIN', 'Villa Kayu Suite Sungkai'),
('Alif Wiyoko', NULL, 'L', NULL, 'Jogja', 'Kepala Bagian Klaim dan Subrogsi', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Ananda Kamila', 'Nanda', 'P', 6, 'Sentul', 'OS Adm Penjaminan Bisnis 2', 'KCK', 'ELF', 'ELF 2', 1, 7, 'QUEEN', 'Villa Family Suite Kinabalu'),
('Andi Erdiansyah', 'Erdi', 'L', 5, 'Sentul', 'Driver', 'KCK', 'ELF', 'ELF 3', 1, 3, 'EXTRA BED', 'Villa Bunkbed'),
('Andina Irdianti', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Klaim dan Subrogasi', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Andini Sefriyani', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Klaim dan Subrogasi', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Andrey Miftah Purba', 'Andrey', 'L', 1, 'Sentul', 'OS Adm Penjaminan Bisnis 1', 'KCK', 'ELF', 'ELF 2', 1, 3, 'TWIN', 'Villa Bunkbed'),
('Andritta Oggy Thovaja', NULL, 'L', NULL, 'Jogja', 'Admin Bagian Bisnis 1', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Andy Irawan', 'Andy', 'L', 4, 'Sentul', 'Office Boy', 'KCK', 'ELF', 'ELF 3', 1, 5, 'TWIN', 'Villa Kayu Suite Sungkai'),
('Angela Prieska', 'Angel', 'P', 2, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 7, 'KING', 'Villa Family Suite Kinabalu'),
('Anggi Lestari Utami', 'Anggi', 'P', 3, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 7, 'KING', 'Villa Family Suite Kinabalu'),
('Annisa Nikhlatul Akmalia', NULL, 'P', NULL, 'Jogja', 'KKWT ELH', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Arry Widyasanti', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Operasional', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Ati Suci Ruhiati', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Operasional', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Berta Susanti', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Bisnis', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Bhisma Radhitya Yudianto', NULL, 'L', NULL, 'Jogja', 'Kepala Bagian Klaim dan Subrogasi', 'Serang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Braychiho', 'Chiho', 'L', 4, 'Sentul', 'OS Adm Penjaminan Bisnis 2', 'KCK', 'ELF', 'ELF 2', 1, 7, 'EXTRA BED', 'Villa Family Suite Kilimanjaro'),
('Brianika Kusumastuti', NULL, 'P', NULL, 'Jogja', 'Kepala Bagian Operasional', 'Serang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Bukti Sri Manoto', 'Sri', 'L', 5, 'Sentul', 'Office Boy', 'KCK', 'ELF', 'ELF 3', 1, 5, 'QUEEN', 'Villa Kayu Suite Kumolo'),
('Bunga Vitara', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Chairi Achyami Ulfah', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Chatra Wahyu Irfantara', NULL, 'L', NULL, 'Jogja', 'Kepala Kantor Unit Pelayanan Bogor', 'Kantor Unit Pelayanan Bogor', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('D. Ihwan', 'Iwan', 'L', 2, 'Sentul', 'Office Boy', 'KCK', 'ELF', 'ELF 3', 1, 5, 'TWIN', 'Villa Kayu Suite Kumolo'),
('Danang Arie Wibowo', 'Danang', 'L', 3, 'Sentul', 'OS Adm Operasional', 'KCK', 'ELF', 'ELF 3', 1, 5, 'TWIN', 'Villa Kayu Suite Sungkai'),
('Deasy Aryaningsih', NULL, 'P', NULL, 'Jogja', 'Kepala Bagian Operasional', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('DEVELOPMENT', '', 'L', 0, 'Jogja', '', '', 'BELUM TERVERIFIKASI', 'BELUM TERVERIFIKASI', 1, 0, 'BELUM TERVERIFIKASI', ''),
('Dhevi Novia Sari', 'Dhevi', 'P', 4, 'Sentul', 'Staf Operasional', 'KCK', 'ELF', 'ELF 3', 1, 7, 'QUEEN', 'Villa Family Suite Himalaya'),
('Dian Yulianingsih Gumay', 'Dian', 'P', 1, 'Sentul', 'Staf Klaim dan Subrogasi', 'KCK', 'ELF', 'ELF 2', 1, 7, 'EXTRA BED', 'Villa Family Suite Himalaya'),
('Dina Indriyanti Tondang', 'Dina', 'P', 2, 'Sentul', 'OS Adm Klaim dan Subrogasi', 'KCK', 'ELF', 'ELF 2', 1, 3, 'EXTRA BED', 'Villa HM Suite Pangrago'),
('Dinda Safira', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Dita Astrina Sinaga', NULL, 'P', NULL, 'Jogja', 'Staf Kantor Unit Pelayanan', 'Kantor Unit Pelayanan Bekasi', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Dyas Suprapto', NULL, NULL, NULL, 'Jogja', NULL, 'Kantor Cabang TANGERANG', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Eko Setiawan', 'Wawan', 'L', 2, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 2', 1, 7, 'KING', 'Villa Family Suite Kilimanjaro'),
('Emma Cristy', 'Emma', 'P', 0, 'Jogja', 'Supporting Bisnis', 'Kantor Cabang Pontianak', 'BELUM TERVERIFIKASI', 'BELUM TERVERIFIKASI', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Erna Yunita Sari', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Fachry Azhar', NULL, 'L', NULL, 'Jogja', 'Kepala Kantor Unit Pelayanan Cibinong', 'Kantor Unit Pelayanan Cibinong', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Fahmi Rizaludin', NULL, 'L', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Fandy Pramasatya Yudha', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Bisnis 2', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Fanny Harmayanti', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Klaim dan Subrogasi', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Fatika Dian Wibawasih', NULL, 'P', NULL, 'Jogja', 'Staf Kantor Unit Pelayanan', 'Kantor Unit Pelayanan Bogor', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Fikri Putri Sandra', 'Sandra', 'P', 4, 'Sentul', 'OS Adm Klaim dan Subrogasi', 'KCK', 'ELF', 'ELF 3', 1, 7, 'EXTRA BED', 'Villa Family Suite Kinabalu'),
('Gilang Suhandi', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Bisnis', 'Serang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Gunawan Wibisono', 'Gunbi', 'L', 5, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 3, 'TWIN', 'Villa Bunkbed'),
('Hanifah Ismiarni', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Klaim dan Subrogasi', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Hary Budiarjo', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Bisnis', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Heryanto Nugroho', 'Hery', 'L', 1, 'Sentul', 'Pemimpin Cabang Khusus', 'KCK', 'ELF', 'ELF 1', 1, 1, 'VIP', 'Villa Kayu Suite Meranti'),
('Hilda Yosiana', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Bisnis', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('I Made Agustian Marendra', NULL, 'L', NULL, 'Jogja', 'Manajer Bisnis I, Kantor Cabang Jakarta', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Ike Sulistyo Wiwin Efawati', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Operasional', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Ikhsan Maulana Yusuf', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Bisnis', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Imanullah khoirul rakhman', 'Rakhman', 'L', 4, 'Sentul', 'Kepala Bagian Operasional', 'KCK', 'ELF', 'ELF 1', 1, 5, 'TWIN', 'Villa Kayu Suite Sungkai'),
('Imron Wahidin', 'Imron', 'L', 6, 'Sentul', 'Risk Officer Penugasan Divisi MR', 'KCK', 'ELF', 'ELF 3', 1, 3, 'TWIN', 'Villa Bunkbed'),
('Indah Purnama Sari Rizky', 'Indah', 'P', 2, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 7, 'TWIN', 'Villa Family Suite Himalaya'),
('Irma Hartati', 'Irma', 'P', 6, 'Sentul', 'Risk Officer Penugasan Divisi MR', 'KCK', 'ELF', 'ELF 3', 1, 3, 'TWIN', 'Villa HM Suite Rinjani'),
('Jessica Oktaviani', NULL, 'P', NULL, 'Jogja', 'KKWT Umum BISNIS', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Julian Handoko', NULL, 'L', NULL, 'Jogja', 'Pemimpin Cabang', 'Serang', 'BUS', 'BUS 3 BigBird', 1, 1, 'SINGLE', 'Hotel Melia Purosani'),
('K. Andikaputra Nursantio', NULL, 'L', NULL, 'Jogja', 'Pemimpin Cabang', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 1, 'SINGLE', 'Hotel Melia Purosani'),
('Kartika Medianawati', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Kuncoro Suryo Guritno', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Operasional', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Kurniadi Kusma', 'Kurniadi', 'L', 0, 'Jogja', 'Supporting Operasional', 'Kantor Cabang Pontianak', 'BELUM TERVERIFIKASI', 'BELUM TERVERIFIKASI', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Laila Dewi Nurrachma', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Lina Karlina', 'Lina', 'P', 5, 'Sentul', 'OS Adm Penjaminan Bisnis 2', 'KCK', 'ELF', 'ELF 2', 1, 7, 'QUEEN', 'Villa Family Suite Kinabalu'),
('Lita Aprillia Mandala', 'Lita', 'P', 6, 'Sentul', 'Staf Klaim dan Subrogasi', 'KCK', 'ELF', 'ELF 2', 1, 3, 'TWIN', 'Villa HM Suite Pangrago'),
('M. Arief Indra Priyono', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Bisnis', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('M. Budi Herdian', NULL, 'L', NULL, 'Jogja', 'operasional', NULL, 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Marchyafarra Hafidz', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Miftahuzzaman', NULL, 'L', NULL, 'Jogja', 'Staf Kantor Unit Pelayanan', 'Kantor Unit Pelayanan Cibinong', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Mohammad Carleone Marala', NULL, 'L', NULL, 'Jogja', 'Kepala Bagian Bisnis', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 1, 'SINGLE', 'Hotel Melia Purosani'),
('Muftie Dias', NULL, 'L', NULL, 'Jogja', 'Kepala Bagian Bisnis', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Muhamad Azikri Gumilar', 'Zikri', 'L', 3, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 7, 'TWIN', 'Villa Family Suite Kilimanjaro'),
('Muhamad Nur Arifin', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Bisnis', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Muhammad Dhia Assegaf', 'Dhia', 'L', 4, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 7, 'TWIN', 'Villa Family Suite Kilimanjaro'),
('Muhammad Nurdin Alamsyah', 'Nurdin', 'L', 3, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 2', 1, 3, 'TWIN', 'Villa Bunkbed'),
('Muhammad Rafli Rasyidin', NULL, 'L', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Muhammad Ridwan Harahap', NULL, 'L', NULL, 'Jogja', 'Staf Risk Officer (RO)', 'KANWIL', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Mustiah', NULL, 'P', NULL, 'Jogja', 'bisnis', NULL, 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Mutiara Prasiwi Chaerunisa', 'Muti', 'P', 1, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 2', 1, 7, 'TWIN', 'Villa Family Suite Kinabalu'),
('Nabila Nisa', NULL, 'P', NULL, 'Jogja', 'operasional', NULL, 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Nabilah Ameliana', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Nadhif Ardianto', NULL, 'L', NULL, 'Jogja', 'RM CBC', 'Kantor Unit Pelayanan Bogor', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Nadila Lintang Hapsari', NULL, 'P', NULL, 'Jogja', 'KKWT ELH', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Nisa Hanindita', 'Nisa', 'P', 5, 'Sentul', 'Kepala Bagian Klaim dan Subrogasi', 'KCK', 'ELF', 'ELF 1', 1, 3, 'TWIN', 'Villa HM Suite Pangrago'),
('Nour Fitriyah', NULL, 'P', NULL, 'Jogja', 'klaim', NULL, 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Novita Ningrum', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Operasional', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Novria Budiati', NULL, 'P', NULL, 'Jogja', 'Staf Kantor Unit Pelayanan', 'Kantor Unit Pelayanan Bekasi', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Nuzulia Rahmah Ardias', 'UuL', 'P', 1, 'Sentul', 'KKWT - Relationship Manager', 'KCK', 'ELF', 'ELF 2', 1, 7, 'QUEEN', 'Villa Family Suite Himalaya'),
('Okky Prihadi', 'Okky', 'L', 6, 'Sentul', 'Operasional Adm Bisnis', 'KCK', 'ELF', 'ELF 2', 1, 3, 'TWIN', 'Villa Bunkbed'),
('Oktaviana Indra Puspita', NULL, 'L', NULL, 'Jogja', 'Manajer Klaim dan Subrogasi, Kantor Cabang Jakarta', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Pardiyono', 'Pardi', 'L', 4, 'Sentul', 'Driver', 'KCK', 'ELF', 'ELF 3', 1, 5, 'TWIN', 'Villa Kayu Suite Kumolo'),
('Paryanti', NULL, 'P', NULL, 'Jogja', 'Staf Kantor Unit Pelayanan', 'Kantor Unit Pelayanan Bekasi', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Penny Eka Yulianti', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Operasional', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Popi Purnamawati', NULL, 'P', NULL, 'Jogja', 'Staf Kantor Unit Pelayanan', 'Kantor Unit Pelayanan Cibinong', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Prathiwi Isra Rizki', 'Thiwi', 'P', 5, 'Sentul', 'Staf Operasional', 'KCK', 'ELF', 'ELF 3', 1, 7, 'KING', 'Villa Family Suite Himalaya'),
('Prita Widy Wardani', NULL, 'P', NULL, 'Jogja', 'Pemimpin Cabang Jakarta', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 1, 'SINGLE', 'Hotel Melia Purosani'),
('Putri Puji Utami', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Unit Pelayanan Bekasi', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('R Dida Rizqi Calista', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Rachmawati Jihan Dewi', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Klaim dan Subrogasi', 'Serang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Rafli Hamdi Wira Putra', NULL, 'L', NULL, 'Jogja', 'Bagian Klaim & Subrogasi', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Refitra Kusumawardani', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Ricky Zulkarnain', NULL, 'L', NULL, 'Jogja', 'KKWT', 'Serang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Ridho Eko Prasetyo', 'Ridho', 'L', 1, 'Sentul', 'KKWT - Relationship Manager', 'KCK', 'ELF', 'ELF 2', 1, 7, 'KING', 'Villa Family Suite Kilimanjaro'),
('Rifky Wafiq Baabud', NULL, 'L', NULL, 'Jogja', 'Staf Bagian Bisnis', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Rika Fadliyah', NULL, 'P', NULL, 'Jogja', 'Staf Kantor Unit Pelayanan', 'Kantor Unit Pelayanan Bogor', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Rika Nur Rahayuningsih', 'Rika', 'P', 5, 'Sentul', 'Staf Klaim dan Subrogasi', 'KCK', 'ELF', 'ELF 2', 1, 7, 'KING', 'Villa Family Suite Himalaya'),
('Riza Harahap', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Operasional', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Robby Julandri', NULL, 'L', NULL, 'Jogja', 'Wakil Pemimpin Wilayah', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 1, 'SINGLE', 'Hotel Melia Purosani'),
('Rosaria Rahardy', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Bisnis', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Rosario Imelda Manurung', NULL, 'P', NULL, 'Jogja', 'Staf Compliance Officer (CO)', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Rudyanto Siregar', 'Rudy', 'L', 2, 'Sentul', 'Kepala Bagian Penjaminan Bisnis 1', 'KCK', 'ELF', 'ELF 1', 1, 3, 'TWIN', 'Villa Bunkbed'),
('Rusakim', 'Akim', 'L', 6, 'Sentul', 'Office Boy', 'KCK', 'ELF', 'ELF 3', 1, 5, 'QUEEN', 'Villa Kayu Suite Kumolo'),
('Rusmantoro', NULL, 'L', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Sarah Annahdi', 'Sarah', 'P', 3, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 7, 'TWIN', 'Villa Family Suite Himalaya'),
('Shahnaz Fakhrial Al-hakim', NULL, 'L', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Sicco Satria Negara', 'Sicco', 'L', 1, 'Sentul', 'OS Adm Operasional', 'KCK', 'ELF', 'ELF 3', 1, 3, 'EXTRA BED', 'Villa Bunkbed'),
('Silva Kurnia', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Klaim dan Subrogasi', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Sisca Erika Carolina', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Siti Amalia', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Siti Aminah', NULL, 'P', NULL, 'Jogja', 'Manajer Operasional, Kantor Cabang Jakarta', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('SM. Effendi', NULL, 'L', NULL, 'Jogja', 'Pelaksana Operasional', 'Serang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Stevan Gneissanda Hage', 'Stevan', 'L', 5, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 7, 'QUEEN', 'Villa Family Suite Kilimanjaro'),
('Supawit', 'Pawit', 'L', 2, 'Sentul', 'Driver', 'KCK', 'ELF', 'ELF 3', 1, 5, 'TWIN', 'Villa Kayu Suite Sungkai'),
('Syarif Hidayatullah', NULL, 'L', NULL, 'Jogja', 'Staf Kantor Unit Pelayanan', 'Kantor Unit Pelayanan Bekasi', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Tiara Arafatia Annisa Habibie', 'Tiara', 'P', 3, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 7, 'TWIN', 'Villa Family Suite Kinabalu'),
('Tri Yusniar', NULL, 'P', NULL, 'Jogja', 'Admin Bagian Operasional', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Valens Bryan', 'Bryan', 'L', 1, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 1', 1, 7, 'EXTRA BED', 'Villa Family Suite Kilimanjaro'),
('Vina Lestari', 'Vina', 'P', 4, 'Sentul', 'Relationship Manager', 'KCK', 'ELF', 'ELF 2', 1, 3, 'EXTRA BED', 'Villa HM Suite Rinjani'),
('Vivi Candra', NULL, 'P', NULL, 'Jogja', 'Staf Bagian Klaim dan Subrogasi', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Warih Nugroho', NULL, 'L', NULL, 'Jogja', 'Kepala Bagian Operasional', 'KANWIL', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Winda Ayu Marthia', NULL, 'P', NULL, 'Jogja', 'RM CBC', 'Tangerang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Yan Jumaedi', NULL, 'L', NULL, 'Jogja', 'Manajer Bisnis II, Kantor Cabang Jakarta', 'Kantor Cabang Jakarta', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Yayat Hidayat', NULL, 'L', NULL, 'Jogja', 'Supporting Operasional', 'Serang', 'BUS', 'BUS 3 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Yoga Ridzkika Prawira', NULL, 'L', NULL, 'Jogja', 'Kepala Kantor Unit Pelayanan Bekasi', 'Kantor Unit Pelayanan Bekasi', 'BUS', 'BUS 2 BigBird', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Yuliana Isnaini', NULL, 'P', NULL, 'Jogja', 'KKWT Umum', 'Kantor Cabang Jakarta', 'BUS', 'BUS 1 Melody', 1, 2, 'TWIN', 'Hotel Melia Purosani'),
('Yuliana Nurbani', 'Yuli', 'P', 3, 'Sentul', 'Kepala Bagian Penjaminan Bisnis 2', 'KCK', 'ELF', 'ELF 1', 1, 3, 'TWIN', 'Villa HM Suite Rinjani');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`absen_id`),
  ADD KEY `nama_lengkap` (`absen_nama_lengkap`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_nama_lengkap`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `absen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
