<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 24/04/18
 * Time: 14:22
 */

define('DATABASE_NAME', 'lms');
define('DATABASE_USER', 'lms');
define('DATABASE_PASSWORD', 'bonjour');

try {
    $DATABASE = new PDO('mysql:host=localhost;dbname=lms', 'root', 'Dorra1986');
} catch( Exception $exception ) {
    var_dump($exception);
    die('connexion failure');
}