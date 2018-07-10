<?php
/**
 * Created by PhpStorm.
 * User: ydomenjoud
 * Date: 13/04/18
 * Time: 11:07
 */

class Logger
{
    /**
     * log a message
     * @param $message
     */
    public function log($message) {
        error_log("\033[34m".$message."\033[0m");
    }

    /**
     * log an error message
     * @param $message
     */
    public function error($message) {
        error_log("\033[31m".$message."\033[0m");

    }
}