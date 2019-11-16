-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 01:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel6_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `cat_id`, `title`, `content`, `photo`, `uploader_name`, `status`, `created_at`, `updated_at`) VALUES
(7, 5, 'নাঈমের বড় শক্তি ‘অধ্যবসায়’', 'টি-টোয়েন্টি সিরিজটা দারুণ গেল মোহাম্মদ নাঈম শেখের। দিল্লি, রাজকোটে ঝলক ছিল, কিন্তু নিজের প্রতিভার পূর্ণ দ্যুতি ছড়িয়েছেন নাগপুরে এসে। বাঁহাতি এই ওপেনার প্রায় একহাতে ভারতের কাছ থেকে টি-টোয়েন্টি সিরিজটা কেড়ে নিচ্ছিলেন। ৪৭ বলে ৮১ রানের ইনিংসটা দিয়ে জানান দিয়ে রেখেছেন ভবিষ্যতের তারকা হওয়ার প্রায় সবকিছুই তাঁর মধ্যে আছে। তবে এই ইনিংসটা আরও স্মরণীয় করে রাখতে পারতেন তাঁর সতীর্থরা।\r\n\r\nমুশফিক-মাহমুদউল্লাহরা তা পারেননি। তাঁরা ব্যর্থ হওয়ায় এমন একটা ইনিংস খেলার পরেও নাঈম পরাজিতের দলেই। খুব বেশি দিন হয়নি ক্রিকেটে এসেছেন এই বছর কুড়ির তরুণ। ৩৫টি লিস্ট ‘এ’ আর ৫টি প্রথম শ্রেণির ম্যাচ খেলা নাঈম যে প্রতিনিয়ত নিজের ক্রীড়াশৈলির উন্নতি করছেন, সেটা বলেছেন বাংলাদেশের অন্যতম নির্বাচক হাবিবুল বাশার। তাঁর মতে, প্রতিভাবান অনেকেই আছেন কিন্তু নাঈমের মতো পারফরমার সবাই হয় না। বাংলাদেশের সাবেক এই অধিনায়কের দৃষ্টিতে নাঈম একজন পারফরমারই।', 'public/uploads/images/1573484949939654b2d6b4be15ce8ea52d68859a98-5dc94d7cc97b4.jpg', 'Md Eamin Hossain', 1, '2019-11-11 08:33:31', '2019-11-14 02:13:37'),
(8, 3, 'খরচের চাপে কমে যাচ্ছে শুটিংবাড়ি', '<p style=\"outline: 0px; padding: 0px; margin-right: 0px; margin-bottom: 16px; margin-left: 0px; overflow: hidden; font-size: 18px; line-height: 30px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Kiron, SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-color: rgb(240, 240, 237);\">প্রয়োজনীয় সুযোগ–সুবিধা নেই। তাই কয়েক বছর ধরে রাজধানীর উত্তরার শুটিংবাড়িগুলোতে কাজ কমিয়ে দিয়েছেন শিল্পীরা। অন্যদিকে মুনাফা হচ্ছে না বলে শুটিং হাউস অ্যাসোসিয়েশনের অনেক সদস্য ব্যবসাও গুটিয়েছেন। কেননা, পর্যাপ্ত সুযোগ–সুবিধা নিশ্চিত করে মাত্রাতিরিক্ত বাড়ি ভাড়া দিয়ে প্রযোজকদের কাছ থেকে সেই অনুপাতে টাকা বাড়ানো যাচ্ছে না। কোনো মাসে আয়–ব্যয় থাকছে সমান।</p><p style=\"outline: 0px; padding: 0px; margin-right: 0px; margin-bottom: 16px; margin-left: 0px; overflow: hidden; font-size: 18px; line-height: 30px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Kiron, SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-color: rgb(240, 240, 237);\">শুটিংবাড়ির ব্যবস্থাপকদের সূত্রে জানা গেছে, কখনো ভাড়া, বিদ্যুৎবিল, কর্মচারীদের বেতনসহ অন্যান্য খরচ শেষে হাতে কোনো টাকা থাকে না তাঁদের। এমনকি কখনো কখনো লোকসানও গুনতে হয়। তাই উত্তরার অনেকগুলো শুটিংবাড়ি বন্ধ করে দিতে বাধ্য হয়েছেন তাঁরা। বন্ধের পথে আরও বেশ কয়েকটি।<br style=\"outline: 0px; padding: 0px; margin: 0px;\">শুটিং হাউস অ্যাসোসিয়েশনের দেওয়া তথ্যমতে, ঢাকার উত্তরায় গত তিন বছরের মধ্যে বন্ধ হয়েছে ডজনখানেক শুটিংবাড়ি। হইচই, রংধনু, শিশির, আশ্রয়, রাজ্য, বহুরূপী, স্ক্রিপ্ট হাউস, স্বপ্নিল সেগুলোর মধ্যে উল্লেখযোগ্য। অবশ্য উত্তরায় নাটকের শুটিংবাড়ি বন্ধ হলেও ঢাকার পাশেই তৈরি হচ্ছে নতুন শুটিংবাড়ি। এসব জায়গার ভাড়া উত্তরার চেয়ে অর্ধেকের কম। সুযোগ–সুবিধাও বেশি। নিরিবিলি পরিবেশে কাজ করতে দলবল নিয়ে পরিচালকেরা পূর্বাচল বা পুবাইলে গড়ে ওঠা ওই শুটিংবাড়িগুলোতে যাচ্ছেন।</p><p style=\"outline: 0px; padding: 0px; margin-right: 0px; margin-bottom: 16px; margin-left: 0px; overflow: hidden; font-size: 18px; line-height: 30px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Kiron, SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-color: rgb(240, 240, 237);\">নির্মাতা সালাহউদ্দিন লাভলু নিজের নাটকের কাজগুলো সাধারণত ঢাকার বাইরেই করে থাকেন। তবে ডিরেক্টরস গিল্ডের এই সভাপতি কয়েক বছর ধরে যেসব নাটকে অভিনয় করেছেন, বেশির ভাগের শুটিং হয়েছে উত্তরায়। তিনি বলেন, ‘আমার জানামতে, চার–পাঁচ বছর ধরে শহুরে গল্পের যেসব নাটক তৈরি হয়েছে, তার ৭০ ভাগের শুটিং হয়েছে উত্তরায়। কাজ করতে গিয়ে দেখেছি, যে সুবিধাগুলো থাকার কথা, বেশির ভাগ বাড়িতে সেসব নেই। রূপসজ্জা কক্ষ, টয়লেট নিয়ে অনেকে অভিযোগ করেন। তা ছাড়া সময়ের সঙ্গে পাল্লা দিয়ে প্রপসসহ অন্য বিষয়গুলো আপগ্রেড করার ব্যাপারে এসব বাড়ির তত্ত্বাবধায়কদের মধ্যে উদাসীনতা দেখা যায়।’</p><p style=\"outline: 0px; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; overflow: hidden; font-size: 18px; line-height: 30px; overflow-wrap: break-word; color: rgb(0, 0, 0); font-family: Kiron, SolaimanLipi, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif; background-color: rgb(240, 240, 237);\">সবকিছুর মূলে নাটকের বাজেটটাই গুরুত্বপূর্ণ মনে করছেন অভিনয়শিল্পী ও পরিচালক আবুল হায়াত। তিনি মনে করেন, ভালো বাজেটের নাটক হলে সবাই ঠিকঠাকভাবে কাজ করতে পারেন। আবুল হায়াত বলেন, ‘মধ্যবিত্ত ও উচ্চবিত্তের গল্পের নাটক যদি করতে হয়, আমার কাছে উত্তরার শুটিংবাড়িগুলো ভালো। এতগুলো বাড়ি বন্ধ হয়ে যাওয়ার ব্যাপারটি সত্যিই উদ্বেগের। এখন তো এমন অবস্থা হয়, সাহিত্যধর্মী নাটকের যা বাজেট, অন্য সব গল্পের ক্ষেত্রেও তাই। সবকিছুই বেড়েছে, নাটকের বাজেট বাড়েনি। শুটিংবাড়ির তত্ত্বাবধানে যাঁরা থাকেন, তাঁদের অনেকে আবার বেশি লাভের আশায় বছরের পর বছর খাট, সোফা, আলমারি বদল করেন না। ১০ বছর আগে যা ছিল, এখনো সেসব। কয়েকটা নাটকে দরজা–জানালার পর্দা দেখে দর্শক বলে দিতে পারবেন, কোন শুটিংবাড়িতে কাজ করছেন তাঁরা।’<br style=\"outline: 0px; padding: 0px; margin: 0px;\">নাটকের শুটিংয়ের জন্য উত্তরায় সকাল ৮টা থেকে রাত ১০টা পর্যন্ত দুই শিফটে একটি শুটিংবাড়ির খরচ ৯ হাজার টাকা। জেনারেটর থাকলে সেই খরচও দিতে হয়। চারতলা একটি বাড়ির ভাড়া উত্তরায় দেড় লাখের বেশি। যুক্ত হয় কর্মচারী বেতন, আনুষঙ্গিক খরচ। ঢাকার বাইরে এ খরচ অনেক কম।</p>', 'public/uploads/images/1573646787504546e9e9169f3cbed92d3f9fe7e993-5dcb9b3023cab.jpg', 'Md Eamin Hossain', 1, '2019-11-13 06:06:27', '2019-11-13 06:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Entertainment', 1, '2019-11-04 10:53:38', '2019-11-11 09:56:22'),
(4, 'International', 1, '2019-11-04 11:04:14', '2019-11-14 01:55:39'),
(5, 'Sports', 1, '2019-11-04 13:59:38', '2019-11-04 13:59:38'),
(7, 'Cricket', 1, '2019-11-04 15:24:10', '2019-11-04 15:24:10');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_11_04_152225_create_categories_table', 2),
(11, '2019_11_08_155035_create_posts_table', 3),
(12, '2019_11_08_155035_create_blogs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `photo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Eamin Hossain', 'yeaminraat', 'yeamin510@gmail.com', NULL, 'img', '$2y$10$uyUpo6BiwOw3MOCMp2aPwekv9b1x.Xp6Gh/IDxB15fRNNb9HlZrzC', 'tgv8iHPbjj1hFcj2gKaK82zdGJ0F8aPLH7x0p1QU82ThfDyIox5IbPEaL20i', '2019-11-04 01:00:11', '2019-11-04 01:00:11'),
(2, 'Md Eamin Hossain', 'admin', 'yeaminhossain2@gmail.com', NULL, 'img', '$2y$10$2DU0czrvnBidQ4ECY.xdoeD4vplcO4wBWv5yZ8QrW6vtowIObpoiq', NULL, '2019-11-04 01:13:29', '2019-11-04 01:13:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
