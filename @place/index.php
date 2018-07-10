<?php
   try{
       //on se connecte à MySQL
       $bdd = new PDO('mysql:host=localhost;dbname=Place;charset=utf8','root','Dorra1986');

   catch (Exeption $e){
       // En cas d'erreur, on affiche un message et on arrête tout

       die('Erreur : '.$e->getMessage());
   }
// Si tout va bien, on peut continuer

 // Requete de selection de l'ID du cours du 22/02/2018
    $reponse = $bdd->query("SELECT * FROM  cours WHERE date_cours ='2018-02-22'");
    $donnees = $reponse->fetch();

    $datecours= $donnees['date_cours'];
    $idcours= $donnees['idcours'];
    echo 'le cours n '. $idcours.' du ' . $datecours . ' dans la salle ' . $donnees['salle_cours']. '<br/>';


    // afficher le prenom et le n de place de l'etudiant à la date du 22-02/2018
    $reponse = $bdd->query("SELECT * FROM place inner join etudiant on place.etudiant_idetudiant= etudiant.idetudiant WHERE cours_idcours = 1");

    //loop
    while ($donnees = $reponse->fetch()){
        if($donnees['sexe']=='homme'){
            echo 'Etudiant:<span title="'. $donnees['surnom'] .'">'.$donnees['nom'].'</span> '. 'est assis à la place n'.' '. $donnees['num_place'] . '<br/>';
        } elseif ($donnees['sexe']=='femme'){
            echo 'Etudiante:<span title="'. $donnees['surnom'] .'">'.$donnees['nom'].' '. 'est assise à la place n'.' '. $donnees['num_place'] . '<br/>';

        }
    }
    //si cest pas finit fais ca
        //affiche place
        //affiche etudiant
        //fin du loop
       //On affiche chaque entree une a une
    $reponse->closeCursor();//termine le traitement de la requete

?>