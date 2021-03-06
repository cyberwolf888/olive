-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jan 2017 pada 05.02
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_olive`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pant', 'asdas asdsa dsa dsadasd', 'images/category/79cff331953a06e42b86a9125a45b0eb.jpeg', '2016-10-29 23:14:32', '2016-10-29 23:14:32'),
(2, 'Shoes', 'Sendal paling sakti', 'images/category/a60ba1a7a56c9e00252baebe89d62c12.jpeg', '2016-10-29 23:17:58', '2016-10-29 23:30:24'),
(3, 'Bedebah', 'Category bedebah', 'images/category/712dcd53dbebe8b7a2ce5f35ff17daa5.jpeg', '2016-10-31 18:14:04', '2016-10-31 18:14:04'),
(4, 'T-Shirt', 'Awesome T-Shirt', 'images/category/2ff227989aa79adad4352223e419a145.jpeg', '2016-11-03 19:28:56', '2016-11-03 19:28:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaction`
--

CREATE TABLE `detail_transaction` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaction`
--

INSERT INTO `detail_transaction` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 120000, 240000, '2016-12-08 00:29:53', '2016-12-08 00:29:53'),
(2, 2, 3, 4, 230000, 920000, '2016-12-08 20:11:28', '2016-12-08 20:11:28'),
(3, 2, 2, 3, 130000, 390000, '2016-12-08 20:11:28', '2016-12-08 20:11:28'),
(4, 3, 3, 1, 230000, 230000, '2017-01-03 19:33:20', '2017-01-03 19:33:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(120) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` varchar(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `user_id`, `fullname`, `phone`, `address`, `state`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 10, 'I Made Hendra Wijaya', '082247464196', 'Jalan Wisnu Marga Belayu No 19', 'Bali', '82181', '2016-10-26 00:44:30', '2016-12-18 03:29:25'),
(2, 11, 'Bedebah', '082247464193', 'Jalan raya niti mandala renon', 'Bali', '80226', '2016-10-26 01:13:36', '2016-10-26 01:13:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_10_24_092155_user_ntrust_setup_tables', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id`, `transaction_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '210ef2b920f7a39b7c52e9fd89e22c92.jpg', 0, '2016-12-08 23:21:34', '2016-12-08 23:21:34'),
(2, 3, '0f6921fb0653bae791a1a5ebadb1b458.jpg', 0, '2017-01-03 19:49:43', '2017-01-03 19:49:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `discount` float NOT NULL,
  `isSale` enum('1','0') NOT NULL,
  `stock` int(11) NOT NULL,
  `available` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `description`, `price`, `discount`, `isSale`, `stock`, `available`, `created_at`, `updated_at`) VALUES
