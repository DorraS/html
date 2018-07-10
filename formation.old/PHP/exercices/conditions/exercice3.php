<?php
/**
* Completez ce code source pour que le script affiche si un nombre est pair ou impair
*
*   $nombre est pair
*   OU
*   $nombre  est impair
*
*/
$nombre = $_GET['nombre'];
if(is_null($nombre)) {}
/*
* Completez le code ici
*
* AIDE :
* L'operateur modulo "%" permet de connaitre le reste d'une division
*/

  if($nombre % 2== 0){
    echo '$nombre est pair'. '<br>';

  }elseif($nombre % 2 == 1){
    echo ' $nombre  est impair'.'<br>';
  }

