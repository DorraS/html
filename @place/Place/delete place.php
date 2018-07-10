<?php
/**
 * Created by PhpStorm.
 * User: sebas
 * Date: 21/02/2018
 * Time: 23:01
 */

    echo "*** delete place.php</br></br>";

    try
    {
        $req_del_place = $bdd->exec("DELETE FROM Place");

        echo "Suppression effectuée</br></br>";
    }

    catch (PDOException $ex)
    {
        die('Erreur : ' . $ex->getMessage());
    }

?>

