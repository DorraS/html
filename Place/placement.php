<?php

    echo "*** placement.php</br>";

    echo "Id cours récupéré : ".$idCours."</br></br>";

    for ($etu=1;$etu<=12;$etu++)
    {
        $arr_idEtudiant[$etu] = 0;
    }

    if ( $b_new_cours ){

        for ($etu=1;$etu<=12;$etu++)
        {
            echo "Eudiant ".$etu;

            $b_ok = False;
            while ($b_ok == False) {
                $place = rand(1, 12);

                echo " - Rand : ".$place;
                $b_ok = True;

                for($cpt=1;$cpt<=12;$cpt++){
                    if ($arr_idEtudiant[$cpt] == $place){
                        echo " (X) ";
                        $b_ok = False;
                    }
                }

            }
            $arr_idEtudiant[$etu] = $place;
            echo " - Place déf : ".$arr_idEtudiant[$etu]."</br>";
        }
        echo "</br>";

        // Je prépare la requête d'insertion des places avec 3 paramètres
        $req_ins_place = $bdd->prepare("INSERT INTO Place (idEtudiant, idCours, NuméroPlace) VALUES (:idEtudiant, :idCours, :NumeroPlace)");
        // J'affecte les 3 paramètres aux variables
        // Pas besoin de réinitialiser $idCours puisque ça a été fait avant
        $req_ins_place->bindParam('idEtudiant', $idEtudiant, PDO::PARAM_INT);
        $req_ins_place->bindParam('idCours', $idCours, PDO::PARAM_STR);
        $req_ins_place->bindParam('NumeroPlace', $NumeroPlace, PDO::PARAM_INT);

        // Je boucle sur les étudiants
        for ($cpt=1;$cpt<=12;$cpt++)
        {
            // J'affecte les bonnes valeurs aux variables de paramètre
            $idEtudiant     = $cpt;
            $NumeroPlace    = $arr_idEtudiant[$cpt];

            echo "A enregistrer : ".$idEtudiant." ".$idCours." ".$NumeroPlace."</br>";

            // J'effectue l'enregistrement
            $req_ins_place->execute();
        }

        echo "</br>";
        echo "Insertion placement effectuée</br></br>";
        // Je libère la requête
        $req_ins_place->closeCursor();

    }



?>

