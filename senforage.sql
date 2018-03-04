-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 04 Mars 2018 à 14:30
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `senforage`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `num_abonnement` int(11) NOT NULL,
  `date_abonnement` date NOT NULL,
  `description_abonnement` text NOT NULL,
  `id_client` int(11) NOT NULL,
  `num_compteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `abonnement`
--

INSERT INTO `abonnement` (`num_abonnement`, `date_abonnement`, `description_abonnement`, `id_client`, `num_compteur`) VALUES
(2, '2018-03-16', 'Client simple', 2, 3),
(3, '2018-03-14', 'client important ', 2, 4),
(4, '2018-03-15', 'client important operations Ã  accelerer', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom_client` varchar(30) NOT NULL,
  `prenom_client` varchar(40) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `num_telephone` varchar(15) NOT NULL,
  `idvillage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom_client`, `prenom_client`, `adresse`, `num_telephone`, `idvillage`) VALUES
(2, 'Fall', 'Zeynab', 'Grand Dakar', '77-512-23-24', 1),
(3, 'Diop', 'Moustapha', 'Grand Dakar', '77-512-23-23', 1),
(4, 'Diallo', 'Ibrahim', 'Fann', '78-521-36-22', 1),
(8, 'Diop', 'Ibou', 'medina Rue 17x4', '77 788 88 54', 1);

-- --------------------------------------------------------

--
-- Structure de la table `compteur`
--

CREATE TABLE `compteur` (
  `id` int(11) NOT NULL,
  `num_compteur` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `compteur`
--

INSERT INTO `compteur` (`id`, `num_compteur`) VALUES
(3, '32145678965'),
(4, '13349005428');

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

CREATE TABLE `consommation` (
  `num_conso` int(11) NOT NULL,
  `num_compteur` int(11) NOT NULL,
  `volume_cons` int(11) NOT NULL,
  `volume_cons_lettre` varchar(100) NOT NULL,
  `date_prelevement` date NOT NULL,
  `mois` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facturation`
--

CREATE TABLE `facturation` (
  `id_facture` int(11) NOT NULL,
  `id_abonnement` int(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `prix_chiffre` int(11) NOT NULL,
  `prix_lettre` varchar(100) NOT NULL,
  `date_facturation` date NOT NULL,
  `etat` varchar(15) NOT NULL,
  `num_conso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reglement`
--

CREATE TABLE `reglement` (
  `id_reglement` int(11) NOT NULL,
  `id_abonnement` int(11) NOT NULL,
  `id_facture` int(11) NOT NULL,
  `etat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `village`
--

CREATE TABLE `village` (
  `id_village` int(11) NOT NULL,
  `nom_village` varchar(50) NOT NULL,
  `nom_chefvillage` varchar(40) NOT NULL,
  `prenom_chefvillage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `village`
--

INSERT INTO `village` (`id_village`, `nom_village`, `nom_chefvillage`, `prenom_chefvillage`) VALUES
(1, 'Kegneto', 'Diop', 'Moussa');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`num_abonnement`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compteur`
--
ALTER TABLE `compteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD PRIMARY KEY (`num_conso`);

--
-- Index pour la table `facturation`
--
ALTER TABLE `facturation`
  ADD PRIMARY KEY (`id_facture`);

--
-- Index pour la table `reglement`
--
ALTER TABLE `reglement`
  ADD PRIMARY KEY (`id_reglement`);

--
-- Index pour la table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`id_village`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `num_abonnement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `compteur`
--
ALTER TABLE `compteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `consommation`
--
ALTER TABLE `consommation`
  MODIFY `num_conso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `facturation`
--
ALTER TABLE `facturation`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reglement`
--
ALTER TABLE `reglement`
  MODIFY `id_reglement` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `village`
--
ALTER TABLE `village`
  MODIFY `id_village` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
