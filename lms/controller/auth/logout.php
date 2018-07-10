<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 25/04/18
 * Time: 14:28
 */

## LOGOUT USER
session_destroy();
header('Location: /auth/login');