<?php

$db = new Connect();
$db = $db->con();
require_once ROOT_PATH . "/Model/KabinetModel.php";
$KabinerModel = new KabinetModel();
if (!empty($_COOKIE['id']) and !infosession("id"))
    newsession("id", $_COOKIE['id']);
newsession("pass", $_COOKIE['pass']);
if (infosession("id")) {
    $id = getsession("id");
    $res = $KabinerModel->UserInfo($id);
    if (getsession("login") != 1)
        newsession("login", "1");
    define("user_id", $res['id']);
    define("ism", $res['first_name']);
    define("pass", $res['pass']);
    define("email", $res['email']);
} else {

    newsession("login", "0");
}
