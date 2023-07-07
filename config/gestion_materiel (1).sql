-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 06:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_materiel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categorie`
--

CREATE TABLE `tbl_categorie` (
  `id_categ` int(250) NOT NULL,
  `id_etage` int(250) NOT NULL,
  `ref_categ` varchar(250) NOT NULL,
  `nom_categ` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_categorie`
--

INSERT INTO `tbl_categorie` (`id_categ`, `id_etage`, `ref_categ`, `nom_categ`) VALUES
(16, 9, 'Cate-172', 'Ordinateurs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entre_produits`
--

CREATE TABLE `tbl_entre_produits` (
  `id_entrepro` int(11) NOT NULL,
  `ref_entre` varchar(250) NOT NULL,
  `id_pro` int(250) NOT NULL,
  `id_fourni` int(250) NOT NULL,
  `id_util` int(250) NOT NULL,
  `date_entre` date NOT NULL,
  `entre_quanti_pro` int(250) DEFAULT NULL,
  `entre_prix_pro` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_entre_produits`
--

INSERT INTO `tbl_entre_produits` (`id_entrepro`, `ref_entre`, `id_pro`, `id_fourni`, `id_util`, `date_entre`, `entre_quanti_pro`, `entre_prix_pro`) VALUES
(99, 'entre-243', 23, 2, 22, '2023-07-06', 12, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_etagiaire`
--

CREATE TABLE `tbl_etagiaire` (
  `id_etage` int(250) NOT NULL,
  `code_etage` varchar(250) NOT NULL,
  `nom_etage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_etagiaire`
--

INSERT INTO `tbl_etagiaire` (`id_etage`, `code_etage`, `nom_etage`) VALUES
(9, 'Etag-204', 'Machines');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fournisseurs`
--

CREATE TABLE `tbl_fournisseurs` (
  `id_fourni` int(250) NOT NULL,
  `nom_fourni` varchar(250) NOT NULL,
  `address_fourni` varchar(250) NOT NULL,
  `phone_fourni` text NOT NULL,
  `age_fourni` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fournisseurs`
--

INSERT INTO `tbl_fournisseurs` (`id_fourni`, `nom_fourni`, `address_fourni`, `phone_fourni`, `age_fourni`) VALUES
(2, 'Faradja', 'caramaH', '67292878', '25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_historic_pro`
--

CREATE TABLE `tbl_historic_pro` (
  `id_hi` int(250) NOT NULL,
  `id_pro` int(250) NOT NULL,
  `id_fourni` int(250) NOT NULL,
  `id_util` int(250) NOT NULL,
  `date_entre` int(250) NOT NULL,
  `quanti_entre` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_historic_pro`
--

INSERT INTO `tbl_historic_pro` (`id_hi`, `id_pro`, `id_fourni`, `id_util`, `date_entre`, `quanti_entre`) VALUES
(18, 23, 2, 22, 2023, 21),
(19, 23, 2, 22, 2023, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_historic_sorti`
--

CREATE TABLE `tbl_historic_sorti` (
  `id_sorti` int(250) NOT NULL,
  `id_pro` int(250) NOT NULL,
  `id_util` int(250) NOT NULL,
  `date_sorti` date DEFAULT NULL,
  `quantite_sorti` int(250) DEFAULT NULL,
  `prix_sorti` int(250) DEFAULT NULL,
  `prix_total` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_historic_sorti`
--

INSERT INTO `tbl_historic_sorti` (`id_sorti`, `id_pro`, `id_util`, `date_sorti`, `quantite_sorti`, `prix_sorti`, `prix_total`) VALUES
(24, 23, 22, '2023-07-06', 2, 300000, 600000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produits`
--

CREATE TABLE `tbl_produits` (
  `id_pro` int(250) NOT NULL,
  `ref_prod` varchar(220) NOT NULL,
  `nom_prod` varchar(250) NOT NULL,
  `photo_pro` varchar(250) NOT NULL,
  `id_categ` int(250) NOT NULL,
  `prix_pro` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_produits`
--

INSERT INTO `tbl_produits` (`id_pro`, `ref_prod`, `nom_prod`, `photo_pro`, `id_categ`, `prix_pro`) VALUES
(23, 'Prod-71', 'Hp', 'like.jpeg', 16, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_utilisateurs`
--

CREATE TABLE `tbl_utilisateurs` (
  `id_util` int(250) NOT NULL,
  `img_util` varchar(250) DEFAULT NULL,
  `nom_util` varchar(250) NOT NULL,
  `emai_util` varchar(250) NOT NULL,
  `passwo_util` varchar(250) NOT NULL,
  `role_util` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_utilisateurs`
--

INSERT INTO `tbl_utilisateurs` (`id_util`, `img_util`, `nom_util`, `emai_util`, `passwo_util`, `role_util`) VALUES
(18, 'ephpro1.jpg', 'Euphrem ', 'ephrem@gmail.com', '123', 'administrateur'),
(22, 'profil1.jpeg', 'Sifa', 'sifa@gmail.com', '123', 'agent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categorie`
--
ALTER TABLE `tbl_categorie`
  ADD PRIMARY KEY (`id_categ`),
  ADD KEY `id_etage` (`id_etage`);

--
-- Indexes for table `tbl_entre_produits`
--
ALTER TABLE `tbl_entre_produits`
  ADD PRIMARY KEY (`id_entrepro`),
  ADD KEY `id_fourni` (`id_fourni`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Indexes for table `tbl_etagiaire`
--
ALTER TABLE `tbl_etagiaire`
  ADD PRIMARY KEY (`id_etage`);

--
-- Indexes for table `tbl_fournisseurs`
--
ALTER TABLE `tbl_fournisseurs`
  ADD PRIMARY KEY (`id_fourni`);

--
-- Indexes for table `tbl_historic_pro`
--
ALTER TABLE `tbl_historic_pro`
  ADD PRIMARY KEY (`id_hi`),
  ADD KEY `id_pro` (`id_pro`,`id_fourni`);

--
-- Indexes for table `tbl_historic_sorti`
--
ALTER TABLE `tbl_historic_sorti`
  ADD PRIMARY KEY (`id_sorti`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_util` (`id_util`);

--
-- Indexes for table `tbl_produits`
--
ALTER TABLE `tbl_produits`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_categ` (`id_categ`);

--
-- Indexes for table `tbl_utilisateurs`
--
ALTER TABLE `tbl_utilisateurs`
  ADD PRIMARY KEY (`id_util`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categorie`
--
ALTER TABLE `tbl_categorie`
  MODIFY `id_categ` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_entre_produits`
--
ALTER TABLE `tbl_entre_produits`
  MODIFY `id_entrepro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tbl_etagiaire`
--
ALTER TABLE `tbl_etagiaire`
  MODIFY `id_etage` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_fournisseurs`
--
ALTER TABLE `tbl_fournisseurs`
  MODIFY `id_fourni` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_historic_pro`
--
ALTER TABLE `tbl_historic_pro`
  MODIFY `id_hi` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_historic_sorti`
--
ALTER TABLE `tbl_historic_sorti`
  MODIFY `id_sorti` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_produits`
--
ALTER TABLE `tbl_produits`
  MODIFY `id_pro` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_utilisateurs`
--
ALTER TABLE `tbl_utilisateurs`
  MODIFY `id_util` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_categorie`
--
ALTER TABLE `tbl_categorie`
  ADD CONSTRAINT `tbl_categorie_ibfk_1` FOREIGN KEY (`id_etage`) REFERENCES `tbl_etagiaire` (`id_etage`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_entre_produits`
--
ALTER TABLE `tbl_entre_produits`
  ADD CONSTRAINT `tbl_entre_produits_ibfk_2` FOREIGN KEY (`id_fourni`) REFERENCES `tbl_fournisseurs` (`id_fourni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_entre_produits_ibfk_3` FOREIGN KEY (`id_pro`) REFERENCES `tbl_produits` (`id_pro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_historic_pro`
--
ALTER TABLE `tbl_historic_pro`
  ADD CONSTRAINT `tbl_historic_pro_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `tbl_produits` (`id_pro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_historic_sorti`
--
ALTER TABLE `tbl_historic_sorti`
  ADD CONSTRAINT `tbl_historic_sorti_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `tbl_produits` (`id_pro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_historic_sorti_ibfk_2` FOREIGN KEY (`id_util`) REFERENCES `tbl_utilisateurs` (`id_util`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_produits`
--
ALTER TABLE `tbl_produits`
  ADD CONSTRAINT `tbl_produits_ibfk_1` FOREIGN KEY (`id_categ`) REFERENCES `tbl_categorie` (`id_categ`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
