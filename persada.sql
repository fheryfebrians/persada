-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for persada
CREATE DATABASE IF NOT EXISTS `persada` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `persada`;

-- Dumping structure for table persada.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.banners: ~0 rows (approximately)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Dumping structure for table persada.bantuans
CREATE TABLE IF NOT EXISTS `bantuans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `tanggal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.bantuans: ~0 rows (approximately)
/*!40000 ALTER TABLE `bantuans` DISABLE KEYS */;
/*!40000 ALTER TABLE `bantuans` ENABLE KEYS */;

-- Dumping structure for table persada.finishings
CREATE TABLE IF NOT EXISTS `finishings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.finishings: ~0 rows (approximately)
/*!40000 ALTER TABLE `finishings` DISABLE KEYS */;
/*!40000 ALTER TABLE `finishings` ENABLE KEYS */;

-- Dumping structure for table persada.galeris
CREATE TABLE IF NOT EXISTS `galeris` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bidang` enum('Tim Tulangan','Tim Produksi','Tim Finishing','Tim Utilitas Pabrik') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.galeris: ~0 rows (approximately)
/*!40000 ALTER TABLE `galeris` DISABLE KEYS */;
/*!40000 ALTER TABLE `galeris` ENABLE KEYS */;

-- Dumping structure for table persada.kontaks
CREATE TABLE IF NOT EXISTS `kontaks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `plant` longtext COLLATE utf8mb4_unicode_ci,
  `alamat` longtext COLLATE utf8mb4_unicode_ci,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.kontaks: ~1 rows (approximately)
/*!40000 ALTER TABLE `kontaks` DISABLE KEYS */;
INSERT INTO `kontaks` (`id`, `plant`, `alamat`, `telepon`, `fax`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'Kawasan Industri Surya Cipta Jl. Surya Madya III Kav. I-28Q Kutamekar, Kutanegara, Kec. Ciampel, Kabupaten Karawang, Jawa Barat 41363', 'Dukuh Jollong, Kel.Situluhur, Kec.Gembong, Kab . Pati - Jawa Tengah', 'Dukuh Jollong, Kel.Situluhur, Kec.Gembong, Kab . Pati - Jawa Tengah', 'office@betonemaspersada.com', 'office@betonemaspersada.com', NULL, '2021-02-05 11:31:54');
/*!40000 ALTER TABLE `kontaks` ENABLE KEYS */;

-- Dumping structure for table persada.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.migrations: ~14 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2021_01_27_110616_create_persada_profiles_table', 1),
	(4, '2021_01_27_120123_create_proyeks_table', 1),
	(5, '2021_01_27_131505_create_galeris_table', 1),
	(6, '2021_01_27_132438_create_kontaks_table', 1),
	(7, '2021_01_27_140405_create_bantuans_table', 1),
	(8, '2021_01_29_131332_create_banners_table', 1),
	(9, '2021_02_05_094147_create_tentangs_table', 2),
	(10, '2021_02_05_104833_create_persada_misis_table', 3),
	(11, '2021_02_05_115621_create_tulangans_table', 4),
	(12, '2021_02_05_115726_create_produksis_table', 4),
	(13, '2021_02_05_115830_create_finishings_table', 4),
	(14, '2021_02_05_115914_create_utpabriks_table', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table persada.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table persada.persada_misis
CREATE TABLE IF NOT EXISTS `persada_misis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `misi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.persada_misis: ~3 rows (approximately)
/*!40000 ALTER TABLE `persada_misis` DISABLE KEYS */;
INSERT INTO `persada_misis` (`id`, `misi`, `created_at`, `updated_at`) VALUES
	(1, 'Menempatkan kepuasan klien sebgai komitmen utama.', '2021-02-05 11:09:43', '2021-02-05 11:09:43'),
	(2, 'Menempatkan mitra kerja sebagai bagian integral dari tim kerja.', '2021-02-05 11:11:02', '2021-02-05 11:11:02'),
	(3, 'Memiliki sumber daya manusia yang profesional, berintegritas tinggi serta berorientasi kepada peningkatan secara terus-menerus.', '2021-02-05 11:11:15', '2021-02-05 11:11:15');
/*!40000 ALTER TABLE `persada_misis` ENABLE KEYS */;

-- Dumping structure for table persada.persada_profiles
CREATE TABLE IF NOT EXISTS `persada_profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `profile` longtext COLLATE utf8mb4_unicode_ci,
  `visi` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.persada_profiles: ~1 rows (approximately)
