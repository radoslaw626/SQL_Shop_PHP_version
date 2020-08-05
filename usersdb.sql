-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 05 Sie 2020, 23:06
-- Wersja serwera: 10.4.10-MariaDB
-- Wersja PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `usersdb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` text COLLATE utf8_polish_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `product`, `quantity`, `price`) VALUES
(1, 'bread', 20, 3),
(2, 'cheese', 10, 10),
(3, 'bananas', 42, 5),
(4, 'tomatoes', 60, 4),
(5, 'potatoes', 80, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text COLLATE utf8_polish_ci DEFAULT NULL,
  `password` text COLLATE utf8_polish_ci DEFAULT NULL,
  `email` text COLLATE utf8_polish_ci DEFAULT NULL,
  `nickname` text COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `nickname`) VALUES
(1, '12345', 'asdfg', NULL, NULL),
(2, 'radoslaw626', 'haslo123', NULL, NULL),
(3, '123', '123', '123@123.pl', '123'),
(4, '123', '123', '123@123.pl', '123n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
