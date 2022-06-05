<?php


if (session_status() == 1) {
    session_start();
}
function get($x)
{
    return $_SESSION[$x];
}

function put($x, $y)
{
    $_SESSION[$x] = $y;
}