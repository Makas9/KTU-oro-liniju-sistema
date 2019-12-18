-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 08:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avialinijos_isp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ataskaita`
--

DROP TABLE IF EXISTS `ataskaita`;
CREATE TABLE `ataskaita` (
  `id_ataskaita` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `suma` double DEFAULT NULL,
  `laikotarpis` int(11) DEFAULT NULL,
  `priezastis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `busena` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `atlyginimas`
--

DROP TABLE IF EXISTS `atlyginimas`;
CREATE TABLE `atlyginimas` (
  `id_atlyginimas` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `suma` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `atlyginimas`
--

INSERT INTO `atlyginimas` (`id_atlyginimas`, `data`, `suma`) VALUES
(1, '2019-12-01', 750),
(2, '2018-03-15', 542),
(3, '2018-01-15', 674),
(4, '2018-03-15', 1201),
(5, '2018-04-15', 1110),
(6, '2019-01-15', 980),
(7, '2019-05-15', 1500),
(8, '2019-08-15', 2500),
(9, '2019-10-15', 800),
(10, '2019-12-15', 950);

-- --------------------------------------------------------

--
-- Table structure for table `bagazas`
--

DROP TABLE IF EXISTS `bagazas`;
CREATE TABLE `bagazas` (
  `id_bagazas` int(11) NOT NULL,
  `ilgis` double DEFAULT NULL,
  `plotis` double DEFAULT NULL,
  `svoris` double DEFAULT NULL,
  `aukstis` double DEFAULT NULL,
  `ypatybes` int(11) DEFAULT NULL,
  `busena` tinyint(1) DEFAULT NULL,
  `fk_lektuvas_id_lektuvas` int(11) DEFAULT NULL,
  `fk_keleivis_id_keleivis` int(11) NOT NULL,
  `fk_cekis_id_cekis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bagazas`
--

INSERT INTO `bagazas` (`id_bagazas`, `ilgis`, `plotis`, `svoris`, `aukstis`, `ypatybes`, `busena`, `fk_lektuvas_id_lektuvas`, `fk_keleivis_id_keleivis`, `fk_cekis_id_cekis`) VALUES
(7, 10, 10, 2, 100, 3, 0, NULL, 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `bilietas`
--

DROP TABLE IF EXISTS `bilietas`;
CREATE TABLE `bilietas` (
  `id_bilietas` int(11) NOT NULL,
  `kaina` double DEFAULT NULL,
  `pirkimo_data` date DEFAULT NULL,
  `isvykimo_data` date DEFAULT NULL,
  `fk_marsrutas_id_marsrutas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bilietas`
--

INSERT INTO `bilietas` (`id_bilietas`, `kaina`, `pirkimo_data`, `isvykimo_data`, `fk_marsrutas_id_marsrutas`) VALUES
(1, 50, '2019-12-03', '2019-12-20', 0),
(2, 50, '2019-12-03', '2019-12-20', 0),
(3, 60, '2019-12-05', '2019-12-20', 0),
(4, 60, '2019-12-07', '2019-12-20', 0),
(5, 50, '2019-12-03', '2019-12-27', 0),
(6, 50, '2019-12-03', '2019-12-28', 0),
(7, 60, '2019-12-05', '2019-12-24', 0),
(8, 60, '2019-12-07', '2019-12-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `busena`
--

DROP TABLE IF EXISTS `busena`;
CREATE TABLE `busena` (
  `id` int(11) NOT NULL,
  `busena` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `busena`
--

INSERT INTO `busena` (`id`, `busena`) VALUES
(1, 'neperskaityta'),
(2, 'perskaityta');

-- --------------------------------------------------------

--
-- Table structure for table `cekis`
--

DROP TABLE IF EXISTS `cekis`;
CREATE TABLE `cekis` (
  `id_cekis` int(11) NOT NULL,
  `kaina` double DEFAULT NULL,
  `laikas` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_keleivis_id_keleivis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cekis`
--

INSERT INTO `cekis` (`id_cekis`, `kaina`, `laikas`, `fk_keleivis_id_keleivis`) VALUES
(30, 13.99, '2019-12-03 17:59:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `daiktas`
--

DROP TABLE IF EXISTS `daiktas`;
CREATE TABLE `daiktas` (
  `id_daiktas` int(11) NOT NULL,
  `pavadinimas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kiekis` int(11) DEFAULT NULL,
  `kaina` double DEFAULT NULL,
  `fk_oro_uostas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daiktas`
--

INSERT INTO `daiktas` (`id_daiktas`, `pavadinimas`, `kiekis`, `kaina`, `fk_oro_uostas`) VALUES
(1, 'Stalas', 15, 155.3, 5),
(2, 'Kėdė', 60, 54.99, 5),
(3, 'Spausdintuvas', 3, 321, 2),
(7, 'Kompiuteris', 20, 500, 8),
(8, 'Kompiuteris', 23, 500, 3),
(9, 'Kompiuteris', 58, 500, 7),
(10, 'Spausdintuvas', 7, 321, 7),
(11, 'Tušinukai', 1234, 1, 6),
(12, 'Piešukai', 600, 1, 6),
(13, 'Stalas', 24, 155, 4);

-- --------------------------------------------------------

--
-- Table structure for table `darbuotojas`
--

DROP TABLE IF EXISTS `darbuotojas`;
CREATE TABLE `darbuotojas` (
  `id_darbuotojas` int(11) NOT NULL,
  `role` int(10) NOT NULL,
  `vardas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pavarde` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gimimo_data` date DEFAULT NULL,
  `asmens_kodas` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefonas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_pastas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `miestas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bankas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saskaita` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `atlyginimas` double DEFAULT NULL,
  `kreditai` int(11) DEFAULT NULL,
  `slaptazodis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_pokalbiu_kambarys_id_pokalbiu_kambarys` int(11) DEFAULT NULL,
  `fk_ataskaita_id_ataskaita` int(11) DEFAULT NULL,
  `fk_oro_uostas_id_oro_uostas` int(11) DEFAULT NULL,
  `fk_ataskaita_id_ataskaita1` int(11) DEFAULT NULL,
  `fk_nakvyne_id_nakvyne` int(11) DEFAULT NULL,
  `fk_kvitas_id_kvitas` int(11) DEFAULT NULL,
  `fk_atlyginimas_id_atlyginimas` int(11) DEFAULT NULL,
  `fk_nuobauda_id_nuobauda1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `darbuotojas`
--

INSERT INTO `darbuotojas` (`id_darbuotojas`, `role`, `vardas`, `pavarde`, `gimimo_data`, `asmens_kodas`, `telefonas`, `e_pastas`, `miestas`, `bankas`, `saskaita`, `atlyginimas`, `kreditai`, `slaptazodis`, `fk_pokalbiu_kambarys_id_pokalbiu_kambarys`, `fk_ataskaita_id_ataskaita`, `fk_oro_uostas_id_oro_uostas`, `fk_ataskaita_id_ataskaita1`, `fk_nakvyne_id_nakvyne`, `fk_kvitas_id_kvitas`, `fk_atlyginimas_id_atlyginimas`, `fk_nuobauda_id_nuobauda1`) VALUES
(3, 0, 'Arnas', 'A.', '2019-09-16', '3453453453', '12312345', 'test@gmail.com', 'Šilutė', 'Šilutės bankas', 'LT1231231232132132', 222, 22, '$2y$10$2Ns6zBKJSw72Qtj.WxMHlOo974wKVI/5xZQUvw7KaoOUAHxYrVQ7K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, 'Simonas', 'Ivanovas', '1998-07-08', '3333333333', '8612345678', 'simonas_ivanovas@yahoo.com', 'Kaunas', 'SEB', 'LT123123123123123123123', 800, 51, '$2y$10$xznIanh2s.FZAGeS8Gz2bOHZOsNenPxHaSE4fi.gUy0D/452wV7/6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 0, 'Tomas', 'Tomaitis', '1975-06-05', '37506051111', '8600100100', 'Tomas@gmail.com', 'Kaunas', 'SEB', 'LT125478512368122516515', 1200, 15, '$2y$10$9hklfqTKnH1doHd4PBX3TeQThQRUAT55R9uXnW2rIsAztsb6tZ/I2', NULL, NULL, 1, NULL, 7, 5, 4, 6),
(6, 0, 'Mantas', 'Mantaitis', '1963-03-18', '36303180506', '860011022', 'Mantas@gmail.com', 'Vilnius', 'SWEDBANK', 'LT262611962661323', 750, 10, '$2y$10$9hklfqTKnH1doHd4PBX3TeQThQRUAT55R9uXnW2rIsAztsb6tZ/I2', NULL, NULL, 2, NULL, 12, 8, 9, 4),
(7, 0, 'Gabija', 'Gabiene', '1990-09-23', '49009233333', '860033466', 'Gabija@gmail.com', 'Klaipeda', 'SEB', 'LT15151841141191611', 950, 12, '$2y$10$9hklfqTKnH1doHd4PBX3TeQThQRUAT55R9uXnW2rIsAztsb6tZ/I2', NULL, NULL, 6, NULL, 9, 9, 10, 6),
(8, 0, 'Jonas', 'Jonaitis', '1977-07-12', '37707121515', '860077499', 'Jonas@gmail.com', 'Siauliai', 'Siauliu', 'LT845151661321651', 2500, 50, '$2y$10$9hklfqTKnH1doHd4PBX3TeQThQRUAT55R9uXnW2rIsAztsb6tZ/I2', NULL, NULL, 7, NULL, 5, 6, 8, 6),
(9, 1, 'Petras', 'Petraitis', '1953-04-22', '35304220000', '861132548', 'Petras@gmail.com', 'Vilnius', 'SWEDBANK', 'LT2661511516154', 2500, 100, '$2y$10$9hklfqTKnH1doHd4PBX3TeQThQRUAT55R9uXnW2rIsAztsb6tZ/I2', NULL, NULL, NULL, NULL, NULL, 8, 8, 6),
(10, 0, 'Mindaugas', 'Vaitiekūnas', '1998-12-03', '32212154564', '861514652', 'test_2@gmail.com', 'Vilnius', 'SEB', 'LT145646515611231', 800, 123, '$2y$10$BQ8WWShOLWuM5.yZgJbrbuOCF1pErSjTJuMNSWZQZ4bYqCMGmNkpO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keleivis`
--

DROP TABLE IF EXISTS `keleivis`;
CREATE TABLE `keleivis` (
  `id_keleivis` int(11) NOT NULL,
  `vardas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pavarde` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `laikas` timestamp NULL DEFAULT NULL,
  `ivykis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `keleivis`
--

INSERT INTO `keleivis` (`id_keleivis`, `vardas`, `pavarde`, `laikas`, `ivykis`) VALUES
(1, 'Jonas', 'Jonauskas', '2019-11-30 22:00:00', 'nezinau');

-- --------------------------------------------------------

--
-- Table structure for table `kvitas`
--

DROP TABLE IF EXISTS `kvitas`;
CREATE TABLE `kvitas` (
  `id_kvitas` int(11) NOT NULL,
  `laikas` timestamp NULL DEFAULT NULL,
  `suma` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kvitas`
--

INSERT INTO `kvitas` (`id_kvitas`, `laikas`, `suma`) VALUES
(1, '2019-11-05 06:18:17', 140),
(2, '2018-01-12 06:54:17', 147),
(3, '2021-04-15 11:13:12', 200),
(4, '2021-08-22 12:21:50', 150),
(5, '2035-11-17 10:35:58', 250),
(6, '2023-12-13 04:23:30', 350),
(7, '2019-11-05 00:01:15', 120),
(8, '2019-11-05 05:46:36', 85),
(9, '2019-11-05 17:38:45', 145),
(10, '2019-11-05 20:27:15', 167),
(11, '2019-11-05 00:01:02', 122);

-- --------------------------------------------------------

--
-- Table structure for table `lektuvas`
--

DROP TABLE IF EXISTS `lektuvas`;
CREATE TABLE `lektuvas` (
  `id_lektuvas` int(11) NOT NULL,
  `max_kuras` int(11) DEFAULT NULL,
  `kuras` int(11) DEFAULT NULL,
  `bagazo_talpa` int(11) DEFAULT NULL,
  `max_keleiviai` int(11) DEFAULT NULL,
  `modelis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marke` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_remontas_id_remontas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lektuvas`
--

INSERT INTO `lektuvas` (`id_lektuvas`, `max_kuras`, `kuras`, `bagazo_talpa`, `max_keleiviai`, `modelis`, `marke`, `fk_remontas_id_remontas`) VALUES
(1, 10, 10, 10, 10, 'test', 'test', 1),
(2, 500, 350, 99, 205, 'A330', 'Airbus', 6),
(3, 500, 450, 99, 205, 'A330', 'Airbus', 7),
(4, 1000, 750, 250, 476, '747', 'Boeing', 8),
(5, 1000, 250, 250, 476, '747', 'Boeing', 9),
(6, 750, 200, 200, 440, '777', 'Boeing', 10),
(7, 750, 262, 200, 440, '777', 'Boeing', 13),
(8, 450, 300, 156, 269, 'A300', 'Airbus', 11),
(9, 450, 222, 156, 269, 'A300', 'Airbus', 20),
(10, 350, 150, 104, 236, '757', 'Boeing', 16),
(11, 350, 250, 104, 236, '757', 'Boeing', 15),
(12, 500, 450, 150, 269, '767', 'Boeing', 12),
(13, 500, 100, 150, 269, '767', 'Boeing', 17),
(14, 650, 505, 250, 300, 'MD11F', 'McDonnel Douglas', 2),
(15, 650, 350, 250, 300, 'MD11F', 'McDonnel Douglas', 3),
(16, 350, 300, 40, 50, 'CRJ-200', 'Bombardier', 14),
(17, 350, 250, 40, 50, 'CRJ-200', 'Bombardier', 5),
(18, 250, 150, 45, 70, '700', 'Canadian Regional Jet	', 18),
(19, 250, 102, 45, 70, '700', 'Canadian Regional Jet	', 4),
(20, 150, 100, 5, 9, 'B5', 'Pilatus', 19);

-- --------------------------------------------------------

--
-- Table structure for table `marsrutas`
--

DROP TABLE IF EXISTS `marsrutas`;
CREATE TABLE `marsrutas` (
  `id_marsrutas` int(11) NOT NULL,
  `isvykimo_vieta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `atvykimo_vieta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pilotas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `busena` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keleiviu_skaicius` int(11) DEFAULT NULL,
  `fk_lektuvas_id_lektuvas` int(11) DEFAULT NULL,
  `fk_oro_uostas_id_oro_uostas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `marsrutas`
--

INSERT INTO `marsrutas` (`id_marsrutas`, `isvykimo_vieta`, `atvykimo_vieta`, `pilotas`, `busena`, `keleiviu_skaicius`, `fk_lektuvas_id_lektuvas`, `fk_oro_uostas_id_oro_uostas`) VALUES
(1, 'Kaunas', 'Vilnius', 'Petras Petraitis', 'Laukiama', 50, 2, 1),
(2, 'Varsuva', 'Vilnius', 'Jonas Petraitis', 'Laukiama', 50, 3, 5),
(3, 'Berlynas', 'Vilnius', 'Gintas Gintautas', 'Laukiama', 50, 7, 7),
(4, 'Viena', 'Vilnius', 'Gintas Petraitis', 'Laukiama', 50, 9, 8),
(5, 'Lodze', 'Kaunas', 'Algis Ilgauskas', 'Laukiama', 60, 10, 6),
(6, 'Vilnius', 'Viena', 'Gintas Gintautas', 'Laukiama', 50, 12, 2),
(7, 'Ryga', 'Vilnius', 'Ignas Ilgauskas', 'Laukiama', 50, 13, 3),
(8, 'Talinas', 'Ryga', 'Tomas pertraitis', 'Laukiama', 60, 14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nakvyne`
--

DROP TABLE IF EXISTS `nakvyne`;
CREATE TABLE `nakvyne` (
  `id_nakvyne` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `vieta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nakvyne`
--

INSERT INTO `nakvyne` (`id_nakvyne`, `data`, `vieta`) VALUES
(1, '2019-12-01', 'THE CONNAUGHT, LONDON'),
(2, '2018-02-22', 'THE ROSEWOOD, LONDON'),
(3, '2018-05-15', 'HAM YARD, LONDON'),
(4, '2018-07-30', 'THE WESTBURY, DUBLIN'),
(5, '2018-10-11', 'ADARE MANOR, CO LIMERICK'),
(6, '2018-11-05', 'FIFE ARMS, BRAEMAR'),
(7, '2018-12-06', 'RITZ PARIS'),
(8, '2019-04-12', 'HOTEL DE CRILLON, PARIS'),
(9, '2019-08-13', 'DOMAINE DES ETANGS, MASSIGNAC'),
(10, '2019-09-18', 'HOTEL DE RUSSIE, ROME'),
(11, '2019-12-03', 'THE GRITTI PALACE, VENICE'),
(12, '2019-12-27', 'JK PLACE FIRENZE, FLORENCE');

-- --------------------------------------------------------

--
-- Table structure for table `nuobauda`
--

DROP TABLE IF EXISTS `nuobauda`;
CREATE TABLE `nuobauda` (
  `id_nuobauda` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `priezastis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nuobauda`
--

INSERT INTO `nuobauda` (`id_nuobauda`, `data`, `priezastis`) VALUES
(1, '2019-12-01', 'Velavimas i darba '),
(2, '2018-05-10', 'Velavimas i darba '),
(3, '2018-10-30', 'Nepagarbus elgesys'),
(4, '2019-03-15', 'Neblaivus darbo vietoja'),
(5, '2019-09-29', 'Pravaiksta'),
(6, '2000-01-01', 'neturi');

-- --------------------------------------------------------

--
-- Table structure for table `nuomininkas`
--

DROP TABLE IF EXISTS `nuomininkas`;
CREATE TABLE `nuomininkas` (
  `id_nuomininkas` int(11) NOT NULL,
  `pavadinimas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bustines_adresas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_patalpa_id_patalpa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oro_uostas`
--

DROP TABLE IF EXISTS `oro_uostas`;
CREATE TABLE `oro_uostas` (
  `id_oro_uostas` int(11) NOT NULL,
  `salis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `miestas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pavadinimas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `koordinates` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kodas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oro_uostas`
--

INSERT INTO `oro_uostas` (`id_oro_uostas`, `salis`, `miestas`, `pavadinimas`, `koordinates`, `kodas`) VALUES
(1, 'Lietuva', 'Kaunas', 'Kauno oro uostas', '55 55', 123456),
(2, 'Lietuva', 'Vilnius', 'Vilniaus oro uostas', '60 60', 123799),
(3, 'Latvija', 'Ryga', 'Rygos oro uostas', '70 70', 5737535),
(4, 'Estija', 'Talinas', 'Talino oro uostas', '80 80', 5375345),
(5, 'Lenkija', 'Varšuva', 'Varšuvos oro uostas', '50 20', 93863354),
(6, 'Lenkija', 'Lodzė', 'Lodzės oro uostas', '60 20', 742753),
(7, 'Vokietija', 'Berlynas', 'Berlyno oro uostas', '40 30', 516532),
(8, 'Austrija', 'Viena', 'Vienos oro uostas', '90 10', 643165);

-- --------------------------------------------------------

--
-- Table structure for table `patalpa`
--

DROP TABLE IF EXISTS `patalpa`;
CREATE TABLE `patalpa` (
  `id_patalpa` int(11) NOT NULL,
  `pavadinimas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plotas` double DEFAULT NULL,
  `kaina` double DEFAULT NULL,
  `fk_nuomotojas` int(11) DEFAULT NULL,
  `fk_oro_uostas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patalpa`
--

INSERT INTO `patalpa` (`id_patalpa`, `pavadinimas`, `plotas`, `kaina`, `fk_nuomotojas`, `fk_oro_uostas`) VALUES
(1, '110 kambarys', 20, 1000, 3, 2),
(2, '111 kambarys', 20, 870, 4, 2),
(3, '112 kambarys', 25, 1500, 5, 2),
(5, '512 kambarys', 123, 243, NULL, 5),
(6, '118 kambarys', 12, 500, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pokalbiu_kambarys`
--

DROP TABLE IF EXISTS `pokalbiu_kambarys`;
CREATE TABLE `pokalbiu_kambarys` (
  `id_pokalbiu_kambarys` int(11) NOT NULL,
  `darbuotojas` int(11) NOT NULL,
  `laikas` timestamp NULL DEFAULT NULL,
  `tekstas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pokalbiu_kambarys`
--

INSERT INTO `pokalbiu_kambarys` (`id_pokalbiu_kambarys`, `darbuotojas`, `laikas`, `tekstas`) VALUES
(1, 7, '2019-12-17 22:00:00', 'Sveikas'),
(2, 5, '2019-12-18 00:15:05', 'Labas!'),
(3, 7, '2019-12-18 00:15:08', 'Kaip puikiai veikia ši sistema!'),
(4, 5, '2019-12-18 00:15:09', 'Aha, tikrai!');

-- --------------------------------------------------------

--
-- Table structure for table `praejimo_kontrole`
--

DROP TABLE IF EXISTS `praejimo_kontrole`;
CREATE TABLE `praejimo_kontrole` (
  `id` int(11) NOT NULL,
  `keleivis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oro_uostas` int(11) NOT NULL,
  `vartai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `laikas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `praejimo_kontrole`
--

INSERT INTO `praejimo_kontrole` (`id`, `keleivis`, `oro_uostas`, `vartai`, `laikas`) VALUES
(1, 'Jonas Jonauskas', 3, 'A2', '2019-12-12 00:00:00'),
(2, 'Petras Petrauskas', 5, 'C31', '2019-12-18 04:03:31'),
(3, 'Antanas Antanauskas', 5, 'C32', '2019-12-18 08:54:03'),
(4, 'Martynas Martinauskas', 1, '15', '2019-12-18 08:54:16'),
(5, 'Andrius A.', 2, 'A5', '2019-12-18 08:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `remontas`
--

DROP TABLE IF EXISTS `remontas`;
CREATE TABLE `remontas` (
  `id_remontas` int(11) NOT NULL,
  `registravimo_data` date DEFAULT NULL,
  `gedimo_aprasas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remonto_aprasas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remonto_data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `remontas`
--

INSERT INTO `remontas` (`id_remontas`, `registravimo_data`, `gedimo_aprasas`, `remonto_aprasas`, `remonto_data`) VALUES
(1, '2019-12-01', 'Lužusi kniedė kairiajame lektuvo sparne, apatinėje sparno dalyje', 'Išgrežta pažeista kniedė ir sukniedyta naujoji', '2019-12-04'),
(2, '2019-11-01', 'Gilus lako pažeidimas prie įlipimo durų, kairėje pusėje', 'Nušveistas lakas, naujai perdažyta detalė ir instaliuota atgal', '2019-12-11'),
(3, '2019-09-03', 'Susidėvėjusios padangos', 'Pakeistos padangos į naujas', '2019-09-06'),
(4, '2019-12-02', 'Lužusi durų rankenėlė', NULL, NULL),
(5, '2019-12-03', 'Kairioji turbina leidžia tepala', 'Pakeista tepimo sistemos šlanga', '2019-12-06'),
(6, '2019-11-06', 'Skiles 6 eiles 12 sedimos vietos langas', 'Pakeistas langas į nauja', '2019-11-22'),
(7, '2019-09-05', 'Laikas TA', 'Lėktuvas apžiurėtas ir nerasta gėdimu', '2019-09-13'),
(8, '2019-11-14', 'Lužes 5 eilės 3 sėdimos vietos sedynes reguliavimo mechanizmas', 'Neremontuojama detalė, todėl pakeista nauja', '2019-12-26'),
(9, '2019-09-26', 'Perdegus pagrindinės kabinos apšvietimo lemputė', 'Pakeista lemputė į naują', '2019-12-27'),
(10, '2019-12-02', 'Reikalinga nauja valdymo svirtis', 'Pakeista valdymo svirtis', '2019-12-11'),
(11, '2019-10-09', 'Reikalingas variklio remontas', NULL, NULL),
(12, '2019-10-10', 'Turbinos gedimas', 'Pakeista turbina į naują', '2019-11-29'),
(13, '2019-12-02', 'Padangu keitimas', NULL, NULL),
(14, '2019-12-05', 'Reikia dengti priekini lektuvo langa nano danga', 'Padengta nano danga', '2019-12-06'),
(15, '2019-11-13', 'Sulužo salono vintiliatorius', 'Pataisytas salono vintiliatorius, pakeistas jungiklis', '2019-11-14'),
(16, '2019-12-01', 'Nebeveikia kuro lygio rodiklė', 'Pakeistas kuro rodymo prietaisas', '2019-12-09'),
(17, '2019-11-06', 'Užsikimšes tuoleto vamzdis', 'Pravalytas užstriges tuoleto kanalas', '2019-11-20'),
(18, '2019-11-06', 'Nebeveikia 15 eiles 6 sedimos vietos pagalbos mygtukas', 'Pakeista pagalbos mygtuko mikroschema', '2019-11-19'),
(19, '2019-09-11', 'Reikalingas galinio kairiojo sparno remontas', 'Vizualiai nerasta jokiu pažeidimu, todėl tik pertrauka naujai plevelė', '2019-09-16'),
(20, '2019-11-24', 'Sugedo pagrindinis komunikacijos kompiuteris', 'Pakeistas pagrindinis kompiuteris ir jo blokas', '2019-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `skiria`
--

DROP TABLE IF EXISTS `skiria`;
CREATE TABLE `skiria` (
  `fk_atlyginimas_id_atlyginimas` int(11) NOT NULL,
  `fk_darbuotojas_id_darbuotojas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skiria`
--

INSERT INTO `skiria` (`fk_atlyginimas_id_atlyginimas`, `fk_darbuotojas_id_darbuotojas`) VALUES
(1, 6),
(4, 5),
(8, 8),
(8, 9),
(10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `skundas`
--

DROP TABLE IF EXISTS `skundas`;
CREATE TABLE `skundas` (
  `id_skundas` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `busena` int(11) DEFAULT NULL,
  `fk_darbuotojas_id_darbuotojas` int(11) NOT NULL,
  `fk_keleivis_id_keleivis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skundas`
--

INSERT INTO `skundas` (`id_skundas`, `data`, `busena`, `fk_darbuotojas_id_darbuotojas`, `fk_keleivis_id_keleivis`) VALUES
(1, '2019-12-03 16:29:23', 1, 3, 1),
(2, '2019-12-07 19:19:47', 1, 4, 1),
(3, '2019-12-17 23:08:21', 1, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `takas`
--

DROP TABLE IF EXISTS `takas`;
CREATE TABLE `takas` (
  `id_takas` int(11) NOT NULL,
  `kodas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_tvarkarascio_irasas_id_tvarkarascio_irasas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tikrina`
--

DROP TABLE IF EXISTS `tikrina`;
CREATE TABLE `tikrina` (
  `fk_keleivis_id_keleivis` int(11) NOT NULL,
  `fk_darbuotojas_id_darbuotojas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tvarkarascio_irasas`
--

DROP TABLE IF EXISTS `tvarkarascio_irasas`;
CREATE TABLE `tvarkarascio_irasas` (
  `id_tvarkarascio_irasas` int(11) NOT NULL,
  `laikas` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ypatybes`
--

DROP TABLE IF EXISTS `ypatybes`;
CREATE TABLE `ypatybes` (
  `id` int(11) NOT NULL,
  `ypatybe` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `koeficientas` decimal(11,4) NOT NULL DEFAULT '1.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ypatybes`
--

INSERT INTO `ypatybes` (`id`, `ypatybe`, `koeficientas`) VALUES
(0, 'sumaPerKg', '1.5000'),
(1, 'sumaPerCm', '0.0010'),
(2, 'trapus', '1.5000'),
(3, 'iprastas', '1.0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ataskaita`
--
ALTER TABLE `ataskaita`
  ADD PRIMARY KEY (`id_ataskaita`);

--
-- Indexes for table `atlyginimas`
--
ALTER TABLE `atlyginimas`
  ADD PRIMARY KEY (`id_atlyginimas`);

--
-- Indexes for table `bagazas`
--
ALTER TABLE `bagazas`
  ADD PRIMARY KEY (`id_bagazas`),
  ADD KEY `registruoja_bagaza` (`fk_keleivis_id_keleivis`),
  ADD KEY `nustato_kaina` (`fk_cekis_id_cekis`),
  ADD KEY `fk_ypatybe` (`ypatybes`),
  ADD KEY `fk_busena` (`busena`),
  ADD KEY `fk_lektuvas_id_lektuvas` (`fk_lektuvas_id_lektuvas`) USING BTREE;

--
-- Indexes for table `bilietas`
--
ALTER TABLE `bilietas`
  ADD PRIMARY KEY (`id_bilietas`),
  ADD KEY `Priskirtas` (`fk_marsrutas_id_marsrutas`);

--
-- Indexes for table `busena`
--
ALTER TABLE `busena`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cekis`
--
ALTER TABLE `cekis`
  ADD PRIMARY KEY (`id_cekis`),
  ADD KEY `fk_keleivis_id_keleivis_2` (`fk_keleivis_id_keleivis`);

--
-- Indexes for table `daiktas`
--
ALTER TABLE `daiktas`
  ADD PRIMARY KEY (`id_daiktas`);

--
-- Indexes for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  ADD PRIMARY KEY (`id_darbuotojas`),
  ADD KEY `raso_zinute` (`fk_pokalbiu_kambarys_id_pokalbiu_kambarys`),
  ADD KEY `pateikia_darbuotojas` (`fk_ataskaita_id_ataskaita`),
  ADD KEY `registruoja` (`fk_oro_uostas_id_oro_uostas`),
  ADD KEY `patvirtina` (`fk_ataskaita_id_ataskaita1`),
  ADD KEY `priskiria` (`fk_nakvyne_id_nakvyne`),
  ADD KEY `atnesa` (`fk_kvitas_id_kvitas`),
  ADD KEY `gauna` (`fk_atlyginimas_id_atlyginimas`),
  ADD KEY `skiria_darbuotojas` (`fk_nuobauda_id_nuobauda1`);

--
-- Indexes for table `keleivis`
--
ALTER TABLE `keleivis`
  ADD PRIMARY KEY (`id_keleivis`);

--
-- Indexes for table `kvitas`
--
ALTER TABLE `kvitas`
  ADD PRIMARY KEY (`id_kvitas`);

--
-- Indexes for table `lektuvas`
--
ALTER TABLE `lektuvas`
  ADD PRIMARY KEY (`id_lektuvas`),
  ADD KEY `atliktas` (`fk_remontas_id_remontas`);

--
-- Indexes for table `marsrutas`
--
ALTER TABLE `marsrutas`
  ADD PRIMARY KEY (`id_marsrutas`),
  ADD UNIQUE KEY `fk_oro_uostas_id_oro_uostas` (`fk_oro_uostas_id_oro_uostas`),
  ADD UNIQUE KEY `fk_lektuvas_id_lektuvas` (`fk_lektuvas_id_lektuvas`);

--
-- Indexes for table `nakvyne`
--
ALTER TABLE `nakvyne`
  ADD PRIMARY KEY (`id_nakvyne`);

--
-- Indexes for table `nuobauda`
--
ALTER TABLE `nuobauda`
  ADD PRIMARY KEY (`id_nuobauda`);

--
-- Indexes for table `nuomininkas`
--
ALTER TABLE `nuomininkas`
  ADD PRIMARY KEY (`id_nuomininkas`),
  ADD KEY `nuomojama` (`fk_patalpa_id_patalpa`);

--
-- Indexes for table `oro_uostas`
--
ALTER TABLE `oro_uostas`
  ADD PRIMARY KEY (`id_oro_uostas`);

--
-- Indexes for table `patalpa`
--
ALTER TABLE `patalpa`
  ADD PRIMARY KEY (`id_patalpa`);

--
-- Indexes for table `pokalbiu_kambarys`
--
ALTER TABLE `pokalbiu_kambarys`
  ADD PRIMARY KEY (`id_pokalbiu_kambarys`);

--
-- Indexes for table `praejimo_kontrole`
--
ALTER TABLE `praejimo_kontrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remontas`
--
ALTER TABLE `remontas`
  ADD PRIMARY KEY (`id_remontas`);

--
-- Indexes for table `skiria`
--
ALTER TABLE `skiria`
  ADD PRIMARY KEY (`fk_atlyginimas_id_atlyginimas`,`fk_darbuotojas_id_darbuotojas`);

--
-- Indexes for table `skundas`
--
ALTER TABLE `skundas`
  ADD PRIMARY KEY (`id_skundas`),
  ADD KEY `priima` (`fk_darbuotojas_id_darbuotojas`),
  ADD KEY `pateikia_skunda` (`fk_keleivis_id_keleivis`),
  ADD KEY `fk_busena_id` (`busena`);

--
-- Indexes for table `takas`
--
ALTER TABLE `takas`
  ADD PRIMARY KEY (`id_takas`),
  ADD KEY `priskirtas_takas` (`fk_tvarkarascio_irasas_id_tvarkarascio_irasas`);

--
-- Indexes for table `tikrina`
--
ALTER TABLE `tikrina`
  ADD PRIMARY KEY (`fk_keleivis_id_keleivis`,`fk_darbuotojas_id_darbuotojas`);

--
-- Indexes for table `tvarkarascio_irasas`
--
ALTER TABLE `tvarkarascio_irasas`
  ADD PRIMARY KEY (`id_tvarkarascio_irasas`);

--
-- Indexes for table `ypatybes`
--
ALTER TABLE `ypatybes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ataskaita`
--
ALTER TABLE `ataskaita`
  MODIFY `id_ataskaita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `atlyginimas`
--
ALTER TABLE `atlyginimas`
  MODIFY `id_atlyginimas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bagazas`
--
ALTER TABLE `bagazas`
  MODIFY `id_bagazas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bilietas`
--
ALTER TABLE `bilietas`
  MODIFY `id_bilietas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `busena`
--
ALTER TABLE `busena`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cekis`
--
ALTER TABLE `cekis`
  MODIFY `id_cekis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `daiktas`
--
ALTER TABLE `daiktas`
  MODIFY `id_daiktas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `darbuotojas`
--
ALTER TABLE `darbuotojas`
  MODIFY `id_darbuotojas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keleivis`
--
ALTER TABLE `keleivis`
  MODIFY `id_keleivis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kvitas`
--
ALTER TABLE `kvitas`
  MODIFY `id_kvitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lektuvas`
--
ALTER TABLE `lektuvas`
  MODIFY `id_lektuvas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `marsrutas`
--
ALTER TABLE `marsrutas`
  MODIFY `id_marsrutas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nakvyne`
--
ALTER TABLE `nakvyne`
  MODIFY `id_nakvyne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nuobauda`
--
ALTER TABLE `nuobauda`
  MODIFY `id_nuobauda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nuomininkas`
--
ALTER TABLE `nuomininkas`
  MODIFY `id_nuomininkas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oro_uostas`
--
ALTER TABLE `oro_uostas`
  MODIFY `id_oro_uostas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `patalpa`
--
ALTER TABLE `patalpa`
  MODIFY `id_patalpa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pokalbiu_kambarys`
--
ALTER TABLE `pokalbiu_kambarys`
  MODIFY `id_pokalbiu_kambarys` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `praejimo_kontrole`
--
ALTER TABLE `praejimo_kontrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `remontas`
--
ALTER TABLE `remontas`
  MODIFY `id_remontas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skundas`
--
ALTER TABLE `skundas`
  MODIFY `id_skundas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `takas`
--
ALTER TABLE `takas`
  MODIFY `id_takas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tvarkarascio_irasas`
--
ALTER TABLE `tvarkarascio_irasas`
  MODIFY `id_tvarkarascio_irasas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ypatybes`
--
ALTER TABLE `ypatybes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bagazas`
--
ALTER TABLE `bagazas`
  ADD CONSTRAINT `fk_cekis` FOREIGN KEY (`fk_cekis_id_cekis`) REFERENCES `cekis` (`id_cekis`),
  ADD CONSTRAINT `fk_keleivis_id` FOREIGN KEY (`fk_keleivis_id_keleivis`) REFERENCES `keleivis` (`id_keleivis`),
  ADD CONSTRAINT `fk_lektuvas_id` FOREIGN KEY (`fk_lektuvas_id_lektuvas`) REFERENCES `lektuvas` (`id_lektuvas`),
  ADD CONSTRAINT `fk_ypatybe` FOREIGN KEY (`ypatybes`) REFERENCES `ypatybes` (`id`);

--
-- Constraints for table `cekis`
--
ALTER TABLE `cekis`
  ADD CONSTRAINT `fk_keleivis` FOREIGN KEY (`fk_keleivis_id_keleivis`) REFERENCES `keleivis` (`id_keleivis`);

--
-- Constraints for table `skundas`
--
ALTER TABLE `skundas`
  ADD CONSTRAINT `fk_busena_id` FOREIGN KEY (`busena`) REFERENCES `busena` (`id`),
  ADD CONSTRAINT `fk_darbuotojas` FOREIGN KEY (`fk_darbuotojas_id_darbuotojas`) REFERENCES `darbuotojas` (`id_darbuotojas`),
  ADD CONSTRAINT `fk_keleivis_fk_id` FOREIGN KEY (`fk_keleivis_id_keleivis`) REFERENCES `keleivis` (`id_keleivis`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
