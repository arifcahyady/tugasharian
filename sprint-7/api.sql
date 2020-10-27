-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2020 pada 14.37
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_10_26_133617_create_siswa_table', 1),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(7, '2016_06_01_000004_create_oauth_clients_table', 2),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('03ba7199747ab068b379b4006e00cd91d18f15275a1ce18849830363965b6f37ac676aec77cf742f', 9, 1, 'Personal Access Token', '[]', 0, '2020-10-27 02:13:56', '2020-10-27 02:13:56', '2020-11-03 09:13:57'),
('12b85a6f384f77b9954ec24b0458c352b7ee88740c62fa14f6f51bb769f7889fb39ec60f191d1e41', 6, 1, 'Personal Access Token', '[]', 0, '2020-10-26 23:19:07', '2020-10-26 23:19:07', '2020-11-03 06:19:07'),
('1b30ede82185e9278d116c36d14782301ba899869c26a08116c11368dd7ab234be52520df1406e10', 3, 1, 'Personal Access Token', '[]', 0, '2020-10-26 22:51:17', '2020-10-26 22:51:17', '2020-11-03 05:51:18'),
('1c1d29e06bbd179782ae064944fca20c54b2ffb6471fe1d902ee78e80f074da8f6bbce7af5f1ecde', 7, 1, 'Personal Access Token', '[]', 0, '2020-10-27 02:04:33', '2020-10-27 02:04:33', '2020-11-03 09:04:34'),
('5b296436cadb8368da42a13c7d2e6a7cf727057ceb243e96f08e843e495836456ec9a4682510c988', 5, 1, 'Personal Access Token', '[]', 0, '2020-10-26 23:07:34', '2020-10-26 23:07:34', '2020-11-03 06:07:34'),
('649af27c11d9d05f18237e5e2743ec80e71930c4be65f1f29a7ad13dc417888c55a28cc3968274cc', 7, 1, 'Personal Access Token', '[]', 0, '2020-10-26 23:24:58', '2020-10-26 23:24:58', '2020-11-03 06:24:58'),
('818d2fddde71c5b9fd7747afb842fed84c4dbca49f5112d2eb45d7970a2781552e4a4c55d4cd4cc2', 1, 1, 'Personal Access Token', '[]', 0, '2020-10-26 19:08:58', '2020-10-26 19:08:58', '2020-11-03 02:08:59'),
('882e4192b77b870e10b4f66f0a3a7fa9d23a5c82447e2e2d8f8c6683e57ba0108154b363bf7f2b09', 5, 1, 'Personal Access Token', '[]', 0, '2020-10-26 23:07:48', '2020-10-26 23:07:48', '2020-11-03 06:07:48'),
('8d093d4bd74a5c2631c26fba074e5dbd9527275312e9870bdb21ba8a51fd97069fc901b40d5b2856', 2, 1, 'Personal Access Token', '[]', 0, '2020-10-26 19:18:36', '2020-10-26 19:18:36', '2020-11-03 02:18:37'),
('b04221375737b7190e561a0fea6a0660dff7424b309437d06eb2f0601ccf8b35654b6e4e9b6d4c18', 5, 1, 'Personal Access Token', '[]', 0, '2020-10-26 23:07:26', '2020-10-26 23:07:26', '2020-11-03 06:07:27'),
('d73daf6fcbc6e0978313300bcf1c0aff8bf77dc7b20b933a7386c0498a77a4fd3b23c40daa259efd', 8, 1, 'Personal Access Token', '[]', 0, '2020-10-27 02:10:51', '2020-10-27 02:10:51', '2020-11-03 09:10:51'),
('e2fadfea9ea97b326bbaf5f615a93740b6353c8cdb805b2fdda9341b5504c04906a7b055c97fc45f', 2, 1, 'Personal Access Token', '[]', 0, '2020-10-26 22:47:39', '2020-10-26 22:47:39', '2020-11-03 05:47:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'YID7BFZBNJM3teZxeXyOhpOdLOpMXs4FpWdLewY3', 'http://localhost', 1, 0, 0, '2020-10-26 18:35:37', '2020-10-26 18:35:37'),
(2, NULL, 'Laravel Password Grant Client', 'tioCcvK6q7I56lIyd0rrgioT8R6xvwliJNmZrRQS', 'http://localhost', 0, 1, 0, '2020-10-26 18:35:37', '2020-10-26 18:35:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-10-26 18:35:37', '2020-10-26 18:35:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `agama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Arif', 'Cahyady', 'L', 'Islam', 'Jl.kasuari No.1 kec.sipispis', NULL, NULL),
(2, 'Muhammad', 'Ihsan', 'L', 'Islam', 'Jl.kasuari No.2 kec.sipispis', NULL, NULL),
(3, 'Abdul', 'Malik', 'L', 'Islam', 'Jl.kasuari No.3 kec.sipispis', NULL, NULL),
(4, 'Muhammad', 'Sidiq', 'L', 'Islam', 'Jl.kasuari No.4 kec.sipispis', NULL, NULL),
(6, 'Nana', 'Nami', 'P', 'Islam', 'Jl.kenagan no.2 kec.sipispis', '2020-10-27 00:29:38', '2020-10-27 00:29:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'arifin', 'cihoyi@gmail.com', NULL, '$2y$10$BahwlAusE6e/dVSoL3Ck6.TpzuyuAbEjlR1os8GfaT.5QBCUyXqnS', NULL, '2020-10-27 02:13:45', '2020-10-27 02:13:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
