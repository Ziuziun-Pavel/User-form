<?php

//DB configuration

class DB{
    const USER = "root";
    const PASS = '';
    const HOST = "localhost";
    const DB = "user_form";

    public static function connectToDB() {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        $connect = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        return $connect;

    }
}