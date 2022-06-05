<?php


class DB
{
    public $db_host;
    public $db_username;
    public $db_pass;
    public $db_name;

    function __construct($db_host, $db_username, $db_pass, $db_name)
    {
        $this->db_host = $db_host;
        $this->db_username = $db_username;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
    }

    function con($x = 'null')
    {
        $con = mysqli_connect($this->db_host, $this->db_username, $this->db_pass, $this->db_name);
        if ($x == "info") {


            if ($con) {
                return "1";
            } else {
                return "0";
            }
        } else {
            return $con;
        }
    }

    function query($x, $y = 'null')
    {
        $res = mysqli_query($this->con(), $x);
        if ($y == "info") {


            if ($res) {
                return "1";
            } else {
                return '0';
            }
        } else {
            return $res;
        }

    }

    function fetch($x, $y = "null")
    {
        $res = mysqli_fetch_all($x);
        if ($y == "info") {
            if ($res) {
                return "1";
            } else {
                return "0";
            }
        } else {
            return $res;
        }
    }

    function fetch_assoc($x, $y = "null")
    {
        $res = mysqli_fetch_assoc($x);
        if ($y == "info") {
            if ($res) {
                return "1";
            } else {
                return "0";
            }
        } else {
            return $res;
        }
    }

}


?>