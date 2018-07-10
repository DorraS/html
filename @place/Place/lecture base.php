<?php

    try
    {
        echo 'Connexion à la BD LMS en cours';

        $bdd = new PDO('mysql:host=localhost;dbname=lms;charset=utf8', 'root', '');

        echo "... Connecté ! </br>";
    }

    catch (Exception $ex)
    {
        die('Erreur : ' . $ex->getMessage());
    }

    $requete = $bdd->query("SELECT idCours FROM cours WHERE dateCours = '2018-02-22'");
    $donnees = $requete->fetch();
    $idcours = $donnees['idCours'];
    echo "Cours n° ".$donnees['idCours']." du 22/02/2018</br>";
    $requete->closeCursor();

    $requete = $dbh->prepare("INSERT INTO place (idEtudiant, value) VALUES (?, ?)");
    $requete->bindParam(1, $name);
    $requete->bindParam(2, $value);

    // insertion d'une ligne
    $name = 'one';
    $value = 1;
    $requete->execute();

    // insertion d'une autre ligne avec différentes valeurs
    $name = 'two';
    $value = 2;
    $requete->execute();


    //    $requete = $bdd->prepare("SELECT place.idEtudiant, place.NuméroPlace, etudiant.PrénomEtudiant FROM place INNER JOIN etudiant ON etudiant.IdEtudiant = place.IdEtudiant WHERE idCours = 1");
    //    $requete->execute(1);
    $requete = $bdd->query("SELECT place.idEtudiant, place.NuméroPlace, etudiant.PrénomEtudiant FROM place INNER JOIN etudiant ON etudiant.IdEtudiant = place.IdEtudiant WHERE idCours = 1");

    // On affiche chaque entrée une à une
    while ($donnees = $requete->fetch())
    {
        ?>
        <p>
            <strong>Etudiant</strong> : <?php echo $donnees['PrénomEtudiant']; ?>, place n° <?php echo $donnees['NuméroPlace']; ?> <br/>
        </p>
        <?php
    }

    $requete->closeCursor();

?>