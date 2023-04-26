-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 26 Avril 2023 à 18:11
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rageons`
--
CREATE DATABASE IF NOT EXISTS `rageons` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `rageons`;

-- --------------------------------------------------------

--
-- Structure de la table `en`
--

CREATE TABLE `en` (
  `id` int(11) NOT NULL,
  `project` text COLLATE utf8_bin NOT NULL,
  `pitch` text COLLATE utf8_bin NOT NULL,
  `gameplay` text COLLATE utf8_bin NOT NULL,
  `newsletter` text COLLATE utf8_bin NOT NULL,
  `text1` text COLLATE utf8_bin NOT NULL,
  `text2` text COLLATE utf8_bin NOT NULL,
  `subt1` text COLLATE utf8_bin NOT NULL,
  `subt2` text COLLATE utf8_bin NOT NULL,
  `subt3` text COLLATE utf8_bin NOT NULL,
  `subt4` text COLLATE utf8_bin NOT NULL,
  `subtext1` text COLLATE utf8_bin NOT NULL,
  `subtext2` text COLLATE utf8_bin NOT NULL,
  `subtext3` text COLLATE utf8_bin NOT NULL,
  `subtext4` text COLLATE utf8_bin NOT NULL,
  `contact` text COLLATE utf8_bin NOT NULL,
  `ntext` text COLLATE utf8_bin NOT NULL,
  `footert` text COLLATE utf8_bin NOT NULL,
  `newsb` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `en`
--

INSERT INTO `en` (`id`, `project`, `pitch`, `gameplay`, `newsletter`, `text1`, `text2`, `subt1`, `subt2`, `subt3`, `subt4`, `subtext1`, `subtext2`, `subtext3`, `subtext4`, `contact`, `ntext`, `footert`, `newsb`) VALUES
(1, 'Our Project', 'Pitch', 'Gameplay', 'Newsletter', 'We are 9 students from Gaming Campus. To finish our first and for some our second year in school, we were given a project: Create a Vertical Shooter in python based on the theme, futuristic, flying and birds. Three weeks and three types of student, tech, buisness and art but only one goal: create the best game possible.', 'In year 2030, you are John and today is going to be a good day ! You put on your best outfit, take your overboard and leave the house to go to school. However something happens and your hunt start ! A pigeon just shit on your face and you want revenge. You will soon find out that this pigeon is the last one of his kind and it\'s the head of the city\'s pet. In order to finally catch and kill that stupid pigeon you will have to overcome an army of drones that were sent on you to stop you, but you don\'t care, you are going to succeed no matter what !', 'Attacks', 'Ennemis', 'Platforms', 'Speed', 'If you encounter with an ennemy, you have to make a choice : flee or fight ? You can just dodge their attacks and the game will continue or you can enter a fight. If you choose to fight, you have two types of attacks that you can use, either swing your overboard in their face, either use the power of your glove to attack them in a distance.', 'The drones of the city\'s head won\'t give you any mercy. The army is composed of four types of ennemies each with their own capacities.', 'Beware of the platforms, they are everywhere ! If you bump into one of them, your speed decreases and you might loose because the game won\'t wait for you...', 'The main aspect of Rageon and what makes it so hard is that : the faster you go, the faster the game goes !', 'Contact Us', 'Stay up to date with the release and updates of our game !', 'A platformer where you cannot finish a level without rage against a pigeon !', 'Subscribe');

-- --------------------------------------------------------

--
-- Structure de la table `fr`
--

CREATE TABLE `fr` (
  `id` int(11) NOT NULL,
  `h1` text COLLATE utf8_bin NOT NULL,
  `h2` text COLLATE utf8_bin NOT NULL,
  `p` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
