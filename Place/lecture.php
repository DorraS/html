<?php

    echo "*** lecture.php</br>";

    $datejour = date("Y-m-d");

    echo "test de l'existence du jour, ".$datejour;

    // On prépare la requête de sélection du n° de cours et de la date pour la date du jour
    // Bref, on teste l'existence du cours à cette date
    $req_sel_cours = $bdd->prepare("SELECT idCours, DateCours FROM Cours WHERE DateCours = :DateCours");
    // J'attribue la variable $datejour au paramètre de la requête DateCours
    $req_sel_cours->bindParam('DateCours', $datejour, PDO::PARAM_STR);
    $req_sel_cours->execute();

    // Je récupère le résultat
    $data_sel_cours = $req_sel_cours->fetch();
    // Je libère la requête
    $req_sel_cours->closeCursor();

    if ( empty($data_sel_cours['idCours']) ) {

        echo " n'existe pas !</br>";

        // Si le cours n'existe pas, il faut le créer
        $req_ins_cours = $bdd->prepare("INSERT INTO Cours (DateCours, SalleCours) VALUES (:DateCours, 'A118')");
        $req_ins_cours->bindParam( 'DateCours', $datejour,PDO::PARAM_STR);
        $req_ins_cours->execute();
        $req_ins_cours->closeCursor();

        // Permet de récupérer l'Id de l'enregistrement
        $idCours = $bdd->lastInsertId();

        echo "Id cours : ".$idCours."</br></br>";

        $b_new_cours = True;

    } else {

        $idCours = $data_sel_cours['idCours'];

        echo " existe, id = ".$idCours."</br></br>";

        $b_new_cours = False;

    }

?>