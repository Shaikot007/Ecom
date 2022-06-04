-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 08:10 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Le barrel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/brand-images/1642340377.png', 1, '2022-01-16 07:39:37', '2022-01-16 07:50:00'),
(2, 'Something', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/brand-images/1642340632.png', 1, '2022-01-16 07:43:52', '2022-01-16 07:43:52'),
(3, 'Costa brava', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/brand-images/1642340941.png', 1, '2022-01-16 07:49:01', '2022-01-16 07:50:40'),
(4, 'Oceanic', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/brand-images/1642341073.png', 1, '2022-01-16 07:51:13', '2022-01-16 07:51:13'),
(5, 'Fountain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/brand-images/1642341093.png', 1, '2022-01-16 07:51:33', '2022-01-16 07:51:33'),
(6, 'Black bird', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/brand-images/1642341119.png', 1, '2022-01-16 07:51:59', '2022-01-16 07:51:59'),
(7, 'Hugo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/brand-images/1642341142.png', 1, '2022-01-16 07:52:22', '2022-01-16 07:52:22'),
(8, 'Mountain', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/brand-images/1642341327.png', 1, '2022-01-16 07:55:27', '2022-01-16 07:55:27'),
(9, 'Bookers', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/brand-images/1642341381.png', 1, '2022-01-16 07:56:21', '2022-01-16 07:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronic', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/category-images/1642344857.jpeg', 1, '2022-01-16 08:54:17', '2022-01-16 08:54:17'),
(2, 'Furniture', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/category-images/1642344939.jpg', 1, '2022-01-16 08:55:39', '2022-01-16 08:55:39'),
(3, 'Clothing & Apparel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/category-images/1642345158.jpeg', 1, '2022-01-16 08:59:18', '2022-01-16 09:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_13_190438_create_sessions_table', 1),
(7, '2022_01_14_125219_create_categories_table', 1),
(8, '2022_01_14_134024_create_sub_categories_table', 1),
(9, '2022_01_14_140846_create_brands_table', 1),
(10, '2022_01_14_144231_create_units_table', 1),
(11, '2022_01_14_150548_create_products_table', 1),
(12, '2022_01_14_160126_create_sub_images_table', 1),
(13, '2022_01_14_162613_create_orders_table', 1),
(14, '2022_01_14_162832_create_order_details_table', 1),
(15, '2022_01_14_163048_create_customers_table', 1),
(16, '2022_05_13_170136_create_rating_reviews_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_timestamp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_sub_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_amount` double(10,2) NOT NULL DEFAULT 0.00,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_timestamp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_timestamp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `order_timestamp`, `order_sub_total`, `tax_total`, `order_total`, `order_status`, `payment_amount`, `payment_status`, `payment_date`, `payment_timestamp`, `delivery_status`, `delivery_date`, `delivery_timestamp`, `delivery_address`, `created_at`, `updated_at`) VALUES
(1, 6, 'June 3, 2022 12:40:49 pm', '1654260049', '100.00', '5.00', '105.00', 'Pending', 0.00, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Banasree, Dhaka, Bangladesh.', '2022-06-03 00:40:49', '2022-06-03 00:40:49'),
(2, 1, 'June 3, 2022 4:19:32 pm', '1654273172', '6,000.00', '300.00', '6,300.00', 'Pending', 0.00, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Banasree, Dhaka, Bangladesh.', '2022-06-03 04:19:32', '2022-06-03 04:19:32'),
(3, 6, 'June 4, 2022 12:07:29 pm', '1654344449', '2,000.00', '100.00', '2,100.00', 'Pending', 0.00, 'Pending', NULL, NULL, 'Pending', NULL, NULL, 'Banasree, Dhaka, Bangladesh.', '2022-06-04 00:07:29', '2022-06-04 00:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 22, 100.00, 1, '2022-06-03 00:40:49', '2022-06-03 00:40:49'),
(2, 2, 17, 1500.00, 1, '2022-06-03 04:19:32', '2022-06-03 04:19:32'),
(3, 2, 9, 4500.00, 1, '2022-06-03 04:19:32', '2022-06-03 04:19:32'),
(4, 3, 6, 2000.00, 1, '2022-06-04 00:07:29', '2022-06-04 00:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` double(10,2) NOT NULL,
  `selling_price` double(10,2) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `sales_count` int(11) NOT NULL DEFAULT 0,
  `review_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `regular_price`, `selling_price`, `short_description`, `long_description`, `image`, `hit_count`, `sales_count`, `review_count`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 9, 9, 4, 'Heel', '009', 800.00, 750.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1642353820.jpg', 0, 0, 0, 1, '2022-01-16 11:23:40', '2022-01-23 08:55:35'),
(2, 3, 8, 8, 3, 'Jacket & coat', '008', 1500.00, 1400.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1642353900.jpg', 0, 0, 0, 1, '2022-01-16 11:25:00', '2022-01-23 08:55:25'),
(3, 3, 7, 7, 3, 'T shirt', '007', 500.00, 450.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1642354156.jpg', 0, 0, 0, 1, '2022-01-16 11:29:16', '2022-01-23 08:55:16'),
(4, 2, 6, 6, 3, 'Chair', '006', 900.00, 800.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1642355050.jpg', 0, 0, 0, 1, '2022-01-16 11:44:10', '2022-01-23 08:54:58'),
(6, 2, 5, 5, 3, 'Light', '005', 2500.00, 2000.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1642355599.jpg', 0, 0, 0, 1, '2022-01-16 11:53:19', '2022-01-23 08:54:32'),
(7, 2, 4, 4, 3, 'Bed', '004', 3000.00, 2800.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1642355661.jpg', 0, 0, 0, 1, '2022-01-16 11:54:21', '2022-01-23 08:54:23'),
(8, 1, 3, 3, 3, 'Smart television', '003', 1500.00, 1200.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1642356080.jpg', 0, 0, 0, 1, '2022-01-16 12:01:20', '2022-01-23 08:54:13'),
(9, 1, 2, 2, 3, 'Vivo', '002', 5000.00, 4500.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1642356376.jpg', 0, 0, 0, 1, '2022-01-16 12:06:16', '2022-01-23 08:54:00'),
(10, 1, 1, 1, 3, 'Laptop', '001', 6000.00, 5000.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1642356560.jpg', 0, 0, 0, 1, '2022-01-16 12:09:20', '2022-01-23 08:52:53'),
(11, 2, 5, 1, 3, 'Foam chair', '006', 700.00, 650.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643001353.png', 0, 0, 0, 1, '2022-01-23 23:15:53', '2022-01-23 23:25:15'),
(12, 2, 4, 2, 3, 'Wooden chair', '006', 1000.00, 900.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643001510.png', 0, 0, 0, 1, '2022-01-23 23:18:30', '2022-01-23 23:25:29'),
(13, 2, 4, 3, 3, 'Rotate chair', '006', 1500.00, 1400.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643001788.png', 0, 0, 0, 1, '2022-01-23 23:23:08', '2022-01-23 23:25:40'),
(14, 2, 6, 4, 3, 'Steel chair', '006', 750.00, 700.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643001894.png', 0, 0, 0, 1, '2022-01-23 23:24:54', '2022-01-23 23:24:54'),
(15, 2, 6, 5, 3, 'Foam chair', '006', 750.00, 700.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643002048.png', 0, 0, 0, 1, '2022-01-23 23:24:55', '2022-01-23 23:27:28'),
(16, 3, 8, 9, 3, 'Long sleeve dress', '008', 1000.00, 800.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643002410.jpg', 0, 0, 0, 1, '2022-01-23 23:33:30', '2022-01-23 23:33:30'),
(17, 3, 8, 8, 3, 'Black white dress', '008', 1800.00, 1500.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643002617.jpg', 0, 0, 0, 1, '2022-01-23 23:36:57', '2022-01-23 23:36:57'),
(18, 3, 9, 7, 4, 'Leather sandal', '008', 1600.00, 1500.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643002684.jpg', 0, 0, 0, 1, '2022-01-23 23:38:04', '2022-01-23 23:39:29'),
(19, 3, 8, 6, 3, 'Brown sweater', '008', 2000.00, 1800.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643005179.jpg', 0, 0, 0, 1, '2022-01-24 00:19:39', '2022-01-24 00:19:39'),
(20, 3, 8, 4, 3, 'Brown leather bag', '008', 900.00, 850.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643005463.jpg', 0, 0, 0, 1, '2022-01-24 00:24:23', '2022-01-24 00:24:23'),
(21, 3, 8, 3, 3, 'Leather vanity bag', '008', 950.00, 900.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643005626.jpg', 0, 0, 0, 1, '2022-01-24 00:27:06', '2022-01-24 00:27:06'),
(22, 1, 2, 2, 3, 'Ear phone', '002', 150.00, 100.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643006037.jpg', 0, 0, 0, 1, '2022-01-24 00:33:57', '2022-01-24 00:33:57'),
(23, 1, 1, 1, 3, 'Head phone', '003', 1200.00, 1000.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643006242.jpg', 0, 0, 0, 1, '2022-01-24 00:37:22', '2022-01-24 00:37:22'),
(24, 1, 2, 5, 3, 'Samsung galaxy', '004', 12000.00, 10000.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643007696.jpg', 0, 0, 0, 1, '2022-01-24 00:40:51', '2022-01-24 01:01:36'),
(25, 1, 2, 6, 3, 'Smart watch realme', '005', 600.00, 500.00, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem dolore, impedit maiores molestias nostrum perferendis perspiciatis, quisquam recusandae tempora totam veritatis! Deleniti expedita libero molestiae numquam omnis quia reprehenderit.</p><p><br></p><ul><li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit.</li><li>Vivamus finibus vel mauris ut vehicula.</li><li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li></ul><p><br></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>', 'images/product-images/1643006688.jpg', 0, 0, 0, 1, '2022-01-24 00:44:48', '2022-01-24 00:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7Twzo4JjTRZGjJq5ta3ddu5nGXphjwQkY1gzcN8H', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSnZJYXhWVUNidHZHRnpmSnMxZ3dGb0JvMzA5SXFrZ1VSR2NQTHBDSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbS9wdWJsaWMvc3RvcnkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1654287774),
('9fzuRDQjngTEGKFHzPzTcVcWMQ8EIDGNSTQj6DfD', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOHZtSmhZbWtrY1lFa0FkODZ6OWljZXBRd1N4dUREOVkwNGhXQUs0cyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbS9wdWJsaWMiO319', 1654193075),
('hE8dAnx12T28p1HyIStoA4NU9fwYFPML9XkZKwY4', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZm9peEFZa1hMR1gwSkJWUTZCRWc1Tnlpc3dZbVo2Rkhta1ByQXBMYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbS9wdWJsaWMiO319', 1654322960),
('Hps9Hz5RmDRTyZynYB8Ce1FdprQONbJMGONewc5c', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiZW1HNFA4V1hTV25GYXR2UklTOVVURXZobmh1ZEFQdWJyazJTcDRDeiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbS9wdWJsaWMvc2hvdy1jYXJ0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHdYYlZ4ZUouZzd2eTRJMVFKREhabXVnWkJ6aU9oQm1xTTlzM0ZQZy81bmc1Qkg5cGNONm4yIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCR3WGJWeGVKLmc3dnk0STFRSkRIWm11Z1pCemlPaEJtcU05czNGUGcvNW5nNUJIOXBjTjZuMiI7czo0OiJjYXJ0IjthOjE6e3M6NzoiZGVmYXVsdCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MTp7czozMjoiMGE1ZmVmYjdkZTkwM2FiMjE5MTY2N2ExN2M0MWVmMGEiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjoxMTp7czo1OiJyb3dJZCI7czozMjoiMGE1ZmVmYjdkZTkwM2FiMjE5MTY2N2ExN2M0MWVmMGEiO3M6MjoiaWQiO2k6OTtzOjM6InF0eSI7czoxOiIxIjtzOjQ6Im5hbWUiO3M6NDoiVml2byI7czo1OiJwcmljZSI7ZDo0NTAwO3M6Njoid2VpZ2h0IjtkOjA7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjI6e3M6ODoiACoAaXRlbXMiO2E6MTp7czo1OiJpbWFnZSI7czozNjoiaW1hZ2VzL3Byb2R1Y3QtaW1hZ2VzLzE2NDIzNTYzNzYuanBnIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjc6InRheFJhdGUiO2k6NTtzOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDY6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBkaXNjb3VudFJhdGUiO2k6MDtzOjg6Imluc3RhbmNlIjtzOjc6ImRlZmF1bHQiO319czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO319fQ==', 1654262296),
('xuU1Bkxzu8HMudMpYzBDpOtSfZsWdmbpGcVDVpSV', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT3NFSUxZdFJEWkRLOTJUVlZNN2MyT280b3dRNlFFZXlkUHc3em93ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbS9wdWJsaWMvc2hvdy1jYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjE6e3M6NzoiZGVmYXVsdCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MDp7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fX0=', 1654287575),
('ZGofqyjf9qvuADRiv9iOgTCNn5v3OtZtV0izJt8w', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3hCUHhFSjVreGlCUlhSSzdVaERxMzVFM2M3TW5nZmpUaXJTbW5mZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbS9wdWJsaWMiO319', 1654238617);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Computer & Laptop', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/sub-category-images/1642346372.jpg', 1, '2022-01-16 09:19:32', '2022-01-16 09:19:32'),
(2, 1, 'Smartphone', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/sub-category-images/1642346605.jpg', 1, '2022-01-16 09:20:30', '2022-01-16 09:23:25'),
(3, 1, 'Television', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/sub-category-images/1642346761.jpg', 1, '2022-01-16 09:26:01', '2022-01-16 09:26:01'),
(4, 2, 'Bedroom furniture', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/sub-category-images/1642347115.jpg', 1, '2022-01-16 09:31:55', '2022-01-16 09:31:55'),
(5, 2, 'Livingroom furniture', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/sub-category-images/1642347185.jpg', 1, '2022-01-16 09:33:05', '2022-01-16 09:33:05'),
(6, 2, 'Office furniture', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/sub-category-images/1642347265.jpg', 1, '2022-01-16 09:34:25', '2022-01-16 09:34:25'),
(7, 3, 'Mens fashion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/sub-category-images/1642347901.jpg', 1, '2022-01-16 09:45:01', '2022-01-23 23:35:45'),
(8, 3, 'Womens fashion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/sub-category-images/1642347953.jpg', 1, '2022-01-16 09:45:53', '2022-01-23 23:35:35'),
(9, 3, 'Shoes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'images/sub-category-images/1642348008.jpg', 1, '2022-01-16 09:46:48', '2022-01-16 09:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `sub_images`
--

CREATE TABLE `sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_images`
--

INSERT INTO `sub_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/product-sub-images/9321642353820.jpg', '2022-01-16 11:23:40', '2022-01-16 11:23:40'),
(2, 1, 'images/product-sub-images/1211642353820.jpg', '2022-01-16 11:23:40', '2022-01-16 11:23:40'),
(3, 1, 'images/product-sub-images/1731642353820.jpg', '2022-01-16 11:23:40', '2022-01-16 11:23:40'),
(4, 1, 'images/product-sub-images/1911642353820.jpg', '2022-01-16 11:23:40', '2022-01-16 11:23:40'),
(5, 2, 'images/product-sub-images/3181642353900.jpg', '2022-01-16 11:25:00', '2022-01-16 11:25:00'),
(6, 2, 'images/product-sub-images/5551642353900.jpg', '2022-01-16 11:25:00', '2022-01-16 11:25:00'),
(7, 2, 'images/product-sub-images/4001642353900.jpg', '2022-01-16 11:25:00', '2022-01-16 11:25:00'),
(8, 2, 'images/product-sub-images/4991642353900.jpg', '2022-01-16 11:25:00', '2022-01-16 11:25:00'),
(9, 3, 'images/product-sub-images/4161642354156.jpg', '2022-01-16 11:29:16', '2022-01-16 11:29:16'),
(10, 3, 'images/product-sub-images/5241642354156.jpg', '2022-01-16 11:29:16', '2022-01-16 11:29:16'),
(11, 3, 'images/product-sub-images/7171642354156.jpg', '2022-01-16 11:29:16', '2022-01-16 11:29:16'),
(12, 3, 'images/product-sub-images/5651642354156.jpg', '2022-01-16 11:29:16', '2022-01-16 11:29:16'),
(13, 4, 'images/product-sub-images/9991642355050.jpg', '2022-01-16 11:44:10', '2022-01-16 11:44:10'),
(14, 4, 'images/product-sub-images/2691642355050.jpg', '2022-01-16 11:44:10', '2022-01-16 11:44:10'),
(15, 4, 'images/product-sub-images/2001642355050.jpg', '2022-01-16 11:44:10', '2022-01-16 11:44:10'),
(16, 4, 'images/product-sub-images/8801642355050.jpg', '2022-01-16 11:44:10', '2022-01-16 11:44:10'),
(21, 6, 'images/product-sub-images/5361642355599.jpg', '2022-01-16 11:53:19', '2022-01-16 11:53:19'),
(22, 6, 'images/product-sub-images/5241642355599.jpg', '2022-01-16 11:53:19', '2022-01-16 11:53:19'),
(23, 6, 'images/product-sub-images/3771642355599.jpg', '2022-01-16 11:53:19', '2022-01-16 11:53:19'),
(24, 6, 'images/product-sub-images/3651642355600.jpg', '2022-01-16 11:53:20', '2022-01-16 11:53:20'),
(25, 7, 'images/product-sub-images/7271642355661.jpg', '2022-01-16 11:54:21', '2022-01-16 11:54:21'),
(26, 7, 'images/product-sub-images/1801642355661.jpg', '2022-01-16 11:54:21', '2022-01-16 11:54:21'),
(27, 7, 'images/product-sub-images/2151642355661.jpg', '2022-01-16 11:54:21', '2022-01-16 11:54:21'),
(28, 7, 'images/product-sub-images/2891642355661.jpg', '2022-01-16 11:54:21', '2022-01-16 11:54:21'),
(29, 8, 'images/product-sub-images/9691642356080.jpg', '2022-01-16 12:01:20', '2022-01-16 12:01:20'),
(30, 8, 'images/product-sub-images/9781642356080.jpg', '2022-01-16 12:01:20', '2022-01-16 12:01:20'),
(31, 8, 'images/product-sub-images/1231642356080.jpg', '2022-01-16 12:01:20', '2022-01-16 12:01:20'),
(32, 8, 'images/product-sub-images/4251642356080.jpg', '2022-01-16 12:01:20', '2022-01-16 12:01:20'),
(33, 9, 'images/product-sub-images/4771642356376.jpg', '2022-01-16 12:06:16', '2022-01-16 12:06:16'),
(34, 9, 'images/product-sub-images/2381642356376.jpg', '2022-01-16 12:06:16', '2022-01-16 12:06:16'),
(35, 9, 'images/product-sub-images/8221642356376.jpg', '2022-01-16 12:06:16', '2022-01-16 12:06:16'),
(36, 9, 'images/product-sub-images/5561642356376.jpg', '2022-01-16 12:06:16', '2022-01-16 12:06:16'),
(37, 10, 'images/product-sub-images/5511642356560.jpg', '2022-01-16 12:09:20', '2022-01-16 12:09:20'),
(38, 10, 'images/product-sub-images/2951642356560.jpg', '2022-01-16 12:09:20', '2022-01-16 12:09:20'),
(39, 10, 'images/product-sub-images/7321642356560.jpg', '2022-01-16 12:09:20', '2022-01-16 12:09:20'),
(40, 10, 'images/product-sub-images/4301642356560.jpg', '2022-01-16 12:09:20', '2022-01-16 12:09:20'),
(41, 11, 'images/product-sub-images/3741643001353.png', '2022-01-23 23:15:53', '2022-01-23 23:15:53'),
(42, 11, 'images/product-sub-images/3741643001353.png', '2022-01-23 23:15:53', '2022-01-23 23:15:53'),
(43, 11, 'images/product-sub-images/7891643001353.png', '2022-01-23 23:15:53', '2022-01-23 23:15:53'),
(44, 11, 'images/product-sub-images/7541643001353.png', '2022-01-23 23:15:53', '2022-01-23 23:15:53'),
(45, 12, 'images/product-sub-images/9841643001510.png', '2022-01-23 23:18:30', '2022-01-23 23:18:30'),
(46, 12, 'images/product-sub-images/3511643001510.png', '2022-01-23 23:18:30', '2022-01-23 23:18:30'),
(47, 12, 'images/product-sub-images/3541643001510.png', '2022-01-23 23:18:30', '2022-01-23 23:18:30'),
(48, 12, 'images/product-sub-images/1891643001510.png', '2022-01-23 23:18:30', '2022-01-23 23:18:30'),
(49, 13, 'images/product-sub-images/5751643001788.png', '2022-01-23 23:23:08', '2022-01-23 23:23:08'),
(50, 13, 'images/product-sub-images/8761643001788.png', '2022-01-23 23:23:08', '2022-01-23 23:23:08'),
(51, 13, 'images/product-sub-images/2311643001788.png', '2022-01-23 23:23:08', '2022-01-23 23:23:08'),
(52, 13, 'images/product-sub-images/1861643001788.png', '2022-01-23 23:23:08', '2022-01-23 23:23:08'),
(53, 14, 'images/product-sub-images/3521643001895.png', '2022-01-23 23:24:55', '2022-01-23 23:24:55'),
(54, 14, 'images/product-sub-images/5641643001895.png', '2022-01-23 23:24:55', '2022-01-23 23:24:55'),
(55, 14, 'images/product-sub-images/6181643001895.png', '2022-01-23 23:24:55', '2022-01-23 23:24:55'),
(56, 14, 'images/product-sub-images/161643001895.png', '2022-01-23 23:24:55', '2022-01-23 23:24:55'),
(57, 15, 'images/product-sub-images/7581643001895.png', '2022-01-23 23:24:55', '2022-01-23 23:24:55'),
(58, 15, 'images/product-sub-images/3821643001895.png', '2022-01-23 23:24:55', '2022-01-23 23:24:55'),
(59, 15, 'images/product-sub-images/2811643001895.png', '2022-01-23 23:24:55', '2022-01-23 23:24:55'),
(60, 15, 'images/product-sub-images/9041643001895.png', '2022-01-23 23:24:55', '2022-01-23 23:24:55'),
(61, 16, 'images/product-sub-images/1361643002410.jpg', '2022-01-23 23:33:30', '2022-01-23 23:33:30'),
(62, 16, 'images/product-sub-images/7361643002410.jpg', '2022-01-23 23:33:30', '2022-01-23 23:33:30'),
(63, 16, 'images/product-sub-images/2661643002410.jpg', '2022-01-23 23:33:30', '2022-01-23 23:33:30'),
(64, 16, 'images/product-sub-images/3761643002410.jpg', '2022-01-23 23:33:30', '2022-01-23 23:33:30'),
(65, 17, 'images/product-sub-images/1531643002617.jpg', '2022-01-23 23:36:57', '2022-01-23 23:36:57'),
(66, 17, 'images/product-sub-images/6221643002617.jpg', '2022-01-23 23:36:57', '2022-01-23 23:36:57'),
(67, 17, 'images/product-sub-images/4891643002617.jpg', '2022-01-23 23:36:57', '2022-01-23 23:36:57'),
(68, 17, 'images/product-sub-images/8801643002617.jpg', '2022-01-23 23:36:57', '2022-01-23 23:36:57'),
(69, 18, 'images/product-sub-images/2461643002685.jpg', '2022-01-23 23:38:05', '2022-01-23 23:38:05'),
(70, 18, 'images/product-sub-images/1741643002685.jpg', '2022-01-23 23:38:05', '2022-01-23 23:38:05'),
(71, 18, 'images/product-sub-images/2301643002685.jpg', '2022-01-23 23:38:05', '2022-01-23 23:38:05'),
(72, 18, 'images/product-sub-images/2001643002685.jpg', '2022-01-23 23:38:05', '2022-01-23 23:38:05'),
(73, 19, 'images/product-sub-images/7881643005179.jpg', '2022-01-24 00:19:39', '2022-01-24 00:19:39'),
(74, 19, 'images/product-sub-images/7351643005179.jpg', '2022-01-24 00:19:39', '2022-01-24 00:19:39'),
(75, 19, 'images/product-sub-images/5801643005179.jpg', '2022-01-24 00:19:39', '2022-01-24 00:19:39'),
(76, 19, 'images/product-sub-images/2751643005179.jpg', '2022-01-24 00:19:39', '2022-01-24 00:19:39'),
(77, 20, 'images/product-sub-images/161643005463.jpg', '2022-01-24 00:24:23', '2022-01-24 00:24:23'),
(78, 20, 'images/product-sub-images/8511643005463.jpg', '2022-01-24 00:24:23', '2022-01-24 00:24:23'),
(79, 20, 'images/product-sub-images/5971643005463.jpg', '2022-01-24 00:24:23', '2022-01-24 00:24:23'),
(80, 20, 'images/product-sub-images/9851643005464.jpg', '2022-01-24 00:24:24', '2022-01-24 00:24:24'),
(81, 21, 'images/product-sub-images/4181643005626.jpg', '2022-01-24 00:27:06', '2022-01-24 00:27:06'),
(82, 21, 'images/product-sub-images/9361643005626.jpg', '2022-01-24 00:27:06', '2022-01-24 00:27:06'),
(83, 21, 'images/product-sub-images/6521643005626.jpg', '2022-01-24 00:27:06', '2022-01-24 00:27:06'),
(84, 21, 'images/product-sub-images/1981643005626.jpg', '2022-01-24 00:27:06', '2022-01-24 00:27:06'),
(85, 22, 'images/product-sub-images/201643006037.jpg', '2022-01-24 00:33:57', '2022-01-24 00:33:57'),
(86, 22, 'images/product-sub-images/4601643006037.jpg', '2022-01-24 00:33:57', '2022-01-24 00:33:57'),
(87, 22, 'images/product-sub-images/1361643006037.jpg', '2022-01-24 00:33:57', '2022-01-24 00:33:57'),
(88, 22, 'images/product-sub-images/4761643006037.jpg', '2022-01-24 00:33:57', '2022-01-24 00:33:57'),
(89, 23, 'images/product-sub-images/1051643006242.jpg', '2022-01-24 00:37:22', '2022-01-24 00:37:22'),
(90, 23, 'images/product-sub-images/6561643006242.jpg', '2022-01-24 00:37:22', '2022-01-24 00:37:22'),
(91, 23, 'images/product-sub-images/2971643006242.jpg', '2022-01-24 00:37:22', '2022-01-24 00:37:22'),
(92, 23, 'images/product-sub-images/5081643006242.jpg', '2022-01-24 00:37:22', '2022-01-24 00:37:22'),
(93, 24, 'images/product-sub-images/5531643006451.jpg', '2022-01-24 00:40:51', '2022-01-24 00:40:51'),
(94, 24, 'images/product-sub-images/3141643006451.jpg', '2022-01-24 00:40:51', '2022-01-24 00:40:51'),
(95, 24, 'images/product-sub-images/9601643006451.jpg', '2022-01-24 00:40:51', '2022-01-24 00:40:51'),
(96, 24, 'images/product-sub-images/6701643006451.jpg', '2022-01-24 00:40:51', '2022-01-24 00:40:51'),
(97, 25, 'images/product-sub-images/5431643006688.jpg', '2022-01-24 00:44:48', '2022-01-24 00:44:48'),
(98, 25, 'images/product-sub-images/3091643006688.jpg', '2022-01-24 00:44:48', '2022-01-24 00:44:48'),
(99, 25, 'images/product-sub-images/7201643006688.jpg', '2022-01-24 00:44:48', '2022-01-24 00:44:48'),
(100, 25, 'images/product-sub-images/4981643006688.jpg', '2022-01-24 00:44:48', '2022-01-24 00:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, '2022-01-16 07:59:23', '2022-01-16 08:00:13'),
(2, 'g', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, '2022-01-16 07:59:33', '2022-01-16 07:59:33'),
(3, 'piece', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, '2022-01-16 08:00:00', '2022-01-16 08:00:00'),
(4, 'set', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, '2022-01-16 08:03:04', '2022-01-16 08:03:04'),
(5, 'liter', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 1, '2022-01-16 08:04:03', '2022-01-16 08:04:03');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `phone_number`, `address`, `user_type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@ecom.com', NULL, '$2y$10$wXbVxeJ.g7vy4I1QJDHZmugZBziOhBmqM9s3FPg/5ng5BH9pcN6n2', NULL, NULL, '01716330332', 'Banasree, Dhaka, Bangladesh.', 'admin', NULL, NULL, NULL, '2022-05-08 06:05:25', '2022-05-08 06:05:25'),
(6, 'Shaikot', 'shaikot999@gmail.com', NULL, '$2y$10$vVmotWudNuHYwsTwlT9IuegbBXXAy0VC1m5w71YP6Cu.7v2vLEvhC', NULL, NULL, '01716330332', 'Banasree, Dhaka, Bangladesh.', 'user', NULL, NULL, NULL, '2022-06-02 11:28:32', '2022-06-02 11:28:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_images`
--
ALTER TABLE `sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_images`
--
ALTER TABLE `sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
