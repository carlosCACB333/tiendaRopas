<?php
session_start();
session_destroy();
echo $_SERVER['REQUEST_URI'];
echo $_SERVER['HTTP_REFERER'];
$url=$_SERVER['HTTP_REFERER'];
/* header('location:../../plantillas/home.html'); */

header("location: $url"); 