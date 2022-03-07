-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 07 mars 2022 à 12:23
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
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE `commune` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `id_departement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commune`
--

INSERT INTO `commune` (`id`, `libelle`, `id_departement`) VALUES
(1, 'Biscuiterie', 1),
(2, 'Cambérène', 1),
(3, 'Colobane/Fass/Gueule Tapée', 1),
(4, 'Dakar-Plateau', 1),
(5, 'Dieuppeul-Derklé', 1),
(6, 'Fann/PointE', 1),
(7, 'Gorée', 1),
(8, 'Grand Dakar', 1),
(9, 'Grand Yoff', 1),
(10, 'HLM', 1),
(11, 'Hann Bel-Air', 1),
(12, 'Mermoz/Sacré-Coeur', 1),
(13, 'Médina', 1),
(14, 'Ngor', 1),
(15, 'Parcelles Assainies', 1),
(16, 'Patte doie', 1),
(17, 'Sicap-Liberté', 1),
(18, 'Yoff', 1),
(19, 'Golf Sud', 2),
(20, 'Medina Gounass', 2),
(21, 'Sam notaire', 2),
(22, 'Wakhinane', 2),
(23, 'Dalifort', 3),
(24, 'Diamaguene Sicap Mbao', 3),
(25, 'Djida Thiaroye Kao', 3),
(26, 'Guinaw Rail Nord', 3),
(27, 'Malika', 3),
(28, 'Mbao', 3),
(29, 'Pikine Est', 3),
(30, 'Pikine Nord', 3),
(31, 'Pikine Ouest', 3),
(32, 'Pikine Sud', 3),
(33, 'Thiaroye sur mer', 3),
(34, 'Thiaroye gare', 3),
(35, 'Yeumbeul Nord', 3),
(36, 'Yeumbeul SUd', 3);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `id_region` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `libelle`, `id_region`) VALUES
(1, 'Dakar', 1),
(2, 'Guediawaye', 1),
(3, 'Pikine', 1),
(4, 'Rufisque', 1),
(5, 'Bambey', 2),
(6, 'Diourbel', 2),
(7, 'Mbacke', 2),
(8, 'Fatick', 3),
(9, 'Foundiougne', 3),
(10, 'Gossas', 3),
(11, 'Birkelane', 4),
(12, 'Kaffrine', 4),
(13, 'Koungheul', 4),
(14, 'Malem Hodar', 4),
(15, 'Guinguineo', 5),
(16, 'Kaolack', 5),
(17, 'Nioro du Rip', 5),
(18, 'Kedougou', 6),
(19, 'Kolda', 7),
(20, 'Medina Yoro Foulah', 7),
(21, 'Velingara', 7),
(22, 'Kebemer', 8),
(23, 'Linguere', 8),
(24, 'Louga', 8),
(25, 'Kanel', 9),
(26, 'Matam', 9),
(27, 'Ranerou Ferlo', 9),
(28, 'Dagana', 10),
(29, 'Podor', 10),
(30, 'Saint-Louis', 10),
(31, 'Salemata', 6),
(32, 'Saraya', 6),
(33, 'Bounkiling', 11),
(34, 'Goudomp', 11),
(35, 'Sedhiou', 11),
(36, 'Bakel', 12),
(37, 'Goudiry', 12),
(38, 'Koumpentoum', 12),
(39, 'Tambacounda', 12),
(40, 'Mbour', 13),
(41, 'Thies', 13),
(42, 'Tivaoune', 13),
(43, 'Bignona', 14),
(44, 'Oussouye', 14),
(45, 'Ziguinchor', 14);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `organisation`
--

