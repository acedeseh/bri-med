-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 04.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `branchdesc`
--

CREATE TABLE `branchdesc` (
  `regional` varchar(512) DEFAULT NULL,
  `branchcode` int(11) DEFAULT NULL,
  `branchname` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `branchdesc`
--

INSERT INTO `branchdesc` (`regional`, `branchcode`, `branchname`) VALUES
('MAKASSAR', 1, 'KC Ambon'),
('PEKANBARU', 2, 'KC Bagan Siapiapi'),
('BANJARMASIN', 3, 'KC Banjarmasin'),
('YOGYAKARTA', 4, 'KC Banjarnegara'),
('BANDUNG', 5, 'KC BANDUNG AA'),
('MALANG', 7, 'KC Banyuwangi'),
('PALEMBANG', 8, 'KC Baturaja'),
('MALANG', 9, 'KC Blitar'),
('SURABAYA', 11, 'KC BOJONEGORO'),
('JAKARTA 2', 12, 'KC BOGOR DEWI SARTIKA'),
('JAKARTA 2', 12, 'BRI 24 BOGOR DEWI SARTIKA'),
('MALANG', 13, 'KC Bondowoso'),
('SEMARANG', 14, 'KC BREBES'),
('PADANG', 15, 'KC Bukittinggi'),
('SEMARANG', 16, 'KC DEMAK'),
('DENPASAR', 17, 'KC DENPASAR GAJAH MADA'),
('DENPASAR', 17, 'BRI 24 DENPASAR GAJAH MADA'),
('JAKARTA 1', 18, 'KC JAKARTA TANAH ABANG'),
('JAKARTA 3', 19, 'KC Jakarta Kota'),
('PALEMBANG', 20, 'KC JAMBI'),
('MALANG', 21, 'KC JEMBER'),
('SEMARANG', 22, 'KC JEPARA'),
('SURABAYA', 23, 'KC JOMBANG'),
('DENPASAR', 24, 'Ende'),
('BANDUNG', 25, 'KC GARUT'),
('SURABAYA', 26, 'KC GRESIK'),
('MANADO', 27, 'KC Gorontalo'),
('BANDUNG', 28, 'KC INDRAMAYU'),
('YOGYAKARTA', 29, 'KC YOGYA CIK DITIRO'),
('PALEMBANG', 30, 'KC Kayu Agung'),
('YOGYAKARTA', 32, 'KC Kebumen'),
('MALANG', 33, 'KC KEDIRI'),
('SEMARANG', 34, 'KC Kendal'),
('YOGYAKARTA', 35, 'KC KLATEN'),
('MANADO', 36, 'KC KOTAMUBAGU'),
('SEMARANG', 38, 'KC KUDUS'),
('DENPASAR', 39, 'KC Kupang'),
('PALEMBANG', 40, 'KC LAHAT'),
('SURABAYA', 41, 'KC LAMONGAN'),
('MALANG', 44, 'KC Lumajang'),
('MALANG', 45, 'KC MADIUN'),
('BANDUNG', 46, 'KC Majalengka'),
('MAKASSAR', 47, 'KC Majene'),
('YOGYAKARTA', 48, 'KC MAGELANG'),
('MALANG', 49, 'KC Magetan'),
('MAKASSAR', 50, 'KC Makassar Ahmad Yani'),
('MALANG', 51, 'KC MALANG KAWI'),
('DENPASAR', 52, 'KC MATARAM'),
('MEDAN', 53, 'KC MEDAN PUTRI HIJAU'),
('MEDAN', 53, 'BRI 24 MEDAN PUTRI HIJAU'),
('MANADO', 54, 'KC MANADO'),
('SURABAYA', 55, 'KC MOJOKERTO'),
('MALANG', 56, 'KC Nganjuk'),
('MALANG', 57, 'KC Ngawi'),
('PADANG', 58, 'KC Padang'),
('PALEMBANG', 59, 'KC PALEMBANG A. RIVAI'),
('MANADO', 60, 'KC Palu'),
('SURABAYA', 61, 'KC PAMEKASAN'),
('JAKARTA 3', 62, 'KC PANDEGLANG'),
('PALEMBANG', 63, 'KC Pangkal Pinang'),
('MAKASSAR', 64, 'KC Pare Pare'),
('MALANG', 65, 'KC Pasuruan'),
('SEMARANG', 66, 'KC PATI'),
('MALANG', 67, 'KC Pacitan'),
('SEMARANG', 68, 'KC PEKALONGAN'),
('SEMARANG', 69, 'KC Pemalang'),
('MALANG', 70, 'KC Ponorogo'),
('JAKARTA 3', 71, 'KC PONTIANAK'),
('MANADO', 72, 'KC Poso'),
('MALANG', 73, 'KC Probolinggo'),
('YOGYAKARTA', 74, 'KC Purbalingga'),
('BANDUNG', 75, 'KC PURWAKARTA'),
('SEMARANG', 76, 'KC Purwodadi'),
('YOGYAKARTA', 77, 'KC PURWOKERTO'),
('YOGYAKARTA', 78, 'KC Purworejo'),
('DENPASAR', 79, 'KC Raba Bima'),
('JAKARTA 3', 80, 'KC RANGKASBITUNG'),
('SEMARANG', 81, 'KC SALATIGA'),
('BANJARMASIN', 82, 'KC Samarinda 1'),
('SEMARANG', 83, 'KC SEMARANG PATIMURA'),
('JAKARTA 3', 84, 'KC SERANG'),
('SURABAYA', 86, 'KC SIDOARJO'),
('DENPASAR', 88, 'KC Singaraja'),
('JAKARTA 3', 89, 'KC Singkawang'),
('MALANG', 90, 'KC Situbondo'),
('BANDUNG', 92, 'KC Sukabumi'),
('DENPASAR', 93, 'KC Sumbawa Besar'),
('BANDUNG', 94, 'KC SUMEDANG'),
('SURABAYA', 95, 'KC Sumenep'),
('SURABAYA', 96, 'KC SURABAYA KALIASIN'),
('YOGYAKARTA', 97, 'KC Solo Sudirman'),
('BANDAR LAMPUNG', 98, 'KC TANJUNG KARANG'),
('BANDUNG', 100, 'KC TASIKMALAYA'),
('SEMARANG', 101, 'KC TEGAL'),
('YOGYAKARTA', 102, 'KC Temanggung'),
('MANADO', 103, 'KC Ternate'),
('BANDUNG', 104, 'KC Ciamis'),
('BANDUNG', 105, 'KC Cianjur'),
('YOGYAKARTA', 106, 'KC Cilacap'),
('BANDUNG', 107, 'KC CIREBON KARTINI'),
('BANDAR LAMPUNG', 108, 'KC Curup'),
('SURABAYA', 109, 'KC TUBAN'),
('MALANG', 110, 'KC Tulungagung'),
('MAKASSAR', 111, 'KC Watampone'),
('YOGYAKARTA', 112, 'KC Wonosobo'),
('MEDAN', 113, 'KC Pematang Siantar'),
('BANDAR LAMPUNG', 115, 'KC Bengkulu'),
('JAKARTA 2', 116, 'KC KARAWANG'),
('DENPASAR', 119, 'KC Maumere'),
('JAKARTA 3', 120, 'KC TANGERANG A. YANI'),
('BANJARMASIN', 121, 'KC Balikpapan Sudirman'),
('JAKARTA 1', 122, 'KC JAKARTA JATINEGARA'),
('BANDUNG', 123, 'KC SUBANG'),
('DENPASAR', 124, 'KC Tabanan'),
('BANJARMASIN', 126, 'KC Batulicin'),
('PALEMBANG', 128, 'KC Muara Enim'),
('PALEMBANG', 129, 'KC Lubuk Linggau'),
('BANDAR LAMPUNG', 130, 'KC Metro'),
('PALEMBANG', 131, 'KC Tanjung Pandan'),
('BANDUNG', 132, 'KC Majalaya'),
('BANDUNG', 133, 'KC Kuningan'),
('MEDAN', 135, 'KC Padang Sidempuan'),
('BANDUNG', 137, 'KC CIMAHI'),
('PALEMBANG', 138, 'KC Pagar Alam'),
('JAKARTA 2', 139, 'KC BEKASI'),
('YOGYAKARTA', 140, 'KC Sragen'),
('MEDAN', 144, 'KC KABANJAHE'),
('SURABAYA', 148, 'KC Sampang'),
('YOGYAKARTA', 149, 'KC Karanganyar'),
('BANDAR LAMPUNG', 150, 'KC Manna'),
('YOGYAKARTA', 151, 'KC Ajibarang'),
('YOGYAKARTA', 153, 'KC Wonosari'),
('MEDAN', 154, 'KC TANJUNG BALAI'),
('BANDAR LAMPUNG', 155, 'KC Kota Bumi'),
('SEMARANG', 156, 'KC Batang'),
('DENPASAR', 157, 'KC SELONG'),
('PEKANBARU', 159, 'KC Dumai'),
('PALEMBANG', 160, 'KC Muara Bungo'),
('BANDUNG', 161, 'KC Singaparna'),
('BANDUNG', 162, 'KC Banjar'),
('BANJARMASIN', 163, 'KC Sampit'),
('PALEMBANG', 164, 'KC Sekayu'),
('BANDUNG', 165, 'KC Jatibarang'),
('JAKARTA 3', 166, 'KC Labuan'),
('MANADO', 167, 'KC Luwuk'),
('MANADO', 168, 'KC BITUNG'),
('PADANG', 169, 'KC Batu Sangkar'),
('PEKANBARU', 170, 'KC Pekanbaru Sudirman'),
('SURABAYA', 172, 'KC SURABAYA RAJAWALI'),
('MEDAN', 176, 'KC Gunung Sitoli'),
('MALANG', 177, 'KC Trenggalek'),
('PALEMBANG', 179, 'KC Kualatungkal'),
('BANJARMASIN', 180, 'KC Kuala Kapuas'),
('BANDUNG', 181, 'KC Cibadak'),
('YOGYAKARTA', 182, 'KC Solo Kartasura'),
('BANJARMASIN', 183, 'KC Tarakan'),
('PALEMBANG', 184, 'KC Prabumulih'),
('JAKARTA 1', 186, 'KC JAKARTA TANJUNG PRIOK'),
('MAKASSAR', 187, 'KC Palopo'),
('JAKARTA 3', 188, 'KC CILEGON'),
('DENPASAR', 191, 'KC Praya'),
('MAKASSAR', 192, 'KC Kendari Samratulangi'),
('JAKARTA 2', 193, 'KC JAKARTA KEBAYORAN BARU'),
('MEDAN', 194, 'KC Sidikalang'),
('KCK', 206, 'KCK'),
('JAKARTA 3', 208, 'KC KETAPANG'),
('SURABAYA', 211, 'KC SURABAYA PAHLAWAN'),
('BANJARMASIN', 212, 'KC Tenggarong'),
('BANJARMASIN', 214, 'KC Tanah Grogot'),
('MAKASSAR', 216, 'KC Kolaka'),
('MAKASSAR', 218, 'KC Mamuju'),
('MAKASSAR', 224, 'KC Maros'),
('MAKASSAR', 225, 'KC Sungguminasa'),
('JAKARTA 1', 230, 'KC JAKARTA CUT MUTIAH'),
('MAKASSAR', 232, 'KC Rantepao'),
('DENPASAR', 235, 'KC Waikabubak'),
('YOGYAKARTA', 236, 'KC BANTUL'),
('MANADO', 237, 'KC Tondano'),
('MEDAN', 238, 'KC BINJAI'),
('BANJARMASIN', 242, 'KC Martapura'),
('BANJARMASIN', 243, 'KC Palangkaraya'),
('YOGYAKARTA', 245, 'KC YOGYA KATAMSO'),
('YOGYAKARTA', 247, 'KC SLEMAN'),
('DENPASAR', 248, 'KC Gianyar'),
('BANJARMASIN', 249, 'KC Tanjung Tabalong'),
('MAKASSAR', 250, 'KC Takalar'),
('PADANG', 256, 'KC Payakumbuh'),
('JAKARTA 1', 261, 'KC JAKARTA KREKOT'),
('MEDAN', 266, 'KC LUBUK PAKAM'),
('MANADO', 279, 'KC Limboto'),
('BANJARMASIN', 282, 'KC Pangkalan Bun'),
('MEDAN', 283, 'KC TEBING TINGGI'),
('BANDAR LAMPUNG', 285, 'KC TELUK BETUNG'),
('BANDUNG', 286, 'KC BANDUNG DEWI SARTIKA'),
('JAKARTA 2', 302, 'KC Cikampek'),
('BANJARMASIN', 303, 'KC Buntok'),
('JAKARTA 3', 304, 'KC Sintang'),
('BANJARMASIN', 306, 'KC Tanjung Selor'),
('JAYAPURA', 307, 'KC Jayapura'),
('JAYAPURA', 308, 'KC Biak'),
('JAYAPURA', 310, 'KC Sorong'),
('BANDAR LAMPUNG', 318, 'KC Arga Makmur'),
('JAKARTA 2', 319, 'KC CIKARANG'),
('JAKARTA 1', 320, 'KC JAKARTA KELAPA GADING'),
('PADANG', 321, 'KC Pariaman'),
('JAKARTA 3', 322, 'KC Sanggau'),
('MEDAN', 323, 'KC Kisaran'),
('SEMARANG', 325, 'KC SEMARANG PANDANARAN'),
('SEMARANG', 327, 'KC Ungaran'),
('SURABAYA', 328, 'KC SURABAYA TANJUNG PERAK'),
('JAKARTA 1', 329, 'KC JAKARTA VETERAN'),
('JAKARTA 2', 330, 'KC JAKARTA FATMAWATI'),
('PEKANBARU', 331, 'KC Batam'),
('PEKANBARU', 331, 'KC Batam Nagoya'),
('JAKARTA 1', 332, 'KC JAKARTA HAYAM WURUK'),
('BANJARMASIN', 333, 'KC Bontang'),
('YOGYAKARTA', 334, 'KC SOLO SLAMET RIADI'),
('JAKARTA 1', 335, 'KC JAKARTA KRAMAT'),
('MEDAN', 336, 'KC MEDAN ISKANDAR MUDA'),
('BANDUNG', 337, 'KC BANDUNG NARIPAN'),
('JAKARTA 3', 338, 'KC Jakarta Roxi'),
('JAKARTA 2', 339, 'KC JAKARTA PASAR MINGGU'),
('JAKARTA 1', 340, 'KC JAKARTA OTISTA'),
('JAKARTA 2', 341, 'KC JAKARTA WARUNG BUNCIT'),
('PALEMBANG', 342, 'KC Palembvang Sriwijaya'),
('MAKASSAR', 343, 'KC Makassar Somba Opu'),
('MALANG', 344, 'KC MALANG MARTHADINATA'),
('JAKARTA 1', 345, 'KC JAKARTA GUNUNG SAHARI'),
('JAKARTA 1', 346, 'KC JAKARTA MANGGA DUA'),
('JAYAPURA', 352, 'KC Merauke'),
('BANDUNG', 354, 'BRI 24 BANDUNG AH NASUTION'),
('BANDUNG', 355, 'KC Pamanukan'),
('JAKARTA 1', 356, 'KC JAKARTA KEMAYORAN'),
('BANDAR LAMPUNG', 357, 'KC Bandar Jaya'),
('BANDAR LAMPUNG', 358, 'KC Pringsewu'),
('JAKARTA 2', 359, 'KC JAKARTA GATOT SUBROTO'),
('SURABAYA', 360, 'KC Surabaya Kusuma Bangsa'),
('JAKARTA 1', 361, 'KC JAKARTA SEGITIGA SENEN'),
('JAKARTA 2', 362, 'KC Jakarta Pondok Indah'),
('MEDAN', 367, 'KC MEDAN SISINGAMANGARAJA'),
('DENPASAR', 368, 'KC DENPASAR RENON'),
('JAKARTA 1', 376, 'KC JAKARTA SUDIRMAN 1'),
('JAKARTA 3', 377, 'KC Jakarta Kebon Jeruk'),
('JAKARTA 1', 378, 'KC JAKARTA RASUNA SAID'),
('JAKARTA 3', 379, 'KC JAKARTA DAAN MOGOT'),
('JAKARTA 3', 382, 'Ciputat'),
('JAKARTA 2', 384, 'KC CIBUBUR'),
('JAKARTA 2', 385, 'KC PONDOK GEDE'),
('JAKARTA 1', 386, 'KC Rawamangun'),
('JAKARTA 2', 387, 'KC BOGOR PADJAJARAN'),
('YOGYAKARTA', 389, 'KC Bandung Marthadinata'),
('JAKARTA 2', 390, 'KC JAKARTA PANCORAN'),
('JAKARTA 3', 393, 'KC BINTARO'),
('SURABAYA', 394, 'KC SURABAYA KAPAS KRAMPUNG'),
('JAKARTA 3', 395, 'KC Jakarta Tanjung Duren'),
('JAKARTA 3', 396, 'KC Jakarta Joglo'),
('JAKARTA 3', 397, 'PALMERAH'),
('JAKARTA 3', 398, 'KC Jakarta Puri Niaga'),
('JAKARTA 3', 399, 'KC Jakarta Kalideres'),
('BANDUNG', 401, 'KC BANDUNG KOPO'),
('MAKASSAR', 403, 'BRI 24 TAMALANREA'),
('MEDAN', 404, 'KC Medan Gatot Subroto'),
('BANDUNG', 405, 'KC BANDUNG DAGO'),
('BANDUNG', 406, 'KC Cirebon Gunung Jati'),
('BANDUNG', 407, 'KC BANDUNG SOEKARNO HATTA'),
('BANDUNG', 408, 'KC BANDUNG SETIABUDI'),
('YOGYAKARTA', 410, 'KC Yogyaarta Adi Sucipto'),
('SURABAYA', 411, 'KC Surabaya Kertajaya'),
('SURABAYA', 412, 'KC Surabaya Jemursari'),
('JAKARTA 1', 415, 'KC JAKARTA PLUIT'),
('JAKARTA 1', 416, 'KC JAKARTA ARTHA GADING'),
('JAKARTA 3', 417, 'KC Jakarta S. Parman'),
('JAKARTA 3', 418, 'KC Jakarta Jelambar'),
('JAKARTA 1', 419, 'KC JAKARTA KALIMALANG'),
('JAKARTA 2', 420, 'KC PANGLIMA POLIM'),
('JAKARTA 2', 421, 'KC Cibinong'),
('JAKARTA 2', 423, 'KC PEKAYON'),
('JAKARTA 2', 425, 'KC JAKARTA AMPERA'),
('JAKARTA 2', 426, 'KC MENARA BRILIAN'),
('JAKARTA 2', 428, 'KC JAKARTA LEBAK BULUS'),
('MALANG', 429, 'KC Malang Sutoyo'),
('JAKARTA 2', 430, 'KC JAKARTA RADIO DALAM'),
('JAKARTA 1', 434, 'KC JAKARTA CEMPAKA MAS'),
('SEMARANG', 435, 'KC Semarang Brigjen Sudiarto'),
('JAKARTA 3', 437, 'KC BALARAJA'),
('JAKARTA 3', 438, 'KC Tangerang City'),
('JAKARTA 1', 439, 'KC JAKARTA GADING BOULEVARD'),
('JAKARTA 1', 440, 'KC PIK'),
('JAKARTA 1', 441, 'KC SUNTER'),
('JAKARTA 2', 442, 'KC JAKARTA KRAMAT JATI'),
('JAKARTA 2', 443, 'KC JAKARTA TB SIMATUPANG'),
('JAKARTA 2', 444, 'KC TAMBUN'),
('JAKARTA 3', 445, 'KC Tangerang Merdeka'),
('BANJARMASIN', 448, 'samarinda 2'),
('BANDAR LAMPUNG', 503, 'KC KALIANDA'),
('JAKARTA 3', 509, 'KC BUMI SERPONG DAMAI'),
('JAKARTA 3', 509, 'BRI 24 BUMI SERPONG DAMAI'),
('JAKARTA 2', 538, 'KC DEPOK'),
('BANDUNG', 544, 'KC SOREANG'),
('SURABAYA', 553, 'KC Krian'),
('MALANG', 555, 'KC Pare'),
('DENPASAR', 556, 'KC KUTA'),
('PEKANBARU', 560, 'KC Duri'),
('JAYAPURA', 561, 'KC Timika'),
('BANJARMASIN', 563, 'KC Sangatta'),
('DENPASAR', 572, 'KC Denpasar Gatot Subroto'),
('MALANG', 577, 'KC Genteng'),
('MALANG', 579, 'KC Malang Soekarno Hatta'),
('SURABAYA', 583, 'KC Manukan'),
('SURABAYA', 584, 'KC SBY HR MUHAMMAD'),
('SURABAYA', 587, 'KC Mulyosari'),
('DENPASAR', 590, 'Ubud'),
('BANDAR LAMPUNG', 605, 'KC Tulang Bawang'),
('SEMARANG', 609, 'KC Semarang Ahmad Yani'),
('PEKANBARU', 621, 'KC Batam Center'),
('BANJARMASIN', 623, 'KC Banjarmasin A Yani'),
('BANJARMASIN', 627, 'KC Nunukan'),
('MEDAN', 633, 'KC MEDAN THAMRIN'),
('MEDAN', 636, 'KC Perdagangan'),
('MEDAN', 638, 'KC Stabat'),
('MAKASSAR', 642, 'KC Panakkukang'),
('MAKASSAR', 646, 'KC Kendari By Pass'),
('PEKANBARU', 662, 'KC Pangkalan Kerinci'),
('PEKANBARU', 668, 'KC Bangkinang'),
('JAKARTA 2', 671, 'KC BEI'),
('SURABAYA', 684, 'KC Waru'),
('PEKANBARU', 696, 'KC Tuanku Tambusai'),
('JAKARTA 1', 869, 'Unit Tongkol'),
('SEMARANG', 899, 'UNIT Mugas'),
('JAKARTA 2', 949, 'Unit Ciracas'),
('JAKARTA 1', 968, 'Unit Johar Baru'),
('YOGYAKARTA', 1063, 'KC Solo Baru'),
('PEKANBARU', 1079, 'KC Lancang Kuning'),
('JAYAPURA', 1082, 'KC Sentani'),
('MEDAN', 1097, 'KC Sibuhuan'),
('JAKARTA 3', 1127, 'KC Pamulang'),
('JAKARTA 3', 1145, 'KC Gading Serpong'),
('SURABAYA', 1156, 'KC SURABAYA DIPONEGORO'),
('JAKARTA 1', 1223, 'KC JAKARTA MALL AMBASADOR'),
('MAKASSAR', 1476, 'KK Bandara Hasanudin'),
('JAKARTA 2', 1731, 'KK PIM 2'),
('JAKARTA 1', 1748, 'KK MKG'),
('KCK', 1820, 'KK Jakarta Pacific Place'),
('JAKARTA 2', 1871, 'BRISMESCOFE'),
('MANADO', 2003, 'KC Manado Boulevard'),
('JAKARTA 1', 2020, 'KCP BUMN'),
('MANADO', 2025, 'KC Morowali'),
('JAKARTA 1', 2046, 'KCP Jakarta Mall Kokas'),
('MEDAN', 2062, 'KC Kota Pinang'),
('JAKARTA 2', 2101, 'KC MABES TNI CILANGKAP'),
('JAKARTA 1', 3227, 'Unit Cilincing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `digital_cs`
--

CREATE TABLE `digital_cs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branchcode` int(10) NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `date_found` datetime(6) DEFAULT NULL,
  `sla_target` datetime(6) DEFAULT NULL,
  `date_done` datetime(6) DEFAULT NULL,
  `issue` varchar(255) NOT NULL,
  `analysis` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `digital_cs`
--

INSERT INTO `digital_cs` (`id`, `created_at`, `updated_at`, `branchcode`, `branchname`, `problem`, `date_found`, `sla_target`, `date_done`, `issue`, `analysis`, `status`, `note`) VALUES
(1, '2023-11-30 20:53:50', '2023-11-30 20:54:19', 8, 'KC Baturaja', 'TEST', '2023-12-01 10:52:00.000000', '2023-12-01 13:52:00.000000', '2023-12-01 10:56:00.000000', 'Machine Issue', 'TEST', 'Done', 'TEST'),
(2, '2023-12-04 01:13:03', '2023-12-04 01:13:03', 105, 'KC Cianjur', 'TEST', '2023-12-04 10:12:00.000000', '2023-12-04 13:12:00.000000', NULL, 'Machine Issue', 'TEST', 'Not Done (On Progress)', 'TEST');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_17_034221_create_digital_cs', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `qms`
--

CREATE TABLE `qms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branchcode` int(10) NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `date_found` datetime(6) DEFAULT NULL,
  `sla_target` datetime(6) DEFAULT NULL,
  `date_done` datetime(6) DEFAULT NULL,
  `issue` varchar(255) NOT NULL,
  `analysis` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `qms`
--

INSERT INTO `qms` (`id`, `created_at`, `updated_at`, `branchcode`, `branchname`, `problem`, `date_found`, `sla_target`, `date_done`, `issue`, `analysis`, `status`, `note`) VALUES
(1, '2023-11-30 13:53:50', '2023-11-30 13:54:19', 8, 'KC Baturaja', 'TEST', '2023-12-01 10:52:00.000000', '2023-12-01 13:52:00.000000', '2023-12-01 10:56:00.000000', 'Machine Issue', 'TEST', 'Done', 'TEST'),
(2, '2023-12-04 01:17:44', '2023-12-04 01:18:16', 102, 'KC Temanggung', 'TEST', '2023-12-04 13:17:00.000000', '2023-12-04 16:17:00.000000', '2023-12-04 13:18:00.000000', 'Machine Issue', 'TEST', 'Done', 'TEST');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rcm`
--

CREATE TABLE `rcm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branchcode` int(10) NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `date_found` datetime(6) DEFAULT NULL,
  `sla_target` datetime(6) DEFAULT NULL,
  `date_done` datetime(6) DEFAULT NULL,
  `issue` varchar(255) NOT NULL,
  `analysis` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rcm`
--

INSERT INTO `rcm` (`id`, `created_at`, `updated_at`, `branchcode`, `branchname`, `problem`, `date_found`, `sla_target`, `date_done`, `issue`, `analysis`, `status`, `note`) VALUES
(1, '2023-11-30 13:53:50', '2023-11-30 13:54:19', 8, 'KC Baturaja', 'TEST', '2023-12-01 10:52:00.000000', '2023-12-01 13:52:00.000000', '2023-12-01 10:56:00.000000', 'Machine Issue', 'TEST', 'Done', 'TEST'),
(2, '2023-12-04 19:03:26', '2023-12-04 19:04:12', 2062, 'KC Kota Pinang', 'TEST', '2023-12-05 10:03:00.000000', '2023-12-05 13:03:00.000000', '2023-12-05 12:04:00.000000', 'Machine Issue', 'TEST', 'Done', 'TEST');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sspp`
--

CREATE TABLE `sspp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branchcode` int(10) NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `date_found` datetime(6) DEFAULT NULL,
  `sla_target` datetime(6) DEFAULT NULL,
  `date_done` datetime(6) DEFAULT NULL,
  `issue` varchar(255) NOT NULL,
  `analysis` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sspp`
--

INSERT INTO `sspp` (`id`, `created_at`, `updated_at`, `branchcode`, `branchname`, `problem`, `date_found`, `sla_target`, `date_done`, `issue`, `analysis`, `status`, `note`) VALUES
(1, '2023-11-30 13:53:50', '2023-11-30 13:54:19', 8, 'KC Baturaja', 'TEST', '2023-12-01 10:52:00.000000', '2023-12-01 13:52:00.000000', '2023-12-01 10:56:00.000000', 'Machine Issue', 'TEST', 'Done', 'TEST'),
(2, '2023-12-03 20:09:23', '2023-12-03 21:33:41', 12, 'KC BOGOR DEWI SARTIKA', 'TEST', '2023-12-04 06:03:00.000000', '2023-12-04 09:03:00.000000', '2023-12-04 12:33:00.000000', 'Machine Issue', 'TEST', 'Done', 'TEST'),
(3, '2023-12-03 23:53:35', '2023-12-03 23:54:07', 13, 'KC Bondowoso', 'TEST', '2023-12-04 12:53:00.000000', '2023-12-04 15:53:00.000000', '2023-12-04 15:55:00.000000', 'Machine Issue', 'TEST', 'Done', 'TEST');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tcr`
--

CREATE TABLE `tcr` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branchcode` int(10) NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `date_found` datetime(6) DEFAULT NULL,
  `sla_target` datetime(6) DEFAULT NULL,
  `date_done` datetime(6) DEFAULT NULL,
  `issue` varchar(255) NOT NULL,
  `analysis` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tcr`
--

INSERT INTO `tcr` (`id`, `created_at`, `updated_at`, `branchcode`, `branchname`, `problem`, `date_found`, `sla_target`, `date_done`, `issue`, `analysis`, `status`, `note`) VALUES
(1, '2023-11-30 13:53:50', '2023-11-30 13:54:19', 8, 'KC Baturaja', 'TEST', '2023-12-01 10:52:00.000000', '2023-12-01 13:52:00.000000', '2023-12-01 10:56:00.000000', 'Machine Issue', 'TEST', 'Done', 'TEST');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Testing', 'test@dnr.com', NULL, '$2y$12$YgBOJ7/4qcz0putLerzV6OO9zoPYhLwj9KKe72yPCXTHILcrX5FLy', NULL, '2023-11-30 18:54:26', '2023-11-30 18:54:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `digital_cs`
--
ALTER TABLE `digital_cs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `qms`
--
ALTER TABLE `qms`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rcm`
--
ALTER TABLE `rcm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sspp`
--
ALTER TABLE `sspp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tcr`
--
ALTER TABLE `tcr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `digital_cs`
--
ALTER TABLE `digital_cs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `qms`
--
ALTER TABLE `qms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rcm`
--
ALTER TABLE `rcm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sspp`
--
ALTER TABLE `sspp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tcr`
--
ALTER TABLE `tcr`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
