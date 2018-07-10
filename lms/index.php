<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 13/04/18
 * Time: 09:23
 */

## DEMARRER LA SESSION
session_start();

// only path and not query string
$requested_url = array_key_exists('PATH_INFO', $_SERVER) ? $_SERVER['PATH_INFO'] : '/';

# initialisation
require 'tools/Logger.php';
require 'config/routes.php';
require 'config/database.php';

# intialisation des utilitaires
$logger = new Logger();

# inclusion des classesphp
require 'model/User.php';


# traitement de la session
// je recupèr21e l'id de l'utilisateur présent dans la session
$user_id = array_key_exists('user_id', $_SESSION) ? $_SESSION['user_id'] : null;
if ($user_id) {
    $logger -> log('loading user');
    // je récupère les informations dans la BDD qui correspondent à cet IDENTIFIANT
    $statement = '
    SELECT 
      id,email,firstname,lastname,last_login,created_at, updated_at
    FROM 
      users 
    WHERE 
      id=:id';
    $request = $DATABASE->prepare($statement);
    $request->bindParam('id', $user_id);
    $request->execute();
    // et je stocke l'objet user correspondant dans la variable $USER
    $count = $request -> rowCount();
    if ($count  === 1 ) {
        $logger -> log('found one user match');
        $USER = $request->fetchObject('User');
    } else {
        $logger -> error('found non uniq user: ' . $count);
    }
} else {
    $logger -> log('no user found');
}


// Est ce que la route existe ?
if (array_key_exists($requested_url, $routes_config)) {
    $logger->log("route found : ${requested_url}");

    // si oui je l'inclus
    $controller = $routes_config[$requested_url];

    // est ce que le fichier de controller existe ?
    if (file_exists($controller)) {
        $logger->log("controller found : ${requested_url}");

        // inclusion du top du site
        require 'view/top.php';

        // inclusion du controller
        require $controller;

        // inclusion du bot du site
        require 'view/bot.php';

    } else {
        $logger->error("controller not found : ${requested_url}");
        require 'controller/errors/404.php';
    }
} else {
    $logger->error("route not found : ${requested_url}");
    require 'controller/errors/404.php';
}

