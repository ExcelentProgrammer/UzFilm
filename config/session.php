<?php

/**sessiya ishga tushurilgan yoki yo'q ekanligini aniqlash av ishga tushurilmagan bo'lsa ishga tushurish uchun */
if (session_status() == 1) {
    session_start();
}


/**
 * newsession
 *
 * @param  mixed $x
 * @param  mixed $y
 * @return void
 * yangi sessiya qo'shish
 */
function newsession($x, $y)
{
    $_SESSION[$x] = $y;
}

/**
 * delsession
 *
 * @return void
 * hamma sessiyalni o'chirish
 */
function delsession()
{
    session_destroy();
}

/**
 * checksession
 *
 * @param  mixed $x
 * @param  mixed $y
 * @return void
 * sessiyadagi qiymatni solishtirish
 */
function checksession($x, $y)
{
    if ($_SESSION[$x] == $y) return true;

    else return false;
}

/**
 * infosession
 *
 * @param  mixed $x
 * @return void
 * sessiyya mavjud ekanligini tekshirish
 */
function infosession($x)
{
    if (!empty($_SESSION[$x])) return true;

    else return false;
}

/**
 * getsession
 *
 * @param  mixed $x
 * @return void
 * sessiyadan qiymat olish
 */
function getsession($x)
{
    return $_SESSION[$x];
}
