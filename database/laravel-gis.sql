-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2024 at 08:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `center__points`
--

CREATE TABLE `center__points` (
  `id` bigint UNSIGNED NOT NULL,
  `coordinate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `center__points`
--

INSERT INTO `center__points` (`id`, `coordinate`, `created_at`, `updated_at`) VALUES
(4, '-6.810190682691416,110.84160630524204', '2024-06-25 01:09:22', '2024-06-25 01:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kategoris`
--

CREATE TABLE `detail_kategoris` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_kategoris`
--

INSERT INTO `detail_kategoris` (`id`, `name`, `kategori_id`, `created_at`, `updated_at`) VALUES
(14, 'Teh', 3, '2024-07-17 22:27:18', '2024-07-18 07:35:24'),
(20, 'Kopi', 3, '2024-07-18 07:35:34', '2024-07-18 07:35:34'),
(23, 'Seblak', 4, '2024-07-18 07:36:50', '2024-07-18 07:36:50'),
(25, 'Restoran', 4, '2024-07-20 04:27:45', '2024-07-27 18:21:50'),
(26, 'Fashion Islam', 5, '2024-07-20 04:28:06', '2024-07-21 07:43:32'),
(27, 'Bakso', 4, '2024-07-28 18:38:14', '2024-07-28 18:38:14'),
(28, 'Warung Makan', 4, '2024-07-28 18:43:46', '2024-07-28 18:43:46'),
(29, 'Penjahit', 5, '2024-07-29 19:00:17', '2024-07-29 19:00:17'),
(30, 'Pangkas Rambut', 13, '2024-07-29 19:04:24', '2024-07-29 19:04:24'),
(31, 'Hotel', 8, '2024-07-31 06:53:06', '2024-07-31 06:53:06'),
(32, 'Kost', 8, '2024-07-31 06:53:17', '2024-07-31 07:03:42'),
(33, 'Ayam', 12, '2024-07-31 07:11:58', '2024-07-31 07:11:58'),
(34, 'Kambing', 12, '2024-07-31 07:22:36', '2024-07-31 07:22:36'),
(35, 'Burung', 12, '2024-07-31 20:01:04', '2024-07-31 20:01:04'),
(36, 'Pengiriman Barang', 13, '2024-08-01 01:01:40', '2024-08-01 01:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Kudus', '2024-05-30 03:01:08', '2024-05-30 03:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Minuman', '2024-06-01 17:22:14', '2024-06-01 17:22:14'),
(4, 'Makanan', '2024-06-01 19:20:38', '2024-06-01 19:20:38'),
(5, 'Fashion', '2024-06-01 19:21:01', '2024-07-29 18:58:52'),
(8, 'penginapan', '2024-06-01 19:22:04', '2024-06-01 19:22:04'),
(12, 'Perternakan', '2024-07-21 07:42:37', '2024-07-21 07:42:37'),
(13, 'Jasa', '2024-07-29 19:03:25', '2024-07-29 19:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `name`, `kabupaten_id`, `created_at`, `updated_at`) VALUES
(3, 'Jekulo', 2, '2024-06-01 16:44:51', '2024-06-01 16:44:51'),
(4, 'Bae', 2, '2024-06-02 19:27:05', '2024-06-02 19:27:05'),
(5, 'Kaliwungu', 2, '2024-06-02 19:27:30', '2024-06-02 19:27:30'),
(6, 'Jati', 2, '2024-06-02 19:27:39', '2024-06-02 19:27:39'),
(7, 'Undaan', 2, '2024-06-02 19:27:47', '2024-06-02 19:27:47'),
(8, 'Kudus', 2, '2024-06-02 19:27:58', '2024-06-09 21:42:04'),
(9, 'Dawe', 2, '2024-06-09 21:41:17', '2024-06-09 21:41:17'),
(10, 'Gebog', 2, '2024-06-09 21:41:31', '2024-06-09 21:41:31'),
(11, 'Mejobo', 2, '2024-06-09 21:42:18', '2024-06-09 21:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_23_062050_create_center__points_table', 1),
(7, '2024_01_23_062118_create_spots_table', 1),
(8, '2024_05_29_210900_create_kabupaten_table', 1),
(9, '2024_05_29_210913_create_kecamatan_table', 1),
(10, '2024_06_01_024902_create_kategori_table', 2),
(11, '2024_06_01_123424_add_kecamatan_id_and_kategori_id_to_spots_table', 3),
(12, '2024_06_02_004843_create_settings_table', 4),
(13, '2024_06_05_181554_create_roles_table', 5),
(14, '2024_06_05_182750_add_role_id_to_users_table', 5),
(15, '2024_07_18_031238_create_detail_kategoris_table', 6),
(16, '2024_07_18_144137_add_detail_kategori_id_to_spots_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, NULL),
(2, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `first_name`, `last_name`, `gender`, `phone`, `alamat`, `image`, `created_at`, `updated_at`) VALUES
(3, 5, 'Amir', 'Mahmud', 'Laki-Laki', '099876543200000', 'pati', 'DCFhUhAC1PUiYf9kYaX9bwXdww1bVFxoKgUxsseH.jpg', '2024-06-05 23:00:18', '2024-07-02 15:29:09'),
(4, 7, 'STD', 'Mahmud', 'Laki-Laki', '0998765432', 'ds sitiluhur', 'T1bJE2oQO8lVKwdV6h5gKTaWbgeCxlm9n1VWYkRP.jpg', '2024-07-28 04:35:11', '2024-07-28 04:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `spots`
--

CREATE TABLE `spots` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kecamatan_id` bigint UNSIGNED DEFAULT NULL,
  `kategori_id` bigint UNSIGNED DEFAULT NULL,
  `detail_kategori_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spots`
--

INSERT INTO `spots` (`id`, `name`, `slug`, `coordinates`, `description`, `image`, `created_at`, `updated_at`, `kecamatan_id`, `kategori_id`, `detail_kategori_id`) VALUES
(36, 'Kopi tubruk', 'kopi-tubruk', '-6.774015438705405,110.86068015112711', 'Kopi tubruk', '8ta1UC7zAE3oNtP6xV45QmdYzVOA19dVyZb5Yylb.jpg', '2024-07-18 20:56:42', '2024-07-18 20:56:42', 10, 3, 20),
(40, 'Minumam teh', 'minumam-teh', '-6.803163734288092,110.83646323799115', 'qwqwqwq', 'z7baR42ca37wShTRqpd6Nivx1f28YN5EVBoYiswG.jpg', '2024-07-21 07:51:00', '2024-07-21 07:51:00', 4, 3, 14),
(42, 'PDKT Resto & Cafe', 'pdkt-resto-cafe', '-6.809496089750585, 110.87103839184873', 'PDKT Resto & Cafe adalah sebuah tempat makan yang menawarkan suasana nyaman dan hangat dengan konsep yang modern. Restoran ini menyediakan berbagai menu kuliner lezat, mulai dari masakan lokal hingga internasional, yang disajikan dengan tampilan menarik dan cita rasa yang autentik. PDKT Resto & Cafe juga dilengkapi dengan fasilitas Wi-Fi gratis, area outdoor yang indah, serta tempat duduk yang nyaman, menjadikannya tempat yang ideal untuk bersantai, berkumpul dengan teman, atau mengadakan pertemuan bisnis. Dengan pelayanan yang ramah dan profesional, PDKT Resto & Cafe berkomitmen untuk memberikan pengalaman bersantap yang menyenangkan bagi setiap pengunjung.', 'yAOywkwWbaL0qznxW0oaQcq3grnwsV3S7feJrqzZ.jpg', '2024-07-27 18:26:07', '2024-07-27 18:26:07', 6, 4, 25),
(43, 'Lentog Tanjung Makanan Khas Kudus', 'lentog-tanjung-makanan-khas-kudus', '-6.832075013332904, 110.83222172398936', 'Pusat Kuliner Lentog Tanjung adalah destinasi kuliner yang populer di Kudus, Jawa Tengah, yang khusus menyajikan makanan khas daerah tersebut, yaitu Lentog Tanjung. Lentog Tanjung adalah hidangan tradisional yang terdiri dari lontong yang disajikan dengan sayur nangka muda dan tahu, kemudian dilengkapi dengan kuah santan gurih. Di pusat kuliner ini, pengunjung dapat menikmati kelezatan Lentog Tanjung dalam suasana yang nyaman dan autentik, sambil menikmati keramahan khas masyarakat Kudus. Tempat ini menjadi favorit baik bagi warga lokal maupun wisatawan yang ingin merasakan cita rasa asli makanan tradisional Kudus.', 'TnleyMYHXAZ5LFFinq657dAXKDmpOxbT0KbBB19t.jpg', '2024-07-27 18:32:51', '2024-07-27 20:11:42', 6, 4, 25),
(44, 'Seblak Bandung Panjang Kudus 1', 'seblak-bandung-panjang-kudus-1', '-6.779474632085338, 110.85060438306355', 'Seblak Bandung Panjang Kudus adalah tempat kuliner yang menyajikan seblak, makanan khas Bandung yang populer, dengan cita rasa yang khas dan autentik. Seblak di sini terdiri dari kerupuk basah yang dimasak dengan bumbu pedas gurih, dicampur dengan berbagai bahan seperti bakso, sosis, makaroni, sayuran, dan mie. Terletak di Kudus, tempat ini menjadi favorit bagi pecinta makanan pedas dan mereka yang ingin menikmati kelezatan seblak tanpa harus pergi ke Bandung. Dengan suasana yang nyaman dan pelayanan yang ramah, Seblak Bandung Panjang Kudus menawarkan pengalaman kuliner yang memuaskan dan nikmat.1', 'X2rLqOWkJuySXHaiIqhHspZUqD3g93artKTNMwJb.jpg', '2024-07-27 18:45:12', '2024-07-27 20:14:00', 6, 4, 25),
(45, 'Mie Ayam & Bakso Luwes', 'mie-ayam-bakso-luwes', '-6.797122090461926, 110.86682573646478', '\"Mie Ayam & Bakso Luwes\" adalah tempat kuliner yang menyajikan hidangan khas Indonesia seperti mie ayam dan bakso. Dengan cita rasa autentik dan bahan-bahan berkualitas, Mie Ayam & Bakso Luwes menawarkan pengalaman kuliner yang lezat dan memuaskan. Setiap mangkuk disiapkan dengan penuh perhatian untuk menghadirkan kenikmatan yang tak terlupakan bagi setiap pelanggan. Lokasinya yang strategis dan suasana yang nyaman menjadikan Mie Ayam & Bakso Luwes pilihan tepat untuk menikmati hidangan favorit bersama keluarga dan teman-teman.', 'FdNa4ep5Fcp74bpEwZJ9fNPsQsC7W7jNwDZ8ZQLD.jpg', '2024-07-28 18:41:08', '2024-07-28 18:41:08', 4, 4, 27),
(46, 'Shido Giri', 'shido-giri', '-6.780023333552225, 110.77217390885971', 'Shido Giri adalah UMKM yang bergerak di bidang jasa penjahitan pakaian, dikenal karena ketelitian dan kualitas terbaik di kotamu. Menawarkan berbagai layanan seperti pembuatan pakaian custom, penjahitan seragam, serta perbaikan dan modifikasi pakaian, Shido Giri menggunakan tenaga ahli berpengalaman dan bahan berkualitas untuk memastikan kepuasan pelanggan. Dengan komitmen pada pelayanan cepat, ramah, dan profesional, Shido Giri siap membantu Anda tampil lebih percaya diri dengan pakaian yang sempurna.', '7Hsx94HxQcljm8QKfxYUei0nbVgayjI9CjOFf9Oj.jpg', '2024-07-29 19:02:40', '2024-07-29 19:02:40', 5, 5, 29),
(47, 'Barbershop Bang Dul', 'barbershop-bang-dul', '-6.722681145755183, 110.85250138782867', 'Barbershop Bang Dul adalah tempat cukur rambut modern yang menawarkan layanan potong rambut berkualitas tinggi dengan gaya terkini. Dilengkapi dengan barber berpengalaman dan peralatan canggih, kami menjamin kenyamanan dan kepuasan pelanggan dalam setiap kunjungan. Nikmati pengalaman potong rambut yang menyegarkan dan hasil yang memuaskan hanya di Barbershop Bang Dul.', 'C5JyMAxt8RrguCwMC7KJsOQh15yJNbrd7bf9eTzO.jpg', '2024-07-29 19:09:16', '2024-07-29 19:09:16', 10, 13, 30),
(48, 'Prambatan Barbershop', 'prambatan-barbershop', '-6.811237973382388, 110.82226752763914', 'Prambatan Barbershop adalah tempat cukur rambut yang mengutamakan kualitas dan kepuasan pelanggan. Dengan barber profesional dan peralatan modern, kami menawarkan layanan potong rambut yang stylish dan nyaman. Datanglah ke Prambatan Barbershop untuk mendapatkan tampilan rambut terbaik dan pengalaman cukur yang menyenangkan.', 'RwlCNQLSxhKLpP8a8yJdJzjvrMLDozpsUGehndzJ.jpg', '2024-07-29 19:13:48', '2024-07-29 19:13:48', 5, 13, 30),
(49, 'Prambatan Barbershop', 'prambatan-barbershop', '-6.811237973382388, 110.82226752763914', 'Prambatan Barbershop adalah tempat cukur rambut yang mengutamakan kualitas dan kepuasan pelanggan. Dengan barber profesional dan peralatan modern, kami menawarkan layanan potong rambut yang stylish dan nyaman. Datanglah ke Prambatan Barbershop untuk mendapatkan tampilan rambut terbaik dan pengalaman cukur yang menyenangkan.', 'yailcQiMg3Z1u5Z32ez73RIlHNU1iybHYAnvPQr3.jpg', '2024-07-29 19:13:49', '2024-07-29 19:13:49', 5, 13, 30),
(50, 'Bang Jhoni', 'bang-jhoni', '-6.8105729359480796, 110.92576556904972', 'Bang Jhoni adalah ahli cukur rambut yang dikenal karena keahliannya dalam menciptakan berbagai gaya rambut yang trendi dan rapi. Dengan pengalaman bertahun-tahun, Bang Jhoni selalu memastikan setiap pelanggan mendapatkan pelayanan terbaik dan hasil yang memuaskan. Kunjungilah Bang Jhoni untuk merasakan potongan rambut berkualitas yang akan membuat Anda tampil lebih percaya diri.', 'qHOOqLsKZNVYhr8Ad6bfaYLDACmBe25v9iW4uqCJ.jpg', '2024-07-29 19:17:28', '2024-07-29 19:17:28', 3, 13, 30),
(51, 'SAM barbershop', 'sam-barbershop', '-6.827223977965394, 110.92398156226528', 'SAM Barbershop adalah destinasi terbaik untuk potong rambut dengan gaya terkini dan pelayanan prima. Dilengkapi dengan barber berpengalaman dan peralatan modern, SAM Barbershop memastikan setiap pelanggan mendapatkan hasil potongan rambut yang stylish dan memuaskan. Kunjungi SAM Barbershop untuk pengalaman cukur rambut yang profesional dan berkualitas.', 'ypuUAVaiieqnw6UzPSAStjBn3WJl92I1incrkvz8.jpg', '2024-07-29 19:23:59', '2024-07-29 19:23:59', 3, 13, 30),
(52, 'Kopi Lemon Undaan', 'kopi-lemon-undaan', '-6.884717511122954, 110.84038773529858', 'Kopi Lemon Undaan adalah sebuah kreasi minuman unik yang menggabungkan cita rasa robusta kopi lokal dengan kesegaran lemon. Kopi ini menawarkan sensasi rasa yang menyegarkan dan menyejukkan, menjadikannya pilihan sempurna untuk dinikmati di cuaca panas. Terinspirasi oleh tradisi minum kopi di daerah Undaan, minuman ini tidak hanya memanjakan lidah dengan perpaduan rasa yang luar biasa, tetapi juga memberikan manfaat kesehatan dari kombinasi kafein dan vitamin C. Kopi Lemon Undaan menjadi favorit di kalangan pecinta kopi yang mencari variasi baru dalam pengalaman menikmati kopi mereka.', 'mNoJ9jAqBPQ8fJnm3ZvxQJ4hE7ki4oeZmKkwmPum.jpg', '2024-07-29 23:52:27', '2024-07-29 23:52:27', 7, 3, 20),
(53, 'Kopi Lemon Undaan', 'kopi-lemon-undaan', '-6.884717511122954, 110.84038773529858', 'Kopi Lemon Undaan adalah sebuah kreasi minuman unik yang menggabungkan cita rasa robusta kopi lokal dengan kesegaran lemon. Kopi ini menawarkan sensasi rasa yang menyegarkan dan menyejukkan, menjadikannya pilihan sempurna untuk dinikmati di cuaca panas. Terinspirasi oleh tradisi minum kopi di daerah Undaan, minuman ini tidak hanya memanjakan lidah dengan perpaduan rasa yang luar biasa, tetapi juga memberikan manfaat kesehatan dari kombinasi kafein dan vitamin C. Kopi Lemon Undaan menjadi favorit di kalangan pecinta kopi yang mencari variasi baru dalam pengalaman menikmati kopi mereka.', 'V7ZGHE0vuyFE3gUK5yRSE1xm6zfMxxwiLkOBheF7.jpg', '2024-07-29 23:52:28', '2024-07-29 23:52:28', 7, 3, 20),
(54, 'Kopi Pak JM', 'kopi-pak-jm', '-6.892088273940771, 110.8073919013812', 'Kopi Pak JM adalah produk kopi lokal unggulan yang terkenal dengan cita rasa autentik dan kualitas tinggi. Diproduksi dari biji kopi pilihan yang dipanen dari kebun-kebun kopi terbaik, Kopi Pak JM menawarkan pengalaman minum kopi yang kaya akan aroma dan rasa. Dengan proses pemanggangan yang tepat, kopi ini memiliki karakter rasa yang seimbang antara keasaman dan kepahitan, membuatnya cocok dinikmati oleh para penikmat kopi sejati. Selain itu, Kopi Pak JM juga berkomitmen pada praktik pertanian yang berkelanjutan, memastikan bahwa setiap cangkir kopi yang Anda nikmati tidak hanya lezat tetapi juga mendukung kesejahteraan petani lokal dan kelestarian lingkungan.', 'nFkso04f4Nelq8nG4g3NFeNHLB7kQFfTaRISTdHT.jpg', '2024-07-29 23:55:23', '2024-07-29 23:55:23', 7, 3, 20),
(55, 'Kopi Tiga Toedjoe', 'kopi-tiga-toedjoe', '-6.802640833134318, 110.84080826411552', 'Kopi Tiga Toedjoe adalah kopi lokal berkualitas yang menawarkan cita rasa kuat dan autentik. Terbuat dari biji kopi pilihan yang diproses dengan teknik pemanggangan khusus, kopi ini memiliki karakteristik rasa yang khas dan aroma yang memikat. Kopi Tiga Toedjoe menjadi favorit bagi para penikmat kopi yang mencari kenikmatan sejati dalam setiap tegukan.', 'SbgzI60XTTPL01HzIjoSmdzajkMzAat1LtwqJB3l.jpg', '2024-07-29 23:57:09', '2024-07-29 23:57:09', 8, 3, 20),
(56, 'JIWA MUDA', 'jiwa-muda', '-6.824549646637421, 110.87355126240618', 'JIWA MUDA Warung Kopi adalah destinasi kopi modern yang menggabungkan cita rasa klasik dengan suasana kontemporer. Dikenal karena kualitas kopinya yang unggul, JIWA MUDA menyajikan berbagai pilihan kopi mulai dari espresso yang kuat hingga latte yang creamy, semuanya dibuat dari biji kopi pilihan yang diproses dengan teliti. Warung kopi ini tidak hanya menawarkan minuman berkualitas, tetapi juga tempat yang nyaman dan stylish untuk bersantai, bekerja, atau berkumpul bersama teman. Dengan pelayanan yang ramah dan atmosfer yang menyenangkan, JIWA MUDA Warung Kopi adalah tempat yang sempurna untuk menikmati waktu sambil menyeruput secangkir kopi nikmat.', 'sBIJJ6KikGL4l1CdwWCsfaVuDRJmzmLfwc4qzqeI.jpg', '2024-07-30 00:21:20', '2024-07-30 00:21:20', 11, 3, 20),
(57, 'Es Teh Moe', 'es-teh-moe', '-6.81713148941789, 110.84165304049722', 'Es Teh Moe adalah minuman segar yang menyajikan teh pilihan dengan cita rasa yang khas dan menyegarkan. Disajikan dingin dengan es batu, Es Teh Moe menjadi pilihan sempurna untuk melepas dahaga di hari yang panas. Dengan kualitas teh terbaik dan racikan yang pas, Es Teh Moe memberikan sensasi kesegaran alami dalam setiap tegukan.', 'xi46NjyI0FhurVEXN5mYcZbwohjVQdPppvnuJEaf.jpg', '2024-07-30 00:27:23', '2024-07-30 00:27:23', 6, 3, 14),
(58, 'Teh Kota Gebog', 'teh-kota-gebog', '-6.73579735828653, 110.84262755934654', 'Teh Kota Gebog adalah teh lokal berkualitas tinggi yang terkenal dengan cita rasa khas dan aroma harum yang menenangkan. Terbuat dari daun teh pilihan yang dipetik dan diolah dengan metode tradisional, Teh Kota Gebog menawarkan pengalaman minum teh yang autentik dan memuaskan. Cocok dinikmati panas atau dingin, teh ini memberikan kesegaran alami dan kehangatan dalam setiap cangkirnya. Teh Kota Gebog menjadi pilihan favorit bagi para pecinta teh yang mencari keaslian dan kualitas dalam setiap tegukan.', 'wQ7rakFjQzGTpQlMLkPyI6ZWvZ179TSCUbSIVrey.jpg', '2024-07-30 00:29:04', '2024-07-30 00:29:04', 10, 3, 14),
(59, 'Es teh SOLO sidorekso', 'es-teh-solo-sidorekso', '-6.765054503139829, 110.77273249399366', 'Es Teh S.O.L.O Sidorekso adalah minuman segar yang terbuat dari teh pilihan dengan rasa yang khas dan nikmat. Disajikan dingin dengan es batu, Es Teh S.O.L.O Sidorekso menawarkan kesegaran yang sempurna untuk melepas dahaga di hari yang panas. Dengan racikan yang tepat dan kualitas teh terbaik, setiap tegukan Es Teh S.O.L.O Sidorekso memberikan sensasi kesegaran alami dan kenikmatan yang memuaskan.', 'EwonjsUME7QHNsqfrTgLmZIENBs9ovObqpZz1qe6.jpg', '2024-07-30 00:43:05', '2024-07-30 00:43:05', 8, 3, 14),
(60, 'Kampung Es Teh 99', 'kampung-es-teh-99', '-6.761879559891271, 110.83340133202432', 'Kampung Es Teh 99 adalah surga bagi para pecinta es teh manis. Nikmati kesegaran es teh asli Indonesia yang legendaris dalam suasana kampung yang nyaman dan penuh keakraban.', 'qJjC9dPEKkwGEzSDiPwlYT44Oy7QrvJB9Z2LtB8f.jpg', '2024-07-30 00:47:01', '2024-07-30 00:47:01', 10, 3, 14),
(61, 'Seblak cahaya prasmanan', 'seblak-cahaya-prasmanan', '-6.750234544214593, 110.8871910367807', 'Seblak Cahaya Prasmanan adalah surga bagi para pecinta seblak! Nikmati beragam topping lezat yang disajikan secara prasmanan, mulai dari kerupuk, ceker, hingga sayuran segar. Rasakan sensasi pedas dan gurih yang menggoyang lidah dalam setiap suapan.', '2lcetmidhd9v13TQWZrzpl8JmVjKKxwZPXjPpVCQ.jpg', '2024-07-30 00:54:55', '2024-07-30 00:54:55', 9, 4, 23),
(62, 'Seblak Bloom UMK', 'seblak-bloom-umk', '-6.78337154345659, 110.8668144840874', 'Seblak Bloom UMK: Ledakan rasa seblak autentik yang bikin nagih! Kuah kental, topping melimpah, dan tingkat kepedasan yang bisa kamu atur sendiri. Rasakan sensasi pedas, gurih, dan segar dalam setiap suapannya.', 'zfDv1EHXlPZewhau1ZKTkdGekeBDtGhAr65jGqoZ.jpg', '2024-07-30 05:35:14', '2024-07-30 05:35:14', 4, 4, 23),
(63, 'Istana Seblak', 'istana-seblak', '-6.782805586863325, 110.90207187112493', 'Istana Seblak adalah salah satu nama yang cukup populer di kalangan pencinta seblak. Dengan beragam menu yang menggugah selera dan tingkat kepedasan yang bisa disesuaikan, Istana Seblak telah berhasil memikat banyak pelanggan.', 'o6XdyrZ5BuHmrl8OOv2HQnsY0YLBZd25ls5BeYBc.jpg', '2024-07-30 05:36:29', '2024-07-30 05:36:29', 3, 4, 23),
(64, 'Seblak Juwara Kudus 2', 'seblak-juwara-kudus-2', '-6.796439319805715, 110.83059917731727', 'Seblak Juwara Kudus 2 adalah salah satu tempat makan seblak yang cukup populer di Kudus. Dengan cita rasa yang khas dan variasi menu yang menggugah selera, Seblak Juwara Kudus 2 telah berhasil memikat banyak pelanggan, terutama para pecinta pedas.', 'wK44APRtO0sichZlVPJqvD0k8mWxUIOzmx4Pvp0X.jpg', '2024-07-30 05:39:29', '2024-07-30 05:39:29', 8, 4, 23),
(65, 'Seblak GO', 'seblak-go', '-6.824213292473225, 110.83831719046064', 'Seblak GO adalah istilah untuk seblak yang bisa dipesan dan diantar dengan mudah melalui layanan pesan antar makanan online. Kata \"GO\" menunjukkan kepraktisan dan kecepatan dalam menikmati seblak tanpa perlu pergi ke tempat makan.', 'Vl2IIxf9LANilg7d4yFgQJlVQ3rUk2kpzif3fXJT.jpg', '2024-07-30 05:42:35', '2024-07-30 05:42:35', 6, 4, 23),
(66, 'Seblak Bloom Dawe', 'seblak-bloom-dawe', '-6.732430435803194, 110.85431183358043', 'Seblak Bloom Dawe adalah sebuah kedai yang menyajikan seblak, sebuah hidangan khas Sunda yang terkenal dengan rasa pedas dan gurihnya. Terletak di daerah Dawe, kedai ini menawarkan berbagai variasi seblak yang menggugah selera, mulai dari seblak basah, seblak kering, hingga seblak kuah. Dengan bahan-bahan segar dan bumbu khas yang diracik dengan sempurna, Seblak Bloom Dawe menjadi destinasi favorit bagi para pecinta kuliner pedas. Selain itu, suasana yang nyaman dan pelayanan yang ramah membuat pengalaman makan di Seblak Bloom Dawe semakin menyenangkan.', 'jzluausHk64b778X0PUythc7snsbNKspW9JDR5LP.jpg', '2024-07-30 05:44:55', '2024-07-30 05:44:55', 9, 4, 23),
(67, 'Richeese Factory Kudus', 'richeese-factory-kudus', '-6.816879678716459, 110.8381495214032', 'Richeese Factory Kudus\r\nChatGPT\r\nRicheese Factory Kudus adalah restoran cepat saji yang terkenal dengan menu ayam goreng berbalut saus keju yang lezat dan beragam pilihan saus pedas. Terletak di Kudus, restoran ini menawarkan pengalaman makan yang unik dengan konsep yang menggabungkan keju dan saus pedas khas Richeese. Selain ayam goreng, Richeese Factory Kudus juga menyajikan berbagai hidangan lain seperti nasi, pasta, dan makanan ringan yang cocok untuk semua kalangan. Dengan suasana yang modern dan nyaman, Richeese Factory Kudus menjadi tempat yang sempurna untuk berkumpul bersama teman dan keluarga sambil menikmati hidangan yang lezat dan memanjakan lidah.', 'RTOfZdYPKz7KE1n4EbwnjAlo0DoRymgpEk3yyfTs.jpg', '2024-07-30 05:48:02', '2024-07-30 05:48:02', 6, 4, 25),
(68, 'Bakso Ciak komeng', 'bakso-ciak-komeng', '-6.806471746754431, 110.89154967380722', 'Bakso Ciak Komeng adalah destinasi kuliner yang wajib dicoba bagi pecinta bakso. Terkenal dengan bakso daging sapi yang kenyal dan lezat, Bakso Ciak Komeng menyajikan berbagai varian bakso seperti bakso urat, bakso telur, dan bakso keju yang menggugah selera. Dengan kuah kaldu yang kaya rasa dan bumbu spesial yang autentik, setiap mangkuk bakso di sini adalah perpaduan sempurna antara rasa dan tekstur. Selain bakso, Bakso Ciak Komeng juga menawarkan menu pendamping seperti pangsit goreng, tahu bakso, dan mie ayam. Dengan pelayanan yang ramah dan tempat yang nyaman, Bakso Ciak Komeng menjadi tempat favorit bagi keluarga dan teman untuk menikmati sajian bakso yang nikmat.', '7JYlFw1bq8nwToSL0DOLmulQl5Z2HATw1shCaiGF.jpg', '2024-07-30 20:21:37', '2024-07-30 20:21:37', 11, 4, 27),
(69, 'Bakso putri wonogiri', 'bakso-putri-wonogiri', '-6.829652909273377, 110.89918996227796', 'Bakso Putri Wonogiri adalah tempat makan yang menyajikan cita rasa autentik bakso khas Wonogiri. Terkenal dengan bakso yang terbuat dari daging sapi pilihan, Bakso Putri Wonogiri menghadirkan pengalaman kuliner yang memanjakan lidah. Bakso yang kenyal dan lezat dipadukan dengan kuah kaldu yang gurih, menciptakan rasa yang tak tertandingi. Di sini, pengunjung bisa menikmati berbagai varian bakso seperti bakso urat, bakso telur, dan bakso jumbo yang mengenyangkan. Selain bakso, Bakso Putri Wonogiri juga menawarkan menu tambahan seperti mie ayam, pangsit, dan tahu bakso, semuanya disajikan dengan cita rasa yang khas dan otentik. Dengan suasana yang nyaman dan pelayanan yang ramah, Bakso Putri Wonogiri menjadi pilihan tepat untuk menikmati hidangan bakso bersama keluarga dan teman.', 'oEJdAyPB4DapfPBjByL6slQZcWtUPK0ivM8ptWoC.jpg', '2024-07-30 20:22:53', '2024-07-30 20:22:53', 11, 4, 27),
(70, 'Bayakis 57', 'bayakis-57', '-6.797171556215575, 110.81388860605027', 'Bayakis 57 adalah tempat makan yang terkenal dengan bakso lezat dan beragam pilihan menu bakso yang menggugah selera. Menggunakan daging sapi pilihan dan bumbu rahasia, bakso di Bayakis 57 memiliki tekstur kenyal dan rasa yang kaya. Menu bakso mereka mencakup berbagai varian seperti bakso urat, bakso telur, bakso keju, dan bakso jumbo yang pasti memuaskan. Selain itu, Bayakis 57 juga menyajikan hidangan pendamping seperti pangsit goreng, tahu bakso, dan mie ayam yang tak kalah enaknya. Dengan kuah kaldu yang gurih dan bumbu khas yang unik, setiap mangkuk bakso di Bayakis 57 menjadi perpaduan sempurna antara rasa dan tekstur. Ditambah dengan suasana yang nyaman dan pelayanan yang ramah, Bayakis 57 adalah tempat yang ideal untuk menikmati hidangan bakso bersama keluarga dan teman.', 'RTAazfNA7ESF8T8NgewD9RHTc7g8bEpXW3s8CKoy.png', '2024-07-30 20:25:15', '2024-07-30 20:25:15', 5, 4, 27),
(71, 'Warung Makan Tiga Putri', 'warung-makan-tiga-putri', '-6.78808323366408, 110.79411630324122', 'Warung Makan Tiga Putri adalah destinasi kuliner yang menawarkan berbagai hidangan tradisional Indonesia dengan cita rasa yang autentik. Terkenal dengan menu khasnya yang beragam, Warung Makan Tiga Putri menyediakan berbagai pilihan seperti nasi goreng, soto, ayam goreng, ikan bakar, dan aneka sayuran segar. Setiap hidangan disiapkan dengan bahan-bahan segar dan bumbu pilihan, memastikan setiap gigitan kaya akan rasa. Dengan suasana yang hangat dan pelayanan yang ramah, Warung Makan Tiga Putri menjadi tempat favorit untuk bersantap bersama keluarga dan teman. Warung ini juga dikenal dengan harga yang terjangkau, menjadikannya pilihan ideal untuk menikmati makanan lezat tanpa harus merogoh kocek dalam-dalam. Nikmati pengalaman makan yang memuaskan di Warung Makan Tiga Putri, di mana setiap hidangan disajikan dengan penuh cinta dan kehangatan.', 'Pr2KO8PE9ZRmdw3NLwnDv2ADQ7YHt4QVfyL2psV0.jpg', '2024-07-30 20:27:46', '2024-07-30 20:27:46', 5, 4, 28),
(72, 'warung makan ninuk', 'warung-makan-ninuk', '-6.793164624371995, 110.79099362674671', 'Warung Makan Ninuk adalah tempat makan yang dikenal dengan hidangan rumahan yang lezat dan autentik. Menawarkan berbagai pilihan menu tradisional Indonesia, Warung Makan Ninuk menyediakan sajian seperti nasi uduk, pecel lele, sate ayam, dan aneka sayuran segar. Setiap hidangan disiapkan dengan bahan-bahan berkualitas dan bumbu rempah pilihan, menghadirkan rasa yang kaya dan otentik. Warung ini juga terkenal dengan sambal khasnya yang pedas dan nikmat, yang menjadi pelengkap sempurna untuk setiap hidangan. Dengan suasana yang nyaman dan pelayanan yang ramah, Warung Makan Ninuk adalah tempat yang ideal untuk menikmati makanan rumahan bersama keluarga dan teman. Harga yang terjangkau membuat warung ini menjadi favorit bagi banyak orang yang ingin menikmati masakan lezat tanpa harus mengeluarkan banyak biaya.', 'IcYzHZhZwNFaXq1JBLXsfJ7Ujad8wuFDhtkhMgSE.jpg', '2024-07-30 20:29:18', '2024-07-30 20:29:18', 5, 4, 28),
(73, 'Warung Makan Jati Putri', 'warung-makan-jati-putri', '-6.834610337536116, 110.82845806851422', 'Warung Makan Jati Putri adalah tempat makan yang menyajikan hidangan khas Indonesia dengan cita rasa yang otentik dan menggugah selera. Terletak di lokasi yang strategis, warung ini menjadi pilihan favorit bagi mereka yang ingin menikmati makanan lezat dalam suasana yang nyaman. Menu andalannya mencakup berbagai masakan seperti nasi liwet, ayam bakar, pepes ikan, serta aneka sayuran segar dan lalapan. Setiap hidangan di Warung Makan Jati Putri disiapkan dengan bahan-bahan berkualitas dan bumbu tradisional, memastikan setiap gigitan penuh dengan rasa. Warung ini juga terkenal dengan sambalnya yang pedas dan lezat, yang menjadi pelengkap sempurna untuk setiap sajian. Dengan pelayanan yang ramah dan harga yang terjangkau, Warung Makan Jati Putri adalah tempat yang ideal untuk bersantap bersama keluarga dan teman.', 'SFromLBqFZH50Jei0x0Yf8XaLKgos84rxBvVLqUq.jpg', '2024-07-30 20:33:37', '2024-07-30 20:33:37', 6, 4, 28),
(74, 'Warung Makan Family Saiyo 2', 'warung-makan-family-saiyo-2', '-6.829354819303657, 110.82683904156094', 'Berikut deskripsi untuk Warung Makan Family Saiyo 2:\r\n\r\nWarung Makan Family Saiyo 2 adalah tempat makan yang menghadirkan berbagai hidangan khas Minang dengan cita rasa otentik yang kaya rempah. Menjadi favorit di kalangan pecinta kuliner, warung ini menyajikan menu andalan seperti rendang, ayam pop, gulai ikan, dan dendeng balado. Setiap hidangan di Warung Makan Family Saiyo 2 disiapkan dengan bahan-bahan segar dan bumbu khas Minang yang autentik, menciptakan rasa yang lezat dan menggugah selera. Selain itu, warung ini juga menawarkan berbagai pilihan sayur seperti daun singkong tumbuk dan gulai nangka yang melengkapi kelezatan sajian utama. Dengan suasana yang nyaman dan pelayanan yang ramah, Warung Makan Family Saiyo 2 adalah tempat ideal untuk menikmati makanan khas Minang bersama keluarga dan teman. Harga yang terjangkau menjadikan warung ini pilihan yang tepat bagi mereka yang ingin menikmati makanan berkualitas tanpa harus menguras kantong.\r\nBerikut deskripsi untuk Warung Makan Family Saiyo 2:\r\n\r\nWarung Makan Family Saiyo 2 adalah tempat makan yang menghadirkan berbagai hidangan khas Minang dengan cita rasa otentik yang kaya rempah. Menjadi favorit di kalangan pecinta kuliner, warung ini menyajikan menu andalan seperti rendang, ayam pop, gulai ikan, dan dendeng balado. Setiap hidangan di Warung Makan Family Saiyo 2 disiapkan dengan bahan-bahan segar dan bumbu khas Minang yang autentik, menciptakan rasa yang lezat dan menggugah selera. Selain itu, warung ini juga menawarkan berbagai pilihan sayur seperti daun singkong tumbuk dan gulai nangka yang melengkapi kelezatan sajian utama. Dengan suasana yang nyaman dan pelayanan yang ramah, Warung Makan Family Saiyo 2 adalah tempat ideal untuk menikmati makanan khas Minang bersama keluarga dan teman. Harga yang terjangkau menjadikan warung ini pilihan yang tepat bagi mereka yang ingin menikmati makanan berkualitas tanpa harus menguras kantong.', 'zxrglUA0EPUjv6gDp0UYCXXLmJ4DGg8ufR2OELAC.jpg', '2024-07-30 20:35:29', '2024-07-30 20:35:29', 6, 4, 28),
(75, 'Warung Makan Mbah Sapar', 'warung-makan-mbah-sapar', '-6.727571797673333, 110.84388417906949', 'Warung Makan Mbah Sapar adalah tempat makan legendaris yang terkenal dengan sajian masakan tradisional Jawa yang autentik dan penuh cita rasa. Terletak di jantung kota, warung ini menawarkan pengalaman kuliner yang mengingatkan pada masakan rumahan yang lezat. Menu andalannya mencakup nasi pecel, gudeg, rawon, dan opor ayam, yang semuanya dimasak dengan resep turun-temurun dan bahan-bahan berkualitas tinggi. Warung Makan Mbah Sapar juga dikenal dengan sambal khasnya yang pedas dan menggugah selera, serta aneka lauk pauk seperti tempe goreng, tahu bacem, dan telur pindang yang melengkapi setiap hidangan. Dengan suasana yang hangat dan pelayanan yang ramah, Warung Makan Mbah Sapar menjadi tempat favorit untuk berkumpul bersama keluarga dan teman sambil menikmati makanan enak. Harga yang bersahabat menjadikan warung ini pilihan sempurna bagi siapa saja yang ingin menikmati masakan Jawa otentik tanpa harus merogoh kocek dalam-dalam.', 'uuYevoxJYmrsBlfiKnrAMkYou0JAeUhVEBZhBDBu.jpg', '2024-07-30 20:38:13', '2024-07-30 20:38:13', 10, 4, 28),
(76, 'Waroeng Mager', 'waroeng-mager', '-6.752531484537896, 110.8406196847423', 'Waroeng Mager adalah tempat makan yang menawarkan berbagai hidangan lezat dan cepat saji dengan cita rasa rumahan yang khas. Cocok bagi mereka yang ingin menikmati makanan enak tanpa harus menunggu lama, Waroeng Mager menyediakan menu yang beragam seperti nasi goreng, mie goreng, ayam geprek, dan aneka bakso. Setiap hidangan disiapkan dengan bahan-bahan segar dan bumbu pilihan, sehingga menghasilkan rasa yang nikmat dan memuaskan. Waroeng Mager juga terkenal dengan pilihan sambal yang pedas dan menggugah selera, serta lauk pauk tambahan seperti tahu, tempe, dan telur dadar yang melengkapi setiap sajian. Dengan suasana yang santai dan pelayanan yang cepat, Waroeng Mager menjadi tempat favorit untuk makan siang atau makan malam bersama keluarga dan teman. Harga yang terjangkau membuat warung ini menjadi pilihan tepat bagi siapa saja yang ingin menikmati makanan lezat tanpa harus menguras kantong.', 'kqxH7qHjDblKfcxFW3LRB1qwkHWffx4GyxGGGAgV.jpg', '2024-07-30 20:40:54', '2024-07-30 20:40:54', 10, 4, 28),
(77, 'RM. Tombo Sawah Babalan', 'rm-tombo-sawah-babalan', '-6.929710395430018, 110.78991770825468', 'RM. Tombo Sawah Babalan menawarkan pengalaman bersantap yang memikat dengan hidangan tradisional yang autentik di tengah suasana alam pedesaan yang asri. Restoran ini dikenal dengan menu andalan seperti ayam goreng kampung yang renyah, sambal terasi yang pedas, dan olahan sayur segar, semua disiapkan dengan bahan berkualitas dan resep turun-temurun. Dengan pelayanan ramah dan suasana yang nyaman, RM. Tombo Sawah Babalan adalah tempat yang ideal untuk menikmati hidangan lezat bersama keluarga, teman, atau rekan bisnis, serta menyegarkan selera Anda dalam setiap gigitan.', 'ciTmNHwHTP3g64PNq7yHWGfCCJ2i9pBxkm4qZNN7.jpg', '2024-07-30 20:44:24', '2024-07-30 20:44:24', 7, 4, 28),
(78, 'Warung Bu Sumiat', 'warung-bu-sumiat', '-6.88967281552967, 110.8356727642515', 'Warung Bu Sumiat adalah destinasi kuliner yang menghadirkan kehangatan dan kelezatan hidangan rumahan dengan sentuhan khas yang memikat. Terletak di lokasi yang strategis, warung ini terkenal dengan masakan tradisional yang autentik dan penuh rasa, seperti nasi goreng kampung, ayam penyet, serta sayur asem yang segar. Setiap hidangan disiapkan dengan bahan-bahan segar dan resep tradisional yang diwariskan turun-temurun. Suasana yang sederhana namun nyaman, serta pelayanan yang ramah, menjadikan Warung Bu Sumiat tempat yang ideal untuk menikmati makan siang atau makan malam bersama keluarga dan teman, sambil merasakan kehangatan dan kelezatan hidangan khas yang memanjakan lidah.', 'uxyjmx9osCljMQHwDPGHq6kiBnSy7qyINSortqsK.jpg', '2024-07-30 20:45:07', '2024-07-30 20:45:07', 7, 4, 28),
(79, 'Rillia Hijab Jilbab', 'rillia-hijab-jilbab', '-6.800206078244492, 110.87758772914003', 'Rillia Hijab Jilbab adalah toko fashion yang mengedepankan gaya dan kenyamanan dalam koleksi hijab dan jilbabnya. Menawarkan berbagai pilihan model dan desain yang trendi, dari hijab instan hingga jilbab panjang dengan bahan berkualitas tinggi, Rillia Hijab Jilbab memastikan setiap wanita dapat menemukan produk yang sesuai dengan selera dan kebutuhan mereka. Dengan perhatian pada detail, desain yang elegan, dan variasi warna yang memukau, Rillia Hijab Jilbab bertujuan untuk menghadirkan keindahan dan kepercayaan diri bagi setiap pelanggan. Berbelanja di Rillia Hijab Jilbab berarti mendapatkan produk yang tidak hanya modis tetapi juga nyaman digunakan sehari-hari.', 'Vc0Qf24JZxamKZoWkz6iGjX6j7zitlaTrPvchgVx.jpg', '2024-07-30 21:56:01', '2024-07-30 21:56:01', 4, 5, 26),
(80, 'Azeela Jilbab PTC', 'azeela-jilbab-ptc', '-6.781962322347572, 110.84969043505441', 'Azeela Jilbab PTC adalah butik fashion yang mengkhususkan diri dalam koleksi jilbab dan hijab dengan desain modern dan elegan. Menawarkan berbagai pilihan jilbab dari bahan berkualitas tinggi, Azeela Jilbab PTC menyajikan gaya yang stylish dan nyaman, cocok untuk berbagai kesempatan. Dengan fokus pada detail dan tren terkini, butik ini memastikan setiap produk memberikan penampilan yang menawan serta rasa percaya diri. Pelayanan yang ramah dan suasana yang menyenangkan menjadikan Azeela Jilbab PTC sebagai tujuan utama bagi wanita yang ingin tampil modis dan anggun setiap hari.', 'dTmIVpMnQhTMYK8vfB0SD7ea50Q3mHB3m8isXA1E.jpg', '2024-07-30 21:59:17', '2024-07-30 21:59:17', 4, 5, 26),
(81, 'Istana Jilbab', 'istana-jilbab', '-6.754006037390881, 110.8241128906968', 'Istana Jilbab adalah destinasi utama untuk koleksi jilbab dan hijab yang mengutamakan keindahan dan kualitas. Dengan beragam pilihan desain yang trendi dan bahan premium, Istana Jilbab menawarkan berbagai model mulai dari jilbab instan hingga yang panjang dengan berbagai warna dan motif yang memikat. Setiap produk dirancang untuk memberikan kenyamanan maksimal serta penampilan yang anggun. Dengan pelayanan yang ramah dan suasana butik yang elegan, Istana Jilbab adalah tempat ideal bagi wanita yang ingin menemukan jilbab yang sesuai dengan gaya dan kebutuhan mereka, sambil menambahkan sentuhan istimewa pada penampilan sehari-hari.', '8IwmDnR8yJe6Sc35Inanepx4vY9Be7xMVGll5TxN.jpg', '2024-07-30 22:05:09', '2024-07-30 22:05:09', 10, 5, 26),
(82, 'Kirana Hijab', 'kirana-hijab', '-6.817022580073953, 110.8126652226809', 'Kirana Hijab adalah butik fashion yang mengkhususkan diri dalam koleksi hijab dengan sentuhan elegan dan modern. Menawarkan berbagai pilihan hijab dari bahan berkualitas tinggi, Kirana Hijab menyajikan desain yang stylish dan nyaman, cocok untuk berbagai kesempatan. Dengan perhatian pada tren terbaru dan detail yang cermat, setiap produk di Kirana Hijab dirancang untuk meningkatkan kepercayaan diri dan memberikan penampilan yang anggun. Pelayanan yang ramah dan suasana butik yang menyenangkan menjadikan Kirana Hijab tempat ideal bagi wanita yang ingin tampil modis sambil merasakan kenyamanan dalam setiap kesempatan.', 'cQ8uwPFq6tm6rsdmjKlOOJ06qo7SjKjqiRW4Epuk.jpg', '2024-07-30 22:07:47', '2024-07-30 22:07:47', 6, 5, 26),
(83, 'Pesona Hijab', 'pesona-hijab', '-6.800152479608372, 110.83186304000965', 'Pesona Hijab adalah butik fashion yang menghadirkan koleksi hijab dengan desain menawan dan kualitas terbaik. Menawarkan berbagai pilihan model dan warna yang mengikuti tren terkini, Pesona Hijab memastikan setiap wanita dapat menemukan hijab yang sesuai dengan gaya dan kebutuhan mereka. Dengan menggunakan bahan premium dan perhatian pada detail, setiap produk dirancang untuk memberikan kenyamanan serta penampilan yang anggun. Suasana butik yang elegan dan pelayanan yang ramah menjadikan Pesona Hijab sebagai pilihan utama bagi mereka yang mencari hijab yang memancarkan pesona dan kepercayaan diri dalam setiap kesempatan.', '1vY4upXwV6WbXt335yUB445vtV7KdIxbkSEIEpLC.jpg', '2024-07-30 22:09:02', '2024-07-30 22:09:02', 8, 5, 26),
(84, 'Kerudung La Tisza', 'kerudung-la-tisza', '-6.794891493493387, 110.82000509669078', 'Kerudung La Tisza adalah butik yang menawarkan koleksi kerudung dengan desain elegan dan kualitas premium. Menyediakan berbagai pilihan model dan warna yang chic dan modis, Kerudung La Tisza menghadirkan kerudung yang dirancang untuk meningkatkan penampilan dan kenyamanan setiap hari. Dengan bahan berkualitas tinggi dan perhatian pada detail, setiap kerudung dari La Tisza memberikan sentuhan istimewa dan keanggunan pada gaya Anda. Pelayanan yang ramah dan suasana butik yang menyenangkan membuat Kerudung La Tisza menjadi destinasi ideal untuk menemukan kerudung yang memancarkan kepercayaan diri dan pesona dalam setiap kesempatan.', 'BKoPh9RI1IIHiTp8RfxbKnKZXPyzHWIIvzO8LgWX.jpg', '2024-07-30 22:13:07', '2024-07-30 22:13:07', 5, 5, 26),
(85, 'Penjahit Hj shofiyah', 'penjahit-hj-shofiyah', '-6.799775085390194, 110.91926824216493', 'Penjahit Hj Shofiyah adalah sebuah usaha jasa jahit yang telah berpengalaman dalam menyediakan layanan pembuatan dan perbaikan pakaian, baik untuk kebutuhan sehari-hari maupun acara khusus. Dengan mengutamakan kualitas dan detail, Hj Shofiyah menawarkan berbagai macam desain dan teknik jahitan yang disesuaikan dengan selera dan kebutuhan pelanggan. Selain itu, usaha ini dikenal karena pelayanannya yang ramah dan waktu pengerjaan yang tepat, menjadikannya pilihan yang dapat diandalkan untuk mendapatkan hasil jahitan yang rapi dan memuaskan.', 'oOQild1aZ7if0kF5V5ml9Erdq1rm1tXH1tb2idQb.jpg', '2024-07-30 22:15:57', '2024-07-30 22:15:57', 3, 5, 29),
(86, 'Penjahit Ayu kemayu', 'penjahit-ayu-kemayu', '-6.722980544691532, 110.87559019231227', 'Penjahit Ayu Kemayu adalah usaha jasa jahit yang mengutamakan keahlian dalam menciptakan pakaian yang modis dan elegan. Menyediakan layanan pembuatan dan penyesuaian pakaian untuk berbagai kesempatan, Penjahit Ayu Kemayu dikenal karena kualitas jahitan yang rapi dan detail yang sempurna. Dengan pendekatan yang kreatif dan pemahaman mendalam tentang tren mode, Penjahit Ayu Kemayu memastikan setiap pelanggan mendapatkan pakaian yang tidak hanya nyaman tetapi juga sesuai dengan gaya dan kebutuhan mereka. Usaha ini juga menawarkan konsultasi personal untuk membantu pelanggan memilih desain dan bahan yang tepat.', 'CYnZxpsdWdasD6HAANn2Yc0QGhc7sVzYJcVcDzNK.jpg', '2024-07-30 22:18:00', '2024-07-30 22:18:00', 9, 5, 29),
(87, 'Omah jahit ANNA collection', 'omah-jahit-anna-collection', '-6.732956636608665, 110.90723736820044', 'Omah Jahit ANNA Collection adalah usaha jasa jahit yang berfokus pada pembuatan dan modifikasi pakaian dengan kualitas tinggi. Dengan sentuhan kreatif dan keahlian profesional, Omah Jahit ANNA Collection menawarkan berbagai macam layanan, mulai dari pembuatan pakaian kasual hingga busana formal untuk berbagai acara. Mengutamakan kepuasan pelanggan, usaha ini dikenal dengan pelayanannya yang ramah dan kemampuan untuk menangkap keinginan serta gaya pribadi setiap pelanggan. Dengan bahan-bahan berkualitas dan detail jahitan yang rapi, Omah Jahit ANNA Collection menjadi pilihan yang tepat untuk mendapatkan pakaian yang elegan dan stylish.', 'vFbM4JZWRPikuau3ICvGZdEpBn3oSd2r3YVj1Zgw.jpg', '2024-07-30 22:19:26', '2024-07-30 22:19:26', 9, 5, 29),
(88, 'Queensa Hotel', 'queensa-hotel', '-6.804494504748957, 110.7960757114219', 'Queensa Hotel adalah hotel mewah yang menawarkan pengalaman menginap yang elegan dan nyaman di tengah kota. Dikenal dengan pelayanan yang ramah dan fasilitas yang lengkap, Queensa Hotel menyediakan berbagai jenis kamar yang dirancang dengan gaya modern dan dilengkapi dengan fasilitas premium seperti Wi-Fi gratis, televisi layar datar, dan mini bar. Para tamu juga dapat menikmati beragam fasilitas rekreasi termasuk kolam renang, pusat kebugaran, dan spa. Restoran di Queensa Hotel menyajikan pilihan kuliner internasional dan lokal yang lezat, menjadikan pengalaman menginap semakin berkesan. Lokasi strategisnya yang dekat dengan pusat bisnis dan objek wisata utama membuat Queensa Hotel menjadi pilihan ideal bagi wisatawan maupun pelancong bisnis.', 'ngFQTr0VKIAtItQstDIH91KIEZTwa6C62fQPafUO.jpg', '2024-07-31 06:57:36', '2024-07-31 06:57:36', 5, 8, 31),
(90, 'Harmony', 'harmony', '-6.802692713482973, 110.85910080904212', 'Harmony Hotel adalah hotel yang memadukan kenyamanan modern dengan keramahan khas lokal. Terletak di lokasi strategis, Harmony Hotel menawarkan akses mudah ke berbagai destinasi wisata dan pusat bisnis kota. Hotel ini menyediakan berbagai pilihan kamar yang dirancang dengan elegan dan dilengkapi dengan fasilitas terkini seperti Wi-Fi gratis, televisi layar datar, dan AC. Para tamu dapat menikmati sarapan prasmanan yang beragam setiap pagi dan memanfaatkan fasilitas hotel seperti pusat kebugaran, kolam renang, dan spa untuk relaksasi. Harmony Hotel juga memiliki ruang pertemuan yang ideal untuk keperluan bisnis dan acara khusus. Dengan pelayanan yang profesional dan suasana yang hangat, Harmony Hotel menjamin pengalaman menginap yang tak terlupakan bagi setiap tamu.', '7BQ6LQWosBJ4wTMxusw5G9O6cwYeNPL4i8nJzzJg.jpg', '2024-07-31 07:01:00', '2024-07-31 07:01:00', 8, 8, 31),
(91, 'The Sato Hotel', 'the-sato-hotel', '-6.808990350379876, 110.84594274380444', 'The Sato Hotel adalah destinasi penginapan mewah yang menawarkan perpaduan sempurna antara kenyamanan dan kemewahan. Terletak di jantung kota, The Sato Hotel memberikan akses mudah ke berbagai atraksi wisata, pusat perbelanjaan, dan kawasan bisnis utama. Hotel ini menampilkan desain interior yang elegan dengan sentuhan modern, serta menyediakan berbagai jenis kamar yang luas dan dilengkapi dengan fasilitas premium seperti Wi-Fi gratis, televisi layar datar, mini bar, dan kamar mandi mewah.', 'E5kJqf4vPzNomr5bwfMufMtI2p9lkc9fIA4aqSid.jpg', '2024-07-31 07:02:32', '2024-07-31 07:02:32', 8, 8, 31),
(92, 'Rumah Kost Ijo', 'rumah-kost-ijo', '-6.8233001429753, 110.88247811144115', 'Rumah Kost Ijo adalah tempat tinggal yang nyaman dan terjangkau, ideal bagi mahasiswa dan pekerja yang mencari hunian dengan suasana homey. Terletak di lingkungan yang strategis, Rumah Kost Ijo memberikan akses mudah ke kampus, pusat perbelanjaan, dan fasilitas umum lainnya. Setiap kamar di Rumah Kost Ijo dirancang dengan simpel namun fungsional, dilengkapi dengan fasilitas dasar seperti tempat tidur, meja belajar, lemari pakaian, dan Wi-Fi gratis untuk mendukung kegiatan sehari-hari.', 'DCCGWF9TPOCGE7PKy5tBKW6k3hDMSlaAN0nyRgg3.jpg', '2024-07-31 07:04:52', '2024-07-31 07:04:52', 11, 8, 32),
(93, 'Kost Gino', 'kost-gino', '-6.823555898144185, 110.87159288915153', 'Kost Gino adalah pilihan ideal bagi mahasiswa dan pekerja yang mencari tempat tinggal yang nyaman dan terjangkau di lingkungan strategis. Terletak dekat dengan kampus, pusat perbelanjaan, dan berbagai fasilitas umum lainnya, Kost Gino menawarkan kemudahan akses dan kenyamanan sehari-hari. Setiap kamar di Kost Gino dirancang dengan fungsionalitas tinggi, dilengkapi dengan fasilitas dasar seperti tempat tidur, meja belajar, lemari pakaian, dan Wi-Fi gratis.', 'sQI7uABsnytcf020QqBBH3heP3diE9Gr4Mwo2k4o.jpg', '2024-07-31 07:07:21', '2024-07-31 07:07:21', 11, 8, 32),
(95, 'Top Wan Farm', 'top-wan-farm', '-6.77991679541166, 110.8391342119955', 'Top Wan Farm adalah sebuah peternakan terkemuka yang dikenal dengan produksi daging kambing berkualitas tinggi. Peternakan ini berfokus pada pemeliharaan kambing-kambing unggulan dengan metode peternakan modern dan ramah lingkungan. Selain itu, Top Wan Farm juga menawarkan produk-produk olahan daging kambing seperti sosis dan daging asap, yang diproduksi dengan standar kebersihan dan kualitas yang tinggi. Dengan komitmen pada kesejahteraan hewan dan kelestarian lingkungan, Top Wan Farm menjadi pilihan utama bagi konsumen yang mencari produk daging kambing yang sehat dan lezat.', 'ZOtcFdpPUI94YMmlXb77wGUVrny32EfUN9GWFWNA.jpg', '2024-07-31 07:13:43', '2024-07-31 07:13:43', 4, 12, 33),
(96, 'Kandang Ayam Haryanto', 'kandang-ayam-haryanto', '-6.7071244969926145, 110.8195648153538', 'Kandang Ayam Haryanto adalah sebuah usaha peternakan ayam yang dikenal dengan pemeliharaan ayam broiler dan ayam petelur berkualitas. Peternakan ini dikelola dengan baik dan mengutamakan kebersihan serta kesehatan hewan untuk menghasilkan ayam yang sehat dan berkualitas tinggi. Selain itu, Kandang Ayam Haryanto menggunakan pakan berkualitas dan menerapkan praktik-praktik peternakan yang baik, sehingga mampu memberikan produk yang aman dan memenuhi standar. Dengan komitmen terhadap kualitas dan layanan, Kandang Ayam Haryanto telah menjadi pilihan bagi konsumen dan pedagang ayam di berbagai wilayah.', 'f6nw882hbOOyyx9P1FOyldkTvJO4dRaUsRjSwN7X.jpg', '2024-07-31 07:15:09', '2024-07-31 07:15:09', 10, 12, 33),
(97, 'AJF Kudus', 'ajf-kudus', '-6.751789920693152, 110.86900329126526', 'AJF Kudus adalah sebuah perusahaan yang bergerak di bidang industri pengolahan kayu dan furnitur, berbasis di Kudus, Indonesia. Perusahaan ini terkenal dengan produk-produk furnitur berkualitas tinggi, mulai dari meja, kursi, lemari, hingga dekorasi interior lainnya. AJF Kudus menggunakan bahan baku kayu pilihan yang diolah dengan teknologi modern dan keterampilan pengrajin lokal. Dengan desain yang kreatif dan inovatif, AJF Kudus berhasil memadukan keindahan tradisional dengan kenyamanan modern, menjadikannya pilihan favorit di kalangan konsumen yang mencari furnitur estetik dan fungsional.', 'cyxdMvLulEhU81vQZIH9tYk6qjg2OndWehJrI81p.jpg', '2024-07-31 07:18:06', '2024-07-31 07:18:06', 4, 12, 33),
(98, 'Peternak kambing sori fram', 'peternak-kambing-sori-fram', '-6.830784849318749, 110.85038407298435', 'Sori Fram adalah peternak kambing yang berdedikasi untuk menyediakan kambing berkualitas tinggi. Terletak di lokasi yang strategis dan dikelola dengan prinsip-prinsip peternakan modern, Sori Fram memastikan bahwa setiap kambing dipelihara dengan perhatian khusus terhadap kesehatan dan kebersihan. Kami fokus pada pembiakan kambing unggul yang sehat dan produktif, menggunakan pakan alami dan metode perawatan yang ramah lingkungan. Komitmen kami adalah menyediakan kambing yang tidak hanya sehat tetapi juga memberikan hasil yang maksimal bagi para peternak lain dan konsumen.', 'crzQ3l8i6fWN8xiCkrHR9QwEtsjkYRNP77g6CmZA.jpg', '2024-07-31 18:17:06', '2024-07-31 18:17:06', 6, 12, 34),
(99, 'SUBEKAN KAMBING', 'subekan-kambing', '-6.764660299941068, 110.84952950220429', 'Subekan Kambing adalah peternak kambing yang berfokus pada produksi kambing berkualitas tinggi. Berlokasi di daerah yang subur dan dikelola dengan standar peternakan terbaik, Subekan Kambing memastikan setiap kambing mendapatkan perawatan optimal. Dengan menggunakan pakan alami dan metode perawatan modern, kami menjamin kesehatan dan produktivitas kambing yang kami pelihara. Subekan Kambing berkomitmen untuk menyediakan kambing yang unggul, sehat, dan siap memenuhi kebutuhan pasar maupun peternak lainnya.', '7ajKX8tbHmwzvbMM4b4p6GuwBM2qsyfdSwI6TIl5.jpg', '2024-07-31 18:19:43', '2024-07-31 18:19:43', 4, 12, 34),
(100, 'GONDHO Barbershop', 'gondho-barbershop', '-6.841400061242848, 110.8973957102608', 'GONDHO Barbershop adalah destinasi utama bagi pria yang mencari pengalaman pangkas rambut yang luar biasa. Terletak di lokasi yang mudah diakses, GONDHO Barbershop menawarkan berbagai layanan mulai dari potongan rambut klasik hingga gaya modern. Dengan barber yang berpengalaman dan menggunakan peralatan berkualitas tinggi, kami memastikan setiap pelanggan mendapatkan pelayanan terbaik. Suasana nyaman dan ramah di GONDHO Barbershop membuat setiap kunjungan menjadi menyenangkan. Datang dan rasakan transformasi gaya Anda bersama kami.', 'v5CeJT9uHcXU2aVRPukuewe6BZPui7hd0S9nLA6f.jpg', '2024-07-31 18:22:50', '2024-07-31 18:22:50', 11, 13, 30),
(101, 'Bardiman The Barber', 'bardiman-the-barber', '-6.807412594771415, 110.82746707502116', 'Bardiman The Barber adalah tempat di mana keahlian bertemu dengan gaya. Terkenal dengan pelayanan yang ramah dan profesional, Bardiman The Barber menawarkan berbagai layanan pangkas rambut, mulai dari potongan klasik hingga tren terkini. Dengan barber yang berpengalaman dan perhatian terhadap detail, setiap kunjungan di Bardiman The Barber menjamin hasil yang memuaskan. Lingkungan yang bersih dan nyaman menambah pengalaman pelanggan, membuat setiap sesi potong rambut menjadi momen yang dinanti-nantikan. Datang dan percayakan penampilan Anda kepada Bardiman The Barber untuk hasil yang maksimal.', 'nihcvRxd5dhabAcm5Of6lhJbBH0cRrfv5AYxjmYW.jpg', '2024-07-31 18:24:12', '2024-07-31 18:24:12', 8, 13, 30),
(102, 'Elfazza Cukur', 'elfazza-cukur', '-6.737054776878577, 110.87783134111831', 'Elfazza Cukur adalah tempat pangkas rambut yang mengutamakan kualitas dan kepuasan pelanggan. Dengan tim barber profesional dan berpengalaman, Elfazza Cukur menawarkan berbagai layanan mulai dari potongan rambut klasik hingga gaya modern yang mengikuti tren terkini. Kami menggunakan peralatan terbaik dan teknik terkini untuk memastikan setiap pelanggan mendapatkan hasil yang sempurna. Suasana yang nyaman dan layanan yang ramah membuat Elfazza Cukur menjadi pilihan tepat untuk perawatan rambut Anda. Kunjungi Elfazza Cukur dan rasakan transformasi gaya yang menawan.', '41ES9hEuUPeV5acyvlox3sNxt2kmPFYsyqyouPW4.jpg', '2024-07-31 18:25:38', '2024-07-31 18:25:38', 9, 13, 30),
(103, 'Omah cukur', 'omah-cukur', '-6.764670954053537, 110.87139419206488', 'Omah Cukur adalah barbershop yang menawarkan pengalaman potong rambut dengan sentuhan profesional dan suasana yang nyaman. Terletak di lokasi strategis, Omah Cukur menyediakan berbagai layanan, mulai dari potongan rambut klasik hingga gaya modern yang sesuai dengan tren terkini. Dengan barber yang berpengalaman dan perhatian terhadap detail, kami memastikan setiap pelanggan mendapatkan layanan terbaik dan hasil yang memuaskan. Fasilitas yang bersih dan suasana ramah di Omah Cukur membuat setiap kunjungan menjadi pengalaman yang menyenangkan. Datanglah ke Omah Cukur dan percayakan penampilan rambut Anda kepada kami untuk hasil yang terbaik.', 'dVl0ycswVw56OlGMrwXkN4K1sNdJrRHHH0o5SLaL.jpg', '2024-07-31 18:27:07', '2024-07-31 18:27:07', 4, 13, 30),
(104, 'Teh auliya', 'teh-auliya', '-6.806939842572322, 110.93465468782337', 'Teh Auliya adalah produk teh premium yang menawarkan rasa dan aroma yang memikat. Dibuat dari daun teh pilihan yang dipetik dengan hati-hati, Teh Auliya menghadirkan kenikmatan minum teh yang sempurna. Kami mengutamakan kualitas dan kesegaran dalam setiap kemasan, sehingga setiap cangkir Teh Auliya memberikan pengalaman yang tak terlupakan. Cocok untuk dinikmati sendiri atau bersama orang-orang terdekat, Teh Auliya adalah pilihan terbaik untuk setiap momen. Rasakan kehangatan dan kebaikan alam dalam setiap tegukan Teh Auliya.', '4CNTQWWPxcO1pa4d14v2sq3eJBZ3SNGUhFOZK1Hd.jpg', '2024-07-31 18:39:08', '2024-07-31 18:39:08', 3, 3, 14),
(105, 'Teh point Kaliwungu Kudus', 'teh-point-kaliwungu-kudus', '-6.792307352888951, 110.79192298139255', 'Teh Point Kaliwungu Kudus adalah produk teh lokal unggulan yang menawarkan cita rasa autentik dari Kudus. Diproduksi dari daun teh pilihan yang dipetik dengan cermat, Teh Point Kaliwungu Kudus menghadirkan keharuman dan kelezatan yang khas. Dengan proses pengolahan yang menjaga kualitas dan kesegaran, setiap tegukan Teh Point Kaliwungu Kudus memberikan pengalaman minum teh yang istimewa. Cocok untuk dinikmati sendiri atau bersama keluarga dan teman, Teh Point Kaliwungu Kudus adalah pilihan tepat untuk menambah kenikmatan di setiap momen Anda. Nikmati sensasi teh berkualitas dari Kudus dengan Teh Point Kaliwungu.', 'ryIXu7sZZVx3qP6gjr2PgMkFlp277q0miP9buO3a.jpg', '2024-07-31 18:40:20', '2024-07-31 18:40:20', 5, 3, 14),
(106, 'Kedai Kopi 26', 'kedai-kopi-26', '-6.739100328950717, 110.89795751189818', 'Kedai Kopi 26 adalah tempat yang sempurna untuk menikmati secangkir kopi berkualitas tinggi dalam suasana yang nyaman dan hangat. Terletak di lokasi yang mudah dijangkau, Kedai Kopi 26 menawarkan berbagai pilihan kopi spesial dari biji kopi pilihan yang disangrai dengan sempurna. Selain kopi, kami juga menyediakan berbagai macam makanan ringan dan hidangan penutup yang lezat untuk menemani waktu santai Anda. Dengan pelayanan yang ramah dan suasana yang menyenangkan, Kedai Kopi 26 menjadi tempat favorit bagi pecinta kopi dan mereka yang mencari tempat untuk bersantai atau bekerja. Datang dan nikmati pengalaman kopi yang tak terlupakan di Kedai Kopi 26.', 'RvmkVVJwHzPntFFfINiJiMV4FENESg7FOtFUoo1n.jpg', '2024-07-31 18:42:48', '2024-07-31 18:42:48', 9, 3, 20);
INSERT INTO `spots` (`id`, `name`, `slug`, `coordinates`, `description`, `image`, `created_at`, `updated_at`, `kecamatan_id`, `kategori_id`, `detail_kategori_id`) VALUES
(107, 'Penjahit Pak Hasim', 'penjahit-pak-hasim', '-6.88354584747793, 110.80998796961197', 'Penjahit Pak Hasim adalah solusi terbaik untuk kebutuhan pakaian Anda dengan sentuhan keahlian dan kerapian. Dengan pengalaman bertahun-tahun di bidang menjahit, Pak Hasim menawarkan berbagai layanan, mulai dari pembuatan pakaian custom, perbaikan, hingga penyesuaian pakaian agar sesuai dengan keinginan dan kebutuhan Anda. Menggunakan bahan berkualitas dan teknik menjahit yang teliti, setiap pakaian yang dibuat di Penjahit Pak Hasim dijamin memiliki hasil yang memuaskan dan nyaman dipakai. Dengan pelayanan yang ramah dan profesional, Penjahit Pak Hasim siap membantu Anda tampil lebih percaya diri dengan pakaian yang pas dan berkualitas tinggi.', 'fdky4JO3oJ2AxcRs9Q4WhUApdVIonaxfsCkYnhNQ.jpg', '2024-07-31 18:44:26', '2024-07-31 18:44:26', 7, 5, 29),
(108, 'Bu nor penjahit', 'bu-nor-penjahit', '-6.820016059975817, 110.9035116422866', 'Bu Nor adalah seorang penjahit berbakat yang memiliki pengalaman luas dalam menjahit berbagai jenis pakaian. Dengan keahlian dan perhatian terhadap detail, Bu Nor mampu menciptakan pakaian yang sesuai dengan selera dan kebutuhan setiap pelanggannya. Beliau dikenal karena kepiawaiannya dalam menjahit pakaian tradisional maupun modern, serta kemampuannya untuk menyesuaikan desain agar pas dan nyaman. Selain itu, Bu Nor selalu mengutamakan kualitas bahan dan ketepatan waktu dalam menyelesaikan setiap pesanan, menjadikannya pilihan utama bagi banyak orang yang mencari jasa penjahit yang handal dan terpercaya.', 'mbQ5JWZZqmBxoWKOCuakdWF7RACB1YNt2AyEq9n8.jpg', '2024-07-31 18:46:33', '2024-07-31 18:46:33', 11, 5, 29),
(109, 'Kost Bu Peni', 'kost-bu-peni', '-6.799924232520864, 110.92220127467799', 'Kost Bu Peni adalah tempat kost yang nyaman dan terjangkau, berlokasi strategis di kawasan yang mudah diakses. Tempat kost ini dikelola oleh Bu Peni, yang dikenal ramah dan peduli terhadap kebutuhan para penghuninya. Kost Bu Peni menawarkan berbagai fasilitas yang lengkap, seperti kamar yang bersih dan terawat, akses internet, dapur bersama, serta area parkir.', '78VaJ28Q36z38pPCBgRgmuY2NGRkFd6Opoult5E5.jpg', '2024-07-31 19:11:29', '2024-07-31 19:11:29', 3, 8, 32),
(110, 'Wisma Kost Darma Putri', 'wisma-kost-darma-putri', '-6.785211949755197, 110.8666389807163', 'Wisma Kost Darma Putri adalah pilihan akomodasi ideal bagi para pelajar, pekerja, dan profesional yang mencari tempat tinggal yang nyaman dan strategis. Terletak di area yang tenang dan aman, Wisma Kost Darma Putri menawarkan suasana yang hangat dan ramah, serta berbagai fasilitas yang memenuhi kebutuhan sehari-hari para penghuninya.', 'v0XOodmE1IB3uboBca4rjSPHwWt4ksOdpubbzP9B.jpg', '2024-07-31 19:13:05', '2024-07-31 19:13:05', 4, 8, 32),
(111, 'Jenny Kost Jati', 'jenny-kost-jati', '-6.8265552387627375, 110.83118324538286', 'Jenny Kost Jati adalah tempat kost yang nyaman dan modern, terletak di lokasi strategis yang mudah diakses. Dikelola dengan profesionalisme dan keramahan, tempat ini menawarkan kamar-kamar yang dilengkapi dengan furnitur lengkap seperti tempat tidur, lemari pakaian, dan meja belajar. Beberapa kamar juga menyediakan fasilitas tambahan seperti AC dan kamar mandi dalam. Penghuni dapat menikmati fasilitas umum seperti dapur bersama, area parkir, dan akses Wi-Fi. Lingkungan kost yang bersih dan aman, serta suasana yang ramah, menjadikan Jenny Kost Jati pilihan ideal bagi mahasiswa dan pekerja yang mencari tempat tinggal praktis dan nyaman.', '2DfzW8AD3HWaGeLNmWmvSfrB6ITzkag8P3XX2CZC.jpg', '2024-07-31 19:15:48', '2024-07-31 19:15:48', 6, 8, 32),
(112, 'Griya Kost Valent', 'griya-kost-valent', '-6.795891916631962, 110.86450761144862', 'Griya Kost Valent adalah tempat kost yang nyaman dan bersahabat, berlokasi di area yang tenang dan strategis. Tempat kost ini menyediakan kamar-kamar yang dilengkapi dengan fasilitas dasar seperti tempat tidur, lemari pakaian, dan meja belajar, serta beberapa kamar dengan fasilitas tambahan seperti AC dan kamar mandi dalam. Griya Kost Valent juga menawarkan fasilitas umum seperti dapur bersama, area parkir, dan akses Wi-Fi, menjadikannya pilihan ideal bagi mahasiswa, pekerja, atau siapa pun yang mencari hunian yang praktis dan aman. Dengan lingkungan yang terawat dan suasana yang ramah, Griya Kost Valent berkomitmen untuk memberikan pengalaman tinggal yang nyaman dan menyenangkan bagi para penghuninya.', 'jGLHpYmLifVWwvbCLwkEqG4Vsz8QQPc9GKxZDtHw.jpg', '2024-07-31 19:21:23', '2024-07-31 19:21:23', 4, 8, 32),
(113, 'Andi Kost', 'andi-kost', '-6.752620965409796, 110.84009885562256', 'Andi Kost adalah tempat kost yang praktis dan nyaman, terletak di lokasi yang strategis dan mudah dijangkau. Tempat ini menawarkan berbagai pilihan kamar yang dilengkapi dengan furnitur dasar seperti tempat tidur, lemari pakaian, dan meja belajar, dengan beberapa kamar yang juga memiliki fasilitas tambahan seperti AC dan kamar mandi dalam. Andi Kost menyediakan fasilitas umum seperti dapur bersama, area parkir, dan akses Wi-Fi, memastikan kenyamanan dan kebutuhan penghuninya terpenuhi. Lingkungan kost yang bersih, aman, dan dikelola dengan baik menjadikan Andi Kost pilihan yang tepat bagi mahasiswa, pekerja, atau siapa pun yang mencari hunian yang praktis dan nyaman.', 'Qo5LzSqVMZWEVCUAVCiOn2EeCzsyk3STUmLoDlZr.jpg', '2024-07-31 19:25:20', '2024-07-31 19:25:20', 10, 8, 32),
(114, 'kost putri', 'kost-putri', '-6.675361445991456, 110.90065034028079', 'Kost Putri adalah tempat kost yang diperuntukkan khusus untuk perempuan, menawarkan lingkungan yang aman, nyaman, dan terjaga. Tempat ini menyediakan berbagai tipe kamar yang dilengkapi dengan furnitur dasar seperti tempat tidur, lemari pakaian, dan meja belajar. Beberapa kamar juga memiliki fasilitas tambahan seperti AC dan kamar mandi dalam. Selain itu, Kost Putri menyediakan fasilitas umum seperti dapur bersama, area parkir, dan akses Wi-Fi, sehingga memenuhi kebutuhan sehari-hari para penghuninya. Dengan suasana yang ramah dan dikelola dengan baik, Kost Putri menjadi pilihan ideal bagi mahasiswi, pekerja wanita, atau siapa pun yang mencari tempat tinggal yang aman dan nyaman khusus untuk perempuan.', 'faOWbmeAz2xFX7ycl7mNljkaP1svLqx330PkKxqq.jpg', '2024-07-31 19:31:44', '2024-07-31 19:31:44', 9, 8, 32),
(115, 'MISHAFA Farm', 'mishafa-farm', '-6.7727896294177485, 110.85142830272886', 'Mishafa Farm adalah peternakan kambing yang fokus pada pemeliharaan dan pengembangan kambing berkualitas tinggi. Terletak di lokasi yang nyaman dan ramah lingkungan, Mishafa Farm menyediakan fasilitas modern dan pengelolaan yang profesional untuk memastikan kesehatan dan kesejahteraan ternak. Peternakan ini menawarkan berbagai jenis kambing, baik untuk keperluan konsumsi daging, susu, maupun pembibitan. Dengan praktik peternakan yang baik dan berkelanjutan, Mishafa Farm berkomitmen untuk menyediakan produk kambing yang sehat dan berkualitas tinggi, serta menjadi mitra terpercaya bagi para peternak, pedagang, dan konsumen.', 'z9iJxzRklk4bnzQmtQQ5LDqT6nsDhynQOlBZ6Vl2.jpg', '2024-07-31 19:34:57', '2024-07-31 19:34:57', 4, 12, 34),
(116, 'Ternak Burung Murai', 'ternak-burung-murai', '-6.732656898528078, 110.90417570799242', 'Ternak burung murai adalah kegiatan yang menarik dan menguntungkan bagi para pecinta burung, terutama di Indonesia, di mana burung murai, khususnya murai batu, terkenal karena suara kicauannya yang merdu dan penampilannya yang menawan. Dalam proses ternak, penting untuk menyediakan kandang yang nyaman dan luas, memilih induk yang sehat dan berkualitas, serta memberikan pakan bergizi yang mendukung pertumbuhan. Perawatan kesehatan yang rutin, termasuk vaksinasi, serta perhatian khusus selama proses perkembangbiakan dan pelatihan anakan, akan meningkatkan peluang menghasilkan burung unggul yang siap untuk dipelihara atau dilombakan. Dengan teknik yang tepat, ternak burung murai tidak hanya memberikan kepuasan pribadi tetapi juga potensi pendapatan yang menjanjikan.', '4a7gzdBsFzeTzWlfRKcSF83j6y5iJ4my3goaS7V1.jpg', '2024-07-31 20:08:21', '2024-07-31 20:08:21', 9, 12, 35),
(117, 'Rumah Lovebird Dbi Bird Farm', 'rumah-lovebird-dbi-bird-farm', '-6.773162233344201, 110.83348328609546', 'Dbi Bird Farm adalah tempat yang ideal bagi pecinta lovebird yang mencari lingkungan yang nyaman dan sehat untuk burung kesayangannya. Rumah lovebird di Dbi Bird Farm dirancang dengan memperhatikan kebutuhan spesies ini, menawarkan kandang yang luas dan berventilasi baik, lengkap dengan tempat bertengger, sarang, dan area bermain. Kami menyediakan pakan berkualitas tinggi yang kaya nutrisi serta suplemen untuk mendukung kesehatan dan vitalitas lovebird. Selain itu, Dbi Bird Farm berkomitmen untuk menjaga kebersihan lingkungan, serta rutin melakukan pemeriksaan kesehatan untuk memastikan semua burung berada dalam kondisi optimal. Di sini, para pengunjung dapat menemukan berbagai jenis lovebird, mulai dari yang biasa hingga yang langka, serta mendapatkan informasi dan tips dalam perawatan dan pelatihan lovebird agar dapat tumbuh sehat dan berperilaku baik. Dbi Bird Farm tidak hanya menjadi tempat jual beli, tetapi juga pusat edukasi bagi penggemar lovebird di seluruh kalangan.', 'kZPkBKHpjXq1rGUwDze7E15s5mH6OdtgwtuV4CJa.jpg', '2024-07-31 20:18:48', '2024-07-31 20:18:48', 4, 12, 35),
(118, 'Muria Bird Farm', 'muria-bird-farm', '-6.82258013650164, 110.9158803414955', 'Muria Bird Farm adalah destinasi utama bagi para pecinta burung di Indonesia, khususnya bagi penggemar burung murai dan jenis burung lainnya. Terletak di lokasi strategis, farm ini menawarkan berbagai fasilitas yang ramah bagi burung, termasuk kandang yang luas dan nyaman dengan ventilasi yang baik untuk menjaga kesehatan dan kesejahteraan burung. Kami mengutamakan kualitas dengan menyediakan induk burung murai terbaik yang memiliki suara kicauan merdu dan penampilan menarik. Selain itu, Muria Bird Farm juga menawarkan pakan bergizi yang dirancang khusus untuk mendukung pertumbuhan dan perkembangan burung. Di sini, pengunjung dapat menemukan berbagai jenis murai, baik untuk peliharaan maupun perlombaan, serta mendapatkan edukasi mengenai cara perawatan dan pemeliharaan yang tepat. Dengan komitmen terhadap kesehatan burung dan kepuasan pelanggan, Muria Bird Farm menjadi tempat yang ideal bagi siapa saja yang ingin memperdalam pengetahuan dan kecintaan terhadap dunia burung.', '3ixteNCLbSYxyVjwVSFCmGlkhQ8SRJOyLrvIwDfZ.jpg', '2024-07-31 20:20:26', '2024-07-31 20:20:26', 3, 12, 35),
(119, 'Rinjani Puyuh', 'rinjani-puyuh', '-6.837505442593613, 110.91084945180845', 'Rinjani Puyuh adalah usaha ternak puyuh yang terletak di kawasan yang sejuk dan asri, ideal untuk mendukung pertumbuhan optimal burung puyuh. Kami mengkhususkan diri dalam budidaya puyuh petelur dan puyuh pedaging, menyediakan lingkungan yang nyaman dan bersih untuk kesehatan dan kesejahteraan burung. Dengan menggunakan pakan berkualitas tinggi dan teknologi modern dalam manajemen ternak, Rinjani Puyuh berkomitmen untuk menghasilkan telur dan daging puyuh yang berkualitas. Selain itu, kami juga fokus pada edukasi dan informasi kepada para peternak pemula mengenai cara perawatan, pakan, serta kesehatan puyuh agar dapat mencapai hasil optimal. Dengan pengalaman dan dedikasi kami, Rinjani Puyuh siap menjadi mitra Anda dalam memajukan usaha ternak puyuh yang sukses dan berkelanjutan.', 'LNPyZmKpfYl3hsus2eM09N9CybReEhYSQA4sbD02.jpg', '2024-07-31 20:21:46', '2024-07-31 20:21:46', 11, 12, 35),
(120, 'Ternak ayam kampung', 'ternak-ayam-kampung', '-6.776729427390041, 110.77310458561274', 'ternak ayam kampung', 'x74xuY1mWsPoxgctEVWu4OR15GMUt38FpKqULWW1.jpg', '2024-08-01 00:59:43', '2024-08-01 00:59:43', 5, 12, 33),
(121, 'JNE Kudus Agen Counter', 'jne-kudus-agen-counter', '-6.80697138218852, 110.85551082976966', 'JNE EXPRES', 'IbQAKSy4c2RNthwgAyFMVwgTbtayv4k9CK2vOi1q.jpg', '2024-08-01 01:06:58', '2024-08-01 01:06:58', 8, 13, 36);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'amir@gmail.com', NULL, '$2y$10$DM7qFo747TAqJGSscIrP0uWaNK/0C.SdP6D1C5FEIz27.g7lgc.pS', 2, NULL, NULL, NULL),
(6, 'Std', '202051124@std.umk.id', NULL, '$2y$10$xUmPguVi1FeWXhX8n5FyPemHsNJ1DBXR.VhJSdNPPHRyrOAuo7V7W', 1, NULL, '2024-06-09 20:59:00', '2024-06-09 20:59:00'),
(7, 'user', 'amirrazer003@gmail.com', NULL, '$2y$10$kIkKJgpcizFwdSMLucXeRuj8M69uSoFpPj0U22ac4cuca32TBlY5.', 1, NULL, '2024-06-24 21:27:15', '2024-06-24 21:27:15'),
(9, 'Amir', 'amirmahmoed003@gmail.com', NULL, '$2y$10$mXJ1qqAZju2Rdt3nIDc1gebb35SEkeUEX6lNf9jOTpCmafAWg3O3m', 1, NULL, '2024-07-31 18:11:13', '2024-07-31 18:11:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center__points`
--
ALTER TABLE `center__points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_kategoris`
--
ALTER TABLE `detail_kategoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_kategoris_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan_kabupaten_id_foreign` (`kabupaten_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_user_id_foreign` (`user_id`);

--
-- Indexes for table `spots`
--
ALTER TABLE `spots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spots_kecamatan_id_foreign` (`kecamatan_id`),
  ADD KEY `spots_kategori_id_foreign` (`kategori_id`),
  ADD KEY `spots_detail_kategori_id_foreign` (`detail_kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `center__points`
--
ALTER TABLE `center__points`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_kategoris`
--
ALTER TABLE `detail_kategoris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spots`
--
ALTER TABLE `spots`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_kategoris`
--
ALTER TABLE `detail_kategoris`
  ADD CONSTRAINT `detail_kategoris_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupaten` (`id`);

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots`
--
ALTER TABLE `spots`
  ADD CONSTRAINT `spots_detail_kategori_id_foreign` FOREIGN KEY (`detail_kategori_id`) REFERENCES `detail_kategoris` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `spots_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `spots_kecamatan_id_foreign` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
