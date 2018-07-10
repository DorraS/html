<?php
/**
 * Created by PhpStorm.
 * User: sebas
 * Date: 21/02/2018
 * Time: 23:01
 */

    echo "*** delete cours.php</br></br>";

    try
    {
        $req_del_cours = $bdd->exec("DELETE FROM Cours");

        echo "Suppression effectuée</br></br>";
    }

    catch (PDOException $ex)
    {
        die('Erreur : ' . $ex->getMessage());
    }

?>

