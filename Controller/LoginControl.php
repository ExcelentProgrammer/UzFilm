<?php

require_once ROOT_PATH . "/Model/LoginModel.php";
$LoginModel = new LoginModel();
if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $res = $LoginModel->UserInfo($email);
    if (!empty($res)) {


        if ($res['pass'] == sha1($_POST['pass'])) {
            
            newsession("id", $res['id']);
            newsession("pass", $res['pass']);
            setcookie("id", $res['id'], time() + (86400 * 365), "/");
            setcookie("pass", $res['pass'], time() + (86400 * 365), "/");
            echo "<script>window.location.replace('" . menu(MENU_HOME) . "')</script>";
        } else
            echo '<script>window.location.replace("?menu=' . MENU_LOGIN . "&error=email" . '")</script>';
    } else
        echo '<script>window.location.replace("?menu=' . MENU_LOGIN . "&error=email" . '")</script>';
}

class LoginControl
{
    /**
     * @return void
     * login controller
     */
    public function index()
    {

        require ROOT_PATH . "/View/Login/index.php";
    }
}
