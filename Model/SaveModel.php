<?php

class SaveModel extends Connect
{
    public function save($user_id, $video_id)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM savevideo WHERE user_id=? and video_id=?");
        $res->execute([$user_id, $video_id]);
        if ($res->rowCount() == 0) {


            $res = $db->prepare("INSERT INTO `savevideo`(`user_id`,`video_id`) VALUES(:user_id,:video_id)");
            $res->execute([
                ":user_id" => $user_id,
                ":video_id" => $video_id,
            ]);
            echo "<script>window.location.replace('" . menu(MENU_VIDEO) . "&id=$video_id" . "')</script>";
        }
    }
}
