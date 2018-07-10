
<?php

 $salut = 'bonjour';

 $prenom= 'Nico';
 echo "text". " " . $salut . " " . $prenom. '<br/>';


 $t =[ "Nico", "Paul", "Dorra"];
 echo $t[1].'<br/>';
 $t2= ["prenom" => "Nico",
    "nom" => "Blaudez", ];

    echo $t2["prenom"].'<br/>';

    const CONSTANTE ="test";
    echo "ceci est un test :". CONSTANTE .'<br/>';

    $nombre1= 6;
    $nombre2= 8;

    $addition = $nombre1 + $nombre2;
    $soustraction = $nombre1 - $nombre2;
    $multiplcation = $nombre1 * $nombre2;
    $division = $nombre1 / $nombre2;
    $modulo= $nombre1 % $nombre2;

        echo $addition.'<br>;
        echo $soustraction.'<br>';
        echo $multiplcation.'<br>';
        echo $division.'<br>';
        echo $modulo.'<br>';

?>
