-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 09:01 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeland`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agent_name`, `agent_designation`, `agent_description`, `agent_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Rahim', 'Real Estate Agent', 'Developing marketing strategies and promote all types of new insurance contracts or suggest additions/changes to existing ones', 'admin/agent-images/person_1.jpg', 1, '2019-08-13 11:59:52', '2019-08-17 09:29:54'),
(2, 'Abdul Kalam', 'Real Estate Agent', 'Breeding productive relationships to create a pool of prospective clients from various sources by networking, cold calling, using referrals etc.', 'admin/agent-images/person_2.jpg', 1, '2019-08-13 12:58:42', '2019-08-17 09:30:26'),
(3, 'Priyanka Roy', 'Real Estate Agent', 'Evaluating business or individual customers’ needs and financial status and proposing protection plans that meet their criteria', 'admin/agent-images/person_4.jpg', 1, '2019-08-17 09:33:36', '2019-08-17 09:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_name`, `blog_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Expert guide', 'Selling a home usually requires dozens of forms, reports, disclosures, and other technical documents. A knowledgeable expert will help you prepare the best deal, and avoid delays or costly mistakes.so you want to work with a professional who can speak the language.', 1, '2019-08-19 12:42:42', '2019-08-19 12:58:01'),
(3, 'Up-to-date experience', 'Most people sell only a few homes in a lifetime, usually with quite a few years in between each sale. Even if you’ve done it before, laws and regulations change. HomeLand handle hundreds of transactions over the course of their career.', 1, '2019-08-19 12:44:15', '2019-08-19 12:44:15'),
(4, 'Ethical treatment', 'Every Homeland must adhere to a strict code of ethics, which is based on professionalism and protection of the public. As a Homeland’s client, you can expect honest and ethical treatment in all transaction-related matters.', 1, '2019-08-19 12:45:18', '2019-08-19 12:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `Category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Rent', 'rent', 1, '2019-08-09 23:46:25', '2019-08-13 05:17:08'),
(2, 'Buy', 'Buy', 1, '2019-08-09 23:46:37', '2019-08-09 23:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_message_subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `customer_full_name`, `customer_email`, `customer_message_subject`, `customer_message`, `created_at`, `updated_at`) VALUES
(1, 'onix', 'onix@gmail.com', 'smnams', 'hi am onix', '2019-08-14 03:43:53', '2019-08-14 03:43:53'),
(2, 'jon', 'jon@gmail.com', 'problem', 'hello iam jonh', '2019-08-14 03:45:31', '2019-08-14 03:45:31');

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
(3, '2019_07_23_195234_create_categories_table', 1),
(4, '2019_07_28_173236_create_products_table', 1),
(5, '2019_08_10_080049_create_properties_table', 2),
(6, '2019_08_13_173132_create_agents_table', 3),
(7, '2019_08_14_070459_create_contacts_table', 4),
(8, '2019_08_19_175031_create_blogs_table', 5);

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
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `property_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_price` double NOT NULL,
  `property_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_bedroom` int(11) NOT NULL,
  `property_bathroom` int(11) NOT NULL,
  `property_balcony` int(11) NOT NULL,
  `square_feet` double NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `category_id`, `property_name`, `property_type`, `property_price`, `property_city`, `property_area`, `property_bedroom`, `property_bathroom`, `property_balcony`, `square_feet`, `short_description`, `long_description`, `property_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 1, 'None', 'Office', 175000, 'dhaka', 'Sector-03, Uttara', 3, 2, 1, 3100, 'office /buying house & others', '<p>12 storied building<br />\r\n7th floor<br />\r\nbeside avenue road<br />\r\nadvance # 6 month<br />\r\nopen space<br />\r\nnearby main road<br />\r\nbuying house/office &amp; others<br />\r\npls call us for details</p>', 'admin/property-images/73or3016hb2x80nu.jpg', 1, '2019-08-11 08:41:21', '2019-08-17 08:36:56'),
(3, 2, 'None', 'Apartment', 5000000, 'Dhaka', 'Taltola , Agargaon', 3, 3, 0, 1145, 'Introducing you with one of the best properties vacant for your next living. The correspondent apartment completed with a very strong and wonderful floor plan. The flat for sale provides the exact comfortable lifestyle that you have been looking for. Covers area as a whole the flat also has facilities that come along with this edifice. There are bed, bath and the kitchen room for the occupant who seeks for a spacious cooking area. One allotted parking space would come along with this beautiful flat.', '<p>Introducing you with one of the best properties vacant for your next living. The correspondent apartment completed with a very strong and wonderful floor plan. The flat for sale provides the exact comfortable lifestyle that you have been looking for. Covers area as a whole the flat also has facilities that come along with this edifice. There are bed, bath and the kitchen room for the occupant who seeks for a spacious cooking area. One allotted parking space would come along with this beautiful flat.</p>', 'admin/property-images/88b77cb4-6685-4bfb-84f2-4cd8b5c37cb7.jpeg', 1, '2019-08-11 11:49:54', '2019-08-17 08:36:29'),
(4, 2, 'Uttara', 'Apartment', 5000000, 'dhaka', 'uttara', 4, 3, 2, 1100, 'An artistically designed and beautifully constructed apartment is vacant right now. We offer you this amazing flat located in Kafrul. The building welcomes with a very commodious parking lot and one elevator to take to this floor presenting the desired unit. It has bed, bath and a beautiful kitchen. Other facilities are gas, water, electricity backup, parking space and 24/7 security. The flat also has well-fitted bathrooms with resilient fixtures as per your prerequisites. One allotted parking space would come along with this beautiful flat.', '<p>Give us a call in case you need further details about the property.</p>', 'admin/property-images/334.jpg', 1, '2019-08-11 11:51:25', '2019-08-17 08:40:20'),
(5, 1, 'Uttara', 'Office', 30000, 'dhaka', 'sector# 07, Uttara', 4, 3, 2, 2440, 'building', '<p>6 storied building<br />\r\n4th-floor office rent<br />\r\noffice/buying house &amp; others<br />\r\nadvance # 3 month<br />\r\nbeside lake &amp; avenue road<br />\r\npls call us details</p>', 'admin/property-images/Park-Heights_cam-01day_27.08.jpg', 1, '2019-08-11 11:52:58', '2019-08-17 08:43:46'),
(6, 1, 'None', 'Fully Furnished Apartment', 65000, 'Dhaka', 'Gulshan', 4, 3, 0, 1950, 'Luxurious 3Bedrooms Fully Furnished Apartment Rent Gulshan-2.It is a 7th Storied  Modern Building. The Apartment Is on the 3th Floor. Natural Light In This Apartment.', '<p>Apartment Details...&nbsp;<br />\r\nModern And Larges.<br />\r\n3Bed rooms 4Bath rooms.<br />\r\n2belcony.kitchen.&nbsp;<br />\r\nLiving Space. Servant room and Bath.<br />\r\nDining And drawing Space.&nbsp;<br />\r\nFully Furnished With Necessary Furniture.&nbsp;<br />\r\nEvery Rooms Wall Cabinet&nbsp; With A.C. Fittings.&nbsp;<br />\r\nVery High Quality Foreign Fittings.&nbsp;<br />\r\nCildern play Area.<br />\r\nGarden Rooftop.&nbsp;<br />\r\nGas.Water. Electricity.Internet Cabel Available.&nbsp;<br />\r\nHot Water System..&nbsp;<br />\r\nAll Furniture With L.E.D.TV.Fridge. Micro Oven.Washing mashing Available.&nbsp;<br />\r\n1Car parking Available.&nbsp;<br />\r\n1lift And Generator Available.&nbsp;<br />\r\nCar Washing Area.<br />\r\nDriver Waiting Room.<br />\r\nBig Reception Lobby.&nbsp;<br />\r\nC.C.tv monitoring system 24 Hours.&nbsp;<br />\r\n24 Hours Security Guard service.<br />\r\nPlease Call For More information</p>', 'admin/property-images/hqdefault.jpg', 1, '2019-08-19 13:47:39', '2019-08-19 13:47:39'),
(7, 2, 'Gulshan', 'Fully Furnished Apartment', 384000000, 'Dhaka', 'Gulshan', 4, 5, 0, 3200, 'home', '<p>Exclusive Used Apartment for Sell in Gulshan-01 Dhaka,<br />\r\nAvailable Floor 2nd,<br />\r\nApartment size ( 3200 sqft )<br />\r\nPrice-12000/- per sft</p>\r\n\r\n<p>Exclusive Used Apartment 04-Bedroom, Drawing Space, Dining Space, 03 Attached Toilet, 1-Conman Toilet, Servant Bed with bath, Kitchen Room, 01-Lift Available, Electricity Available, Water Available, Electric Geyser Full time hot &amp; cold water. Standard Quality Fittings, 01-Car Parking,</p>\r\n\r\n<p>Ground floor plan: Children&#39;s play area, Community Hall Room, Reception lobby, Fountain Video Intercom Full time CCTV Monitoring Entry &amp; Exit. Prayer Space, Office Room, Waiting lounge, Driver Waiting room,</p>', 'admin/property-images/HH_OutFF_C0219.jpg', 1, '2019-08-19 13:53:01', '2019-08-19 13:53:01'),
(8, 2, 'Mirpur', 'Apartment', 6935500, 'Dhaka', '1/4/B, Road # 01, Block # D, Section-15, Mirpur', 4, 3, 2, 1430, 'Ruposhi Proactive Village offering attractive flat with special discount', '<p>Amenities:<br />\r\n&bull; Jogging Track<br />\r\n&bull; Indoor Cricket (Equipped with Bowling Machine)<br />\r\n&bull; Outdoor Cricket<br />\r\n&bull; Badminton<br />\r\n&bull; Basketball<br />\r\n&bull; Gymnasium<br />\r\n&bull; Mosque<br />\r\n&bull; Departmental Store<br />\r\n&bull; Relaxing point with Playground</p>', 'admin/property-images/images (6).jpg', 1, '2019-08-19 13:59:28', '2019-08-19 13:59:28'),
(9, 1, 'Mirpur', 'Apartment', 65000, 'Dhaka', 'Mirpur', 2, 1, 1, 1950, 'REVE Odyssey is an exceptional collection of 1283 SFT apartments which will surely captivate your heart.', '<p>It is a G+8 storied building where ground floor and basement is reserved for car parking and common facilities. The architectural plan, features are three or four bed rooms, living space, dining room, spacious kitchen, bathroom, veranda and many more.</p>', 'admin/property-images/2417077_0_original.jpg', 1, '2019-08-19 14:01:45', '2019-08-19 14:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$8TTFz/nrXwTlTcBWK4BTe.c8Gy19HZ7BTP2jCMN1udlvrTVwl3OyS', NULL, '2019-08-09 23:42:03', '2019-08-09 23:42:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
