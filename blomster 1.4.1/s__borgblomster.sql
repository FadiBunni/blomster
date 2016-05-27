-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 28. 05 2016 kl. 00:34:09
-- Serverversion: 10.1.13-MariaDB
-- PHP-version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `søborgblomster`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product`
--

CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL,
  `Name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Price` int(11) DEFAULT NULL,
  `Category` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sub_category` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Img_name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Img_path_thumbnail` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Img_type` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Img_path_full` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `product`
--

INSERT INTO `product` (`Product_id`, `Name`, `Description`, `Price`, `Category`, `Sub_category`, `Img_name`, `Img_path_thumbnail`, `Img_type`, `Img_path_full`) VALUES
(3, '', '', 150, 'buketter', 'Buketter fra 150-199kr.-', '3', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(4, '', '', 150, 'buketter', 'Buketter fra 150-199kr.-', '4', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(7, '', '', 175, 'buketter', 'Buketter fra 150-199kr.-', '7', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(11, '', '', 200, 'buketter', 'Buketter fra 200-299kr.-', '11', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(12, '', '', 225, 'buketter', 'Buketter fra 200-299kr.-', '12', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(16, 'Hvid orkide', 'Hvid orkide med en højde på 30-40cm, til indendørs. Prisen er eksklusiv vasen.', 165, 'indendørs planter', 'Orkideer', '13', '../img/product/thumbnail/indendørs planter/', '.png', '../img/product/full/indendørs planter/'),
(17, 'Hvid orkide', 'Hvid orkide med en højde på 40-60cm, til indendørs. Prisen er eksklusiv vasen.', 165, 'indendørs planter', 'Orkideer', '14', '../img/product/thumbnail/indendørs planter/', '.png', '../img/product/full/indendørs planter/'),
(18, 'cirkelbuet lyserød orkide', 'Cirkelbuet lyserød orkide med en højde på 30 cm, til indendørs. Prisen er eksklusiv vasen.', 165, 'indendørs planter', 'orkideer', '15', '../img/product/thumbnail/indendørs planter/', '.png', '../img/product/full/indendørs planter/'),
(19, 'Hvid og lyserød orkide', 'En blanding af hvid og lyserød orkide med en højde på 60-70cm, til indendørs. Prisen er eksklusiv vasen.', 150, 'indendørs planter', 'orkideer', '17', '../img/product/thumbnail/indendørs planter/', '.png', '../img/product/full/indendørs planter/'),
(20, '', '', 100, 'buketter', 'Buketter fra 100-149kr.-', '33', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(21, '', '', 135, 'buketter', 'Buketter fra 100-149kr.-', '34', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(22, '', '', 100, 'buketter', 'Buketter fra 100-149kr.-', '35', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(23, '', '', 100, 'buketter', 'Buketter fra 100-149kr.-', '36', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(24, '', '', 165, 'buketter', 'Buketter fra 150-199kr.-', '37', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(25, '', '', 200, 'buketter', 'Buketter fra 200-299kr.-', '38', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(26, '', '', 175, 'buketter', 'Buketter fra 150-199kr.-', '39', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(27, '', '', 250, 'buketter', 'Buketter fra 200-299kr.-', '40', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(28, '', '', 135, 'buketter', 'Buketter fra 100-149kr.-', '41', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(29, '', '', 225, 'buketter', 'Buketter fra 200-299kr.-', '42', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(30, '', '', 175, 'buketter', 'Buketter fra 150-199kr.', '43', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(32, '', '', 20, 'buketter', 'Enkelte roser', '46', '../img/product/thumbnail/buketter/', '.png', '../img/product/full/buketter/'),
(33, '', '', 1500, 'begravelse', 'kistepynt', '47', '../img/product/thumbnail/begravelse/', '.png', '../img/product/full/begravelse/'),
(34, '', '', 275, 'dekorationer', 'borddekorationer', '44', '../img/product/thumbnail/dekorationer/', '.png', '../img/product/full/dekorationer/'),
(35, '', '', 275, 'dekorationer', 'borddekorationer', '45', '../img/product/thumbnail/dekorationer/', '.png', '../img/product/full/dekorationer/'),
(36, 'Kibrill - citrusgødning', '250ml. Dunkens indhold giver 50 liter gødningsvand. Findes også i 500ml.', 48, 'diverse', 'Gødning', '18', '../img/product/thumbnail/diverse/', '.png', '../img/product/full/diverse/'),
(37, 'Kibrill - blomstergødning', 'NPK=5,2,6. Også for kaktus og hydrokultur.', 68, 'diverse', 'Gødning', '23', '../img/product/thumbnail/diverse/', '.png', '../img/product/full/diverse/'),
(40, 'Muldjord tilsat sphagnum', 'Til stueplanter, altankasser og krybber. 100% dansk.', 45, 'diverse', 'Jord', '29', '../img/product/thumbnail/diverse/', '.png', '../img/product/full/diverse/'),
(41, 'Orkidéjord', '', 58, 'diverse', 'Jord', '32', '../img/product/thumbnail/diverse/', '.png', '../img/product/full/diverse/'),
(44, 'Lecanødder', '', 58, 'diverse', 'LECA nødder', '31', '../img/product/thumbnail/diverse/', '.png', '../img/product/full/diverse/'),
(45, 'grave lys', '', 20, 'Diverse', 'Grave lys', '24', '../img/product/thumbnail/diverse/', '.png', '../img/product/full/diverse/'),
(46, 'grave lys', '', 38, 'Diverse', 'Grave lys', '27', '../img/product/thumbnail/diverse/', '.png', '../img/product/full/diverse/'),
(47, 'grave lys', '', 38, 'Diverse', 'Grave lys', '25', '../img/product/thumbnail/diverse/', '.png', '../img/product/full/diverse/');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product_text`
--

CREATE TABLE `product_text` (
  `Product_text_id` int(11) NOT NULL,
  `Category` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sub_category` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Text_field` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `product_text`
--

INSERT INTO `product_text` (`Product_text_id`, `Category`, `Sub_category`, `Text_field`) VALUES
(4, 'begravelse', '', 'Priserne er vejledende, såvel som produktet. eksempelvis kan vi sagtens få lavet kistepynt, mindre for en mindre pris, der er i overensstemmelse med dine ønsker.'),
(7, 'buketter', '', 'Priserne for buketterne er selvfølgelig vejledende, selve buketten er også. Hvis produktet ikke er tilstede i butikken på dagen, kan du bede os om at lave en magen til, helst i god tid. Det kan du gøre ved enten at sende en besked til os i kontaktformularen eller at ringe. ');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indeks for tabel `product_text`
--
ALTER TABLE `product_text`
  ADD PRIMARY KEY (`Product_text_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- Tilføj AUTO_INCREMENT i tabel `product_text`
--
ALTER TABLE `product_text`
  MODIFY `Product_text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
