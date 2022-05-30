<?php
require "./config/constant.php";
require_once "./config/Connect.php";
class fake extends Connect{
    function __construct()
    {
        $db = $this->con();
        for($i=0;$i<=100;$i++){
            $res = $db->prepare("INSERT INTO seriyal(file_name,file_url,file_img,file_size,height,caption,video_id) VALUES(?,?,?,?,?,?,?)");
            $res->execute([
"1",'2','3','4','5','6','14'
            ]);
        }
    }
}


$fake = new fake();