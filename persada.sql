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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.finishings: ~0 rows (approximately)
/*!40000 ALTER TABLE `finishings` DISABLE KEYS */;
INSERT INTO `finishings` (`id`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Tim Finishing merupakan tahap akhir dari proses pekerjaan pembuatan beton pracetak, karena pada tahap ini tim tulangan memastikan kembali produk menjadi utuh dan sempurna supaya tidak adanya gompalan, material lebih dan bubble (lubang kecil-kecil) pada produk. Dengan beberapa teknik pekerjaan seperti pemolesan, pemotongan, dan penambahan material.', '2021-02-13 12:15:09', '2021-02-13 12:15:09');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.galeris: ~2 rows (approximately)
/*!40000 ALTER TABLE `galeris` DISABLE KEYS */;
INSERT INTO `galeris` (`id`, `bidang`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, 'Tim Tulangan', '602a5b49639fd.jpg', '<p>kwkkwkwkwkkw</p>', '2021-02-15 11:30:17', '2021-02-15 11:30:17'),
	(2, 'Tim Tulangan', '602a5b5d022b7.jpg', '<h1>HAHAHAHA</h1>', '2021-02-15 11:30:37', '2021-02-15 11:30:37');
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

-- Dumping data for table persada.kontaks: ~0 rows (approximately)
/*!40000 ALTER TABLE `kontaks` DISABLE KEYS */;
INSERT INTO `kontaks` (`id`, `plant`, `alamat`, `telepon`, `fax`, `email`, `created_at`, `updated_at`) VALUES
	(1, '	\r\nKawasan Industri Surya Cipta Jl. Surya Madya III Kav. I-28Q Kutamekar, Kutanegara, Kec. Ciampel, Kabupaten Karawang, Jawa Barat 41363', 'Dukuh Jollong, Kel.Situluhur, Kec.Gembong, Kab . Pati - Jawa Tengah', '+62 821-4631-9962', 'office@betonemaspersada.com', 'office@betonemaspersada.com', NULL, NULL);
/*!40000 ALTER TABLE `kontaks` ENABLE KEYS */;

-- Dumping structure for table persada.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.migrations: ~13 rows (approximately)
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
	(9, '2021_02_05_104833_create_persada_misis_table', 1),
	(10, '2021_02_05_115621_create_tulangans_table', 1),
	(11, '2021_02_05_115726_create_produksis_table', 1),
	(12, '2021_02_05_115830_create_finishings_table', 1),
	(13, '2021_02_05_115914_create_utpabriks_table', 1),
	(14, '2021_02_15_104459_create_page_banners_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table persada.page_banners
CREATE TABLE IF NOT EXISTS `page_banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `bidang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.page_banners: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `page_banners` ENABLE KEYS */;

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

-- Dumping data for table persada.persada_misis: ~2 rows (approximately)
/*!40000 ALTER TABLE `persada_misis` DISABLE KEYS */;
INSERT INTO `persada_misis` (`id`, `misi`, `created_at`, `updated_at`) VALUES
	(1, '	Menempatkan kepuasan klien sebgai komitmen utama.', NULL, NULL),
	(2, 'Menempatkan mitra kerja sebagai bagian integral dari tim kerja.', NULL, NULL),
	(3, 'Memiliki sumber daya manusia yang profesional, berintegritas tinggi serta berorientasi kepada peningkatan secara terus-menerus.', NULL, NULL);
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

-- Dumping data for table persada.persada_profiles: ~0 rows (approximately)
/*!40000 ALTER TABLE `persada_profiles` DISABLE KEYS */;
INSERT INTO `persada_profiles` (`id`, `profile`, `visi`, `created_at`, `updated_at`) VALUES
	(1, 'CV Beton Emas Persada merupakan perusahaan yang bergerak dalam bidang pelayanan jasa konstruksi, proyek dan pembuatan beton pracetak dengan tim yang profesional. Perusahaan CV Beton Emas Persada didirikan oleh peran penting satu orang yaitu Ali Mahmudi selaku CEO dari perusahaan yang sekarang menjabat sebagai Direktur Utama. CV Beton Emas Persada didirikan atas dasar ketidaksengajaan pada tahun 2015 salah satu perusahaan Beton Pracetak terbaik di indonesia membutuhkan karyawan untuk mengerjakan utilitas pabriknya dan kemudian kami dipercaya untuk yang memproduksi produk mereka. Pada, Tahun 2019 bulan September merupakan awal dari kemajuan perusahaan kami dan mulai mengawali surat perjanjian kerjasama dengan perusahaan PT Wika Kobe. Berbagai Produk telah kami kerjakan seperti Produk Hollow Girder, Full Slab dan Half Slab, Linning, dan proyek yang kami akan kerjakan yaitu Mega Proyek Tunnel Segment MRT Jakarta Phase II yang akan mulai produksi massal pada bulan Februari Tahun 2021', 'CV. Beton Emas Persada adalah Perusahaan mitra terpercaya dalam indsutri penyedia jasa beton pracetak dan konstruksi.', NULL, NULL);
/*!40000 ALTER TABLE `persada_profiles` ENABLE KEYS */;

-- Dumping structure for table persada.produksis
CREATE TABLE IF NOT EXISTS `produksis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.produksis: ~0 rows (approximately)
/*!40000 ALTER TABLE `produksis` DISABLE KEYS */;
INSERT INTO `produksis` (`id`, `description`, `created_at`, `updated_at`) VALUES
	(1, '<p>TIm produksi merupakan tim yang memiliki tanggung jawab pada saat proses produksi produk. Dengan beberapa uraian pekerjaannya sebagai berikut:</p><ol><li>Memastikan are pekerjaan tetap bersih</li><li>Melakukan persiapan lokasi pengecoran</li><li>Membersihkan cetakan dan peralatan pendukung pengecoran</li><li>Melakukan pekerjaan pengecoran</li><li>Memberihkan kembali area pekerjaan setelah proses pengecoran</li><li>Membongkar cetakan dan mengeluarkan produk dari cetakan</li></ol>', '2021-02-13 12:26:25', '2021-02-13 12:26:25');
/*!40000 ALTER TABLE `produksis` ENABLE KEYS */;

-- Dumping structure for table persada.proyeks
CREATE TABLE IF NOT EXISTS `proyeks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.proyeks: ~2 rows (approximately)
/*!40000 ALTER TABLE `proyeks` DISABLE KEYS */;
INSERT INTO `proyeks` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, '602a59650d065.jpg', '<h1><b>PERSADA</b></h1><h5>local cuyy uji coba</h5>', '2021-02-15 11:22:13', '2021-02-15 11:22:13'),
	(2, '602a5cdad8895.JPG', '<p>iwhhhhh</p>', '2021-02-15 11:36:58', '2021-02-15 11:36:58');
/*!40000 ALTER TABLE `proyeks` ENABLE KEYS */;

-- Dumping structure for table persada.tulangans
CREATE TABLE IF NOT EXISTS `tulangans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.tulangans: ~0 rows (approximately)
/*!40000 ALTER TABLE `tulangans` DISABLE KEYS */;
INSERT INTO `tulangans` (`id`, `description`, `created_at`, `updated_at`) VALUES
	(1, '<p>Tim tulangan merupakan pekerjaan yang berkaitan dengan besi, adapun uraian pekerjaan seorang tim tulangan:</p><ol><li>Memastikan area kerja tetap bersih</li><li>Memilah dan menempatkan tulangan sesuai dengan ukurannya</li><li>Memotong, membending dan merakit besi menjadi tulangan untuk beton</li></ol>', '2021-02-13 12:39:00', '2021-02-13 12:39:00');
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

-- Dumping data for table persada.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@persada.com', NULL, '$2y$10$ToqP4PWmrt1C9Y/gCvLEROGomX9J4Vwx4HEvlujVFoLkFwHSh7DTK', NULL, '2021-02-13 11:41:02', '2021-02-13 11:41:02');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table persada.utpabriks
CREATE TABLE IF NOT EXISTS `utpabriks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table persada.utpabriks: ~0 rows (approximately)
/*!40000 ALTER TABLE `utpabriks` DISABLE KEYS */;
INSERT INTO `utpabriks` (`id`, `description`, `created_at`, `updated_at`) VALUES
	(1, '<p>Tim yang mengerjakan setiap pembangunan atau merenovasi fasilitas pabrik.</p>', '2021-02-13 12:46:16', '2021-02-13 12:46:16');
/*!40000 ALTER TABLE `utpabriks` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
