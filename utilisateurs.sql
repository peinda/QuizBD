-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 juin 2020 à 14:08
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizzbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profil` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`prenom`, `nom`, `login`, `password`, `profil`, `avatar`, `score`) VALUES
('Admin', 'ADMIN', 'admin', 'admin', 'joueur', 'téléchargement.png', 0),
('Joueur', 'JOUEUR', 'joueur', 'joueur', 'joueur', '', 0),
('Bou', 'KOUNTA', 'kounta', 'kounta', 'joueur', '', 870),
('Lamine', 'MBAYE', 'mbaye', 'mbaye', 'joueur', 'logo-QuizzSA.png', 560),
('Mouha', 'DIOP', 'mouha', 'mouha', 'joueur', 'background_1.png', 655),
('Ngone', 'NDIAYE', 'ndiaye', 'ndiaye', 'joueur', '', 775),
('Peinda', 'Diallo', 'peinda', 'peinda', 'admin', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
