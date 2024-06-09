-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 01:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `age` int(11) NOT NULL,
  `bio` text NOT NULL,
  `data_buyers_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `age`, `bio`, `data_buyers_id`, `created_at`, `updated_at`) VALUES
(4, 20, 'jadilah diri sendiri', 5, '2024-06-08 20:52:01', '2024-06-08 20:52:01'),
(5, 20, 'jadilah orang lain', 6, '2024-06-08 20:52:11', '2024-06-08 20:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `data_buyers`
--

CREATE TABLE `data_buyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_buyers`
--

INSERT INTO `data_buyers` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(5, 'Ade Suriani', 'suri@gmail.com', '2024-06-08 20:51:14', '2024-06-08 20:51:14'),
(6, 'Muhammad Alfajar', 'fajar@gmail.com', '2024-06-08 20:51:40', '2024-06-08 20:51:40');

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
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `schedule` varchar(255) NOT NULL,
  `poster` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `title`, `synopsis`, `schedule`, `poster`, `created_at`, `updated_at`) VALUES
(5, 'Warkop DKI Reborn', 'Dono(Abimana Aryasatya), Kasino (Vino Bastian), dan Indro (Tora Sudiro) adalah tiga orang sahabat yang bekerja sebagai petugas keamanaan di organisasi CHIIPS (Cara Hebat Ikut Ikutan Pelayanan Sosial) di mana tugas mereka adalah membantu menertibkan dan menjaga keamanan masyarakat. Namun, tingkah mereka yang konyol dan bermasalah selalu membuat jengkel dan marah atasan mereka, Pak Boss (Ence Bagus), walaupun mereka berhasil lolos dari ancaman pemecatan.\r\n\r\nKarena mereka bertiga merupakan anggota CHIIPS yang memiliki rekor paling buruk, Boss memasukkan anggota CHIIPS dari Paris bernama Sophie (Hannah Al Rashid) untuk membantu mereka. Patroli pertama mereka berakhir buruk setelah mereka gagal mengejar seorang Copet (Arie Kriting), merusak warung warga, dan menyebabkan kebakaran pada sebuah pameran lukisan. Mereka ditangkap dan dibawa ke pengadilan di mana mereka bertiga dituntut untuk mengganti rugi dengan membayar denda sebesar 8 miliar rupiah atau mereka akan dipenjara.\r\n\r\nDono, Kasino, dan Indro yang kebingungan mencari uang, mengunjungi paman Dono yaitu Pak Slamet (Tarzan) untuk meminjam uang. Rencana mereka gagal setelah mereka menyadari bahwa koper pemberian Pak Selamet berisi uang mainan dan hampir diamuk warga karena dikira mengedarkan uang palsu. Stress, Indro marah-marah dengan Indro dari masa depan (Indro Warkop) yang hanya ada di kepalanya. Sophie yang merasa kasihan mengajak mereka bertiga ke pesta. Namun di perjalanan, mereka tidak sengaja melihat seorang pria (Bene Dion) ditabrak oleh mobil misterius. Mereka kemudian membawa pria itu ke rumah sakit, saat sekarat, pria itu menyerahkan sebuah buku berisi peta harta karun pada mereka bertiga. Dono, Kasino, dan Indro pun akhirnya menerima peta tersebut dan berniat untuk mencari harta tersebut agar bisa membayar denda 8 miliar.\r\n\r\nMereka pergi ke Malaysia sesuai petunjuk kode dalam peta dengan bantuan Sophie dan menjual barang-barang mereka. Sesampainya di bandara Malaysia, mereka menyadari bahwa tas berisi buku harta karun tersebut tertukar. Sempat berpencar untuk mencari tas tersebut, Kasino menemukan layar CCTV bandara yang menunjukkan tas mereka tertukar dengan tas seorang wanita berbaju merah (Nur Fazura). Sempat kejar-kejaran dengan menggunakan taksi hingga ke China Town, mereka kehilangan jejak wanita tersebut karena banyak wanita-wanita di sana yang juga menggunakan baju merah. Film berakhir dengan Indro dari masa depan mengucapkan salam ke penonton dan bersambung ke sekuel Warkop DKI Reborn: Jangkrik Boss! Part 2.', '12:00', '1717904948.jpg', '2024-06-08 20:49:08', '2024-06-08 20:49:34'),
(6, 'Sang Pemimpi', 'Setelah lulus dari Sekolah Dasar di Belitung, Ikal dan Arai melanjutkan pendidikan mereka di sekolah menengah di kota. Di sinilah petualangan mereka dimulai. Arai, yang merupakan saudara sepupu Ikal, selalu memotivasi Ikal untuk tidak pernah menyerah dan terus mengejar mimpinya. Bersama Jimbron, sahabat mereka yang memiliki kecintaan besar pada kuda, mereka berbagi mimpi untuk bisa melanjutkan pendidikan ke luar negeri, khususnya di Eropa.\r\n\r\nMeski hidup dalam keterbatasan, ketiga sahabat ini tetap optimis dan bekerja keras. Mereka menjalani berbagai pekerjaan untuk bisa menabung dan membiayai pendidikan mereka. Semangat pantang menyerah mereka diuji dengan berbagai cobaan, mulai dari kesulitan ekonomi hingga tantangan pribadi. Namun, persahabatan yang kuat dan mimpi yang besar selalu menjadi pendorong bagi mereka untuk terus berjuang.\r\n\r\n\"Sang Pemimpi\" adalah sebuah cerita inspiratif tentang keberanian bermimpi, kekuatan persahabatan, dan semangat untuk terus berusaha meskipun menghadapi segala rintangan. Film ini menggambarkan bahwa dengan tekad yang kuat, mimpi yang terlihat jauh sekalipun dapat diraih.\r\n\r\nFilm ini tidak hanya menyajikan kisah yang menyentuh dan menginspirasi, tetapi juga menghadirkan pemandangan indah dari pulau Belitung dan budaya lokal yang kaya, menambah nilai estetika dan kedalaman cerita.', '15:00', '1717905037.jpg', '2024-06-08 20:50:37', '2024-06-08 20:50:37');

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
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2024_06_07_081511_create_data_buyers_table', 1),
(27, '2024_06_07_084354_create_buyers_table', 1),
(28, '2024_06_07_133950_create_film_table', 1),
(29, '2024_06_07_134511_create_ticket_table', 1),
(30, '2024_06_07_134653_create_transaction_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `price`, `film_id`, `created_at`, `updated_at`) VALUES
(6, 25000, 5, '2024-06-08 20:49:56', '2024-06-08 20:49:56'),
(7, 20000, 6, '2024-06-08 20:50:54', '2024-06-08 20:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `seat_number` varchar(255) NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `buyers_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `date`, `seat_number`, `ticket_id`, `buyers_id`, `created_at`, `updated_at`) VALUES
(4, '2024-06-08', 'B4', 7, 4, '2024-06-08 20:52:31', '2024-06-08 20:52:31'),
(5, '2024-06-09', 'A7', 6, 5, '2024-06-08 20:52:47', '2024-06-08 20:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Intan Rahmi Chalik', 'intan@gmail.com', NULL, '$2y$10$xgbMlz6UEH71WlZgduQ/RONLJWhJr1eydhxJ9b2OTSLQXbto3KbyS', NULL, '2024-06-08 11:21:32', '2024-06-08 11:21:32'),
(2, 'Muhammad Alfajar', 'fajar@gmail.com', NULL, '$2y$10$CJKTsyc7srFzUFVbPsAfZewHj77USktWhPc6Gb7kbCw6F3z8XhQkW', NULL, '2024-06-08 12:05:40', '2024-06-08 12:05:40'),
(3, 'Test Account', 'test@gmail.com', NULL, '$2y$10$zmTYnEy5Ls3O2Ihiw1DyMO8znkKBXSzFNP4coldf4x9GhOCW4q3yC', NULL, '2024-06-08 20:28:24', '2024-06-08 20:28:24'),
(4, 'Febrian Mahendra', 'iyan@gmail.com', NULL, '$2y$10$u60rDUjFleqy7p.0qMcuVuLG4ekjJAb.giXMJ.FFXB9eoYn8c1kxm', NULL, '2024-06-08 20:59:38', '2024-06-08 20:59:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyers_data_buyers_id_foreign` (`data_buyers_id`);

--
-- Indexes for table `data_buyers`
--
ALTER TABLE `data_buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_film_id_foreign` (`film_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_ticket_id_foreign` (`ticket_id`),
  ADD KEY `transaction_buyers_id_foreign` (`buyers_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_buyers`
--
ALTER TABLE `data_buyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buyers`
--
ALTER TABLE `buyers`
  ADD CONSTRAINT `buyers_data_buyers_id_foreign` FOREIGN KEY (`data_buyers_id`) REFERENCES `data_buyers` (`id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_buyers_id_foreign` FOREIGN KEY (`buyers_id`) REFERENCES `buyers` (`id`),
  ADD CONSTRAINT `transaction_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
