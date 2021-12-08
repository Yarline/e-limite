-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : prfirswelimite.mysql.db
-- Généré le : mer. 08 déc. 2021 à 21:45
-- Version du serveur : 5.6.50-log
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `prfirswelimite`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `body` varchar(5000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `social` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `body` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `testimony`
--

INSERT INTO `testimony` (`id`, `file`, `body`, `name`) VALUES
(3, 'pic-1638984039.png', '“Avant, pendant, après, t’as toujours peur de si quelque chose va te faire “flopper”. C’est ce qui caractérise l’entrepreneuriat.”', 'Emilie Y.'),
(4, 'pic-1638984409.png', '“Je connaissais déjà les bons côtés de l’entrepreneuriat. Une fois mon entreprise créée j’ai pu confirmer mes pensées !”', 'Quentin L.'),
(5, 'pic-1638984428.png', '\"Juste lance toi ! Crois en toi ! Si tu as la motivation et l\'envie, tu pourras réussir dans ton entreprenariat. et n\'hésite surtout pas à demander de l\'aide.\"', 'Lucas B.'),
(6, 'pic-1638984461.png', '“J’avais beaucoup d’appréhension , sur le fait que cela ne fonctionne pas ou de ne pas être à la hauteur ou encore de ne pas prendre des bonnes décisions.”', 'Valérie G.'),
(7, 'pic-1638984482.png', '“On a vraiment le fruit de son travail, on ne compte pas ses heures, c\'est pour soi qu\'on  le fait.”', 'Florian B.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'Alexis', '7560cb42b78d7cc1537122648f3f95d96a72d7b6f1711969f6e220b819172b2d7fdf9b164a769828b6c47f2d781f6f28161186342888979680c558a36b70bc78'),
(5, 'admin', 'a82cf42cbbb52697f73bdfa33d99354f0df8bbd277d4ef34abc1dd4b816322cfa071fa28ea62081ed756c94dba6c944a1107c6e2705cb0eac06f0984eb7f6966');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
