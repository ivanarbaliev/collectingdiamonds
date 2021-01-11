-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Време на генериране: 11 яну 2021 в 21:21
-- Версия на сървъра: 10.4.17-MariaDB
-- Версия на PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `searchdetails`
--

-- --------------------------------------------------------

--
-- Структура на таблица `searchtable`
--

CREATE TABLE `searchtable` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `coolpoints` int(11) NOT NULL,
  `student/teacher` tinyint(1) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `searchtable`
--

INSERT INTO `searchtable` (`id`, `name`, `lastname`, `coolpoints`, `student/teacher`, `class`) VALUES
(1, 'Ivan', 'Arbaliev', 10, 0, 'M3-CB01'),
(2, 'David', 'Horvath', 50, 0, 'M3-CB01'),
(3, 'Alex', 'Tsvetanov', 0, 1, 'M3-CB01');

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `searchtable`
--
ALTER TABLE `searchtable`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
