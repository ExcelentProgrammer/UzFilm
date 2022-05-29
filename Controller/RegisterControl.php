<?php

/** @var array $_POST */
require_once ROOT_PATH . "/Model/RegisterModel.php";
$RegisterModel = new RegisterModel();


/**
 * ro'yhatdan o'tish tugmasini bosganda yani submit bo'lgana foydalanuvchi malumotlarini olish uchun 
 * @author Azamov Samandar
 */

if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $res = $RegisterModel->emailInfo($email);
    if ($res) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $res = $RegisterModel->CreateUser($name, $email, $password);
        $id = $res['id'];
        $password = $res['pass'];
        newsession("id", $id);
        newsession("pass", $password);
        setcookie("id", $id, time() + (86400 * 365), "/");
        setcookie("pass", $password, time() + (86400 * 365), "/");
        echo "<script>window.location.replace('" . menu(MENU_HOME) . "')</script>";
    } else {
        echo "<script>alert('Email oldin ishlatilgan')</script>";
        echo '<script>window.location.replace("?menu=' . MENU_REGISTER . '")</script>';
    }
}


class RegisterControl
{

    /**
     * @return void
     * register controller
     */
    public function index()
    {
        include ROOT_PATH . "/View/Register/index.php";
    }
}
