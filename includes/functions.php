<?php

function get_query_params() {
//    if(isset($url) && !empty($url)) {
//        $url = parse_url($url);        
//    }
//    isset($url["query"]) ? explode("&", $url["query"]) : array();
    $baseUrl = str_replace("index.php", "", $_SERVER['PHP_SELF']);

    $url_params = explode("/", str_replace($baseUrl, "", $_SERVER['REQUEST_URI']));

    $res = array();

    if (count($url_params) > 0) {
        // page 
        if (isset($url_params[0]) && !empty($url_params[0])) {
            $res["page"] = $url_params[0];
        } else {
            $res["page"] = "home";
        }

        // Product
        // if page is home then default product will be chicken / selected product  else product will be emptty

        if ($res["page"] == "home" || $res["page"] == "product") {
            $res["product"] = "chicken";
        }
        if (isset($url_params[1]) && !empty($url_params[1])) {
            $res["product"] = $url_params[1];
        } else {
            $res["product"] = "chicken";
        }
        if ($res["page"] != "home" && $res["page"] != "product") {
            $res["product"] = "";
        }

        // ProductId
        // if product is selectged then product Id is set or else productId will be empty
        if (isset($url_params[2]) && !empty($url_params[2]) && $res["product"] != "") {
            $res["productId"] = $url_params[2];
        } else {
            $res["productId"] = "";
        }
    }

    var_dump($res);

    return $res;
}

function isProductExists($param) {
    return isset($param) && !empty($param) ? $param : "chicken";
}

function isProductIdExists($id) {
    return isset($id) && !empty($id) ? $id : "";
}
