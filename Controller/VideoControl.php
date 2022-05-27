<?php

require_once ROOT_PATH . "/Model/VideoModel.php";

class VideoControl extends VideoModel
{
    public function index()
    {
        if (!empty($_GET['type'])) {
            $video = $this->GetSerial($_GET['id']);
            $video_type = "serial";

        } else {
            $video = $this->GetVideo($_GET['id']);
            $video_type = "kino";
        }
        $saveInfo = $this->SaveVideoInfo(getsession("id"), $_GET['id']);
        $AllSerial = $this->GetAllSerial($video['id']);
        require ROOT_PATH . "/View/Video/index.php";
    }


}