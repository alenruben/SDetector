-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2024 pada 05.41
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iotalen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(1, 'alenruben204@gmail.com', 72670, 1725488939),
(2, 'alenruben204@gmail.com', 47429, 1725488948),
(3, 'alenruben204@gmail.com', 86035, 1725489023),
(4, 'alenruben204@gmail.com', 98775, 1725489121),
(5, 'alenruben204@gmail.com', 59328, 1725489490),
(6, 'alenruben204@gmail.com', 96130, 1725490069),
(7, 'alenruben204@gmail.com', 55419, 1725501153),
(8, 'fumirei340@gmail.com', 49739, 1725938999),
(9, 'fumirei340@gmail.com', 13320, 1725951507),
(10, 'fumirei340@gmail.com', 85142, 1725952177),
(11, 'fumirei340@gmail.com', 60196, 1725953271),
(12, 'alenruben204@gmail.com', 59485, 1725953294),
(13, 'amaraamaya7@gmail.com', 81267, 1725953541),
(14, 'amaraamanda909@gmail.com', 24981, 1725953628),
(15, 'amaraamanda909@gmail.com', 80011, 1725954050),
(16, 'amaraamanda909@gmail.com', 81491, 1725954367),
(17, 'riabuana19@gmail.com', 47650, 1725954394),
(18, 'riabuana19@gmail.com', 11381, 1725954545),
(19, 'riabuana19@gmail.com', 47455, 1725954573),
(20, 'amaraamanda909@gmail.com', 66328, 1725954622),
(21, 'alenruben204@gmail.com', 79711, 1725954668),
(22, 'alenruben204@gmail.com', 29860, 1725954706),
(23, 'alenruben204@gmail.com', 49059, 1725954719),
(24, 'amaraamanda909@gmail.com', 92651, 1725954737),
(25, 'amaraamanda909@gmail.com', 33925, 1725954956),
(26, 'fumirei340@gmail.com', 12096, 1725955297),
(27, 'amaraamaya7@gmail.com', 64020, 1725955526),
(28, 'fumirei340@gmail.com', 11302, 1726015064),
(29, 'fumirei340@gmail.com', 92134, 1726123369),
(30, 'alenruben204@gmail.com', 22134, 1726979482),
(31, 'alenruben204@gmail.com', 92413, 1728008739),
(32, 'dita23@gmail.com', 25749, 1728571698),
(33, 'alenruben204@gmail.com', 81020, 1728571722);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor`
--

CREATE TABLE `sensor` (
  `id` int(255) NOT NULL,
  `asap` int(11) NOT NULL,
  `pir` varchar(50) NOT NULL,
  `led_merah` varchar(50) NOT NULL,
  `led_hijau` varchar(50) NOT NULL,
  `lcd` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sensor`
--

