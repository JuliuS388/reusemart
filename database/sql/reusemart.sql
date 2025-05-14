-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 12:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reusemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`

--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `alamat_lengkap`, `kode_pos`, `id_pembeli`) VALUES
(1, 'Jl. Melati No. 45, Kel. Sukamaju, Kec. Cimanggis, Depok, Jawa Barat ', 16452, 1),
(2, 'Jl. Kenanga Raya No. 12A, Kel. Bintaro, Kec. Pesanggrahan, Jakarta Selatan, DKI Jakarta', 12330, 2),
(3, 'Jl. Merpati No. 89, Kel. Patehan, Kec. Kraton, Yogyakarta', 55133, 3),
(4, 'Jl. Anggrek Lestari No. 17, Kel. Tandes, Kec. Tandes, Surabaya, Jawa Timur', 60187, 4),
(5, 'Jl. Cemara Indah No. 101, Kel. Tegal Sari, Kec. Medan Area, Medan, Sumatera Utara', 20223, 5),
(6, 'Jl. Rajawali No. 5B, Kel. Sungai Bangkong, Kec. Pontianak Kota, Pontianak, Kalimantan Barat', 78113, 6),
(7, 'Jl. Kamboja No. 34, Kel. Panakkukang, Kec. Panakkukang, Makassar, Sulawesi Selatan', 90231, 7),
(8, 'Jl. Garuda No. 76, Kel. Kedungpane, Kec. Mijen, Semarang, Jawa Tengah', 50211, 8),
(9, 'Jl. Flamboyan No. 23C, Kel. Teluk Betung, Kec. Bumi Waras, Bandar Lampung, Lampung', 35221, 9),
(10, 'Jl. Nusa Indah No. 88, Kel. Alalak Selatan, Kec. Banjarmasin Utara, Banjarmasin, Kalimantan Selatan', 70123, 10);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `foto_thumbnail` varchar(255) NOT NULL,
  `foto1_barang` varchar(255) NOT NULL,
  `foto2_barang` varchar(255) NOT NULL,
  `kode_produk` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `perpanjangan` varchar(255) NOT NULL,
  `harga_barang` float NOT NULL,
  `status_barang` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_penitip` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `foto_thumbnail`, `foto1_barang`, `foto2_barang`, `kode_produk`, `nama_barang`, `tanggal_masuk`, `perpanjangan`, `harga_barang`, `status_barang`, `id_kategori`, `id_penitip`, `created_at`, `updated_at`) VALUES
