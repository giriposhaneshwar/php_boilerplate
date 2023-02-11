<?php

function get_query_params($url) {
    if(isset($url) && !empty($url)) {
        $url = parse_url($url);
        
    }
//    isset($url["query"]) ? explode("&", $url["query"]) : array();
    return $url;
}
