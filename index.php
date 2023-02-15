<?php

include './config.php';

$baseUrl = str_replace("index.php", "", $_SERVER['PHP_SELF']);
$domain = str_replace("index.php", "", $_SERVER['HTTP_HOST']);
$port = str_replace("index.php", "", $_SERVER['SERVER_PORT']);

$url = explode('/', $_GET['page']);

$page = isset($url[0]) ? $url[0] : "";
$product = isset($url[1]) && !empty($url[1]) ? $url[1] : "default";
$productId = isset($url[2]) && !empty($url[2]) ? $url[2] : "";

$arrFiles = array();

$assets = './assets/images/slider/' . $product;
if (file_exists($assets)) {
    $handle = opendir($assets);
    if ($handle) {
        while (($entry = readdir($handle)) !== FALSE) {
            if ($entry != '.' && $entry != '..') {
                $arrFiles[] = $entry;
            }
        }
    }
    closedir($handle);
}

//echo "page : " . $page . '<br />';
//echo "Product : " . $product . '<br />';
//echo "Product Id : " . $productId . '<br />';
//echo $domain . ':' . $port . $baseUrl . $page . '/' . $product . '/' . $productId;
//var_dump($baseUrl);
//echo $domain . ':' . $port;
//$url = $_SERVER['REQUEST_URI'];
//$params = get_query_params($url);
?>

<?php

include './includes/header.php';
?>

<?php

//if (file_exists("./pages/" . $params["page"] . ".php")) {
//    include_once "./pages/" . $params["page"] . ".php";
//} else {
//    include_once "./pages/error.php";
//}
?>

<?php

include './includes/footer.php';
