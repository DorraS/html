<?php
/**
* Completez ce code source pour que le script affiche
*
*   $numX est le plus grand des trois nombres
*
*/
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

if(!isset($num1) || !isset($num2) || !isset($num3)) {

}

/*
* Completez le code ici
*/

if ($num1>$num2 && $num1>$num3){
    echo '$num1 est le plus grand des trois nombres'.'<br>';
    }elseif ($num2>$num3 && $num2>$num1){
    echo '$num2 est le plus grand des trois nombres'.'<br>';
    }elseif ($num3>$num1 && $num3>$num2){
     echo '$num3 est le plus grand des trois nombres'.'<br>';
     }