/*!40000 ALTER TABLE `persada_profiles` DISABLE KEYS */;
INSERT INTO `persada_profiles` (`id`, `profile`, `visi`, `created_at`, `updated_at`) VALUES
	(1, 'CV Beton Emas Persada merupakan perusahaan yang bergerak dalam bidang pelayanan jasa konstruksi, proyek dan pembuatan beton pracetak dengan tim yang profesional. Perusahaan CV Beton Emas Persada didirikan oleh peran penting satu orang yaitu Ali Mahmudi selaku CEO dari perusahaan yang sekarang menjabat sebagai Direktur Utama. CV Beton Emas Persada didirikan atas dasar ketidaksengajaan pada tahun 2015 salah satu perusahaan Beton Pracetak terbaik di indonesia membutuhkan karyawan untuk mengerjakan utilitas pabriknya dan kemudian kami dipercaya untuk yang memproduksi produk mereka. Pada, Tahun 2019 bulan September merupakan awal dari kemajuan perusahaan kami dan mulai mengawali surat perjanjian kerjasama dengan perusahaan PT Wika Kobe. Berbagai Produk telah kami kerjakan seperti Produk Hollow Girder, Full Slab dan Half Slab, Linning, dan proyek yang kami akan kerjakan yaitu Mega Proyek Tunnel Segment MRT Jakarta Phase II yang akan mulai produksi massal pada bulan Februari Tahun 2021.', 'CV. Beton Emas Persada adalah Perusahaan mitra terpercaya dalam indsutri penyedia jasa beton pracetak dan konstruksi.', NULL, '2021-02-05 10:41:33');
/*!40000 ALTER TABLE `persada_profiles` ENABLE KEYS */;

-- Dumping structure for table persada.produksis
CREATE TABLE IF NOT EXISTS `produksis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.produksis: ~1 rows (approximately)
/*!40000 ALTER TABLE `produksis` DISABLE KEYS */;
INSERT INTO `produksis` (`id`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Memastikan area kerja tetap bersih', '2021-02-05 12:30:19', '2021-02-05 12:30:19');
/*!40000 ALTER TABLE `produksis` ENABLE KEYS */;

-- Dumping structure for table persada.proyeks
CREATE TABLE IF NOT EXISTS `proyeks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.proyeks: ~0 rows (approximately)
/*!40000 ALTER TABLE `proyeks` DISABLE KEYS */;
/*!40000 ALTER TABLE `proyeks` ENABLE KEYS */;

-- Dumping structure for table persada.tulangans
CREATE TABLE IF NOT EXISTS `tulangans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.tulangans: ~3 rows (approximately)
/*!40000 ALTER TABLE `tulangans` DISABLE KEYS */;
INSERT INTO `tulangans` (`id`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Memastikan area kerja tetap bersih', '2021-02-05 12:05:33', '2021-02-05 12:05:33'),
	(2, 'Memilah dan menempatkan tulangan sesuai dengan ukurannya.', '2021-02-05 12:05:45', '2021-02-05 12:05:45'),
	(3, 'Memotong, membending dan merakit besi menjadi tulangan untuk beton.', '2021-02-05 12:05:58', '2021-02-05 12:05:58');
/*!40000 ALTER TABLE `tulangans` ENABLE KEYS */;

-- Dumping structure for table persada.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@persada.com', NULL, '$2y$10$0eGRccBNBiAlXnJhMfombOCaXbZs8tJNvX8wbDB9n7b/o6gp8xcpW', NULL, '2021-02-04 16:14:21', '2021-02-04 16:14:21');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table persada.utpabriks
CREATE TABLE IF NOT EXISTS `utpabriks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.utpabriks: ~0 rows (approximately)
/*!40000 ALTER TABLE `utpabriks` DISABLE KEYS */;
/*!40000 ALTER TABLE `utpabriks` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
