-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 12:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_category`
--

CREATE TABLE `t_category` (
  `id` int(7) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_image`
--

CREATE TABLE `t_image` (
  `id` int(1) NOT NULL,
  `postid` int(5) NOT NULL,
  `path` varchar(100) NOT NULL,
  `title_image` varchar(100) DEFAULT NULL,
  `imagename` varchar(100) NOT NULL,
  `size` varchar(100) DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_posts`
--

CREATE TABLE `t_posts` (
  `id` int(5) NOT NULL,
  `title` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `description` text NOT NULL,
  `seo` int(5) DEFAULT NULL,
  `create_by` varchar(100) NOT NULL,
  `time_create` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `category` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_seo`
--

CREATE TABLE `t_seo` (
  `id` int(5) NOT NULL,
  `idpost` int(5) NOT NULL,
  `keyword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_stories`
--

CREATE TABLE `t_stories` (
  `id` int(2) NOT NULL,
  `idpost` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL COMMENT '1 admin, 2 user biasa',
  `last_login` datetime DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`id`, `fullname`, `username`, `email`, `password`, `role`, `last_login`, `status`) VALUES
(1, 'Admin Nextcms', 'admin', 'admincms@mail.com', '$2y$10$9HLIdiZU5EA/dhdBC7h/veMGUBJ4mh9ZmTRaQnV8cmuiV0mmoImia', 1, '0000-00-00 00:00:00', 1),
(9, 'Fredy Numberi', 'fredy', 'fred@gmail.com', '$2y$10$f4GRg47HqUC7e6IrHFMBpuekXWhkce2T6jV4Lvpht00qAMPlEZOa6', 2, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_category`
--
ALTER TABLE `t_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_image`
--
ALTER TABLE `t_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postid` (`postid`);

--
-- Indexes for table `t_posts`
--
ALTER TABLE `t_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `t_seo`
--
ALTER TABLE `t_seo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpost` (`idpost`);

--
-- Indexes for table `t_stories`
--
ALTER TABLE `t_stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpost` (`idpost`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_category`
--
ALTER TABLE `t_category`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_image`
--
ALTER TABLE `t_image`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_posts`
--
ALTER TABLE `t_posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_seo`
--
ALTER TABLE `t_seo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_stories`
--
ALTER TABLE `t_stories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_image`
--
ALTER TABLE `t_image`
  ADD CONSTRAINT `t_image_ibfk_1` FOREIGN KEY (`postid`) REFERENCES `t_posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_posts`
--
ALTER TABLE `t_posts`
  ADD CONSTRAINT `t_posts_ibfk_1` FOREIGN KEY (`category`) REFERENCES `t_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t_seo`
--
ALTER TABLE `t_seo`
  ADD CONSTRAINT `t_seo_ibfk_1` FOREIGN KEY (`idpost`) REFERENCES `t_posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_stories`
--
ALTER TABLE `t_stories`
  ADD CONSTRAINT `t_stories_ibfk_1` FOREIGN KEY (`idpost`) REFERENCES `t_posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
