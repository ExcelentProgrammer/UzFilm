<?php
require "./config/constant.php";
require_once "./config/Connect.php";
class fake extends Connect{
    function __construct()
    {
        $db = $this->con();
        for($i=0;$i<=100;$i++){
            $res = $db->prepare("INSERT INTO video(file_name,file_url,file_img,file_size,height,caption) VALUES(?,?,?,?,?,?)");
            $res->execute([
"1",'2','1zbjSKG5nk.jpg','4','5','6'
            ]);
        }
    }
}


$fake = new fake();