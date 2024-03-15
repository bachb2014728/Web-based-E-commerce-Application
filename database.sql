-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 10:43 AM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
                              `id` bigint(20) UNSIGNED NOT NULL,
                              `user_id` bigint(20) UNSIGNED NOT NULL,
                              `key_active` varchar(255) NOT NULL,
                              `value_active` varchar(255) NOT NULL,
                              `name_active` varchar(255) NOT NULL,
                              `created_at` timestamp NULL DEFAULT NULL,
                              `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `user_id`, `key_active`, `value_active`, `name_active`, `created_at`, `updated_at`) VALUES
                                                                                                                        (1, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-18 14:33:42', '2023-11-18 14:33:42'),
                                                                                                                        (2, 1, '1', 'add_addr', 'Thêm địa chỉ người nhận', '2023-11-18 15:44:05', '2023-11-18 15:44:05'),
                                                                                                                        (3, 1, '1', 'update_addr', 'Cập nhật địa chỉ người nhận', '2023-11-18 15:44:12', '2023-11-18 15:44:12'),
                                                                                                                        (4, 1, '1', 'update_profile', 'Cập nhật thông tin cá nhân', '2023-11-18 15:44:25', '2023-11-18 15:44:25'),
                                                                                                                        (5, 1, '2', 'remove_order', 'Xóa đơn hàng đã đặt', '2023-11-18 15:53:57', '2023-11-18 15:53:57'),
                                                                                                                        (6, 1, '1', 'change_pass', 'Thay đổi mật khẩu', '2023-11-18 16:53:09', '2023-11-18 16:53:09'),
                                                                                                                        (7, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-18 17:28:00', '2023-11-18 17:28:00'),
                                                                                                                        (8, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-18 17:33:55', '2023-11-18 17:33:55'),
                                                                                                                        (9, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-18 17:44:44', '2023-11-18 17:44:44'),
                                                                                                                        (10, 1, '0', 'log_in', 'Đăng nhập', '2023-11-18 23:07:45', '2023-11-18 23:07:45'),
                                                                                                                        (11, 1, '2', 'remove_order', 'Xóa đơn hàng đã đặt', '2023-11-18 23:21:41', '2023-11-18 23:21:41'),
                                                                                                                        (12, 1, '2', 'remove_order', 'Xóa đơn hàng đã đặt', '2023-11-18 23:21:52', '2023-11-18 23:21:52'),
                                                                                                                        (13, 1, '0', 'log_out', 'Đăng xuất', '2023-11-19 01:04:26', '2023-11-19 01:04:26'),
                                                                                                                        (14, 1, '0', 'log_in', 'Đăng nhập', '2023-11-19 01:05:44', '2023-11-19 01:05:44'),
                                                                                                                        (15, 1, '1', 'add_addr', 'Thêm địa chỉ người nhận', '2023-11-19 01:29:22', '2023-11-19 01:29:22'),
                                                                                                                        (16, 1, '0', 'log_out', 'Đăng xuất', '2023-11-19 04:09:57', '2023-11-19 04:09:57'),
                                                                                                                        (17, 1, '0', 'log_in', 'Đăng nhập', '2023-11-19 04:12:36', '2023-11-19 04:12:36'),
                                                                                                                        (19, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-19 04:17:38', '2023-11-19 04:17:38'),
                                                                                                                        (20, 1, '0', 'log_out', 'Đăng xuất', '2023-11-19 04:25:20', '2023-11-19 04:25:20'),
                                                                                                                        (21, 1, '0', 'log_in', 'Đăng nhập', '2023-11-19 04:35:09', '2023-11-19 04:35:09'),
                                                                                                                        (22, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-19 04:46:54', '2023-11-19 04:46:54'),
                                                                                                                        (23, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-19 04:52:31', '2023-11-19 04:52:31'),
                                                                                                                        (24, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-19 04:54:37', '2023-11-19 04:54:37'),
                                                                                                                        (25, 1, '0', 'log_in', 'Đăng nhập', '2023-11-19 13:29:34', '2023-11-22 12:27:03'),
                                                                                                                        (26, 2, '0', 'log_in', 'Đăng nhập', '2023-11-22 15:40:17', '2023-11-22 15:40:17'),
                                                                                                                        (27, 2, '2', 'buy_order', 'Đặt hàng', '2023-11-22 15:41:25', '2023-11-22 15:41:25'),
                                                                                                                        (28, 2, '1', 'add_addr', 'Thêm địa chỉ người nhận', '2023-11-22 15:42:41', '2023-11-22 15:42:41'),
                                                                                                                        (29, 2, '1', 'add_addr', 'Thêm địa chỉ người nhận', '2023-11-22 15:43:52', '2023-11-22 15:43:52'),
                                                                                                                        (30, 2, '1', 'update_profile', 'Cập nhật thông tin cá nhân', '2023-11-22 15:44:10', '2023-11-22 15:44:10'),
                                                                                                                        (31, 2, '2', 'update_order', 'Cập nhật đơn hàng', '2023-11-22 15:44:30', '2023-11-22 15:44:30'),
                                                                                                                        (32, 2, '2', 'buy_order', 'Đặt hàng', '2023-11-22 15:45:05', '2023-11-22 15:45:05'),
                                                                                                                        (33, 2, '2', 'update_order', 'Cập nhật đơn hàng', '2023-11-22 15:45:23', '2023-11-22 15:45:23'),
                                                                                                                        (34, 1, '0', 'log_out', 'Đăng xuất', '2023-11-22 15:49:43', '2023-11-22 15:49:43'),
                                                                                                                        (35, 2, '0', 'log_in', 'Đăng nhập', '2023-11-22 15:49:55', '2023-11-22 15:49:55'),
                                                                                                                        (36, 1, '0', 'log_in', 'Đăng nhập', '2023-11-23 12:04:06', '2023-11-23 12:04:06'),
                                                                                                                        (37, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-23 12:34:06', '2023-11-23 12:34:06'),
                                                                                                                        (38, 1, '0', 'log_out', 'Đăng xuất', '2023-11-23 12:36:20', '2023-11-23 12:36:20'),
                                                                                                                        (39, 1, '0', 'log_in', 'Đăng nhập', '2023-11-23 12:45:14', '2023-11-23 12:45:14'),
                                                                                                                        (40, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-23 12:46:56', '2023-11-23 12:46:56'),
                                                                                                                        (41, 1, '2', 'update_order', 'Cập nhật đơn hàng', '2023-11-23 12:47:15', '2023-11-23 12:47:15'),
                                                                                                                        (42, 1, '2', 'update_order', 'Cập nhật đơn hàng', '2023-11-23 12:47:27', '2023-11-23 12:47:27'),
                                                                                                                        (43, 1, '2', 'update_order', 'Cập nhật đơn hàng', '2023-11-23 12:47:32', '2023-11-23 12:47:32'),
                                                                                                                        (44, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-23 12:47:43', '2023-11-23 12:47:43'),
                                                                                                                        (45, 1, '1', 'update_profile', 'Cập nhật thông tin cá nhân', '2023-11-23 12:52:39', '2023-11-23 12:52:39'),
                                                                                                                        (46, 1, '1', 'add_addr', 'Thêm địa chỉ người nhận', '2023-11-23 12:52:45', '2023-11-23 12:52:45'),
                                                                                                                        (47, 1, '1', 'update_addr', 'Cập nhật địa chỉ người nhận', '2023-11-23 12:52:52', '2023-11-23 12:52:52'),
                                                                                                                        (48, 1, '2', 'buy_order', 'Đặt hàng', '2023-11-23 13:09:08', '2023-11-23 13:09:08'),
                                                                                                                        (49, 1, '0', 'log_in', 'Đăng nhập', '2023-12-07 19:47:08', '2023-12-07 19:47:08'),
                                                                                                                        (50, 1, '2', 'buy_order', 'Đặt hàng', '2023-12-08 14:05:36', '2023-12-08 14:05:36'),
                                                                                                                        (51, 1, '0', 'log_out', 'Đăng xuất', '2023-12-08 16:00:25', '2023-12-08 16:00:25'),
                                                                                                                        (52, 1, '0', 'log_in', 'Đăng nhập', '2024-02-29 12:36:21', '2024-02-29 12:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
                              `id` bigint(20) UNSIGNED NOT NULL,
                              `name` varchar(255) NOT NULL,
                              `slug` varchar(255) NOT NULL,
                              `desciption` text DEFAULT NULL,
                              `parent_cate` bigint(20) DEFAULT 0,
                              `status` tinyint(4) NOT NULL DEFAULT 1,
                              `prior` tinyint(4) NOT NULL DEFAULT 0,
                              `created_at` timestamp NULL DEFAULT NULL,
                              `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `desciption`, `parent_cate`, `status`, `prior`, `created_at`, `updated_at`) VALUES
                                                                                                                                (1, 'PC', 'pc', NULL, NULL, 1, 0, NULL, '2023-11-18 11:53:07'),
                                                                                                                                (2, 'Linh kiện máy tính', 'linh-kien-may-tinh', NULL, 0, 1, 0, NULL, NULL),
                                                                                                                                (3, 'Màn hình', 'man-hinh', NULL, 0, 1, 0, NULL, NULL),
                                                                                                                                (4, 'Bộ nhớ lưu trữ', 'bo-nho-luu -tru', NULL, 0, 1, 0, NULL, NULL),
                                                                                                                                (5, 'Bàn phím', 'ban-phim', NULL, 0, 1, 0, NULL, NULL),
                                                                                                                                (6, 'AMD dòng A', 'amd-dong-a', NULL, 24, 1, 0, NULL, NULL),
                                                                                                                                (7, 'PC Gaming', 'pc-gaming', NULL, 1, 1, 0, NULL, '2023-11-18 05:05:01'),
                                                                                                                                (8, 'PC Làm việc', 'pc-lam-viec', NULL, 1, 1, 0, NULL, NULL),
                                                                                                                                (9, 'CPU-Bộ vi xử lý Intel', 'cpu-bo-vi-xu-ly-intel', NULL, 2, 1, 0, NULL, NULL),
                                                                                                                                (10, 'Intel xeon', 'intel-xeon', NULL, 9, 1, 0, NULL, NULL),
                                                                                                                                (11, 'Intel Core i3', 'intel-core-i3', NULL, 9, 1, 0, NULL, NULL),
                                                                                                                                (12, 'Intel Core i5', 'intel-core-i5 ', NULL, 9, 1, 0, NULL, NULL),
                                                                                                                                (13, 'Intel Core i7', 'intel-core-i7 ', NULL, 9, 1, 0, NULL, NULL),
                                                                                                                                (14, 'Intel Core i9', 'intel-core-i9 ', NULL, 9, 1, 0, NULL, NULL),
                                                                                                                                (15, 'CPU-Bộ vi xử lý AMD', 'cpu-bo-vi-xu-ly-amd', NULL, 2, 1, 0, NULL, NULL),
                                                                                                                                (16, 'AMD Ryzen 3', 'amd-ryzen-3 ', NULL, 15, 1, 0, NULL, NULL),
                                                                                                                                (17, 'AMD Ryzen 5', 'amd-ryzen-5 ', NULL, 15, 1, 0, NULL, NULL),
                                                                                                                                (18, 'AMD Ryzen 7', 'amd-ryzen-7 ', NULL, 15, 1, 0, NULL, NULL),
                                                                                                                                (19, 'AMD Ryzen 9', 'amd-ryzen-9 ', NULL, 15, 1, 0, NULL, NULL),
                                                                                                                                (20, 'Mainboard-Bo mạch chủ Intel', 'mainboard-bo-mach-chu-intel', NULL, 2, 1, 0, NULL, NULL),
                                                                                                                                (21, 'Intel dòng Z', 'intel-dong-z', NULL, 20, 1, 0, NULL, NULL),
                                                                                                                                (22, 'Intel dòng B', 'intel-dong-b', NULL, 20, 1, 0, NULL, NULL),
                                                                                                                                (23, 'Intel dòng H', 'intel-dong-h', NULL, 20, 1, 0, NULL, NULL),
                                                                                                                                (24, 'Mainboard-Bo mạch chủ AMD', 'mainboard-bo-mach-chu-amd', NULL, 2, 1, 0, NULL, NULL),
                                                                                                                                (25, 'AMD dòng X', 'amd-dong-x', NULL, 24, 1, 0, NULL, NULL),
                                                                                                                                (26, 'AMD dòng B', 'amd-dong-b', NULL, 24, 1, 0, NULL, NULL),
                                                                                                                                (27, 'PSU-Nguồn máy tính', 'psu-nguon-may-tinh', NULL, 2, 1, 0, NULL, NULL),
                                                                                                                                (28, 'Nguồn trên 1000W', 'nguon-tren-1000w ', NULL, 27, 1, 0, NULL, NULL),
                                                                                                                                (29, 'Nguồn từ 700W-850W', 'nguon-tu-700w-850w', NULL, 27, 1, 0, NULL, NULL),
                                                                                                                                (30, 'Nguồn từ 550W-650W', 'nguon-tu-550w-650w', NULL, 27, 1, 0, NULL, NULL),
                                                                                                                                (31, 'Nguồn từ 300W-500W', 'nguon-tu-300w-500w', NULL, 27, 1, 0, NULL, NULL),
                                                                                                                                (32, 'Nguồn Corsair', 'nguon-corsair', NULL, 27, 1, 0, NULL, NULL),
                                                                                                                                (33, 'Nguồn Z-Power', 'nguon-z-power', NULL, 27, 1, 0, NULL, NULL),
                                                                                                                                (34, 'Nguồn Cooler Master', 'nguon-cooler-master', NULL, 27, 1, 0, NULL, NULL),
                                                                                                                                (35, 'Nguồn NZXT', 'nguon-nzxt', NULL, 27, 1, 0, NULL, NULL),
                                                                                                                                (37, 'RAM DDR4 / DDR5', 'ram', NULL, 4, 1, 0, NULL, NULL),
                                                                                                                                (38, 'RAM LED RGB', 'ram-led-rgb', NULL, 37, 1, 0, NULL, NULL),
                                                                                                                                (39, 'RAM 8GB', 'ram-8g', NULL, 37, 1, 0, NULL, NULL),
                                                                                                                                (40, 'RAM 16GB', 'ram-16g', NULL, 37, 1, 0, NULL, NULL),
                                                                                                                                (41, 'RAM Corsair', 'ram-corsair', NULL, 37, 1, 0, NULL, NULL),
                                                                                                                                (42, 'RAM Kingston', 'ram-kingston', NULL, 37, 1, 0, NULL, NULL),
                                                                                                                                (43, 'RAM GSkill', 'ram-gskill', NULL, 37, 1, 0, NULL, NULL),
                                                                                                                                (44, 'RAM PNY', 'ram-pny', NULL, 37, 1, 0, NULL, NULL),
                                                                                                                                (45, 'SSD', 'ssd', NULL, 4, 1, 0, NULL, NULL),
                                                                                                                                (46, 'SSD NVMe Gen 4', 'ssd-nvme-gen -3', NULL, 45, 1, 0, NULL, NULL),
                                                                                                                                (47, 'SSD Sata', 'ssd-sata', NULL, 45, 1, 0, NULL, NULL),
                                                                                                                                (48, 'SSD Samsung', 'ssd-samsung', NULL, 45, 1, 0, NULL, NULL),
                                                                                                                                (49, 'SSD Kingston', 'ssd-kingston', NULL, 45, 1, 0, NULL, NULL),
                                                                                                                                (50, 'SSD Westem Digital', 'ssd-westem-digital', NULL, 45, 1, 0, NULL, NULL),
                                                                                                                                (51, 'HDD', 'hdd', NULL, 4, 1, 0, NULL, NULL),
                                                                                                                                (52, 'HDD 1TB', 'hdd-1tb', NULL, 52, 1, 0, NULL, NULL),
                                                                                                                                (53, 'HDD 2TB', 'hdd-2tb', NULL, 52, 1, 0, NULL, NULL),
                                                                                                                                (55, 'Hãng sản xuất', 'hang-san-xuat', NULL, 3, 1, 0, NULL, NULL),
                                                                                                                                (56, 'LG', 'lg', NULL, 55, 1, 0, NULL, NULL),
                                                                                                                                (57, 'Asus', 'asus', NULL, 55, 1, 0, NULL, NULL),
                                                                                                                                (58, 'ViewSonic', 'viewsonic', NULL, 55, 1, 0, NULL, NULL),
                                                                                                                                (59, 'Dell', 'dell', NULL, 55, 1, 0, NULL, NULL),
                                                                                                                                (60, 'AOC', 'aoc', NULL, 55, 1, 0, NULL, NULL),
                                                                                                                                (61, 'Acer', 'acer', NULL, 55, 1, 0, NULL, NULL),
                                                                                                                                (62, 'E-Dra', 'e-dra', NULL, 55, 1, 0, NULL, NULL),
                                                                                                                                (63, 'MSI', 'msi', NULL, 55, 1, 0, NULL, NULL),
                                                                                                                                (64, 'Giá tiền', 'gia-tien', NULL, 3, 1, 0, NULL, NULL),
                                                                                                                                (65, 'Giá dưới 1 triệu', 'gia-duoi-1-trieu', NULL, 64, 1, 0, NULL, NULL),
                                                                                                                                (66, 'Giá từ 1 triệu đến 2 triệu', 'gia-tu-1-trieu-den-2-trieu', NULL, 64, 1, 0, NULL, NULL),
                                                                                                                                (67, 'Giá từ 2 triệu đến 3 triệu', 'gia-tu-2-trieu-den-3-trieu', NULL, 64, 1, 0, NULL, NULL),
                                                                                                                                (68, 'Giá từ 3 triệu đến 4 triệu', 'gia-tu-3-trieu-den-4-trieu', NULL, 64, 1, 0, NULL, NULL),
                                                                                                                                (69, 'Giá từ 4 triệu đến 5 triệu', 'gia-tu-4-trieu-den-5-trieu', NULL, 64, 1, 0, NULL, NULL),
                                                                                                                                (70, 'Giá trên 5 triệu', 'gia-tren-5-trieu', NULL, 64, 1, 0, NULL, NULL),
                                                                                                                                (71, 'Độ phân giải', 'do-phan-giai', NULL, 3, 1, 0, NULL, NULL),
                                                                                                                                (72, 'HD 720p', 'hd-720p', NULL, 71, 1, 0, NULL, NULL),
                                                                                                                                (73, 'Full HD 1080p', 'full-hd-1080p', NULL, 71, 1, 0, NULL, NULL),
                                                                                                                                (74, '2K 1440p', '2k-1440p', NULL, 71, 1, 0, NULL, NULL),
                                                                                                                                (75, 'Tần số quét', 'tan-so-quet', NULL, 3, 1, 0, NULL, NULL),
                                                                                                                                (76, '60Hz', '60hz', NULL, 75, 1, 0, NULL, NULL),
                                                                                                                                (77, '75Hz', '75hz', NULL, 75, 1, 0, NULL, NULL),
                                                                                                                                (78, '100Hz', '100hz', NULL, 75, 1, 0, NULL, NULL),
                                                                                                                                (79, '144Hz', '144hz', NULL, 75, 1, 0, NULL, NULL),
                                                                                                                                (80, 'Kích thước', 'kich-thuoc', NULL, 3, 1, 0, NULL, NULL),
                                                                                                                                (81, 'Màn hình 22 inch', 'man-hinh-22-inch', NULL, 80, 1, 0, NULL, NULL),
                                                                                                                                (82, 'Màn hình 24 inch', 'man-hinh-24-inch', NULL, 80, 1, 0, NULL, NULL),
                                                                                                                                (83, 'Màn hình 27 inch', 'man-hinh-27-inch', NULL, 80, 1, 0, NULL, NULL),
                                                                                                                                (84, 'Màn hình 32 inch', 'man-hinh-32-inch', NULL, 80, 1, 0, NULL, NULL),
                                                                                                                                (85, 'Màn hình cong', 'man-hinh-cong', NULL, 3, 1, 0, NULL, NULL),
                                                                                                                                (86, 'Phụ kiện màn hình', 'phu-kien-man-hinh', NULL, 3, 1, 0, NULL, NULL),
                                                                                                                                (87, 'Giá treo màn hình', 'gia-treo-man-hinh', NULL, 86, 1, 0, NULL, NULL),
                                                                                                                                (88, 'Phụ kiện dây HDMI, VGA, DP ', 'phu-kien-day-hdmi-vga-dp', NULL, 86, 1, 0, NULL, NULL),
                                                                                                                                (89, 'Phụ kiện dây mạng LAN', 'phu-kien-day-mang-lan', NULL, 86, 1, 0, NULL, NULL),
                                                                                                                                (90, 'VGA-Card màn hình', 'vga-card-man-hinh', NULL, 2, 1, 0, NULL, NULL),
                                                                                                                                (91, 'Case-Vỏ máy tính', 'case-vo-may -tinh', NULL, 2, 1, 0, NULL, NULL),
                                                                                                                                (93, 'Laptop', 'laptop', NULL, NULL, 1, 1, '2023-11-19 00:22:08', '2023-11-19 00:22:08'),
                                                                                                                                (94, 'Intel dòng X', 'intel-dong-x', NULL, 20, 1, 1, '2023-11-19 00:26:37', '2023-11-19 00:26:37'),
                                                                                                                                (95, 'RTX 4060', 'rtx-4060', NULL, 90, 1, 1, '2023-11-19 02:25:59', '2023-11-19 02:25:59'),
                                                                                                                                (96, 'RTX 3060', 'rtx-3060', NULL, 90, 1, 1, '2023-11-19 02:26:14', '2023-11-19 02:26:14'),
                                                                                                                                (97, 'Bàn phím e-Dra', 'ban-phim-e-dra', NULL, 5, 1, 1, '2023-11-22 16:27:06', '2023-11-22 16:27:59'),
                                                                                                                                (98, 'Blue Switch', 'blue-switch', NULL, 5, 1, 1, '2023-11-22 16:27:41', '2023-11-22 16:27:41'),
                                                                                                                                (99, 'Red Switch', 'red-switch', NULL, 5, 1, 1, '2023-11-22 16:28:22', '2023-11-22 16:28:22'),
                                                                                                                                (100, 'Cherry Switch', 'cherry-switch', NULL, 5, 1, 1, '2023-11-22 16:28:38', '2023-11-22 16:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `cate_products`
--

CREATE TABLE `cate_products` (
                                 `id` bigint(20) UNSIGNED NOT NULL,
                                 `product_id` bigint(20) UNSIGNED NOT NULL,
                                 `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cate_products`
--

INSERT INTO `cate_products` (`id`, `product_id`, `category_id`) VALUES
                                                                    (1, 1, 2),
                                                                    (2, 1, 9),
                                                                    (3, 1, 12),
                                                                    (5, 3, 2),
                                                                    (11, 23, 2),
                                                                    (12, 23, 20),
                                                                    (13, 23, 94),
                                                                    (14, 3, 20),
                                                                    (15, 3, 94),
                                                                    (16, 24, 2),
                                                                    (17, 24, 20),
                                                                    (18, 24, 21),
                                                                    (19, 25, 90),
                                                                    (20, 25, 95),
                                                                    (21, 26, 2),
                                                                    (22, 26, 90),
                                                                    (23, 26, 96),
                                                                    (24, 25, 2),
                                                                    (25, 27, 2),
                                                                    (26, 27, 90),
                                                                    (27, 27, 95),
                                                                    (28, 28, 3),
                                                                    (29, 28, 55),
                                                                    (30, 28, 57),
                                                                    (31, 28, 64),
                                                                    (32, 28, 68),
                                                                    (33, 28, 71),
                                                                    (34, 28, 73),
                                                                    (35, 28, 79),
                                                                    (36, 28, 82),
                                                                    (37, 28, 85),
                                                                    (38, 28, 86),
                                                                    (39, 28, 87),
                                                                    (40, 28, 88),
                                                                    (41, 29, 3),
                                                                    (42, 29, 55),
                                                                    (43, 29, 61),
                                                                    (44, 29, 64),
                                                                    (45, 29, 69),
                                                                    (46, 29, 71),
                                                                    (47, 29, 73),
                                                                    (48, 29, 79),
                                                                    (49, 29, 83),
                                                                    (50, 30, 3),
                                                                    (51, 30, 55),
                                                                    (52, 30, 63),
                                                                    (53, 30, 64),
                                                                    (54, 30, 66),
                                                                    (55, 30, 71),
                                                                    (56, 30, 73),
                                                                    (57, 30, 75),
                                                                    (58, 30, 78),
                                                                    (59, 30, 80),
                                                                    (60, 30, 81),
                                                                    (61, 31, 4),
                                                                    (62, 31, 37),
                                                                    (63, 31, 38),
                                                                    (64, 31, 39),
                                                                    (65, 31, 44),
                                                                    (66, 32, 4),
                                                                    (67, 32, 37),
                                                                    (68, 32, 38),
                                                                    (69, 32, 40),
                                                                    (70, 32, 41),
                                                                    (71, 33, 4),
                                                                    (72, 33, 45),
                                                                    (73, 33, 47),
                                                                    (74, 34, 1),
                                                                    (75, 34, 7),
                                                                    (76, 35, 5),
                                                                    (77, 36, 5),
                                                                    (78, 37, 2),
                                                                    (79, 37, 91),
                                                                    (80, 36, 97),
                                                                    (81, 36, 98),
                                                                    (82, 35, 100);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
                            `id` bigint(20) UNSIGNED NOT NULL,
                            `user_id` bigint(20) UNSIGNED NOT NULL,
                            `product_id` bigint(20) UNSIGNED NOT NULL,
                            `comment` text NOT NULL,
                            `parent_comment` bigint(20) DEFAULT 0,
                            `prior` tinyint(1) NOT NULL DEFAULT 0,
                            `status` tinyint(1) NOT NULL DEFAULT 1,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `comment`, `parent_comment`, `prior`, `status`, `created_at`, `updated_at`) VALUES
                                                                                                                                       (1, 1, 3, 'Đáng tiền nhé mọi người. Dùng tốt. Máy đẹp. Nhẹ. Hợp với văn phòng. Tốc độ mượt lắm.', 0, 0, 1, '2023-11-18 23:42:20', '2023-11-18 23:42:20'),
                                                                                                                                       (2, 1, 1, 'Sản phẩm sử dụng tốt, nhân viên hướng dẫn tận tình', 0, 0, 1, '2023-11-18 23:42:53', '2023-11-18 23:42:53'),
                                                                                                                                       (3, 1, 3, 'Sản phẩm sử dụng tốt, nhân viên hướng dẫn tận tình', 0, 0, 1, '2023-11-19 05:18:54', '2023-11-19 05:18:54'),
                                                                                                                                       (4, 2, 32, 'Sản phẩm dùng tốt, giao đúng hạn', 0, 0, 1, '2023-11-22 15:50:52', '2023-11-22 15:50:52'),
                                                                                                                                       (5, 2, 33, 'Sản phẩm sử dụng tốt, nhân viên hướng dẫn tận tình', 0, 0, 1, '2023-11-22 15:51:04', '2023-11-22 15:51:04'),
                                                                                                                                       (6, 2, 23, 'sản phẩm cực kì ưng ý với tôi', 0, 0, 1, '2023-11-22 15:51:11', '2023-11-22 15:51:11'),
                                                                                                                                       (7, 2, 25, 'Đáng tiền nhé mọi người. Dùng tốt. Máy đẹp. Nhẹ. Hợp với văn phòng. Tốc độ mượt lắm.', 0, 0, 1, '2023-11-22 15:51:20', '2023-11-22 15:51:20'),
                                                                                                                                       (8, 2, 28, 'Dùng tạm', 0, 0, 1, '2023-11-22 15:51:37', '2023-11-22 15:51:37'),
                                                                                                                                       (9, 1, 25, 'gggg', 0, 0, 1, '2023-11-23 12:53:41', '2023-11-23 12:53:41');

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
-- Table structure for table `image_products`
--

CREATE TABLE `image_products` (
                                  `id` bigint(20) UNSIGNED NOT NULL,
                                  `image` varchar(255) DEFAULT NULL,
                                  `product_id` bigint(20) UNSIGNED NOT NULL,
                                  `created_at` timestamp NULL DEFAULT NULL,
                                  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_products`
--

INSERT INTO `image_products` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
                                                                                           (1, 'x299a.jpg', 3, '2023-11-18 08:20:04', '2023-11-18 08:20:04'),
                                                                                           (2, 'x299b.jpg', 3, '2023-11-18 08:20:04', '2023-11-18 08:20:04'),
                                                                                           (3, 'x299c.jpg', 3, '2023-11-18 08:20:04', '2023-11-18 08:20:04'),
                                                                                           (4, 'x299d.jpg', 3, '2023-11-18 08:20:04', '2023-11-18 08:20:04'),
                                                                                           (5, 'x299e.jpg', 3, '2023-11-18 08:20:04', '2023-11-18 08:20:04'),
                                                                                           (6, 'x670a.jpg', 23, '2023-11-19 02:00:13', '2023-11-19 02:00:13'),
                                                                                           (7, 'x670b.jpg', 23, '2023-11-19 02:00:13', '2023-11-19 02:00:13'),
                                                                                           (8, 'x670c.jpg', 23, '2023-11-19 02:00:13', '2023-11-19 02:00:13'),
                                                                                           (9, 'x670d.jpg', 23, '2023-11-19 02:00:13', '2023-11-19 02:00:13'),
                                                                                           (10, 'z690hero1.jpg', 24, '2023-11-19 02:09:24', '2023-11-19 02:09:24'),
                                                                                           (11, 'z690hero2.jpg', 24, '2023-11-19 02:09:24', '2023-11-19 02:09:24'),
                                                                                           (12, 'z690hero3.jpg', 24, '2023-11-19 02:09:24', '2023-11-19 02:09:24'),
                                                                                           (13, 'z690hero4.jpg', 24, '2023-11-19 02:09:24', '2023-11-19 02:09:24'),
                                                                                           (14, 'rtx4060a.webp', 25, '2023-11-19 02:20:59', '2023-11-19 02:20:59'),
                                                                                           (15, 'rtx4060b.webp', 25, '2023-11-19 02:20:59', '2023-11-19 02:20:59'),
                                                                                           (16, 'rtx4060c.webp', 25, '2023-11-19 02:20:59', '2023-11-19 02:20:59'),
                                                                                           (17, 'rtx4060d.webp', 25, '2023-11-19 02:20:59', '2023-11-19 02:20:59'),
                                                                                           (18, 'rtx4060e.webp', 25, '2023-11-19 02:20:59', '2023-11-19 02:20:59'),
                                                                                           (19, 'rtx3060a.webp', 26, '2023-11-19 02:31:10', '2023-11-19 02:31:10'),
                                                                                           (20, 'rtx3060b.webp', 26, '2023-11-19 02:31:10', '2023-11-19 02:31:10'),
                                                                                           (21, 'rtx3060c.webp', 26, '2023-11-19 02:31:10', '2023-11-19 02:31:10'),
                                                                                           (22, 'rtx4060tia.webp', 27, '2023-11-19 02:39:08', '2023-11-19 02:39:08'),
                                                                                           (23, 'rtx4060tib.webp', 27, '2023-11-19 02:39:08', '2023-11-19 02:39:08'),
                                                                                           (24, 'rtx4060tic.webp', 27, '2023-11-19 02:39:08', '2023-11-19 02:39:08'),
                                                                                           (25, 'rtx4060tid.webp', 27, '2023-11-19 02:39:08', '2023-11-19 02:39:08'),
                                                                                           (26, 'rtx4060tie.webp', 27, '2023-11-19 02:39:08', '2023-11-19 02:39:08'),
                                                                                           (27, 'tuf24a.webp', 28, '2023-11-19 02:51:14', '2023-11-19 02:51:14'),
                                                                                           (28, 'tuf24b.webp', 28, '2023-11-19 02:51:14', '2023-11-19 02:51:14'),
                                                                                           (29, 'tuf24c.webp', 28, '2023-11-19 02:51:14', '2023-11-19 02:51:14'),
                                                                                           (30, 'tuf24d.webp', 28, '2023-11-19 02:51:14', '2023-11-19 02:51:14'),
                                                                                           (31, 'acerg27a.webp', 29, '2023-11-19 02:59:02', '2023-11-19 02:59:02'),
                                                                                           (32, 'acerg27b.jpg', 29, '2023-11-19 02:59:02', '2023-11-19 02:59:02'),
                                                                                           (33, 'acerg27c.jpg', 29, '2023-11-19 02:59:02', '2023-11-19 02:59:02'),
                                                                                           (34, 'acerg27d.jpg', 29, '2023-11-19 02:59:02', '2023-11-19 02:59:02'),
                                                                                           (35, 'msi22a.webp', 30, '2023-11-19 03:02:14', '2023-11-19 03:02:14'),
                                                                                           (36, 'msi22b.webp', 30, '2023-11-19 03:02:14', '2023-11-19 03:02:14'),
                                                                                           (37, 'msi22c.webp', 30, '2023-11-19 03:02:14', '2023-11-19 03:02:14'),
                                                                                           (38, 'msi22d.webp', 30, '2023-11-19 03:02:14', '2023-11-19 03:02:14'),
                                                                                           (39, 'pny8ga.webp', 31, '2023-11-19 03:13:04', '2023-11-19 03:13:04'),
                                                                                           (40, 'pny8gb.webp', 31, '2023-11-19 03:13:04', '2023-11-19 03:13:04'),
                                                                                           (41, 'pny8gc.webp', 31, '2023-11-19 03:13:04', '2023-11-19 03:13:04'),
                                                                                           (42, 'pny8gd.webp', 31, '2023-11-19 03:13:04', '2023-11-19 03:13:04'),
                                                                                           (43, 'titan32a.png', 32, '2023-11-19 03:16:54', '2023-11-19 03:16:54'),
                                                                                           (44, 'titan32b.png', 32, '2023-11-19 03:16:54', '2023-11-19 03:16:54'),
                                                                                           (45, 'titan32c.png', 32, '2023-11-19 03:16:54', '2023-11-19 03:16:54'),
                                                                                           (46, 'titan32d.png', 32, '2023-11-19 03:16:54', '2023-11-19 03:16:54'),
                                                                                           (47, 'ssdpny256a.webp', 33, '2023-11-19 03:28:22', '2023-11-19 03:28:22'),
                                                                                           (48, 'ssdpny256b.webp', 33, '2023-11-19 03:28:22', '2023-11-19 03:28:22'),
                                                                                           (49, 'ssdpny256c.webp', 33, '2023-11-19 03:28:22', '2023-11-19 03:28:22'),
                                                                                           (50, 'pcgi3b.webp', 34, '2023-11-19 03:31:52', '2023-11-19 03:31:52'),
                                                                                           (51, 'pcgi3c.webp', 34, '2023-11-19 03:31:52', '2023-11-19 03:31:52'),
                                                                                           (52, 'pcgi3d.jpg', 34, '2023-11-19 03:31:52', '2023-11-19 03:31:52'),
                                                                                           (53, 'pcgi3e.webp', 34, '2023-11-19 03:31:52', '2023-11-19 03:31:52'),
                                                                                           (54, 'pcgi3f.webp', 34, '2023-11-19 03:31:52', '2023-11-19 03:31:52'),
                                                                                           (55, 'akkodb5075a.webp', 35, '2023-11-19 03:39:05', '2023-11-19 03:39:05'),
                                                                                           (56, 'akkodb5075b.webp', 35, '2023-11-19 03:39:05', '2023-11-19 03:39:05'),
                                                                                           (57, 'akkodb5075c.webp', 35, '2023-11-19 03:39:05', '2023-11-19 03:39:05'),
                                                                                           (58, 'akkodb5075d.webp', 35, '2023-11-19 03:39:05', '2023-11-19 03:39:05'),
                                                                                           (59, 'akkodb5075e.webp', 35, '2023-11-19 03:39:05', '2023-11-19 03:39:05'),
                                                                                           (60, 'adraek387rgbb.webp', 36, '2023-11-19 03:50:51', '2023-11-19 03:50:51'),
                                                                                           (61, 'edraek387rgba.webp', 36, '2023-11-19 03:50:51', '2023-11-19 03:50:51'),
                                                                                           (62, 'edraek387rgbc.webp', 36, '2023-11-19 03:50:51', '2023-11-19 03:50:51'),
                                                                                           (63, 'edraek387rgbd.png', 36, '2023-11-19 03:50:51', '2023-11-19 03:50:51'),
                                                                                           (64, 'case220ta.webp', 37, '2023-11-19 04:07:00', '2023-11-19 04:07:00'),
                                                                                           (65, 'case220tb.webp', 37, '2023-11-19 04:07:00', '2023-11-19 04:07:00'),
                                                                                           (66, 'case220tc.webp', 37, '2023-11-19 04:07:00', '2023-11-19 04:07:00'),
                                                                                           (67, 'case220td.webp', 37, '2023-11-19 04:07:00', '2023-11-19 04:07:00'),
                                                                                           (68, 'case220te.webp', 37, '2023-11-19 04:07:00', '2023-11-19 04:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `list_address_users`
--

CREATE TABLE `list_address_users` (
                                      `id` bigint(20) UNSIGNED NOT NULL,
                                      `user_id` bigint(20) UNSIGNED NOT NULL,
                                      `name` varchar(255) NOT NULL,
                                      `phone` varchar(255) NOT NULL,
                                      `address` varchar(255) NOT NULL,
                                      `created_at` timestamp NULL DEFAULT NULL,
                                      `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_address_users`
--

INSERT INTO `list_address_users` (`id`, `user_id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
                                                                                                               (1, 1, 'Lê Thanh Bách', '09774158017', 'Ninh Kiều , Cần Thơ', '2023-11-18 15:44:05', '2023-11-18 15:44:05'),
                                                                                                               (2, 1, 'Lê Văn Bách', '0123456789', 'Châu Thành, Đồng Tháp', '2023-11-19 01:29:22', '2023-11-19 01:29:22'),
                                                                                                               (3, 2, 'Nguyễn Văn An', '0774258019', 'Đại học Cần Thơ , Xuân Khánh , Ninh Kiều , Cần Thơ', '2023-11-22 15:42:41', '2023-11-22 15:42:41'),
                                                                                                               (4, 2, 'Trần Nguyễn Phương Anh', '0774258011', 'Đại học Nông Lâm, Quận Thủ Đức , Tp.Hồ Chí Minh', '2023-11-22 15:43:52', '2023-11-22 15:43:52'),
                                                                                                               (5, 1, 'Trần Nguyễn Phương Anh', '0774258018', 'Đại học Nông Lâm, Quận Thủ Đức , Tp.Hồ Chí Minh', '2023-11-23 12:52:45', '2023-11-23 12:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `list_describe_products`
--

CREATE TABLE `list_describe_products` (
                                          `id` bigint(20) UNSIGNED NOT NULL,
                                          `product_id` bigint(20) UNSIGNED NOT NULL,
                                          `key_detail` longtext NOT NULL,
                                          `value_detail` longtext NOT NULL,
                                          `created_at` timestamp NULL DEFAULT NULL,
                                          `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_describe_products`
--

INSERT INTO `list_describe_products` (`id`, `product_id`, `key_detail`, `value_detail`, `created_at`, `updated_at`) VALUES
                                                                                                                        (1, 1, 'Socket', 'FCLGA1700', '2023-11-18 01:07:03', '2023-11-18 01:07:03'),
                                                                                                                        (2, 1, 'Dòng CPU', 'Core i5', '2023-11-18 01:07:03', '2023-11-18 05:27:49'),
                                                                                                                        (6, 1, 'CPU', 'Intel® Core® i5-14600KF (Raptor Lake)', '2023-11-18 17:42:50', '2023-11-18 17:42:50'),
                                                                                                                        (7, 1, 'Số nhân', '14 (6 Performance-cores/ 8 Efficient-cores)', '2023-11-18 17:42:50', '2023-11-18 17:42:50'),
                                                                                                                        (8, 1, 'Số luồng', '20', '2023-11-18 17:42:50', '2023-11-18 17:42:50'),
                                                                                                                        (9, 1, 'Tần số Turbo tối đa', '5.3 GHz', '2023-11-18 17:42:50', '2023-11-18 17:42:50'),
                                                                                                                        (10, 1, 'Điện năng tiêu thụ', '125W - 181W', '2023-11-18 17:42:50', '2023-11-18 17:42:50'),
                                                                                                                        (11, 1, 'Bộ nhớ đệm', '24MB Intel® Smart Cache', '2023-11-18 17:46:12', '2023-11-18 17:46:12'),
                                                                                                                        (12, 1, 'Bo mạch chủ tương thích', '600 và 700 series', '2023-11-18 17:46:12', '2023-11-18 17:46:12'),
                                                                                                                        (13, 1, 'Bộ nhớ hỗ trợ tối đa', '192GB', '2023-11-18 17:46:12', '2023-11-18 17:46:12'),
                                                                                                                        (14, 1, 'Loại bộ nhớ', 'DDR5, DDR4', '2023-11-18 17:46:12', '2023-11-18 17:46:12'),
                                                                                                                        (15, 3, 'CPU', 'Intel® Socket 2066 Core™ X-Series Processors', '2023-11-18 17:54:33', '2023-11-18 17:54:33'),
                                                                                                                        (16, 3, 'Chipset', 'Intel® X299', '2023-11-18 17:54:33', '2023-11-18 17:54:33'),
                                                                                                                        (18, 3, 'Multi-GPU Support', 'Supports NVIDIA® Quad-GPU SLI® Technology Supports NVIDIA® 3-Way SLI® Technology', '2023-11-18 17:54:33', '2023-11-18 17:54:33'),
                                                                                                                        (19, 3, 'Expansion Slots', '48-Lane CPU- 3 x PCIe 3.0/2.0 x16 (x16, x16/x16, x16/x16/x8) 2 x PCIe 3.0/2.0 x1 *1', '2023-11-18 17:54:33', '2023-11-18 17:54:33'),
                                                                                                                        (20, 3, 'Storage', 'Intel® X299 Chipset : 1 x M.2 x4 Socket 3, with M key, type 2242/2260/2280/22110 storage devices support (SATA & PCIE 3.0 x 4 mode)*3 1 x M.2 x4 Socket 3, with M key,', '2023-11-18 17:54:33', '2023-11-18 21:38:32'),
                                                                                                                        (21, 3, 'LAN', 'Intel® I219V, 1 x Gigabit LAN', '2023-11-18 17:54:33', '2023-11-18 17:54:33'),
                                                                                                                        (22, 3, 'Bluetooth', 'Bluetooth® 5.0', '2023-11-18 17:54:33', '2023-11-18 17:54:33'),
                                                                                                                        (23, 3, 'Audio', 'Audio Feature : - DTS X®:Ultra - Optical S/PDIF out port(s) at back panel', '2023-11-18 17:54:33', '2023-11-18 17:54:33'),
                                                                                                                        (24, 23, 'CPU', 'Socket AM5 dành cho Bộ xử lý AMD Ryzen 7000 Series', '2023-11-18 19:02:15', '2023-11-18 19:02:15'),
                                                                                                                        (25, 23, 'Chipset', 'AMD X670', '2023-11-18 19:02:15', '2023-11-18 19:02:15'),
                                                                                                                        (26, 23, 'RAM', '4 x DIMM, Tối đa 128GB, DDR5 6400+ (OC) / 6200 (OC) / 6000', '2023-11-18 19:02:15', '2023-11-18 19:02:15'),
                                                                                                                        (27, 23, 'Đồ họa', '1 x DisplayPort ** 1 x cổng HDMI® ***', '2023-11-18 19:02:15', '2023-11-18 19:02:15'),
                                                                                                                        (28, 23, 'Khe mở rộng', 'Bộ xử lý máy tính để bàn AMD Ryzen ™ 7000 Series', '2023-11-18 19:02:15', '2023-11-18 19:02:15'),
                                                                                                                        (29, 23, 'Lưu trữ', 'Tổng cộng hỗ trợ 3 khe cắm x M.2 và 6 x cổng SATA 6Gb / s * Bộ xử lý máy tính để bàn AMD Ryzen ™ 7000 Series', '2023-11-18 19:02:15', '2023-11-18 19:02:15'),
                                                                                                                        (30, 24, 'CPU', 'Intel® Socket LGA1700 for 12th Gen Intel® Core™, Pentium® Gold and Celeron® Processors', '2023-11-18 19:11:52', '2023-11-18 19:11:52'),
                                                                                                                        (31, 24, 'Chipset', 'Z690', '2023-11-18 19:11:52', '2023-11-18 19:11:52'),
                                                                                                                        (32, 24, 'Khe RAM', '4 x DIMM', '2023-11-18 19:11:52', '2023-11-18 19:11:52'),
                                                                                                                        (33, 24, 'Cổng xuất hình', '1 x HDMI® port** 2 x Intel® Thunderbolt™ 4 ports', '2023-11-18 19:11:52', '2023-11-18 19:11:52'),
                                                                                                                        (34, 24, 'Khe PCI', 'Intel® 12th Gen Processors', '2023-11-18 19:11:52', '2023-11-18 19:11:52'),
                                                                                                                        (35, 24, 'Lưu trữ', 'Supports 5 x M.2 slots and 6 x SATA 6Gb/s ports', '2023-11-18 19:11:52', '2023-11-18 19:11:52'),
                                                                                                                        (36, 24, 'Ethernet', '1 x Intel® 2.5Gb Ethernet ASUS LANGuard', '2023-11-18 19:11:52', '2023-11-18 19:11:52'),
                                                                                                                        (37, 24, 'Wireless & Bluetooth', 'Supports 2.4/5/6GHz frequency band* Bluetooth v5.2 hardware ready**', '2023-11-18 19:11:52', '2023-11-18 19:11:52'),
                                                                                                                        (38, 25, 'Nhân đồ họa', 'NVIDIA® GeForce RTX™ 4060', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (39, 25, 'Chuẩn giao tiếp', 'PCI Express® Gen 4 x16 (sử dụng x8)', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (40, 25, 'Xung nhịp', 'Extreme Performance: 2610MHz (MSI Center) Boost: 2595 MHz', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (41, 25, 'Cuda Core', '3072 Units', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (42, 25, 'Tốc độ Bộ nhớ', '17 Gbps', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (43, 25, 'Bộ nhớ', '8GB GDDR6', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (44, 25, 'Bus bộ nhớ', '128-bit', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (45, 25, 'Cổng xuất hình', 'DisplayPort x 3 (v1.4a) - HDMI™ x 1', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (46, 25, 'Hỗ trợ HDCP', 'Y', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (47, 25, 'Độ phân giải tối đa', '7680 x 4320', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (48, 25, 'Tối đa cổng xuất hình', '4', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (49, 25, 'Nguồn khuyến nghị', '550W', '2023-11-18 19:24:58', '2023-11-18 19:24:58'),
                                                                                                                        (50, 26, 'Nhân đồ họa', 'NVIDIA® GeForce RTX™ 3060', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (51, 26, 'Giao thức kết nối', 'PCI Express 4.0', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (52, 26, 'Nhân xử lý', '3584', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (53, 26, 'Xung nhịp nhân', 'OC Mode - 1807 MHz (Boost Clock) Gaming Mode - 1777 MHz (Boost Clock)', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (54, 26, 'Bộ nhớ', 'Dung lượng: 8GB Loại: GDDR6 Tốc độ: 15 Gbps Giao thức: 128-bit', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (55, 26, 'Độ phân giải kỹ thuật số tối đa', '7680 x 4320', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (56, 26, 'Số màn hình hỗ trợ xuất tối đa', '4', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (57, 26, 'Cổng xuất hình', '1x Native HDMI 2.1 3 x Native DisplayPort 1.4a HDCP Support Yes (2.3)', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (58, 26, 'Chuẩn HDCP hổ trợ', '2.3', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (59, 26, 'Phiên bản DirectX', '12', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (60, 26, 'Nguồn đề nghị', '650W', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (61, 26, 'Đầu cấp nguồn', '1 x 8-pin', '2023-11-18 19:34:39', '2023-11-18 19:34:39'),
                                                                                                                        (62, 27, 'Nhân đồ họa', 'NVIDIA® GeForce RTX™ 4060 Ti', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (63, 27, 'Bus tiêu chuẩn', 'PCI Express 4.0', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (64, 27, 'Xung nhịp', 'Chế độ OC: 2595 MHz Chế độ mặc định: 2565 MHz (Boost)', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (65, 27, 'Nhân CUDA', '4352', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (66, 27, 'Tốc độ bộ nhớ', '18 Gbps', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (67, 27, 'Bộ nhớ Video', '8GB GDDR6', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (68, 27, 'Giao thức bộ nhớ', '128-bit', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (69, 27, 'Độ phân giải', 'Độ phân giải tối đa 7680 x 4320', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (70, 27, 'Giao thức', 'Có x 1 (Native HDMI 2.1) Có x 3 (Native DisplayPort 1.4a) Hỗ trợ HDCP (2.3)', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (71, 27, 'Số lượng màn hình tối đa hỗ trợ', '4', '2023-11-18 19:45:57', '2023-11-18 19:45:57'),
                                                                                                                        (72, 27, 'Hỗ trợ NVlink/ Crossfire', 'Không', '2023-11-18 19:45:58', '2023-11-18 19:45:58'),
                                                                                                                        (73, 27, 'Phụ kiện', '1 x Thẻ sưu tập 1 x Hướng dẫn nhanh 1 x Thẻ cảm ơn', '2023-11-18 19:45:58', '2023-11-18 19:45:58'),
                                                                                                                        (74, 27, 'Kích thước', '227.2 x 123.24 x 49.6 mm', '2023-11-18 19:45:58', '2023-11-18 19:45:58'),
                                                                                                                        (75, 28, 'Nhà sản xuất', 'ASUS', '2023-11-18 19:54:06', '2023-11-18 19:54:06'),
                                                                                                                        (76, 28, 'Kích thước màn hình', '24 inch', '2023-11-18 19:54:06', '2023-11-18 19:54:06'),
                                                                                                                        (77, 28, 'Tỉ lệ khung hình', '16:9', '2023-11-18 19:54:06', '2023-11-18 19:54:06'),
                                                                                                                        (78, 28, 'Màn hình hiển thị', '527.04 x 296.46 mm', '2023-11-18 19:54:06', '2023-11-18 19:54:06'),
                                                                                                                        (79, 28, 'Tấm nền', 'Fast IPS', '2023-11-18 19:54:06', '2023-11-18 19:54:06'),
                                                                                                                        (80, 28, 'Góc hiển thị', '178°/ 178°', '2023-11-18 19:54:06', '2023-11-18 19:54:06'),
                                                                                                                        (81, 28, 'Độ phân giải', '1920 x 1080', '2023-11-18 19:54:06', '2023-11-18 19:54:06'),
                                                                                                                        (82, 28, 'Độ sáng', '250cd/㎡', '2023-11-18 19:54:06', '2023-11-18 19:54:06'),
                                                                                                                        (83, 32, 'Màu sắc', 'White', '2023-11-18 20:18:56', '2023-11-18 20:18:56'),
                                                                                                                        (84, 32, 'Tương thích bộ nhớ', 'Intel 600 Series,Intel 700 Series', '2023-11-18 20:18:56', '2023-11-18 20:18:56'),
                                                                                                                        (85, 32, 'Chất liệu', 'Nhôm', '2023-11-18 20:18:56', '2023-11-18 20:18:56'),
                                                                                                                        (86, 32, 'Màu led', 'RGB', '2023-11-18 20:18:56', '2023-11-18 20:18:56'),
                                                                                                                        (87, 32, 'Series bộ nhớ', 'Dominator Titanium', '2023-11-18 20:18:56', '2023-11-18 20:18:56'),
                                                                                                                        (88, 32, 'Loại bộ nhớ', 'DDR5', '2023-11-18 20:18:56', '2023-11-18 20:18:56'),
                                                                                                                        (89, 32, 'Gói bộ nhớ', 'DIMM', '2023-11-18 20:18:56', '2023-11-18 20:18:56'),
                                                                                                                        (90, 32, 'Đèn LED', 'RGB Dynamic Multi-Zone', '2023-11-18 20:18:56', '2023-11-18 20:18:56'),
                                                                                                                        (91, 31, 'Series', 'Ram PNY XLR8 1x8GB 3200 DDR4 Low Profile', '2023-11-18 20:20:32', '2023-11-18 20:20:32'),
                                                                                                                        (92, 31, 'Màu sắc', 'Đen', '2023-11-18 20:20:32', '2023-11-18 20:20:32'),
                                                                                                                        (93, 31, 'Loại RAM', 'DDR4', '2023-11-18 20:20:32', '2023-11-18 20:20:32'),
                                                                                                                        (94, 31, 'Dung lượng', '1 x 8GB', '2023-11-18 20:20:32', '2023-11-18 20:20:32'),
                                                                                                                        (95, 31, 'Chuẩn Bus', '3200MHz', '2023-11-18 20:20:32', '2023-11-18 20:20:32'),
                                                                                                                        (96, 31, 'Kiểu dáng', 'DIMM', '2023-11-18 20:20:32', '2023-11-18 20:20:32'),
                                                                                                                        (97, 34, 'Mainboard', 'GIGABYTE H610M-H V2 (DDR4)', '2023-11-18 20:33:54', '2023-11-18 20:33:54'),
                                                                                                                        (98, 34, 'CPU', 'Intel Core i3 12100F / 3.3GHz Turbo 4.3GHz / 4 Nhân 8 Luồng / 12MB / LGA 1700', '2023-11-18 20:33:54', '2023-11-18 20:33:54'),
                                                                                                                        (99, 34, 'RAM', 'PNY XLR8 Silver 1x8GB 3200 RGB', '2023-11-18 20:33:54', '2023-11-18 20:33:54'),
                                                                                                                        (100, 34, 'VGA - Card đồ họa', 'Palit GeForce GT 730 2G', '2023-11-18 20:33:54', '2023-11-18 20:33:54'),
                                                                                                                        (101, 34, 'HDD', 'Có thể tùy chọn Nâng cấp', '2023-11-18 20:33:54', '2023-11-18 20:33:54'),
                                                                                                                        (102, 34, 'SSD', 'TeamGroup CX2 240GB 2.5\" Sata 3', '2023-11-18 20:33:54', '2023-11-18 20:33:54'),
                                                                                                                        (103, 34, 'PSU', 'Jetek 350W Elite V2', '2023-11-18 20:33:54', '2023-11-18 20:33:54'),
                                                                                                                        (104, 34, 'Case', 'Case Xigmatek PHANTOM 3F (3 fan RGB)', '2023-11-18 20:33:54', '2023-11-18 20:33:54'),
                                                                                                                        (105, 35, 'Series/Model', 'AKKO 5075B Plus Dragon Ball Super Goku', '2023-11-18 20:41:29', '2023-11-18 20:41:29'),
                                                                                                                        (106, 35, 'Layout', '75%', '2023-11-18 20:41:29', '2023-11-18 20:41:29'),
                                                                                                                        (107, 35, 'Kết nối', '3 chế độ kết nối: Dây / Bluetooth 5.0 / 2.4Ghz', '2023-11-18 20:41:29', '2023-11-18 20:41:29'),
                                                                                                                        (108, 35, 'Pin', '3000mah (Tiêu thụ 12ma / giờ ở chế độ không dây và không bật LED)', '2023-11-18 20:41:29', '2023-11-18 20:41:29'),
                                                                                                                        (109, 35, 'LED', 'Nền RGB (6028 SMD LED) với nhiều chế độ và có cả LED 2 bên hông phím', '2023-11-18 20:41:29', '2023-11-18 20:41:29'),
                                                                                                                        (110, 35, 'Foam tiêu âm', 'Tích hợp sẵn foam tiêu âm PCB, foam đáy silicon và IXPE switch pad', '2023-11-18 20:41:29', '2023-11-18 20:41:29'),
                                                                                                                        (111, 35, 'Switch', 'AKKO CS Switch – Crystal', '2023-11-18 20:41:29', '2023-11-18 20:41:29'),
                                                                                                                        (112, 36, 'Màu sắc', 'Đen', '2023-11-18 20:53:10', '2023-11-18 20:53:10'),
                                                                                                                        (113, 36, 'Model', 'EK387L RGB', '2023-11-18 20:53:10', '2023-11-18 20:53:10'),
                                                                                                                        (114, 36, 'Kết nối', 'USB Type C', '2023-11-18 20:53:10', '2023-11-18 20:53:10'),
                                                                                                                        (115, 36, 'Số phím', '87 Phím', '2023-11-18 20:53:10', '2023-11-18 20:53:10'),
                                                                                                                        (116, 36, 'Switch Huano', 'Red', '2023-11-18 20:53:10', '2023-11-18 20:53:10'),
                                                                                                                        (117, 36, 'Keycaps', 'Double injection', '2023-11-18 20:53:10', '2023-11-18 20:53:10'),
                                                                                                                        (118, 37, 'Kích thước vỏ', '395mm x 210mm x 450mm', '2023-11-18 21:08:28', '2023-11-18 21:08:28'),
                                                                                                                        (119, 37, 'Chiều dài GPU tối đa', '180mm', '2023-11-18 21:08:28', '2023-11-18 21:08:28'),
                                                                                                                        (120, 37, 'Chiều cao tối đa của CPU', '160mm', '2023-11-18 21:08:28', '2023-11-18 21:08:28'),
                                                                                                                        (121, 37, 'Khe cắm mở rộng', '7', '2023-11-18 21:08:28', '2023-11-18 21:08:28'),
                                                                                                                        (122, 37, 'Chất liệu', 'Thép, Kính cường lực', '2023-11-18 21:08:28', '2023-11-18 21:08:28');

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
                                                          (31, '2014_10_12_000000_create_users_table', 1),
                                                          (32, '2014_10_12_100000_create_password_reset_tokens_table', 1),
                                                          (33, '2019_08_19_000000_create_failed_jobs_table', 1),
                                                          (34, '2019_12_14_000001_create_personal_access_tokens_table', 1),
                                                          (35, '2023_09_24_210012_create_categories_table', 1),
                                                          (36, '2023_09_24_211322_create_products_table', 1),
                                                          (37, '2023_09_25_222242_create_image_products_table', 1),
                                                          (38, '2023_10_03_201558_create_cate_products_table', 1),
                                                          (39, '2023_10_15_144240_create_list_describe_products_table', 1),
                                                          (40, '2023_10_19_165639_create_orders_table', 1),
                                                          (41, '2023_10_21_193417_create_chi_tiet_hoa_dons_table', 1),
                                                          (42, '2023_11_06_183928_create_list_address_users_table', 1),
                                                          (43, '2023_11_08_170702_create_activities_table', 1),
                                                          (44, '2023_11_11_011441_create_reviews_table', 1),
                                                          (45, '2023_11_11_011628_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
                          `id` bigint(20) UNSIGNED NOT NULL,
                          `user_id` bigint(20) UNSIGNED NOT NULL,
                          `name` varchar(255) DEFAULT NULL,
                          `address` varchar(255) DEFAULT NULL,
                          `phone` varchar(255) DEFAULT NULL,
                          `status` tinyint(1) NOT NULL DEFAULT 0,
                          `note` text DEFAULT NULL,
                          `totalPrice` decimal(11,2) NOT NULL,
                          `created_at` timestamp NULL DEFAULT NULL,
                          `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `address`, `phone`, `status`, `note`, `totalPrice`, `created_at`, `updated_at`) VALUES
                                                                                                                                   (1, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 1, NULL, 22290000.00, '2023-11-18 14:28:50', '2023-11-22 15:47:02'),
                                                                                                                                   (2, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', -1, 'Hết hàng', 22290000.00, '2023-11-18 14:28:52', '2023-11-22 15:48:10'),
                                                                                                                                   (3, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 1, NULL, 22290000.00, '2023-11-18 14:29:52', '2023-11-18 16:31:14'),
                                                                                                                                   (4, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 1, NULL, 22290000.00, '2023-11-18 14:33:42', '2023-11-18 16:07:45'),
                                                                                                                                   (6, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', -1, 'Hết hàng', 8290000.00, '2023-11-18 17:28:00', '2023-11-22 15:47:58'),
                                                                                                                                   (7, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 1, 'hay giao nhanh hon', 14000000.00, '2023-11-18 17:33:55', '2023-11-19 01:38:39'),
                                                                                                                                   (8, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 1, NULL, 14000000.00, '2023-11-18 17:34:20', '2023-11-19 01:36:39'),
                                                                                                                                   (9, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', -1, 'Hết hàng', 14000000.00, '2023-11-18 17:42:14', '2023-11-18 23:26:26'),
                                                                                                                                   (10, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', -1, NULL, 14000000.00, '2023-11-18 17:44:44', '2023-11-18 23:21:52'),
                                                                                                                                   (11, 1, 'Lê Thanh Bách', 'Ninh Kiều , Cần Thơ', '09774158017', -1, 'hay giao nhanh hon', 8290000.00, '2023-11-18 17:49:28', '2023-11-18 23:21:41'),
                                                                                                                                   (12, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 1, 'Giao hàng cho tôi vào lúc 13h trưa nay', 14000000.00, '2023-11-19 01:16:06', '2023-11-19 01:36:12'),
                                                                                                                                   (13, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 0, NULL, 14000000.00, '2023-11-19 04:12:46', '2023-11-19 04:12:46'),
                                                                                                                                   (14, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 0, 'Giao hàng cho tôi vào lúc 13h trưa nay', 6000000.00, '2023-11-19 04:16:27', '2023-11-19 04:16:27'),
                                                                                                                                   (15, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 0, 'Giao hàng cho tôi vào lúc 13h trưa nay', 6000000.00, '2023-11-19 04:17:42', '2023-11-19 04:17:42'),
                                                                                                                                   (16, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 0, NULL, 26000000.00, '2023-11-19 04:54:37', '2023-11-19 04:54:37'),
                                                                                                                                   (17, 2, 'Trần Nguyễn Phương Anh', 'Đại học Nông Lâm, Quận Thủ Đức , Tp.Hồ Chí Minh', '0774258011', 1, 'Giao giờ hành chánh', 38280000.00, '2023-11-22 15:41:25', '2023-11-22 15:46:50'),
                                                                                                                                   (18, 2, 'Nguyễn Văn An', 'Đại học Cần Thơ , Xuân Khánh , Ninh Kiều , Cần Thơ', '0774258019', 1, 'Giao hàng cho tôi vào lúc 13h trưa nay', 11370000.00, '2023-11-22 15:45:14', '2023-11-22 15:46:23'),
                                                                                                                                   (20, 1, 'Lê Thanh Bách', 'Ninh Kiều , Cần Thơ', '09774158017', 0, 'Giao hàng cho tôi vào lúc 13h trưa nay', 38980000.00, '2023-11-23 12:46:56', '2023-11-23 12:47:32'),
                                                                                                                                   (21, 1, 'Lê Ạc Min', '123 đường Quang Trung, TP.HCM', '0774158016', 1, NULL, 32970000.00, '2023-11-23 12:47:51', '2023-11-23 12:48:19'),
                                                                                                                                   (22, 1, 'Lê Thanh Bách', 'Ninh Kiều , Cần Thơ', '09774158017', 0, NULL, 10990000.00, '2023-11-23 13:09:17', '2023-11-23 13:09:17'),
                                                                                                                                   (23, 1, 'Lê Ạc Minh', '123 đường Quang Trung, TP.HCM', '0774158016', 0, NULL, 290000.00, '2023-12-08 14:08:21', '2023-12-08 14:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
                                 `id` bigint(20) UNSIGNED NOT NULL,
                                 `order_id` bigint(20) UNSIGNED NOT NULL,
                                 `product_id` bigint(20) UNSIGNED NOT NULL,
                                 `quantity` int(11) NOT NULL,
                                 `price` decimal(11,2) NOT NULL,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
                                                                                                                  (1, 1, 3, 1, 14000000.00, '2023-11-18 14:28:50', '2023-11-18 14:28:50'),
                                                                                                                  (2, 1, 1, 1, 8290000.00, '2023-11-18 14:28:50', '2023-11-18 14:28:50'),
                                                                                                                  (3, 2, 3, 1, 14000000.00, '2023-11-18 14:28:52', '2023-11-18 14:28:52'),
                                                                                                                  (4, 2, 1, 1, 8290000.00, '2023-11-18 14:28:52', '2023-11-18 14:28:52'),
                                                                                                                  (5, 3, 3, 1, 14000000.00, '2023-11-18 14:29:52', '2023-11-18 14:29:52'),
                                                                                                                  (6, 3, 1, 1, 8290000.00, '2023-11-18 14:29:52', '2023-11-18 14:29:52'),
                                                                                                                  (7, 4, 3, 1, 14000000.00, '2023-11-18 14:33:42', '2023-11-18 14:33:42'),
                                                                                                                  (8, 4, 1, 1, 8290000.00, '2023-11-18 14:33:42', '2023-11-18 14:33:42'),
                                                                                                                  (10, 6, 1, 1, 8290000.00, '2023-11-18 17:28:00', '2023-11-18 17:28:00'),
                                                                                                                  (11, 7, 3, 1, 14000000.00, '2023-11-18 17:33:55', '2023-11-18 17:33:55'),
                                                                                                                  (12, 8, 3, 1, 14000000.00, '2023-11-18 17:34:20', '2023-11-18 17:34:20'),
                                                                                                                  (13, 9, 3, 1, 14000000.00, '2023-11-18 17:42:14', '2023-11-18 17:42:14'),
                                                                                                                  (14, 10, 3, 1, 14000000.00, '2023-11-18 17:44:44', '2023-11-18 17:44:44'),
                                                                                                                  (15, 11, 1, 1, 8290000.00, '2023-11-18 17:49:28', '2023-11-18 17:49:28'),
                                                                                                                  (16, 12, 3, 1, 14000000.00, '2023-11-19 01:16:06', '2023-11-19 01:16:06'),
                                                                                                                  (17, 13, 3, 1, 14000000.00, '2023-11-19 04:12:46', '2023-11-19 04:12:46'),
                                                                                                                  (18, 14, 23, 1, 6000000.00, '2023-11-19 04:16:27', '2023-11-19 04:16:27'),
                                                                                                                  (19, 15, 23, 1, 6000000.00, '2023-11-19 04:17:42', '2023-11-19 04:17:42'),
                                                                                                                  (20, 16, 3, 1, 14000000.00, '2023-11-19 04:54:37', '2023-11-19 04:54:37'),
                                                                                                                  (21, 16, 23, 2, 6000000.00, '2023-11-19 04:54:37', '2023-11-19 04:54:37'),
                                                                                                                  (22, 17, 32, 3, 5000000.00, '2023-11-22 15:41:25', '2023-11-22 15:41:25'),
                                                                                                                  (23, 17, 33, 1, 290000.00, '2023-11-22 15:41:25', '2023-11-22 15:41:25'),
                                                                                                                  (24, 17, 23, 2, 6000000.00, '2023-11-22 15:41:25', '2023-11-22 15:41:25'),
                                                                                                                  (25, 17, 25, 1, 10990000.00, '2023-11-22 15:41:25', '2023-11-22 15:41:25'),
                                                                                                                  (26, 18, 28, 3, 3790000.00, '2023-11-22 15:45:14', '2023-11-22 15:45:14'),
                                                                                                                  (28, 20, 23, 2, 6000000.00, '2023-11-23 12:46:56', '2023-11-23 12:46:56'),
                                                                                                                  (29, 20, 25, 2, 10990000.00, '2023-11-23 12:46:56', '2023-11-23 12:46:56'),
                                                                                                                  (30, 20, 32, 1, 5000000.00, '2023-11-23 12:46:56', '2023-11-23 12:46:56'),
                                                                                                                  (31, 21, 25, 3, 10990000.00, '2023-11-23 12:47:51', '2023-11-23 12:47:51'),
                                                                                                                  (32, 22, 25, 1, 10990000.00, '2023-11-23 13:09:17', '2023-11-23 13:09:17'),
                                                                                                                  (33, 23, 33, 1, 290000.00, '2023-12-08 14:08:21', '2023-12-08 14:08:21');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
                            `id` bigint(20) UNSIGNED NOT NULL,
                            `name` varchar(100) NOT NULL,
                            `slug` varchar(100) NOT NULL,
                            `category_id` bigint(20) UNSIGNED NOT NULL,
                            `price` decimal(11,2) NOT NULL DEFAULT 123.45,
                            `sale` decimal(11,2) NOT NULL DEFAULT 0.00,
                            `image` varchar(255) DEFAULT NULL,
                            `description` longtext DEFAULT NULL,
                            `status` tinyint(4) NOT NULL DEFAULT 1,
                            `prior` tinyint(4) NOT NULL DEFAULT 0,
                            `quantity` int(11) NOT NULL DEFAULT 1,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `price`, `sale`, `image`, `description`, `status`, `prior`, `quantity`, `created_at`, `updated_at`) VALUES
                                                                                                                                                                     (1, 'Bộ vi xử lý Intel Core i5 14600KF', 'bo-vi-xu-ly-intel-core-i5-14600kf', 2, 8290000.00, 0.00, 'i5.png', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết bộ vi xử l&yacute; Intel Core i5 14600KF / Turbo up to 5.3GHz / 14 Nh&acirc;n 20 Luồng / 24MB / LGA 1700</strong></h2>\r\n\r\n<h3><strong>Tổng quan thiết kế</strong></h3>\r\n\r\n<p><strong><a href=\"https://gearvn.com/collections/cpu-bo-vi-xu-ly\" target=\"_blank\">CPU Intel Core</a>&nbsp;i5 14600KF&nbsp;</strong>l&agrave;&nbsp;<a href=\"https://gearvn.com/collections/cpu-bo-vi-xu-ly\" target=\"_blank\">CPU</a>&nbsp;thế hệ thứ 14 của Intel. L&agrave; đứa con sinh sau đẻ muộn n&ecirc;n Intel Core i5 14600KF được ưu &aacute;i dựa tr&ecirc;n Socket LGA 1700 v&agrave; &aacute;p dụng kiến ​​tr&uacute;c mới v&agrave; c&oacute; hiệu năng vượt trội so với c&aacute;c sản phẩm thế hệ trước. Intel Core i5 14600KF sẽ l&agrave; sự lựa chọn tuyệt vời nếu bạn muốn x&acirc;y dựng một d&agrave;n&nbsp;<a href=\"https://gearvn.com/pages/pc-gvn\" target=\"_blank\">PC gaming</a>&nbsp;tốt nhất hiện nay. Với số nh&acirc;n, số luồng v&agrave; tốc độ xung nhịp cao, n&oacute; sẽ ph&ugrave; hợp với c&aacute;c thiết bị cao cấp, ph&aacute;t trực tuyến dịch vụ, tr&ograve; chơi hoặc sử dụng phần mềm chuy&ecirc;n nghiệp.</p>\r\n\r\n<p><img alt=\"GEARVN - Bộ vi xử lý Intel Core i5 14600KF / Turbo up to 5.3GHz / 14 Nhân 20 Luồng / 24MB / LGA 1700\" src=\"https://file.hstatic.net/200000722513/file/gearvn-intel-core-i5-14600kf-1_cc3d7d9ae131480aa238c9afaab3293a.png\" /></p>\r\n\r\n<h3><strong>Intel Core i5 14600KF đổi mới</strong></h3>\r\n\r\n<p>Intel Core i5 14600KF l&agrave; một CPU thiết kế 6 + 8 với s&aacute;u l&otilde;i hiệu suất (P-Core) v&agrave; t&aacute;m l&otilde;i hiệu quả (E-Core). Thiết kế n&agrave;y l&agrave; do c&aacute;ch tiếp cận kết hợp mới của kiến ​​tr&uacute;c &nbsp;Raptor Lake Refresh. Với 14 l&otilde;i v&agrave; 20 luồng, tốc độ xung nhịp cơ bản v&agrave; tối đa l&agrave; 3,5 GHz v&agrave; 5,3 GHz. C&ocirc;ng suất cơ bản của i5 14600KF l&agrave; 125W.&nbsp;</p>\r\n\r\n<h3><strong>Cải thiện bộ nhớ đệm</strong></h3>\r\n\r\n<p>Độ trễ tr&ecirc;n Intel Core i5 14600KF cũng đ&atilde; được cải thiện nhờ k&iacute;ch thước bộ nhớ cache L2 v&agrave; L3 lớn hơn của Raptor Lake. Dung lượng bộ nhớ cache cao hơn thường ảnh hưởng trực tiếp đến độ trễ của bộ nhớ cache. Nhưng với &nbsp;Raptor Lake Refresh, điều n&agrave;y sẽ kh&ocirc;ng thể xảy ra. Ngoại lệ duy nhất để cải thiện độ trễ l&agrave; bộ nhớ đệm L3. Tuy nhi&ecirc;n, c&aacute;c l&otilde;i E cũng tốt, nếu kh&ocirc;ng muốn n&oacute;i l&agrave; tốt hơn về bộ nhớ đệm L3 v&agrave; ch&uacute;ng c&oacute; độ trễ thấp hơn.</p>', 1, 1, 0, '2023-11-18 07:47:29', '2023-11-22 15:47:02'),
                                                                                                                                                                     (3, 'Asus PRIME X299-DELUXE II LGA2066', 'asus-prime-x299-deluxe-ii-lga2066', 2, 14300000.00, 14000000.00, '1700297726.jpg', '<p>Bo mạch chủ Intel LGA 2066 ATX với Bộ l&agrave;m m&aacute;t M.2, DDR4 4133MHz, Wi-Fi 802.11ad, M.2 K&eacute;p, U.2, hỗ trợ Intel VROC, SATA 6Gb/s, đầu nối USB 3.1 thế hệ thứ 2 ở bảng điều khiển ph&iacute;a trước</p>\r\n\r\n<ul>\r\n	<li>Tối ưu 5 Chiều: T&iacute;nh năng hiệu chỉnh to&agrave;n hệ thống với một nhấp chuột, mang đến khả năng &eacute;p xung tối ưu v&agrave; l&agrave;m m&aacute;t th&ocirc;ng minh cho c&aacute;c t&aacute;c vụ đ&ograve;i hỏi cao về CPU v&agrave; GPU.</li>\r\n	<li>C&aacute;c t&ugrave;y chọn l&agrave;m m&aacute;t đầu ng&agrave;nh: Điều khiển to&agrave;n diện quạt v&agrave; bơm nước th&ocirc;ng qua phần mềm Fan Xpert 4 hoặc ASUS UEFI đ&atilde; th&agrave;nh danh.</li>\r\n	<li>Khả năng kết nối của thế hệ kế tiếp: Sự linh hoạt đỉnh cao với Wi-Fi 2x2 802.11ad, Thunderbolt 3, U.2, M.2 c&ugrave;ng đầu nối USB 3.1 thế hệ thứ 2 ở cổng điều khiển ph&iacute;a trước.</li>\r\n	<li>Bộ l&agrave;m m&aacute;t M.2: Bộ l&agrave;m m&aacute;t si&ecirc;u hiệu quả gi&uacute;p giảm đến 20&deg;C nhiệt độ cho ổ SSD M.2, cho tốc độ truyền tải kh&ocirc;ng bị tắc nghẽn v&agrave; tăng cường độ tin cậy.</li>\r\n	<li>LiveDash: Một m&agrave;n hiển thị c&oacute; thể được t&ugrave;y chỉnh tr&ecirc;n bo mạch hiển thị nhiệt độ hệ thống, tần số CPU, tốc độ quạt v&agrave; thậm ch&iacute; l&agrave; logo của ri&ecirc;ng bạn.</li>\r\n	<li>Aura Sync v&agrave; đầu cắm LED: Đầu cắm dải LED c&ugrave;ng &aacute;nh s&aacute;ng RGB c&oacute; thể được điều khiển tr&ecirc;n bo mạch, c&oacute; thể được đồng bộ dễ d&agrave;ng với một danh s&aacute;ch ng&agrave;y c&agrave;ng d&agrave;i th&ecirc;m c&aacute;c phần cứng hỗ trợ Aura của ASUS.</li>\r\n</ul>\r\n\r\n<p><img alt=\"PRIME X299-DELUXE\" src=\"https://www.asus.com/media/global/products/LjeG4p2My9EsJJJR/P_setting_xxx_0_90_end_692.png\" /></p>', 1, 1, 9, '2023-11-18 08:20:04', '2023-11-22 15:47:02'),
                                                                                                                                                                     (23, 'ASUS PRIME X670-P WIFI', 'asus-prime-x670-p-wifi', 2, 8490000.00, 6000000.00, 'x670.jpg', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết mainboard&nbsp;ASUS PRIME X670-P WIFI (DDR5)</strong></h2>\r\n\r\n<p>ASUS PRIME X670-P WIFI (DDR5) l&agrave; d&ograve;ng&nbsp;<a href=\"https://gearvn.com/collections/mainboard-bo-mach-chu\" target=\"_blank\">main m&aacute;y t&iacute;nh</a>&nbsp;mới nhất đến từ ASUS, d&ograve;ng mainboard được thiết kế chuy&ecirc;n nghiệp để ph&aacute;t huy hết tiềm năng của bộ vi xử l&yacute; AMD Ryzen 7000-series thuộc series&nbsp;<a href=\"https://gearvn.com/collections/mainboard-amd-x670\" target=\"_blank\">X670</a>&nbsp;với hiệu năng mạnh mẽ, hỗ trợ tối đa cho mọi nhu cầu sử dụng. Kh&ocirc;ng dừng lại ở đ&oacute;, ASUS PRIME X670-P WIFI sở hữu thiết kế độc đ&aacute;o với c&aacute;c chi tiết được gia c&ocirc;ng v&ocirc; c&ugrave;ng tỉ mỉ.</p>\r\n\r\n<h3><strong>Hiệu năng đỉnh cao</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN-asus-prime-x670-p-wifi-ddr5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-prime-x670-p-wifi-ddr5_d2795de7b4f14884870f1205fc59dec7_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>D&ograve;ng bo mạch chủ ASUS Prime được thiết kế chuy&ecirc;n nghiệp để ph&aacute;t huy hết tiềm năng của bộ vi xử l&yacute; AMD Ryzen 7000-series. Tự h&agrave;o với thiết kế năng lượng mạnh mẽ, giải ph&aacute;p l&agrave;m m&aacute;t to&agrave;n diện v&agrave; c&aacute;c t&ugrave;y chọn điều chỉnh th&ocirc;ng minh, PRIME X670-P WIFI cung cấp cho người d&ugrave;ng khả năng tối ưu h&oacute;a hiệu suất th&ocirc;ng qua c&aacute;c t&iacute;nh năng phần mềm v&agrave; phần mềm trực quan.</p>\r\n\r\n<h3><strong>Khả năng l&agrave;m m&aacute;t được tối ưu</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN-asus-prime-x670-p-wifi-ddr5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-prime-x670-p-wifi-ddr5-1_1d435331d431414c8fed534443d4219b_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>D&ograve;ng PRIME X670 được thiết kế với nhiều bộ&nbsp;<a href=\"https://gearvn.com/collections/tan-nhiet-khi\" target=\"_blank\">tản nhiệt</a>&nbsp;t&iacute;ch hợp v&agrave; một loạt c&aacute;c đầu cắm quạt kết hợp để đảm bảo bộ m&aacute;y PC của bạn lu&ocirc;n m&aacute;t v&agrave; ổn định khi xử l&yacute; c&ocirc;ng việc cường độ cao.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Một bộ tản nhiệt M.2 sẽ chăm s&oacute;c khe cắm M.2, tr&aacute;nh việc điều chỉnh c&oacute; thể xảy ra với bộ lưu trữ M.2 trong qu&aacute; tr&igrave;nh truyền li&ecirc;n tục.</p>\r\n	</li>\r\n	<li>\r\n	<p>Hai tấm tản nhiệt VRM lớn v&agrave; tấm tản nhiệt chất lượng cao cải thiện khả năng truyền nhiệt từ MOSFET v&agrave; cuộn cảm để c&oacute; hiệu suất l&agrave;m m&aacute;t tốt hơn.</p>\r\n	</li>\r\n	<li>\r\n	<p>Một bộ tản nhiệt chipset bằng nh&ocirc;m đảm bảo l&agrave;m m&aacute;t tối ưu để c&oacute; hiệu suất ổn định hơn.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3><strong>Cổng kết nối đa dạng, tiện lợi</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN-asus-prime-x670-p-wifi-ddr5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-prime-x670-p-wifi-ddr5-4_ad442867184848b597e9b298d236efa9_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Những d&ograve;ng mainboard ASUS lu&ocirc;n l&agrave; sự lựa chọn h&agrave;ng đầu của nhiều game thủ nhờ v&agrave;o khả năng kết nối ấn tượng, d&ograve;ng mainboard ASUS sẽ đ&aacute;p ứng được y&ecirc;u cầu về cổng kết nối I/O đảm bảo hiệu suất l&agrave;m việc, hỗ trợ tối đa nhu cầu kết nối với c&aacute;c thiết bị ngoại vi như m&agrave;n h&igrave;nh,&nbsp;<a href=\"https://gearvn.com/collections/ban-phim-may-tinh\" target=\"_blank\">b&agrave;n ph&iacute;m</a>,&nbsp;<a href=\"https://gearvn.com/pages/chuot-may-tinh\" target=\"_blank\">chuột m&aacute;y t&iacute;nh</a>,....</p>\r\n\r\n<h3><strong>N&acirc;ng cao hiệu suất DDR5</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN-asus-prime-x670-p-wifi-ddr5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-prime-x670-p-wifi-ddr5-2_763edf9dfaa34486a828dfc9ad0cc528_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&aacute;c t&ugrave;y chọn điều chỉnh bộ nhớ to&agrave;n diện l&agrave; nền tảng của bo mạch chủ PRIME. Với PRIME X670-P WIFI, bạn c&oacute; thể khai th&aacute;c tất cả tiềm năng từ&nbsp;<a href=\"https://gearvn.com/collections/ram-pc-ddr5\" target=\"_blank\">RAM DDR5</a>, mang đến tốc độ nhanh hơn, n&acirc;ng cấp gấp đ&ocirc;i băng th&ocirc;ng v&agrave; giảm năng lượng điện năng ti&ecirc;u thụ. Gi&uacute;p bộ m&aacute;y PC của bạn hoạt động mượt m&agrave; v&agrave; nhẹ nh&agrave;ng.</p>', 1, 0, 7, '2023-11-19 02:00:13', '2023-11-22 15:46:50'),
                                                                                                                                                                     (24, 'ASUS ROG MAXIMUS Z690 HERO DDR5', 'asus-rog-maximus-z690-hero-ddr5', 2, 15999000.00, 0.00, 'az690hero.jpg', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết mainboard ASUS ROG MAXIMUS Z690 HERO DDR5</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Tăng cường sức mạnh &eacute;p xung với DDR5</strong></h3>\r\n\r\n<p>Mainboard&nbsp;<strong>ASUS ROG MAXIMUS Z690 HERO</strong>&nbsp;được trang bị khả năng hỗ trợ chuẩn&nbsp;<a href=\"https://gearvn.com/collections/ram-pc\">RAM</a>&nbsp;mới nhất hiện nay,&nbsp;<a href=\"https://gearvn.com/collections/ram-pc-ddr5\">DDR5</a>. Kh&ocirc;ng chỉ sở hữu tốc độ xử l&yacute; vượt trội với DDR4 m&agrave; c&ograve;n đem tới khả năng &eacute;p xung tuyệt vời tr&ecirc;n chiếc bo mạch chủ từ ASUS cho những bộ&nbsp;<a href=\"https://gearvn.com/pages/pc-gvn\">PC Gaming</a>.</p>\r\n\r\n<p><img alt=\"GEARVN.COM - ASUS ROG MAXIMUS Z690 HERO DDR5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-rog-maximus-z690-hero-10_80376cb85a23492589203beacf2fbbaa_1024x1024.jpg\" /></p>\r\n\r\n<h3><strong>Khả năng tản nhiệt tối ưu</strong></h3>\r\n\r\n<p>Khả năng khai th&aacute;c sức mạnh của ASUS ROG MAXIMUS Z690 HERO được g&oacute;p phần bởi hiệu quả tản nhiệt. Trang bị chipset tản nhiệt c&ugrave;ng d&agrave;n VRM chất lượng, ASUS ROG MAXIMUS Z690 HERO đem lại sự c&acirc;n bằng ho&agrave;n hảo khối lượng tr&ecirc;n bề mặt của mainboard. Bạn c&oacute; thể thoải m&aacute;i lắp đặt những bộ&nbsp;<a href=\"https://gearvn.com/collections/tan-nhiet-nuoc-240mm\">tản nhiệt AIO</a>&nbsp;hoặc tản nhiệt kh&iacute; tr&ecirc;n chiếc bo mạch chủ n&agrave;y.</p>\r\n\r\n<p><img alt=\"GEARVN.COM - ASUS ROG MAXIMUS Z690 HERO DDR5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-rog-maximus-z690-hero-11_ce633636db9b4c2d86c73f96bef066b3.jpg\" /></p>\r\n\r\n<h3><strong>Kết nối si&ecirc;u tốc độ&nbsp;</strong></h3>\r\n\r\n<p>Mang trong m&igrave;nh d&ograve;ng m&aacute;u Z690, ASUS ROG MAXIMUS Z690 HERO cũng được sở hữu những c&ocirc;ng nghệ kết nối mới nhất hiện nay, bao gồm:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Intel WiFi 6E (GIG+) v&agrave; Intel 2.5Gb Ethernet: ASUS ROG MAXIMUS Z690 HERO cho khả năng kết nối internet vượt bậc c&ugrave;ng c&ocirc;ng nghệ Intel 2.5Gb Ethernet. Ngo&agrave;i ra, chiếc mainboard c&ograve;n hỗ trợ bạn kết nối wifi c&ugrave;ng c&ocirc;ng nghệ WiFi 6E mới nhất hiện, cung cấp băng th&ocirc;ng lớn gấp 3 lần.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN.COM - ASUS ROG MAXIMUS Z690 HERO DDR5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-rog-maximus-z690-hero-12_3ea1447983a843f7aab00d34b3f9c76b_1024x1024.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>USB 3.2 Gen2x2 Type-C: Cổng USB 3.2 Gen2x2 tr&ecirc;n ASUS ROG MAXIMUS Z690 HERO đem lại tốc độ truyền dữ liệu l&ecirc;n đến 20Gbps. Kh&ocirc;ng những vậy, cổng USB được bổ trợ th&ecirc;m c&ocirc;ng nghệ Quick Charge 4+ đem lại khả năng sạc nhanh cho c&aacute;c thiết bị.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN.COM - ASUS ROG MAXIMUS Z690 HERO DDR5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-rog-maximus-z690-hero-13_d6264fa6ab71490a85cb1379bd637fe5.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Thunderbolt 4: 2 cổng Thunderbolt 4 tr&ecirc;n ASUS ROG MAXIMUS Z690 HERO cung cấp khả năng kết nối 2 chiều với tốc độ l&ecirc;n đến 40Gbps. Ngo&agrave;i ra, Thunderbolt 4 hỗ trợ tối đa 2 m&agrave;n h&igrave;nh 4K v&agrave; mở rộng băng th&ocirc;ng PCIe l&ecirc;n đến 32Gbps.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN.COM - ASUS ROG MAXIMUS Z690 HERO DDR5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-rog-maximus-z690-hero-14_f4405dea3c3548b7aeeac2287ea1dad6.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Lưu trữ với 3 khe M.2: ASUS ROG MAXIMUS Z690 HERO trang bị 3 khe cắm M.2 c&ugrave;ng 2 khe SSD PCIe 4.0, bạn c&oacute; thể thoải m&aacute;i sắm những kho lưu trữ với những chuẩn mới nhất hiện nay.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN.COM - ASUS ROG MAXIMUS Z690 HERO DDR5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-rog-maximus-z690-hero-15_b41507e52beb4f61b7b1d24e20307349.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>ROG HYPER M.2 CARD PCIE 5.0 READY: Đ&acirc;y l&agrave; phụ kiện đ&oacute;ng vai tr&ograve; như l&agrave; một bộ nhớ lưu trữ đi k&egrave;m. ROG HYPER M.2 đi k&egrave;m với 2 khe cắm, 1 trong số đ&oacute; l&agrave; PCIe 5.0 cho tốc độ đọc, truyền dữ liệu vượt trội PCIe 4.0.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN.COM - ASUS ROG MAXIMUS Z690 HERO DDR5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-rog-maximus-z690-hero-16_04f8c496bef64be9badbcf9284dd1aa5.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>ROG SupremeFX: Trang bị ROG SupremeFX, ASUS ROG MAXIMUS Z690 HERO cho tỉ lệ signal-to-noise vượt 113 dB cho chất lượng thu &acirc;m tốt nhất. Ngo&agrave;i ra c&ograve;n c&oacute; một bộ điều chỉnh độ trễ thấp để ph&acirc;n phối điện năng sạch hơn đến codec SupremeFX ALC4082 v&agrave; DAC t&iacute;ch hợp ESS &reg; 9018Q2C c&oacute; khả năng đạt đến -115dB THD + N để cung cấp khả năng ph&aacute;t lại, truyền tải những &acirc;m thanh sắc n&eacute;t, ch&acirc;n thực của từng bản nhạc.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN.COM - ASUS ROG MAXIMUS Z690 HERO DDR5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-rog-maximus-z690-hero-17_dc7bd66cf17d421580809fd1da9d537d_1024x1024.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Tối ưu h&oacute;a với những phần mềm đi k&egrave;m</strong></h3>\r\n\r\n<p>Khi sở hữu ASUS ROG MAXIMUS Z690 HERO, đồng nghĩa với việc bạn đang c&oacute; những c&ocirc;ng cụ tuyệt vời nhất từ nh&agrave; ASUS. Từ AI Suite 3 v&agrave; Armory Crate cho bạn khả năng tinh chỉnh tất cả mọi y&ecirc;u cầu với chiếc&nbsp;<a href=\"https://gearvn.com/collections/mainboard-z690\">mainboard Z690</a>, UEFI BIOS đem lại những c&agrave;i đặt s&acirc;u b&ecirc;n trong của bo mạch chủ đến khả năng gi&aacute;m s&aacute;t điện &aacute;p, tr&aacute;nh những sự cố về nguồn điện.</p>\r\n\r\n<p><img alt=\"GEARVN.COM - ASUS ROG MAXIMUS Z690 HERO DDR5\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-rog-maximus-z690-hero-02_ab838a48adc0473f969676e15a077fd5.jpg\" /></p>', 1, 1, 6, '2023-11-19 02:09:24', '2023-11-19 02:09:24'),
                                                                                                                                                                     (25, 'Card màn hình MSI GeForce RTX 4060 GAMING X 8G MLG', 'card-man-hinh-msi-geforce-rtx-4060-gaming-x-8g-mlg', 2, 10990000.00, 0.00, 'rtx4060.webp', '<p><strong>MSI GeForce RTX 4060 Gaming X</strong> l&agrave; một trong những card đồ họa thiết kế t&ugrave;y chỉnh nhanh nhất v&agrave; cao cấp nhất tr&ecirc;n thị trường hiện nay. MSI muốn mang đến cho bạn một sản phẩm RTX 4060 đầy t&iacute;nh năng m&agrave; kh&ocirc;ng c&oacute; gi&aacute; qu&aacute; gần với gi&aacute; MSRP của RTX 4060 Ti. Gaming X d&agrave;nh cho những người kh&ocirc;ng chỉ muốn hiệu năng v&agrave; t&iacute;nh năng m&agrave; RTX 4060 mang lại, m&agrave; c&ograve;n thiết kế sản phẩm c&oacute; vẻ như thuộc về một ph&acirc;n kh&uacute;c cao hơn, độ ồn của tản nhiệt tốt nhất c&oacute; thể, v&agrave; tất nhi&ecirc;n, đ&egrave;n LED RGB. GeForce RTX 4060 được thiết kế cho việc chơi game ở mức tối đa ở độ ph&acirc;n giải 1080p, bạn c&oacute; thể chơi ở cả 1440p nếu bạn biết c&aacute;ch điều chỉnh c&agrave;i đặt của tr&ograve; chơi, sử dụng GeForce Experience, hoặc tận dụng c&aacute;c t&iacute;nh năng như DLSS.</p>\r\n\r\n<p>GeForce RTX 4060 được định vị chắc chắn trong d&ograve;ng RTX 40-series mới nhất, v&agrave; dựa tr&ecirc;n kiến tr&uacute;c đồ họa Ada Lovelace mới nhất. Điều n&agrave;y mang lại cho bạn hai lợi thế r&otilde; rệt so với c&aacute;c card đồ họa thế hệ trước đ&atilde; tr&agrave;n ngập thị trường với gi&aacute; tương đương. Đầu ti&ecirc;n, bạn nhận được DLSS 3 Frame Generation, một t&iacute;nh năng đột ph&aacute; gi&uacute;p gần nh&acirc;n đ&ocirc;i hiệu năng bằng c&aacute;ch tạo ra c&aacute;c khung h&igrave;nh thay thế ho&agrave;n to&agrave;n bằng tr&iacute; tuệ nh&acirc;n tạo, v&agrave; kh&ocirc;ng li&ecirc;n quan đến cơ chế kết xuất đồ họa th&ocirc;ng thường. V&agrave; thứ hai, v&igrave; RTX 4060 sử dụng quy tr&igrave;nh nh&agrave; m&aacute;y 5 nm EUV mới nhất, bạn c&oacute; thể mong đợi một bước nhảy vọt về hiệu quả năng lượng theo thế hệ, với NVIDIA đ&aacute;nh gi&aacute; RTX 4060 c&oacute; c&ocirc;ng suất đồ họa ti&ecirc;u biểu chỉ 115 W, khoảng 50% thấp hơn so với RTX 3060.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kh&ocirc;ng giống như RTX 4060 Ti mới ra mắt gần đ&acirc;y đ&atilde; gần như khai th&aacute;c tối đa con chip AD106, RTX 4060 mới dựa tr&ecirc;n một con chip nhỏ hơn về mặt vật l&yacute;, AD107, m&agrave; n&oacute; khai th&aacute;c tối đa, k&iacute;ch hoạt tất cả 24 bộ xử l&yacute; luồng (SM) hiện c&oacute;. Bạn nhận được 3.072 CUDA core, 96 Tensor core, 24 RT core, v&agrave; 96 TMU. Con chip được trang bị 48 ROP. Hệ thống bộ nhớ chủ yếu tương tự như của RTX 4060 Ti - bạn nhận được 8 GB bộ nhớ GDDR6 tr&ecirc;n giao diện bộ nhớ 128 bit. Đ&acirc;y l&agrave; một ch&uacute;t chậm hơn so với Ti, với tốc độ dữ liệu 17 Gbps, so với 18 Gbps. Bộ nhớ đệm L2 tr&ecirc;n chip cũng nhỏ hơn, chỉ 24 MB, so với 32 MB tr&ecirc;n RTX 4060 Ti. Bộ nhớ đệm n&agrave;y l&agrave; điều cho ph&eacute;p NVIDIA sử dụng giao diện bộ nhớ hẹp hơn theo thế hệ, v&igrave; n&oacute; giảm số lần đi v&agrave; về đến bộ nhớ video.</p>\r\n\r\n<p>MSI RTX 4060 Gaming X l&agrave; card đồ họa nhanh nhất của c&ocirc;ng ty dựa tr&ecirc;n con chip n&agrave;y. N&oacute; sử dụng giải ph&aacute;p l&agrave;m m&aacute;t Twin Frozr 9 mới nhất của c&ocirc;ng ty. Bộ l&agrave;m m&aacute;t n&agrave;y c&oacute; một tản nhiệt l&agrave;m bằng nh&ocirc;m, với ống dẫn nhiệt Core Pipe được l&agrave;m phẳng ở tấm đế đồng, cho khả năng truyền nhiệt vượt trội, quạt TorX Fan 5.0 ti&ecirc;n tiến nhất của c&ocirc;ng ty với c&aacute;nh quạt c&oacute; mạng v&agrave; bạc đạn k&eacute;p, v&agrave; logo MSI ph&aacute;t s&aacute;ng ở ph&iacute;a tr&ecirc;n. Gaming X c&oacute; tần số xung nhịp cao nhất của c&ocirc;ng ty cho RTX 4060, với tần số tăng tốc được đặt ở 2595 MHz (so với 2460 MHz tham chiếu), trong khi để bộ nhớ kh&ocirc;ng động ở 17 Gbps. MSI định gi&aacute; RTX 4060 Gaming X ở mức 330 đ&ocirc; la.</p>', 1, 1, 1, '2023-11-19 02:20:59', '2023-11-23 12:48:19'),
                                                                                                                                                                     (26, 'Card màn hình ASUS Dual GeForce RTX 3060 8GB GDDR6', 'card-man-hinh-asus-dual-geforce-rtx-3060-8gb-gddr6', 2, 7590000.00, 3400000.00, 'rtx3060.webp', '<h2><strong>VGA ASUS Dual GeForce RTX 3060 OC 8GB GDDR6 (DUAL-RTX3060-O8G)</strong></h2>\r\n\r\n<p>Khi đa phần những chiếc Card đồ họa RTX3060 đều c&oacute; k&iacute;ch thước kh&aacute; lớn với 3 Fan,&nbsp;<strong>&nbsp;ASUS Dual GeForce RTX 3060 OC 8GB GDDR6</strong>&nbsp;ch&iacute;nh l&agrave; giải ph&aacute;p tối ưu cho những anh em sử dụng Case m&aacute;y t&iacute;nh nhỏ với thiết kế 2 Fan nhỏ gọn m&agrave; hiệu năng kh&ocirc;ng hề giảm s&uacute;t. C&ugrave;ng&nbsp;<a href=\"https://www.anphatpc.com.vn/\" target=\"_blank\">An Ph&aacute;t Computer</a>&nbsp;điểm qua những điểm đ&aacute;ng ch&uacute; &yacute; của chiếc&nbsp;<a href=\"https://www.anphatpc.com.vn/vga-asus.html\" target=\"_blank\">Card đồ họa Asus</a>&nbsp;n&agrave;y qua b&agrave;i viết dưới đ&acirc;y.</p>\r\n\r\n<h2><strong>Tản nhiệt hiệu quả</strong></h2>\r\n\r\n<p>Thiết kế&nbsp;Axial-tech Fan cho khả năng tản nhiệt cực kỳ ấn tượng.&nbsp;Hai quạt c&ocirc;ng nghệ hướng trục đ&atilde; được thử nghiệm v&agrave; th&agrave;nh c&ocirc;ng c&oacute; trục nhỏ hơn tạo điều kiện cho c&aacute;c c&aacute;nh quạt d&agrave;i hơn v&agrave; v&ograve;ng chắn để tăng &aacute;p suất kh&ocirc;ng kh&iacute; đi xuống.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chế độ 0dB đ&uacute;ng như t&ecirc;n gọi của n&oacute;,&nbsp;chế độ dừng th&ocirc;ng minh sẽ tạm&nbsp;ngưng hoạt động&nbsp;tất cả c&aacute;c quạt khi nhiệt độ GPU giảm xuống dưới 50 độ v&agrave; mức ti&ecirc;u thụ điện năng thấp&nbsp;tạo ra sự &ecirc;m &aacute;i tối đa trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n\r\n<p>Bố cục tấm che, tản nhiệt v&agrave; ống dẫn nhiệt được thiết kế cẩn thận cho ph&eacute;p hai quạt c&ocirc;ng nghệ Axial tận dụng hệ thống th&ocirc;ng gi&oacute; ở mặt b&ecirc;n khung m&aacute;y v&agrave; mang lại hiệu suất nhiệt ph&ugrave; hợp với k&iacute;ch thước của card.</p>\r\n\r\n<h2><strong>C&ocirc;ng nghệ sản xuất tự động đạt độ chuẩn x&aacute;c tuyệt đối</strong></h2>\r\n\r\n<p>C&ocirc;ng nghệ Auto-Extreme l&agrave; một quy tr&igrave;nh sản xuất tự động thiết lập c&aacute;c ti&ecirc;u chuẩn mới trong ng&agrave;nh bằng c&aacute;ch cho ph&eacute;p ho&agrave;n th&agrave;nh tất cả qu&aacute; tr&igrave;nh h&agrave;n trong một lần. Điều n&agrave;y l&agrave;m giảm căng thẳng nhiệt tr&ecirc;n c&aacute;c bộ phận v&agrave; tr&aacute;nh sử dụng h&oacute;a chất tẩy rửa mạnh, dẫn đến &iacute;t t&aacute;c động đến m&ocirc;i trường hơn, ti&ecirc;u thụ điện năng sản xuất thấp hơn v&agrave; tổng thể sản phẩm đ&aacute;ng tin cậy hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dlcdnwebimgs.asus.com/files/media/f25a812a-b140-4eea-8306-0b614031c7cb/v1/img/kv.png\" style=\"width:700px\" /></p>\r\n\r\n<h2><strong>Bảo vệ chắc chắn</strong></h2>\r\n\r\n<p>PCB được gia cố bằng một tấm ốp lưng bằng nh&ocirc;m gi&uacute;p tăng th&ecirc;m độ cứng cho cấu tr&uacute;c, gi&uacute;p ngăn ngừa uốn cong v&agrave; bảo vệ c&aacute;c th&agrave;nh phần cũng như đường dẫn khỏi bị hư hại.</p>\r\n\r\n<p>Phần gi&aacute; đỡ của ASUS Dual GeForce RTX 3060 OC 8GB GDDR6&nbsp;đ&atilde; được tăng cường bằng Th&eacute;p kh&ocirc;ng gỉ 304 cứng hơn v&agrave; c&oacute; khả năng chống ăn m&ograve;n cao hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://anphat.com.vn/media/product/44588_vga_asus_dual_geforce_rtx_3060_oc_8gb_gddr6_6.jpg\" style=\"width:700px\" /></p>\r\n\r\n<h2><strong>C&ocirc;ng nghệ hiện đại</strong></h2>\r\n\r\n<p>Kiến tr&uacute;c Ampere l&agrave; nền tảng vững chắc để tạo l&ecirc;n một chiếc RTX3060 ho&agrave;n hảo.&nbsp;Ampere SM ho&agrave;n to&agrave;n mới mang lại th&ocirc;ng lượng FP32 gấp 2 lần v&agrave; hiệu suất năng lượng được cải thiện.</p>\r\n\r\n<p><img alt=\"\" src=\"https://dlcdnwebimgs.asus.com/files/media/f25a812a-b140-4eea-8306-0b614031c7cb/v1/img/nvidia/1.jpg\" /></p>\r\n\r\n<p>L&otilde;i RT thế hệ thứ 2 cho hiệu quả d&ograve; tia vượt trội hơn hẳn khi s&ocirc; s&aacute;nh với thế hệ tiền nhiệm. Khả năng t&aacute;i tạo lại &aacute;nh s&aacute;ng, đổ b&oacute;ng của RayTracing tr&ecirc;n chiếc RTX3060 n&agrave;y l&agrave; cực kỳ ấn tượng.</p>\r\n\r\n<p>L&otilde;i Tensor thế hệ thứ 3 tăng gấp đ&ocirc;i th&ocirc;ng lượng với cấu tr&uacute;c thưa thớt v&agrave; c&aacute;c thuật to&aacute;n AI ti&ecirc;n tiến như DLSS. C&aacute;c l&otilde;i n&agrave;y gi&uacute;p tăng hiệu suất tr&ograve; chơi v&agrave; c&aacute;c khả năng AI ho&agrave;n to&agrave;n mới. DLSS l&agrave; c&ocirc;ng nghệ kết xuất AI đột ph&aacute; sẽ gi&uacute;p lượng khung h&igrave;nh tr&ecirc;n gi&acirc;y v&agrave; cả chất lượng h&igrave;nh ảnh trong Game của bạn được cải thiện đ&aacute;ng kể.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.vox-cdn.com/uploads/chorus_asset/file/24038618/Screen_Shot_2022_09_20_at_4.34.40_PM.jpg\" style=\"width:700px\" /></p>\r\n\r\n<p>C&ocirc;ng nghệ NVIDIA G-Sync mang lại lợi thế cho bạn trong c&aacute;c tựa Game đối kh&aacute;ng với tốc độ phản hồi nhanh hơn, độ trễ thấp hơn, độ ch&iacute;nh x&aacute;c cao hơn.</p>\r\n\r\n<p>Với phi&ecirc;n bản n&agrave;y,&nbsp;ASUS Dual GeForce RTX 3060 OC 8GB GDDR6 được trang bị lu&ocirc;n cả khả năng &eacute;p xung với xung nhịp Boost Clock 1867 MHz (OC Mode)/1837 MHz(Default Mode)</p>\r\n\r\n<h2><strong>Phần mềm hỗ trợ</strong></h2>\r\n\r\n<h2>Đi k&egrave;m với&nbsp;VGA ASUS Dual GeForce RTX 3060 OC 8GB GDDR6 l&agrave; c&aacute;c phần mềm hỗ trợ tới từ Asus.</h2>\r\n\r\n<p><img alt=\"\" src=\"https://anphat.com.vn/media/lib/13-03-2023/gpu3.png\" style=\"width:700px\" /></p>\r\n\r\n<p>Phần mềm&nbsp;GPU TWEAK III</p>\r\n\r\n<p><img alt=\"\" src=\"https://anphat.com.vn/media/lib/13-03-2023/xspit.png\" style=\"width:700px\" /></p>\r\n\r\n<p>Phần mềm XSplit</p>\r\n\r\n<p><img alt=\"\" src=\"https://anphat.com.vn/media/lib/13-03-2023/quantum.png\" style=\"width:700px\" /></p>\r\n\r\n<p>Phần mềm QuantumCloud</p>', 1, 1, 6, '2023-11-19 02:31:10', '2023-11-19 02:40:38'),
                                                                                                                                                                     (27, 'Card màn hình ASUS Dual GeForce RTX 4060 Ti White OC Edition', 'card-man-hinh-asus-dual-geforce-rtx-4060-ti-white-oc-edition', 2, 12190000.00, 10000000.00, 'rtx4060ti.webp', '<h2><strong>Đ&aacute;nh gi&aacute; card đồ họa&nbsp;ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6</strong></h2>\r\n\r\n<p>ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6 mở ra một kỷ nguy&ecirc;n mới của&nbsp;<a href=\"https://gearvn.com/collections/vga-rtx-4060-ti\" target=\"_blank\">card đồ họa RTX 4060Ti</a>. Hoạt động mạnh mẽ với hai quạt c&ocirc;ng nghệ hướng trục, khe cắm 2.5 mở rộng khả năng tương th&iacute;ch. Hứa hẹn sẽ l&agrave; một trong những chiếc card m&agrave;n h&igrave;nh l&agrave;m mưa l&agrave;m gi&oacute; tr&ecirc;n thị trường.&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-dual-geforce-rtx-4060-ti-white-oc-edition-8gb-1_1a662359fd3f4d358a1918ded364d8c1.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Hai quạt mạnh mẽ, nh&acirc;n đ&ocirc;i sức mạnh</strong></h3>\r\n\r\n<p><a href=\"https://gearvn.com/collections/laptop-asus-oled\" target=\"_blank\">ASUS</a>&nbsp;Dual GeForce RTX 4060 Ti sở hữu khả năng&nbsp;<a href=\"https://gearvn.com/collections/tan-nhiet-khi\" target=\"_blank\">tản nhiệt</a>&nbsp;tối t&acirc;n với thiết kế hai quạt. G&oacute;i gọi trong k&iacute;ch thước&nbsp;227.2 x 123.24 x 49.6 mm l&agrave; hai chiếc quạt c&ocirc;ng nghệ hướng trục hiện đại. Hỗ trợ tạo luồng gi&oacute; nhanh hơn để l&agrave;m tốt c&ocirc;ng việc tản nhiệt tr&ecirc;n linh kiện. Vừa mang lại hiệu năng xử l&yacute; đồ họa nhanh ch&oacute;ng vừa kiểm so&aacute;t nhiệt độ ổn định. Đ&acirc;y l&agrave; lựa chọn ho&agrave;n hảo m&agrave; bất kỳ ai cũng ao ước kh&ocirc;ng chỉ ri&ecirc;ng g&igrave; c&aacute;c game thủ.&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-dual-geforce-rtx-4060-ti-white-oc-edition-8gb-3_40042a009723432da6a8c41edc5975e4.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với c&ocirc;ng nghệ hướng trục,&nbsp;ASUS Dual GeForce RTX 4060 Ti nhanh hơn, mạnh mẽ hơn trong việc tản nhiệt.&nbsp;V&ograve;ng chắn gi&uacute;p tăng &aacute;p suất để luồng gi&oacute; được tạo ra d&agrave;i hơn. Thuận tiện cho việc&nbsp;len lỏi v&agrave;o hệ thống.</p>\r\n\r\n<p><img alt=\"GEARVN ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-dual-geforce-rtx-4060-ti-white-oc-edition-8gb-8_8b0296af7cad4906af1d46a55f3d4a04.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&ocirc;ng nghệ 0dB th&ocirc;ng minh gi&uacute;p&nbsp;ASUS Dual GeForce RTX 4060 Ti hoạt động linh hoạt hơn. Khi GPU hoạt động ở nhiệt độ dưới 55 độ quạt sẽ tự động tạm dừng. Loại bỏ tiếng ồn khi d&agrave;n&nbsp;<a href=\"https://gearvn.com/pages/pc-gvn\" target=\"_blank\">PC</a>&nbsp;tải nhẹ.</p>\r\n\r\n<p><img alt=\"GEARVN ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-dual-geforce-rtx-4060-ti-white-oc-edition-8gb-5_ae5300b7637440adba39da7fcc4152f1.png\" /></p>\r\n\r\n<p>Tăng tuổi thọ quạt tr&ecirc;n&nbsp;<a href=\"https://gearvn.com/collections/card-do-hoa-asus\" target=\"_blank\">VGA ASUS</a>&nbsp;Dual GeForce RTX 4060 Ti bằng v&ograve;ng bi quạt k&eacute;p. Đ&acirc;y l&agrave; ổ bi c&oacute; độ bền vượt trội gi&uacute;p chiếc card m&agrave;n h&igrave;nh nh&agrave; ASUS hoạt động y&ecirc;n t&acirc;m hơn.&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-dual-geforce-rtx-4060-ti-white-oc-edition-8gb-6_21935bfd42ee4efab282689137428496.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ASUS Dual GeForce RTX 4060 Ti sắp xếp vị t&iacute; tấm che, tản nhiệt v&agrave; ống dẫn nhiệt cẩn thận. Tận dụng tối đa mọi cơ hội lưu th&ocirc;ng kh&iacute; gi&oacute; ở mặt b&ecirc;n của th&ugrave;ng m&aacute;y để điều chỉnh nhiệt độ ph&ugrave; hợp cho card.&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-dual-geforce-rtx-4060-ti-white-oc-edition-8gb-7_1c3ba83d6c1b46d39f4dcdaf936a6783.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Thiết kế chắc chắn&nbsp;</strong></h3>\r\n\r\n<p>ASUS Dual GeForce RTX 4060 Ti được sản xuất tự động từ&nbsp;c&ocirc;ng nghệ Auto-Extreme. Mọi quy tr&igrave;nh đều được thực hiện theo một quy tr&igrave;nh h&agrave;n khắc khe. Giảm được sự căng thẳng nhiệt l&ecirc;n c&aacute;c bộ phận cũng như tr&aacute;nh lạm dụng c&aacute;c chất tẩy rửa mạnh g&acirc;y ảnh hưởng m&ocirc;i trường.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-dual-geforce-rtx-4060-ti-white-oc-edition-8gb-9_cb3e5ba3b2a84ccab0c0b9dd3d88427a.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tấm ốp bảo vệ được l&agrave;m bằng kim loại nh&ocirc;m chắc chắn để ngăn ngừa việc uốn cong v&agrave; ảnh hướng đến c&aacute;c th&agrave;nh phần kh&aacute;c b&ecirc;n trong&nbsp;ASUS Dual GeForce RTX 4060 Ti. ASUS c&ograve;n t&acirc;m l&yacute; trong việc trang bị th&ecirc;m lỗ th&ocirc;ng hơi rộng ở mặt sau để việc lưu th&ocirc;ng nhiệt dộ b&ecirc;n trong VGA lu&ocirc;n được đảm bảo.&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-dual-geforce-rtx-4060-ti-white-oc-edition-8gb-10_882e7c2c52c24179baa4db253a00575e.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Phần gi&aacute; đỡ tr&ecirc;n&nbsp;ASUS Dual GeForce RTX 4060 Ti sử dụng chất liệu th&eacute;p kh&ocirc;ng gỉ 304. Tạo sự cứng c&aacute;p, chắc chắn v&agrave; chống ăn m&ograve;n theo thời gian.</p>\r\n\r\n<p><img alt=\"GEARVN ASUS Dual GeForce RTX 4060 Ti White OC Edition 8GB GDDR6\" src=\"https://file.hstatic.net/1000026716/file/gearvn-asus-dual-geforce-rtx-4060-ti-white-oc-edition-8gb-11_fc83f1026bef45adb3da607d2ee37641.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Phần mềm điều chỉnh đi k&egrave;m&nbsp;</strong></h3>\r\n\r\n<p>ASUS Dual GeForce RTX 4060 Ti hỗ trợ phần mềm GPU TWEAK III để người d&ugrave;ng dễ d&agrave;ng trong việc gi&aacute;m s&aacute;t hoạt động của&nbsp;<a href=\"https://gearvn.com/collections/vga-card-man-hinh\" target=\"_blank\">VGA</a>. Giao diện trực quan, nhiều t&iacute;nh năng để việc điều chỉnh dễ d&agrave;ng cho người d&ugrave;ng.</p>', 1, 0, 10, '2023-11-19 02:39:08', '2023-11-19 02:40:24'),
                                                                                                                                                                     (28, 'Màn hình Asus TUF GAMING VG249Q3A 24\"', 'man-hinh-asus-tuf-gaming-vg249q3a-24', 3, 3790000.00, 0.00, 'tuf24.webp', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết m&agrave;n h&igrave;nh Asus TUF GAMING VG249Q3A 24&ldquo; Fast IPS 180Hz Gsync chuy&ecirc;n game</strong></h2>\r\n\r\n<p><strong><a href=\"https://gearvn.com/collections/man-hinh-asus\" target=\"_blank\">M&agrave;n h&igrave;nh Asus</a>&nbsp;TUF GAMING VG249Q3A&nbsp;</strong>rộng 24 inch, sử dụng tấm nền IPS, độ ph&acirc;n giải&nbsp;<a href=\"https://gearvn.com/collections/do-phan-giai-full-hd-1080p\" target=\"_blank\">Full HD</a>&nbsp;với tốc độ l&agrave;m mới cực nhanh. M&agrave;n h&igrave;nh được thiết kế d&agrave;nh cho c&aacute;c game thủ chuy&ecirc;n nghiệp v&agrave; những người chơi muốn h&ograve;a m&igrave;nh v&agrave;o c&aacute;c tr&ograve; chơi thực sự. Kh&ocirc;ng chỉ vậy, c&ocirc;ng nghệ ELMB độc quyền cho ph&eacute;p phản hồi 1ms&nbsp;v&agrave; sự kết hợp của c&ocirc;ng nghệ đồng bộ h&oacute;a th&iacute;ch ứng của để&nbsp;mang đến cho người d&ugrave;ng m&agrave;n h&igrave;nh mượt m&agrave; v&agrave; trải nghiệm chơi game tuyệt vời.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình Asus TUF GAMING VG249Q3A 24“ Fast IPS 180Hz Gsync chuyên game\" src=\"https://file.hstatic.net/200000722513/file/an-hinh-asus-tuf-gaming-vg249q3a-24-fast-ips-180hz-gsync-chuyen-game-1_3992aef2c7bb4437a4aa6ca9b86bb5eb.png\" /></p>\r\n\r\n<h3><strong>M&agrave;n h&igrave;nh 24 inch với tấm nền IPS hiển thị m&agrave;u sắc tốt hơn</strong></h3>\r\n\r\n<p>M&agrave;n h&igrave;nh Asus TUF GAMING VG249Q1A sở hữu m&agrave;n h&igrave;nh k&iacute;ch thước&nbsp;<a href=\"https://gearvn.com/collections/man-hinh-24-inch\" target=\"_blank\">24 inch</a>, tấm nền IPS, độ ph&acirc;n giải Full HD (1920 x&nbsp;1080) mang đến h&igrave;nh ảnh r&otilde; n&eacute;t từ mọi g&oacute;c độ. M&agrave;n h&igrave;nh g&oacute;c rộng 178 độ đảm bảo hạn chế thấp nhất sự biến dạng v&agrave; thay đổi m&agrave;u sắc ngay cả khi bạn đang đứng c&aacute;ch xa m&agrave;n h&igrave;nh.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình Asus TUF GAMING VG249Q3A 24\" src=\"https://file.hstatic.net/200000722513/file/hinh-asus-tuf-gaming-vg249q3a-24-fast-ips-180hz-gsync-chuyen-game-__3__5775862b4e60474cbb935948b89f7a9d_1024x1024.jpg\" /></p>\r\n\r\n<h3><strong>Tốc độ l&agrave;m mới 180Hz si&ecirc;u nhanh</strong></h3>\r\n\r\n<p>Tốc độ l&agrave;m mới cũng được &eacute;p xung l&ecirc;n đến 180Hz gi&uacute;p loại trừ khả năng bị giật, lag m&agrave;n h&igrave;nh v&agrave; mang đến cho bạn ưu thế trong c&aacute;c tựa game bắn s&uacute;ng, đua xe, chiến lược thời gian thực v&agrave; thể thao. Tốc độ l&agrave;m mới n&agrave;y cho ph&eacute;p bạn chơi game với cấu h&igrave;nh h&igrave;nh ảnh ở mức cao nhất v&agrave; phản ứng tức th&igrave; với những nội dung hiện tr&ecirc;n m&agrave;n h&igrave;nh.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình Asus TUF GAMING VG249Q3A 24\" src=\"https://file.hstatic.net/200000722513/file/inh-asus-tuf-gaming-vg249q3a-24-fast-ips-180hz-gsync-chuyen-game-__10__114aefe7bab84f1eb3b90c317c84bc27_1024x1024.jpg\" /></p>\r\n\r\n<h3><strong>Trải nghiệm chơi game mượt m&agrave;</strong></h3>\r\n\r\n<p>Asus TUF GAMING VG249Q3A sở hữu c&ocirc;ng nghệ ELMB độc quyền mới nhất của ASUS - L&agrave;m mờ chuyển động cực thấp ELMB (Extreme Low Motion Blur), c&ugrave;ng thời gian phản hồi 1ms GtG, loại bỏ hiện tượng nh&ograve;e m&agrave;n h&igrave;nh v&agrave; chuyển động chậm. Đồng thời, n&oacute; cũng l&agrave;m cho c&aacute;c đối tượng chuyển động r&otilde; r&agrave;ng v&agrave; sắc n&eacute;t hơn. Nhờ đ&oacute;, tr&ograve; chơi hiển thị cũng sẽ mượt m&agrave; v&agrave; đẹp mắt hơn.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình Asus TUF GAMING VG249Q3A 24\" src=\"https://file.hstatic.net/200000722513/file/inh-asus-tuf-gaming-vg249q3a-24-fast-ips-180hz-gsync-chuyen-game-__11__589d1e2097754b01ba0c56c75335f8e7_1024x1024.jpg\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Asus TUF GAMING VG249Q3A c&ograve;n được trang bị c&ocirc;ng nghệ đồng bộ h&oacute;a th&iacute;ch ứng từ AMD - AMD Freesync, hạn chế tối đa t&igrave;nh trạng x&eacute; m&agrave;n h&igrave;nh, giật lag thường thấy ở những&nbsp;<a href=\"https://gearvn.com/pages/man-hinh\" target=\"_blank\">m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh</a>&nbsp;th&ocirc;ng thường, mang đến trải nghiệm chơi game tuyệt vời cho game thủ.</p>\r\n\r\n<h3><strong>Thiết kế m&agrave;n h&igrave;nh&nbsp;ấn tượng</strong></h3>\r\n\r\n<p>M&agrave;n h&igrave;nh Asus TUF GAMING VG249Q3A mang vẻ ngo&agrave;i cứng c&aacute;p, năng động v&igrave; được lấy cảm hứng thiết kế từ m&aacute;y bay chiến đấu t&agrave;ng h&igrave;nh. Bảng điều khiển ph&iacute;a sau c&oacute; c&aacute;c chi tiết giống như h&igrave;nh đ&ocirc;i c&aacute;nh tạo cảm gi&aacute;c tốc độ cho người d&ugrave;ng. Ch&acirc;n đế nhỏ gọn, tối giản đảm bảo sự ổn định nhưng vẫn kh&ocirc;ng k&eacute;m phần sang trọng.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình Asus TUF GAMING VG249Q3A 24\" src=\"https://file.hstatic.net/200000722513/file/hinh-asus-tuf-gaming-vg249q3a-24-fast-ips-180hz-gsync-chuyen-game-__4__a44a820ddf6b449c9247890b0a8cd438_1024x1024.jpg\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, Asus TUF GAMING VG249Q3A c&ograve;n t&iacute;ch hợp một số c&ocirc;ng nghệ ti&ecirc;n tiến kh&aacute;c như Shadow Boost gi&uacute;p n&acirc;ng cao chất lượng h&igrave;nh ảnh hiển thị ở những v&ugrave;ng tối m&agrave; vẫn tr&aacute;nh được t&igrave;nh trạng bị phơi s&aacute;ng qu&aacute; nhiều ở những v&ugrave;ng s&aacute;ng hay cổng kết nối đa dạng bao gồm DisplayPort 1.2, hai cổng HDMI (V1.4) v&agrave; jack cắm 3,5mm gi&uacute;p bạn c&oacute; thể kết nối với nhiều thiết bị kh&aacute;c nhau v&agrave; mang đến trải nghiệm tuyệt vời nhất.</p>', 1, 1, 7, '2023-11-19 02:51:14', '2023-11-22 15:46:23'),
                                                                                                                                                                     (29, 'Màn hình ACER VG270 S 27\"', 'man-hinh-acer-vg270-s-27', 3, 4390000.00, 4000000.00, 'acerg27.jpg', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết m&agrave;n h&igrave;nh m&agrave;n h&igrave;nh ACER VG270 S 27&quot; IPS 165Hz chuy&ecirc;n game</strong></h2>\r\n\r\n<h3><strong>Thiết kế nổi bật, chơi game vượt trội</strong></h3>\r\n\r\n<p>Một m&agrave;n h&igrave;nh với thiết kế nổi bật, ch&acirc;n đế nhỏ gọn v&agrave; khả năng chơi game vượt trội nhờ tần số qu&eacute;t cao 165Hz đi k&egrave;m khả năng đồng bộ với AMD FreeSync chống x&eacute; h&igrave;nh đảm bảo mượt m&agrave; khi trải nghiệm gaming v&agrave; sử dụng.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-man-hinh-acer-vg270-s-27-ips-165hz-freesync-chuyen-game-01_f7dcce0e03184009b81d2feffe30e3ce.jpg\" /></p>\r\n\r\n<h3><strong>Hiệu năng vượt trội</strong></h3>\r\n\r\n<p>Với khả năng hiển thị m&agrave;u sắc ch&iacute;nh x&aacute;c sắc n&eacute;t v&agrave; c&oacute; g&oacute;c nh&igrave;n rộng nhờ tấm nền IPS, độ phủ m&agrave;u đến 98%sRGB đảm bảo mọi m&agrave;u sắc hiển thị ch&iacute;nh x&aacute;c v&agrave; ch&acirc;n thực cung cấp một c&aacute;i nh&igrave;n to&agrave;n diện v&agrave; thoải m&aacute;i cho game thủ. Khả năng đồng bộ FreeSync l&agrave; một điểm cộng khi m&agrave;n h&igrave;nh c&oacute; khả năng đồng bộ v&agrave; chống x&eacute; h&igrave;nh đem lại h&igrave;nh ảnh mượt m&agrave; v&agrave; ch&acirc;n thực nhất với độ trễ cực thấp chỉ 2ms chuẩn gaming gi&uacute;p bạn chiến thắng mọi tựa game.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-man-hinh-acer-vg270-s-27-ips-165hz-freesync-chuyen-game-02_a2f51c0fe99c4c2a840aa2131d467661_1024x1024.png\" /></p>\r\n\r\n<p><strong>Đa dạng kết nối</strong></p>\r\n\r\n<p>M&agrave;n h&igrave;nh với kết nối đa dạng gồm HDMI,DP&nbsp;hỗ trợ dễ d&agrave;ng kết nối với mọi m&aacute;y t&iacute;nh, laptop. Thoải m&aacute;i sử dụng v&agrave; đồng bộ cao với hệ thống của bạn.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-man-hinh-acer-vg270-s-27-ips-165hz-freesync-chuyen-game-03_6e2e87b6c17d4e5cbd12392454cf7f61_1024x1024.png\" /></p>\r\n\r\n<h3><strong>Cực mỏng v&agrave; tối&nbsp;ưu</strong></h3>\r\n\r\n<p>M&agrave;n h&igrave;nh với độ mỏng tối ưu g&oacute;c l&agrave;m việc cũng như gaming của bạn. Dễ d&agrave;ng thiết lập v&agrave; ph&ugrave; hợp với mọi g&oacute;c m&aacute;y của bạn.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-man-hinh-acer-vg270-s-27-ips-165hz-freesync-chuyen-game-04_b8c233583fa14151bc88d16d3828a4ac_1024x1024.png\" /></p>\r\n\r\n<h3><strong>Lời kết :</strong></h3>\r\n\r\n<p>Bạn đang t&igrave;m kiếm một m&agrave;n h&igrave;nh chơi game 27&nbsp;inch nhỏ gọn với thiết kế tinh tế, mỏng nhẹ những vẫn đậm chất gaming th&igrave; đ&acirc;y ch&iacute;nh l&agrave; sản phẩm d&agrave;nh cho bạn.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-man-hinh-acer-vg270-s-27-ips-165hz-freesync-chuyen-game-02_a2f51c0fe99c4c2a840aa2131d467661_1024x1024.png\" /></p>', 1, 1, 10, '2023-11-19 02:59:02', '2023-11-19 02:59:02'),
                                                                                                                                                                     (30, 'Màn hình MSI PRO MP223 22\"', 'man-hinh-msi-pro-mp223-22', 3, 1990000.00, 1690000.00, 'msi22.webp', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết m&agrave;n h&igrave;nh MSI PRO MP223 22&ldquo; 100Hz</strong></h2>\r\n\r\n<p><strong><a href=\"https://gearvn.com/collections/man-hinh-msi\" target=\"_blank\">M&agrave;n h&igrave;nh MSI</a>&nbsp;PRO MP223</strong>&nbsp;sở hữu k&iacute;ch thước&nbsp;<a href=\"https://gearvn.com/collections/man-hinh-22-inch\" target=\"_blank\">m&agrave;n h&igrave;nh 22 inch</a>&nbsp;nhỏ gọn, ph&ugrave; hợp với mọi kh&ocirc;ng gian l&agrave;m việc. M&agrave;n h&igrave;nh c&ograve;n được trang bị nhiều c&ocirc;ng nghệ m&agrave;n h&igrave;nh hiện đại để tối ưu h&oacute;a trải nghiệm của người d&ugrave;ng. Với mức gi&aacute; dễ tiếp cận, MSI PRO MP223 chắc chắn trở th&agrave;nh trợ thủ đắc lực của mọi người d&ugrave;ng phổ th&ocirc;ng.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình MSI PRO MP223 22“ 100Hz\" src=\"https://file.hstatic.net/200000722513/file/gearvn-man-hinh-msi-pro-mp223-22-100hz-1_1d21e99af2bb4a8ca786b76015d89697.png\" /></p>\r\n\r\n<h3><strong>C&ocirc;ng nghệ EyesErgo hiện đại bậc nhất</strong></h3>\r\n\r\n<p>M&agrave;n h&igrave;nh MSI PRO MP223 được trang bị t&iacute;nh năng bảo vệ mắt độc quyền từ MSI, hạn chế t&igrave;nh trạng nhấp nh&aacute;y thường thấy ở những m&agrave;n h&igrave;nh phổ th&ocirc;ng kh&aacute;c. B&ecirc;n cạnh đ&oacute;, MSI PRO MP223 c&ograve;n giảm thiểu lượng &aacute;nh s&aacute;ng xanh tiềm ẩn g&acirc;y hại cho mắt v&agrave; hạn chế t&igrave;nh trạng đau mỏi mắt khi phải tiếp x&uacute;c với&nbsp;<a href=\"https://gearvn.com/pages/man-hinh\" target=\"_blank\">m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh</a>&nbsp;qu&aacute; l&acirc;u.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình MSI PRO MP223 22“ 100Hz\" src=\"https://file.hstatic.net/200000722513/file/gearvn-man-hinh-msi-pro-mp223-22-100hz-6_6a786671375c48c3922b66632105bf5e_1024x1024.png\" /></p>\r\n\r\n<h3><strong>G&oacute;c nh&igrave;n m&agrave;n h&igrave;nh rộng v&agrave; bao qu&aacute;t</strong></h3>\r\n\r\n<p>MSI PRO MP223 được trang bị m&agrave;n h&igrave;nh k&iacute;ch thước 22 inch, độ ph&acirc;n giải&nbsp;<a href=\"https://gearvn.com/collections/do-phan-giai-full-hd-1080p\" target=\"_blank\">Full HD</a>&nbsp;dưới tấm nền VA. M&agrave;n h&igrave;nh sở hữu g&oacute;c nh&igrave;n rộng l&ecirc;n đến 178 độ cả chiều dọc lẫn chiều ngang, mang đến h&igrave;nh ảnh hiển thị sắc n&eacute;t v&agrave; ch&acirc;n thật đến từng chi tiết.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình MSI PRO MP223 22“ 100Hz\" src=\"https://file.hstatic.net/200000722513/file/gearvn-man-hinh-msi-pro-mp223-22-100hz-7_f3064b2fba3c47e79deeb6433d561e43_1024x1024.png\" /></p>\r\n\r\n<h3><strong>Thiết kế m&agrave;n h&igrave;nh basic nhưng v&ocirc; c&ugrave;ng hiện đại</strong></h3>\r\n\r\n<p>V&igrave; thuộc ph&acirc;n kh&uacute;c m&agrave;n h&igrave;nh gi&aacute; rẻ n&ecirc;n MSI PRO MP223 sở hữu ngoại h&igrave;nh kh&aacute; basic với t&ocirc;ng m&agrave;u đen chủ đạo, ph&ugrave; hợp với mọi kh&ocirc;ng gian l&agrave;m việc của bạn. Ba viền m&agrave;n h&igrave;nh si&ecirc;u mỏng gi&uacute;p mang đến trải nghiệm h&igrave;nh ảnh tốt hơn. Thiết kế c&ocirc;ng th&aacute;i học cho ph&eacute;p người d&ugrave;ng điều chỉnh g&oacute;c nghi&ecirc;ng m&agrave;n h&igrave;nh để bạn t&igrave;m được g&oacute;c nh&igrave;n tốt nhất.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình MSI PRO MP223 22“ 100Hz\" src=\"https://file.hstatic.net/200000722513/file/gearvn-man-hinh-msi-pro-mp223-22-100hz-8_be817bb6c548493b9450d3b5d5f953c6_1024x1024.png\" /></p>\r\n\r\n<h3><strong>T&ugrave;y biến dễ d&agrave;ng với MSI PRO MP223</strong></h3>\r\n\r\n<p>H&ocirc; biến MSI PRO MP223 th&agrave;nh bộ m&aacute;y t&iacute;nh AIO khi kết hợp c&ugrave;ng&nbsp;<a href=\"https://gearvn.com/collections/may-bo-mini\" target=\"_blank\">mini PC</a>, với sản phẩm đến từ nh&agrave; rồng, Mini PC Cubi Series. Tăng cường khả năng điều chỉnh MSI PRO MP223 c&ugrave;ng gi&aacute; đỡ MSI VESA Arm MT81, cho bạn dễ d&agrave;ng t&ugrave;y chỉnh g&oacute;c quan s&aacute;t tr&ecirc;n m&agrave;n h&igrave;nh.</p>\r\n\r\n<p><img alt=\"GEARVN - Màn hình MSI PRO MP223 22“ 100Hz\" src=\"https://file.hstatic.net/200000722513/file/gearvn-man-hinh-msi-pro-mp223-22-100hz-9_6ae467c4b0de4b99940a43153c0bca95_1024x1024.png\" /></p>\r\n\r\n<p>N&acirc;ng cao năng suất l&agrave;m việc tr&ecirc;n m&agrave;n h&igrave;nh MSI PRO MP223 với khả năng gh&eacute;p đ&ocirc;i khi kết nối 2 m&agrave;n h&igrave;nh c&ugrave;ng l&uacute;c. Nhờ vậy, bạn sẽ tối ưu h&oacute;a được năng suất l&agrave;m việc, tiết kiệm thời gian ho&agrave;n th&agrave;nh c&ocirc;ng việc.</p>\r\n\r\n<h3><strong>Ứng dụng th&acirc;n thiện với người d&ugrave;ng</strong></h3>\r\n\r\n<p>Phần mềm đi k&egrave;m với m&agrave;n h&igrave;nh MSI PRO MP223 được thiết kế với giao diện th&acirc;n thiện từ font chữ, m&agrave;u nền đều v&ocirc; c&ugrave;ng dễ chịu. Đ&acirc;y sẽ l&agrave; c&ocirc;ng cụ cho bạn khả năng t&ugrave;y biến mọi setting li&ecirc;n quan đến hiển thị, chuột, b&agrave;n ph&iacute;m,...</p>', 1, 1, 5, '2023-11-19 03:02:14', '2023-11-19 03:02:14'),
                                                                                                                                                                     (31, 'Ram PNY XLR8 Low Profile 1x8GB 3200 DDR4', 'ram-pny-xlr8-low-profile-1x8gb-3200-ddr4', 4, 590000.00, 0.00, 'pny8g.webp', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết&nbsp;RAM PNY XLR8 Low Profile 1x8GB 3200 DDR4</strong></h2>\r\n\r\n<p>PNY bước ch&acirc;n v&agrave;o thị trường Việt Nam với những sản phẩm&nbsp;<a href=\"https://gearvn.com/collections/ram-pc\">RAM</a>&nbsp;ở ph&acirc;n kh&uacute;c gi&aacute; v&ocirc; c&ugrave;ng th&acirc;n thiện v&agrave; dần trở th&agrave;nh một lựa chọn rất tốt cho mọi người d&ugrave;ng. V&agrave; tiếp tục series sản phẩm XLR8, PNY mang đến cho ch&uacute;ng model&nbsp;<strong>PNY XLR8 Low Profile 3200 DDR4</strong>. C&ugrave;ng GEARVN t&igrave;m hiểu chi tiết về sản phẩm n&agrave;y ngay sau đ&acirc;y nh&eacute; !</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh đẹp mắt</strong></h3>\r\n\r\n<p>Cạnh tranh với những đối thủ trong ph&acirc;n kh&uacute;c RAM gi&aacute; rẻ cực nặng k&yacute;, PNY đ&atilde; mạnh tay khi ho&agrave;n thiện cho sản phẩm của m&igrave;nh một ngoại h&igrave;nh v&ocirc; c&ugrave;ng bắt mắt. Kho&aacute;c l&ecirc;n m&igrave;nh một m&agrave;u đen hợp mốt c&ugrave;ng với những đường cắt tinh xảo tạo n&ecirc;n kit&nbsp;<a href=\"https://gearvn.com/collections/ram-pny\">RAM PNY</a>&nbsp;kh&aacute;c biệt so với những model m&agrave;u silver trước đ&acirc;y. Kết hợp với nhau th&agrave;nh c&aacute;c lớp điều n&agrave;y gi&uacute;p cho khả năng tản nhiệt tr&ecirc;n PNY XLR8 Low Profile hiệu quả hơn v&agrave; cho ra hiệu năng bền bỉ v&agrave; mạnh mẽ nhất c&oacute; thể.</p>\r\n\r\n<p><img alt=\"GEARVN - RAM PNY XLR8 Low Profile 1x8GB 3200 DDR4\" src=\"https://file.hstatic.net/1000026716/file/gearvn-ram-pny-xlr8-1x8gb-3200-ddr4-low-profile-2_fc49e95783924617bc089e3452089fee_1024x1024.jpg\" /></p>\r\n\r\n<p>Ngo&agrave;i ra, với k&iacute;ch thước low-profile nhỏ gọn gi&uacute;p cho phi&ecirc;n bản PNY XLR8 dễ d&agrave;ng hơn trong khả năng tương th&iacute;ch với những&nbsp;<a href=\"https://gearvn.com/pages/linh-kien-may-tinh\">linh kiện m&aacute;y t&iacute;nh</a>.&nbsp;</p>\r\n\r\n<h3><strong>Hiệu năng mạnh mẽ từ DDR4</strong></h3>\r\n\r\n<p>Được ho&agrave;n thiện từ những th&agrave;nh phần cao cấp trong qu&aacute; tr&igrave;nh sản xuất, PNY XLR8 Low Profile mang đến hiệu năng đ&aacute;ng mơ ước đối với những chiếc&nbsp;<a href=\"https://gearvn.com/collections/ddr4-8gb\">RAM DDR4</a>&nbsp;tr&ecirc;n thị trường. Tốc độ, độ trễ c&ugrave;ng khả năng &eacute;p xung đều được PNY XLR8 Low Profile cải thiện về giới hạn c&ugrave;ng hiệu năng thực tế, tất cả mang đến khả năng xử l&yacute; tuyệt vời cho mọi c&ocirc;ng việc đa t&aacute;c vụ.</p>\r\n\r\n<p><img alt=\"GEARVN - RAM PNY XLR8 Low Profile 1x8GB 3200 DDR4\" src=\"https://file.hstatic.net/1000026716/file/gearvn-ram-pny-xlr8-1x8gb-3200-ddr4-low-profile-7_b31db2ab026e429cafe2dbe505683f2e_1024x1024.jpg\" /></p>\r\n\r\n<h3><strong>Hỗ trợ XMP 2.0</strong></h3>\r\n\r\n<p>Với c&ocirc;ng nghệ XMP 2.0 đi k&egrave;m, PNY XLR8 Low Profile c&ograve;n gi&uacute;p bạn trải nghiệm những hiệu năng tối đa c&ugrave;ng việc &eacute;p xung dễ d&agrave;ng. Từ đ&oacute;, đẩy mạnh khả năng sử dụng từ người d&ugrave;ng v&agrave; tạo n&ecirc;n những trải nghiệm sử dụng&nbsp;<a href=\"https://gearvn.com/pages/pc-gvn\">PC Gaming</a>&nbsp;cực k&igrave; th&uacute; vị cho ch&uacute;ng ta.</p>', 1, 1, 8, '2023-11-19 03:13:04', '2023-11-19 03:13:04');
INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `price`, `sale`, `image`, `description`, `status`, `prior`, `quantity`, `created_at`, `updated_at`) VALUES
                                                                                                                                                                     (32, 'RAM Corsair Dominator Titanium White 32GB', 'ram-corsair-dominator-titanium-white-32gb', 4, 5590000.00, 5000000.00, 'titan32.png', '<h3><strong>RAM Corsair DOMINATOR TITANIUM RGB 32GB (2x16GB) DDR5 7000MHz White</strong></h3>\r\n\r\n<p><strong><img alt=\"\" src=\"https://anphat.com.vn/media/lib/13-11-2023/ram_all.png\" /></strong></p>\r\n\r\n<p><strong>Limited Version</strong></p>\r\n\r\n<p><strong>RAM CORSAIR&nbsp;DOMINATOR TITANIUM RGB</strong>&nbsp;l&agrave; phi&ecirc;n bản được chế tạo với sự ch&iacute;nh x&aacute;c theo ti&ecirc;u chuẩn cao nhất, ngo&agrave;i ra tất cả c&aacute;c th&agrave;nh phần linh kiện cũng được tỉ mỉ tới từng chi tiết v&agrave; sản xuất với&nbsp;<em>số lượng hạn chế</em><br />\r\nMỗi 1 bộ sản phẩm đều được kiểm tra nghi&ecirc;m ngặt để đảm bảo chắc chắn rằng n&oacute; c&oacute; đủ c&aacute;c yếu tốt kỹ thuật tốt nhất phục vụ cho &eacute;p xung, sau đ&oacute; sẽ được đ&aacute;nh số v&agrave; sẵn s&agrave;ng l&ecirc;n kệ d&agrave;nh cho những người đam m&ecirc;</p>\r\n\r\n<p><img alt=\"\" src=\"https://anphat.com.vn/media/lib/13-11-2023/ram_design.png\" /></p>\r\n\r\n<p><strong>Thiết kế tinh tế vượt trội</strong></p>\r\n\r\n<p>Với việc thay đổi từ chấm LED m&agrave;u th&igrave; ở phi&ecirc;n bản&nbsp;<strong>RAM CORSAIR&nbsp;DOMINATOR TITANIUM RGB&nbsp;</strong>đ&atilde; thay đổi th&agrave;nh dải LED liền mạch, c&ugrave;ng với 2 dải l&ecirc;n mỗi b&ecirc;n tạo sự trang nh&atilde;</p>\r\n\r\n<p><img alt=\"\" src=\"https://anphat.com.vn/media/lib/13-11-2023/ram_replace.png\" /></p>\r\n\r\n<p>Phần nắp LED ph&iacute;a tr&ecirc;n c&oacute; thể thay đổi t&ugrave;y chỉnh dễ d&agrave;ng, người d&ugrave;ng c&oacute; thể mua sẵn c&aacute;c phần n&acirc;ng cấp đến từ CORSAIR hoặc tự tạo ri&ecirc;ng cho m&igrave;nh 1 bản in 3D ho&agrave;n chỉnh v&agrave; thay thế phần đ&oacute;, tạo dấu ấn c&aacute; nh&acirc;n cho bản th&acirc;n</p>\r\n\r\n<p><strong>Hiệu suất tối đa</strong></p>\r\n\r\n<p><strong>RAM CORSAIR&nbsp;DOMINATOR TITANIUM RGB</strong>&nbsp;cũng tương th&iacute;ch với&nbsp;<strong>Intel XMP 3.0 v&agrave; AMD EXPO</strong>&nbsp;trong việc &eacute;p xung dễ d&agrave;ng, b&ecirc;n cạnh đ&oacute; người d&ugrave;ng c&oacute; thể t&ugrave;y chỉnh dễ d&agrave;ng qua phần mềm&nbsp;<em>iCUE v&agrave; lưu lại settings cho&nbsp;<strong>từng ứng dụng</strong>&nbsp;để tăng cường tối đa khả năng sử dụng</em></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, mỗi module chip nhớ tr&ecirc;n&nbsp;<strong>RAM CORSAIR&nbsp;DOMINATOR TITANIUM RGB</strong>&nbsp;được s&agrave;ng lọc trực tiếp bằng tay bởi c&aacute;c kỹ sư c&oacute; chuy&ecirc;n m&ocirc;n cao, kết hợp việc kiểm tra, đo đạc v&agrave; đ&aacute;nh gi&aacute; dựa tr&ecirc;n quy tr&igrave;nh nghi&ecirc;m ngặt, mang đến hiệu suất l&agrave;m việc cao nhất c&oacute; thể</p>\r\n\r\n<p><img alt=\"\" src=\"https://anphat.com.vn/media/lib/13-11-2023/ram_heat.png\" /></p>\r\n\r\n<p><em>C&ocirc;ng nghệ l&agrave;m m&aacute;t DHX</em>&nbsp;đ&atilde; được cấp bằng s&aacute;ng chế cũng được &aacute;p dụng tr&ecirc;n phi&ecirc;n bản&nbsp;<strong>CORSAIR&nbsp;DOMINATOR TITANIUM RGB&nbsp;</strong>n&agrave;y, với việc&nbsp;<em>sử dụng phần PCB t&ugrave;y chỉnh c&oacute; thể l&agrave;m m&aacute;t cả 2 mặt của chip DRAM v&agrave; cả phần PCB đ&oacute;</em>, l&agrave;m m&aacute;t hiệu quả hơn v&agrave; tăng cường tối đa khả năng tản nhiệt khi &eacute;p xung</p>\r\n\r\n<p><img alt=\"\" src=\"https://anphat.com.vn/media/lib/13-11-2023/ram_on.png\" /></p>', 1, 0, 3, '2023-11-19 03:16:54', '2023-11-22 15:46:50'),
                                                                                                                                                                     (33, 'Ổ Cứng SSD PNY CS900 250GB Sata3', 'o-cung-ssd-pny-cs900-250gb-sata3', 4, 590000.00, 290000.00, 'ssdpny256.webp', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết&nbsp;SSD PNY CS900 250G 2.5&quot; Sata 3</strong></h2>\r\n\r\n<h3><strong><strong>Hiệu năng vượt trội</strong></strong></h3>\r\n\r\n<p>Với chất lượng vượt trội v&agrave; hiệu năng cao. SSD PNY&nbsp;l&agrave; một sự lựa chọn tối ưu khi bạn muốn n&acirc;ng cấp ổ cứng. Rất nhanh với tốc độ đọc ghi tuần tự c&oacute; thể l&ecirc;n đến 535Mb/s v&agrave; 500Mb/s. Giờ đ&acirc;y mọi thao t&aacute;c tr&ecirc;n m&aacute;y t&iacute;nh của bạn diễn ra một c&aacute;ch nhanh ch&oacute;ng v&agrave; mượt m&agrave; nhất c&oacute; thể. Tăng hiệu năng to&agrave;n bộ của m&aacute;y t&iacute;nh l&ecirc;n rất nhiều.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-pny-ssd-cs900-240g-2-5-sata-3-01_fd82caa330724f7baa567199e0070a8f.png\" /></p>\r\n\r\n<h3><strong><strong>Tốc độ cao gấp 20 lần ổ cứng truyền thống</strong></strong></h3>\r\n\r\n<p>Tốc độ truy xuất nhanh hơn 20 lần so với ổ cứng th&ocirc;ng thường. SSD PNY&nbsp;hoạt động ở giao diện SATA III với tốc độ đọc v&agrave; ghi tuần tự l&ecirc;n đến 535Mb/s v&agrave; 500 Mb/s, l&agrave;m cho n&oacute; trở th&agrave;nh người bạn đồng h&agrave;nh ho&agrave;n hảo cho những game thủ muốn n&acirc;ng cấp ổ cứng mới của m&igrave;nh.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-pny-ssd-cs900-240g-2-5-sata-3-02_3f7354280b5a4dc59071c498ae5e611c.png\" /></p>\r\n\r\n<h3><strong><strong>Tiết kiệm điện năng</strong></strong></h3>\r\n\r\n<p>Hoạt động mượt m&agrave; với lượng điện năng ti&ecirc;u thụ rất &iacute;t nhằm đảm bảo hiệu suất sử dụng bền bỉ v&agrave; ổn định qua khoảng thời gian d&agrave;i.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-pny-ssd-cs900-240g-2-5-sata-3-03_70a321e85f9447519ce22e4a20fbf884.png\" /></p>\r\n\r\n<h3><strong><strong>Lời kết :</strong></strong></h3>\r\n\r\n<p>Một SSD gi&aacute; cả phải chăng&nbsp;cho tốc độ đọc v&agrave; ghi tuần tự l&ecirc;n đến 535Mb/s v&agrave; 500Mb/s đảm bảo mọi hoạt động tr&ecirc;n m&aacute;y t&iacute;nh của bạn được mượt m&agrave; v&agrave; hiệu năng vượt trội đến kinh ngạc. Giờ đ&acirc;y bạn c&oacute; thể tận hưởng qu&aacute; tr&igrave;nh giải tr&iacute;, l&agrave;m việc hay s&aacute;ng tạo m&agrave; kh&ocirc;ng phải lo về thời gian hoạt động của m&aacute;y t&iacute;nh. Lựa chọn SSD đến từ&nbsp;<a href=\"https://gearvn.com/collections/pny\" target=\"_blank\">PNY</a>&nbsp;sẽ&nbsp;l&agrave; một lựa chọn chuẩn x&aacute;c nhất d&agrave;nh cho bạn.</p>', 1, 0, 2, '2023-11-19 03:28:22', '2023-11-22 15:46:50'),
                                                                                                                                                                     (34, 'PC GVN Intel i3-12100F/ VGA GT 730', 'pc-gvn-intel-i3-12100f-vga-gt-730', 1, 7790000.00, 0.00, 'pcgi3.webp', '<h2><strong>Chi tiết về GVN MINION i730</strong></h2>\r\n\r\n<h3><strong>Mainboard GIGABYTE H610M-H V2 (DDR4)</strong></h3>\r\n\r\n<p>Mainboard&nbsp;<strong>GIGABYTE H610M-H V2 (DDR4)</strong>&nbsp;sẽ l&agrave; cầu nối tất cả linh kiện trong chiếc GVN MINION i730. L&agrave; chiếc bo mạch chủ gi&aacute; rẻ sở hữu socket LGA 1700 cho khả năng tương th&iacute;ch tốt với nhiều bộ vi xử l&yacute; hiện nay như Intel Gen 12, 13 v&agrave; tận dụng tối đa sức mạnh cho hiệu năng xử l&yacute; tốt nhất.</p>\r\n\r\n<p><img src=\"https://product.hstatic.net/200000722513/product/z4526661575560_e34899162c954af2dfdd194c36a71831_fa7c64e8dfcf4f7a913d9379e009792a_grande.jpg\" /></p>\r\n\r\n<h3><strong>CPU Intel Core i3 12100F / 3.3GHz Turbo 4.3GHz / 4 Nh&acirc;n 8 Luồng / 12MB / LGA 1700</strong></h3>\r\n\r\n<p>Đ&oacute;ng vai tr&ograve; l&agrave; bộ n&atilde;o cho GVN MINION i730, CPU&nbsp;<strong>Intel Core i3 12100F</strong>&nbsp;l&agrave; lựa chọn xứng đ&aacute;ng nhất của&nbsp;<a href=\"https://gearvn.com/pages/pc-gvn\">PC Gaming</a>. Với mức gi&aacute; phải chăng, i3-12100F vẫn mang lại khả năng xử l&yacute; nhanh với mức xung nhịp tối đa l&ecirc;n 4.3GHz c&ugrave;ng c&ocirc;ng nghệ si&ecirc;u ph&acirc;n luồng (Hyper-Threading). V&agrave; tự tin rằng, i3-12100F sẽ c&acirc;n tốt những tựa game Esport hiện nay như Li&ecirc;n Minh Huyền Thoại, FO4, Valorant, &hellip;</p>\r\n\r\n<p><img src=\"https://product.hstatic.net/200000722513/product/12100f_d81914f75c254dba985d80033b522662_c3458e8ae6a24c8881b4ae103f0b6a6d_grande.png\" /></p>\r\n\r\n<h3><strong>RAM PNY XLR8 Silver 1x8GB 3200 RGB</strong></h3>\r\n\r\n<p><img src=\"https://product.hstatic.net/1000026716/product/en_color_list_22d26_r9gc83djaz_3c686ea66ef2444a937c1fd51d008395__1__ae48a53002da4865b402c951dd663848_grande.jpg\" /></p>\r\n\r\n<h3><strong>VGA Palit GeForce GT 730 2G</strong></h3>\r\n\r\n<p>Đ&aacute;p ứng nhu cầu gaming nhẹ nh&agrave;ng đến trung b&igrave;nh, GVN MINION i730 trang bị chiếc card m&agrave;n h&igrave;nh đến từ PALIT&nbsp;với t&ecirc;n&nbsp;<strong>Palit GeForce GT 730 2G</strong>. Thiết kế nhỏ gọn với&nbsp;tản nhiệt cho khả năng dễ d&agrave;ng lắp đặt tr&ecirc;n mọi k&iacute;ch thước case m&aacute;y t&iacute;nh c&ugrave;ng độ bền tối ưu. Hiệu năng đến từ GPU GeForce GT 730 sẽ cho bạn khả năng tận hưởng những tựa game online Esport như LOL, FO4, Valorant,... mượt m&agrave; nhất ở mức đồ họa trung b&igrave;nh, đ&aacute;p ứng nhu cầu chơi game cho c&aacute;c game thủ kh&ocirc;ng c&oacute; hầu bao qu&aacute; lớn.</p>\r\n\r\n<p><img src=\"https://product.hstatic.net/1000026716/product/gearvn-palit-geforce-gt-730-2g-1_332139aac4bf4f40b9eacb3ff337b3be_grande.png\" /></p>\r\n\r\n<h3><strong>SSD TeamGroup CX2 240GB 2.5&quot; Sata 3</strong></h3>\r\n\r\n<p><a href=\"https://gearvn.com/collections/pc-van-phong\">M&aacute;y t&iacute;nh để b&agrave;n</a>&nbsp;GVN MINION i730&nbsp;sở hữu kh&ocirc;ng gian lưu trữ 240GB đến từ TeamGroup CX2 240GB 2.5&quot; Sata 3. Tốc độ đọc/ghi file ấn tượng lần lượt l&agrave; 535MB/s v&agrave; 500MB/s sẽ l&agrave; những th&ocirc;ng số cần thiết cho việc sao lưu, lưu trữ dữ liệu như video, h&igrave;nh ảnh v&agrave; game. Với bộ nhớ SSD, tối ưu tốc độ khởi động cho d&agrave;n PC chơi game của ch&uacute;ng ta.</p>\r\n\r\n<p><img src=\"https://product.hstatic.net/1000026716/product/c4b6bb68226c46fd09ea815cf93d39bb_9f9c0c26c46a421baf39b064c2e5d349_grande.jpg\" /></p>\r\n\r\n<h3><strong>Nguồn Jetek 350W Elite V2</strong></h3>\r\n\r\n<p><strong>Nguồn Jetek 350W Elite V2</strong>&nbsp;sẽ l&agrave; PSU cung cấp nguồn điện cho GVN MINION i730. Được ho&agrave;n thiện với thiết kế nhỏ gọn dễ d&agrave;ng cho việc lắp đặt, quạt 120mm cho khả năng tản nhiệt v&agrave; c&ocirc;ng suất 350W mạnh mẽ cung cấp năng lượng cho to&agrave;n bộ linh kiện b&ecirc;n trong d&agrave;n m&aacute;y. Đạt chuẩn 80 Plus thể hiện khả năng sử dụng năng lượng hiệu quả của bộ nguồn đến từ Jetek.</p>\r\n\r\n<p><img src=\"https://product.hstatic.net/1000026716/product/500-elite9-500x500_37e4605e6229461fb4e952dbabead0a4_grande.jpeg\" /></p>\r\n\r\n<h3><strong>Case 1st Player Fire Dancing V2-A (4 fan RGB)</strong></h3>\r\n\r\n<p>Tuy l&agrave; case kh&aacute; nhỏ gọn nhưng được hỗ trợ&nbsp;khả năng l&agrave;m m&aacute;t cực kỳ ấn tượng với ba quạt LED đi c&ugrave;ng. C&ugrave;ng với đ&oacute; case được trang bị&nbsp;một tấm k&iacute;nh cường lực mặt b&ecirc;n để tăng th&ecirc;m t&iacute;nh thẩm mỹ của vỏ case.</p>\r\n\r\n<p>Đồng thời, tr&ecirc;n vỏ case c&ograve;n được trang bị cổng kết nối th&ocirc;ng minh để người chơi c&oacute; thể dễ d&agrave;ng kết nối&nbsp;<a href=\"https://gearvn.com/pages/chuot-may-tinh\" target=\"_blank\">chuột m&aacute;y t&iacute;nh</a>,&nbsp;<a href=\"https://gearvn.com/collections/ban-phim-may-tinh\" target=\"_blank\">b&agrave;n ph&iacute;m</a>&nbsp;c&ugrave;ng nhiều thiết bị kh&aacute;c v&ocirc; c&ugrave;ng tiện lợi.&nbsp;</p>\r\n\r\n<p><img src=\"https://product.hstatic.net/1000026716/product/cad47e6cd0e4fdfe060600bf1ab62d01_9d26bfa9992c4e56932fbda634761fc5_grande.jpg\" /></p>\r\n\r\n<p>Bốn&nbsp;quạt 120mm được c&agrave;i đặt sẵn trong Case 1st Player Fire Dancing V2-A (4 fan RGB)&nbsp;với 3&nbsp;quạt ở ph&iacute;a trước. Quạt được thắp s&aacute;ng nhờ tổ hợp đ&egrave;n LED ph&iacute;a trước case, bạn chỉ cần cắm điện v&agrave; tận hưởng trải nghiệm. C&aacute;c tấm lưới ph&iacute;a trước v&agrave; ph&iacute;a tr&ecirc;n cung cấp hệ thống th&ocirc;ng gi&oacute; tối ưu để di chuyển một lượng lớn kh&ocirc;ng kh&iacute; trong suốt vỏ m&aacute;y.</p>', 1, 0, 3, '2023-11-19 03:31:52', '2023-11-19 03:31:52'),
                                                                                                                                                                     (35, 'Bàn phím cơ AKKO 5075B Plus Dragon Ball Super Goku Akko', 'ban-phim-co-akko-5075b-plus-dragon-ball-super-goku-akko', 5, 2790000.00, 0.00, 'akkodb5075.webp', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết&nbsp;b&agrave;n ph&iacute;m cơ AKKO 5075B Plus Dragon Ball Super Goku</strong></h2>\r\n\r\n<p>Nổi tiếng với những chiếc&nbsp;<a href=\"https://gearvn.com/collections/gaming-gear\">gaming gear</a>&nbsp;chất lượng, Akko l&agrave; thương hiệu rất nhiều người d&ugrave;ng đặt niềm tin nhờ v&agrave;o những th&agrave;nh phẩm chất lượng, đặc biệt l&agrave; b&agrave;n ph&iacute;m cơ. Bao phủ gần như mọi ph&acirc;n kh&uacute;c trong ng&agrave;nh h&agrave;ng n&agrave;y, những chiếc b&agrave;n ph&iacute;m từ Akko sở hữu độ cứng c&aacute;p v&agrave; ho&agrave;n thiện ở cấp độ cao. V&agrave; h&ocirc;m nay GEARVN sẽ mang tới model AKKO 5075B Plus Dragon Ball Super Goku đặc biệt từ ch&iacute;nh thương hiệu Trung Quốc.</p>\r\n\r\n<h3><strong>Vẻ ngo&agrave;i đẹp mắt c&ugrave;ng Dragon Ball</strong></h3>\r\n\r\n<p>AKKO 5075B Plus Dragon Ball Super Goku vẫn thừa kế từ sự trau chuốt v&agrave; tỉ mỉ khi được ho&agrave;n thiện với rất nhiều th&agrave;nh phần ti&ecirc;n tiến d&agrave;nh cho&nbsp;<a href=\"https://gearvn.com/pages/ban-phim-may-tinh\">b&agrave;n ph&iacute;m cơ</a>. Sức mạnh super saiyan đi k&egrave;m với những trang thiết bị t&acirc;n tiến để tạo n&ecirc;n nền m&oacute;ng ho&agrave;n hảo nhất d&agrave;nh cho một chiếc&nbsp;<a href=\"https://gearvn.com/collections/ban-phim-may-tinh\" target=\"_blank\">b&agrave;n ph&iacute;m m&aacute;y t&iacute;nh</a>&nbsp;cao cấp.&nbsp;</p>\r\n\r\n<p><img alt=\"GEARVN - Bàn phím cơ AKKO 5075B Plus Dragon Ball Super Goku\" src=\"https://file.hstatic.net/1000026716/file/gearvn-ban-phim-co-akko-5075b-plus-dragon-ball-super-goku-__14__810244d6be2341f48c2e9d7cb8a40e0c_1024x1024.jpg\" /></p>\r\n\r\n<p>Đặc biệt, l&agrave; phi&ecirc;n bản sở hữu cho m&igrave;nh lớp skin lấy chủ đề từ series truyện cực k&igrave; nổi tiếng - 7 vi&ecirc;n ngọc rồng, AKKO 5075B Plus Dragon Ball Super Goku mang đến cho ch&uacute;ng ta những họa tiết c&ugrave;ng đặc điểm đ&atilde; l&agrave;m n&ecirc;n bộ manga/anime n&agrave;y. Bảy vi&ecirc;n ngọc rồng, t&ocirc;ng m&agrave;u v&agrave;ng cam c&ugrave;ng h&igrave;nh tượng của nh&acirc;n vật ch&iacute;nh Goku đ&atilde; cho mọi fan của Dragon Ball trở lại tuổi thơ c&ugrave;ng sản phẩm từ nh&agrave; Akko.</p>\r\n\r\n<h3><strong>Trải nghiệm g&otilde; ph&iacute;m từ sức mạnh si&ecirc;u saiyan&nbsp;</strong></h3>\r\n\r\n<p>Trang bị cho m&igrave;nh những chiếc switch Akko CS (Wine Red), AKKO 5075B Plus Dragon Ball Super Goku mang đến những &acirc;m thanh g&otilde; ph&iacute;m k&iacute;ch th&iacute;ch người d&ugrave;ng. B&agrave;n tay của người d&ugrave;ng sẽ được lướt tr&ecirc;n những chiếc&nbsp;<a href=\"https://gearvn.com/collections/keycaps\">keycap</a>&nbsp;từ nhựa PBT cao cấp c&ugrave;ng kiểu in Double-shot mang lại sự chắc chắn trong từng k&yacute; tự theo thời gian sử dụng.</p>\r\n\r\n<p><img alt=\"GEARVN - Bàn phím cơ AKKO 5075B Plus Dragon Ball Super Goku\" src=\"https://file.hstatic.net/1000026716/file/gearvn-ban-phim-co-akko-5075b-plus-dragon-ball-super-goku-__8__d3f817f1788f4674a8fb0346a6d9e64e_grande.jpg\" /></p>\r\n\r\n<p>Với JDA Profile tạo l&ecirc;n độ cao ph&ugrave; hợp cho người d&ugrave;ng, AKKO 5075B Plus Dragon Ball Super Goku biến m&igrave;nh th&agrave;nh khu vực thư gi&atilde;n tr&ecirc;n kh&ocirc;ng gian l&agrave;m việc.</p>\r\n\r\n<h3><strong>N&acirc;ng cấp c&ugrave;ng hot swap&nbsp;</strong></h3>\r\n\r\n<p>Kh&ocirc;ng giới hạn khả năng chất lượng với y&ecirc;u cầu từ người d&ugrave;ng, AKKO 5075B Plus Dragon Ball Super Goku đem đến bộ phận hot swap cho khả năng &ldquo;độ&rdquo; b&agrave;n ph&iacute;m một c&aacute;ch dễ d&agrave;ng. Từ đ&oacute;, h&atilde;y tạo n&ecirc;n chiếc b&agrave;n ph&iacute;m ph&ugrave; hợp nhất d&agrave;nh cho nhu cầu bản th&acirc;n c&ugrave;ng chiếc&nbsp;<a href=\"https://gearvn.com/collections/ban-phim-akko\">b&agrave;n ph&iacute;m Akko</a>.</p>', 1, 1, 7, '2023-11-19 03:39:05', '2023-11-19 03:39:05'),
                                                                                                                                                                     (36, 'Bàn phím E-Dra EK387L RGB Red Switch', 'ban-phim-e-dra-ek387l-rgb-red-switch', 5, 690000.00, 0.00, 'edraek387rgb.webp', '<h2><strong>Đ&aacute;nh gi&aacute; chi tiết b&agrave;n ph&iacute;m E-Dra EK387L RGB</strong></h2>\r\n\r\n<p>E-Dra được biết đến l&agrave; một trong những h&atilde;ng chuy&ecirc;n mang đến thị trường những d&ograve;ng sản phẩm gaming gear như&nbsp;<a href=\"https://gearvn.com/pages/chuot-may-tinh\" target=\"_blank\">chuột m&aacute;y t&iacute;nh</a>&nbsp;đa kết nối từ c&oacute; d&acirc;y cho đến&nbsp;<a href=\"https://gearvn.com/collections/chuot-wireless\" target=\"_blank\">chuột kh&ocirc;ng d&acirc;y</a>&nbsp;gaming, b&agrave;n ph&iacute;m, ghế chơi game,...với gi&aacute; th&agrave;nh phụ hợp với nhiều đối tượng học sinh - sinh vi&ecirc;n nhưng chất lượng v&ocirc; c&ugrave;ng tuyệt vời.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-ban-phim-e-dra-ek387l-rgb_4aa27082a8734df7a57b114f0c4b0a73_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nếu ng&acirc;n s&aacute;ch kh&ocirc;ng cho ph&eacute;p, bạn thuộc nh&oacute;m đối tượng học sinh - sinh vi&ecirc;n v&agrave; người d&ugrave;ng phổ th&ocirc;ng cần một chiếc&nbsp;<a href=\"https://gearvn.com/pages/ban-phim-may-tinh\" target=\"_blank\">b&agrave;n ph&iacute;m cơ</a>&nbsp;để học tập, l&agrave;m việc v&agrave; giải tr&iacute; th&igrave;&nbsp;E-Dra EK387L RGB sẽ l&agrave; một trong những sự lựa chọn kh&ocirc;ng n&ecirc;n bỏ qua.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&agrave;n ph&iacute;m E-Dra EK387L RGB l&agrave; một trong những sự lựa chọn d&agrave;nh cho người d&ugrave;ng th&iacute;ch sự nhỏ gọn ở g&oacute;c m&aacute;y học tập v&agrave; giải tr&iacute;, với thiết kế b&agrave;n ph&iacute;m&nbsp;TKL - 87 ph&iacute;m v&ocirc; c&ugrave;ng nhỏ gọn. Bạn c&oacute; thể mang đi bất kỳ đ&acirc;u để phụ vụ cho nhu cầu sử dụng kh&ocirc;ng kh&aacute;c g&igrave; c&aacute;c d&ograve;ng&nbsp;<a href=\"https://gearvn.com/collections/ban-phim-duoi-1-trieu\" target=\"_blank\">b&agrave;n ph&iacute;m kh&ocirc;ng d&acirc;y</a>&nbsp;đắt tiền từ c&aacute;c thương hiệu đắt đỏ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-ban-phim-e-dra-ek387l-rgb-2_ad23dd3e1de44dd38747a30dcf599f57_grande.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>E-Dra EK387L được trang bị phần khung v&agrave; vỏ ph&iacute;m được l&agrave;m từ chất liệu nhựa cứng cực k&igrave; d&agrave;y dặn, người d&ugrave;ng sẽ dễ d&agrave;ng&nbsp;cảm nhận&nbsp;ngay được sự chắc chắn của chiếc b&agrave;n ph&iacute;m khi cầm tr&ecirc;n tay.&nbsp;</p>\r\n\r\n<p>C&ugrave;ng với đ&oacute;,&nbsp;mặt&nbsp;lưng của phi&ecirc;n bản&nbsp;EK387L&nbsp;ở bi&ecirc;n bản led RGB đ&atilde; được cải tiến so với c&aacute;c phi&ecirc;n bản cũ, khi vẫn giữ những r&atilde;nh đi d&acirc;y tiện dụng để set up b&agrave;n m&aacute;y t&iacute;nh gọn g&agrave;ng v&agrave; dễ d&agrave;ng nhất.</p>\r\n\r\n<p>Được&nbsp;E Dra trang bị hệ thống dải đ&egrave;n&nbsp;LED RGB&nbsp;điều chỉ c&oacute; ở những d&ograve;ng&nbsp;<a href=\"https://gearvn.com/collections/ban-phim-may-tinh\" target=\"_blank\">b&agrave;n ph&iacute;m</a>&nbsp;gaming ở ph&acirc;n kh&uacute;c cao cấp. Với dải m&agrave;u c&oacute; thể t&ugrave;y chỉnh được mang đến một vẻ ngo&agrave;i cực kỳ bắt mắt. C&ugrave;ng&nbsp;độ s&aacute;ng của b&agrave;n ph&iacute;m cũng vừa đủ đ&aacute;p ứng hầu hết c&aacute;c kh&ocirc;ng gian sử dụng của bạn một c&aacute;ch thoải m&aacute;i. Đ&acirc;y sẽ l&agrave; sự lựa chọn của nhiều bạn học sinh cho g&oacute;c m&aacute;y LED RGB để tăng cảm hứng học tập v&agrave; giải tr&iacute;.</p>\r\n\r\n<p><img src=\"https://file.hstatic.net/1000026716/file/gearvn-ban-phim-e-dra-ek387l-rgb-1_edef757e9b3b4ed4be5ccd3a9a178b31_grande.png\" /></p>\r\n\r\n<p>B&agrave;n ph&iacute;m cơ E-DRA EK387L sở hữu kết nối nhanh v&agrave; ổn định chuẩn&nbsp;Type-A to Type-C&nbsp;với đầu&nbsp;USB&nbsp;được mạ một lớp v&agrave;ng mỏng, đem lại cảm gi&aacute;c sang trọng v&agrave; thời thượng cho người sử dụng. Đ&acirc;y cũng ch&iacute;nh l&agrave; một điểm l&agrave;m cho&nbsp;EK387L rất được người sử dụng ưa chuộng.</p>', 1, 0, 6, '2023-11-19 03:50:50', '2023-11-19 03:50:50'),
                                                                                                                                                                     (37, 'Vỏ máy tính Case Corsair 220T RGB Airflow White', 'vo-may-tinh-case-corsair-220t-rgb-airflow-white', 2, 2450000.00, 0.00, 'case220t.webp', '<p>Corsair- một nh&agrave; sản xuất kh&ocirc;ng hề xa lạ trong giới linh kiện m&aacute;y t&iacute;nh, Case&nbsp;iCUE&nbsp;220T RGB Airflow White l&agrave; một sản phẩm mới được ra mắt độc đ&aacute;o</p>\r\n\r\n<h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://www.anphatpc.com.vn/media/product/31675__cc_9011174_ww_gallery_220t_rgb_white_16.png\" style=\"height:589px; width:592px\" /></h2>\r\n\r\n<p>CORSAIR iCUE&nbsp;220T RGB Airflow l&agrave; sản phẩm Case thi&ecirc;n hướng về sử dụng hiệu năng gi&oacute; (AirFlow) n&ecirc;n được thiết kế rất tỉ mỉ với nhiều khoảng trống lạ mắt. Với c&aacute;c khoảng trống được thiết kế c&aacute;ch t&acirc;n theo kiểu mũi t&ecirc;n gi&uacute;p cho&nbsp;CORSAIR iCUE&nbsp;220T RGB Airflow c&oacute; khả năng lưu th&ocirc;ng gi&oacute; b&ecirc;n trong cực k&igrave; hiệu quả.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://www.anphatpc.com.vn/media/product/31675__cc_9011174_ww_gallery_220t_rgb_white_12__1_.png\" style=\"height:832px; width:832px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CORSAIR iCUE&nbsp;220T RGB Airflow c&oacute; khung được l&agrave;m từ th&eacute;p v&agrave; sơn t&iacute;nh điện với t&ocirc;ng m&agrave;u ch&iacute;nh l&agrave; Trắng. Mặt h&ocirc;ng của&nbsp;CORSAIR iCUE&nbsp;220T RGB Airflow được l&agrave;m bằng k&iacute;nh cường lực gi&uacute;p cho người sử dụng c&oacute; thể khoe được c&aacute;c linh kiện b&ecirc;n trong. Case hỗ trợ người sử dụng 6 quạt 120mm, 4 quạt 140mm hoặc l&agrave; tản nhiệt nước c&oacute; k&iacute;ch thước 360mm.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://www.anphatpc.com.vn/media/product/31675__cc_9011174_ww_gallery_220t_rgb_white_13.png\" style=\"height:812px; width:812px\" /></p>\r\n\r\n<p>Case&nbsp;CORSAIR iCUE&nbsp;220T RGB Airflow đi k&egrave;m với 3 quạt tản nhiệt SP120 RGB PRO đem đến &aacute;nh s&aacute;ng rực rỡ v&agrave; hiệu quả l&agrave;m m&aacute;t tốt. Quạt SP120 RGB PRO được trang bị 24 b&oacute;ng LED v&agrave; hỗ trợ điều khiển th&ocirc;ng qua phần mềm của h&atilde;ng. Thế hệ quạt SP120 RGB PRO c&oacute; độ ồn thấp v&agrave; tốc độ tối đa l&ecirc;n tới 1.400 v&ograve;ng/ph&uacute;t.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://www.anphatpc.com.vn/media/product/31675__cc_9011174_ww_gallery_220t_rgb_white_01.png\" style=\"height:723px; width:723px\" /></p>\r\n\r\n<p>(Nguồn: AZPC)</p>', 1, 1, 4, '2023-11-19 04:07:00', '2023-11-19 04:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
                           `id` bigint(20) UNSIGNED NOT NULL,
                           `user_id` bigint(20) UNSIGNED NOT NULL,
                           `product_id` bigint(20) UNSIGNED NOT NULL,
                           `rating` int(11) NOT NULL,
                           `status` tinyint(1) NOT NULL DEFAULT 1,
                           `created_at` timestamp NULL DEFAULT NULL,
                           `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `rating`, `status`, `created_at`, `updated_at`) VALUES
                                                                                                          (1, 1, 3, 4, 1, '2023-11-18 16:43:44', '2023-11-19 05:18:33'),
                                                                                                          (2, 1, 1, 3, 1, '2023-11-18 16:43:52', '2023-11-18 16:43:52'),
                                                                                                          (3, 2, 32, 5, 1, '2023-11-22 15:50:05', '2023-11-22 15:50:05'),
                                                                                                          (4, 2, 33, 5, 1, '2023-11-22 15:50:15', '2023-11-22 15:50:15'),
                                                                                                          (5, 2, 23, 5, 1, '2023-11-22 15:50:21', '2023-11-22 15:50:21'),
                                                                                                          (6, 2, 25, 5, 1, '2023-11-22 15:50:28', '2023-11-22 15:50:28'),
                                                                                                          (7, 2, 28, 4, 1, '2023-11-22 15:51:27', '2023-11-22 15:51:27'),
                                                                                                          (8, 1, 25, 4, 1, '2023-11-23 12:53:35', '2023-11-23 12:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `id` bigint(20) UNSIGNED NOT NULL,
                         `name` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `phone` varchar(255) DEFAULT NULL,
                         `address` varchar(255) DEFAULT NULL,
                         `birthday` date DEFAULT NULL,
                         `gender` tinyint(1) DEFAULT -1,
                         `role` tinyint(1) NOT NULL DEFAULT 0,
                         `password` varchar(255) NOT NULL,
                         `job` varchar(255) DEFAULT NULL,
                         `facebook` varchar(255) DEFAULT NULL,
                         `instagram` varchar(255) DEFAULT NULL,
                         `twitter` varchar(255) DEFAULT NULL,
                         `deleted` tinyint(1) NOT NULL DEFAULT 0,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `birthday`, `gender`, `role`, `password`, `job`, `facebook`, `instagram`, `twitter`, `deleted`, `created_at`, `updated_at`) VALUES
                                                                                                                                                                                                (1, 'Lê Ạc Minh', 'admin@gmail.com', '0774158016', '123 đường Quang Trung, TP.HCM', '2002-01-01', 0, 1, '$2y$10$pIaNS2wCmK6st6RckY.qE.GdPG7t8K6P3IPTTz6hbnNAq.pNZ.Njm', 'Sinh viên', NULL, NULL, NULL, 0, NULL, '2024-02-29 12:36:21'),
                                                                                                                                                                                                (2, 'Vân Anh', 'vanA@gmail.com', '0123456789', '123 đường Nguyễn Huệ, TP.HCM', '2002-01-01', 1, 0, '$2y$10$RJExzi080usjZlfzzoOG9.nao4..4PL8mWe1DsO9igyIH62yx1Tcq', 'Sinh viên RMIT', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', '2023-11-22 15:49:55'),
                                                                                                                                                                                                (3, 'Trần Phước Lơi', 'phuocL@gmail.com', '0123456790', '456 đường DEF, Hà Nội', '2002-07-18', 1, 0, '$2y$10$VRc6GukrJx8XP9LfkLpwNOPx5qBRDeYDlg8U5ajHLOSGs594IiWeO', 'Kĩ sư điện tử', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (4, 'Võ Thị Ngọc Duyên', 'ngocDien@gmail.com', '0123456079', '321 đường JKL, Cần Thơ', '2002-07-18', 1, 0, '$2y$10$66G7A9HL3eMXtWGxto5S5ueCF1OCqx06P.N9zgh0m1p7Ny/nCWzp6', 'Bác sĩ đa khoa', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (5, 'Võ Thị Trang Diễm', 'trangD@gmail.com', '0123450972', '654 đường MNO,Thừa Thiên-Huế', '2002-09-29', 0, 0, '$2y$10$x4gIumNyJ882tGO2D8RanuGc8ZiKa9QwEKLsinb8Gn0dssUyaFxqe', 'Sinh viên', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (6, 'Trần Hải Thanh', 'haiT@gmail.com', '0123450973', '654 đường MNO,Thừa Thiên-Huế', '2002-07-20', 0, 0, '$2y$10$uW.DZo0PaMFN63XSMJkWCeQ/ds7CjXBOWnwiHXo6gCRzGozL9Y.6e', 'Sinh viên', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (7, 'Huỳnh Mỹ', 'huynhMy@gmail.com', '0123409785', '987 đường Phạm Thị Xuân, Nha Trang', '2002-09-27', 1, 0, '$2y$10$zboQR5XUnDNsqfF4o1FccO.ZWeQc11fjGG.phTZ2a1jAJWjBfZ4h2', 'Lập trình viên', NULL, NULL, NULL, 1, '2023-11-18 04:13:41', '2023-11-18 10:23:18'),
                                                                                                                                                                                                (8, 'Nguyễn Thị Quỳnh Như', 'quynhN@gmail.com', '0123097854', '210 đường STU, Vũng Tàu', '2002-10-04', 0, 0, '$2y$10$ZdZ4hWAf8wgBr68E2sM3COKul.F3FuyDUzqr56vOjHoHWKWrMM6ae', 'Kế toán', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (9, 'Trung Hậu Dương', 'trungD@gmail.com ', '0120978543', '543 đường VWX , Phú Quốc', '2002-08-25', 0, 0, '$2y$10$YuPxIK647dWJmpZj8VoKJOxB7Ad6OaHzDR3iGAdIlc/xCNrVZUUpC', 'Sinh viên', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (10, 'Nguyễn Trần Trọng Tín', 'trongTin@gmail.com ', '0109785432', '876 đường YZ , Quảng Ninh', '2002-06-01', 0, 0, '$2y$10$z08YsiehnELXf.JtywcjquQ7zkRZ3sc5On79DubgryuoKkbMS/n1O', 'Lập trình viên', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (11, 'Tống Thúy Loan', 'thiLoan@gmail.com', '0097854321', '789 đường Trần Quốc Tuấn, Hồ Tây, Hà Nội', '1990-01-20', 1, 0, '$2y$10$JfYSiHSs1RSOMUiYeaXBTeNOlbwwPwO61nHFGjCweFUeF8qaADaYS', 'Giáo viên trung học', 'Clare Bahringer IV', NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (12, 'Tưởng Thanh Trúc', 'thTruc@gmail.com', '0097854320', '789 đường Trần Quan Khải, Quận 1, TP.Hồ Chí Minh', '1990-01-20', 1, 0, '$2y$10$vsh5b61TjXGPIQoebJgJ7OvZGarCdEu1pva4IN79RTM69hBOTJoiq', 'Marketing', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (13, 'Lê Thanh Bách', 'lethanhbach2002@gmail.com', '0774158017', '187 đường Phan Bội Châu, Châu Thanh, Đồng Tháp', '2002-02-11', 0, 0, '$2y$10$F95Ew/TZLf3YQ0EZsYtngeS/9YAoB5LUnI7ZUm0ZrSvchH0qpNbny', 'Sinh viên', NULL, NULL, NULL, 0, '2023-11-18 04:13:41', NULL),
                                                                                                                                                                                                (14, 'Lee', 'la2@gmail.com', NULL, NULL, NULL, -1, 0, '$2y$10$FH6TQvft7UElerzzxQ2BEuk8zCLbcE0Kb97gbN.Hl6mmiBbK6F.C2', NULL, NULL, NULL, NULL, 0, '2023-11-19 01:05:07', '2023-11-18 18:08:22'),
                                                                                                                                                                                                (15, 'Lisa', 'lisa@gmail.com', NULL, NULL, NULL, -1, 0, '$2y$10$AE/NDUDt8PEcw6Lmjme8jejmsQMiBkXFimUh5cKTGq8OuJp3eCiNW', NULL, NULL, NULL, NULL, 0, '2023-11-19 01:05:36', '2023-11-19 01:05:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
    ADD PRIMARY KEY (`id`),
  ADD KEY `activities_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `cate_products`
--
ALTER TABLE `cate_products`
    ADD PRIMARY KEY (`id`),
  ADD KEY `cate_products_product_id_foreign` (`product_id`),
  ADD KEY `cate_products_category_id_foreign` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
    ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image_products`
--
ALTER TABLE `image_products`
    ADD PRIMARY KEY (`id`),
  ADD KEY `image_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `list_address_users`
--
ALTER TABLE `list_address_users`
    ADD PRIMARY KEY (`id`),
  ADD KEY `list_address_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `list_describe_products`
--
ALTER TABLE `list_describe_products`
    ADD PRIMARY KEY (`id`),
  ADD KEY `list_describe_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
    ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
    ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
    ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `cate_products`
--
ALTER TABLE `cate_products`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_products`
--
ALTER TABLE `image_products`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `list_address_users`
--
ALTER TABLE `list_address_users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `list_describe_products`
--
ALTER TABLE `list_describe_products`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
    ADD CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cate_products`
--
ALTER TABLE `cate_products`
    ADD CONSTRAINT `cate_products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cate_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
    ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_products`
--
ALTER TABLE `image_products`
    ADD CONSTRAINT `image_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `list_address_users`
--
ALTER TABLE `list_address_users`
    ADD CONSTRAINT `list_address_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `list_describe_products`
--
ALTER TABLE `list_describe_products`
    ADD CONSTRAINT `list_describe_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
    ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
    ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
    ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
    ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
