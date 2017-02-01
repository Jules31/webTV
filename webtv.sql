-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 31 Janvier 2017 à 19:22
-- Version du serveur :  5.5.54-0+deb8u1
-- Version de PHP :  5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `webtv`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `auteur`, `titre`, `date`, `article`) VALUES
(1, 'jackie', 'Bonjour je suis Jackie', '2016-12-07', 'akfjbvkaeljfbv amfnvakjfv afvbf vafjibaf varjfgazrf azfgjazr fgazobgaz fgoazbrg azrogbazr gazrjbgaz rgoazbrg'),
(2, 'Michel', 'Bonjour je suis michel', '2016-12-23', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget luctus arcu. Fusce et lorem vitae nunc tincidunt volutpat sed at nisi. Etiam commodo, mauris et tincidunt commodo, mauris nulla placerat sapien, vitae malesuada sem nunc in est. Maecenas non iaculis ex, id condimentum ligula. Nullam ut sagittis mi. Proin eget ligula vitae mi finibus finibus viverra non ex. Praesent condimentum commodo placerat.<br><br> Fusce efficitur dui at ultrices ultricies.Curabitur tincidunt tincidunt tortor ut ornare. Sed vel quam nulla. Curabitur ac sollicitudin leo. Morbi ac dolor posuere, consequat lorem feugiat, vehicula lectus. Vestibulum vel vulputate massa. Sed dictum vehicula neque quis commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer sit amet ante nec mauris tincidunt sodales. Sed tempor semper urna quis dignissim. Nullam aliquam iaculis venenatis.');

-- --------------------------------------------------------

--
-- Structure de la table `streamer`
--

CREATE TABLE IF NOT EXISTS `streamer` (
`id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `lien` varchar(100) NOT NULL,
  `afficher` tinyint(1) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `streamer`
--

INSERT INTO `streamer` (`id`, `nom`, `lien`, `afficher`, `description`) VALUES
(1, 'zerator', 'zerator', 1, 'Description du channel de zerator'),
(2, 'mclaughling', 'mclaughlingtv', 1, 'LJABDLZABECLAZeblajkncajklvnaeljkvbalkjbvalkjrbvalkjfvbalkfvbalkfvbalkfbvalkjbvlakefbvaklefvalkjfbvalkjvaf vafjva fviaefjbv afin aepifuvbj af');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`id` int(11) NOT NULL,
  `lien` varchar(300) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `auteur` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `lien`, `titre`, `auteur`) VALUES
(1, 'https://www.youtube.com/embed/lyoaE7IOCnM', 'Elle est ou Jeanne ?', 'PalmaShow'),
(2, 'what', 'jeanne 2', 'lidel');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `streamer`
--
ALTER TABLE `streamer`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `streamer`
--
ALTER TABLE `streamer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
