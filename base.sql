-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 16 août 2021 à 15:25
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Scrum`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'GEL HYDROALCOOLIQUE'),
(2, 'MASQUE'),
(3, 'THERMOMETRE'),
(4, 'BLOUSE'),
(5, 'GANT');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` varchar(2660) NOT NULL,
  `image` varchar(2660) NOT NULL,
  `prix` double NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `image`, `prix`, `id_categorie`) VALUES
(1, 'Gel hydroalcoolique 30 ml', '- Activité antimicrobienne dès 30 secondes.\r\n- Formulation hypoallergénique : convient pour les peaux sensibles et préserve l\'hydratation de la peau.\r\n- Sans colorant ni parfum. Ne contient ni triclosan ni triclocarban.', 'https://cdn-01.media-brady.com/store/sefr/media/catalog/product/cache/17/image/85e4522595efc69f496374d01ef2bf13/1563986777/s/e/sefr_371703_01_std.lang.all.jpg', 1.3, 1),
(2, 'Gel hydroalcoolique 1 Litre', 'Découvrez les gels hydroalcooliques Aniosgel 85 NPC disponibles en 1 litre. Gel hydroalcoolique thixotropique pour le traitement hygiénique et la désinfection chirurgicale des mains par frictions. Testé sous contrôle dermatologique. Hypoallergénique. Sans parfum ni colorant.', 'https://www.google.com/search?q=gel+hydroalcoolique&rlz=1C5CHFA_enFR863FR863&sxsrf=ALeKk01jikDCilFzSZRTIv6yJLf4LNZWxQ:1629123177330&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjArJ7i3LXyAhVPilwKHdmJBFwQ_AUoAnoECAEQBA&biw=1398&bih=765#imgrc=Su29D7IhD0lLiM', 15.5, 1),
(3, '4 Flacons de 500ml - Gel Hydroalcoolique Purity', 'Élimine plus de 99,9% des bactéries et des virus\r\n\r\nTesté dermatologiquement - Ne colle pas aux mains - N\'agresse pas les mains\r\n\r\nSans allergène, ni colorant, ni parfum.', 'https://www.purity.fr/700-thickbox_default/4-flacons-de-500ml-gel-hydroalcoolique-purity-703-sans-parfum.jpg', 20.2, 1),
(4, 'GEL HYDROALCOOLIQUE 5L AVEC POMPE', 'Gel hydroalcoolique 5L avec pompe est adapté pour l’antisepsie des mains dans des établissements accueillant du public, soit utilisé tel quel, soit couplé avec une borne de distribution (vérifier la compatibilité auprès de votre fournisseur de borne).\r\n\r\nEfficacité virucide prouvée sur Coronavirus TGEV selon la norme EN 14476+A2 (2019).', 'https://www.gecco.fr/wp-content/uploads/2020/08/Gel-hydro-5L-Pompe-e-boutique.jpg', 31.9, 1),
(5, '50 masques chirurgicaux bleus', 'Découvrez nos masques chirurgicaux type 2 fabriqués en France. Certifiés par la norme CE, ils offrent une protection efficace contre la COVID-19. Nos masques chirurgicaux fabriqués en France sont conformes à l\'évaluation de la performance des masques à usage médical selon la norme NF EN 14683+AC (2019) et la norme CE selon la directive européenne 93/42/CEE. Conditionnement en sachet de 50 unités et boîte en carton.', 'https://www.sisselpro.fr/27218-large_default/masque-chirurgical-jetable-type-ii-made-in-france-boite-de-50.jpg', 23.2, 2),
(6, 'LOT (10 pcs) Masque CHIRURGICAL ADULTE NOIR', 'Masque Chirurgical Triple couches de type 1. Finition Thermoscellées, avec élastique et pince-nez réglable. Le plus haut niveau de filtration pour les Masques de protection.\r\n\r\nCertifié 2020TM2099.', 'https://www.lactiks.com/20292-tm_thickbox_default/lot-10-pcs-masque-chirurgical-adulte-noir-3-couches-jetable.jpg', 6.3, 2),
(15, 'MASQUES DE PROTECTION FFP2 (BOÎTE DE 20)', 'Efficacité de protection > 99% : A la fois très performants et très confortables, les masques de protection respiratoire FFP2 pliables (MFFP2-10) sont destinés notamment à protéger le personnel soignant contre les infections aéroportées et les asthmatiques contre l’inhalation de substances allergisantes. Les caractéristiques du masque de protection respiratoire FFP2 répondent aux exigences essentielles de santé et de sécurité de la directive européenne 89/686 relative aux Équipements de Protection individuelle. Conformes à la norme EN 149.', 'https://sos-aroma.com/wp-content/uploads/2020/06/masque-ffp2-vue-1_CE.jpg', 39.9, 2),
(16, 'SOYES 50 Pcs Masques FFP2 Blanc Certifiés CE ', 'Testé et certifié CE selon la norme EN 149:2001 + A1:2009 ; Règlement (UE) 2016/425 pour les équipements de protection individuelle.\r\nSystème de filtration multicouche: 5 couches, avec une efficacité de filtration de plus de 94%.\r\nLe Protège-Nez Souple Est Conçu Pour Fournir Un Ajustement Personnalisé Afin D\'Assurer Une Douce Et Un Ajustement Confortable Pour Réduire L\'Irritation De La Peau Tandis Que Les Bandes D\'Oreille Extensibles Assurent est confortable à porter.', 'https://m.media-amazon.com/images/I/71xSXXPhtlS._SX342_.jpg', 45.7, 2),
(17, 'Thermomètre Frontal Adulte IDOIT Thermometre', '【Mesure sans contact et rapide】: IDOIT thermomètre frontal peut mesurer la température en 1 seconde sans contact physique. Le thermomètre infrarouge adopte une conception de mesure à un bouton, qui est rapide et pratique.', 'https://m.media-amazon.com/images/I/61L8OItRTZL._AC_SX425_.jpg', 25.99, 3),
(18, 'Thermomètre Électronique pour la Fièvre', 'THERMOMETRE DIGITAL à Écran LCD – Facile à lire, la température mesurée s\'affiche clairement sur le thermomètre pour vérifier s\'il y a de la fièvre', 'https://m.media-amazon.com/images/I/51dO0CKWo5L._AC_SS450_.jpg', 8.95, 3),
(19, 'Thermomètre auriculaire pour bébé', 'Equipez-vous du thermomètre auriculaire pour bébé de la marque Bébé Confort. En 1 seconde le thermomètre auriculaire vous indiquera de manière précise la température de votre enfant.', 'https://www.madeinbebe.com/boutique/uploads/articles/zoom/thermometre-auriculaire-bebe-confort_OA.jpg', 25.89, 3),
(20, 'Surblouse de protection jetable taille unique', 'Protégez-vous efficacement contre la Covid-19 grâce à notre surblouse de protection jetable 30 grammes. Utile par exemple pour le personnel soignant, les personnes travaillant dans le secteur de l\'alimentaire, de service à la personne... ', 'https://www.drivecase.fr/6865-large_default/surblouse-protection-jetable-taille-unique.jpg', 0.96, 4),
(21, 'Surblouse lavable unisexe en 100% coton verte', 'Fabriquée en Italie, cette surblouse lavable est le parfait atout pour tout professionnel souhaitant se protéger des contacts et des risques de contamination.\r\n\r\nElle est composée de manches longues resserrées au niveau des poignets ainsi que d\'un cordon à nouer dans le dos pour s\'adapter à toutes les morphologies. Fermeture à la nuque par scratch velcro.', 'https://cdn1.blouse-medicale.fr/5521-large_default/surblouse-lavable-100-coton.jpg', 19.9, 4),
(22, 'GANTS JETABLES en latex (100 pcs)', 'L\'indispensable de votre pharmacie !\r\nConseillés pour une utilisation de longue durée.\r\nGants fins à usage et taille unique offrant une excellente dextérité. Gantage et dégantage aisé.', 'https://www.wesco.fr/media/catalog/product/cache/7ccc10e5a8277e9f8854785247b9d41d/5/8/5861_p_5861_d0@p2@xl.jpg', 19.9, 5),
(23, 'GANTS JETABLES en bleu (50 pcs)', 'L\'indispensable de votre pharmacie !\r\nConseillés pour une utilisation de longue durée.\r\nGants fins à usage et taille unique offrant une excellente dextérité. Gantage et dégantage aisé.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7xUFKKGQcrZnAF3Fg-K6d2U2HF9d9uWqkzg&usqp=CAU', 13.7, 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_categorie` (`id_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`);
