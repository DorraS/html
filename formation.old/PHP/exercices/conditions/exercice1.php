<?php
/**
* Completez ce code source pour que le script affiche
*
*   $num1 est inferieur|superieur|egal a $num2
*
*/
$num1 = $_GET['toto'];
$num2 = $_GET['num2'];
if(!isset($num1) || !isset($num2)) {
	die("Vous devez appeler le script de cette facon : <br /><br /><strong>http://localhost:8080/php/conditions/exercice_1.php?num1=4&num2=3</strong>");
    }

/*
* Completez le code ici
*/

$num1= $_GET['toto'];
$num2= $_GET['num2'];



if($num1<$num2){
    echo '$num1 inférieur à $num2'.'<br>';
}elseif($num1>$num2){
    echo '$num1 supérieur à $num2 '.'<br>';
}else{
    echo '$num1 egal à $num2'.'<br>';
}
