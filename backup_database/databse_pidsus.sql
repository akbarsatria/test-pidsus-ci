-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 29, 2017 at 01:47 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pidsus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_kasus_jaksas`
--

CREATE TABLE `detail_kasus_jaksas` (
  `id` int(11) NOT NULL,
  `id_kasus` int(11) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `update_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `detail_kasus_obyeks`
--

CREATE TABLE `detail_kasus_obyeks` (
  `id` int(11) NOT NULL,
  `id_kasus` int(11) NOT NULL,
  `id_obyek` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `detail_kasus_obyeks`
--

INSERT INTO `detail_kasus_obyeks` (`id`, `id_kasus`, `id_obyek`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(0, 9, 1, '2017-06-29 00:56:50', '2017-06-29 00:56:50', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kasus_subyeks`
--

CREATE TABLE `detail_kasus_subyeks` (
  `id` int(11) NOT NULL,
  `id_kasus` int(11) NOT NULL,
  `id_subyek` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `detail_kasus_subyeks`
--

INSERT INTO `detail_kasus_subyeks` (`id`, `id_kasus`, `id_subyek`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 7, 4, '2017-06-18 06:58:38', '2017-06-18 06:58:38', '::1', '::1'),
(2, 9, 6, '2017-06-18 07:14:32', '2017-06-18 07:14:32', '::1', '::1'),
(3, 12, 7, '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(4, 13, 8, '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(5, 14, 9, '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kasus_surats`
--

CREATE TABLE `detail_kasus_surats` (
  `id` int(11) NOT NULL,
  `id_kasus` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `detail_kasus_surats`
--

INSERT INTO `detail_kasus_surats` (`id`, `id_kasus`, `id_surat`, `status`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 12, 1, '', '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(2, 13, 2, '', '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(3, 14, 3, '', '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1'),
(4, 9, 4, 'RP2', '2017-06-29 00:54:53', '2017-06-29 00:54:53', '::1', '::1'),
(5, 9, 5, 'RP2', '2017-06-29 00:56:50', '2017-06-29 00:56:50', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jaksas`
--

CREATE TABLE `tabel_jaksas` (
  `id` int(11) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama_jaksa` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tabel_jaksas`
--

INSERT INTO `tabel_jaksas` (`id`, `id_jaksa`, `nip`, `nama_jaksa`, `pangkat`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 0, '00122345', 'Akbar Satria P', 'Jaksa Agung', '2017-06-10 12:39:52', '2017-06-10 12:44:48', '::1', '::1'),
(3, 0, '1239809', 'Budiman', 'Hakim', '2017-06-10 13:04:12', '2017-06-10 13:04:12', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kasus`
--

CREATE TABLE `tabel_kasus` (
  `id` int(11) NOT NULL,
  `id_kasus` int(11) DEFAULT NULL,
  `judul_kasus` varchar(250) NOT NULL,
  `lokasi_kejadian` varchar(100) DEFAULT NULL,
  `tanggal_kejadian` datetime DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `kodepos` int(11) DEFAULT NULL,
  `disposisi` varchar(100) DEFAULT NULL,
  `kasus_posisi` varchar(100) DEFAULT NULL,
  `kasimpulan` varchar(350) DEFAULT NULL,
  `saran` varchar(350) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kasus`
--

INSERT INTO `tabel_kasus` (`id`, `id_kasus`, `judul_kasus`, `lokasi_kejadian`, `tanggal_kejadian`, `nama_lengkap`, `alamat`, `kota`, `kodepos`, `disposisi`, `kasus_posisi`, `kasimpulan`, `saran`, `status`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(5, 5, 'Pencurian ban motor di parkiran', 'Parkiran scbd', '0000-00-00 00:00:00', 'Akbar Satria', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', 15144, NULL, NULL, NULL, NULL, 'kasus', '2017-06-16 10:56:04', '2017-06-16 10:56:04', '::1', '::1'),
(6, 6, 'Penembakan manusia di jalanan', 'ciledug', '2017-10-10 00:00:00', 'Permadi', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', 15144, NULL, NULL, NULL, NULL, 'kasus', '2017-06-18 06:54:12', '2017-06-18 06:54:12', '::1', '::1'),
(7, 7, 'Korupsi', 'tangerag', '2017-10-10 00:00:00', 'Supardi', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', 15144, NULL, NULL, NULL, NULL, 'kasus', '2017-06-18 06:58:38', '2017-06-18 06:58:38', '::1', '::1'),
(8, 8, 'Pencurian mobi baru dan membacok orang', 'bsd', '2017-10-10 00:00:00', 'shabrina', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', 15144, NULL, NULL, NULL, NULL, 'kasus', '2017-06-18 07:12:24', '2017-06-18 07:12:24', '::1', '::1'),
(9, 9, '', 'jakarta', '2017-10-10 00:00:00', 'Gilang', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', 15144, NULL, '', NULL, NULL, 'RP2', '2017-06-18 07:14:32', '2017-06-29 00:56:50', '::1', '::1'),
(10, 10, 'perampokan', 'tangerang', '2017-08-09 00:00:00', 'Akbar satria', 'Kmp. Pepabri', 'Tangerang', 14155, NULL, NULL, NULL, NULL, 'kasus', '2017-06-26 05:39:20', '2017-06-26 05:39:20', '::1', '::1'),
(11, 11, 'perampokan', 'tangerang', '2017-08-09 00:00:00', 'Akbar satria', 'Kmp. Pepabri', 'Tangerang', 14155, NULL, NULL, NULL, NULL, 'kasus', '2017-06-26 05:40:41', '2017-06-26 05:40:41', '::1', '::1'),
(12, 12, 'perampokan', 'tangerang', '2017-08-09 00:00:00', 'Akbar satria', 'Kmp. Pepabri', 'Tangerang', 14155, NULL, NULL, NULL, NULL, 'kasus', '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(13, 13, 'Perampokan begal di serpong', 'banten', '2017-04-09 00:00:00', 'Akbar Satria', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', 15144, NULL, NULL, NULL, NULL, 'kasus', '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(14, 14, 'Pengambilan dana amal', 'banten', '2017-01-03 00:00:00', 'Akbar Satria', 'JL. Purnawirawan blok c 4 nomor 10, kunciran, kunciran ,tangerang, banten', 'Tangerang', 15144, NULL, NULL, NULL, NULL, 'kasus', '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori_subyeks`
--

CREATE TABLE `tabel_kategori_subyeks` (
  `id` int(11) NOT NULL,
  `id_kategori_subyek` int(11) NOT NULL,
  `kategori_subyek` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tabel_kategori_subyeks`
--

INSERT INTO `tabel_kategori_subyeks` (`id`, `id_kategori_subyek`, `kategori_subyek`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(2, 0, 'UPS', '2017-06-10 13:55:13', '2017-06-10 13:55:13', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_obyeks`
--

CREATE TABLE `tabel_obyeks` (
  `id` int(11) NOT NULL,
  `id_obyek` int(11) NOT NULL,
  `benda_sitaan` varchar(100) NOT NULL,
  `nilai_kontrak` varchar(100) NOT NULL,
  `kerugian_negara` varchar(100) NOT NULL,
  `pemulihan_aset` varchar(100) NOT NULL,
  `obyek_pidana` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tabel_obyeks`
--

INSERT INTO `tabel_obyeks` (`id`, `id_obyek`, `benda_sitaan`, `nilai_kontrak`, `kerugian_negara`, `pemulihan_aset`, `obyek_pidana`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 0, '', '123123', '', '', 'asdadsasd', '2017-06-29 00:56:50', '2017-06-29 00:56:50', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pasals`
--

CREATE TABLE `tabel_pasals` (
  `id` int(11) NOT NULL,
  `id_pasal` int(11) NOT NULL,
  `ayat` varchar(100) NOT NULL,
  `keterangan` varchar(350) NOT NULL,
  `jumlah_masa_hukuman` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tabel_pasals`
--

INSERT INTO `tabel_pasals` (`id`, `id_pasal`, `ayat`, `keterangan`, `jumlah_masa_hukuman`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 0, '378', 'Pencurian', '2', '2017-06-10 13:50:34', '2017-06-10 13:50:34', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_subyeks`
--

CREATE TABLE `tabel_subyeks` (
  `id` int(11) NOT NULL,
  `id_subyek` int(11) DEFAULT NULL,
  `judul_surat` varchar(150) DEFAULT NULL,
  `nama_terlapor` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `kebangsaan` varchar(100) DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `tempat_tinggal` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `jabatan_resmi` varchar(100) DEFAULT NULL,
  `jabatan_lain` varchar(100) DEFAULT NULL,
  `lembaga` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `kategori_subyek` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tabel_subyeks`
--

INSERT INTO `tabel_subyeks` (`id`, `id_subyek`, `judul_surat`, `nama_terlapor`, `tempat_lahir`, `kebangsaan`, `kewarganegaraan`, `tempat_tinggal`, `agama`, `jabatan_resmi`, `jabatan_lain`, `lembaga`, `pendidikan`, `kategori_subyek`, `keterangan`, `status`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(2, 2, NULL, 'Budi dharmawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mentri keuangan', NULL, 'Pengacara', NULL, '', '2017-06-16 10:56:04', '2017-06-16 10:56:04', '::1', '::1'),
(3, 3, NULL, 'Rahmt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kejakasaan', NULL, 'PNS', NULL, '', '2017-06-18 06:54:12', '2017-06-18 06:54:12', '::1', '::1'),
(4, 4, NULL, 'Surdi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'keuangan', NULL, 'Hakim', NULL, '', '2017-06-18 06:58:38', '2017-06-18 06:58:38', '::1', '::1'),
(6, 6, NULL, 'Dimas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kehutanan', NULL, 'Hakim', NULL, '', '2017-06-18 07:14:32', '2017-06-29 00:56:50', '::1', '::1'),
(7, 7, NULL, 'Budiman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kementrian dalam negri', NULL, 'PNS', NULL, '', '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(8, 8, NULL, 'Bagus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kementrian Olahraga ', NULL, 'PNS', NULL, '', '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(9, 9, NULL, 'Bima', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kejaksaan', NULL, 'Hakim', NULL, '', '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_surats`
--

CREATE TABLE `tabel_surats` (
  `id` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `judul_surat` varchar(100) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tanggal_surat` datetime NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_berhenti` datetime NOT NULL,
  `saran` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tabel_surats`
--

INSERT INTO `tabel_surats` (`id`, `id_surat`, `judul_surat`, `no_surat`, `tanggal_surat`, `tanggal_mulai`, `tanggal_berhenti`, `saran`, `keterangan`, `date_created`, `date_updated`, `created_from_ip`, `updated_from_ip`) VALUES
(1, 0, 'perampokan', 'nomor surat 1234562', '2017-08-09 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-26 05:41:13', '2017-06-26 05:41:13', '::1', '::1'),
(2, 0, 'Perampokan begal di serpong', '3f/90/8ui', '2017-04-09 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-26 06:03:40', '2017-06-26 06:03:40', '::1', '::1'),
(3, 0, 'Pengambilan dana amal', '3g/4g/5h/6j', '2017-01-03 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-26 06:13:51', '2017-06-26 06:13:51', '::1', '::1'),
(4, 0, '', '', '2017-05-19 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-29 00:54:53', '2017-06-29 00:54:53', '::1', '::1'),
(5, 0, '', '', '2017-05-19 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '2017-06-29 00:56:50', '2017-06-29 00:56:50', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1498689790, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'Akbar', '$2y$08$Up/1UzTNZZgZkjM0xywQX.G2u0YCaYf1zUT7HGd6HcI17hmNNa55G', NULL, 'akbar@akbar.com', NULL, NULL, NULL, NULL, 1494078910, 1497079982, 1, 'akbar', 'satria permadi', NULL, '081297018587');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_kasus_jaksas`
--
ALTER TABLE `detail_kasus_jaksas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_kasus_obyeks`
--
ALTER TABLE `detail_kasus_obyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_kasus_subyeks`
--
ALTER TABLE `detail_kasus_subyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_kasus_surats`
--
ALTER TABLE `detail_kasus_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_jaksas`
--
ALTER TABLE `tabel_jaksas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_kasus`
--
ALTER TABLE `tabel_kasus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_kategori_subyeks`
--
ALTER TABLE `tabel_kategori_subyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_obyeks`
--
ALTER TABLE `tabel_obyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pasals`
--
ALTER TABLE `tabel_pasals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_subyeks`
--
ALTER TABLE `tabel_subyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_surats`
--
ALTER TABLE `tabel_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_kasus_jaksas`
--
ALTER TABLE `detail_kasus_jaksas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_kasus_subyeks`
--
ALTER TABLE `detail_kasus_subyeks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `detail_kasus_surats`
--
ALTER TABLE `detail_kasus_surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_jaksas`
--
ALTER TABLE `tabel_jaksas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_kasus`
--
ALTER TABLE `tabel_kasus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tabel_kategori_subyeks`
--
ALTER TABLE `tabel_kategori_subyeks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_obyeks`
--
ALTER TABLE `tabel_obyeks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_pasals`
--
ALTER TABLE `tabel_pasals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_subyeks`
--
ALTER TABLE `tabel_subyeks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tabel_surats`
--
ALTER TABLE `tabel_surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
