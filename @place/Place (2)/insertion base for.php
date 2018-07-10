<?php

    echo "*** insertion base for.php</br></br>";

    echo "Id cours récupéré : ".$l_idCours."</br></br>";

    try
    {
        $requete = $bdd->prepare("INSERT INTO place (idEtudiant, idCours, NuméroPlace) VALUES (?, ?, ?)");
        $requete->bindParam(1, $idEtudiant);
        $requete->bindParam(2, $idCours);
        $requete->bindParam(3, $NumeroPlace);

        $idCours = $l_idCours;
        echo "Id cours à enregistrer : ".$idCours."</br></br>";
        for ($cpt=1;$cpt<=12;$cpt++)
        {
            $idEtudiant = $cpt;
            $NumeroPlace = $cpt;
            try
            {
                $requete->execute();
            }
            catch (PDOException $ex)
            {
                die('Erreur : ' . $ex->getMessage());
            }
        }

        echo "Insertion par boucle effectuée</br></br>";
        $requete->closeCursor();
    }

    catch (PDOException $ex)
    {
        die('Erreur : ' . $ex->getMessage());
    }

?>