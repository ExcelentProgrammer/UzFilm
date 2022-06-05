<?php
$status = false;
function menu($x)
{
    return "?menu=" . $x;
}

if (!empty($_POST['video_title'])) {
    require ROOT_PATH . "/controller/additemcontrol.php";
} else {
    $status = true;

    function route()
    {
        $menu = $_GET['menu'];
        switch ($menu) {
            case MENU_HOME:

                require ROOT_PATH . "/controller/homecontrol.php";
                $home = new homecontrol();
                $home->index();
                break;
            case MENU_ADD_ITEM:

                require ROOT_PATH . "/controller/additemcontrol.php";
                $home = new additem();
                $home->index();
                break;

            default:

                break;
        }
    }
}