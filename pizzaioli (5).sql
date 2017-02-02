-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 02 Février 2017 à 16:19
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1
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
-- Structure de la table `tbInfos_Societe`
--

CREATE TABLE `tbInfos_Societe` (
  `id` int(11) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tbInfos_Societe`
--

INSERT INTO `tbInfos_Societe` (`id`, `adresse`, `numero_tel`, `email`, `map`) VALUES
(1, 'san francisco', '656654654665', 'dscsds@csddsc.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbpizzapatron_tbingredients`
--

CREATE TABLE `tbpizzapatron_tbingredients` (
  `tbpizzapatron_id` int(11) NOT NULL,
  `tbingredients_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tbpizzapatron_tbingredients`
--

INSERT INTO `tbpizzapatron_tbingredients` (`tbpizzapatron_id`, `tbingredients_id`) VALUES
(44, 2),
(45, 2),
(46, 1),
(48, 2),
(49, 1),
(49, 2),
(51, 1),
(52, 1),
(52, 2),
(52, 3),
(52, 4),
(52, 5),
(52, 6),
(52, 7),
(52, 8),
(52, 9),
(52, 10),
(53, 2),
(53, 4);

-- --------------------------------------------------------

--
-- Structure de la table `tb_bases`
--

CREATE TABLE `tb_bases` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tb_bases`
--

INSERT INTO `tb_bases` (`id`, `nom`) VALUES
(1, 'Sauce Tomate'),
(2, 'Crème fraîche');

-- --------------------------------------------------------

--
-- Structure de la table `tb_ingredients`
--

CREATE TABLE `tb_ingredients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tb_ingredients`
--

INSERT INTO `tb_ingredients` (`id`, `nom`, `prix`) VALUES
(1, 'fromage', 1),
(2, 'champignon', 1),
(3, 'Mozarella', 1),
(4, 'Chèvre', 1),
(5, 'Chorizo', 1),
(6, 'Peperonni', 1),
(7, 'Poivron', 1),
(8, 'Oignon', 1),
(9, 'Olives', 1),
(10, 'Viande haché', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tb_pizza_patron`
--

CREATE TABLE `tb_pizza_patron` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pizofday` tinyint(1) NOT NULL,
  `pizza_au_menu` tinyint(1) NOT NULL,
  `prix` double NOT NULL,
  `url_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `base` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tb_pizza_patron`
--

INSERT INTO `tb_pizza_patron` (`id`, `nom`, `pizofday`, `pizza_au_menu`, `prix`, `url_img`, `base`) VALUES
(44, 'Pizza bagnat', 0, 1, 12, 'phpsoD535_bagnat.jpg', 2),
(45, 'Pizza banane', 0, 1, 12, 'php8GlCFf_banane.jpg', 1),
(46, 'La chèvre miel', 0, 1, 17, 'phpyWCAO1_chevremiel.jpg', 1),
(47, 'La chorizo', 0, 1, 23, 'phpiF8hR5_chorizo.jpg', 1),
(48, 'La dyarée', 0, 1, 14, 'phpQTjGDL_dya-ree.jpg', 1),
(49, 'Fiesta', 0, 1, 23, 'phpsJdR7H_fiesta.jpg', 2),
(50, 'Gastro', 0, 1, 14, 'php0UASel_gastro.jpg', 1),
(51, 'Hawaienne', 0, 1, 45, 'phpzzJOR1_hawaienne.jpg', 1),
(52, 'Pizza canibale', 1, 1, 32, 'phpmZRDZh_royal.jpg', 1),
(53, 'pizza blanche pour tester', 0, 1, 45, 'phpIpaRNT_comment-se-suicider.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `email`, `role`, `password`) VALUES
(1, 'admin@pizzaioli.fr', 'admin', '123456'),
(2, 'user@pizzaioli.fr', 'user', '123456');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tbInfos_Societe`
--
ALTER TABLE `tbInfos_Societe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbpizzapatron_tbingredients`
--
ALTER TABLE `tbpizzapatron_tbingredients`
  ADD PRIMARY KEY (`tbpizzapatron_id`,`tbingredients_id`),
  ADD KEY `IDX_209C7065693C686A` (`tbpizzapatron_id`),
  ADD KEY `IDX_209C7065DF0374B0` (`tbingredients_id`);

--
-- Index pour la table `tb_bases`
--
ALTER TABLE `tb_bases`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_ingredients`
--
ALTER TABLE `tb_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tb_pizza_patron`
--
ALTER TABLE `tb_pizza_patron`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E64BA3EC0B4FE61` (`base`);

--
-- Index pour la table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UNIQ_7E68F519E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tbInfos_Societe`
--
ALTER TABLE `tbInfos_Societe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `tb_bases`
--
ALTER TABLE `tb_bases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `tb_ingredients`
--
ALTER TABLE `tb_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `tb_pizza_patron`
--
ALTER TABLE `tb_pizza_patron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tbpizzapatron_tbingredients`
--
ALTER TABLE `tbpizzapatron_tbingredients`
  ADD CONSTRAINT `FK_209C7065693C686A` FOREIGN KEY (`tbpizzapatron_id`) REFERENCES `tb_pizza_patron` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_209C7065DF0374B0` FOREIGN KEY (`tbingredients_id`) REFERENCES `tb_ingredients` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tb_pizza_patron`
--
ALTER TABLE `tb_pizza_patron`
  ADD CONSTRAINT `FK_E64BA3EC0B4FE61` FOREIGN KEY (`base`) REFERENCES `tb_bases` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
