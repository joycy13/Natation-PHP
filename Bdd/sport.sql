-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 17, 2019 at 03:38 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `adherents`
--

CREATE TABLE `adherents` (
  `idAdherents` int(11) NOT NULL,
  `NomAdherent` varchar(45) NOT NULL,
  `Prenom` varchar(45) NOT NULL,
  `dateDeNaissance` date NOT NULL,
  `Genre` enum('F','M') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adherents`
--

INSERT INTO `adherents` (`idAdherents`, `NomAdherent`, `Prenom`, `dateDeNaissance`, `Genre`) VALUES
(1, 'Elmaleh', 'Joyce', '1998-04-13', 'F'),
(2, 'Souverain', 'Mikhael', '1997-05-13', 'M'),
(3, 'Ohayon', 'Bryan', '1997-06-23', 'M'),
(4, 'Hababou', 'Ruben', '1998-01-31', 'M'),
(5, 'Sellam', 'Cheina', '1997-12-04', 'F'),
(6, 'Toledano', 'Alan', '1996-09-23', 'M'),
(7, 'Sebag', 'Yael', '1998-02-02', 'F'),
(8, 'Bismuth', 'Elie', '1996-03-28', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `adherents_est_inscrit`
--

CREATE TABLE `adherents_est_inscrit` (
  `idInscrit` int(11) NOT NULL,
  `idAdherents` int(11) NOT NULL,
  `idClubs` int(11) NOT NULL,
  `dateInscription` date NOT NULL,
  `anneeDeLicence` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adherents_est_inscrit`
--

INSERT INTO `adherents_est_inscrit` (`idInscrit`, `idAdherents`, `idClubs`, `dateInscription`, `anneeDeLicence`) VALUES
(1, 2, 1, '2018-01-01', '2001'),
(2, 4, 3, '2019-01-07', '2003'),
(3, 6, 5, '2017-02-05', '2005'),
(4, 8, 7, '2016-02-11', '2007'),
(7, 1, 2, '2019-02-27', '2009'),
(8, 3, 4, '2019-02-16', '2011'),
(9, 5, 1, '2018-05-02', '2015'),
(10, 7, 3, '2017-12-06', '2013'),
(11, 6, 6, '2018-10-01', '2017'),
(12, 4, 5, '2018-09-02', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `idClubs` int(11) NOT NULL,
  `NomClub` varchar(45) NOT NULL,
  `codePostal` varchar(45) NOT NULL,
  `Ville` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`idClubs`, `NomClub`, `codePostal`, `Ville`) VALUES
(1, 'Es Massy Natation', '91300', 'Massy'),
(2, 'Cergy Pontoise Natation', '95800', 'Cergy Pontoise'),
(3, 'Mouette de Paris', '75019', 'Paris'),
(4, 'US Créteil Natation', '94000', 'Créteil'),
(5, 'Aas Sarcelles Natation', '95200', 'Sarcelles'),
(6, 'Romainville Aquatique Club 93', '93230', 'Romainville'),
(7, 'RSC Montreuil', '93100', 'Montreuil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adherents`
--
ALTER TABLE `adherents`
  ADD PRIMARY KEY (`idAdherents`);

--
-- Indexes for table `adherents_est_inscrit`
--
ALTER TABLE `adherents_est_inscrit`
  ADD PRIMARY KEY (`idInscrit`),
  ADD KEY `idAdherents` (`idAdherents`),
  ADD KEY `idClubs` (`idClubs`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`idClubs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adherents`
--
ALTER TABLE `adherents`
  MODIFY `idAdherents` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `adherents_est_inscrit`
--
ALTER TABLE `adherents_est_inscrit`
  MODIFY `idInscrit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `idClubs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adherents_est_inscrit`
--
ALTER TABLE `adherents_est_inscrit`
  ADD CONSTRAINT `adherents_est_inscrit_ibfk_1` FOREIGN KEY (`idAdherents`) REFERENCES `adherents` (`idAdherents`),
  ADD CONSTRAINT `adherents_est_inscrit_ibfk_2` FOREIGN KEY (`idClubs`) REFERENCES `clubs` (`idClubs`);
