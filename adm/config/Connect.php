<?php


class Connect
{
    function con(){
        $con = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=UTF8",DB_USER,DB_PASS,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
        return $con;
    }
}
