<?php


class LogoutControl
{
    /**
     * @return void
     * @author Azamov samandar
     */
    public function index()
    {
        unset($_SESSION['id']);
        session_destroy();
        setcookie("id", null, -1, "/");

        echo "<script>window.location.replace('" . menu(MENU_HOME) . "')</script>";
    }


}