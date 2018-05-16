<?php

class Connection {

    private static $conn;

    public static function getConnection(){
        if(!isset($conn)){
            $conn = new PDO("mysql:host=localhost;dbname=parking-control", "root", "");
        }
        return $conn;
    }
}
?>