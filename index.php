<?php
// error_reporting(0); //xatoliklarni ko'rsatmalik uchun
const ROOT_PATH = __DIR__; // Index fayil manzilini aniqlash
require "config/constant.php"; //constantalar
require "config/session.php"; //sessiyalarni boshqarish
require_once ROOT_PATH . "/config/Connect.php"; //malumotlar bazasiga ulanish uchun class
require "config/user.php"; //fordalanuvchi malumotlarini olish uchun

include "config/route.php"; //router tizimi


require "View/Layout/index.php"; //asosiy shablon
