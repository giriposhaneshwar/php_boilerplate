<?php

include './config.php';
include './includes/functions.php';
include $ROOT_DIR . '/templates/slider/slider.php';

$baseUrl = str_replace("index.php", "", $_SERVER['PHP_SELF']);
$url = $_SERVER['REQUEST_URI'];
echo $url;
$params = get_query_params($url);
?>

<?php

//
include './includes/header.php';
?>

<?php
echo '<b>Params</b>';
var_dump($params);

if (file_exists("./pages/" . $params["page"] . ".php")) {
    include_once "./pages/" . $params["page"] . ".php";
} else {
    include_once "./pages/error.php";
}
?>

<?php

include './includes/footer.php';
