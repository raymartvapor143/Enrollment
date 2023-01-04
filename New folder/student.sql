-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 12:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `gradeeigth`
--

CREATE TABLE `gradeeigth` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'gender',
  `bdate` text NOT NULL,
  `roll` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gradeeigth`
--

INSERT INTO `gradeeigth` (`id`, `name`, `middle`, `lastname`, `gender`, `bdate`, `roll`, `city`, `mother`, `father`, `photo`, `datetime`) VALUES
(20, 'Ryan Jev', 'Mahusay', 'Beboso', 'MALE', '2009-02-02', 2147483647, 'luz Village, Mlang, North Cotabato', 'Mahusay, Fedelina, Ag-Ag', 'beboso, Rene, Santiana', '1302251400022022-12-07-12-00.png', '2022-12-07 08:06:00'),
(21, 'Dexter', 'Bernadas', 'Carel', 'MALE', '2009-09-26', 2147483647, 'luz Village, Mlang, North Cotabato', 'Bernadas, Luisa, Daliba', 'Carel, Dalino, Sitoy', '1302251400032022-12-07-12-00.png', '2022-12-07 08:09:00'),
(22, 'Juriel', 'Aldamar', 'Cenabre', 'MALE', '2008-04-04', 2147483647, 'luz Village, Mlang, North Cotabato', 'Aldamar, Jovelyn, Delfin', 'Cenabre, Elnor, Alcoy', '1302241400242022-12-07-12-52.png', '2022-12-07 08:10:52'),
(23, 'Renz', 'Bacudo', 'Daligdig ', 'MALE', '2009-07-25', 2147483647, 'luz Village, Mlang, North Cotabato', 'Bacudo, Ruth, Mojana', 'Daligdig, Roy, Porras', '1302251400042022-12-07-12-52.png', '2022-12-07 08:13:52'),
(24, 'Tesekkur Edirim Bendi', 'Parcon', 'Delfin', 'MALE', '2008-07-25', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Parcon, Cherry', 'Delfin, Ruben, Basan', '1302251400052022-12-07-12-37.png', '2022-12-07 08:16:37'),
(26, 'Rich Clarence', 'NA', 'Didal', 'MALE', '2009-07-20', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Didal, Marian, Medrocill', 'NA', '21474836472022-12-10-12-17.png', '2022-12-09 03:05:55'),
(27, 'Asolo Jay', 'Porras', 'Dordas', 'MALE', '2009-07-30', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Porras.Cheenee, De Asis', 'Dordas, Rogelio, Porras Jr.', '21474836472022-12-10-12-40.png', '2022-12-09 03:08:01'),
(28, 'Jay Ar', 'Eslimutan', 'Dordas', 'MALE', '2008-02-16', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Eslimutan, Nelly, Falsario', 'Dordas, Aurelio, Evaled', '21474836472022-12-10-12-51.png', '2022-12-09 03:10:05'),
(29, 'Rowhel', 'Zalde', 'Dordas', 'MALE', '2008-12-12', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Zalde,Whelma, Pitelo', 'Dordas, Roel, Porras', '21474836472022-12-10-12-28.png', '2022-12-09 03:11:37'),
(30, 'Ralph Ian', 'Frofunga', 'Fajarillo', 'MALE', '2008-08-22', 2147483647, 'Pelma-Perez, Mlang, North Cotabato', 'Frofunga, Lennie, Esmeralda', 'Fajarillo, Radny, Napatotan', '21474836472022-12-10-12-01.png', '2022-12-09 03:16:39'),
(31, 'John Amiel', 'Travilla', 'Falsario', 'MALE', '2008-08-22', 2147483647, 'Pelma-Perez, Mlang, North Cotabato', 'Travilla, Ivy, Pano', 'Falsario, Herbert, Frofunga', '21474836472022-12-10-12-06.png', '2022-12-09 03:18:37'),
(32, 'Ron Sygon', 'Delos Reyes', 'Frofunga', 'MALE', '2009-07-25', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Reyes, Gretchen, Delos', 'Frofunga, Ronie, Esmeralda', '21474836472022-12-10-12-14.png', '2022-12-09 03:21:19'),
(33, 'Harrie', 'Salut', 'Gamela', 'MALE', '2008-10-14', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Salut, Helen, Escanuela', 'Gamela, Renaldo, Dahan', '21474836472022-12-10-12-55.png', '2022-12-09 03:22:57'),
(34, 'Christopher', 'Milagrosa', 'Gocela', 'MALE', '2008-12-05', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Milagrosa, Aricel, Salot', 'Gocela, Antonio, Bajenting', '21474836472022-12-10-12-31.png', '2022-12-09 03:24:59'),
(35, 'Jurbert John', 'Porras', 'Gonzalaes', 'MALE', '2008-08-31', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Porras, Jerlyn, Talaron', 'Gonzales, Gerry Lim, Joyo', '21474836472022-12-10-12-14.png', '2022-12-09 03:26:44'),
(36, 'Jun Lee', 'Porras', 'Gravanto', 'MALE', '2006-06-17', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Porras, Mylene, Delfin', 'Gravante, Roger, Ortega', '21474836472022-12-10-12-01.png', '2022-12-09 03:28:35'),
(37, 'Raymond', 'Porras', 'Gravanto', 'MALE', '2004-10-01', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Porras, Mylene, Delfin', 'Gravante, Roger, Ortega', '21474836472022-12-10-12-51.png', '2022-12-09 03:29:50'),
(38, 'Benz Spencer', 'Porras', 'Jungco', 'MALE', '2008-11-09', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Jungco, Genevive, Porras', 'NA', '21474836472022-12-10-12-41.png', '2022-12-09 03:31:36'),
(39, 'Michael Dave', 'Delos Santos', 'Magtulis', 'MALE', '2007-11-30', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Delos Santos, Sheryl, Nogas', 'Magtulis, Joel, Dordas', '21474836472022-12-10-12-30.png', '2022-12-09 03:33:39'),
(40, 'Ronniel', 'Clarde', 'Maramara', 'MALE', '2008-08-26', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Clarde, April Rose, Nueva', 'Maramara, Rolito, Garcia', '21474836472022-12-10-12-20.png', '2022-12-09 03:35:18'),
(41, 'Ace Chevie', 'Biabas', 'Pedregosa', 'MALE', '2008-11-23', 2147483647, 'Pag-asa, Mlang, North Cotabato', 'Biabas, Richie, Marimonte', 'Pedregosa, Allan, Lao', '21474836472022-12-10-12-08.png', '2022-12-09 03:40:26'),
(42, 'Brylle Kent', 'Godoy', 'Polines', 'MALE', '0209-06-05', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Godoy, Marnie, Materio', 'Polines, Kennet, Impas', '21474836472022-12-10-12-52.png', '2022-12-09 03:42:47'),
(43, 'Laurence', 'Lapad', 'Porras', 'MALE', '2009-01-20', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Lapad, Hydie, Mareno', 'Porras, Laueque, Mabolo', '21474836472022-12-10-12-39.png', '2022-12-09 03:45:20'),
(44, 'Jhon ', 'Rebuyas', 'Puricallan', 'MALE', '2009-06-24', 2147483647, 'Pelma-Perez, Mlang, North Cotabato', 'Rebuyas, Maria Liza, Escarpe', 'Puricallan, Jostiniano', '21474836472022-12-10-12-56.png', '2022-12-09 03:47:38'),
(45, 'Bernabe Jr', 'Eslimuntan', 'Roa', 'MALE', '2009-09-28', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Eslimutan, Samile, Fano', 'Roa, Bernabe, Porras', '21474836472022-12-10-12-26.png', '2022-12-09 03:50:34'),
(46, 'Jhon Renier', 'Jungco', 'Rubido', 'MALE', '2008-12-19', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Jungco, Josie, Porras', 'Rubido, Rex, Villanueva', '21474836472022-12-10-12-14.png', '2022-12-09 03:52:31'),
(47, 'Justin', 'Tungal', 'Salva', 'MALE', '2009-09-21', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Salva, Merlyn, Tungal', 'NA', '21474836472022-12-10-12-02.png', '2022-12-09 03:54:15'),
(48, 'Michael Jay', 'Dugaduga', 'tabique', 'MALE', '2009-05-08', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Dugaduga, Maria, Napisa', 'Tabique, Joelito, santia', '21474836472022-12-10-12-50.png', '2022-12-09 03:55:53'),
(49, 'Jay John', 'Benawe', 'Tanelon', 'MALE', '2008-06-22', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Benawe, Semaflor, Sibayan', 'Tanilon, Eugenio, Repdos', '21474836472022-12-10-12-38.png', '2022-12-09 03:58:02'),
(50, 'Jay Mark', 'Villarmente', 'Templa', 'MALE', '2009-04-27', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Villarmente, Arlyn, Pescadiro', 'Templa. Joseph, Sarte', '21474836472022-12-10-12-25.png', '2022-12-09 04:00:38'),
(51, 'Jonash', 'Bajenting', 'Teves', 'MALE', '2009-06-15', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Bajenting, Juvielyn, Rosal', 'Teves, Modesto, Profongga', '21474836472022-12-10-12-13.png', '2022-12-09 04:02:35'),
(52, 'Rose Ann', 'Nogas', 'Aldamar', 'FEMALE', '2008-11-18', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Nogas, Antonette, Mahilum', 'Aldamar, Roger, Tagurigan', '21474836472022-12-10-12-00.png', '2022-12-09 05:03:20'),
(53, 'Audy', 'Maambong', 'Aroche', 'FEMALE', '2008-11-18', 2147483647, 'New Caridad, Tulunan, North Cotabato', 'Maambong, Leosan, gule', 'Aroche, Benhur, Famillaran', '21474836472022-12-10-12-47.png', '2022-12-09 05:05:56'),
(54, 'Glimpse Grace', 'Triumfante', 'Baay', 'FEMALE', '2009-08-28', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Triumfante, Anges, Sustiverio', 'Baay, Edwin, Pelayo', '21474836472022-12-10-12-23.png', '2022-12-09 05:08:14'),
(55, 'Fiona Mae', 'Apilado', 'Beboso', 'FEMALE', '2009-07-28', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Apilado, Annabelle, Polines', 'Beboso, Rommel, Vergas', '21474836472022-12-10-12-10.png', '2022-12-09 05:10:15'),
(56, 'Wenzyl Jane', 'Arquillano', 'Carranza', 'FEMALE', '2009-02-06', 2147483647, 'Pulang-pula, Mlang, North Cotabato', 'Arquillano, Cheryl, Daquil', 'Carranza, heroien, Rueza', '21474836472022-12-10-12-58.png', '2022-12-09 05:12:46'),
(57, 'Riza', 'Aquino', 'Delfin', 'FEMALE', '2008-11-29', 2147483647, 'luz Village, Mlang, North Cotabato', 'Aquino, Rose Eden, Corpuz', 'Delfin, Reynaldo, Basan', '21474836472022-12-10-12-45.png', '2022-12-09 05:14:57'),
(58, 'Vine Arnei Jane', 'Pedregosa', 'Diasanta', 'FEMALE', '2009-01-05', 2147483647, 'luz Village, Mlang, North Cotabato', 'Pedregosa, Jeane Jane, Lao', 'Diasanta, Arvin, Porras', '21474836472022-12-10-12-19.png', '2022-12-09 05:17:10'),
(59, 'Christene Mae', 'Onez', 'Gayumali', 'FEMALE', '2009-05-10', 2147483647, 'luz Village, Mlang, North Cotabato', 'Onez, Jessebel, Nacorda', 'Gayumali, Miguelo, Dugaduga', '21474836472022-12-10-12-06.png', '2022-12-09 05:20:58'),
(60, 'Khent Breanna', 'Hitalia', 'Godoy', 'FEMALE', '2009-07-04', 2147483647, 'luz Village, Mlang, North Cotabato', 'Hitalia, Celia Mae, Jungco', 'Godoy, Marlon, Materio', '21474836472022-12-10-12-52.png', '2022-12-09 05:22:43'),
(61, 'Alexa Mae', 'Gamela', 'Joyo', 'FEMALE', '2009-07-23', 2147483647, 'luz Village, Mlang, North Cotabato', 'Gamlea, Emily, Dahan', 'Joyo, Alexes, Sabornido', '21474836472022-12-10-12-40.png', '2022-12-09 05:30:51'),
(62, 'Mariel', 'Montejo', 'Lagia', 'FEMALE', '2008-12-13', 2147483647, 'luz Village, Mlang, North Cotabato', 'Montejo, Meredjin, Buday', 'Lagia, Antonio, Nigot', '21474836472022-12-10-12-27.png', '2022-12-09 05:34:08'),
(63, 'Jhunalyn', 'Evalid', 'Lamis', 'FEMALE', '2009-10-04', 2147483647, 'luz Village, Mlang, North Cotabato', 'Evalid, Leney, Porras', 'Lamis, Dionesio Jr', '21474836472022-12-10-12-28.png', '2022-12-09 05:35:39'),
(64, 'Alexia Mary', 'Mattimbol', 'Mongas', 'FEMALE', '2009-04-22', 2147483647, 'Bannawag, Kabacan, North Cotabato', 'Mongas, Khalil, Matimbol', 'NA', '21474836472022-12-10-12-57.png', '2022-12-09 05:38:45'),
(65, 'Jeah ', 'Maambong', 'Montejo', 'FEMALE', '2009-07-16', 2147483647, 'luz Village, Mlang, North Cotabato', 'Maambong, Genalyn, Francisco', 'Montejo, Jonathan, Delos Santos', '21474836472022-12-10-12-41.png', '2022-12-09 05:40:52'),
(66, 'Melissa', 'Morada', 'Naid', 'FEMALE', '2008-10-19', 2147483647, 'La Suerte, Mlang, North Cotabato', 'Morada, Emilie, Narido', 'Naid, Elizalde, Edit', '21474836472022-12-10-12-29.png', '2022-12-09 05:42:55'),
(67, 'Myles', 'Tadena', 'Narido', 'FEMALE', '2009-05-05', 2147483647, 'La Suerte, Mlang, North Cotabato', 'Tadena, Joenalyn, Embate', 'Narido, Joey, Ninora', '21474836472022-12-10-12-14.png', '2022-12-09 05:45:14'),
(68, 'Gleizl Mae', 'Talaron', 'Pedregosa', 'FEMALE', '2009-07-28', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Talaron, Michelle, Naid', 'Pedregosa, john Arniel, Parreno', '21474836472022-12-10-12-01.png', '2022-12-09 05:47:40'),
(69, 'Jazzel Jean', 'Baradero', 'Porras', 'FEMALE', '2008-12-05', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Baradero, Maricel, Panaligan', 'Porras, Gil, Casomo', '21474836472022-12-10-12-42.png', '2022-12-09 05:49:37'),
(70, 'Krisha May', 'Mata', 'Porras', 'FEMALE', '2009-10-10', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Mata, Evangeline, Aguilar', 'Porras, Vicente, Beboso', '21474836472022-12-10-12-31.png', '2022-12-09 05:51:16'),
(71, 'Vaniz Kisha', 'NA', 'Sumabong', 'FEMALE', '2007-10-29', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Sumabong, Leycel, Maramara', 'N.A', '21474836472022-12-10-12-20.png', '2022-12-09 05:53:02'),
(72, 'Richel', 'Porras', 'Tanginan', 'FEMALE', '2009-01-07', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Porras, Flordeliza, Beboso', 'Tanginan, Richard, Terante', '21474836472022-12-10-12-41.png', '2022-12-09 05:55:05'),
(73, 'Cristine', 'Pano', 'Travilla', 'FEMALE', '2009-01-25', 2147483647, 'Palma-Perez, Mlang, North Cotabato', 'Pagtawin, Pano, Asoncion', 'Travilla, Vicente, Bergante', '21474836472022-12-10-12-10.png', '2022-12-09 05:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `gradenine`
--

CREATE TABLE `gradenine` (
  `id` int(255) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'gender',
  `bdate` text NOT NULL,
  `roll` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gradenine`
