<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 13/04/18
 * Time: 11:05
 */


// gestion du routing
$routes_config = [
    '/' => 'controller/home.php',
    '/auth/login' => 'controller/auth/login.php',
    '/auth/logout' => 'controller/auth/logout.php',
    '/user/profile' => 'controller/user/profile.php',
    '/dashboard' => 'controller/dashboard.php',
];