CREATE TABLE `organisation` (
  `id` int(11) NOT NULL,
  `nom_organisation` varchar(255) DEFAULT NULL,
  `nom_repondant` varchar(255) DEFAULT NULL,
  `email_repondant` varchar(255) DEFAULT NULL,
  `numero_repondant` varchar(30) DEFAULT NULL,
  `siege_social` varchar(255) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `registre_commerce` varchar(255) DEFAULT NULL,
  `ninea` varchar(255) DEFAULT NULL,
  `domaine` varchar(255) DEFAULT NULL,
  `page_web` varchar(255) DEFAULT NULL,
  `nbre_employes` int(11) DEFAULT NULL,
  `contrat` tinyint(1) DEFAULT NULL,
  `organigramme` tinyint(1) DEFAULT NULL,
  `cotisations` tinyint(1) DEFAULT NULL,
  `id_quartier` int(11) DEFAULT NULL,
  `id_statut_juridique` int(11) DEFAULT NULL,
  `id_formation` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `id_commune` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quartier`
--

INSERT INTO `quartier` (`id`, `libelle`, `id_commune`) VALUES
(1, 'Bopp', 1),
(2, 'Cité Bissap', 1),
(3, 'Ouagou Niayes 1', 1),
(4, 'Usine ben Tally', 1),
(5, 'Usine niari Tally', 1);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `libelle`) VALUES
(1, 'Dakar'),
(2, 'Diourbel'),
(3, 'Fatick'),
(4, 'Kaffrine'),
(5, 'Kaolack'),
(6, 'Kédougou'),
(7, 'Kolda'),
(8, 'Louga'),
(9, 'Matam'),
(10, 'Saint-Louis'),
(11, 'Sedhiou'),
(12, 'Tambacounda'),
(13, 'Thies'),
(14, 'Ziguinchor');

-- --------------------------------------------------------

--
-- Structure de la table `statut_juridique`
--

CREATE TABLE `statut_juridique` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `statut_juridique`
--

INSERT INTO `statut_juridique` (`id`, `libelle`) VALUES
(1, 'Entreprise individuelle (EI) ou entreprise individuelle à responsabilité limitée (EIRL)'),
(2, 'Entreprise unipersonnelle à responsabilité limitée (EURL)'),
(3, 'Société à responsabilité limitée (SARL)'),
(4, 'Société anonyme (SA)'),
(5, 'Société par actions simplifiée (SAS) ou société par actions simplifiée unipersonnelle (SASU)'),
(6, 'Société en nom collectif (SNC)'),
(7, 'Société coopérative de production (Scop)'),
(8, 'Société en commandite par actions (SCA) et société en commandite simple (SCS)');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `username`, `pass`, `fullname`) VALUES
(21, 'admin', '202cb962ac59075b964b07152d234b70', 'abc'),
(22, 'emmageo3', '5a1ca021359f03b568615e5051439115', 'Emma Geo Kanfany'),
(23, 'kabamamadi3', 'e10adc3949ba59abbe56e057f20f883e', 'Mamadi Kaba');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_departement` (`id_departement`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_region` (`id_region`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_quartier` (`id_quartier`),
  ADD KEY `FK_id_statut_juridique` (`id_statut_juridique`),
  ADD KEY `FK_id_formation` (`id_formation`),
  ADD KEY `FK_id_user` (`id_user`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_commune` (`id_commune`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statut_juridique`
--
ALTER TABLE `statut_juridique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commune`
--
ALTER TABLE `commune`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `statut_juridique`
--
ALTER TABLE `statut_juridique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `FK_id_departement` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id`);

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `FK_id_region` FOREIGN KEY (`id_region`) REFERENCES `region` (`id`);

--
-- Contraintes pour la table `organisation`
--
ALTER TABLE `organisation`
  ADD CONSTRAINT `FK_id_formation` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `FK_id_quartier` FOREIGN KEY (`id_quartier`) REFERENCES `quartier` (`id`),
  ADD CONSTRAINT `FK_id_statut_juridique` FOREIGN KEY (`id_statut_juridique`) REFERENCES `statut_juridique` (`id`),
  ADD CONSTRAINT `FK_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID`);

--
-- Contraintes pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD CONSTRAINT `FK_id_commune` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;