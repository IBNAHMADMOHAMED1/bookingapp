-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 25 fév. 2022 à 17:01
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sqlappreservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `abstract`
--

CREATE TABLE `abstract` (
  `id` int(11) NOT NULL,
  `nom` varchar(11) DEFAULT NULL,
  `peron` varchar(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `prix` int(11) DEFAULT NULL,
  `numberpassger` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abstract`
--

INSERT INTO `abstract` (`id`, `nom`, `peron`, `date`, `prix`, `numberpassger`) VALUES
(121, 'mohamed', 'ibnahmad', '2022-02-25 14:40:19', 60, 3),
(122, 'mohamed', 'ibnahmad', '2022-02-25 14:58:10', 60, 3),
(123, 'mohamed', 'ibnahmad', '2022-02-25 15:00:41', 60, 1),
(124, 'mohamed', 'ibnahmad', '2022-02-25 15:01:43', 60, 1),
(125, 'mohamed', 'ibnahmad', '2022-02-25 15:24:49', 60, 1),
(126, 'mohamed', 'ibnahmad', '2022-02-25 15:25:17', 60, 3),
(127, 'mohamed', 'ibnahmad', '2022-02-25 15:45:43', 60, 3),
(128, 'mohamed', 'ibnahmad', '2022-02-25 15:56:09', 60, 1),
(129, 'mohamed', 'ibnahmad', '2022-02-25 15:56:54', 60, 1),
(130, 'mohamed', 'ibnahmad', '2022-02-25 15:57:11', 60, 2),
(131, 'mohamed', 'ibnahmad', '2022-02-25 16:00:32', 60, 2);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `pernom` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

CREATE TABLE `passager` (
  `idClinet` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `datenaissanc` date DEFAULT NULL,
  `phonenumber` varchar(12) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `passport` varchar(15) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `passager`
--

INSERT INTO `passager` (`idClinet`, `nom`, `prenom`, `age`, `datenaissanc`, `phonenumber`, `email`, `passport`, `password`) VALUES
(1, 'Vel est est ad off', 'Commodo occaecat ut ', 82, '2020-02-29', '+1 (319) 139', 'tydali@mailinator.com', 'Ipsum vel quae ', 'Pa$$w0rd!'),
(2, 'Ibnahmad', 'Mohamed', 21, '2000-11-19', '0684632770', 'ibnahmadmohamed8@gmail.com', 'BG89898', '123234'),
(3, 'Ibnahmad', 'Mohamed', 21, '2000-11-19', '0684632770', 'ibnahmadmohamed8@gmail.com', 'BG89898', '123234'),
(4, 'Quo facere ea neque ', 'Est perferendis min', 11, '1989-01-15', '+1 (939) 302', 'xujyl@mailinator.com', 'Facilis iusto i', 'Pa$$w0rd!'),
(5, 'mohamed', 'ibnahmad', 87, '2005-08-29', '+1 (214) 592', 'm@m', 'In vitae sit qu', 'mm');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idreservation` int(11) NOT NULL,
  `datereservation` timestamp NULL DEFAULT current_timestamp(),
  `idClient` int(11) DEFAULT NULL,
  `idVol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idreservation`, `datereservation`, `idClient`, `idVol`) VALUES
(49, '2022-02-25 14:10:05', 5, 20),
(50, '2022-02-25 14:11:43', 5, 20),
(51, '2022-02-25 14:27:49', 5, 20),
(52, '2022-02-25 14:28:40', 5, 22),
(53, '2022-02-25 14:29:46', 5, 22),
(54, '2022-02-25 14:36:41', 5, 22),
(55, '2022-02-25 14:40:19', 5, 22),
(56, '2022-02-25 14:58:10', 5, 22),
(57, '2022-02-25 15:00:41', 5, 22),
(58, '2022-02-25 15:01:43', 5, 22),
(59, '2022-02-25 15:24:49', 5, 21),
(60, '2022-02-25 15:45:43', 5, 21),
(61, '2022-02-25 15:56:09', 5, 22),
(62, '2022-02-25 15:56:54', 5, 22),
(63, '2022-02-25 15:57:11', 5, 22),
(64, '2022-02-25 16:00:32', 5, 22);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `idticket` int(11) NOT NULL,
  `idVol` int(11) DEFAULT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phonenumber` varchar(12) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `passport` varchar(15) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT curdate(),
  `datenaissanc` date DEFAULT NULL,
  `idClinet` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`idticket`, `idVol`, `nom`, `prenom`, `age`, `phonenumber`, `email`, `passport`, `date`, `datenaissanc`, `idClinet`) VALUES
(26, 21, 'mohamed', 'ibnahmad', 87, '+1 (214) 592', 'm@m', 'In vitae sit qu', '2022-02-25 00:00:00', '2005-08-29', 5),
(27, 21, 'mohamed', 'ibnahmad', 87, '+1 (214) 592', 'm@m', 'In vitae sit qu', '2022-02-25 00:00:00', '2005-08-29', 5),
(28, 21, 'mohamed', 'ibnahmad', 87, '+1 (214) 592', 'm@m', 'In vitae sit qu', '2022-02-25 00:00:00', '2005-08-29', 5),
(29, 21, 'Chandler', 'Eliana', 10, '+1 (491) 348', 'lypujyqoxe@mailinator.com', '42', '2022-02-25 00:00:00', '2002-06-23', 5),
(30, 21, 'Chandler', 'Eliana', 10, '+1 (491) 348', 'lypujyqoxe@mailinator.com', '42', '2022-02-25 00:00:00', '2002-06-23', 5),
(31, 22, 'mohamed', 'ibnahmad', 87, '+1 (214) 592', 'm@m', 'In vitae sit qu', '2022-02-25 00:00:00', '2005-08-29', 5),
(32, 22, 'mohamed', 'ibnahmad', 87, '+1 (214) 592', 'm@m', 'In vitae sit qu', '2022-02-25 00:00:00', '2005-08-29', 5),
(33, 22, 'mohamed', 'ibnahmad', 87, '+1 (214) 592', 'm@m', 'In vitae sit qu', '2022-02-25 00:00:00', '2005-08-29', 5),
(34, 22, 'mohamed', 'ibnahmad', 87, '+1 (214) 592', 'm@m', 'In vitae sit qu', '2022-02-25 00:00:00', '2005-08-29', 5);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `datenaissanc` date DEFAULT NULL,
  `phonenumber` varchar(12) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `passport` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`iduser`, `nom`, `prenom`, `age`, `datenaissanc`, `phonenumber`, `email`, `passport`) VALUES
(1, 'Carey', 'Aaron', 74, '0000-00-00', '+1 (577) 643', 'baco@mailinator.com', '38'),
(2, 'Baker', 'Mary', 27, '0000-00-00', '+1 (253) 294', 'hojyvapu@mailinator.com', '2'),
(3, 'Carey', 'Aaron', 74, '0000-00-00', '+1 (577) 643', 'baco@mailinator.com', '38'),
(4, 'Baker', 'Mary', 27, '0000-00-00', '+1 (253) 294', 'hojyvapu@mailinator.com', '2'),
(5, 'Gonzalez', 'Cameran', 94, '0000-00-00', '+1 (503) 475', 'sukyra@mailinator.com', '89'),
(6, 'Williams', 'Jermaine', 49, '0000-00-00', '+1 (595) 255', 'fonu@mailinator.com', '45'),
(7, 'Gonzalez', 'Cameran', 94, '0000-00-00', '+1 (503) 475', 'sukyra@mailinator.com', '89'),
(8, 'Williams', 'Jermaine', 49, '0000-00-00', '+1 (595) 255', 'fonu@mailinator.com', '45'),
(9, 'Sims', 'Kalia', 32, '0000-00-00', '+1 (262) 968', 'goguvodepe@mailinator.com', '22'),
(10, 'Bauer', 'Serina', 79, '0000-00-00', '+1 (799) 989', 'wyzikogo@mailinator.com', '5'),
(11, 'Sims', 'Kalia', 32, '0000-00-00', '+1 (262) 968', 'goguvodepe@mailinator.com', '22'),
(12, 'Bauer', 'Serina', 79, '0000-00-00', '+1 (799) 989', 'wyzikogo@mailinator.com', '5'),
(13, 'Lott', 'Cassady', 4, '0000-00-00', '+1 (349) 228', 'zuli@mailinator.com', '91'),
(14, 'Miller', 'Rhonda', 79, '0000-00-00', '+1 (292) 562', 'digin@mailinator.com', '16'),
(15, 'Leblanc', 'Quon', 50, '0000-00-00', '+1 (705) 368', 'zozo@mailinator.com', '83'),
(16, 'Leblanc', 'Quon', 50, '0000-00-00', '+1 (705) 368', 'zozo@mailinator.com', '83'),
(17, 'Huff', 'Amery', 34, '0000-00-00', '+1 (815) 229', 'sotasoxo@mailinator.com', '61'),
(18, 'Huff', 'Amery', 34, '0000-00-00', '+1 (815) 229', 'sotasoxo@mailinator.com', '61'),
(19, 'Riddle', 'Yoshio', 66, '0000-00-00', '+1 (383) 945', 'qabewawiw@mailinator.com', '27'),
(20, 'Riddle', 'Yoshio', 66, '0000-00-00', '+1 (383) 945', 'qabewawiw@mailinator.com', '27'),
(21, 'Spence', 'Aquila', 80, '0000-00-00', '+1 (568) 603', 'cutotizi@mailinator.com', '37'),
(22, 'Spence', 'Aquila', 80, '0000-00-00', '+1 (568) 603', 'cutotizi@mailinator.com', '37'),
(23, 'Hampton', 'Fallon', 25, '0000-00-00', '+1 (944) 837', 'zuhufax@mailinator.com', '70'),
(24, 'Hampton', 'Fallon', 25, '0000-00-00', '+1 (944) 837', 'zuhufax@mailinator.com', '70');

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE `vols` (
  `idVol` int(11) NOT NULL,
  `airlines` varchar(254) DEFAULT NULL,
  `numvol` int(11) DEFAULT NULL,
  `depart` varchar(30) DEFAULT NULL,
  `destination` varchar(30) DEFAULT NULL,
  `HeurDepart` datetime DEFAULT NULL,
  `HeurDarrivée` datetime DEFAULT NULL,
  `numberPlac` varchar(10) DEFAULT NULL,
  `prix` varchar(254) DEFAULT NULL,
  `class` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`idVol`, `airlines`, `numvol`, `depart`, `destination`, `HeurDepart`, `HeurDarrivée`, `numberPlac`, `prix`, `class`) VALUES
(20, 'Laborum Repellendus', 39, 'Et sint accusantium ', 'Quia exercitationem ', '1998-11-22 20:58:00', '1970-01-01 01:00:00', '460', '60', NULL),
(21, 'Laborum Repellendus', 39, 'Et sint accusantium ', 'Quia exercitationem ', '1998-11-22 20:58:00', '1970-01-01 01:00:00', '460', '60', NULL),
(22, 'Laborum Repellendus', 39, 'Et sint accusantium ', 'Quia exercitationem ', '1998-11-22 20:58:00', '1970-01-01 01:00:00', '460', '60', NULL),
(23, 'Laborum Repellendus', 39, 'Et sint accusantium ', 'Quia exercitationem ', '1998-11-22 20:58:00', '1970-01-01 01:00:00', '460', '60', 1),
(24, 'Laborum Repellendus', 39, 'Et sint accusantium ', 'Quia exercitationem ', '1998-11-22 20:58:00', '1970-01-01 01:00:00', '460', '60', 1),
(25, 'Laborum Repellendus', 39, 'Et sint accusantium ', 'Quia exercitationem ', '1998-11-22 20:58:00', '1970-01-01 01:00:00', '460', '60', 1),
(26, 'Laborum Repellendus', 39, 'Et sint accusantium ', 'Quia exercitationem ', '1998-11-22 20:58:00', '1970-01-01 01:00:00', '460', '60', 1),
(27, 'Laborum Repellendus', 39, 'Et sint accusantium ', 'Quia exercitationem ', '1998-11-22 20:58:00', '1970-03-09 05:30:00', '460', '60', 1),
(28, 'Laborum Repellendus', 39, 'Et sint accusantium ', 'Quia exercitationem ', '1998-11-22 20:58:00', '1970-03-09 05:30:00', '460', '60', 1),
(29, 'Totam doloremque dol', 88, 'Ipsum saepe aliquid ', 'Sint laborum ea tene', '2010-10-16 23:43:00', '1974-06-07 07:52:00', '460', '32', 1),
(30, 'Ratione laboriosam ', 2, 'Omnis dolor corporis', 'Aut doloribus quisqu', '2017-04-28 04:16:00', '1982-05-19 05:48:00', '460', '22', 1),
(31, 'Ratione laboriosam ', 2, 'Omnis dolor corporis', 'Aut doloribus quisqu', '2017-04-28 04:16:00', '1982-05-19 05:48:00', '460', '22', 1),
(32, 'Voluptatem in ipsam ', 80, 'Id distinctio Faci', 'Quo deserunt quaerat', '1999-10-08 14:43:00', '1982-04-26 05:52:00', '460', '53', 0),
(33, 'Voluptatem in ipsam ', 80, 'Id distinctio Faci', 'Quo deserunt quaerat', '1999-10-08 14:43:00', '1982-04-26 05:52:00', '460', '53', 0),
(34, 'Voluptatem in ipsam ', 80, 'Id distinctio Faci', 'Quo deserunt quaerat', '1999-10-08 14:43:00', '1982-04-26 05:52:00', '460', '53', 0),
(35, 'Blanditiis ratione s', 75, 'Quidem perspiciatis', 'Voluptatem Omnis ut', '1995-11-27 15:12:00', '2012-02-08 12:19:00', '460', '90', 0),
(36, 'Quia eum qui dolorib', 61, 'Velit in impedit at', 'Fugiat nesciunt ut', '1986-02-09 20:08:00', '1976-11-21 06:44:00', '460', '23', 0),
(37, 'Quia eum qui dolorib', 61, 'Velit in impedit at', 'Fugiat nesciunt ut', '1986-02-09 20:08:00', '1976-11-21 06:44:00', '460', '23', 0),
(38, 'Sit eiusmod id in d', 8, 'Corporis ad lorem be', 'Sunt quis et eos do', '1971-11-12 14:49:00', '1986-01-28 01:53:00', '460', '54', 1),
(39, 'Sit eiusmod id in d', 8, 'Corporis ad lorem be', 'Sunt quis et eos do', '1971-11-12 14:49:00', '1986-01-28 01:53:00', '460', '54', 1),
(40, 'Ipsum mollitia aut l', 45, 'Rerum voluptatem of', 'Neque laudantium et', '1988-10-02 02:02:00', '1993-07-05 01:19:00', '460', '41', 1),
(41, 'Ipsum mollitia aut l', 45, 'Rerum voluptatem of', 'Neque laudantium et', '1988-10-02 02:02:00', '1993-07-05 01:19:00', '460', '41', 1),
(45, 'Suscipit enim accusa', 18, 'A', 'Dolorem aut tempor a', '1975-07-01 17:39:00', '1975-10-01 01:42:00', '460', '69', 1),
(46, 'AIR arabia', 3456, 'Safi', 'casa', '2022-02-23 10:50:00', '2022-02-28 10:50:00', '460', '45', 1),
(47, 'ARABIA', 23, 'PARIS', 'PARIS', '2022-02-13 11:13:00', '2022-02-06 11:13:00', '460', '4214', 1),
(48, 'Nam ullam excepturi ', 79, 'New York', 'Casa', '1980-07-05 07:17:00', '2014-04-02 01:00:00', '460', '84', 1),
(49, 'Eveniet suscipit fu', 21, 'Sint quis quam saepe', 'Minus pariatur Sed ', '1990-07-03 09:06:00', '1987-07-07 02:34:00', '460', '3', 1),
(50, 'Neque expedita venia', 53, 'Labore cum sint qui ', 'Non autem proident ', '2009-03-26 05:28:00', '1986-07-04 12:39:00', '460', '1', 1),
(51, 'Dolore aliquam eius ', 13, 'Debitis praesentium ', 'Ullamco labore eiusm', '2020-04-06 09:08:00', '1971-06-25 12:46:00', '460', '29', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abstract`
--
ALTER TABLE `abstract`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `passager`
--
ALTER TABLE `passager`
  ADD PRIMARY KEY (`idClinet`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idreservation`),
  ADD KEY `idClient` (`idClient`),
  ADD KEY `idVol` (`idVol`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`idticket`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Index pour la table `vols`
--
ALTER TABLE `vols`
  ADD PRIMARY KEY (`idVol`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abstract`
--
ALTER TABLE `abstract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `passager`
--
ALTER TABLE `passager`
  MODIFY `idClinet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idreservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `idticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `vols`
--
ALTER TABLE `vols`
  MODIFY `idVol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `passager` (`idClinet`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idVol`) REFERENCES `vols` (`idVol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
