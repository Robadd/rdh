<?php
require_once "routes/NewsRoute.php";
require_once "routes/UserRoute.php";

$path = $_GET['path'];
#echo $path;
$arr = split("[/\]", $path);
$method = $_SERVER['REQUEST_METHOD'];
$handlerRoute = null;

switch ($arr[0]) {
    case 'news':
        $handlerRoute = new NewsRoute();
        break;
    case 'user':
        $handlerRoute = new UserRoute();
        break;
    case 'news':

        break;
    default:

        break;
}

if ($handlerRoute != null) {
    $handlerRoute->getHandler($arr[1]);
}
