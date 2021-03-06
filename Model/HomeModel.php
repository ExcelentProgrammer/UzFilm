<?php

class HomeModel extends Connect
{
    
    /**
     * @return array|false
     * @author Azamov Samandar
     * tranddagi kinolarni olish uchun funcsiya
     */
    public function TrendFilms()


    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM `video` ORDER BY id DESC LIMIT 0,24");
        $res->execute();
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    
    /**
     * Films
     *
     * @param  mixed $page
     * @return void
     * @author azamov samandar
     */
    public function Films($page)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM `video` ORDER BY id DESC LIMIT $page,30");
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }    
    /**
     * Search
     *
     * @param  mixed $page
     * @return void
     * Film serach
     */
    public function Search($search,$page)
    {

        $db = $this->con();
        $res = $db->prepare("SELECT * FROM `video` WHERE file_name LIKE '%$search%' ORDER BY id DESC LIMIT $page,30");
        $res->execute();
        $count = $res->rowCount();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function FilmsCount()
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM video");
        $res->execute();
        return $res->rowCount();
    }
    public function SearchCount($search)
    {
        $db = $this->con();
        $res = $db->prepare("SELECT * FROM video WHERE file_name LIKE '%$search%'");
        $res->execute();
        return $res->rowCount();
    }

}