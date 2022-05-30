<?php

class KabinetModel extends Connect
{
    /**
     * @param $userid
     * @return array|void
     * @author Azamov Samandar
     * saqlangan kinolarni aniqlash
     *
     */
    public function SaveVideos($userid)
    {

        $db = $this->con();
        $res = $db->prepare("SELECT `video_id` FROM `savevideo` WHERE `user_id`=?");
        $res->execute([$userid]);
        $ids = [];
        if ($res->rowCount() != 0) {
            $res = $res->fetchAll(PDO::FETCH_ASSOC);
            foreach ($res as $r) {
                $ids[] = $r['video_id'];
            }
            $data = [];
            foreach ($ids as $id) {
                $res = $db->prepare("SELECT * FROM video WHERE id=?");
                $res->execute([$id]);
                $data[] = $res->fetch(PDO::FETCH_ASSOC);
            }
            return $data;
        }
    }

    /**
     * @param $user_id
     * @param $name
     * @param $email
     * @return bool
     * @author Azamov Samandar
     * Foydalanuvchi ismi va elektron pochta manzilini o'zgartirish uchun
     *
     */
    public function UpdateProfile($user_id, $name, $email)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM users WHERE email=?");
        $res->execute([$email]);
        if ($res->rowCount() == 0) {
            $res = $db->prepare("UPDATE users SET first_name=:name,email=:email WHERE id=:user_id");
            $res->execute([
                ":name" => $name,
                ":email" => $email,
                ":user_id" => $user_id,
            ]);
            if ($res)
                return true;
            else
                return false;
        }else{
            return false;
        }
    }

    /**
     * @param $id
     * @return mixed
     * @author Azamov Samandar
     * Ro'yhatdam o'tgan foydalanuvchi haqida malumotlarni olish uchun |ism|email|paro'l|
     */
    public function  UserInfo($id)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM `users` WHERE `id` = ?");
        $res->execute([$id]);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}
