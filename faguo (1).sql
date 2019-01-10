-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 10 Janvier 2019 à 16:14
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `faguo`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `user_id` int(11) NOT NULL,
  `city` tinytext NOT NULL,
  `number` int(11) NOT NULL,
  `street` tinytext NOT NULL,
  `cp` int(11) NOT NULL,
  `country` tinytext NOT NULL,
  `other` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_name`) VALUES
(1, 'Femme'),
(2, 'Homme');

-- --------------------------------------------------------

--
-- Structure de la table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `color`
--

INSERT INTO `color` (`color_id`, `color_name`) VALUES
(1, 'bleu');

-- --------------------------------------------------------

--
-- Structure de la table `disponibility`
--

CREATE TABLE `disponibility` (
  `dispo_id` int(11) NOT NULL,
  `dispo_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `disponibility`
--

INSERT INTO `disponibility` (`dispo_id`, `dispo_name`) VALUES
(1, 'Disponible'),
(2, 'Indisponible');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `note_id` int(11) NOT NULL,
  `note_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `note`
--

INSERT INTO `note` (`note_id`, `note_value`) VALUES
(1, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `order_history`
--

CREATE TABLE `order_history` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `paiement_type` varchar(255) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `path` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`path`, `product_id`, `photo_id`) VALUES
('img/ivy.jpg', 1, 1),
('img/ivy2.jpg', 2, 2),
('img/cypress.jpg', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `price_info`
--

CREATE TABLE `price_info` (
  `price_info_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `%promo` int(11) NOT NULL,
  `priceHT` int(11) NOT NULL,
  `taxe` int(11) NOT NULL,
  `marge` int(11) NOT NULL,
  `final_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `model` tinytext NOT NULL,
  `addingdate` date NOT NULL,
  `buying_price` int(11) NOT NULL,
  `description` tinytext NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `dispo_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `smalldesc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`product_id`, `model`, `addingdate`, `buying_price`, `description`, `color_id`, `size_id`, `dispo_id`, `note_id`, `cat_id`, `smalldesc`) VALUES
(1, 'IVY', '2019-01-08', 129, 'mecouille', 1, 1, 1, 1, 1, 'BASKETS EN CUIR BLANCHE'),
(2, 'IVY', '2019-01-09', 129, 'coucou', 1, 2, 1, 1, 1, 'BASKETS EN CUIR BEIGE'),
(3, 'IVY', '2019-01-09', 129, 'alloalloallo', 1, 1, 1, 2, 1, 'BASKETS EN CUIR MARRON');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `size`
--

INSERT INTO `size` (`size_id`, `size_value`) VALUES
(1, 38),
(2, 39);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `mail` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `firstname` tinytext NOT NULL,
  `password` varchar(256) NOT NULL,
  `newsletter` tinyint(4) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `mail`, `lastname`, `firstname`, `password`, `newsletter`, `role_id`) VALUES
(3, 'blablabla@blabla.bla', 'test', 'test', 'test', 0, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `address`
--
ALTER TABLE `address`
  ADD KEY `user_address` (`user_id`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD KEY `FOREIGN` (`user_id`),
  ADD KEY `PRODUCT_ID` (`product_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Index pour la table `disponibility`
--
ALTER TABLE `disponibility`
  ADD PRIMARY KEY (`dispo_id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`note_id`);

--
-- Index pour la table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `USER_id` (`product_id`,`user_id`),
  ADD KEY `user_order` (`user_id`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `INDEX` (`photo_id`);

--
-- Index pour la table `price_info`
--
ALTER TABLE `price_info`
  ADD PRIMARY KEY (`price_info_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `prix` (`priceHT`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_size` (`size_id`),
  ADD KEY `product_note` (`note_id`),
  ADD KEY `product_color` (`color_id`),
  ADD KEY `product_cat` (`cat_id`),
  ADD KEY `product_dispo` (`dispo_id`),
  ADD KEY `buying_price` (`buying_price`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Index pour la table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `disponibility`
--
ALTER TABLE `disponibility`
  MODIFY `dispo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `price_info`
--
ALTER TABLE `price_info`
  MODIFY `price_info_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `user_address` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `cart_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `product_order` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `user_order` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `phototaking` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Contraintes pour la table `price_info`
--
ALTER TABLE `price_info`
  ADD CONSTRAINT `prix` FOREIGN KEY (`priceHT`) REFERENCES `product` (`buying_price`),
  ADD CONSTRAINT `prodid` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_cat` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`cat_id`),
  ADD CONSTRAINT `product_color` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`),
  ADD CONSTRAINT `product_dispo` FOREIGN KEY (`dispo_id`) REFERENCES `disponibility` (`dispo_id`),
  ADD CONSTRAINT `product_note` FOREIGN KEY (`note_id`) REFERENCES `note` (`note_id`),
  ADD CONSTRAINT `product_size` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
