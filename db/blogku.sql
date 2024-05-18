-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 04:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogku`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` longtext NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `waktu`, `tag`) VALUES
(69, 'latihan berbahasa arab ', 'karena ku tak sanggup walau ku tak mampu berdiri sendiri tanpamu             Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. \r\n             Seorang gadis dari planet Merkurius yaadwdang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun \r\n             sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi \r\n             Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil i \r\n             tu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sandwadawdgat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassidadsdasdasa. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah mdasdasdenyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.', '0000-00-00 00:00:00', 'ekonomi'),
(84, 'apa saja ', 'dwadawdwadwadaw            Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. \r\n             Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun \r\n             sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi \r\n             Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil i \r\n             tu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.Era ketika banyak perusahaan telah menjelajahi ruang angkasa dan membangun sistem ekonomi yang sangat besar. Seorang gadis dari planet Merkurius yang terpencil pindah ke Sekolah Teknologi Asticassia. Sekolah itu dijalankan oleh Beneritt Group yang mendominasi industri mobile suit. Gadis dari planet terpencil itu bernama Suletta Merkurius. Dengan cahaya merah menyala di hatinya yang murni, gadis ini berjalan selangkah demi selangkah menapaki dunia baru.', '0000-00-00 00:00:00', 'drawing'),
(91, 'dasdasdaddawd', 'dadaa', '0000-00-00 00:00:00', 'dad');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_23_142026_add_thumbnail_to_users', 2),
(6, '2022_12_26_040049_create_log_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `account` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `date`, `description`, `amount`, `category`, `account`) VALUES
(1, '0000-00-00', 'belanja', 3, 'sepedah', 'bayuwisnu9294@gmail.'),
(2, '2022-12-22', 'belanja', 9, 'sepedah', 'khususjualan9294@gma');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'bayu wisnu aji', '$2y$10$x8s9dXdGLbXvSCF5QO2YlOsxNFNNYvs3lmXNx0Numfo', 1),
(16, 'naila agnia', 'akan menikah dengan bayu wisnu aji ', 0),
(18, 'nindi', 'akan menjadi istri bayu', 0),
(28, 'dan kamu', 'apa yang sudah kamu lakukan terhadap aku hah ', 0),
(29, 'kapan kapan kita keremu lagi', 'karena ku tak sanggup walau ku tak mau berdiri sendiri tanpamu ', 0),
(30, 'eqeq', 'eqeqe', 0),
(31, 'eq2eqe2', 'eqe2q2e2qe', 0),
(32, 'anjing', '123', 0),
(33, 'sasas', 'dsadsd', 0),
(34, 'hasni pengen dientot ', 'sama bayu', 0),
(35, 'bayu', 'nikha', 0),
(36, 'bayu', 'nsgs', 0),
(37, 'bayuq', 'kfsakjfhs', 0),
(38, 'gsfs', 'fsfsdf', 0),
(39, 'hasni nurul wildaniah', 'bayuwisnyaji', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `waktu` datetime DEFAULT current_timestamp(),
  `tag` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `judul`, `isi`, `waktu`, `tag`, `thumbnail`) VALUES
(17, 'adab', 'dwaawd', NULL, 'dwadawdwad', '1097381.png-1672015463.png'),
(19, 'hhghg', 'nbvnbvvg', NULL, 'wdadaw', 'SeekPng.com_open-book-icon-png_1362021 (1).png-1672100937.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
