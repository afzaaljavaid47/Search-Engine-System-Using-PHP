-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 10:16 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engine`
--

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `title`, `link`, `keyword`, `des`, `img`) VALUES
(1, '', 'link', '', '', ''),
(2, 'programmis', 'link', 'ascajcja  vkj', 'zkjcbakjbkjaz', 'clement-h-544786-unsplash.jpg'),
(3, 'jhgvfd', 'link', 'htgrfds', 'hygfcdxs', '1 pv6LE99Taf7usoD34Bgv4w.png'),
(4, '', 'link', '', '', 'bigstock-Programming-Web-Banner-Best-P-258081862.jpg'),
(5, 'vjiuuivvl', 'link', 'c++', 'iauciuab', 'C-Programming.png'),
(6, 'fghjk', 'link', 'c++', 'fghjk', '220px-Boostrap_logo.svg.png'),
(7, 'web designing', 'link', ' bkjs skvbksjbv', 'bskjsdbv  svkbwkvd', 'hqdefault.jpg'),
(8, 'Unibook', 'link', 'afzaal Javaid', 'Search engine optimization is the process of improving the quality and quantity of website traffic to a website or a web page from search engines. SEO targets unpaid traffic rather than direct traffic or paid traffic.', '20180701_122129.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
