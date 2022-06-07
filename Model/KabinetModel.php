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
    /**
     * rand_string
     *
     * @param  mixed $length
     * @return void
     * avatar uchun nom random qilib beradi
     */
    public function rand_string($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function UpdateProfile($user_id, $name, $email)
    {
        $db = $this->con();
        $file = $_FILES["avatar"];
        $file_name = $this->rand_string().".jpg";
        $tmp_name = $file['tmp_name'];
        $error = $file['error'];
        $type = $file['type'];
        $type = explode("/", $type)[0];
        if ($type == "image" and $error == 0) {
            $res = $db->prepare("SELECT * FROM users WHERE id=:user_id");
            $res->execute([':user_id'=>$user_id]);
            $res = $res->fetchAll(PDO::FETCH_ASSOC);
            $a = $res[0]['avatar'];
            if($a != "avatar.cvg"){
              
                unlink("Assets/img/avatars/".$a);
            }
            move_uploaded_file($tmp_name,"Assets/img/avatars/".$file_name);
            $res = $db->prepare("UPDATE users SET avatar=:avatar WHERE id=:user_id");
            $res->execute([':avatar'=>$file_name,":user_id"=>$user_id]);
        }

        $res = $this->UserInfo($user_id);
        $email1 = $res['email'];


        $res = $db->prepare("SELECT * FROM users WHERE email=?");
        $res->execute([$email]);
        if ($res->rowCount() == 0 or $email == $email1) {
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
        } else {
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
