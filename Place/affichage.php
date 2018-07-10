<?php
/**
 * Created by PhpStorm.
 * User: saihi
 * Date: 27/03/18
 * Time: 15:56
 */


echo "affichage.php";

$req_sel_place = $bdd->prepare("SELECT E.Prénom, E.Nom, P.NuméroPlace  FROM Etudiant E inner join
  Place P on E.idEtudiant = P.idEtudiant WHERE P.idCours = :idCours order by P.NuméroPlace asc");
//j'attribue la variable $datejourr au parametre de la requete DateCours
$req_sel_place->bindParam('idCours', $idCours, PDO::PARAM_INT);
$req_sel_place->execute();

while ($data_sel_place = $req_sel_place->fetch()) {

?>
    <p>
        <strong> Etudiant : <?php echo  $data_sel_place[0]; ?> </strong>, place n°<?php echo $data_sel_place[2]; ?>
    </p>
<?php
}
$req_sel_place ->closeCursor();
?>