INSERT INTO `sensor` (`id`, `asap`, `pir`, `led_merah`, `led_hijau`, `lcd`, `date`) VALUES
(921, 250, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:12:09'),
(922, 249, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:13:10'),
(923, 242, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:14:10'),
(924, 247, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:15:10'),
(925, 247, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:16:10'),
(926, 245, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:17:10'),
(927, 239, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:18:10'),
(928, 236, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:19:10'),
(929, 236, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:20:10'),
(930, 233, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:21:10'),
(931, 230, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:22:10'),
(932, 228, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:23:10'),
(933, 226, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:24:10'),
(934, 224, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:25:10'),
(935, 222, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:26:10'),
(936, 220, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:27:10'),
(937, 217, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:28:10'),
(938, 214, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:29:10'),
(939, 214, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:30:10'),
(940, 213, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:31:10'),
(941, 211, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:32:10'),
(942, 210, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:33:10'),
(943, 208, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:34:10'),
(944, 206, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:35:10'),
(945, 205, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:36:10'),
(946, 202, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:37:10'),
(947, 200, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:38:10'),
(948, 198, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:39:10'),
(949, 198, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:40:10'),
(950, 197, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:41:10'),
(951, 197, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:42:10'),
(952, 193, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:43:10'),
(953, 194, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:44:10'),
(954, 189, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:45:10'),
(955, 186, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:46:10'),
(956, 183, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:47:10'),
(957, 180, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:48:10'),
(958, 178, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:49:10'),
(959, 178, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:50:10'),
(960, 176, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:51:10'),
(961, 174, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:52:10'),
(962, 174, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:53:10'),
(963, 171, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:54:10'),
(964, 167, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:55:10'),
(965, 164, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:56:10'),
(966, 162, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:57:10'),
(967, 160, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:58:10'),
(968, 160, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 01:59:10'),
(969, 159, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:00:10'),
(970, 156, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:01:10'),
(971, 154, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:02:10'),
(972, 151, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:03:10'),
(973, 157, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:04:10'),
(974, 147, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:05:10'),
(975, 144, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:06:10'),
(976, 142, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:07:10'),
(977, 142, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:08:10'),
(978, 141, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:09:10'),
(979, 141, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:10:10'),
(980, 140, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:11:10'),
(981, 139, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:12:10'),
(982, 139, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:13:10'),
(983, 136, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:14:10'),
(984, 133, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:15:10'),
(985, 133, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:16:10'),
(986, 134, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:17:10'),
(987, 135, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:18:10'),
(988, 131, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:19:10'),
(989, 129, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:20:10'),
(990, 127, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:21:10'),
(991, 124, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:22:10'),
(992, 121, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:23:10'),
(993, 119, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:24:10'),
(994, 116, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:25:10'),
(995, 118, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:26:10'),
(996, 112, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:27:10'),
(997, 109, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:28:10'),
(998, 109, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:29:10'),
(999, 105, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:30:10'),
(1000, 105, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:31:10'),
(1001, 102, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:32:10'),
(1002, 105, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:33:10'),
(1003, 106, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:34:10'),
(1004, 105, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:35:10'),
(1005, 104, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:36:10'),
(1006, 101, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:37:10'),
(1007, 100, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:38:10'),
(1008, 99, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:39:10'),
(1009, 97, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:40:10'),
(1010, 99, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:41:10'),
(1011, 90, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:42:10'),
(1012, 96, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:43:10'),
(1013, 91, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:44:10'),
(1014, 90, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:45:10'),
(1015, 89, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:46:10'),
(1016, 88, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:47:10'),
(1017, 88, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:48:10'),
(1018, 84, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:49:10'),
(1019, 83, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:50:10'),
(1020, 85, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:51:10'),
(1021, 85, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:52:10'),
(1022, 85, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:53:10'),
(1023, 84, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:54:10'),
(1024, 85, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:55:10'),
(1025, 85, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:56:10'),
(1026, 84, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:57:10'),
(1027, 79, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:58:10'),
(1028, 77, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 02:59:10'),
(1029, 77, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 03:00:10'),
(1030, 76, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 03:01:10'),
(1031, 73, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 03:02:10'),
(1032, 75, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-09 03:03:10'),
(1033, 251, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:22:17'),
(1034, 253, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:23:17'),
(1035, 253, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:24:17'),
(1036, 254, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:25:17'),
(1037, 255, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:26:17'),
(1038, 257, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:27:17'),
(1039, 259, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:28:17'),
(1040, 260, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:29:17'),
(1041, 261, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:30:17'),
(1042, 264, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:31:17'),
(1043, 267, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:32:17'),
(1044, 269, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:33:17'),
(1045, 270, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:34:17'),
(1046, 273, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:35:17'),
(1047, 273, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:36:17'),
(1048, 276, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:37:17'),
(1049, 277, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:38:17'),
(1050, 279, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:39:17'),
(1051, 280, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:40:17'),
(1052, 282, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:41:17'),
(1053, 282, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:42:17'),
(1054, 287, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:43:17'),
(1055, 288, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:44:17'),
(1056, 289, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:45:17'),
(1057, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:46:17'),
(1058, 289, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:47:17'),
(1059, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:48:17'),
(1060, 295, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:49:17'),
(1061, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:50:17'),
(1062, 300, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:51:17'),
(1063, 300, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:52:17'),
(1064, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:53:17'),
(1065, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:54:17'),
(1066, 294, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:55:17'),
(1067, 294, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:56:17'),
(1068, 291, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:57:17'),
(1069, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:58:17'),
(1070, 289, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 01:59:17'),
(1071, 287, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:00:17'),
(1072, 284, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:01:17'),
(1073, 284, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:02:17'),
(1074, 283, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:03:17'),
(1075, 280, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:04:17'),
(1076, 280, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:05:17'),
(1077, 281, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:06:17'),
(1078, 286, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:07:17'),
(1079, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:08:17'),
(1080, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:09:17'),
(1081, 293, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:10:17'),
(1082, 293, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:11:17'),
(1083, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:12:17'),
(1084, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:13:17'),
(1085, 298, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:14:17'),
(1086, 300, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-10 02:15:17'),
(1087, 251, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:22:17'),
(1088, 253, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:23:17'),
(1089, 253, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:24:17'),
(1090, 254, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:25:17'),
(1091, 255, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:26:17'),
(1092, 257, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:27:17'),
(1093, 259, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:28:17'),
(1094, 260, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:29:17'),
(1095, 261, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:30:17'),
(1096, 264, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:31:17'),
(1097, 267, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:32:17'),
(1098, 269, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:33:17'),
(1099, 270, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:34:17'),
(1100, 273, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:35:17'),
(1101, 273, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:36:17'),
(1102, 276, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:37:17'),
(1103, 277, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:38:17'),
(1104, 279, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:39:17'),
(1105, 280, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:40:17'),
(1106, 282, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:41:17'),
(1107, 282, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:42:17'),
(1108, 287, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:43:17'),
(1109, 288, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:44:17'),
(1110, 289, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:45:17'),
(1111, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:46:17'),
(1112, 289, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:47:17'),
(1113, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:48:17'),
(1114, 295, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:49:17'),
(1115, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:50:17'),
(1116, 300, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:51:17'),
(1117, 300, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:52:17'),
(1118, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:53:17'),
(1119, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:54:17'),
(1120, 294, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:55:17'),
(1121, 294, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:56:17'),
(1122, 291, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:57:17'),
(1123, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:58:17'),
(1124, 289, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 01:59:17'),
(1125, 287, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:00:17'),
(1126, 284, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:01:17'),
(1127, 284, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:02:17'),
(1128, 283, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:03:17'),
(1129, 280, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:04:17'),
(1130, 280, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:05:17'),
(1131, 281, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:06:17'),
(1132, 286, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:07:17'),
(1133, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:08:17'),
(1134, 290, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:09:17'),
(1135, 293, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:10:17'),
(1136, 293, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:11:17'),
(1137, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:12:17'),
(1138, 297, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:13:17'),
(1139, 298, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:14:17'),
(1140, 300, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-11 02:15:17'),
(1141, 312, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:16:17'),
(1142, 324, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:17:17'),
(1143, 333, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:18:17'),
(1144, 340, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:19:17'),
(1145, 347, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:20:17'),
(1146, 350, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:21:17'),
(1147, 367, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:22:17'),
(1148, 397, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:23:17'),
(1149, 400, 'Tidak ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:24:17'),
(1150, 418, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:25:17'),
(1151, 430, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:26:17'),
(1152, 450, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:27:17'),
(1153, 451, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:28:17'),
(1154, 451, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:29:17'),
(1155, 450, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:30:17'),
(1156, 468, 'Tidak ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:31:17'),
(1157, 476, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:32:17'),
(1158, 486, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:33:17'),
(1159, 490, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:34:17'),
(1160, 493, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:35:17'),
(1161, 500, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:36:17'),
(1162, 512, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:37:17'),
(1163, 520, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:38:17'),
(1164, 523, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:39:17'),
(1165, 531, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:40:17'),
(1166, 537, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:41:17'),
(1167, 540, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:42:17'),
(1168, 544, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada asap di toilet', '2024-10-11 02:43:17'),
(1373, 317, 'Tidak ada gerakan terdeteksi', 'OFF', 'OFF', '', '2024-10-30 22:22:58'),
(1374, 261, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:23:59'),
(1375, 248, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:24:59'),
(1376, 248, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:25:58'),
(1377, 240, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:26:59'),
(1378, 236, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:27:58'),
(1379, 238, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:28:58'),
(1380, 234, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:29:58'),
(1381, 228, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:30:58'),
(1382, 242, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:31:58'),
(1383, 229, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:32:58'),
(1384, 507, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:33:58'),
(1385, 309, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:34:59'),
(1386, 422, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-10-30 22:35:58'),
(1387, 276, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-30 22:36:58'),
(1389, 307, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-10-31 13:05:15'),
(1390, 247, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 13:06:15'),
(1391, 229, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Tidak ada gerakan', '2024-10-31 13:07:15'),
(1392, 212, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Tidak ada gerakan', '2024-10-31 13:08:15'),
(1393, 205, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 13:09:15'),
(1400, 413, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-10-31 13:53:06'),
(1401, 293, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 13:54:06'),
(1402, 257, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 13:55:06'),
(1403, 248, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 13:56:06'),
(1404, 237, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 13:57:06'),
(1405, 236, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 13:58:06'),
(1406, 243, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 13:59:06'),
(1407, 244, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 14:00:06'),
(1408, 240, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 14:01:06'),
(1409, 220, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 14:02:06'),
(1410, 298, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 14:35:11'),
(1420, 301, 'Tidak ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-10-31 23:43:26'),
(1421, 292, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:44:26'),
(1422, 283, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:45:26'),
(1423, 278, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:46:26'),
(1424, 273, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:47:26'),
(1425, 268, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:48:26'),
(1426, 266, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:49:26'),
(1427, 261, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:50:26'),
(1428, 257, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:51:26'),
(1429, 255, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:52:26'),
(1430, 252, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:53:26'),
(1431, 247, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:54:26'),
(1432, 246, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:55:26'),
(1433, 244, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:56:26'),
(1434, 242, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:57:26'),
(1435, 238, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-10-31 23:58:26'),
(1436, 238, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 00:01:26'),
(1437, 289, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:15:12'),
(1438, 243, 'Ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:16:12'),
(1439, 961, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:17:12'),
(1440, 1024, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:18:12'),
(1441, 482, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:19:12'),
(1442, 394, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:20:12'),
(1443, 350, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:21:12'),
(1444, 326, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:22:12'),
(1445, 1024, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:23:12'),
(1446, 1024, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:24:12'),
(1447, 927, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:25:12'),
(1448, 870, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:26:12'),
(1449, 758, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:27:12'),
(1450, 765, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:32:28'),
(1451, 543, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:32:58'),
(1452, 487, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:33:28'),
(1453, 436, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:33:58'),
(1454, 405, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:34:28'),
(1455, 384, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:34:58'),
(1456, 369, 'Tidak ada gerakan terdeteksi', 'OFF', 'ON', 'Kondisi Normal', '2024-11-01 01:35:28'),
(1457, 356, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:35:58'),
(1458, 343, 'Ada gerakan terdeteksi', 'ON', 'OFF', 'Ada Asap Di Toilet', '2024-11-01 01:36:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(50) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'aktif',
  `level` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `email`, `username`, `password`, `status`, `level`) VALUES
(9, 'alenruben204@gmail.com', 'Alen', '$2y$10$IMWGGkS/FWHQb37KpMCqEeErmpGU/oH62Av9HAbauFNWmnBSIru3C', 'aktif', 'user'),
(11, 'dita23@gmail.com', 'Dita', '$2y$10$u17kmJLqeBXaLkr85ZtM4.wAji.DDfeOjL5BgABwYNJTi3ypRvxGG', 'aktif', 'user'),
(12, 'fumirei340@gmail.com', 'Fumi', '$2y$10$J.e805df7TcHlBpefZaG/OIrdf..WPHaED.Xs7bZdhrhNT/qyBspm', 'aktif', 'user'),
(14, 'amaraamanda909@gmail.com', 'amara1', '$2y$10$AUvvzsIzVQG6XMJJEm8mDuivPcseLu96EeHRlrtBEtTS1UgpmMBIS', 'aktif', 'user'),
(15, 'riabuana19@gmail.com', 'ria', '$2y$10$6mU.Ks7aEI5byOPk6ag3xOlsJ1L0Fqa5SgAi16tS.az9nXDxVtP1e', 'aktif', 'user'),
(16, 'amaraamaya7@gmail.com', 'aya', '$2y$10$rvZ3CXjA4iZkCFoOzb4u..1aERR2SCg71WHUmQTUweLgPi3CEEPN6', 'aktif', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1460;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
