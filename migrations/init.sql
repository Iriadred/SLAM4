--
-- Structure de la table `todos`
--

CREATE TABLE `Users` (
  `idUsers` int(11) NOT NULL,
  `Login` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL ,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `todos`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `todos`
--
ALTER TABLE `Users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT;

