-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 07:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_sharing_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `filename`, `file_path`, `uploaded_at`, `user_id`) VALUES
(1, 'R1-11 หนังสือส่งตัว_ปวส (5).docx', '../uploads/675e8d5c2ca5a.docx', '2024-12-15 08:03:40', 1),
(2, 'R1-11 หนังสือส่งตัว_ปวส (5).docx', '../uploads/675e8d5e770b5.docx', '2024-12-15 08:03:42', 1),
(3, 'ISTEd Report {{report_title}}.pdf', '../uploads/675e8e0340bda.pdf', '2024-12-15 08:06:27', 1),
(4, 'Screenshot_20241214_100645.jpg', '../uploads/675e907e72214.jpg', '2024-12-15 08:17:02', 1),
(5, 'ISTEd Report {{report_title}}.pdf', '../uploads/675e90a859244.pdf', '2024-12-15 08:17:44', 1),
(6, '675e8d5c2ca5a (2).docx', '../uploads/675e931820b03.docx', '2024-12-15 08:28:08', 1),
(7, '675e8d5c2ca5a (2).docx', '../uploads/675e946521e84.docx', '2024-12-15 08:33:41', 1),
(8, '675e8d5c2ca5a (2).docx', '../uploads/675e9480dd354.docx', '2024-12-15 08:34:08', 1),
(9, '675e8d5c2ca5a (2).docx', '../uploads/675e948b06d78.docx', '2024-12-15 08:34:19', 1),
(10, 'Screenshot_20241206_153955.jpg', '../uploads/675e94efa427c.jpg', '2024-12-15 08:35:59', 2),
(11, '675e8d5c2ca5a (2).docx', '../uploads/675e98d61aeaa.docx', '2024-12-15 08:52:38', 1),
(12, '675e8d5c2ca5a (2).docx', '../uploads/675e9a6e7bb9e.docx', '2024-12-15 08:59:26', 1),
(13, '675e8d5c2ca5a (2).docx', '../uploads/675f7f93ddd1e.docx', '2024-12-16 01:17:07', 1),
(14, '675e8d5e770b5.docx', '../uploads/675f7f9bbae5e.docx', '2024-12-16 01:17:15', 1),
(15, '675e8d5c2ca5a (2).docx', '../uploads/675f90a96fa83.docx', '2024-12-16 02:30:01', 1),
(16, '7.1.2  ทักษะเทคโนโลยีเครือข่าย (1).pdf', '../uploads/675f90b16d67b.pdf', '2024-12-16 02:30:09', 1),
(17, '7.1.2  ทักษะเทคโนโลยีเครือข่าย (1).pdf', '../uploads/675f90d85e3b1.pdf', '2024-12-16 02:30:48', 1),
(18, '7.1.2  ทักษะเทคโนโลยีเครือข่าย (1).pdf', '../uploads/675f90f8d60ea.pdf', '2024-12-16 02:31:20', 1),
(19, '675e8d5c2ca5a (2).docx', '../uploads/675f911ab3390.docx', '2024-12-16 02:31:54', 1),
(20, '675e8d5c2ca5a (2).docx', '../uploads/675f977367569.docx', '2024-12-16 02:58:59', 1),
(21, '675e8d5c2ca5a (3).docx', '../uploads/675fb9e9a2fa6.docx', '2024-12-16 05:26:01', 1),
(22, '675e8d5c2ca5a (3).docx', '../uploads/675fb9ef5531b.docx', '2024-12-16 05:26:07', 1),
(23, '675e8d5c2ca5a (2).docx', '../uploads/675fb9f8aae76.docx', '2024-12-16 05:26:16', 1),
(24, '675e8d5c2ca5a (3).docx', '../uploads/675fb9fda94d4.docx', '2024-12-16 05:26:21', 1),
(25, '675e8d5c2ca5a (3).docx', '../uploads/675fbc64445fb.docx', '2024-12-16 05:36:36', 1),
(26, '675e8d5c2ca5a (2).docx', '../uploads/675fc100b6cb1.docx', '2024-12-16 05:56:16', 1),
(27, '675e8d5c2ca5a (2).docx', '../uploads/675fc10141701.docx', '2024-12-16 05:56:17', 1),
(28, '675e8d5c2ca5a (2).docx', '../uploads/675fc101677fd.docx', '2024-12-16 05:56:17', 1),
(29, '675e8d5c2ca5a (2).docx', '../uploads/675fc1080c2bc.docx', '2024-12-16 05:56:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `document_categories`
--

CREATE TABLE `document_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `user_id`, `document_id`, `upload_time`) VALUES
(1, 1, 1, '2024-12-15 08:03:40'),
(2, 1, 2, '2024-12-15 08:03:42'),
(3, 1, 3, '2024-12-15 08:06:27'),
(4, 1, 4, '2024-12-15 08:17:02'),
(5, 1, 5, '2024-12-15 08:17:44'),
(6, 1, 6, '2024-12-15 08:28:08'),
(7, 1, 7, '2024-12-15 08:33:41'),
(8, 1, 8, '2024-12-15 08:34:08'),
(9, 1, 9, '2024-12-15 08:34:19'),
(10, 2, 10, '2024-12-15 08:35:59'),
(11, 1, 11, '2024-12-15 08:52:38'),
(12, 1, 12, '2024-12-15 08:59:26'),
(13, 1, 13, '2024-12-16 01:17:07'),
(14, 1, 14, '2024-12-16 01:17:15'),
(15, 1, 15, '2024-12-16 02:30:01'),
(16, 1, 16, '2024-12-16 02:30:09'),
(17, 1, 17, '2024-12-16 02:30:48'),
(18, 1, 18, '2024-12-16 02:31:20'),
(19, 1, 19, '2024-12-16 02:31:54'),
(20, 1, 20, '2024-12-16 02:58:59'),
(21, 1, 21, '2024-12-16 05:26:01'),
(22, 1, 22, '2024-12-16 05:26:07'),
(23, 1, 23, '2024-12-16 05:26:16'),
(24, 1, 24, '2024-12-16 05:26:21'),
(25, 1, 25, '2024-12-16 05:36:36'),
(26, 1, 26, '2024-12-16 05:56:16'),
(27, 1, 27, '2024-12-16 05:56:17'),
(28, 1, 28, '2024-12-16 05:56:17'),
(29, 1, 29, '2024-12-16 05:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES
(1, 'admin', '$2y$10$Gdd17P/5.OjlV2zr1cX15.ewZAfRcLUwoniIbkJI0gBEGS5r2Fnbu', 'admin@gmail.com', 'admin', '2024-12-15 07:57:33'),
(2, 'username', '$2y$10$hbqppPE3B84nVPkzQxLkeeffayYzmwKwLcKeo6e8jJKOX5/YRWmmO', '', 'user', '2024-12-15 08:35:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `document_categories`
--
ALTER TABLE `document_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `document_id` (`document_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `document_categories`
--
ALTER TABLE `document_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `uploads_ibfk_2` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
