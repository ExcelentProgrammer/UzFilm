<?php


/**
 * AllGets
 *
 * @return void
 * getdagi hamma qiymatlarni olish va link qilib berish uchun
 */
function AllGets()
{
    $i = 0;
    $link = "";
    foreach ($_GET as $key => $value) {
        if ($i == 0) {
            $link .= "?" . $key . "=" . $value;
            $i++;
        } else {
            if ($key !== "comment")
                $link .= "&" . $key . "=" . $value;
        }
    }

    return $link;
}

/**
 * menu
 *
 * @param  mixed $x
 * @return void
 * sahisalarni o'zgartirish uchun 
 */
function menu($x)
{
    return "?menu=$x";
}



if ($_GET["menu"] == MENU_LOGOUT) {


    unset($_SESSION['id']);
    session_destroy();
    setcookie("id", null, -1, "/");
    setcookie("pass", null, -1, "/");
    echo "<script>window.location.replace('" . menu(MENU_HOME) . "')</script>";
}




/**
 * @return void
 * @author Azamov Samandar

 * router tizimi
 *
 */
$status = "on";

if (!empty($_GET[MENU_SEARCH]) and empty($_GET['menu'])) echo '<script>window.location.replace("?menu=' . MENU_HOME . '&' . MENU_SEARCH . '=' . $_GET[MENU_SEARCH] . '")</script>';

elseif (!empty($_POST['sub']) and $_POST['type'] == "register") include ROOT_PATH . "/Controller/RegisterControl.php";

elseif (!empty($_POST['sub']) and $_POST['type'] == "login") include ROOT_PATH . "/Controller/LoginControl.php";

elseif ($_GET['menu'] == MENU_CHAT) {
    require ROOT_PATH . "/Controller/ChatController.php";
    $home = new ChatController();
    $home->index();
    $status = "off";
} else {
    $status = "on";

    function route()
    {
        global $status;
        if (!empty($_GET['menu'])) $menu = $_GET['menu'];

        else $menu = null;




        switch ($menu) {

            case MENU_HOME:
                require ROOT_PATH . "/Controller/HomeControl.php";
                $home = new HomeControl();
                $home->index();
                break;






            case MENU_KANBINET:
                require ROOT_PATH . "/Controller/KabinetControl.php";
                $home = new KabinetControl();
                $home->index();
                break;
            case MENU_LOGIN:
                require ROOT_PATH . "/Controller/LoginControl.php";
                $home = new LoginControl();
                $home->index();
                break;
            case MENU_REGISTER:
                require ROOT_PATH . "/Controller/RegisterControl.php";
                $home = new RegisterControl();
                $home->index();
                break;
            case MENU_YORDAM:
                require ROOT_PATH . "/Controller/YordamControl.php";
                $home = new YordamControl();
                $home->index();
                break;
            case MENU_FORGOT:
                require ROOT_PATH . "/Controller/ForgotControl.php";
                $home = new ForgotControl();
                $home->index();
                break;
            case MENU_VIDEO:
                require ROOT_PATH . "/Controller/VideoControl.php";
                $home = new VideoControl();
                $home->index();
                break;
            default:
                echo '<script>window.location.replace("?menu=home")</script>';
                break;
        }
    }
}