(1, 'barang/11LaSNzIkmFLgiL748shYoQwIukt9tsdDZ9WQJtE.png', 'barang/TTNHxstLeHWiUgcdZtQ26IAelVERIYKOxBZbmOyg.png', 'barang/sBuNWiHHS1p3RPvhod2aa8E0C3LneECxPPjPegsm.png', 'ELEC-001', 'Laptop Bekas ASUUS', '2024-01-15', '2024-07-15', 450000, 'Sold Out', 1, 1, NULL, '2025-05-11 15:53:33'),
(2, '', '', '', 'FASH-101', 'Jaket Denim Levi', '2024-02-20', '2024-08-20', 1300000, 'Habis', 2, 2, NULL, NULL),
(3, '', '', '', 'BOOK-202', 'Novel Laskar Pelangi', '2024-03-10', '2024-09-10', 600000, 'Sold Out', 4, 3, NULL, NULL),
(4, '', '', '', 'TOY-303', 'Action Figure Gundam', '2024-04-05', '2024-10-05', 4500000, 'Habis', 5, 4, NULL, NULL),
(5, '', '', '', 'BABY-404', 'Stroller Bayi ABC', '2024-05-12', '2024-11-12', 2500000, 'Habis', 6, 5, NULL, NULL),
(6, '', '', '', 'COSM-505', 'Lipstik Sephora', '2024-06-18', '2024-12-18', 750000, 'Habis', 10, 6, NULL, NULL),
(7, '', '', '', 'AUTO-606', 'Velg Racing', '2024-07-22', '2025-01-22', 1000000, 'Habis', 7, 7, NULL, NULL),
(8, '', '', '', 'GARD-707', 'Pot Bunga Keramik', '2024-08-30', '2025-02-28', 750000, 'Habis', 8, 8, NULL, NULL),
(9, '', '', '', 'TOOL-808', 'Bor Listrik Makita', '2024-09-14', '2025-03-14', 2500000, 'Habis', 9, 9, NULL, NULL),
(10, '', '', '', 'SPRT-909', 'Sepatu Lari Nike', '2024-10-25', '2025-04-25', 500000, 'Habis', 5, 10, NULL, NULL),
(11, '', '', '', 'ELEC-011', 'Monitor LG 24 inch', '2025-04-11', '2025-10-11', 600000, 'didonasikan', 1, 1, NULL, NULL),
(12, '', '', '', 'FASH-112', 'Kemeja Batik Slimfit', '2025-04-11', '2025-10-11', 250000, 'didonasikan', 2, 2, NULL, NULL),
(13, '', '', '', 'BOOK-213', 'Buku Fisika SMA', '2025-04-11', '2025-10-11', 120000, 'didonasikan', 4, 3, NULL, NULL),
(14, '', '', '', 'TOY-314', 'Puzzle Kayu Anak', '2025-04-11', '2025-10-11', 180000, 'didonasikan', 5, 4, NULL, NULL),
(15, '', '', '', 'BABY-415', 'Bouncer Bayi Chicco', '2025-04-11', '2025-10-11', 320000, 'didonasikan', 6, 5, NULL, NULL),
(16, '', '', '', 'COSM-516', 'Masker Wajah Garnier', '2025-04-11', '2025-10-11', 75000, 'didonasikan', 10, 6, NULL, NULL),
(17, '', '', '', 'AUTO-617', 'Helm Full Face KYT', '2025-04-11', '2025-10-11', 850000, 'didonasikan', 7, 7, NULL, NULL),
(18, '', '', '', 'GARD-718', 'Tanaman Hias Monstera', '2025-04-11', '2025-10-11', 500000, 'didonasikan', 8, 8, NULL, NULL),
(19, '', '', '', 'TOOL-819', 'Gergaji Mesin Bosch', '2025-04-11', '2025-10-11', 1250000, 'didonasikan', 9, 9, NULL, NULL),
(20, '', '', '', 'SPRT-920', 'Matras Yoga Tebal', '2025-04-11', '2025-10-11', 300000, 'didonasikan', 3, 10, NULL, NULL),
(21, 'barang/T1754MIHMkipqUjunaxjnhRr0j6SUMUDxEQtQLk3.png', 'barang/7eZrhGmpW57FA0VqL5Ro01aNpoEqIASuh7FeP0wK.png', 'barang/qQEozjzhDLY20iGK36jd7g8U1rfj4Q3PyzT3z8Rc.png', 'asdasd', 'TEstt', '2025-05-12', '2025-13-08', 123123, 'Dijual', 4, 3, '2025-05-11 15:48:36', '2025-05-11 15:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

-- CREATE TABLE `cache` (
--   `key` varchar(255) NOT NULL,
--   `value` mediumtext NOT NULL,
--   `expiration` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

-- CREATE TABLE `cache_locks` (
--   `key` varchar(255) NOT NULL,
--   `owner` varchar(255) NOT NULL,
--   `expiration` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_barang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `subTotal_harga` float NOT NULL,
  `id_detailTransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_barang`, `id_transaksi`, `subTotal_harga`, `id_detailTransaksi`) VALUES
(1, 1, 450000, 1),
(2, 2, 1300000, 2),
(3, 3, 600000, 3),
(4, 4, 4500000, 4),
(5, 5, 2500000, 5),
(6, 6, 750000, 6),
(7, 9, 1000000, 7),
(8, 10, 750000, 8),
(9, 11, 2500000, 9),
(10, 12, 500000, 10),
(1, 13, 450000, 11),
(3, 13, 600000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_donasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `id_barang`, `tanggal_donasi`) VALUES
(1, 15, '2024-12-01'),
(2, 13, '2024-12-05'),
(3, 18, '2024-12-10'),
(4, 12, '2024-12-15'),
(5, 16, '2024-12-20'),
(6, 19, '2024-12-25'),
(7, 11, '2024-12-28'),
(8, 14, '2025-01-01'),
(9, 17, '2025-01-05'),
(10, 20, '2025-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

-- CREATE TABLE `failed_jobs` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `uuid` varchar(255) NOT NULL,
--   `connection` text NOT NULL,
--   `queue` text NOT NULL,
--   `payload` longtext NOT NULL,
--   `exception` longtext NOT NULL,
--   `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Owner'),
(2, 'Hunter'),
(3, 'Admin'),
(4, 'CS'),
(5, 'Kepala Gudang'),
(6, 'Kurir');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

-- CREATE TABLE `jobs` (
--   `id` bigint(20) UNSIGNED NOT NULL,
--   `queue` varchar(255) NOT NULL,
--   `payload` longtext NOT NULL,
--   `attempts` tinyint(3) UNSIGNED NOT NULL,
--   `reserved_at` int(10) UNSIGNED DEFAULT NULL,
--   `available_at` int(10) UNSIGNED NOT NULL,
--   `created_at` int(10) UNSIGNED NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

-- CREATE TABLE `job_batches` (
--   `id` varchar(255) NOT NULL,
--   `name` varchar(255) NOT NULL,
--   `total_jobs` int(11) NOT NULL,
--   `pending_jobs` int(11) NOT NULL,
--   `failed_jobs` int(11) NOT NULL,
--   `failed_job_ids` longtext NOT NULL,
--   `options` mediumtext DEFAULT NULL,
--   `cancelled_at` int(11) DEFAULT NULL,
--   `created_at` int(11) NOT NULL,
--   `finished_at` int(11) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategoriBarang` int(11) NOT NULL,
  `nama_kategoriBarang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategoriBarang`, `nama_kategoriBarang`) VALUES
(1, 'Elektronik & Gadget'),
(2, 'Pakaian & Aksesori'),
(3, 'Perabotan Rumah Tangga'),
(4, 'Buku, Alat Tulis, & Peralatan Sekolah'),
(5, 'Hobi, Mainan, & Koleksi'),
(6, 'Perlengkapan Bayi & Anak'),
(7, 'Otomotif & Aksesori'),
(8, 'Perlengkapan Taman & Outdoor'),
(9, 'Peralatan Kantor & Industri'),
(10, 'Kosmetik & Perawatan Diri');

-- --------------------------------------------------------

--
-- Table structure for table `komisi`
--

CREATE TABLE `komisi` (
  `id_komisi` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `komisi_pegawai` float NOT NULL,
  `bonus_penitip` float NOT NULL,
  `komisi_perusahaan` float NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_penitip` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komisi`
--

INSERT INTO `komisi` (`id_komisi`, `tanggal_masuk`, `tanggal_keluar`, `komisi_pegawai`, `bonus_penitip`, `komisi_perusahaan`, `id_pegawai`, `id_penitip`, `id_transaksi`) VALUES
(1, '2025-03-05', '2025-03-10', 150000, 45000, 155000, 10, 1, 1),
(2, '2025-04-01', '2025-04-05', 130000, 200000, 500000, 10, 2, 2),
(3, '2025-04-28', '2025-05-02', 100000, 50000, 200000, 10, 4, 3),
(4, '2025-05-05', '2025-05-10', 67500, 135000, 300000, 10, 5, 4),
(5, '2025-05-03', '2025-05-07', 25000, 50000, 200000, 10, 7, 5),
(6, '2025-05-05', '2025-05-09', 9000, 80000, 150000, 10, 8, 6),
(7, '2025-05-10', '2025-05-15', 42500, 85000, 150000, 10, 9, 9),
(8, '2025-05-12', '2025-05-17', 25000, 50000, 140000, 10, 10, 10),
(9, '2025-05-15', '2025-05-20', 70000, 90000, 120000, 10, 7, 11),
(10, '2025-05-20', '2025-05-25', 25000, 50000, 425000, 10, 6, 12);

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `id_merchandise` int(11) NOT NULL,
  `nama_merchandise` varchar(255) NOT NULL,
  `harga_merchandise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`id_merchandise`, `nama_merchandise`, `harga_merchandise`) VALUES
(1, 'Ballpoin', 100),
(2, 'Stiker', 100),
(3, 'Mug', 250),
(4, 'Topi', 250),
(5, 'Tumbler', 500),
(6, 'T-shirt', 500),
(7, 'Jam Dinding', 500),
(8, 'Tas Travel', 1000),
(9, 'Payung', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

-- CREATE TABLE `migrations` (
--   `id` int(10) UNSIGNED NOT NULL,
--   `migration` varchar(255) NOT NULL,
--   `batch` int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_09_115653_create_jabatans_table', 2),
(5, '2025_05_09_115653_create_pegawais_table', 2),
(6, '2025_05_09_121631_add_timestamps_to_pegawai_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `id_donasi` int(11) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `id_donasi`, `id_alamat`, `nama_organisasi`, `nama_penerima`, `request`) VALUES
(1, 1, 1, 'Yayasan Anak Bangsa', 'Joko', 'Perlengkapan Bayi'),
(2, 2, 3, 'Rumah Baca Jogja', 'Mukti', 'Buku Bacaan Anak'),
(3, 3, 8, 'Komunitas Hijau DIY', 'Edward', 'Peralatan Berkebun'),
(4, 4, 2, 'Rumah Singgah Anak', 'Christian', 'Pakaian Layak Pakai'),
(5, 5, 7, 'Panti Jompo Yogyakarta', 'Caca', 'Kebutuhan Lansia'),
(6, 6, 5, 'Bengkel Belajar Otomotif', 'Fadil', 'Alat-alat Pertukangan'),
(7, 7, 4, 'Sekolah Darurat Indonesia', 'Budi', 'Perangkat Elektronik'),
(8, 8, 6, 'Komunitas Otomotif Anak', 'Jarwo', 'Peralatan Otomotif'),
(9, 9, 9, 'Karang Taruna Anak Bangsa', 'Rama', 'Peralatan Olahraga'),
(10, 10, 10, 'Panti Asuhan Cinta Kasih', 'Shinta', 'Sepatu Layak Pakai');

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
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `username_pegawai` varchar(255) NOT NULL,
  `password_pegawai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `id_jabatan`, `email_pegawai`, `username_pegawai`, `password_pegawai`, `created_at`, `updated_at`) VALUES
(1, 'Arief', 1, 'arief@gmail.com', 'arief', 'ariefowner2020', NULL, NULL),
(2, 'Maya', 3, 'maya@gmail.com', 'maya', 'mayadmin123', NULL, NULL),
(3, 'Teguh', 3, 'teguh@gmail.com', 'teguh', 'teguhadmin321', NULL, NULL),
(4, 'Laras', 4, 'laras@gmail.com', 'laras', 'larascs232', NULL, NULL),
(5, 'Yusuf', 4, 'yusuf@gmail.com', 'yusuf', 'yusufcs989', NULL, NULL),
(6, 'Rani', 4, 'rani@gmail.com', 'rani', 'ranics657', NULL, NULL),
(7, 'Galih', 5, 'galih@gmail.com', 'galih', 'galihgudang2323', NULL, NULL),
(8, 'Megan', 6, 'megan@gmail.com', 'megan', 'megankurir783', NULL, NULL),
(9, 'Reza', 6, 'reza@gmail.com', 'reza', 'rezakurir12312', NULL, NULL),
(10, 'Vina', 2, 'vina@gmail.com', 'vina', 'vinahunter231', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `poin` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `email_pembeli` varchar(255) NOT NULL,
  `noTelp_pembeli` varchar(255) NOT NULL,
  `username_pembeli` varchar(255) NOT NULL,
  `password_pembeli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `poin`, `nama_pembeli`, `email_pembeli`, `noTelp_pembeli`, `username_pembeli`, `password_pembeli`) VALUES
(1, 300, 'Killian', 'killian@gmail.com', '081234567890', 'killian', 'killian0101'),
(2, 200, 'Rizky', 'rizky@gmail.com', '085712345678', 'rizky', 'rizky2626'),
(3, 200, 'Intan', 'intan@gmail.com', '082187654321', 'intan', 'intan10101'),
(4, 500, 'Andi', 'andi@gmail.com', '089611223344', 'andi', 'andi9101'),
(5, 500, 'Dewi', 'dewi@gmail.com', '081399887766', 'dewi', 'dewi9292'),
(6, 400, 'Fajar', 'fajar@gmail.com', '082233445566', 'fajar', 'fajar3432'),
(7, 500, 'Nadia', 'nadia@gmail.com', '085166778899', 'nadia', 'nadia2727'),
(8, 300, 'Bayu', 'bayu@gmail.com', '088222334455', 'bayu', 'bayu3939'),
(9, 100, 'Citra', 'citra@gmail.com', '087899901122', 'citra', 'citra2902'),
(10, 100, 'Ayu', 'ayu@gmail.com', '081744443333', 'ayu', 'ayuu2882');

-- --------------------------------------------------------

--
-- Table structure for table `penitip`
--

CREATE TABLE `penitip` (
  `id_penitip` int(11) NOT NULL,
  `nama_penitip` varchar(255) NOT NULL,
  `email_penitip` varchar(255) NOT NULL,
  `noTelp_penitip` varchar(255) NOT NULL,
  `saldo_penitip` float NOT NULL,
  `rating_penitip` float NOT NULL,
  `username_penitip` varchar(255) NOT NULL,
  `password_penitip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penitip`
--

INSERT INTO `penitip` (`id_penitip`, `nama_penitip`, `email_penitip`, `noTelp_penitip`, `saldo_penitip`, `rating_penitip`, `username_penitip`, `password_penitip`) VALUES
(1, 'Julius', 'julius@gmail.com', '089577776666', 1000000, 5, 'julius', 'julius123'),
(2, 'Bagas', 'bagas@gmail.com', '085211112222', 1500000, 4, 'bagas', 'bagas1010'),
(3, 'Kristina', 'kristina@gmail.com', '082333334444', 1300000, 4, 'kristina', 'kristina0909'),
(4, 'Bambang', 'bambang@gmail.com', '081955556666', 3000000, 3, 'bambang', 'bambang3445'),
(5, 'Susi', 'susi@gmail.com', '087788469382', 5000000, 4, 'susi', 'susi1111'),
(6, 'Jeff', 'jeff@gmail.com', '088123456789', 10000000, 5, 'jeff', 'jeff1234'),
(7, 'Mark', 'mark@gmail.com', '085332104321', 9000000, 5, 'mark', 'mark5011'),
(8, 'Ado', 'ado@gmail.com', '089901011212', 4000000, 3, 'adoo', 'ado32132'),
(9, 'Luke', 'luke@gmail.com', '081122334455', 6000000, 3, 'luke', 'luke8272'),
(10, 'Jenny', 'jenny@gmail.com', '082855667788', 4000000, 3, 'jenny', 'jenny4464'),
(11, 'Ken Rocky', 'ken@gmail.com', '086928435778', 500000, 4, 'ken', 'kenrocky123');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RHOc0pFFoT9NYF1ZJL1n6t7EvVANbWVVW8tglItN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVJnazVid01rajVHVkdKMVlLOFN3NjVWV1F4YVViUE9OR1d6TVJTbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9iYXJhbmcvMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1747004017);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `nomor_nota` varchar(255) NOT NULL,
  `total_harga` float NOT NULL,
  `status_transaksi` varchar(255) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `nomor_nota`, `total_harga`, `status_transaksi`, `id_pembeli`) VALUES
(1, '2025-03-01', '25.03.101', 450000, 'Sudah Diterima', 1),
(2, '2025-03-28', '25.03.102', 1300000, 'Sudah Diterima', 2),
(3, '2025-04-25', '25.04.103', 600000, 'Siap Diambil', 3),
(4, '2025-04-28', '25.04.104', 4500000, 'Siap Diambil', 4),
(5, '2025-04-30', '25.04.105', 2500000, 'Diproses', 5),
(6, '2025-05-01', '25.05.106', 750000, 'Diproses', 6),
(9, '2025-05-04', '25.05.107', 1000000, 'Diterima', 7),
(10, '2025-05-08', '25.05.108', 750000, 'Sudah Bayar', 8),
(11, '2025-05-09', '25.05.109', 2500000, 'Sudah Bayar', 9),
(12, '2025-05-14', '25.05.110', 500000, 'Sedang Disiapkan', 10),
(13, '2025-04-25', '25.04.111', 1050000, 'Diproses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tukarmarchandise`
--

CREATE TABLE `tukarmarchandise` (
  `id_tukarMarch` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_marchandise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tukarmarchandise`
--

INSERT INTO `tukarmarchandise` (`id_tukarMarch`, `id_pembeli`, `id_marchandise`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 7);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`),
  ADD KEY `fk_idPembeli2` (`id_pembeli`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `fk_idKategori` (`id_kategori`),
  ADD KEY `fk_idPenitip2` (`id_penitip`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detailTransaksi`),
  ADD KEY `fk_idBarang3` (`id_barang`),
  ADD KEY `fk_idTransaksi2` (`id_transaksi`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `fk_idBarang` (`id_barang`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategoriBarang`);

--
-- Indexes for table `komisi`
--
ALTER TABLE `komisi`
  ADD PRIMARY KEY (`id_komisi`),
  ADD KEY `fk_idPegawai` (`id_pegawai`),
  ADD KEY `fk_idPenitip` (`id_penitip`),
  ADD KEY `fk_idTransaksi3` (`id_transaksi`);

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id_merchandise`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`),
  ADD KEY `fk_idDonasi` (`id_donasi`),
  ADD KEY `fk_idAlamat` (`id_alamat`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `fk_idJabatan` (`id_jabatan`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `penitip`
--
ALTER TABLE `penitip`
  ADD PRIMARY KEY (`id_penitip`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_idPembeli` (`id_pembeli`);

--
-- Indexes for table `tukarmarchandise`
--
ALTER TABLE `tukarmarchandise`
  ADD PRIMARY KEY (`id_tukarMarch`),
  ADD KEY `fk_idPembeli3` (`id_pembeli`),
  ADD KEY `fk_idMerchandise` (`id_marchandise`);

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
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detailTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id_kategoriBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komisi`
--
ALTER TABLE `komisi`
  MODIFY `id_komisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id_merchandise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penitip`
--
ALTER TABLE `penitip`
  MODIFY `id_penitip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tukarmarchandise`
--
ALTER TABLE `tukarmarchandise`
  MODIFY `id_tukarMarch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `fk_idPembeli2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_idKategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_barang` (`id_kategoriBarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idPenitip2` FOREIGN KEY (`id_penitip`) REFERENCES `penitip` (`id_penitip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_idBarang3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idTransaksi2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `fk_idBarang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komisi`
--
ALTER TABLE `komisi`
  ADD CONSTRAINT `fk_idPegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idPenitip` FOREIGN KEY (`id_penitip`) REFERENCES `penitip` (`id_penitip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idTransaksi3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD CONSTRAINT `fk_idAlamat` FOREIGN KEY (`id_alamat`) REFERENCES `alamat` (`id_alamat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idDonasi` FOREIGN KEY (`id_donasi`) REFERENCES `donasi` (`id_donasi`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `fk_idJabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_idPembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tukarmarchandise`
--
ALTER TABLE `tukarmarchandise`
  ADD CONSTRAINT `fk_idMerchandise` FOREIGN KEY (`id_marchandise`) REFERENCES `merchandise` (`id_merchandise`),
  ADD CONSTRAINT `fk_idPembeli3` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
