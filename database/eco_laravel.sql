-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2020 at 10:50 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `eco_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_07_075450_create_admin_table', 1),
(4, '2020_06_07_133531_create_category_product_table', 2),
(5, '2020_06_08_022723_create_brand_table', 3),
(6, '2020_06_08_025948_create_product_table', 4),
(7, '2018_12_23_120000_create_shoppingcart_table', 5),
(8, '2020_06_10_080230_create_customer_table', 5),
(9, '2020_06_11_110801_create_customer_shipping', 6),
(11, '2020_06_13_122043_create_payment', 7),
(12, '2020_06_13_122330_create_order', 7),
(13, '2020_06_13_122429_create_order_details', 7);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'khuyenpb@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Bùi Phú Khuyên', '0333093935', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_description`, `brand_image`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'Cetaphil', 'Cetaphil', 'cetaphil41.jpg', 1, '2020-06-05 17:00:00', NULL),
(2, 'Eucerin', 'Eucerin', 'eucerin62.jpg', 1, '2020-06-08 02:46:16', NULL),
(3, 'Laroche Posay', 'Laroche Posay', 'laroche-posay56.jpg', 1, '2020-06-08 08:25:12', NULL),
(4, 'Loreal Paris', 'Loreal Paris', 'loreal-paris96.jpg', 1, '2020-06-08 08:25:49', NULL),
(5, 'Maybelline', 'Maybelline', 'maybelline0.jpg', 1, '2020-06-08 08:26:07', NULL),
(6, 'Merrires', 'Merrires', 'merrires27.jpg', 1, '2020-06-08 08:26:45', NULL),
(7, 'Moony', 'Moony', 'moony49.jpg', 1, '2020-06-08 08:27:03', NULL),
(8, 'Vichy', 'Vichy', 'vichy24.jpg', 1, '2020-06-08 08:27:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_description`, `category_status`, `created_at`, `updated_at`) VALUES
(2, 'Sức khoẻ & Làm đẹp', 'Sức khoẻ & Làm đẹp', 1, '2020-06-07 14:26:04', NULL),
(3, 'Bé - Đồ chơi', 'Bé - Đồ chơi', 1, '2020-06-07 14:36:38', NULL),
(4, 'Bé ăn', 'Bé ăn', 1, '2020-06-08 08:03:20', NULL),
(5, 'Bé vệ sinh', 'Bé vệ sinh', 1, '2020-06-08 08:04:26', NULL),
(6, 'Chăm sóc cơ thể', 'Chăm sóc cơ thể', 1, '2020-06-08 08:04:35', NULL),
(7, 'Chăm sóc da mặt', 'Chăm sóc da mặt', 1, '2020-06-08 08:04:45', NULL),
(8, 'Chăm sóc tóc', 'Chăm sóc tóc', 1, '2020-06-08 08:04:58', NULL),
(9, 'Clinic & Spa', 'Clinic & Spa', 1, '2020-06-08 08:05:12', NULL),
(10, 'Giảm béo', 'Giảm béo', 1, '2020-06-08 08:05:26', NULL),
(11, 'Trang điểm', 'Trang điểm', 1, '2020-06-08 08:05:31', NULL),
(12, 'Triệt lông', 'Triệt lông', 1, '2020-06-08 08:05:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_times` int(50) NOT NULL,
  `coupon_function` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_times`, `coupon_function`, `coupon_code`, `coupon_discount`) VALUES
(1, 'Mã giảm giá', 21, 1, 'NMHHY2', 31),
(2, 'Mã giảm giá 2', 21, 2, 'NMHHY1', 130000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(1, 'Bùi Phú Khuyên', 'khuyenpb@gmail.com', '0935140540', '0333093935', NULL, NULL),
(2, 'Bùi Phú Khuyên', 'khuyenpb@gmail.com', 'ce29934a91a3462dd1d855c44f46a622', '0333093935', '2020-06-12 14:23:05', '2020-06-12 14:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(29, 2, 32, 30, '42,096,935', 'Đang chờ xử lý', '2020-06-13 14:24:18', '2020-06-13 14:24:18'),
(30, 2, 33, 31, '45,345,345', 'Đang chờ xử lý', '2020-06-13 14:25:48', '2020-06-13 14:25:48'),
(31, 2, 34, 32, '48,468,468', 'Đang chờ xử lý', '2020-06-14 02:33:05', '2020-06-14 02:33:05'),
(32, 2, 35, 33, '34,950,000', 'Đang chờ xử lý', '2020-06-17 05:09:38', '2020-06-17 05:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(48, 29, 3, 'Lenovo Ideapad 330-15IKB/Core I3 7020U/4GB/256GSSD', '38883812', 1, '2020-06-13 14:24:18', '2020-06-13 14:24:18'),
(49, 29, 5, 'Sản phẩm test', '3213123', 1, '2020-06-13 14:24:18', '2020-06-13 14:24:18'),
(50, 30, 4, 'Lenovo Ideapad 330-15IKB/Core I3 7020U/4GB/256GSSD', '45345345', 1, '2020-06-13 14:25:48', '2020-06-13 14:25:48'),
(51, 31, 4, 'Lenovo Ideapad 330-15IKB/Core I3 7020U/4GB/256GSSD', '45345345', 1, '2020-06-14 02:33:05', '2020-06-14 02:33:05'),
(52, 31, 2, 'Samsung 2', '3123123', 1, '2020-06-14 02:33:05', '2020-06-14 02:33:05'),
(53, 32, 2, 'Samsung 2', '990000', 5, '2020-06-17 05:09:38', '2020-06-17 05:09:38'),
(54, 32, 3, 'đĐẠKASH  JKDHAS JHDJSAHDH ASJD BHJASB DJASBDJH BMSANDHAS', '10000000', 3, '2020-06-17 05:09:38', '2020-06-17 05:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(30, 'Trả tiền mặt khi nhận hàng', 'Đang chờ xử lý', '2020-06-13 14:24:18', '2020-06-13 14:24:18'),
(31, 'Trả tiền mặt khi nhận hàng', 'Đang chờ xử lý', '2020-06-13 14:25:48', '2020-06-13 14:25:48'),
(32, 'Trả tiền mặt khi nhận hàng', 'Đang chờ xử lý', '2020-06-14 02:33:05', '2020-06-14 02:33:05'),
(33, 'Chuyển khoản ngân hàng', 'Đang chờ xử lý', '2020-06-17 05:09:38', '2020-06-17 05:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image_gallery` text COLLATE utf8mb4_unicode_ci,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `brand_id`, `product_name`, `product_description`, `product_content`, `product_price`, `product_image`, `product_image_gallery`, `product_status`, `created_at`, `updated_at`) VALUES
(2, 3, 3, 'Samsung 2', '<p style=\"box-sizing: border-box; margin-bottom: 8px; margin-top: 0px; cursor: auto; color: #303030; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Mặt Nạ Dưỡng Săn Chắc Da&nbsp;BNBG&nbsp;Vita Genic Jelly Mask 30ml</span></p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 8px; margin-top: 0px; cursor: auto; color: #303030; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\">&ldquo;Mặt nạ được xem như vị cứu tinh đối với l&agrave;n da bạn&rdquo;.&nbsp;<span style=\"box-sizing: border-box; font-weight: bolder;\">BNBG&nbsp;</span><span style=\"box-sizing: border-box; font-weight: bolder;\">Vita Genic Jelly Mask</span>&nbsp;chứa dưỡng chất Vitamin dạng gel đậm đặc, h&agrave;m lượng l&ecirc;n đến 20.000ppm được chiết xuất từ c&aacute;c tr&aacute;i c&acirc;y tươi ở h&ograve;n đảo Jeju xinh đẹp. Mang đến l&agrave;n da khỏe mạnh, b&oacute;ng mượt đầy sức sống, phục hồi độ đ&agrave;n hồi, ngăn ngừa qu&aacute; tr&igrave;nh l&atilde;o h&oacute;a đồng thời cung cấp đủ ẩm cho da lu&ocirc;n mềm, mịn m&agrave;ng.&nbsp;Khi sử dụng&nbsp;<span style=\"box-sizing: border-box; font-weight: bolder;\">BNBG&nbsp;</span><span style=\"box-sizing: border-box; font-weight: bolder;\">Vita Genic Jelly Mask</span>, bạn sẽ được trải nghiệm cảm gi&aacute;c thư gi&atilde;n v&agrave; sảng kho&aacute;i.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 8px; margin-top: 0px; cursor: auto; color: #303030; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">BNBG&nbsp;</span>được biết đến l&agrave; một bệnh viện thẩm mỹ nổi tiếng với đội ngũ b&aacute;c sĩ c&oacute; tay nghề h&agrave;ng đầu tại H&agrave;n Quốc. L&agrave; bệnh viện ứng dụng c&aacute;c c&ocirc;ng nghệ hiện đại tại Ch&acirc;u &Aacute; để nghi&ecirc;n cứu ra c&aacute;c loại mỹ phẩm chăm s&oacute;c da cũng như c&aacute;c phương ph&aacute;p phẫu thuật mới để mang lại vẻ đẹp ho&agrave;n thiện cho phụ nữ.&nbsp;Chương tr&igrave;nh l&agrave;m đẹp uy t&iacute;n tại H&agrave;n Quốc &ldquo;Get It Beauty&rdquo; đ&atilde; đẩy cơn sốt mặt nạ jelly n&agrave;y l&ecirc;n đỉnh điểm khi c&oacute; một chị da đẹp thật đẹp, căng mọng đ&atilde; cho biết sử dụng mặt nạ n&agrave;y.</p>\r\n<p style=\"box-sizing: border-box; margin-bottom: 8px; margin-top: 0px; cursor: auto; color: #303030; font-family: Roboto, sans-serif; font-size: 14px; background-color: #ffffff; user-select: text !important;\"><img class=\"loading lazy-load-active\" style=\"box-sizing: border-box; border-style: none; max-width: 100%; height: auto; display: inline-block; vertical-align: middle; transition: opacity 1s ease 0s; opacity: 1;\" src=\"https://media.hasaki.vn/wysiwyg/nhphuong/PhuongSmall/mat-na-duong-san-chac-da-banobagi-vita-genic-jelly-mask-30ml-2_1.jpg\" alt=\"\" width=\"550\" height=\"550\" data-src=\"https://media.hasaki.vn/wysiwyg/nhphuong/PhuongSmall/mat-na-duong-san-chac-da-banobagi-vita-genic-jelly-mask-30ml-2_1.jpg\" data-was-processed=\"true\" /></p>', '<p>Chiếc điện thoại với những đột ph&aacute; đầy ấn tượng, Samsung Galaxy A21s sở hữu 4 camera sau đa chức năng, camera trước nằm ngay trong tấm k&iacute;nh m&agrave;n h&igrave;nh, mang đến trải nghiệm m&agrave;n h&igrave;nh lớn hấp dẫn hơn bao giờ hết.</p>', '9897000', 'IMG_018564.jpg', '', 1, '2020-06-08 03:49:12', NULL),
(3, 9, 4, 'đĐẠKASH  JKDHAS JHDJSAHDH ASJD BHJASB DJASBDJH BMSANDHAS', '<p>da</p>', '<p>d&aacute;</p>', '10000000', 'asus-vivobook-x40930.png', '[\"514.png\",\"526.png\",\"55.png\"]', 1, '2020-06-17 04:21:31', '2020-06-17 04:21:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(32, 'Nguyễn Văn A', 'Nè', '89183812938', 'khuea@gmail.com', 'Chú thích', '2020-06-13 14:24:17', '2020-06-13 14:24:17'),
(33, 'Bùi Phú Khuyên', '1611061839', '0333093935', 'khuyenpb@gmail.com', 'Đặt hàng', '2020-06-13 14:25:48', '2020-06-13 14:25:48'),
(34, 'Nguyễn Văn A', 'Địa chỉ mẫu', '12345', 'khuyen@gmail.com', 'Ghi chú thêm', '2020-06-14 02:33:05', '2020-06-14 02:33:05'),
(35, 'Bùi Phú Khuyên', '1611061839', '0333093935', 'khuyenpb@gmail.com', 'Không cần', '2020-06-17 05:09:38', '2020-06-17 05:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `slider_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_status`, `slider_image`, `slider_description`) VALUES
(1, 'Slide 1', 1, 'Slide161.jpg', 'Slide 1'),
(2, 'Slide 2', 1, 'Slide253.jpg', 'Slide 2'),
(3, 'Slide 3', 1, 'Slide341.jpg', 'Slide 3'),
(4, 'Slide 4', 1, 'Slide436.jpg', 'Slide 4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
