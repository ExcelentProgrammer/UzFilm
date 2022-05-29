<?php

class LoginModel extends Connect
{
    /**
     * UserInfo
     *
     * @param  mixed $email
     * @return void||array
     * @author Azamov Samandar
     * accountga kirmoqchi bo'lgan email mavjud ekanligini tekshirish uchun
     */
    public function UserInfo($email)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM `users` WHERE `email`=:email");
        $res->execute([
            ":email" => $email,
        ]);
        if ($res->rowCount() != 0)
            return $res->fetch(PDO::FETCH_ASSOC);
        return [];
    }
}
