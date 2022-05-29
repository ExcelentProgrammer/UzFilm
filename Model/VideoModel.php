<?php

class VideoModel extends Connect
{
    function GetComments($video_id, $type)
    {
        if ($type == "serial") {
            $db = $this->con();
            $res = $db->prepare("SELECT * FROM serialcomments WHERE video_id=:video_id ORDER BY id DESC LIMIT 0, 10");
            $res->execute([
                ":video_id" => $video_id
            ]);
            return $res->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $db = $this->con();
            $res = $db->prepare("SELECT * FROM  comments WHERE video_id=:video_id ORDER BY id DESC LIMIT 0, 10");
            $res->execute([
                ":video_id" => $video_id
            ]);
            return $res->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    /**
     * AddComment
     *
     * @param  mixed $user_id
     * @param  mixed $video_id
     * @param  mixed $content
     * @return void
     * @author Azamov Samandar
     * Yangi commentariya qo'shish
     */
    function AddComment($user_id, $video_id, $content, $type, $vid)

    {
        if ($type == "serial") {
            $db = $this->con();
            $res = $db->prepare("INSERT INTO serialcomments(user_id,video_id,content,create_at) VALUES(?,?,?,NOW())");
            $res->execute([
                $user_id,
                $video_id,
                $content,
            ]);
            echo "<script>location.href='" . menu(MENU_VIDEO) . "&id=" . $video_id . "&video_id=" . $vid . "&type=serial'</script>";
        } else {

            $db = $this->con();
            $res = $db->prepare("INSERT INTO comments(user_id,video_id,content,create_at) VALUES(?,?,?,NOW())");
            $res->execute([
                $user_id,
                $video_id,
                $content,
            ]);
            echo "<script>location.href='" . menu(MENU_VIDEO) . "&id=" . $video_id . "&video_id=" . $vid . "'</script>";
        }
    }
    /**
     * GetSerial
     *
     * @param  mixed $id
     * @return void
     * seriallarni ajratib olish uchun
     */
    public function GetSerial($id)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM seriyal WHERE id=:id");
        $res->execute([
            ":id" => $id,
        ]);
        if ($res->rowCount() == 0) {

            echo "<script>location.href='" . menu(MENU_HOME) . "'</script>";
        } else {
            $res = $res->fetch(PDO::FETCH_ASSOC);
            return $res;
        }
    }

    /**
     * GetVideo
     *
     * @param  mixed $id
     * @return void
     * kinolarni ajratib olish uchun
     */
    public function GetVideo($id)
    {

        $db = $this->con();
        $res = $db->prepare("SELECT * FROM video WHERE id=:id");
        $res->execute([
            ":id" => $id,
        ]);
        if ($res->rowCount() == 0)
            echo "<script>location.href='" . menu(MENU_HOME) . "'</script>";
        else {
            $res = $res->fetch(PDO::FETCH_ASSOC);
            return $res;
        }
    }

    /**
     * SaveVideoInfo
     *
     * @param  mixed $user_id
     * @param  mixed $video_id
     * @return void
     * foydalanuvchi o'ziga saqlab olgan videolarni olish uchun
     */
    public function SaveVideoInfo($user_id, $video_id)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT `video_id` FROM `savevideo` WHERE `user_id` = :user_id AND `video_id`= :video_id");
        $res->execute([
            ":user_id" => $user_id,
            ":video_id" => $video_id,
        ]);
        if ($res->rowCount() == 0)
            return true;
        return false;
    }

    /**
     * GetAllSerial
     *
     * @param  mixed $video_id
     * @author Azamov Samandar
     * @return void
     * serial davomini olish uchun
     */
    public function GetAllSerial($video_id)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM `seriyal` where `video_id` = :video_id");
        $res->execute([":video_id" => $video_id]);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
