-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2019 at 07:42 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `product_description` varchar(200) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `product_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_ID`, `product_name`, `product_description`, `product_price`, `image_url`, `product_date`) VALUES
(1, 'Space Socks', 'Space Socks are super cool and will show your love for NASA and the moon!', '$10', 'https://www.sockittome.com/images/thumbnails/760/760/detailed/10/W0269.jpg', '2019-12-01 20:51:06'),
(4, 'Normal', 'Plain Jane', '$5', 'images/normal.jpg', '2019-12-02 02:32:58'),
(5, 'Rainbow Pride Socks', 'Feeling happy or want to support LGBT?', '$8', 'images/rainbow.jpg', '2019-12-02 02:33:28'),
(6, 'SpongeBob', 'Aye Aye captain!!', '$10', 'images/sponge.jpg', '2019-12-02 02:33:48'),
(7, 'Dino ', 'Extinction and rebirth', '$6', 'images/dinosaur.jpg', '2019-12-02 02:34:35'),
(8, 'Toes Socks', 'Freedom from other toes', '$15', 'images/toesocks.jpg', '2019-12-02 02:35:05'),
(9, 'test', 'test', 'test', 'images/dinosaur.jpg', '2019-12-05 19:34:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `email_address`, `password`, `date_created`) VALUES
(1, 'test@test.com', '$2y$10$HoLUnqM9XW6dWvbd9T9dquL.S8.oXG8ZTIZYp/wPU9ujnMpyuo4Ri', '2019-12-01 18:36:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