(1, 2, 'Celana Awesome', 'Celana paliing awesome', 120000, 0, '1', 12, '1', '2016-10-31 18:48:47', '2016-11-03 19:23:49'),
(2, 1, 'Celena Bedebah', 'Celana paling bedebah', 130000, 10, '1', 12, '1', '2016-10-31 18:51:47', '2016-10-31 18:51:47'),
(3, 4, 'Jean Shirt Awesome', 'The most awesome t-shirt in the world', 230000, 0, '1', 12, '1', '2016-11-03 19:29:52', '2016-11-03 19:35:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `label`, `value`, `created_at`, `updated_at`) VALUES
(4, 2, 'Size', '31', '2016-10-31 18:51:47', '2016-10-31 18:51:47'),
(5, 2, 'Color', 'Blue', '2016-10-31 18:51:47', '2016-10-31 18:51:47'),
(6, 2, 'Material', 'Denim', '2016-10-31 18:51:47', '2016-10-31 18:51:47'),
(13, 1, 'Size', '32', '2016-11-03 19:23:49', '2016-11-03 19:23:49'),
(14, 1, 'Color', 'Black', '2016-11-03 19:23:49', '2016-11-03 19:23:49'),
(15, 1, 'Material', 'Denim', '2016-11-03 19:23:49', '2016-11-03 19:23:49'),
(19, 3, 'Size', '22', '2016-11-03 19:35:08', '2016-11-03 19:35:08'),
(20, 3, 'Color', 'Blue', '2016-11-03 19:35:08', '2016-11-03 19:35:08'),
(21, 3, 'Material', 'Canvas', '2016-11-03 19:35:08', '2016-11-03 19:35:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(6, 2, 'images/product/2/7bcd81db0a1e69cd77b1d66e5eb9c0b1.jpg', '2016-11-03 19:23:25', '2016-11-03 19:23:25'),
(7, 1, 'images/product/1/93660c8d44ec746cadca946cc3569be7.jpg', '2016-11-03 19:24:09', '2016-11-03 19:24:09'),
(8, 1, 'images/product/1/48df51562a350349d55115e507cca6ec.jpg', '2016-11-03 19:24:18', '2016-11-03 19:24:18'),
(9, 3, 'images/product/3/678c9e38b0d1c02a9b7821543ea6db40.jpg', '2016-11-03 19:34:09', '2016-11-03 19:34:09'),
(10, 3, 'images/product/3/3a24043c20791a2e2e5a896d9526005b.jpg', '2016-11-03 19:34:23', '2016-11-03 19:34:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'User Administrator', 'User is allowed to manage and edit other users', '2016-10-24 01:29:43', '2016-10-24 01:29:43'),
(2, 'member', 'Member pembeli', 'User is the member of a given project', '2016-10-24 01:29:43', '2016-10-24 01:29:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(10, 2),
(11, 2),
(12, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subscribe`
--

INSERT INTO `subscribe` (`id`, `phone`, `created_at`, `updated_at`) VALUES
(1, '0857373637367', '2016-11-09 18:24:37', '2016-11-09 18:24:37'),
(3, '0857373535568', '2016-12-19 00:17:10', '2016-12-19 00:17:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(12) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '0',
  `zip_code` char(50) NOT NULL DEFAULT '0',
  `state` varchar(255) NOT NULL DEFAULT '0',
  `total` varchar(255) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `resi` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id`, `member_id`, `fullname`, `phone`, `address`, `zip_code`, `state`, `total`, `status`, `resi`, `created_at`, `updated_at`) VALUES
(1, 1, 'I Made Hendra Wijaya', '82247464196', 'Jalan Wisnu Marga Belayu No 19', '82181', 'Bali', '240000', 4, 'ACGK01160088158', '2016-12-08 00:29:53', '2016-12-20 20:20:34'),
(2, 1, 'I Made Hendra Wijaya', '82247464196', 'Jalan Wisnu Marga Belayu No 19', '82181', 'Bali', '1310000', 0, NULL, '2016-12-08 20:11:28', '2016-12-20 20:03:30'),
(3, 1, 'I Made Hendra Wijaya', '082247464196', 'Jalan Wisnu Marga Belayu No 19', '82181', 'Bali', '230000', 2, NULL, '2017-01-03 19:33:20', '2017-01-03 19:49:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@mail.com', '$2y$10$bzPynNO6plLZHTvxz.mSdOjhLoygmcZg63vVFvhFeO070lf/.dmGe', 'fxUJ51tqIJKBEJHnaFQ1Ovy9mN0oT16dOpLMIPlr428ktxRWiFtc0UvNSbL5', 1, '2016-10-23 23:50:07', '2017-01-03 20:00:07'),
(10, 'I Made Hendra Wijaya', 'member@gmail.com', '$2y$10$Qb0Owoq5mmRJDTOywu3OXuPkfQIy.GLM602vW0ix8fvMP5GI8Rlo.', 'QBaI9VWng8B3bANO4D9352pT0KHVMJyaChc8HSlGjSPC5apFAhTpL0RSHg8g', 1, '2016-10-26 00:44:30', '2017-01-03 20:01:37'),
(11, 'Bedebah', 'bedebah@mail.com', '$2y$10$b0XuVM1RhV3nyxGKbzR9euJ2Y4JWZpUmFTu1s0LdfdNwd.J5phwBy', '7Avqd6LFCp8EO1hozDnMWs2LQA4f9t02GN16edsJmlVAnzdCTP3qQl4sNvgP', 0, '2016-10-26 01:13:36', '2016-12-14 22:08:24'),
(12, 'Admin Bedebah', 'admin@bedebah.com', '$2y$10$tFoNz28zj5c0v8igypiavOjIrSQ9TYcbzRCdS6AwtebKKEeuyFrBy', NULL, 0, '2016-12-14 21:58:28', '2016-12-14 22:12:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `detail_transaction`
--
ALTER TABLE `detail_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
