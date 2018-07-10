<?php

    echo "*** lecture.php</br></br>";

    $datejour = date("Y-m-d");

    echo "test de l'existence du jour, ".$datejour;

    $req_sel_cours = $bdd->prepare("SELECT idCours, dateCours FROM Cours WHERE dateCours = ?");
    $req_sel_cours->bindParam(1,$datejour);
    $req_sel_cours->execute();
    $data_sel_cours = $req_sel_cours->fetch();
    $req_sel_cours->closeCursor();

    if ( empty($data_sel_cours['idCours']) ) {

        echo " n'existe pas !</br></br>";

        $req_ins_cours = $bdd->prepare("INSERT INTO Cours (DateCours, SalleCours) VALUES (?, 'A118')");
        $req_ins_cours->bindParam(1, $DateCours);
        $DateCours = $datejour;
        $req_ins_cours->execute();

        $l_idCours = $bdd->lastInsertId();

        echo "Id cours : ".$l_idCours."</br></br>";
        $req_ins_cours->closeCursor();

    } else {

        $l_idCours = $data_sel_cours['idCours'];

        echo " existe ! ".$data_sel_cours['DateCours']." = n° ".$donnees['idCours']."</br></br>";

    }

?>