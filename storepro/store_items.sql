-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 05:09 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `store_items`
--

CREATE TABLE `store_items` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `item_title` varchar(75) DEFAULT NULL,
  `item_price` float(8,2) DEFAULT NULL,
  `item_desc` text DEFAULT NULL,
  `item_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_items`
--

INSERT INTO `store_items` (`id`, `cat_id`, `item_title`, `item_price`, `item_desc`, `item_image`) VALUES
(1, 1, 'Baseball Hat', 12.00, 'Fancy, low-profile baseball hat.', 'baseballhat.gif'),
(2, 1, 'Cowboy Hat', 52.00, '10 gallon variety', 'cowboyhat.gif'),
(3, 1, 'Top Hat', 102.00, 'Good for costumes.', 'tophat.gif'),
(4, 2, 'Short-Sleeved T-Shirt', 12.00, '100% cotton, pre-shrunk.', 'sstshirt.gif'),
(5, 2, 'Long-Sleeved T-Shirt', 15.00, 'Just like the short-sleeved shirt, with longer sleeves.', 'lstshirt.gif'),
(6, 2, 'Sweatshirt', 22.00, 'Heavy and warm.', 'sweatshirt.gif'),
(7, 3, 'Jane\'s Self-Help Book', 12.00, 'Jane gives advice.', 'selfhelpbook.gif'),
(8, 3, 'Generic Academic Book', 35.00, 'Some required reading for school, will put you to sleep.', 'boringbook.gif'),
(9, 3, 'Chicago Manual of Style', 9.99, 'Good for copywriters.', 'chicagostyle.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store_items`
--
ALTER TABLE `store_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store_items`
--
ALTER TABLE `store_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
