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
        $qidiruv = "";
        $class1 = "";

        if (empty($_GET['page'])) {
            $page = 0;
        } else {
            $page = $_GET['page'];
        }
        if (empty($_GET['p'])) {
            $p = 0;
        } else {
            $p = $_GET['p'];
        }
        $tfilm = $this->TrendFilms();
        if(empty($_GET[MENU_SEARCH])){
            $videolar = $this->Films($page);
            $pageCount = $this->FilmsCount();
        }else{
            $videolar = $this->Search($_GET[MENU_SEARCH],$page);
            $pageCount = $this->SearchCount($_GET[MENU_SEARCH]);
            $qidiruv = "&".MENU_SEARCH."=".$_GET[MENU_SEARCH];
            $videolar = $videolar;
           

        }

        require ROOT_PATH . "/View/Home/index.php";
    }
}
