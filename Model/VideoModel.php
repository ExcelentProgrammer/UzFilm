<?php

class VideoModel extends Connect
{
    public function GetSerial($id)
    {

        $db = $this->con();
        $res = $db->prepare("SELECT * FROM seriyal WHERE id=:id");
        $res->execute([
            ":id" => $id,
        ]);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function GetVideo($id)
    {

        $db = $this->con();
        $res = $db->prepare("SELECT * FROM video WHERE id=:id");
        $res->execute([
            ":id" => $id,
        ]);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

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

    public function GetAllSerial($video_id)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM `seriyal` where `video_id` = :video_id");
        $res->execute([":video_id" => $video_id]);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
