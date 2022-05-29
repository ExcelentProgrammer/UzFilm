<?php


require_once ROOT_PATH . "/Model/HomeModel.php";

class HomeControl extends HomeModel
{

    /**
     * @return void
     * bosh menu
     * @author Azamov Samandar
     *
     */

    public function index()
    {
        $class1 = "";

        if (empty($_GET['page'])) {
            $page = 0;
        } else {
            $page = $_GET['page'];
        }
        $page2 = $page + 30;
        if (empty($_GET['p'])) {
            $p = 0;
        } else {
            $p = $_GET['p'];
        }
        $tfilm = $this->TrendFilms();

        $videolar = $this->Films($page);
        $pageCount = $this->FilmsCount();

        require ROOT_PATH . "/View/Home/index.php";
    }
}
