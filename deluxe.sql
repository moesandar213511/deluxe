-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306
-- Generation Time: Jul 23, 2021 at 12:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deluxe`
--

-- --------------------------------------------------------

--
-- Table structure for table `bedding_type`
--

CREATE TABLE `bedding_type` (
  `bedding_type_id` int(11) NOT NULL,
  `bedding_type_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bedding_type`
--

INSERT INTO `bedding_type` (`bedding_type_id`, `bedding_type_title`) VALUES
(1, 'Two Single Bed'),
(2, 'One King Size'),
(3, 'One Queen Size'),
(4, 'One Double Plus One Single'),
(5, 'World');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `room_type` varchar(225) NOT NULL,
  `start_date` varchar(225) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `booking_price` int(11) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `room_type`, `start_date`, `end_date`, `booking_price`, `availability`) VALUES
(2, '5', '2019-04-02', '2019-04-04', 100, 3),
(3, '4', '2019-04-01', '2019-04-05', 300, 3),
(4, '2', '2019-04-01', '2019-04-06', 200, 3);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `phone`, `email`, `website`) VALUES
(1, 'No. 211, Myoma Road, (15) Quarter, In front of Bogyoke Aung San Park, Pakokku, Magway Division, Myanmar.	', '+95 62 23650, +95 62 23700', 'hoteljunomyanmar@gmail.com', 'https://hoteljunomyanmar.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `gallery_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_image`, `gallery_status`) VALUES
(21, 'room8.jpeg', 'home'),
(22, 'room4.jpeg', 'home'),
(23, 'room3.jpeg', 'home'),
(24, 'room5.jpeg', 'home'),
(29, 'room4.jpeg', 'room'),
(30, 'room6.jpeg', 'room'),
(31, 'room5.jpeg', 'room'),
(32, 'room1.jpeg', 'room'),
(35, 'Hotel-Pic.jpg', 'restaurant'),
(36, 'Hotel-Pic0003.jpg', 'restaurant'),
(38, 'Hotel-Pic0004---Copy.jpg', 'restaurant'),
(39, 'Hotel-Pic0011.jpg', 'restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `header_id` int(11) NOT NULL,
  `header_image` varchar(255) NOT NULL,
  `header_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`header_id`, `header_image`, `header_menu`) VALUES
