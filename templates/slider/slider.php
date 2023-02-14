<?php

function sliderTemplate($img) {
    return '<div class="sliderItem"> '
            . '<img class="sliderImg" src="' . $img . '" width="100%" alt="slider image"/>'
            . '</div>';
}

function slider($dir = "chicken") {
    $rs = '<div class="sliderContainer">';
    $sliderBaseUrl = "./assets/images/slider/" . $dir . "/";
    $slides = array_diff(scandir($sliderBaseUrl), array('.', '..'));
    if (count($slides) > 0) {

        foreach ($slides as $slide) {
            $img = $sliderBaseUrl . $slide;
            $rs .= sliderTemplate($img);
        }
//        for ($s = 0; $s < count($slides); $s++) {
//            
//        }
    }
    $rs .= "</div>";

    return $rs;
}
?>
<!--<div class="slider-container">
    slider container
</div>-->