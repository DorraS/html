<?php
/**
 * Created by PhpStorm.
 * User: saihi
 * Date: 05/03/18
 * Time: 11:18
 */<?php
   try{
       //on se connecte à MySQL
       $bdd = new PDO('mysql:host=localhost;dbname=Place;charset=utf8','root','Dorra1986');

   catch (Exeption $e){
           // En cas d'erreur, on affiche un message et on arrête tout

           die('Erreur : '.$e->getMessage());
       }
// Si tout va bien, on peut continuer
