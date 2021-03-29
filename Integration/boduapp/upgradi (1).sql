-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 01:23 PM
-- Server version: 8.0.19
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upgradi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int NOT NULL,
  `nom_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_cat`) VALUES
(1, 'sport'),
(2, 'bbbbbbbbbbbbbbbb'),
(3, 'gvchgvhg'),
(4, 'gvhghg'),
(6, 'bv'),
(7, 'dev');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `formateur` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `userName`, `mdp`, `email`, `formateur`) VALUES
(1, 'Nasri', 'Med', 'med', 'med', 'mohammed.nasri@esprit.tn', 0),
(3, 'yassine', 'fekih', 'fekihYassine', '123456', 'hamdiskander77@gmail.com', 0),
(4, 'aziz', 'amdouni', 'aziz', 'amdouni', 'mohamedaziz.amdouni@esprit.tn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `idComm` int NOT NULL,
  `idClient` int NOT NULL,
  `idEvent` int NOT NULL,
  `dateComm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descComm` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`idComm`, `idClient`, `idEvent`, `descComm`) VALUES
(25, 1, 14, 'best application ever '),
(26, 3, 14, 'i need to know the name \nof the prof pleaaaaase'),
(27, 3, 14, '<3333333333'),
(28, 3, 14, ':::::'),
(29, 1, 14, 'bill gates will present this event'),
(30, 1, 25, 'fuck u\n'),
(31, 1, 14, 'dggrgdrgdrh'),
(32, 1, 11, 'i like it'),
(33, 1, 19, 'event m3affet allekher\n'),
(34, 1, 14, 'kjbkjxkjax'),
(35, 0, 25, 'heyy'),
(36, 0, 25, 'hello'),
(37, 0, 14, 'hello'),
(38, 1, 14, 'jldfnskjbfskj'),
(39, 3, 14, 'aziz'),
(40, 1, 14, 'klkdsflkklkl'),
(41, 1, 25, 'lol'),
(42, 1, 14, 'test hello world'),
(43, 1, 14, 'test its fkn working');

-- --------------------------------------------------------

--
-- Table structure for table `commentairecour`
--

CREATE TABLE `commentairecour` (
  `idcomm` int NOT NULL,
  `idClient` int NOT NULL,
  `idCour` int NOT NULL,
  `datecomm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descComm` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentairecour`
--

INSERT INTO `commentairecour` (`idcomm`, `idClient`, `idCour`, `descComm`) VALUES
(26, 0, 11, 'aaaa'),
(27, 0, 11, 'aaaaaaaaa'),
(28, 1, 11, 'si zebbby'),
(29, 0, 11, 'kfghsjhfgkgjbhdfkjg'),
(30, 0, 11, 'test hello world'),
(31, 0, 12, 'dsfdsfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `cour`
--

CREATE TABLE `cour` (
  `idCour` int NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nomcat` varchar(255) NOT NULL,
  `formateur` varchar(255) NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prix` float NOT NULL,
  `niveau` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cour`
--

INSERT INTO `cour` (`idCour`, `nom`, `nomcat`, `formateur`, `description`, `img`, `prix`, `niveau`, `duration`) VALUES
(12, 'hello world', 'gvchgvhg', 'dsf', 'sdfsdf', 'NeVqEMRB.jpg', 2, 'advanced', '2');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `idEvent` int NOT NULL,
  `idFormateur` int NOT NULL,
  `nomEvent` varchar(100) NOT NULL,
  `dateDebut` date NOT NULL,
  `heure` int NOT NULL,
  `duree` int NOT NULL,
  `descEvent` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`idEvent`, `idFormateur`, `nomEvent`, `dateDebut`, `heure`, `duree`, `descEvent`, `image`) VALUES
(14, 5569, 'take your time', '2021-03-09', 23, 5, 'if you are a weed smooker \nthis event is for you', '/images/U.png'),
(25, 15, 'Boxing Day', '2021-05-22', 8, 1, 'you can t tell im rich ', '/images/down.png'),
(19, 123, 'running challenge', '2021-03-02', 5, 2, 'run run run', '/images/commandes.png'),
(11, 66, 'cour python en ligne ', '2021-03-18', 8, 3, 'ratchet bitch suck me while im\ndrivin she s from dallas   ', '/images/web-development.jpg'),
(27, 784, 'cour javaFX', '2021-04-11', 10, 3, 'le meilleur cour en ligne avec\nle prof metro bomin', '/images/notif.png');

-- --------------------------------------------------------

--
-- Table structure for table `inscrievent`
--

CREATE TABLE `inscrievent` (
  `idInscri` int NOT NULL,
  `idClient` int NOT NULL,
  `idEvent` int NOT NULL,
  `dateInscri` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inscrievent`
--

INSERT INTO `inscrievent` (`idInscri`, `idClient`, `idEvent`) VALUES
(61, 3, 14),
(66, 3, 27),
(65, 3, 11),
(69, 1, 14),
(70, 1, 25),
(71, 1, 19);

-- --------------------------------------------------------

--
-- Stand-in structure for view `inscrilist`
-- (See below for the actual view)
--
CREATE TABLE `inscrilist` (
`idInscri` int
,`idClient` int
,`idEvent` int
,`dateInscri` timestamp
,`nom` varchar(50)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `likeevent`
--

CREATE TABLE `likeevent` (
  `idEvent` int NOT NULL,
  `idClient` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likeevent`
--

INSERT INTO `likeevent` (`idEvent`, `idClient`) VALUES
(11, 1),
(14, 3),
(27, 1),
(14, 0),
(14, 1),
(25, 1),
(19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `idcs` int NOT NULL,
  `idcd` int NOT NULL,
  `idevent` int NOT NULL,
  `nbr` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `idpackage` int NOT NULL,
  `nompackage` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `duree` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nbrcours` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`idpackage`, `nompackage`, `prix`, `duree`, `description`, `categorie`, `image`, `nbrcours`) VALUES
(1, 'jvnwsjkvbwihj', 55, '72h', 'gvhgh', 'bbbbbbbbbbbbbbbb', 'wGKswBWd.jpg', 8),
(3, 'iygyi', 95985, '845j', 'zaiiiii', 'gvhghg', 'bLHVnGTC.jpg', 8);

-- --------------------------------------------------------

--
-- Structure for view `inscrilist`
--
DROP TABLE IF EXISTS `inscrilist`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `inscrilist`  AS  select `inscrievent`.`idInscri` AS `idInscri`,`inscrievent`.`idClient` AS `idClient`,`inscrievent`.`idEvent` AS `idEvent`,`inscrievent`.`dateInscri` AS `dateInscri`,`client`.`nom` AS `nom`,`client`.`email` AS `email` from (`inscrievent` join `client`) where (`inscrievent`.`idClient` = `client`.`id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idComm`);

--
-- Indexes for table `commentairecour`
--
ALTER TABLE `commentairecour`
  ADD PRIMARY KEY (`idcomm`);

--
-- Indexes for table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`idCour`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`);

--
-- Indexes for table `inscrievent`
--
ALTER TABLE `inscrievent`
  ADD PRIMARY KEY (`idInscri`),
  ADD KEY `fk_idclient` (`idClient`);

--
-- Indexes for table `likeevent`
--
ALTER TABLE `likeevent`
  ADD KEY `fk_idc` (`idEvent`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`idpackage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idComm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `commentairecour`
--
ALTER TABLE `commentairecour`
  MODIFY `idcomm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `cour`
--
ALTER TABLE `cour`
  MODIFY `idCour` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `idEvent` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `inscrievent`
--
ALTER TABLE `inscrievent`
  MODIFY `idInscri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `idpackage` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
