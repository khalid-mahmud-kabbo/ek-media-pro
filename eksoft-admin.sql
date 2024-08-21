-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 12:08 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `image`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', 'profile.png', 1, NULL, '$2y$10$hhhbRYRIhHZd1Q7qkyYAaeak.2YciR8zvkOJfUtkwrv1G3mpAwfTq', NULL, '2024-05-01 05:18:07', '2024-05-01 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Small_Image` varchar(191) NOT NULL,
  `Big_Image` varchar(191) NOT NULL,
  `en_Title` varchar(191) NOT NULL,
  `en_Description_One` text NOT NULL,
  `en_Description_Two` text NOT NULL,
  `fr_Title` varchar(191) NOT NULL,
  `fr_Description_One` text NOT NULL,
  `fr_Description_Two` text NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `Small_Image`, `Big_Image`, `en_Title`, `en_Description_One`, `en_Description_Two`, `fr_Title`, `fr_Description_One`, `fr_Description_Two`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'blog-1.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(2, 'blog-2.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07');
INSERT INTO `blogs` (`id`, `Small_Image`, `Big_Image`, `en_Title`, `en_Description_One`, `en_Description_Two`, `fr_Title`, `fr_Description_One`, `fr_Description_Two`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'blog-3.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(4, 'blog-4.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07');
INSERT INTO `blogs` (`id`, `Small_Image`, `Big_Image`, `en_Title`, `en_Description_One`, `en_Description_Two`, `fr_Title`, `fr_Description_One`, `fr_Description_Two`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'blog-5.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(6, 'blog-6.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Blog_Id` bigint(20) UNSIGNED NOT NULL,
  `User_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Name` varchar(191) DEFAULT NULL,
  `Email` varchar(191) DEFAULT NULL,
  `Comment` longtext DEFAULT NULL,
  `Parent_Id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_BrandName` varchar(191) NOT NULL,
  `fr_BrandName` varchar(191) NOT NULL,
  `en_BrandSlug` varchar(191) NOT NULL,
  `fr_BrandSlug` varchar(191) NOT NULL,
  `BrandImage` varchar(191) NOT NULL,
  `Status` varchar(191) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `en_BrandName`, `fr_BrandName`, `en_BrandSlug`, `fr_BrandSlug`, `BrandImage`, `Status`, `created_at`, `updated_at`) VALUES
