<?php

    echo "*** connexion.php</br> </br>";

    try
    {
        echo 'Connexion à la BD place en cours';

        $bdd = new PDO('mysql:host=localhost;dbname=place;charset=utf8', 'root', 'Dorra1986');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "... Connecté !</br></br>";
    }

    catch (PDOException $ex)
    {
        die('Erreur : ' . $ex->getMessage());
    }

?>
