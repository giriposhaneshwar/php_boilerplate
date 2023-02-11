<?php

function sliderTemplate() {
    return '<div> Slide Tempalte </div>';
}

function slider($slides = array()) {
    $rs = '';
    if (count($slides) > 0) {
        for ($s = 0; $s < count($slides); $s++) {
            $rs .= sliderTemplate();
        }
    }

    return $rs;
}
?>
<!--<div class="slider-container">
    slider container
</div>-->