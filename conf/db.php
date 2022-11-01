<?php

class DB{

    const USER = "a377580_f";
    const PASS = "20Aleksej04";
    const HOST = "a377580.mysql.mchost.ru";
    const DB   = "a377580_f";


    public static function connToDB() {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db   = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        return $conn;
    }


}