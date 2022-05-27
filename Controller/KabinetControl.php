<?php


require_once ROOT_PATH . "/Model/KabinetModel.php";

class KabinetControl extends KabinetModel
{
    /**
     * @return void
     * Foydalanuvchi shaxsiy malumotlari || Kabinet
     */
    public function index()
    {
        $res = $this->SaveVideos(getsession("id"));
        if (isset($_POST['sub'])) {
            $res = $this->UpdateProfile(getsession("id"), $_POST['name'], $_POST['email']);
            if ($res)
                echo '<script>window.location.replace("?menu=' . MENU_KANBINET . "&error=email" . '")</script>';
        }
        require ROOT_PATH . "/View/Kabinet/index.php";
    }


}