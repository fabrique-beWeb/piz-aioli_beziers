-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 16 Janvier 2017 à 12:12
-- Version du serveur :  5.7.16-0ubuntu0.16.04.1
-- Version de PHP :  7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pizzaioli`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `niveau_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_base`
--

CREATE TABLE `tb_base` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_base`
--

INSERT INTO `tb_base` (`id`, `nom`) VALUES
(1, 'sauce tomate'),
(2, 'crème fraiche');

-- --------------------------------------------------------

--
-- Structure de la table `tb_clients`
--

CREATE TABLE `tb_clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `cp` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `comp_adresse` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `niveau_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_commandes`
--

CREATE TABLE `tb_commandes` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `heure` time NOT NULL,
  `mode_paiement` int(11) NOT NULL,
  `id_livreur` int(11) NOT NULL,
  `id_pizza_client` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_cp_ville`
--

CREATE TABLE `tb_cp_ville` (
  `cp` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_infos_societe`
--

CREATE TABLE `tb_infos_societe` (
  `id` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_ingredients`
--

CREATE TABLE `tb_ingredients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `url_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_ingredients`
--

INSERT INTO `tb_ingredients` (`id`, `nom`, `prix`, `url_img`) VALUES
(1, 'fromage', 1, ''),
(2, 'olive', 1, ''),
(3, 'miel', 5, ''),
(4, 'chèvre', 1, ''),
(5, 'merguez', 2, ''),
(6, 'poulet', 3, ''),
(7, 'bactérie', 4, ''),
(8, 'cholera', 3, ''),
(9, 'ananas', 10, ''),
(10, 'noix de coco', 65, ''),
(11, 'jambon', 45, ''),
(12, 'champignon', 14, ''),
(13, 'oignon', 12, '');

-- --------------------------------------------------------

--
-- Structure de la table `tb_livreurs`
--

CREATE TABLE `tb_livreurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_mode_paiement`
--

CREATE TABLE `tb_mode_paiement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_niveaux_user`
--

CREATE TABLE `tb_niveaux_user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_pate`
--

CREATE TABLE `tb_pate` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `url_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_pizza_clients`
--

CREATE TABLE `tb_pizza_clients` (
  `id` int(11) NOT NULL,
  `pizza_patron` int(11) NOT NULL,
  `ingredient_moins_1` int(11) DEFAULT NULL,
  `ingredient_moins_2` int(11) DEFAULT NULL,
  `ingredient_moins_3` int(11) DEFAULT NULL,
  `ingredient_plus_1` int(11) DEFAULT NULL,
  `ingredient_plus_2` int(11) DEFAULT NULL,
  `ingredient_plus_3` int(11) DEFAULT NULL,
  `taille` int(11) NOT NULL,
  `pate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_pizza_patron`
--

CREATE TABLE `tb_pizza_patron` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ingredient_1` int(11) NOT NULL,
  `ingredient_2` int(11) DEFAULT NULL,
  `ingredient_3` int(11) DEFAULT NULL,
  `ingredient_4` int(11) DEFAULT NULL,
  `ingredient_5` int(11) DEFAULT NULL,
  `ingredient_6` int(11) DEFAULT NULL,
  `ingredient_7` int(11) DEFAULT NULL,
  `ingredient_8` int(11) DEFAULT NULL,
  `ingredient_9` int(11) DEFAULT NULL,
  `ingredient_10` int(11) DEFAULT NULL,
  `base` int(11) NOT NULL,
  `pizofday` tinyint(1) NOT NULL,
  `pizza_au_menu` tinyint(1) NOT NULL,
  `prix` float NOT NULL,
  `url_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tb_pizza_patron`
--

INSERT INTO `tb_pizza_patron` (`id`, `nom`, `ingredient_1`, `ingredient_2`, `ingredient_3`, `ingredient_4`, `ingredient_5`, `ingredient_6`, `ingredient_7`, `ingredient_8`, `ingredient_9`, `ingredient_10`, `base`, `pizofday`, `pizza_au_menu`, `prix`, `url_img`) VALUES
(1, 'pizza dya-rée', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 12.5545, ''),
(2, 'Chèvre miel', 3, 4, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 12, ''),
(3, 'champignon', 3, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 45, '');

-- --------------------------------------------------------

--
-- Structure de la table `tb_statut`
--

CREATE TABLE `tb_statut` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_taille`
--

CREATE TABLE `tb_taille` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_base`
--
ALTER TABLE `tb_base`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_clients`
--
ALTER TABLE `tb_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_commandes`
--
ALTER TABLE `tb_commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_cp_ville`
--
ALTER TABLE `tb_cp_ville`
  ADD PRIMARY KEY (`cp`);

--
-- Index pour la table `tb_infos_societe`
--
ALTER TABLE `tb_infos_societe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_ingredients`
--
ALTER TABLE `tb_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_livreurs`
--
ALTER TABLE `tb_livreurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_mode_paiement`
--
ALTER TABLE `tb_mode_paiement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_niveaux_user`
--
ALTER TABLE `tb_niveaux_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_pate`
--
ALTER TABLE `tb_pate`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_pizza_clients`
--
ALTER TABLE `tb_pizza_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_pizza_patron`
--
ALTER TABLE `tb_pizza_patron`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_statut`
--
ALTER TABLE `tb_statut`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_taille`
--
ALTER TABLE `tb_taille`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_base`
--
ALTER TABLE `tb_base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `tb_clients`
--
ALTER TABLE `tb_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_commandes`
--
ALTER TABLE `tb_commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_infos_societe`
--
ALTER TABLE `tb_infos_societe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_ingredients`
--
ALTER TABLE `tb_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `tb_livreurs`
--
ALTER TABLE `tb_livreurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_mode_paiement`
--
ALTER TABLE `tb_mode_paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_niveaux_user`
--
ALTER TABLE `tb_niveaux_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_pate`
--
ALTER TABLE `tb_pate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_pizza_clients`
--
ALTER TABLE `tb_pizza_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_pizza_patron`
--
ALTER TABLE `tb_pizza_patron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `tb_statut`
--
ALTER TABLE `tb_statut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tb_taille`
--
ALTER TABLE `tb_taille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
