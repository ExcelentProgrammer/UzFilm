<?php
require_once "../config/constant.php";
require_once "../config/Connect.php";
require_once "../Model/SaveModel.php";
$SaveModel = new SaveModel();
class NotRefresh extends SaveModel
{
    function __construct()
    {
        if ($_GET['type'] == "save") {
            $this->SaveVideo($_GET['user_id'], $_GET['video_id']);
        }
    }
    function SaveVideo($user_id, $video_id)
    {
        
        $this->save($user_id, $video_id);
    }
}


$run = new NotRefresh();
