-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 27 Août 2018 à 12:52
-- Version du serveur :  5.6.37
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `AdvertisingAgencies`
--

-- --------------------------------------------------------

--
-- Structure de la table `Agencies`
--

CREATE TABLE IF NOT EXISTS `Agencies` (
  `id` int(11) NOT NULL,
  `agency_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `Agencies`
--

INSERT INTO `Agencies` (`id`, `agency_details`, `created`, `modified`) VALUES
(1, 'mon agence', '2018-08-27', '2018-08-27');

-- --------------------------------------------------------

--
-- Structure de la table `Codes`
--

CREATE TABLE IF NOT EXISTS `Codes` (
  `id` int(11) NOT NULL,
  `code_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `Codes`
--

INSERT INTO `Codes` (`id`, `code_description`, `created`, `modified`) VALUES
(1, 'gouvernement', '2018-08-27', '2018-08-27');

-- --------------------------------------------------------

--
-- Structure de la table `Invoices`
--

CREATE TABLE IF NOT EXISTS `Invoices` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `invoice_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `Invoices`
--

INSERT INTO `Invoices` (`id`, `user_id`, `status_id`, `invoice_details`, `created`, `modified`) VALUES
(1, 1, 1, '0', '2018-08-27', '2018-08-27'),
(2, 1, 1, 'marketing', '2018-08-27', '2018-08-27');

-- --------------------------------------------------------

--
-- Structure de la table `Status`
--

CREATE TABLE IF NOT EXISTS `Status` (
  `id` int(11) NOT NULL,
  `description_Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `Status`
--

INSERT INTO `Status` (`id`, `description_Status`, `created`, `modified`) VALUES
(1, 'payee', '2018-08-27', '2018-08-27');

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `code_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`id`, `agency_id`, `code_id`, `created`, `modified`, `username`, `email`, `password`) VALUES
(1, 1, 1, '2018-08-27', '2018-08-27', 'lauren', 'lauren@gmail.com', 'lauren1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Agencies`
--
ALTER TABLE `Agencies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Codes`
--
ALTER TABLE `Codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `Invoices`
--
ALTER TABLE `Invoices`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Index pour la table `Status`
--
ALTER TABLE `Status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agency_id` (`agency_id`),
  ADD KEY `code_id` (`code_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Agencies`
--
ALTER TABLE `Agencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Codes`
--
ALTER TABLE `Codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Invoices`
--
ALTER TABLE `Invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Status`
--
ALTER TABLE `Status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Invoices`
--
ALTER TABLE `Invoices`
  ADD CONSTRAINT `FK_Status_Invoices` FOREIGN KEY (`status_id`) REFERENCES `Status` (`id`),
  ADD CONSTRAINT `FK_Users_Invoices` FOREIGN KEY (`user_id`) REFERENCES `Users` (`id`);

--
-- Contraintes pour la table `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `FK_Agencies_Users` FOREIGN KEY (`agency_id`) REFERENCES `Agencies` (`id`),
  ADD CONSTRAINT `FK_Codes_Users` FOREIGN KEY (`code_id`) REFERENCES `Codes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
