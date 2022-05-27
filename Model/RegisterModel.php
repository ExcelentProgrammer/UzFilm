<?php

class RegisterModel extends Connect
{
    /**
     * @param $email
     * @return false|PDOStatement
     * malumotlar bazasida email oldin ishlatilgan yoki yo'qligini aniqlash uchun
     */
    public function emailInfo($email)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT `email` FROM `users` WHERE `email`=?");
        $res->execute([$email]);
        if ($res->rowCount() == 0)
            return true;
        return false;
    }

    /**
     * @param $name
     * @param $email
     * @param $password
     * @return mixed
     * @author Azamov Samandar
     * ro'yhatdan o'tgan foydalanuvchi malumotlarini malumotlar bazasiga qo'shish
     */
    public function CreateUser($name, $email, $password)
    {
        $db = $this->con();
        $res = $db->prepare("INSERT INTO `users`(`first_name`, `pass`, `email`,`role`) VALUES(:name,:password,:email,:role)");
        $res->execute([
            ":name" => $name,
            ":password" => $password,
            ":email" => $email,
            ":role" => "user",
        ]);
        $res = $db->prepare("SELECT * FROM `users` WHERE id=?");
        $res->execute([$db->lastInsertId()]);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}