(1, 'Hotel-Pic0004---Copy.jpg', 'home'),
(2, 'roomheader.jpeg', 'room'),
(3, 'restaurant.jpeg', 'restaurant'),
(4, 'Hotel Pic0003 - Copy.JPG', 'about'),
(5, 'Hotel Pic0020 - Copy.JPG', 'contact'),
(6, 'Hotel Pic.JPG', 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_image` varchar(255) NOT NULL,
  `menu_price` varchar(255) NOT NULL,
  `menu_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_title`, `menu_image`, `menu_price`, `menu_description`) VALUES
(1, 'Shan Noddel', '1.jpg', '2000ks', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sapiente quas pariatur, excepturi quo autem quidem soluta quam quos. Magnam quis autem impedit quisquam hic earum ut dolores perferendis quos.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sapiente quas pariatur, excepturi quo autem quidem soluta quam quos. Magnam quis autem impedit quisquam hic earum ut dolores perferendis quos.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sapiente quas pariatur, excepturi quo autem quidem soluta quam quos. Magnam quis autem impedit quisquam hic earum ut dolores perferendis quos.\r\n'),
(2, 'Rakhine Mote Tee', 'thai.jpg', '500ks', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.			'),
(3, 'Rakhine Mote Tee', '1.jpg', '500ks', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laudantium aut nemo, necessitatibus ea praesentium non magni fugit eos provident ex velit ad molestias id, eligendi facilis. Aliquid, doloribus, blanditiis.			'),
(5, 'CB Kyat Kyaw', '6.jpg', '5000ks', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.			'),
(6, 'Delicious Bread', '4.jpg', '3000ks', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque aut qui culpa cumque magnam laudantium eum delectus nihil, eligendi nemo molestiae provident modi, doloremque quasi aliquid rerum distinctio minima quibusdam.			'),
(7, 'ToHo', '3.jpeg', '5000ks', '								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo obcaecati doloremque, quo esse voluptatem repellat, magnam aliquid perferendis eum facilis cum tempore dolor, qui. Similique, quas vitae minima iusto cupiditate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo obcaecati doloremque, quo esse voluptatem repellat, magnam aliquid perferendis eum facilis cum tempore dolor, qui. Similique, quas vitae minima iusto cupiditate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo obcaecati doloremque, quo esse voluptatem repellat, magnam aliquid perferendis eum facilis cum tempore dolor, qui. Similique, quas vitae minima iusto cupiditate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo obcaecati doloremque, quo esse voluptatem repellat, magnam aliquid perferendis eum facilis cum tempore dolor, qui. Similique, quas vitae minima iusto cupiditate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo obcaecati doloremque, quo esse voluptatem repellat, magnam aliquid perferendis eum facilis cum tempore dolor, qui. Similique, quas vitae minima iusto cupiditate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo obcaecati doloremque, quo esse voluptatem repellat, magnam aliquid perferendis eum facilis cum tempore dolor, qui. Similique, quas vitae minima iusto cupiditate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo obcaecati doloremque, quo esse voluptatem repellat, magnam aliquid perferendis eum facilis cum tempore dolor, qui. Similique, quas vitae minima iusto cupiditate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo obcaecati doloremque, quo esse voluptatem repellat, magnam aliquid perferendis eum facilis cum tempore dolor, qui. Similique, quas vitae minima iusto cupiditate.						'),
(8, 'Ye Tun Soe', '3.jpeg', '5000ks', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!			'),
(9, 'Ye Myint Soe', 'chinese.jpg', '3000ks', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!			'),
(10, 'Ye Aung Soe', '5.jpg', '3000ks', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!			'),
(11, 'Ye Naing Soe', '4.jpg', '2000ks', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!			'),
(12, 'Toho', '4.jpg', '5000ks', '																Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!												');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `post_image`, `post_date`) VALUES
(10, 'Creative Web Site Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, pariatur repellendus? Assumenda ratione alias nesciunt est blanditiis quisquam. Laboriosam similique ratione aliquam totam numquam corporis illum reiciendis eligendi, voluptatibus maxime.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, pariatur repellendus? Assumenda ratione alias nesciunt est blanditiis quisquam. Laboriosam similique ratione aliquam totam numquam corporis illum reiciendis eligendi, voluptatibus maxime.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, pariatur repellendus? Assumenda ratione alias nesciunt est blanditiis quisquam. Laboriosam similique ratione aliquam totam numquam corporis illum reiciendis eligendi, voluptatibus maxime.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, pariatur repellendus? Assumenda ratione alias nesciunt est blanditiis quisquam. Laboriosam similique ratione aliquam totam numquam corporis illum reiciendis eligendi, voluptatibus maxime.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, pariatur repellendus? Assumenda ratione alias nesciunt est blanditiis quisquam. Laboriosam similique ratione aliquam totam numquam corporis illum reiciendis eligendi, voluptatibus maxime.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, pariatur repellendus? Assumenda ratione alias nesciunt est blanditiis quisquam. Laboriosam similique ratione aliquam totam numquam corporis illum reiciendis eligendi, voluptatibus maxime.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, pariatur repellendus? Assumenda ratione alias nesciunt est blanditiis quisquam. Laboriosam similique ratione aliquam totam numquam corporis illum reiciendis eligendi, voluptatibus maxime.    		    		', '1.jpg', '2019-03-06'),
(11, 'Creative Web Developer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!    		    		', 'myanmar.jpg', '2019-03-06'),
(12, 'Creative Positive thnker', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur soluta, reprehenderit deleniti fugit voluptate dolor reiciendis. Officiis repudiandae, quis doloremque facilis deleniti earum impedit nulla molestiae magni obcaecati. Nam, aliquam!    		    		', 'room7.jpeg', '2019-03-06'),
(13, 'Professional English Speaker', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.    		    		    		', 'room5.jpeg', '2019-03-06'),
(14, 'Professional Korean Speaker', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.    		    		', 'room2.jpeg', '2019-03-06'),
(16, 'IT project manager', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi minus, veniam neque recusandae aperiam fuga modi, dolorem beatae autem, sed ex vitae animi! Numquam dignissimos necessitatibus optio voluptatum unde eius.    	    		    		', 'Delux.JPG', '2019-03-06'),
(17, 'Mote Han Khar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eligendi dignissimos natus hic sequi harum aut, suscipit doloremque impedit, odio ut sint quia fugit optio fugiat a delectus autem cupiditate!    		', '5.jpg', '2019-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `random`
--

CREATE TABLE `random` (
  `id` int(11) NOT NULL,
  `guest` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `destination` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `random`
--

INSERT INTO `random` (`id`, `guest`, `room`, `staff`, `destination`) VALUES
(1, 12500, 6005, 30, 150);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_header`
--

CREATE TABLE `restaurant_header` (
  `restaurant_header_id` int(11) NOT NULL,
  `restaurant_header_title` varchar(255) NOT NULL,
  `restaurant_header_image` varchar(255) NOT NULL,
  `restaurant_header_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_header`
--

INSERT INTO `restaurant_header` (`restaurant_header_id`, `restaurant_header_title`, `restaurant_header_image`, `restaurant_header_content`) VALUES
(1, 'WELCOME TO OUR HOTEL', 'Hotel-Pic0011.jpg', 'Hotel Juno is one of the best hotels in Pakokku city which is near the Ancient Bagan City with the most reasonable prices. Juno is built both Bungalow style and Building style in Beautiful Garden. There are 45 rooms total, 2 Deluxe rooms, 3 Bungalow Family rooms, 14 Bungalow rooms, and 26 Superior rooms. All rooms are spacious and furnished with modern amenities. Featuring free wireless internet access (wi-fi) throughout the property. The hotel has an outdoor pool and views of the garden, and guests can enjoy a meal at the restaurant. Free private parking is available on site.');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_image` varchar(255) NOT NULL,
  `room_price` varchar(255) NOT NULL,
  `bedding_type` varchar(255) NOT NULL,
  `room_status` varchar(255) NOT NULL,
  `fir_detail_image` varchar(255) NOT NULL,
  `sec_detail_image` varchar(255) NOT NULL,
  `thir_detail_image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `facility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_type`, `room_image`, `room_price`, `bedding_type`, `room_status`, `fir_detail_image`, `sec_detail_image`, `thir_detail_image`, `description`, `facility`) VALUES
(7, 'Deluxe', 'room1.jpeg', '$65', 'Two Single Bed', 'home', 'Delux.JPG', 'Delux.JPG', 'Delux.JPG', '    A luxurious King-sized bed just for you and if you wish extra bed can be added. Enjoy 518 (sq.ft) featuring spacious comfort with modern amenities and furnishings. For your convenience, the rooms are equipped with parquet floor, individually controlled air conditioning and beautifully decorated with modern furniture. Moreover, large LCD TV with satellite connection, telephone, private bath room with hot and cold shower, hair dryer, dressing table, minibar, tea and coffee making facilities.																	', '																Air condition /\r\nSafe deposit box /\r\nIDD telephone /\r\nMinibar /												'),
(8, 'Bungalow', 'room2.jpeg', '$40', 'One King Size', 'home', 'room1.jpeg', 'room-2.JPG', 'Family.JPG', '    4 rooms attached in one bungalow for 3 bungalows and 2 rooms in a separate bungalow and total 14 bungalow room types are available at your own choice.  Enjoy 238 (sq.ft) featuring spacious comfort with modern amenities and furnishings. These rooms have either double beds or twin beds and they all come with a desk, wardrobe and free wireless internet access.  Each room has an open terrace and a bath tub and modern amenities equipped in the bathroom.																		', '																Air conditioner / Cool drink												'),
(9, 'Family Bungalow', 'room3.jpeg', '$50', 'One Double Plus One Single', 'home', 'room-6.JPG', 'room-5.JPG', 'room-4.JPG', '   4 rooms attached in one bungalow for 3 bungalows and 2 rooms in a separate bungalow and total 14 bungalow room types are available at your own choice.  Enjoy 238 (sq.ft) featuring spacious comfort with modern amenities and furnishings. These rooms have either double beds or twin beds and they all come with a desk, wardrobe and free wireless internet access.  Each room has an open terrace and a bath tub and modern amenities equipped in the bathroom.															', 'Air Conditioner			'),
(10, 'Superior', 'room4.jpeg', '$30', 'Two Single Bed', 'home', 'Superior Twin.JPG', 'Superior_Twin.jpg', 'Superior_Twin_2.jpg', '   26 rooms attached in the three storied building. Enjoy 176 (sq.ft) featuring comfort with modern amenities and furnishings. These rooms have either double beds or twin beds and they all come with a desk and free internet access. The bathroom is equipped hot and cold shower and bathroom amenities.														', 'Air condition						'),
(11, 'Deluxe', 'room5.jpeg', '$45', 'Two Single Bed', 'home', 'room1.jpeg', 'room2.jpeg', 'room-3.JPG', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum quod voluptas neque consequatur! Non porro ratione esse, quaerat placeat ab asperiores. Porro officiis, dolore cum. Aperiam obcaecati esse repudiandae laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum quod voluptas neque consequatur! Non porro ratione esse, quaerat placeat ab asperiores. Porro officiis, dolore cum. Aperiam obcaecati esse repudiandae laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum quod voluptas neque consequatur! Non porro ratione esse, quaerat placeat ab asperiores. Porro officiis, dolore cum. Aperiam obcaecati esse repudiandae laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum quod voluptas neque consequatur! Non porro ratione esse, quaerat placeat ab asperiores. Porro officiis, dolore cum. Aperiam obcaecati esse repudiandae laborum.										', 'Wifi						'),
(12, 'Family Bungalow', 'room6.jpeg', '$56', 'One Double Plus One Single', 'default', 'room4.jpeg', 'room-4.JPG', 'room5.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!			', 'Free breakfast'),
(13, 'Bungalow', 'room7.jpeg', '$64', 'One Queen Size', 'default', 'Bungalow_Double.JPG', 'room8.jpeg', 'Superior Twin.JPG', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!						', 'Wifi Free'),
(14, 'Superior', 'Superior_Twin.JPG', '$44', 'One King Size', 'default', 'Bungalow_Double_2.JPG', 'Delux.JPG', 'room-5.JPG', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ex impedit qui dolores, consectetur aspernatur blanditiis tempore molestiae ratione dicta officiis amet vel, ab cupiditate rerum sit corrupti laudantium sed!				', 'Free Lunch'),
(15, 'Family Bungalow', 'room5.jpeg', '$45', 'One Double Plus One Single', 'default', 'room3.jpeg', 'room6.jpeg', 'room7.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit beatae tempora perspiciatis sapiente, distinctio ex accusantium nihil ea optio unde maiores, maxime inventore, rerum! Commodi ducimus voluptatem sunt incidunt dolorem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit beatae tempora perspiciatis sapiente, distinctio ex accusantium nihil ea optio unde maiores, maxime inventore, rerum! Commodi ducimus voluptatem sunt incidunt dolorem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit beatae tempora perspiciatis sapiente, distinctio ex accusantium nihil ea optio unde maiores, maxime inventore, rerum! Commodi ducimus voluptatem sunt incidunt dolorem.				', 'wifi');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(11) NOT NULL,
  `room_type_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `room_type_title`) VALUES
(1, 'Deluxe'),
(2, 'Family Bungalow'),
(4, 'Bungalow'),
(5, 'Superior');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `user_role`) VALUES
(7, 'Ye Ye', 'yeye@gmail.com', '123', 'subscriber'),
(8, 'Ye Myint Soe', 'yemyintsoe@gmail.com', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bedding_type`
--
ALTER TABLE `bedding_type`
  ADD PRIMARY KEY (`bedding_type_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`header_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `random`
--
ALTER TABLE `random`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_header`
--
ALTER TABLE `restaurant_header`
  ADD PRIMARY KEY (`restaurant_header_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bedding_type`
--
ALTER TABLE `bedding_type`
  MODIFY `bedding_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `random`
--
ALTER TABLE `random`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurant_header`
--
ALTER TABLE `restaurant_header`
  MODIFY `restaurant_header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
