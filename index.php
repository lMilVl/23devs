<?php
session_start();

define("DS", DIRECTORY_SEPARATOR);

require "app" . DS . "core" . DS . "init.php";

$url = $_GET['url'] ?? 'home';
$url = explode(DS, strtolower($url));
$page_name = trim($url[0]);
$filename = "app" . DS . "pages" . DS . $page_name.".php";

if(file_exists($filename))
{
    require_once $filename;
}else
{
    require_once "app" . DS . "pages" . DS . "404.php";
}