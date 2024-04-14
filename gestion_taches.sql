-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 14 avr. 2024 à 22:07
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_taches`
--

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `priorite` varchar(25) NOT NULL,
  `etat` varchar(25) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `libelle`, `description`, `date`, `priorite`, `etat`, `id_user`) VALUES
(1, 'Aménagement d&#039;un champ', 'Avant de débuter la culture, la première étape consiste à préparer le sol. Cette préparation implique le labourage du sol pour le décompacter et favoriser une meilleure aération et un meilleur drainage. Ensuite, des amendements tels que des engrais ou du compost sont ajoutés pour enrichir la fertilité du sol et fournir aux plantes les nutriments nécessaires à leur croissance. Une fois le sol prêt, les graines sont semées ou les plantules pré-cultivées sont transplantées dans le sol. \r\nUn arrosage initial est nécessaire pour favoriser la germination et encourager la croissance initiale des plantes.', '2024-04-14 14:06:00', 'Faible', 'A faire', NULL),
(3, 'Post Récolte de fruit', 'Une fois que les cultures ont atteint leur maturité, il est temps de les récolter. Cela peut impliquer la cueillette des produits à la main ou à l&#039;aide de machines spécialisées, en fonction du type de culture. Après la récolte, les produits sont nettoyés et triés pour éliminer les débris et les produits de qualité inférieure. Ensuite, les produits sont conditionnés dans des emballages appropriés pour le stockage et la vente. Il est crucial de manipuler les produits avec soin pour éviter tout dommage. Les produits sont ensuite stockés dans des conditions optimales pour prolonger leur durée de conservation. Enfin, les produits sont transportés et distribués vers les marchés locaux ou d&#039;autres points de vente, où ils sont disponibles pour les consommateurs', '2024-04-14 10:32:00', 'Elevé', 'En cours', NULL),
(4, 'Recolte', 'Récolte :\r\n\r\nCueille : récolter les fruits, légumes ou autres produits cultivés lorsque ils sont mûrs.\r\nRécolte mécanique ou manuelle selon le type de culture.\r\nPost-récolte :\r\n\r\nNettoyage et tri : nettoyer et trier les produits récoltés pour éliminer les débris et les produits de qualité inférieure.\r\nConditionnement : emballer les produits dans des contenants appropriés pour le stockage et la vente.\r\nStockage : entreposer les produits dans des conditions optimales pour prolonger leur durée de conservation.', '2024-04-14 17:26:00', 'Faible', 'Terminer', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom_complet` varchar(150) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `poste` varchar(75) NOT NULL,
  `telephone` int(9) NOT NULL,
  `adresse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom_complet`, `email`, `mdp`, `poste`, `telephone`, `adresse`) VALUES
(1, 'Amadou Barro', 'barro@gmailcom', 'lumiere12', 'Directeur Général', 770102301, 'keur/Dakar/Sénégal'),
(2, 'Amadou barro', 'barroama23@gmail.com', '123456', 'munisier', 725582, 'thies');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
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
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `fk_user_tache` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
