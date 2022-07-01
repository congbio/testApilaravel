-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 01, 2022 lúc 06:58 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `restaurant`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `restaurans`
--

CREATE TABLE `restaurans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `restaurans`
--

INSERT INTO `restaurans` (`id`, `name`, `category_id`, `description`, `image`, `amount`, `created_at`, `updated_at`) VALUES
(11, 'Dandre Rohan', 2, 'Dr. Zoie Olson', 'hinh4.jpg', '2.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(12, 'Mrs. Phyllis Trantow DDS', 2, 'Orlando Mertz V', 'hinh2.jpg', '4.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(13, 'Andreanne Erdman', 1, 'Marina Pagac', 'hinh3.jpg', '3.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(14, 'Miss Alba Goldner I', 1, 'Miss Asa Block', 'hinh2.jpg', '7.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(15, 'Nils Runolfsson', 1, 'Lane Hermiston', 'hinh4.jpg', '8.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(16, 'Mr. Alvis Kihn', 2, 'Lyda Hartmann', 'hinh2.jpg', '6.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(17, 'Fred Wunsch', 2, 'Nelle Hickle', 'hinh1.jpg', '1.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(18, 'Prof. Bonita Daniel', 1, 'Fidel Anderson I', 'hinh1.jpg', '0.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(19, 'Nash Huel', 2, 'Mr. Francis Kunze', 'hinh2.jpg', '9.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(20, 'Eloisa Wisoky', 1, 'Sammie Haley V', 'hinh3.jpg', '5.00', '2022-06-30 20:27:59', '2022-06-30 20:27:59'),
(21, 'dfyhg', 2, '134t5y6acdfbgh', 'image/1656650809_moto.jpg', '34567', '2022-06-30 21:46:49', '2022-06-30 21:46:49'),
(22, 'gfhg', 3, '134t5y6acdfbgh', '1656650858_moto.jpg', '34567', '2022-06-30 21:47:38', '2022-06-30 21:47:38'),
(23, 'Ducate dfkdfjkdjfkd', 3, 'xe màu đỏ', '1656651398_moto1.png', '34567', '2022-06-30 21:56:38', '2022-06-30 21:56:38');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `restaurans`
--
ALTER TABLE `restaurans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurans_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `restaurans`
--
ALTER TABLE `restaurans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `restaurans`
--
ALTER TABLE `restaurans`
  ADD CONSTRAINT `restaurans_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