(17, 'Non Brand', 'নন ব্র্যান্ড', 'non-brand', 'n-a', '66b25c5f2fcbe1722965087.png', '1', '2024-08-06 15:24:47', '2024-08-06 15:24:47'),
(18, 'Redmi', 'রেডমি', 'redmi', 'n-a', '66b25cdf7ee9f1722965215.png', '1', '2024-08-06 15:26:55', '2024-08-06 15:26:55'),
(19, 'Vivo', 'ভিভো', 'vivo', 'n-a', '66b25d537b8f11722965331.png', '1', '2024-08-06 15:28:51', '2024-08-06 15:28:51'),
(20, 'RFL GAS STOVE', 'আর এফ এল গ্যাস স্টোভ', 'rfl-gas-stove', 'n-a', '66b25e18230551722965528.png', '1', '2024-08-06 15:32:08', '2024-08-06 15:32:08'),
(21, 'Realme', 'রিয়েলমি', 'realme', 'n-a', '66b25ea17b9f01722965665.png', '1', '2024-08-06 15:34:25', '2024-08-06 15:34:25'),
(22, 'samsung', 'স্যামস্যাং', 'samsung', 'n-a', '66b25fbf9a03f1722965951.png', '1', '2024-08-06 15:39:11', '2024-08-06 15:39:11'),
(23, 'Oppo', 'ওপো', 'oppo', 'n-a', '66b26013a9aa01722966035.png', '1', '2024-08-06 15:40:35', '2024-08-06 15:40:35'),
(24, 'gree', 'গ্রে', 'gree', 'n-a', '66b26045770621722966085.png', '1', '2024-08-06 15:41:25', '2024-08-06 15:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_Category_Name` varchar(191) NOT NULL,
  `fr_Category_Name` varchar(191) NOT NULL,
  `en_Category_Slug` varchar(191) NOT NULL,
  `fr_Category_Slug` varchar(191) NOT NULL,
  `Category_Icon` varchar(191) DEFAULT NULL,
  `en_Description` varchar(191) DEFAULT NULL,
  `fr_Description` varchar(191) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `en_Category_Name`, `fr_Category_Name`, `en_Category_Slug`, `fr_Category_Slug`, `Category_Icon`, `en_Description`, `fr_Description`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Household Festival', 'Household Festival', 'household-festival', 'household-festival', 'https://cdn.asrmart.com/assets/images/0556670_household-festival_120.jpeg', 'Household Festival', 'Household Festival', 1, '2024-05-01 05:18:07', '2024-08-04 14:12:35'),
(4, 'Electronic', 'إلكتروني', 'electronic', 'n-a', 'https://cdn.asrmart.com/assets/images/0533529_electronics_120.webp', 'Electronic', 'Electronic', 1, '2024-05-01 05:18:07', '2024-08-04 14:09:42'),
(15, 'Pharmacy', 'Pharmacy', 'pharmacy', 'pharmacy', 'https://cdn.asrmart.com/assets/images/0656379_pharmacy_120.jpeg', 'Pharmacy', 'Pharmacy', 1, '2024-08-04 13:47:11', '2024-08-04 14:12:59'),
(16, 'Special Weekly Offer', 'Special Weekly Offer', 'special-weekly-offer', 'special-weekly-offer', 'https://cdn.asrmart.com/assets/images/0578718_special-weekly-offer_120.jpeg', 'Special Weekly Offer', 'Special Weekly Offer', 1, '2024-08-04 14:13:31', '2024-08-04 14:13:31'),
(17, 'Furniture Big Saving Days', 'Furniture Big Saving Days', 'furniture-big-saving-days', 'furniture-big-saving-days', 'https://cdn.asrmart.com/assets/images/0584115_furniture-big-saving-days_120.jpeg', 'Furniture Big Saving Days', 'Furniture Big Saving Days', 1, '2024-08-04 14:13:59', '2024-08-04 14:13:59'),
(18, 'Building Materials', 'Building Materials', 'building-materials', 'building-materials', 'https://cdn.asrmart.com/assets/images/0535207_building-materials_120.jpeg', 'Building Materials', 'Building Materials', 1, '2024-08-04 14:15:01', '2024-08-04 14:15:01'),
(19, 'Toys & Baby Products', 'Toys & Baby Products', 'toys-baby-products', 'toys-baby-products', 'https://cdn.asrmart.com/assets/images/0671264_toys-baby-products_120.jpeg', 'Toys & Baby Products', 'Toys & Baby Products', 1, '2024-08-04 14:15:52', '2024-08-04 14:15:52'),
(20, 'Home & Living', 'Home & Living', 'home-living', 'home-living', 'https://cdn.asrmart.com/assets/images/0533528_home-living_120.webp', 'Home & Living', 'Home & Living', 1, '2024-08-04 14:16:21', '2024-08-04 14:16:21'),
(21, 'Food & Grocery', 'Food & Grocery', 'food-grocery', 'food-grocery', 'https://cdn.asrmart.com/assets/images/0533533_food-grocery_120.webp', 'Food & Grocery', 'Food & Grocery', 1, '2024-08-04 14:16:50', '2024-08-04 14:16:50'),
(22, 'Fashion', 'Fashion', 'fashion', 'fashion', 'https://cdn.asrmart.com/assets/images/0667855_fashion_120.jpeg', 'Fashion', 'Fashion', 1, '2024-08-04 14:17:20', '2024-08-04 14:17:20'),
(23, 'Bags & Travel', 'Bags & Travel', 'bags-travel', 'bags-travel', 'https://cdn.asrmart.com/assets/images/0634933_bags-travel_120.jpeg', 'Bags & Travel', 'Bags & Travel', 1, '2024-08-04 14:18:06', '2024-08-04 14:18:06'),
(24, 'Jewelleries & Watches', 'Jewelleries & Watches', 'jewelleries-watches', 'jewelleries-watches', 'https://cdn.asrmart.com/assets/images/0612938_jewelleries-watches_120.jpeg', 'Jewelleries & Watches', 'Jewelleries & Watches', 1, '2024-08-04 14:18:45', '2024-08-04 14:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_information`
--

CREATE TABLE `footer_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Logo` varchar(191) NOT NULL,
  `Street_Address` text NOT NULL,
  `Contact` text NOT NULL,
  `Email` text NOT NULL,
  `News_Letter` text NOT NULL,
  `Accepts` text NOT NULL,
  `Design_Developed` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_information`
--

INSERT INTO `footer_information` (`id`, `Logo`, `Street_Address`, `Contact`, `Email`, `News_Letter`, `Accepts`, `Design_Developed`, `created_at`, `updated_at`) VALUES
(1, 'footer-logo.png', '<p class=\"address-text\">685 Market Street <br /> San Francisco, CA 94105, <br />United States</p>', ' <p class=\"contact\">Call us: 1.800.000.6690</p>', ' <p class=\"contact\">Email: support@zainikthemes.com</p>', '<p class=\"newsletter-text\">Receive our latest updates about our <br /> products and promotions.</p>', 'accepts-image.png', '<p class=\"copyright-text\">Designed And Developed By Team <a class=\"brand-name\" href=\"#\">Zainiktheme</a> Digital Agency @2021</p>', '2024-05-01 05:18:07', '2024-05-01 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(191) DEFAULT NULL,
  `Logo` varchar(191) DEFAULT NULL,
  `Favicon` varchar(191) DEFAULT NULL,
  `MetaDescription` text DEFAULT NULL,
  `MetaKeywords` text DEFAULT NULL,
  `MetaAuthor` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `Title`, `Logo`, `Favicon`, `MetaDescription`, `MetaKeywords`, `MetaAuthor`, `created_at`, `updated_at`) VALUES
(1, 'EK Softwares - Ecommerce', 'ekoftwares.png', 'favicon.png', 'EK Softwares - Ecommerce', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', 'EK Softwares', '2024-05-01 05:18:07', '2024-05-01 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Location` varchar(191) NOT NULL,
  `en_Title` varchar(191) NOT NULL,
  `en_Description_One` text NOT NULL,
  `en_Description_Two` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `fr_Title` varchar(191) NOT NULL,
  `fr_Description_One` text NOT NULL,
  `fr_Description_Two` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `Location`, `en_Title`, `en_Description_One`, `en_Description_Two`, `image`, `fr_Title`, `fr_Description_One`, `fr_Description_Two`, `created_at`, `updated_at`) VALUES
(1, 'many_goods', 'Many Goods', 'Popular Categories', NULL, NULL, 'العديد من السلع', 'الفئات الشعبية', NULL, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(2, 'products', 'New Products', 'Products', NULL, NULL, 'منتجات جديدة', 'منتجات', NULL, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(3, 'about_us', 'About Us', 'The Story Of Borning <br /> Company EK Softwares', NULL, 'about-home.jpg', 'معلومات عنا', '<div>قصة بورنينج</div><div>شركة زايريتو</div>', NULL, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(4, 'popular_products', 'Popular Products', 'Trending Products', NULL, NULL, 'المنتجات الشعبية', 'تتجه المنتجات', NULL, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(5, 'blogspot', 'Blogspot', 'TNews From Our Blog', NULL, NULL, 'بلوغسبوت', 'أخبار من مدونتنا', NULL, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(6, 'image_gallery', 'image gallery', 'Image Gallery To EK Softwares For Making Better Online Shopping Experience', NULL, NULL, 'معرض الصور', 'معرض الصور لتقديم تجربة تسوق أفضل عبر الإنترنت', NULL, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(7, 'testimonial', 'Testimonial', 'What People Are <br />Saying About Oursalve', '<p>Praesent sapien massa, convallis a pellentesque nec, egestas\r\n                    Vivamus magna justo, lacinia eget consectetur sed</p>', NULL, 'شهادة', '<div>من هم الناس</div><div>نقول عن أنفسنا</div>', '<p>كتلة الحاضر حكيمة وليست من وادي القناص</p>', '2024-05-01 05:18:07', '2024-05-01 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(191) NOT NULL,
  `fr_name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `is_static` tinyint(4) NOT NULL DEFAULT 0,
  `url` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `en_name`, `fr_name`, `slug`, `is_static`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'ميزون', 'home', 1, 'https://nahallc.com', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(2, 'About Us', 'يقترح', 'about-us', 1, 'https://nahallc.com/about-us', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(3, 'Blog', 'مقالات', 'blog', 1, 'https://nahallc.com/blog', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(4, 'Contact', 'اتصل', 'contact', 1, 'https://nahallc.com/contact-us', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(5, 'Shop', 'محل', 'shop', 1, '#', 1, '2024-05-01 05:18:07', '2024-05-01 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_09_121846_create_sliders_table', 1),
(6, '2021_12_10_093039_create_advertises_table', 1),
(7, '2021_12_10_115419_create_subscribes_table', 1),
(8, '2021_12_10_130647_create_contactuses_table', 1),
(9, '2021_12_11_044026_create_general_settings_table', 1),
(10, '2021_12_11_055316_create_blogs_table', 1),
(11, '2021_12_11_064014_create_tags_table', 1),
(12, '2021_12_11_085814_create_categories_table', 1),
(13, '2021_12_13_053434_create_brands_table', 1),
(14, '2021_12_14_054525_create_image_galleries_table', 1),
(15, '2021_12_17_162217_create_blog_comments_table', 1),
(16, '2021_12_18_114630_create_products_table', 1),
(17, '2021_12_21_063547_create_sizes_table', 1),
(18, '2021_12_21_063604_create_colors_table', 1),
(19, '2021_12_21_112441_create_size_product_table', 1),
(20, '2021_12_21_112607_create_color_product_table', 1),
(21, '2021_12_22_055720_create_product_tags_table', 1),
(22, '2021_12_28_064913_create_cutomer_services_table', 1),
(23, '2021_12_28_093443_create_company_stories_table', 1),
(24, '2021_12_28_112636_create_testimonials_table', 1),
(25, '2021_12_29_095224_create_admins_table', 1),
(26, '2021_12_29_121919_create_wishlists_table', 1),
(27, '2021_12_30_053914_create_compare_lists_table', 1),
(28, '2021_12_31_135900_create_coupons_table', 1),
(29, '2022_01_02_093244_create_billings_table', 1),
(30, '2022_01_02_093245_create_shippings_table', 1),
(31, '2022_01_02_093501_create_orders_table', 1),
(32, '2022_01_02_093503_create_order_details_table', 1),
(33, '2022_01_12_062951_create_homepages_table', 1),
(34, '2022_01_12_075047_create_about_us_pages_table', 1),
(35, '2022_01_12_131110_create_social_links_table', 1),
(36, '2022_01_13_062857_create_footer_information_table', 1),
(37, '2022_01_15_071424_create_settings_table', 1),
(38, '2022_01_15_100153_create_currencies_table', 1),
(39, '2022_01_18_135821_create_payment_platforms_table', 1),
(40, '2022_02_02_105940_create_product_reviews_table', 1),
(41, '2022_02_07_132905_create_faqs_table', 1),
(42, '2022_02_11_104412_create_product_tag_lists_table', 1),
(43, '2022_02_12_053228_create_item_tags_table', 1),
(44, '2022_03_23_103714_add_digital_link_to_products', 1),
(45, '2022_03_25_110037_add_slug_to_payment_platforms', 1),
(46, '2022_03_28_073649_add_txn_to_orders', 1),
(47, '2022_03_29_085050_add_biil_shipp_to_orders', 1),
(48, '2022_03_30_054051_create_pages_table', 1),
(49, '2022_03_30_092448_create_menus_table', 1),
(50, '2022_03_30_093035_create_sub_menus_table', 1),
(51, '2022_03_31_111150_create_languages_table', 1),
(52, '2022_04_02_104941_create_taxes_table', 1),
(53, '2022_04_04_063654_create_delivery_charges_table', 1),
(54, '2022_04_05_085525_add_google_id_to_users', 1),
(55, '2022_04_09_045107_create_seo_settings_table', 1),
(56, '2022_04_14_071517_create_permission_tables', 1),
(57, '2022_04_20_070253_create_sitemaps_table', 1),
(58, '2022_04_20_101813_add_question_fr_and_answer_fr_to_faqs', 1),
(59, '2022_04_21_103242_add_status_to_users', 1),
(60, '2022_05_19_072147_create_special_offers_table', 1),
(61, '2022_06_20_110213_add_position_to_currencies', 1),
(62, '2022_06_27_063650_create_banners_table', 1),
(63, '2024_08_20_135416_create_offers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'category-list', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(2, 'category-create', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(3, 'category-edit', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(4, 'category-delete', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(5, 'brand-list', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(6, 'brand-create', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(7, 'brand-edit', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(8, 'brand-delete', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(49, 'blog-list', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(50, 'blog-create', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(51, 'blog-edit', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(52, 'blog-delete', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(57, 'user-list', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(58, 'user-create', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(59, 'user-edit', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(60, 'user-delete', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(61, 'cms-list', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(62, 'cms-create', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(63, 'cms-edit', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(64, 'cms-delete', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag`, `created_at`, `updated_at`) VALUES
(41, 24, 'HOT - COLLECTION', '2024-08-06 15:51:17', '2024-08-06 15:51:17'),
(43, 25, 'NEW - COLLECTION', '2024-08-06 16:00:13', '2024-08-06 16:00:13'),
(46, 28, 'NEW - COLLECTION', '2024-08-06 16:11:14', '2024-08-06 16:11:14'),
(47, 29, 'NEW - COLLECTION', '2024-08-06 16:15:35', '2024-08-06 16:15:35'),
(48, 30, 'NEW - COLLECTION', '2024-08-06 16:19:00', '2024-08-06 16:19:00'),
(49, 31, 'NEW - COLLECTION', '2024-08-06 16:21:28', '2024-08-06 16:21:28'),
(50, 27, 'NEW - COLLECTION', '2024-08-07 18:10:36', '2024-08-07 18:10:36'),
(57, 26, 'HOT - COLLECTION', '2024-08-13 13:49:15', '2024-08-13 13:49:15'),
(58, 26, 'Deal Of The Day', '2024-08-13 13:49:15', '2024-08-13 13:49:15'),
(61, 44, '1', '2024-08-20 11:28:56', '2024-08-20 11:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag_lists`
--

CREATE TABLE `product_tag_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag_lists`
--

INSERT INTO `product_tag_lists` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ELLA - HALOTHEMES', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(2, 'HOT - COLLECTION', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(3, 'NEW - COLLECTION', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(4, 'ELLA - CALTOUS', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(5, 'Deal Of The Day', '2024-08-04 23:55:19', '2024-08-04 23:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2024-05-01 05:18:06', '2024-05-01 05:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `slug`, `title`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Home', 'ASR MART | Your Trusted Online Market', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, asrmart, ASR Mart', '2024-05-01 05:18:07', '2024-08-18 08:35:22'),
(2, 'about-us', 'About Us', 'About Us | ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 08:57:03'),
(3, 'blog', 'Blogs | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 08:58:27'),
(4, 'contact', 'Contact Us | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 08:58:06'),
(5, 'all-products', 'All Products| ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 08:58:40'),
(6, 'cart', 'Cart | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 08:58:51'),
(7, 'checkout', 'Checkout | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 08:59:01'),
(8, 'wishlist', 'Wishlist | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 08:59:12'),
(9, 'compare', 'Compare | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 08:59:24'),
(10, 'sign-in', 'Sign In | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 08:59:49'),
(11, 'sign-up', 'Sign Up | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 09:00:01'),
(12, 'forget-password', 'Forget Password | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 09:00:10'),
(13, 'reset-password', 'Reset Password | ASR MART', 'ASR MART', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-07-14 09:01:04'),
(14, 'terms-conditions', 'Terms Conditions', 'Terms Conditions', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(15, 'privacy-policy', 'Privacy Policy', 'Privacy Policy', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(16, 'shipping-return', 'Shipping Return Policy', 'Shipping Return Policy', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(17, 'faq', 'FAQ', 'FAQ', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(18, 'refund-policy', 'Refund Policy', 'Refund Policy', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-05-01 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `value` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'app_title', 'EK Softwares | Admin Dashboard', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(2, 'tax_percentage', '15', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(3, 'shipping_charge', '60', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(4, 'estimating_delivery', '7 days', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(5, 'title', 'EK Softwares | Admin Dashboard', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(6, 'main_logo', '66ac6e25d1b351722576421.png', '2024-05-01 05:18:07', '2024-08-01 23:27:01'),
(7, 'footer_logo', '66ac6e25e184f1722576421.png', '2024-05-01 05:18:07', '2024-08-01 23:27:01'),
(8, 'footer_title', 'Copyright @ 2024 EK Softwares All Right Reserved.', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(9, 'favicon', '66abd2548cfda1722536532.png', '2024-05-01 05:18:07', '2024-08-01 12:22:12'),
(10, 'version', '1', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(11, 'meta_author', 'ASR Mart', '2024-05-01 05:18:07', '2024-07-14 08:39:42'),
(12, 'meta_description', 'EK Softwares - Ecommerce App', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(13, 'meta_keywords', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(14, 'call_us', '01704976505', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(15, 'email', 'support@eksoftwares.com', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(16, 'address', 'Rajshahi, Bangladesh', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(17, 'state', 'Rajshahi', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(18, 'country', 'Bangladesh', '2024-05-01 05:18:07', '2024-08-21 03:36:38'),
(19, 'news_letter', 'Receive our latest updates about our <br /> products and promotions.', '2024-05-01 05:18:07', '2024-08-16 04:50:46'),
(20, 'preloader', '66c204069bceb1723991046.gif', '2024-05-01 05:18:07', '2024-08-18 08:24:06'),
(21, 'popup_image', '66c204069ef7f1723991046.png', '2024-05-01 05:18:07', '2024-08-18 08:24:06'),
(22, 'menu_thumb', 'menu-thumb.png', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(23, 'menu_link', 'javascript:void(0)', '2024-05-01 05:18:07', '2024-05-01 05:18:07'),
(24, 'home_products_page', '12', '2024-05-01 05:18:07', '2024-08-02 09:23:05'),
(25, 'home_trending_page', '12', '2024-05-01 05:18:07', '2024-08-02 09:23:15'),
(26, 'new_arrival', '1', '2024-05-01 05:18:07', '2024-08-02 09:23:15'),
(27, 'best_selling', '1', '2024-05-01 05:18:07', '2024-08-02 09:23:15'),
(28, 'on_sale', '1', '2024-05-01 05:18:07', '2024-08-02 09:23:15'),
(29, 'featured_items', '1', '2024-05-01 05:18:07', '2024-08-02 09:23:15'),
(30, 'default_currency', 'BDT', '2024-05-01 05:18:07', '2024-08-18 08:33:56'),
(31, 'default_language', 'en', '2024-05-01 05:18:07', '2024-08-18 08:33:56'),
(32, 'theme', 'one', '2024-05-01 05:18:07', '2024-08-01 00:09:56'),
(33, 'news_letter_img', '66bf442f1929b1723810863.png', '2024-05-01 05:18:07', '2024-08-16 06:21:03'),
(34, 'news_letter_title', 'https://web.whatsapp.com', '2024-05-01 05:18:07', '2024-08-16 06:21:03'),
(35, 'news_letter_status', '1', '2024-05-01 05:18:07', '2024-08-16 06:21:03'),
(36, 'popupmessage', 'স্যার, আপনার কি প্রযোজন আমাদের জানাতে পারেন?', '2024-05-01 05:18:07', '2024-08-16 06:21:03'),
(38, 'popup_link', 'https://asrmart.com/xyz', '2024-05-01 05:18:07', '2024-08-18 08:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `sitemaps`
--

CREATE TABLE `sitemaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitemap_url` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Facebook` varchar(191) DEFAULT NULL,
  `Skype` varchar(191) DEFAULT NULL,
  `Twitter` varchar(191) DEFAULT NULL,
  `Linkedin` varchar(191) DEFAULT NULL,
  `Instagram` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `Facebook`, `Skype`, `Twitter`, `Linkedin`, `Instagram`, `created_at`, `updated_at`) VALUES
(1, 'www.facebook.com', 'www.skype.com', 'www.twitter.com', 'www.linkedin.com', 'www.instagram.com', '2024-05-01 05:18:07', '2024-05-01 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(191) NOT NULL,
  `fr_name` varchar(191) NOT NULL,
  `url` text DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `google_id` varchar(191) DEFAULT NULL,
  `facebook_id` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `Number` varchar(191) DEFAULT NULL,
  `Gender` varchar(191) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `street_address` varchar(191) DEFAULT NULL,
  `About` text DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `google_id`, `facebook_id`, `image`, `Number`, `Gender`, `DOB`, `street_address`, `About`, `is_admin`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, NULL, 'profile.png', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '$2y$10$abkA4OKWBcZoCQv4Iouhc.ruzKXvKYg4m4xOx4CQPBkWSKbUIxBhu', NULL, '2024-05-01 05:18:06', '2024-08-21 02:25:42'),
(2, 'William Smith', 'user1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, '$2y$10$swd8G3YRVgsNxQAmH7UQEeOpdSA7rsHxlFl1O403/gN8EP6H4WaYq', NULL, '2024-05-01 05:18:06', '2024-05-01 05:18:06'),
(3, 'Mobin', 'mobin.pinfo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, '$2y$10$99JO6ZAIM69edFmE4SWNBOiP8Y3nsZxjBuYzJVGeylWjglLrLrtEG', NULL, '2024-05-03 14:01:45', '2024-05-03 14:01:45'),
(4, 'Khalid Mahmud', 'dev.khalidmahmud01@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, '$2y$10$Ac5kTWvolFILc2/P9mRj1O/XFdNKPCkSvwemkVjsscxr1XxW6pZyC', NULL, '2024-05-03 17:19:28', '2024-05-03 17:19:28'),
(5, 'Khalid Mahmud', 'ceo@eksoftwares.com', NULL, NULL, '6693e25d6e1b91720967773.png', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '$2y$10$wRQOxCaC2mmkT6Yuw641B.6RBnnRMviJQxsCfbMfRZCxdi7YNFuzW', NULL, '2024-07-14 08:35:32', '2024-08-21 02:19:21'),
(6, 'Khalid Mahmud', 'mrkhalidmahmud01@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, '$2y$10$JxDsjR5qnGwkNafqvXafwe58aPKy3imn6yBVkmMklkY3NcJnv/4h.', NULL, '2024-07-19 10:01:07', '2024-07-19 10:01:07'),
(7, 'Kabbo Mahmud', 'evaskabbo@gmail.com', NULL, NULL, '669b9ff4e94781721475060.png', '01704976505', 'Male', '2005-11-17', 'Rajshahi', NULL, 0, 1, NULL, '$2y$10$cHS7qIUYJkLe3defuimdKuDQyxCqYlkZdlu6ktzM27mkSl3oTnCmy', NULL, '2024-07-20 05:04:49', '2024-07-20 05:31:01'),
(8, 'Azharul Islam', 'trustasr5@gmail.com', NULL, NULL, '66b1af4e377551722920782.png', '01785456250', 'Male', '1998-10-14', 'Old Gloucester Street LONDON', 'hrthet', 0, 1, NULL, '$2y$10$gPTrJtK8.5KLPOydo5pBLOOk6HsrZUh.7nkraQ4w3OoG2Hni8EdBa', NULL, '2024-08-06 03:03:07', '2024-08-06 03:06:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_index` (`user_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`Blog_Id`),
  ADD KEY `blog_comments_user_id_foreign` (`User_Id`);

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
-- Indexes for table `footer_information`
--
ALTER TABLE `footer_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tags_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_tag_lists`
--
ALTER TABLE `product_tag_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitemaps`
--
ALTER TABLE `sitemaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menus_menu_id_index` (`menu_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_information`
--
ALTER TABLE `footer_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `product_tag_lists`
--
ALTER TABLE `product_tag_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sitemaps`
--
ALTER TABLE `sitemaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`Blog_Id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_comments_user_id_foreign` FOREIGN KEY (`User_Id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD CONSTRAINT `sub_menus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
