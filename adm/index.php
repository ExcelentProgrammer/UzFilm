<?php
define("ROOT_PATH", __DIR__);

require_once "config/db.php";
require "config/constant.php";
require_once "./config/Connect.php";
require "config/session.php";
require "config/route.php";


if ($status) {


    require "view/layout/index.php";
}