<?php


if (session_status() == 1) {
    session_start();
}
function newsession($x, $y)
{
    $_SESSION[$x] = $y;
}

function delsession()
{
    session_destroy();
}

function checksession($x, $y)
{
    if ($_SESSION[$x] == $y) {
        return true;
    } else {
        return false;
    }

}

function infosession($x)
{
    if (!empty($_SESSION[$x])) {
        return true;
    } else {
        return false;
    }
}

function getsession($x)
{
    return $_SESSION[$x];
}
