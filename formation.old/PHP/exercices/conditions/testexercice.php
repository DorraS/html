<?php
$a= 5;
if ($a<10) {
    echo '$a <10'.'<br>';
}else{
    echo '$a>10'.'<br>';
}

$a= 30;
if($a<10){
echo '$a '.'<br>';
}elseif($a>=10 && $a<20)
{  echo '$a est une valeur';
 } elseif($a >=20 && $a <= 30){
 echo'$a est un tableau'.'<br>';
 }else{
    echo'rien'.'<br>';
}

$a= 30;
$b= 20;
if($a>10 ||$b>$a){
    echo '$b'.'<br>';
}

