<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 25/04/18
 * Time: 09:13
 */

class User
{
    public $id;
    public $email;
    public $firstname;
    public $lastname;
    public $last_login;
    public $updated_at;
    public $created_at;

    function getPresentation()
    {
        if (!empty($this->lastname) && !empty($this->firstname)) {
            return $this->lastname . ' ' . $this->firstname;
        } else {
            return $this -> email;
        }
    }
}