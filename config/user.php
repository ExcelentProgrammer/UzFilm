<?php
$db = new Connect();
$db = $db->con();
require_once ROOT_PATH."/Model/KabinetModel.php";
$KabinerModel = new KabinetModel();
if (infosession("id")) {
    $id = getsession("id");
    $res = $KabinerModel->UserInfo($id);

    if ($res['pass'] == getsession("pass")) {

        newsession("login", "1");
        define("user_id", $res['id']);

        define("ism", $res['first_name']);
        define("pass", $res['pass']);
        define("email", $res['email']);
    } else {


        session_destroy();
        newsession("login", "0");
        setcookie("id", null, -1, "/");
        setcookie("pass", null, -1, "/");
        echo "<script>window.location.replace('" . menu(MENU_HOME) . "')</script>";


    }

} else {
    newsession("login", "0");

}