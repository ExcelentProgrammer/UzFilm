<?php

class Connect
{
    /**
     * @return PDO
     * @author Azamov Samandar
     * Malumotlar bazasiga ulanish uchun class
     */
    public function con()
    {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=UTF8", DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $pdo;
    }
}
