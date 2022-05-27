<?php
require_once ROOT_PATH . "/Model/SaveModel.php";

class SaveController extends SaveModel
{
    public function index()
    {
        $this->save(getsession("id"), $_GET['id']);
    }
}