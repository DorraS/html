START TRANSACTION;

USE `place`;

INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (1, 'Stéphanie', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (2, 'Chihab', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (3, 'Dorra', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (4, 'Paul', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (5, 'Matthias', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (6, 'Manu', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (7, 'Nicolas', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (8, 'Frédéric', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (9, 'Grégoire', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (10, 'Grégory', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (11, 'Maxime', '');
INSERT INTO `place`.`Etudiant` (`idEtudiant`, `Prénom`, `Nom`) VALUES (12, 'Youcef', '');

-- insert into place.Cours values	(1, '2018-02-22', 'A118');

-- insert into place.Place values	(1, 1, 1), (2, 1, 2), (3, 1, 3), (4, 1, 4), (5, 1, 5), (6, 1, 6), (7, 1, 7), (8, 1, 8), (9, 1, 9), (10, 1, 10), (11, 1, 11), (12, 1, 12);
                            
COMMIT;

