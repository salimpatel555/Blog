-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 09:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`) VALUES
(1, 'Technology', '2023-01-31 05:24:03'),
(2, 'Sports', '2023-01-31 05:24:42'),
(3, 'Language', '2023-01-31 05:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `image`, `category`, `description`, `created_at`) VALUES
(1, 3, 'What is Django', '1c9e940d6b6466432074f36b9105c6d3.jpg', 3, 'Django is a Python framework that makes it easier to create web sites using Python.\r\n\r\nDjango takes care of the difficult stuff so that you can concentrate on building your web applications.\r\n\r\nDjango emphasizes reusability of components, also referred to as DRY (Don\'t Repeat Yourself), and comes with ready-to-use features like login system, database connection and CRUD operations (Create Read Update Delete).', '2023-01-31'),
(2, 3, 'What is PHP', '447eb78aa5a4a735bc00e9d356b11c7d.png', 3, 'PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.\r\nInstead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does \"something\" (in this case, output \"Hi, I\'m a PHP script!\"). The PHP code is enclosed in special start and end processing instructions <?php and ?> that allow you to jump into and out of \"PHP mode.\"', '2023-01-31'),
(4, 1, 'Technological applications in education', '23c4b0a0f4f64743843860b7a8538aa3.jpg', 1, 'The education sector has several expectations from digital and technology applications. It expects the applications to help students overcome different constraints and divides of access, distance, availability of time, language, finances, choices and preferences, learning styles, learning pace and learning paths etc. It is also hoped that technology can be leveraged to reduce non-teaching workload for teachers. Digital and technology applications have the ability to provide teaching-learning materials for teachers as well as management tools for the administrators. Additionally, students will be able to learn about things that are difficult to experience in real life through technology – for example deep sea exploration,', '2023-01-31'),
(5, 3, 'Test', '22a23e8a9932b07da457adb6fb827959.jpg', 2, 'The education sector has several expectations from digital and technology applications. It expects the applications to help students overcome different constraints and divides of access, distance, availability of time, language, finances, choices and preferences, learning styles, learning pace and learning paths etc. It is also hoped that technology can be leveraged to reduce non-teaching workload for teachers. Digital and technology applications have the ability to provide teaching-learning materials for teachers as well as management tools for the administrators.', '2023-01-31'),
(6, 2, 'Budget 2023: Why government should put technology at forefront of India\'s growth story', '1f54e934e36b8880e882f491960692e3.jpg', 1, 'Despite global headwinds, the Indian IT sector has witnessed consistent growth. The rapid digital transformation and fast-paced technology adoption across sectors place us well to become a $5 trillion economy soon. This resilience in the face of adversity, combined with our immense potential, makes us stand out today in the global marketplace.\r\n\r\nIndian businesses are well-positioned to withstand the turbulent times we live in. This is particularly true of technology businesses, as well as businesses that can unlock the potential of technologically-enabled commercial opportunities.', '2023-01-31'),
(7, 1, 'Test', 'e4405731c361c4759165a7a26ecc338e.png', 2, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', '2023-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `role`) VALUES
(1, 'Rohan', 'rohan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2023-01-30 10:46:55', 0),
(2, 'Soham', 'soham@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-01-30 16:19:26', 0),
(3, 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-01-30 17:29:24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
