-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 03:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trodev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `remember_token`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Md. Rubayet Islam Ifti', 'rubayetislam16@gmail.com', NULL, NULL, '$2y$12$Df6XEyhcnA5EbCpOKGhVNedjULJ8EpYYKfh3cHaF0C381DkLSnoQm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `write` varchar(255) NOT NULL,
  `writer_image` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `writer_desccription` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `image2`, `write`, `writer_image`, `post`, `writer_desccription`, `created_at`, `updated_at`) VALUES
(1, 'Website vs. Web Application', 'A website primarily displays information, content, and pages, often allowing users to navigate and consume information. It\'s generally static and doesn\'t require much user interaction beyond clicking links.\n\nOn the other hand, a web application is interactive and allows users to perform specific tasks or functions. It often involves dynamic content, user input, data processing, and can perform complex operations. Web applications can be anything from email services, social media platforms, online banking, or project management tools.\n\nIn essence, a website is more informational and static, while a web application is interactive and allows users to perform tasks or actions.\n\nWebsites:\nContent-Centric: Websites are primarily focused on presenting information, content, and resources to visitors. They are often informational, providing details about a company, a product, news, blogs, etc.\nLimited Interactivity: Interaction on a website is generally limited to navigating through pages, clicking links, and consuming information. Users don\'t actively engage beyond browsing.\nStatic or Minimal Dynamic Content: Content on a website remains relatively static and doesn\'t change frequently. Updates are typically made to refresh information but don\'t involve complex user interactions.\nPurpose: Websites are created to inform, educate, entertain, or provide resources to visitors. They serve as an online presence for individuals, businesses, organizations, etc.\nWeb Applications:\nTask-Oriented: Web applications are designed for users to perform specific tasks or functions, such as managing accounts, creating documents, collaborating with others, or conducting transactions.\nInteractivity & Functionality: They are highly interactive, allowing users to input data, manipulate information, and engage actively with the platform to achieve desired outcomes.\nDynamic & Responsive: Web applications often feature dynamic content that updates in real-time based on user input or external data sources. They are responsive to user actions, offering personalized experiences.\nComplexity: Web applications can be complex, involving databases, user authentication, security measures, APIs, and more. They require development with programming languages like JavaScript, Python, or Ruby on Rails.\nExamples: Online banking systems, social media platforms, e-commerce websites, project management tools, and collaborative document editing tools are examples of web applications.\nIn summary, websites are informational and static, whereas web applications are interactive, task-oriented, and dynamically responsive platforms designed for specific functionalities or tasks.\n\nWebsites:\nContent-Centric: Websites are primarily focused on presenting information, content, and resources to visitors. They are often informational, providing details about a company, a product, news, blogs, etc.\nLimited Interactivity: Interaction on a website is generally limited to navigating through pages, clicking links, and consuming information. Users don\'t actively engage beyond browsing.\nStatic or Minimal Dynamic Content: Content on a website remains relatively static and doesn\'t change frequently. Updates are typically made to refresh information but don\'t involve complex user interactions.\nPurpose: Websites are created to inform, educate, entertain, or provide resources to visitors. They serve as an online presence for individuals, businesses, organizations, etc.\nWeb Applications:\nTask-Oriented: Web applications are designed for users to perform specific tasks or functions, such as managing accounts, creating documents, collaborating with others, or conducting transactions.\nInteractivity & Functionality: They are highly interactive, allowing users to input data, manipulate information, and engage actively with the platform to achieve desired outcomes.\nDynamic & Responsive: Web applications often feature dynamic content that updates in real-time based on user input or external data sources. They are responsive to user actions, offering personalized experiences.\nComplexity: Web applications can be complex, involving databases, user authentication, security measures, APIs, and more. They require development with programming languages like JavaScript, Python, or Ruby on Rails.\nExamples: Online banking systems, social media platforms, e-commerce websites, project management tools, and collaborative document editing tools are examples of web applications.\nIn summary, websites are informational and static, whereas web applications are interactive, task-oriented, and dynamically responsive platforms designed for specific functionalities or tasks.', 'blog/0_websitevswebapp_297855ff.jpg', NULL, 'Sheikh Md. Rubayet Islam Ifti', 'blog/writer/SHA_20240109_164746_📸Canon Style By Expert Mistry.PORTRAIT.jpg', 'Full-Stack Developer', 'With great power comes great responsibility', '2024-01-09 13:43:49', '2024-01-09 13:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Complete_Project` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `Name`, `Designation`, `Department`, `Complete_Project`, `email`, `phone`, `pic`, `created_at`, `updated_at`) VALUES
(1, 'Sheikh Md. Rubayet Islam Ifti', 'Full-Stack Developer', 'Web Development', 3, 'rubayetislam16@gmail.com', '01642889275', 'employee/269857039_1891261944404942_5962275919285749170_n.jpg', '2024-01-07 14:18:06', '2024-01-07 15:05:50');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_06_060228_create_admins_table', 1),
(6, '2024_01_06_060310_create_employees_table', 1),
(7, '2024_01_06_060324_create_offers_table', 1),
(8, '2024_01_06_060338_create_blogs_table', 1),
(9, '2024_01_06_060415_create_projects_table', 1),
(10, '2024_01_11_063048_create_send_msgs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tools` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `image`, `description`, `tools`, `created_at`, `updated_at`) VALUES
(1, 'offer/download.jpeg', 'Providing services through a website offers a convenient and accessible way to reach customers, offer solutions, and enhance user experience. Whether your services revolve around consultancy, digital products, education, creative work, or any other offerings, leveraging a website can significantly benefit your business or organization.', 'Website', '2024-01-08 13:49:36', '2024-01-08 13:49:36');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `price`, `url`, `mode`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Scanhub', 'Generate QR Code safely', 1000, 'https://scanhub.trodev.xyz/', 'Latest', 'Website', 'project/Screenshot (37).png', NULL, '2024-01-07 13:44:56'),
(2, 'E-Commerce', 'You can find your necessary products here', 1500, 'https://agroduyar.com/', 'Latest', 'Software', 'project/Opera Snapshot_2023-09-24_160011_www.designevo.com-fotor-bg-remover-2023092416256.png', '2024-01-07 13:33:55', '2024-01-07 13:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `send_msgs`
--

CREATE TABLE `send_msgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_msgs`
--

INSERT INTO `send_msgs` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rubayet Islam', 'rubayetislam16@gmail.com', 'Test Message', 'HI', '2024-01-11 06:41:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `visit_count` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `ip_address`, `visit_count`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Md. Rubayet Islam Ifti', 'rubayetislam16@gmail.com', '2024-01-10 12:07:27', '$2y$12$CvWT1whMySHUrCtPc9gW6.9nhQbH1W80HOZtcHVVZkJ6vAjzwOfiC', '127.0.0.1', 2, NULL, '2024-01-11 13:12:12', '2024-01-11 13:32:37');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_phone_unique` (`phone`);

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
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_msgs`
--
ALTER TABLE `send_msgs`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `send_msgs`
--
ALTER TABLE `send_msgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
