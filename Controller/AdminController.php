<?php



class AdminController
{
    function route()
    {
        $page = $_GET['page'];
        switch ($page) {
            case "AddItem":
                $this->AddItem();
                break;
            
            default:
                # code...
                break;
        }
    }
    function Home()
    {
        require_once  ROOT_PATH."/View/Admin/Home.php";
    }
    function AddItem(){
        require_once  ROOT_PATH."/View/Admin/AddItem.php";
    }
    function __destruct(){
        require_once ROOT_PATH."/View/Layout/Admin/index.php";
    }
}
