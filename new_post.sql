-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 10:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_post`
--

CREATE TABLE `new_post` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  `slct1` varchar(50) NOT NULL,
  `slct2` varchar(50) NOT NULL,
  `nameofwork` varchar(50) NOT NULL,
  `syno` text NOT NULL,
  `date` text NOT NULL,
  `descriptionofwork` varchar(100) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_post`
--

INSERT INTO `new_post` (`id`, `title`, `content`, `slct1`, `slct2`, `nameofwork`, `syno`, `date`, `descriptionofwork`, `user_id`) VALUES
(46, 'bgksdg', 'nbvkdsg', 'Udavagandla', 'Patta Sub-Division', 'Agaduru', '.m.', '2023-01-24', 'mbj', 2),
(47, 'bgksdg', 'nbvkdsg', 'Udavagandla', 'Patta Sub-Division', 'Agaduru', '.m.', '2023-01-24', 'mbj', 2),
(55, '.mlk', 'nl', 'Gotur', 'Patta Sub-Division', 'Gotur', '12', '2023-01-08', 'gjlkrn', 2),
(56, '.mlk', 'nl', 'Gotur', 'Patta Sub-Division', 'Gotur', '12', '2023-01-08', 'gjlkrn', 2),
(61, '', '', 'Santhakovvuru', 'Others', 'Santhakovvuru', '120', '2023-01-10', 'hggjhhjg', 1),
(62, '', '', 'Jalaparthi', 'land Acquistion', 'Madur', '12', '2023-01-10', 'jras', 1),
(63, '', '', 'Jalaparthi', 'Patta Sub-Division', 'Madur', '123', '2023-01-09', 'jras2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_post`
--
ALTER TABLE `new_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_post`
--
ALTER TABLE `new_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
