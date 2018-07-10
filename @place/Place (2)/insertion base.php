<?php

    echo "*** insertion base.php</br></br>";

    try
    {
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (1, 1, 1)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (2, 1, 2)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (3, 1, 3)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (4, 1, 4)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (5, 1, 5)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (6, 1, 6)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (7, 1, 7)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (8, 1, 8)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (9, 1, 9)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (10, 1, 10)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (11, 1, 11)");
        $requete = $bdd->exec("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (12, 1, 12)");

        echo "Insertion effectuée</br></br>";
    }

    catch (PDOException $ex)
    {
        die('Erreur : ' . $ex->getMessage());
    }

?>