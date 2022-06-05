<?php


class add extends Connect
{
    function __construct()
    {
        // file
        $file = $_FILES['img'];
        $file_name = $file['name'];
        $tmp_name = $file['tmp_name'];
        $file_size = fsize($file['size']);
        $file_error = $file['error'];
        $file_type = $file['type'];


        $video_link = $_POST['video_link'] . " ";
        $title = $_POST['video_title'] . " ";
        $caption = $_POST['video_caption'] . " ";
        $type = $_POST['type'];
        $video_p = $_POST['video_p'] . "p";
        $video_o = $_POST['video_o'] . " mb";
        $new = $_POST['new'];
        $id = $_POST['id'];
        require ROOT_PATH . "/config/db_connect.php";

        if ($type == "on" and $new == "on") {
            if (($file_type == "image/jpg" or $file_type == "image/jpeg" or $file_type == "image/png") and $file_error == 0) {
                $img = rand_string() . ".jpg";


                move_uploaded_file($tmp_name, "../Assets/img/card/" . $img);
           
                $con = $this->con();
                $res = $con->prepare("INSERT INTO `video` (`file_name`, `file_url`, `file_img`, `file_size`, `height`, `caption`) VALUES (:file_name,:file_url,:file_img,:file_size,:height,:caption)");
                $res->execute([
                    ":file_name" => $title,
                    ":file_url" => $video_link,
                    ":file_img" => $img,
                    ":file_size" => $video_o,
                    ":height" => $video_p,
                    ":caption" => $caption,
                ]);
                header("location: " . menu(MENU_ADD_ITEM));
            } else {
                //   ?


            }
        } else {
            $img = rand_string() . ".jpg";
            move_uploaded_file($tmp_name, "../Assets/img/card/" . $img);

            $con = $this->con();
            $res = $con->prepare("INSERT INTO `seriyal` (`file_name`, `file_url`, `file_img`, `file_size`, `height`, `caption`,`video_id`) VALUES (:file_name,:file_url,:file_img,:file_size,:height,:caption,:video_id)");
            $res->execute([
                ":file_name" => $title,
                ":file_url" => $video_link,
                ":file_img" => $img,
                ":file_size" => $video_o,
                ":height" => $video_p,
                ":caption" => $caption,
                ":video_id"=>$id,
            ]);
            header("location: " . menu(MENU_ADD_ITEM));
        }
    }
}
