<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>variables</title>
</head>
<body>
<form method="post" action="exercice1.php">
    <label for="login">Login</label>
    <input  name="login" type="text" id="login"/><br>
    <label for="motdepasse">Mot de passe</label>
    <input name="password" type="password" id="motdepasse"/>
    <input type="submit" value="envoyer"/>
</form>
<PRE>
<?php
    if(count($_POST)>0){
        echo $_POST['login'];
        echo $_POST['password'];
        var_dump($_SERVER  ["REMOTE_ADDR"]) ;
    }

/**
*
* Créer un formulaire qui demande un login et un mot de passe
* puis une fois le formulaire validé, afficher :
* 
* - Le login
* - Le mot de passe
* - L'adresse ip du client
*/
?>
</body>
</html>