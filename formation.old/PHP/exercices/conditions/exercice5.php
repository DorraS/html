<?php
/**
* Completez ce code source pour que le script affiche
*
*   $num est pair OU $num est impair
*
*   Vous n'avez pas le droit d'utiliser la fonction if, il faut utiliser
*   la fonction switch.
* 
* 
*   Rappel: l'operateur permettant de connaitre le reste d'une division est %
*/
$num = $_GET['num'];

if(isset($num)) {

switch ($num%2){
    case 0:
    echo '$num est pair';
    break;
    case 1:
     echo '$num est impair';
     break;
}
}
?>