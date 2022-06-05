<?php

require_once ROOT_PATH . "/Model/VideoModel.php";
require_once ROOT_PATH . "/Model/KabinetModel.php";

class VideoControl extends VideoModel
{
    public function index()
    {
        if ((!empty($_GET['type']) ? $_GET['type']:"") == "serial") {
            $video = $this->GetSerial($_GET['id']);
            $video_type = "serial";
            $vid = $_GET['video_id'];
        } else {
            $video = $this->GetVideo($_GET['id']);
            $video_type = "kino";
            $vid = $_GET['id'];
        }

       
        if (!empty($_GET['comment']))
            $start = $_GET['comment'];
        else
            $start = "0";
        $saveInfo = $this->SaveVideoInfo(getsession("id"), $_GET['id']);
        $AllSerial = $this->GetAllSerial($vid);
        $comments = $this->GetComments($_GET['id'], $_GET['type'], $start);
        $KabinetModel = new KabinetModel();
        require ROOT_PATH . "/View/Video/index.php";
    }
}
