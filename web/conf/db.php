<?php

//DB configuration

class DB{
    const USER = "root";
    const PASS = '';
    const HOST = "localhost";
    const DB = "user_form";

    public static function connectToDB() {
        $errorMessage = "Can not connect to DB";

        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        $connect = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        if (!$connect)
            die($errorMessage);
        else {
            return $connect;
        }

    }

}