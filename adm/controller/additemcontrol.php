<?php
function rand_string($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function fsize($size, $round = 2)
{
    $sizes = array(' Bytes', ' Kb', ' Mb', ' Gb', ' Tb');
    $total = count($sizes) - 1;
    for ($i = 0; $size > 1024 && $i < $total; $i++) {
        $size /= 1024;
    }
    return round($size, $round) . $sizes[$i];
}

if (!empty($_POST['video_title'])) {
    require ROOT_PATH . "/model/addmodel.php";
    $new = new add();
}

class additem
{
    function index()
    {
        require ROOT_PATH . "/view/additem/index.php";
    }
}