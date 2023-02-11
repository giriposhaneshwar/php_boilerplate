<?php

include './config.php';
include './includes/functions.php';
include $ROOT_DIR . '/templates/slider/slider.php';

// route logic
$url_path = $_SERVER['REQUEST_URI'];
$url = parse_url($_SERVER['REQUEST_URI']);
$requestURI = explode('/', $url["path"]);
$scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
$route_arr = array_values($requestURI);

$prms = get_query_params($url_path);
$page = $route_arr[count($route_arr) - 1];
$params = isset($url["query"]) ? explode("&", $url["query"]) : array();
$prms_url = str_replace($BASE_ROUTE, "", $prms['path']);

$page_route = $route_arr[count($route_arr) - 1];

if ($page_route == "") {
    $page = "home";
}

if ($page_route == "products") {
    
}

$isHome = (count($route_arr) > 0 && ($route_arr[count($route_arr) - 1] == '' || $route_arr[count($route_arr) - 1] == 'home')) ? true : false;
?>

<?php

include './includes/header.php';
?>

<?php
var_dump($prms);
echo $prms_url;
include './pages/' . $page . '.php';
?>

<?php

include './includes/footer.php';
