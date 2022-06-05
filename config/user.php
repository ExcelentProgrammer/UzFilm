<?php

$db = new Connect();
$db = $db->con();
require_once ROOT_PATH . "/Model/KabinetModel.php";
$KabinerModel = new KabinetModel();
if (!empty($_COOKIE['id']) and !infosession("id"))
    newsession("id", !empty($_COOKIE['id']) ? $_COOKIE['id'] : "");
newsession("pass", !empty($_COOKIE['id']) ? $_COOKIE['id'] : "");
if (infosession("id")) {
    $id = getsession("id");
    $res = $KabinerModel->UserInfo($id);
    if (getsession("login") != 1)
        newsession("login", "1");
    $user_id = $res['id'];
    $user_first_name = $res['first_name'];
    $pass = $res['pass'];
    $email = $res['email'];
    
    define("user_id", $user_id);
    define("ism", $user_first_name);
    define("pass", $pass);
    define("email", $email);
} else {

    newsession("login", "0");
}