--

INSERT INTO `gradenine` (`id`, `middle`, `lastname`, `name`, `gender`, `bdate`, `roll`, `city`, `mother`, `father`, `photo`, `datetime`) VALUES
(2, 'eltagondesdfs', 'vaporadfas', 'raymartsdfa', 'FEMALE', '2022-12-31', 2147483647, 'Tiguman, sdfsfsdfs sdfs, sdgsgs sfdgss', 'sgsg sgsgs e. sdggfsgs', 'sfsgdfts sgstst e. sdfgststgs', '1234562022-12-03-12-58.png', '2022-12-03 03:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `gradeseven`
--

CREATE TABLE `gradeseven` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'gender',
  `bdate` text NOT NULL,
  `roll` int(255) NOT NULL,
  `city` text NOT NULL,
  `mother` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gradeseven`
--

INSERT INTO `gradeseven` (`id`, `name`, `middle`, `lastname`, `gender`, `bdate`, `roll`, `city`, `mother`, `father`, `photo`, `datetime`) VALUES
(12, 'Jeryllen ', 'Guillermo', 'Allan', 'MALE', '2010-04-03', 2147483647, 'Palma-Perez, Mlang, North Cotabato', 'Guillermo, Jenerose, Ambag', 'Allan, Bonifacio Aldamar Jr.', '1302321500022022-12-07-12-15.png', '2022-12-07 06:38:15'),
(13, 'Jayford John', 'Beltran', 'Antesco', 'MALE', '2010-11-01', 2147483647, 'Tawantawan, Mlang, North Cotabato', 'Beltran, Elenita, Debuie', 'Antesco, Godofredo, Ollos', '1302321500072022-12-07-12-06.png', '2022-12-07 06:43:06'),
(14, 'Miguel', 'Jr. Lagumbay', 'Bajenting', 'MALE', '2010-05-16', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Lagumbay, Helen, Alisoso', 'Bajenting, Miguel, Alconero', '1302251500022022-12-07-12-43.png', '2022-12-07 06:47:43'),
(15, 'Ryan Patrick', 'Oclarit', 'Baton', 'MALE', '2010-03-09', 2147483647, 'Pag-asa, Mlang, North Cotabato', 'Oclarit, Shela Mae, Dahan', 'Baton, Roselo Tanilon', '1302351500052022-12-07-12-40.png', '2022-12-07 06:50:40'),
(16, 'Gian', 'Sain', 'campos', 'MALE', '2010-12-09', 2147483647, 'Palma-Perez, Mlang, North Cotabato', 'Sain, Elena, Sanuson', 'Campos, Norberto Evalid', '1302321500162022-12-07-12-55.png', '2022-12-07 06:53:55'),
(17, 'Harvey', 'Yancha', 'Dela Penas', 'MALE', '2010-07-24', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Yancha, Emelie, Sarte', 'Dela Penas, Nestor Capon', '1302291500252022-12-07-12-23.png', '2022-12-07 06:57:23'),
(18, 'Ariel', 'NA', 'Dordas', 'MALE', '2010-03-08', 2147483647, 'Luz village, Mlang, North Cotabato', 'Dordas Arialyn, Eslimutan', 'NA', '1302251500062022-12-07-12-56.png', '2022-12-07 06:59:56'),
(19, 'Jeorge', 'Zalde', 'Dordas', 'MALE', '2010-02-05', 2147483647, 'Palma-Perez, Mlang, North Cotabato', 'Zalde. Whelma, Pitelo', 'Dordas, Roel, Porras', '1302321500012022-12-07-12-04.png', '2022-12-07 07:03:04'),
(20, 'Louise Gabriel', 'Sumabong', 'Gonzales', 'MALE', '2010-05-28', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Sumabong, Leycel, Maramara', 'Gonzales, Geovanie, Joyo', '1302251500762022-12-07-12-25.png', '2022-12-07 07:05:25'),
(21, 'Ronald Jr', 'Gamela', 'Malasador', 'MALE', '2010-03-18', 2147483647, 'Tamler, General Santos City, North Cotabato', 'Gamela, Isabel, Dajan', 'Malasador, Ronald Toribio', '1313041600012022-12-07-12-45.png', '2022-12-07 07:10:45'),
(22, 'Aron', 'Clarde', 'Maramara', 'MALE', '2010-02-28', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Clarde, April Rose, Nueva', 'Maramara, Rolito, Garcia', '1302251500122022-12-07-12-15.png', '2022-12-07 07:13:15'),
(23, 'Angelo', 'Magtulis', 'Marimon', 'MALE', '2010-05-04', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Magtulis, Jenny, Dordas', 'Marimon, Antonino, Degulacion', '1302251500132022-12-07-12-30.png', '2022-12-07 07:15:30'),
(24, 'Jhon Mark', 'Bajenting', 'Marimon', 'MALE', '2010-07-31', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Bajenting, Anabell, Rosal', 'Marimon, Margarito, Pulga', '1302251502452022-12-07-12-02.png', '2022-12-07 07:17:02'),
(25, 'Jhon Kevin', 'Ruiz', 'Naid', 'MALE', '2010-08-28', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Ruiz, Roselyn, Pabellio', 'Naid, Ronald, Eslacin', '1302581500182022-12-07-12-24.png', '2022-12-07 07:19:24'),
(26, 'Andioleno Jr.', 'Zerrudo', 'Pedroso', 'MALE', '2010-05-13', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Zerrudo, Laila, Mantawil', 'Pedroso, Anjoling, Polines', '1302251500152022-12-07-12-44.png', '2022-12-07 07:22:44'),
(27, 'Reiny Jhon', 'Gumana', 'Pelere', 'MALE', '2010-07-31', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Gumana, Irene, Cabanas', 'Pelere, Renee, Magno', '1302241500062022-12-07-12-08.png', '2022-12-07 07:25:08'),
(28, 'Kean Jade', 'Paris', 'Perez', 'MALE', '2010-08-12', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Paris, Kareen, Histalia', 'Perez, Jerwin, Sasana', '1302251500162022-12-07-12-55.png', '2022-12-07 07:27:55'),
(29, 'Elmer Jr.', 'Laman', 'Tabique', 'MALE', '2009-07-15', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Laman, Nelia, Garcia', 'Tambique, Elmer, Santia', '1302251400112022-12-07-12-27.png', '2022-12-07 07:30:27'),
(30, 'Vincent', 'Plete', 'Templa', 'MALE', '2009-05-03', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Plete, Arlyn, Lendama', 'Templa, Julius, Sarte', '1302251400352022-12-07-12-58.png', '2022-12-07 07:31:58'),
(31, 'Fretch Angel', 'Estrera', 'Adolfo', 'FEMALE', '2009-03-12', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Estrera, Fe, Sarte', 'Adolfo, Alex, Pedroso', '1302251500192022-12-07-12-11.png', '2022-12-07 07:35:11'),
(32, 'Cattleya', 'Tungal', 'Arcelo', 'FEMALE', '2009-10-15', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Arcelo, Sally, Castro', 'NA', '1302251400492022-12-07-12-45.png', '2022-12-07 07:36:45'),
(33, 'AShley Claire', 'Macono', 'Evalid', 'FEMALE', '2008-12-26', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Macono, Amy, Castro', 'Evalid, Lito, Porras', '1302321400062022-12-07-12-32.png', '2022-12-07 07:38:32'),
(34, 'Vera Mae', 'Caylan', 'Gamela', 'FEMALE', '2008-09-23', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Caylan, Myrnina, Samonte', 'Gamela, Victor, Tagud', '1302251500212022-12-07-12-23.png', '2022-12-07 07:40:23'),
(35, 'Jamaica Mae', 'Gaspar', 'Magtulis', 'FEMALE', '2010-05-14', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Gaspar, Marry Jane, Delima', 'Magtulis, Jomar, Dordas', '1300761500162022-12-07-12-40.png', '2022-12-07 07:42:40'),
(36, 'Sharon', 'De los Santos', 'Magtulis', 'FEMALE', '2010-06-29', 2147483647, 'Luz Village, Mlang, North Cotabato', 'De los Santos, Sheryl, Nogas', 'Magtulis, Joel, Dordas', '1302321500082022-12-07-12-54.png', '2022-12-07 07:44:54'),
(37, 'Queencebel', 'Moda', 'Masulong', 'FEMALE', '2010-06-27', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Moda, Emily, Baloloy', 'Masulong, Lito, Tratso', '1302251500232022-12-07-12-51.png', '2022-12-07 07:46:51'),
(38, 'Charize', 'Maramara', 'Pabellan', 'FEMALE', '2009-11-29', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Maramara, Nancy, Garcia', 'Pabellan, Charlie, Pelarion', '1302251500252022-12-07-12-31.png', '2022-12-07 07:48:31'),
(39, 'Joverlyn ', 'Timpawa', 'Pedros', 'FEMALE', '2010-10-01', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Timpaswa, Dina, Arandilla', 'Pedros, Jover, Gatab', '1302251500262022-12-07-12-59.png', '2022-12-07 07:50:59'),
(40, 'Bemmy Jane', 'Brana', 'Materio', 'FEMALE', '2010-01-25', 2147483647, 'Nueva, Mlang, North Cotabato', 'Brana, Gina, Bayog', 'Materio, Billy, Porras', '1302251500242022-12-07-12-42.png', '2022-12-07 07:53:42'),
(41, 'Jenica Brendaliz', 'Pasqoin', 'Pentason', 'FEMALE', '2009-05-03', 2147483647, 'Palma-Perez, Mlang, North Cotabato', 'Pasquin, Arlene, Dafielmoto', 'Pentason, Jerome, Napat', '1302251500132022-12-07-12-56.png', '2022-12-07 07:55:56'),
(42, 'Ma Cristina', 'Anasco', 'Puricallan', 'FEMALE', '2009-11-20', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Anasco, Rosa, Esapine', 'Puricallan, Edgar, Mauring', '1302251500272022-12-07-12-02.png', '2022-12-07 07:58:02'),
(43, 'Runa', 'Penecilla', 'Tanilon', 'FEMALE', '2007-01-07', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Penecilla, Chona, Buendia', 'Tanilon, Rudy, Repdos', '1302301400142022-12-07-12-17.png', '2022-12-07 08:00:17'),
(44, 'Anna Jhane', 'Bautista', 'Villeno', 'FEMALE', '2010-09-21', 2147483647, 'Luz Village, Mlang, North Cotabato', 'Bautista, Divinia, Samonte', 'Villeno, Francisco, Carias', '1302251500282022-12-07-12-27.png', '2022-12-07 08:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `gradeten`
--

CREATE TABLE `gradeten` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'gender',
  `bdate` text NOT NULL,
  `roll` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gradeten`
--

INSERT INTO `gradeten` (`id`, `name`, `middle`, `lastname`, `gender`, `bdate`, `roll`, `city`, `mother`, `father`, `photo`, `datetime`) VALUES
(4, 'Victor Jr', 'Porras', 'Amisco', 'MALE', '2007-07-14', 25140004, 'Palma-Perez, Mlang, North Cotabato', 'Porras, Emma, Betican', 'Amisco, Victor Sr, Adea', '251400042022-12-10-12-48.png', '2022-12-09 06:39:42'),
(5, 'Mark Vincel', 'De Erit', 'Barroquillo', 'MALE', '2006-06-18', 25140004, 'Palma-Perez, Mlang, North Cotabato', 'De Erit, Maricel', 'Barroquillo, Bobby', '251400042022-12-10-12-36.png', '2022-12-09 06:41:23'),
(6, 'Kristoff Merk', 'Alagano', 'Concon', 'MALE', '2007-10-05', 25140004, 'Luz Village, Mlang, North Cotabato', 'Alagano, Melanie, Garcia', 'Concon, Christopher, Rescalar', '251400042022-12-10-12-26.png', '2022-12-09 06:43:51'),
(7, 'Christian', 'Milagrosa', 'Gocela', 'MALE', '2005-12-03', 25140004, 'Luz Village, Mlang, North Cotabato', 'Milagroza, Maricel, Salot', 'Gocela, Antonio, Bajenting', '251400042022-12-10-12-16.png', '2022-12-09 06:45:43'),
(8, 'Clyde Louie', 'Hitalia', 'Godoy', 'MALE', '2006-12-15', 25140004, 'Luz Village, Mlang, North Cotabato', 'Hitalia, Celia Mae, Jungco', 'Godoy, Marlon, Materio', '251400042022-12-10-12-05.png', '2022-12-09 06:48:59'),
(9, 'Francis Jay', 'Pedregosa', 'Hitalla', 'MALE', '2006-05-05', 25140004, 'Luz Village, Mlang, North Cotabato', 'Pedregosa, Malfa, Perreno', 'Hitalla, Joel, Ebarat', '251400042022-12-10-12-54.png', '2022-12-09 06:51:06'),
(10, 'Xander', 'Marimon', 'Lawag', 'MALE', '2006-05-10', 25140004, 'Luz Village, Mlang, North Cotabato', 'Marimon, Rogilene, Pulga', 'Lawag, Alex, Gatab', '251400042022-12-10-12-43.png', '2022-12-09 06:52:38'),
(11, 'Reynan', 'Alinsangao', 'Malud', 'MALE', '2007-11-10', 25140004, 'Luz Village, Mlang, North Cotabato', 'Alinsangao, Nancy, Malinao', 'Malud, Junrey, Bacang', '251400042022-12-10-12-30.png', '2022-12-09 06:54:10'),
(12, 'Jesrel', 'Bayate', 'Nacorda', 'MALE', '2007-04-26', 25140004, 'Luz Village, Mlang, North Cotabato', 'Bayate, Jessebel, Sabanal', 'Nacorda, Elmer, Tagud', '251400042022-12-10-12-16.png', '2022-12-09 06:56:20'),
(13, 'Wendell', 'Morada', 'Naid', 'MALE', '2004-03-05', 25140004, 'La Suerte, Mlang, North Cotabato', 'Morada, Emilie, Narido', 'Naid, Elizalde, Edit', '251400042022-12-10-12-05.png', '2022-12-09 06:58:56'),
(14, 'John Robert', 'Dagsaan', 'Panilawon', 'MALE', '2002-12-01', 25140004, 'Luz Village, Mlang, North Cotabato', 'Dagsaan, Bernartida, Didal', 'Panilawon, Rodulfo, Abequebel', '251400042022-12-10-12-54.png', '2022-12-09 07:02:19'),
(15, 'Erone Jed', 'Gumana', 'Pelere', 'MALE', '2007-09-29', 25140004, 'Luz Village, Mlang, North Cotabato', 'Gumana, Irene, Cabanas', 'Pelere, Renee, Magno', '251400042022-12-10-12-43.png', '2022-12-09 07:04:24'),
(16, 'Gil Bryan ll', 'Robles', 'Polo', 'MALE', '2007-06-23', 25140004, 'Luz Village, Mlang, North Cotabato', 'Robles, Juvy Mae, Berondo', 'Polo, Gil Bryan l, Ingkal', '251400042022-12-10-12-08.png', '2022-12-09 07:06:30'),
(17, 'Melnar', 'Campus', 'Porras', 'MALE', '2007-10-08', 25140004, 'Palma-Perez Mlang, North Cotabato', 'Campus, Melva, Evalid', 'Porras, Narciso, Camillon', '251400042022-12-10-12-56.png', '2022-12-09 07:11:09'),
(18, 'Kevin Dave', 'Cartolina', 'Robles', 'MALE', '2006-12-20', 25140004, 'Luz Village, Mlang, North Cotabato', 'Cartolina, Jinky, Porras', 'Robles, Julius, Barondo', '251400042022-12-10-12-44.png', '2022-12-09 07:12:52'),
(19, 'Joselito Jr', 'Miras', 'Roxas', 'MALE', '2006-05-04', 25140004, 'Luz Village, Mlang, North Cotabato', 'Miras, Maluz, Ibanez', 'Roxas, Joselito, Fucolan', '251400042022-12-10-12-31.png', '2022-12-09 07:14:47'),
(20, 'John Marlou', 'Corpuz', 'Tanilon', 'MALE', '2006-03-25', 25140004, 'Luz Village, Mlang, North Cotabato', 'Corpuz, Nelly, Sadava', 'Tanilon, Mario, Ripdos', '251400042022-12-10-12-17.png', '2022-12-09 07:16:24'),
(21, 'Kenneth Christopher', 'Plete', 'Templa', 'MALE', '2006-05-25', 25140004, 'Luz Village, Mlang, North Cotabato', 'Plete, Arlyn, Ledama', 'Templa, Julius Jr, Profunga', '251400042022-12-10-12-03.png', '2022-12-09 07:18:27'),
(22, 'Joshua', 'Bajenting', 'Teves', 'MALE', '2006-09-11', 25140004, 'Luz Village, Mlang, North Cotabato', 'Bajenting, Juvielyn, Rosal', 'Teves, Modesto, Profongga', '251400042022-12-10-12-50.png', '2022-12-09 07:19:42'),
(23, 'Angel Kaye', 'Bangcaya', 'Abaldonado', 'FEMALE', '2006-12-06', 25140004, 'Luz Village, Mlang, North Cotabato', 'Bangcaya, Jocelyn, De Los Santos', 'Abaldonado, Wilfredo, Tupas', '251400042022-12-10-12-37.png', '2022-12-09 07:22:27'),
(24, 'Leah Valerie', 'Galido', 'Anjao', 'FEMALE', '2006-02-11', 25140004, 'Luz Village, Mlang, North Cotabato', 'Galido, Lea, Estimar', 'Anjoa, William', '251400042022-12-10-12-14.png', '2022-12-09 07:24:12'),
(25, 'Angelica', 'Delos Reyes', 'Frofunga', 'FEMALE', '2006-01-12', 25140004, 'Luz Village, Mlang, North Cotabato', 'Delos Reyes, Cherlyn', 'Frofunga, Abelinde, Delfin', '251400042022-12-10-12-59.png', '2022-12-09 07:26:34'),
(26, 'Kristine', 'Milagrosa', 'Gocela', 'FEMALE', '2007-05-13', 25140004, 'Luz Village, Mlang, North Cotabato', 'Milagroza, Maricel, Salot', 'Gocela, Antonio, Bajenting', '251400042022-12-10-12-43.png', '2022-12-09 07:27:42'),
(27, 'Brince', 'Jadia', 'Jungco', 'FEMALE', '2007-02-08', 25140004, 'Luz Village, Mlang, North Cotabato', 'Jadia, Richel, Jumawan', 'Jungco, Rueno, Nigot', '251400042022-12-10-12-22.png', '2022-12-09 07:29:43'),
(28, 'Marilou', 'Montejo', 'Lagia', 'FEMALE', '2006-11-19', 25140004, 'Luz Village, Mlang, North Cotabato', 'Montejo, Meredjin, Buday', 'Lagia, Antonio, Nigot', '251400042022-12-10-12-09.png', '2022-12-09 07:31:16'),
(29, 'Reyza', 'Tagud', 'Laguyo', 'FEMALE', '2006-03-10', 25140004, 'Luz Village, Mlang, North Cotabato', 'Tagud, Anabella, Gudmalin', 'Laguya, Arnulfo, Templa', '251400042022-12-10-12-54.png', '2022-12-09 07:32:53'),
(30, 'Mary Claire', 'Francisco', 'Maambong', 'FEMALE', '2006-12-14', 25140004, 'Palma-Perez Mlang, North Cotabato', 'Francisco, Mary Jane, Anza', 'Maambong, Judie, Ere-er', '251400042022-12-10-12-39.png', '2022-12-09 07:37:04'),
(31, 'Raizah Glei', 'Diolata', 'Magtulis', 'FEMALE', '2007-04-06', 25140004, 'Luz Village, Mlang, North Cotabato', 'Diolata, Rechel, Domingo', 'Magtulis, Jimmy, Dordas Jr.', '251400042022-12-10-12-23.png', '2022-12-09 07:39:27'),
(32, 'Ellyza Mae', 'Magtulis', 'Marimon', 'FEMALE', '2007-07-23', 25140004, 'Luz Village, Mlang, North Cotabato', 'Magtuis, Jeny, Dordas', 'Marimon, Antonino, Degulacion', '251400042022-12-10-12-07.png', '2022-12-09 07:41:25'),
(33, 'Rechelle Joy', 'Imbang', 'Mesterio', 'FEMALE', '2007-06-30', 25140004, 'Tibao, Mlang, North Cotabato', 'Imbang, Ginalyn, Hingabay', 'Mesterio, Rolando, Ricopuerto', '251400042022-12-10-12-55.png', '2022-12-09 07:43:57'),
(34, 'Roxanne Mae', 'Tee', 'Nacorda', 'FEMALE', '2006-11-05', 25140004, 'Luz Village, Mlang, North Cotabato', 'Tee, Elvimar, Antelio', 'Nacorda, Eugenio, Tagud', '251400042022-12-10-12-43.png', '2022-12-09 07:46:00'),
(35, 'Justine Mae', 'Polines', 'Perez', 'FEMALE', '2006-11-26', 25140004, 'Luz Village, Mlang, North Cotabato', 'Polines, Lea, Solera', 'Perez, Joemarie, Materio', '251400042022-12-10-12-31.png', '2022-12-09 07:47:38'),
(36, 'Mecha Ella', 'Baradero', 'Porras', 'FEMALE', '2007-07-12', 25140004, 'Luz Village, Mlang, North Cotabato', 'Baradero, Maricel, Panaligan', 'Porras, Gil, Casomo', '251400042022-12-10-12-19.png', '2022-12-09 07:55:48'),
(37, 'Desiree', 'Banais', 'Priento', 'FEMALE', '2007-07-22', 25140004, 'Luz Village, Mlang, North Cotabato', 'Banais, Teodessa, Betarmos', 'Prieto, Roy, Gaslang', '251400042022-12-10-12-04.png', '2022-12-09 07:57:46'),
(38, 'Mikylla', 'Delos Santo', 'Sarte', 'FEMALE', '2005-09-02', 25140004, 'Luz Village, Mlang, North Cotabato', 'Delos Santos, Elizabeth, Galan', 'Sarte, Orlando, Mosqueda', '251400042022-12-10-12-50.png', '2022-12-09 08:00:21'),
(39, 'Genevet', 'Montejo', 'Talaron', 'FEMALE', '2007-02-16', 25140004, 'Palma-Perez Mlang, North Cotabato', 'Montejo, Gina, Buday', 'Talaron, Ronald, Tabaosares', '251400042022-12-10-12-37.png', '2022-12-09 08:02:31'),
(40, 'Lady Jean', 'Naid', 'Talaron', 'FEMALE', '2007-08-01', 25140004, 'La Suerte, Mlang, North Cotabato', 'Naid, Arlene, Edit', 'Talaron, Juan, Tabaosares', '251400042022-12-10-12-23.png', '2022-12-09 08:04:18'),
(41, 'Cherlyn', 'Pano', 'Travilla', 'FEMALE', '2006-05-17', 25140004, 'Palma-Perez, Mlang, North Cotabato', 'Pano, Asuncion, Pagtawan', 'Travilla, Vicente, Bergante', '251400042022-12-10-12-59.png', '2022-12-09 08:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'gender',
  `roll` int(6) NOT NULL,
  `class` varchar(3) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pcontact` varchar(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `middle`, `lastname`, `gender`, `roll`, `class`, `city`, `pcontact`, `photo`, `datetime`) VALUES
(67, 'raymart', 'eltagonde', 'vapor', 'Male', 2168948, '1st', 'Tiguman', '099999999', '21689482022-11-25-11-20.png', '2022-11-25 01:47:20'),
(74, '<br />\r\n<b>Warning</', '', '', '', 56565, '', 'Tiguman', '0999999', '565652022-12-03-12-29.png', '2022-12-03 03:10:29'),
(76, 'makieboy', 'sda', 'vapor', '<br />\r\n<b>Warning</b>:  Undefined variable $row in <b>D:xampphtdocsfinal-studentadminadd-student7.php</b> on line <b>92</b><br />\r\n<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>D:xampphtdocsfinal-studentadminadd-stude', 56565666, '', 'Tiguman', '0999999', '565656662022-12-03-12-23.png', '2022-12-03 03:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(255) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `photo`, `status`, `datetime`, `user_type`) VALUES
(29, 'ADMIN', 'admin@admin.com', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'admin.png', 'active', '2022-12-03 04:24:32', 'admin'),
(30, 'ADMIN 2', 'admin2@admin2.com', 'admin2', 'e4df782e9185732c1bb3efcf052a21d4c11c605f', 'admin2.png', 'active', '2022-12-10 02:12:40', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gradeeigth`
--
ALTER TABLE `gradeeigth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roll` (`roll`);

--
-- Indexes for table `gradenine`
--
ALTER TABLE `gradenine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roll` (`roll`);

--
-- Indexes for table `gradeseven`
--
ALTER TABLE `gradeseven`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roll` (`roll`);

--
-- Indexes for table `gradeten`
--
ALTER TABLE `gradeten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roll` (`roll`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gradeeigth`
--
ALTER TABLE `gradeeigth`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `gradenine`
--
ALTER TABLE `gradenine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gradeseven`
--
ALTER TABLE `gradeseven`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `gradeten`
--
ALTER TABLE `gradeten`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
